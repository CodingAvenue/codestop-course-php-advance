<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingDoubleQuotesInModesTest extends TestCase
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
        $expected  = "This is a test document content.\n<br>This is the end of the test document content.\n<br>This is the newly added content.\n<br><br>";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEchoInWhile()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $obj = $subNode->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `echo` statement in the `while` statement of the `readFileContent()` function.");
    }

    public function testReadFileContentFunction()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `readFileContent()` function declaration.");
    }

    public function testAppendContentFunction()
    {
        $nodes = self::$code->find('function[name="appendContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an `appendContent()` function declaration.");
    }

    public function testFileToReadParam()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="fileToRead"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `fileToRead` in the `readFileContent()` function declaration.");
    }

    public function testMyFileParam()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="myFile"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `myFile` in the `appendContent()` function declaration.");
    }

    public function testMyContentParam()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $subNode = $nodes->getSubnode('params');
        $content = $subNode->find('param[name="myContent"]');

        $this->assertEquals(1, $content->count(), "Expecting a parameter named `myContent` in the `appendContent()` function declaration.");
    }

    public function testWhileInReadFileContent()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->find('construct[name="while"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `while` statement in the `readFileContent()` function declaration.");
    }

    public function testFopenInReadFileContent()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="fopen"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fopen()` function call in the `readFileContent()` function declaration.");
    }

    public function testFopenInAppendContent()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $call = $nodes->find('call[name="fopen"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fopen()` function call in the `appendContent()` function declaration.");
    }

    public function testFwriteInAppendContent()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $call = $nodes->find('call[name="fwrite"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fwrite()` function call in the `appendContent()` function declaration.");
    }

    public function testFopenArgs1()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="fileToRead"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `fileToRead` as an argument in the `fopen()` function call of the `readFileContent()` function declaration.");
    }

    public function testFopenAppendArgs1()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myFile` as an argument in the `fopen()` function call of the `appendContent()` function declaration.");
    }

    public function testFwriteAppendArgs1()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $call = $nodes->find('call[name="fwrite"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `fwrite()` function call of the `appendContent()` function declaration.");
    }

    public function testFwriteAppendArgs2()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $call = $nodes->find('call[name="fwrite"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myContent"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myContent` as an argument in the `fwrite()` function call of the `appendContent()` function declaration.");
    }

    public function testFopenArgs2()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="r"]');

        $this->assertEquals(1, $args->count(), "Expecting a read-only mode `r` as an argument in the `fopen()` function call of the `readFileContent()` function declaration.");
    }

    public function testFopenAppendArgs2()
    {
        $nodes = self::$code->find('function[name="appendContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="a"]');

        $this->assertEquals(1, $args->count(), "Expecting an append-only mode `a` as an argument in the `fopen()` function call of the `appendContent()` function declaration.");
    }

    public function testFgetsInEchoOfWhile()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $obj = $subNode->find('construct[name="echo"]');
        $call = $obj->find('call[name="fgets"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fgets()` function call in the `echo` statement of the `while` statement.");
    }

    public function testFgetsArgs()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $obj = $subNode->find('construct[name="echo"]');
        $call = $obj->find('call[name="fgets"]');
        $args = $call->getSubNode()->getSubNode('args');
        $file = $args->find('variable[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a variable named `file` as an argument in the `fgets()` function call of the `echo` statement.");
    }

    public function testFeofInWhile()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $call = $subNode->find('call[name="feof"]');

        $this->assertEquals(1, $call->count(), "Expecting one `feof()` function call in the `while` statement.");
    }

    public function testFeofArgs()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $call = $subNode->find('call[name="feof"]');
        $args = $call->getSubNode()->getSubNode('args');
        $file = $args->find('variable[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a variable named `file` as an argument in the `feof()` function call of the `while` statement.");
    }

    public function testFcloseInReadFileContent()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="fclose"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fclose()` function call in the `readFileContent()` function declaration.");
    }

    public function testFcloseArgs()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="fclose"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `fclose()` function call of the `readFileContent()` function.");
    }

    public function testReadFileContentCall()
    {
        $nodes = self::$code->find('call[name="readFileContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `readFileContent()` function call.");
    }

    public function testAppendContentCall()
    {
        $nodes = self::$code->find('call[name="appendContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `appendContent()` function call.");
    }

    public function testAppendContentCallArgs()
    {
        $nodes = self::$code->find('call[name="appendContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `appendContent()` function call.");
    }

    public function testAppendContentCallArgs2()
    {
        $nodes = self::$code->find('call[name="appendContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="content"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `content` as an argument in the `appendContent()` function call.");
    }

    public function testReadFileContentCallArgs()
    {
        $nodes = self::$code->find('call[name="readFileContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `readFileContent()` function call.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(4, $nodes->count(), "Expecting four assignment statements.");
    }

    public function testFileInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="file"]');

        $this->assertEquals(3, $var->count(), "Expecting three occurrences of the variable named `file` in the assignment statements.");
    }

    public function testContentInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="content"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `content` in the assignment statement.");
    }

    public function testStringInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="/testDocument.txt"]');

        $this->assertEquals(1, $string->count(), "Expecting `/testDocument.txt` in the assignment statement.");
    }

    //lacking die() and __DIR__ validation; still need implementation on proof
}