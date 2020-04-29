<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingAssignmentOperatorTest extends TestCase
{
    protected static $code;

    public static function setupBeforeClass()
    {
        self::$code = new Code(getcwd() . "/" . getenv("TEST_INDEX"));
    }

    public function testPhpStartTag()
    {
        $checkStart = self::$code->codeStartCheck();

        $this->assertEquals(true, $checkStart, "Expecting the `<?php` tag on the first line.");
    }

    public function testActualCode()
    {
        $evaluator = self::$code->evaluator();
        $evaled    = $evaluator->evaluate();
        $expected  = "serialized numbers:a:5:{i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;}";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testSerialize()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="serialize"]');

        $this->assertEquals(1, $call->count(), "Expecting one `serialize()` function call in the assignment statement.");
    }

    public function testConverted()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="converted"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `converted` in assignment statements.");
    }

    public function testSerializeArgs()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="serialize"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $myArray = $subNode->find('variable[name="myArray"]');

        $this->assertEquals(1, $myArray->count(), "Expecting a variable named `myArray` as argument in the `serialize()` function call.");
    }

    public function testFor()
    {
        $obj = self::$code->find('construct[name="for"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `for` statement.");
    }

    public function testMyArrayInFor()
    {
        $obj = self::$code->find('construct[name="for"]');
        $nodes = $obj->find('operator[name="assignment"]');
        $arrayFetch = $nodes->find('datatype[name="arrayfetch"]');
        $var = $arrayFetch->find('variable[name="myArray"]');

        $this->assertEquals(1, $var->count(), "Expecting an array variable name `myArray` in the `for` statement.");
    }

    public function testCounterVarInFor()
    {
        $obj = self::$code->find('construct[name="for"]');
        $nodes = $obj->find('operator[name="assignment"]');
        $arrayFetch = $nodes->find('datatype[name="arrayfetch"]');
        $var = $arrayFetch->find('variable[name="counter"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable named `counter` in the `myArray` array fetch.");
    }

    public function testNumberVariable()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="number"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `number` in the assignment statement.");
    }
    
    public function testIntegerInAssign()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $int = $nodes->find('integer');

        $this->assertEquals(2, $int->count(), "Expecting two integers in the assignment statement.");
    }

    public function testCounterInFor()
    {
        $obj = self::$code->find('construct[name="for"]');
        $var = $obj->find('variable[name="counter"]');

        $this->assertEquals(5, $var->count(), "Expecting five occurrences of the `counter` variable in the `for` statement.");
    }

    public function testNumberVarInFor()
    {
        $obj = self::$code->find('construct[name="for"]');
        $var = $obj->find('variable[name="number"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the `number` variable in the `for` statement.");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting an `echo` statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $string = $obj->find('string[value="serialized numbers:"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `serialized numbers:` in an `echo` statement.");
    }

    public function testVariableInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $var = $obj->find('variable[name="converted"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable named `converted` in an `echo` statement.");
    }
}