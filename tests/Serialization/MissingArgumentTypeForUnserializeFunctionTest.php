<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingArgumentTypeForUnserializeFunctionTest extends TestCase
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
        $expected  = "Array\n(\n    [1] => 1\n    [2] => 2\n    [3] => 3\n    [4] => 4\n    [5] => 5\n)";

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

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `converted` in assignment statements.");
    }

    public function testSerializeArgs()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="serialize"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $myArray = $subNode->find('variable[name="myArray"]');

        $this->assertEquals(1, $myArray->count(), "Expecting one variable named `myArray` as argument in the `serialize()` function call.");
    }

    public function testUnserialize()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="unserialize"]');

        $this->assertEquals(1, $call->count(), "Expecting one `unserialize()` function call in the assignment statement.");
    }

    public function testUnserializeArgs()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="unserialize"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $converted = $subNode->find('variable[name="converted"]');

        $this->assertEquals(1, $converted->count(), "Expecting one variable named `converted` as an argument in the `unserialize()` function call.");
    }

    public function testUnserialized()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="unserialized"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `unserialized` in the assignment statement.");
    }

    public function testPrintR()
    {
        $obj = self::$code->find('call[name="print_r"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `print_r()` function call.");
    }

    public function testPrintArgs()
    {
        $obj = self::$code->find('call[name="print_r"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="unserialized"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `unserialized` as an argument in the `print_r()` function call.");
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

        $this->assertEquals(1, $var->count(), "Expecting one array variable named `myArray` in the `for` statement.");
    }

    public function testCounterVarInFor()
    {
        $obj = self::$code->find('construct[name="for"]');
        $nodes = $obj->find('operator[name="assignment"]');
        $arrayFetch = $nodes->find('datatype[name="arrayfetch"]');
        $var = $arrayFetch->find('variable[name="counter"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `counter` in the `myArray` array fetch.");
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
}