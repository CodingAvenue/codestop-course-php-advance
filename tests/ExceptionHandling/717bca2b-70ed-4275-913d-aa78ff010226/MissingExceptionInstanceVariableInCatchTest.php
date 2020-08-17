<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingExceptionInstanceVariableInCatchTest extends TestCase
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
        $expected  = "Exception caught: The value '0' as a divisor is not allowed.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $obj->count(), "Expecting two `echo` statements.");
    }

    public function testDivideFunction()
    {
        $nodes = self::$code->find('function[name="divide"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `divide()` function declaration.");
    }

    public function testDividendParam()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->getSubnode('params');
        $div = $subNode->find('param[name="dividend"]');

        $this->assertEquals(1, $div->count(), "Expecting a parameter named `dividend` in the `divide()` function declaration.");
    }

    public function testDivisorParam()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->getSubnode('params');
        $div = $subNode->find('param[name="divisor"]');

        $this->assertEquals(1, $div->count(), "Expecting a parameter named `divisor` in the `divide()` function declaration.");
    }

    public function testIfInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `if` statement in the `divide()` function declaration.");
    }

    public function testDivisorInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $var = $subNode->find('variable[name="divisor"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable named `divisor` in the `if` statement of the `divide()` function declaration.");
    }

    public function testElseInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="else"]');

        $this->assertEquals(0, $subNode->count(), "Unexpected `else` statement in the `divide()` function declaration.");
    }

    public function testReturnInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `return` statement in the `divide()` function declaration.");
    }

    public function testDivisorInReturn()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');
        $var = $subNode->find('variable[name="divisor"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `divisor` in the `return` statement of the `divide()` function.");
    }

    public function testDividendInReturn()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');
        $var = $subNode->find('variable[name="dividend"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `dividend` in the `return` statement of the `divide()` function.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Exception"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Exception' class.");
    }

    public function testInstantiationArgs()
    {
        $nodes = self::$code->find('instantiate[class="Exception"]');
        $subNode = $nodes->getSubnode('args');
        $string = $subNode->find('string[value="The value \'0\' as a divisor is not allowed."]');

        $this->assertEquals(1, $string->count(), "Expecting an argument string `The value '0' as a divisor is not allowed.` in an instantiation statement of the 'Exception' class.");
    }

    public function testGetMessageInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getMessage", variable="e"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getMessage()` method call of `e` in the `echo` statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value="Exception caught: "]');

        $this->assertEquals(1, $call->count(), "Expecting a string `Exception caught: ` in the `echo` statement.");
    }

    public function testNewInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="new"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `new` keyword in the `divide()` function declaration.");
    }

    public function testDivideCall()
    {
        $obj = self::$code->find('call[name="divide"]');

        $this->assertEquals(1, $obj->count(), "Expecting a `divide()` function call.");
    }

    public function testDivideCallArgs()
    {
        $obj = self::$code->find('call[name="divide"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('integer');

        $this->assertEquals(2, $args->count(), "Expecting two integers as arguments in the `divide()` function call.");
    }

    //still need to test THROW, TRY, and CATCH keywords
}