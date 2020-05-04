<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateFunctionThatThrowsExceptionTest extends TestCase
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
        $expected  = "Exception caught: Sorry, the file does not exist in C:\Users\ccanda\codestop-course-php-advanced\answers\ExceptionHandling\CreateFunctionThatThrowsExceptionTest.php on line number 5";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one echo statement.");
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
        $nodes = self::$code->find('instantiate[class="Exception"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Exception' class.");
    }

    public function testInstantiationArgs() //Need to resolve the issue that proof does not accept a comma in a string value
    {
        $nodes = self::$code->find('instantiate[class="Exception"]');
        $subNode = $nodes->getSubnode('args');
        $string = $subNode->find('string[value="Sorry, the file does not exist"]');

        $this->assertEquals(1, $string->count(), "Expecting an argument string `Sorry, the file does not exist` in an instantiation statement of the 'Exception' class.");
    }

    public function testGetMessageInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getMessage", variable="e"]');

        $this->assertEquals(1, $call->count(), "Expecting a `getMessage()` method call of `e` in the echo statement.");
    }

    public function testGetFileInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getFile", variable="e"]');

        $this->assertEquals(1, $call->count(), "Expecting a `getFile()` method call of `e` in the echo statement.");
    }

    public function testGetLineInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getLine", variable="e"]');

        $this->assertEquals(1, $call->count(), "Expecting a `getLine()` method call of `e` in the echo statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value="Exception caught: "]');

        $this->assertEquals(1, $call->count(), "Expecting a string `Exception caught: ` in the echo statement.");
    }

    public function testInnerStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value=" on line number "]');

        $this->assertEquals(1, $call->count(), "Expecting a string `Exception caught: ` in the echo statement.");
    }

    public function testNewInOpenFile()
    {
        $nodes = self::$code->find('function[name="openFile"]');
        $subNode = $nodes->find('construct[name="new"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `new` keyword in the `openFile()` function declaration.");
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

        $this->assertEquals(1, $args->count(), "Expecting a string `myTest.txt` as argument in the `openFile()` function call.");
    }

    //still need to test THROW, TRY, and CATCH keywords
}