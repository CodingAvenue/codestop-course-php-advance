<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateNewCustomExceptionClassPracticeMainTest extends TestCase
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
        $expected  = "Exception caught: Sorry, the file does not exist in C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\CustomExceptions\\9d777c4d-89ed-4b03-8e32-24c162af398e\\practiceMain.php on line number 7";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `echo` statement.");
    }

    public function testOpenFileFunction()
    {
        $nodes = self::$code->find('function[name="openFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an `openFile()` function declaration.");
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

    public function testFileExistsInIfOfOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="if"]');
        $call = $subNode->find('call[name="file_exists"]');

        $this->assertEquals(1, $call->count(), "Expecting one `file_exists` function call in the `if` statement of the `openFile()` function declaration.");
    }

    public function testElseInOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="else"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `else` statement in the `openFile()` function declaration.");
    }

    public function testFopenInElseOfOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="else"]');
        $call = $subNode->find('call[name="fopen"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fopen()` function call in the `else` statement of the `openFile()` function declaration.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="FileNotFoundException"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'FileNotFoundException' class.");
    }

    public function testInstantiationArgs() //Need to resolve the issue that proof does not accept a comma in a string value
    {
        $nodes = self::$code->find('instantiate[class="FileNotFoundException"]');
        $subNode = $nodes->getSubnode('args');
        $string = $subNode->find('string[value="Sorry, the file does not exist"]');

        $this->assertEquals(1, $string->count(), "Expecting an argument string `Sorry, the file does not exist` in an instantiation statement of the 'FileNotFoundException' class.");
    }

    public function testGetErrorMessageInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getErrorMessage", variable="fe"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getErrorMessage()` method call of `fe` in the `echo` statement.");
    }

    public function testGetFileInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getFile", variable="fe"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getFile()` method call of `fe` in the `echo` statement.");
    }

    public function testGetLineInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getLine", variable="fe"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getLine()` method call of `fe` in the `echo` statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value="Exception caught: "]');

        $this->assertEquals(1, $call->count(), "Expecting a string `Exception caught: ` in the `echo` statement.");
    }

    public function testInnerStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value=" on line number "]');

        $this->assertEquals(1, $call->count(), "Expecting a string `Exception caught: ` in the `echo` statement.");
    }

    public function testNewInOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="if"]');
        $new = $subNode->find('construct[name="new"]');

        $this->assertEquals(1, $new->count(), "Expecting one `new` keyword in the `openFile()` function declaration.");
    }

    public function testOpenFileCall()
    {
        $obj = self::$code->find('call[name="openFile"]');

        $this->assertEquals(1, $obj->count(), "Expecting an `openFile()` function call.");
    }

    public function testOpenFileCallArgs()
    {
        $obj = self::$code->find('call[name="openFile"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="myTest.txt"]');

        $this->assertEquals(1, $args->count(), "Expecting a string `myTest.txt` as an argument in the `openFile()` function call.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement.");
    }

    public function testRequireOnceCallArgsFile()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/FileNotFoundException.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/FileNotFoundException.php` as an argument in the `require_once()` statement.");
    }

    //still need to test THROW, TRY, and CATCH keywords
}