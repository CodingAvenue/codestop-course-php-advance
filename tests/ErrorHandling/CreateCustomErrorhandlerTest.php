<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateCustomErrorhandlerTest extends TestCase
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
        $expected  = "Error: [256] Sorry, the file does not exist in C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\CreateCustomErrorhandlerTest.php on line 5\nPlease try again.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $obj->count(), "Expecting two echo statements.");
    }

    public function testOpenFileInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('call[name="openFile"]');

        $this->assertEquals(1, $call->count(), "Expecting an `openFile()` function call in the echo statement.");
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
        $args = $subNode->find('string[value="myTestErrorHandler"]');

        $this->assertEquals(1, $args->count(), "Expecting a string `myTestErrorHandler` as argument in the `set_error_handler()` function call.");
    }

    public function testOpenFileFunction()
    {
        $nodes = self::$code->find('function[name="openFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a openFile() function declaration.");
    }

    public function testFileParam()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `file` in the `openFile()` function declaration.");
    }

    public function testIfInOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="if"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `if` statement in the `openFile()` function declaration.");
    }

    public function testElseInOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="else"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `else` statement in the `openFile()` function declaration.");
    }

    public function testTriggerErrorInIfOfOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="if"]');
        $sub = $subNode->getSubnode();
        $call = $sub->find('call[name="trigger_error"]');

        $this->assertEquals(1, $call->count(), "Expecting a `trigger_error()` function call in the `if` statement of the `openFile()` function declaration.");
    }

    // public function testTriggerErrorArgs()
    // {
    //     $nodes = self::$code->find('function[name="openFile"]');
    //     $subNode = $nodes->find('construct[name="if"]');
    //     $sub = $subNode->getSubnode();
    //     $call = $sub->find('call[name="trigger_error"]');
    //     $args = $call->getSubnode('args');
    //     $string = $args->find('string[value="Sorry, the file does not exist"]'); /// NOTE: string does not accept value with a comma in it.

    //     $this->assertEquals(1, $string->count(), "Expecting a string `Sorry, the file does not exist` as first argument of the `trigger_error()` function call.");
    // }

    public function testMyTestErrorHandlerFunction()
    {
        $nodes = self::$code->find('function[name="myTestErrorHandler"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a myTestErrorHandler() function declaration.");
    }

    public function testErrorNoParam()
    {
        $nodes = self::$code->find('function[name="myTestErrorHandler"]');
        $subNode = $nodes->getSubnode('params');
        $errorNo = $subNode->find('param[name="error_no"]');

        $this->assertEquals(1, $errorNo->count(), "Expecting a parameter named `error_no` in the `myTestErrorHandler()` function declaration.");
    }

    public function testErrorMsgParam()
    {
        $nodes = self::$code->find('function[name="myTestErrorHandler"]');
        $subNode = $nodes->getSubnode('params');
        $errorMsg = $subNode->find('param[name="error_msg"]');

        $this->assertEquals(1, $errorMsg->count(), "Expecting a parameter named `error_msg` in the `myTestErrorHandler()` function declaration.");
    }

    public function testErrorFileParam()
    {
        $nodes = self::$code->find('function[name="myTestErrorHandler"]');
        $subNode = $nodes->getSubnode('params');
        $errorFile = $subNode->find('param[name="error_file"]');

        $this->assertEquals(1, $errorFile->count(), "Expecting a parameter named `error_file` in the `myTestErrorHandler()` function declaration.");
    }

    public function testErrorLineParam()
    {
        $nodes = self::$code->find('function[name="myTestErrorHandler"]');
        $subNode = $nodes->getSubnode('params');
        $errorLine = $subNode->find('param[name="error_line"]');

        $this->assertEquals(1, $errorLine->count(), "Expecting a parameter named `error_line` in the `myTestErrorHandler()` function declaration.");
    }

    public function testEchoInMyTestErrorHandler()
    {
        $nodes = self::$code->find('function[name="myTestErrorHandler"]');
        $subNode = $nodes->getSubnode();
        $echo = $subNode->find('construct[name="echo"]');

        $this->assertEquals(1, $echo->count(), "Expecting one `echo` statement in the `myTestErrorHandler()` function declaration.");
    }
}