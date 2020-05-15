<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingOneArgumentOnCopyFunctionTest extends TestCase
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
        $expected  = "This is a test document content.\nThis is the end of the test document content.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testReadFileContentFunction()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `readFileContent()` function declaration.");
    }

    public function testCopyFileFunction()
    {
        $nodes = self::$code->find('function[name="copyFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `copyFile()` function declaration.");
    }

    public function testFileToReadParam()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="fileToRead"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `fileToRead` in the `readFileContent()` function declaration.");
    }

    public function testFileParam()
    {
        $nodes = self::$code->find('function[name="copyFile"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `file` in the `copyFile()` function declaration.");
    }

    public function testCopiedFileParam()
    {
        $nodes = self::$code->find('function[name="copyFile"]');
        $subNode = $nodes->getSubnode('params');
        $copied = $subNode->find('param[name="copiedFile"]');

        $this->assertEquals(1, $copied->count(), "Expecting a parameter named `copiedFile` in the `copyFile()` function declaration.");
    }

    public function testReadfileInReadFileContent()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="readfile"]');

        $this->assertEquals(1, $call->count(), "Expecting one `readfile()` function call in the `readFileContent()` function declaration.");
    }

    public function testCopyInCopyFile()
    {
        $nodes = self::$code->find('function[name="copyFile"]');
        $call = $nodes->find('call[name="copy"]');

        $this->assertEquals(1, $call->count(), "Expecting one `copy()` function call in the `copyFile()` function declaration.");
    }

    public function testReadfileArgs()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="readfile"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="fileToRead"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `fileToRead` as an argument in the `readfile()` function call of the `readFileContent()` function declaration.");
    }

    public function testCopyArgs1()
    {
        $nodes = self::$code->find('function[name="copyFile"]');
        $call = $nodes->find('call[name="copy"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `copy()` function call of the `copyFile()` function declaration.");
    }

    public function testCopyArgs2()
    {
        $nodes = self::$code->find('function[name="copyFile"]');
        $call = $nodes->find('call[name="copy"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="copiedFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `copiedFile` as an argument in the `copy()` function call of the `copyFile()` function declaration.");
    }

    public function testReadFileContentCall()
    {
        $nodes = self::$code->find('call[name="readFileContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `readFileContent()` function call.");
    }

    public function testCopyFileCall()
    {
        $nodes = self::$code->find('call[name="copyFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `copyFile()` function call.");
    }

    public function testCopyFileCallArgs()
    {
        $nodes = self::$code->find('call[name="copyFile"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myFile` as an argument in the `copyFile()` function call.");
    }

    public function testCopyFileCallArgs2()
    {
        $nodes = self::$code->find('call[name="copyFile"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myCopiedFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myCopiedFile` as an argument in the `copyFile()` function call.");
    }

    public function testReadFileContentCallArgs()
    {
        $nodes = self::$code->find('call[name="readFileContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myCopiedFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myCopiedFile` as an argument in the `readFileContent()` function call.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testMyFileInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="myFile"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `myFile` in the assignment statement.");
    }

    public function testMyCopiedFileInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="myCopiedFile"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `myCopiedFile` in the assignment statement.");
    }

    public function testStringInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="/testDocument.txt"]');

        $this->assertEquals(1, $string->count(), "Expecting `/testDocument.txt` in the assignment statement.");
    }

    public function testStringInAssignment2()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="/copiedFromTestDocument.txt"]');

        $this->assertEquals(1, $string->count(), "Expecting `/copiedFromTestDocument.txt` in the assignment statement.");
    }
    //lacking die() and __DIR__ validation; still need implementation on proof
}