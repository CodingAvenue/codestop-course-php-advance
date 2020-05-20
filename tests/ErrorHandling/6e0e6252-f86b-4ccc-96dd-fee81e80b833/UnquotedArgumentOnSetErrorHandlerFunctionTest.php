<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UnquotedArgumentOnSetErrorHandlerFunctionTest extends TestCase
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
        $expected  = "Error: [2] Division by zero\nPlease try again.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $obj->count(), "Expecting two `echo` statements.");
    }

    public function testDivideInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('call[name="divide"]');

        $this->assertEquals(1, $call->count(), "Expecting one `divide()` function call in the `echo` statement.");
    }

    public function testSetErrorHandlerCall()
    {
        $obj = self::$code->find('call[name="set_error_handler"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `set_error_handler()` function call.");
    }

    public function testSetErrorHandlerCallArgs()
    {
        $obj = self::$code->find('call[name="set_error_handler"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="myErrorHandler"]');

        $this->assertEquals(1, $args->count(), "Expecting a string `myErrorHandler` as an argument in the `set_error_handler()` function call.");
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
        $dividend = $subNode->find('param[name="dividend"]');

        $this->assertEquals(1, $dividend->count(), "Expecting a parameter named `dividend` in the `divide()` function declaration.");
    }

    public function testDivisorParam()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->getSubnode('params');
        $divisor = $subNode->find('param[name="divisor"]');

        $this->assertEquals(1, $divisor->count(), "Expecting a parameter named `divisor` in the `divide()` function declaration.");
    }

    public function testReturnInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `return` statement in the `divide()` function declaration.");
    }

    public function testMyErrorHandlerFunction()
    {
        $nodes = self::$code->find('function[name="myErrorHandler"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `myErrorHandler()` function declaration.");
    }

    public function testErrorNoParam()
    {
        $nodes = self::$code->find('function[name="myErrorHandler"]');
        $subNode = $nodes->getSubnode('params');
        $errorNo = $subNode->find('param[name="error_no"]');

        $this->assertEquals(1, $errorNo->count(), "Expecting a parameter named `error_no` in the `myErrorHandler()` function declaration.");
    }

    public function testErrorMsgParam()
    {
        $nodes = self::$code->find('function[name="myErrorHandler"]');
        $subNode = $nodes->getSubnode('params');
        $errorMsg = $subNode->find('param[name="error_msg"]');

        $this->assertEquals(1, $errorMsg->count(), "Expecting a parameter named `error_msg` in the `myErrorHandler()` function declaration.");
    }

    public function testEchoInMyErrorHandler()
    {
        $nodes = self::$code->find('function[name="myErrorHandler"]');
        $subNode = $nodes->getSubnode();
        $echo = $subNode->find('construct[name="echo"]');

        $this->assertEquals(1, $echo->count(), "Expecting one `echo` statement in the `myErrorHandler()` function declaration.");
    }
}