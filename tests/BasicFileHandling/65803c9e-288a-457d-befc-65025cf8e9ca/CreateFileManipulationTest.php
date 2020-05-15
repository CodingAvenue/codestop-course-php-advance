<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateFileManipulationTest extends TestCase
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
        $expected  = "This is a new file content.\n<br><br>";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEchoInWhile()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $obj = $subNode->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `echo` statement in the `while` statement of the `readContent()` function.");
    }

    public function testReadContentFunction()
    {
        $nodes = self::$code->find('function[name="readContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `readContent()` function declaration.");
    }

    public function testReplaceContentFunction()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `replaceContent()` function declaration.");
    }

    public function testFileParam()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `file` in the `readContent()` function declaration.");
    }

    public function testFileReplaceParam()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `file` in the `replaceContent()` function declaration.");
    }

    public function testNewContentParam()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $subNode = $nodes->getSubnode('params');
        $content = $subNode->find('param[name="newContent"]');

        $this->assertEquals(1, $content->count(), "Expecting a parameter named `newContent` in the `replaceContent()` function declaration.");
    }

    public function testWhileInReadContent()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $subNode = $nodes->find('construct[name="while"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `while` statement in the `readContent()` function declaration.");
    }

    public function testFopenInReadContent()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $call = $nodes->find('call[name="fopen"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fopen()` function call in the `readContent()` function declaration.");
    }

    public function testFopenInReplaceContent()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $call = $nodes->find('call[name="fopen"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fopen()` function call in the `replaceContent()` function declaration.");
    }

    public function testFwriteInReplaceContent()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $call = $nodes->find('call[name="fwrite"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fwrite()` function call in the `replaceContent()` function declaration.");
    }

    public function testFopenArgs1()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `fopen()` function call of the `readContent()` function declaration.");
    }

    public function testFopenReplaceArgs1()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `fopen()` function call of the `replaceContent()` function declaration.");
    }

    public function testFwriteReplaceArgs1()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $call = $nodes->find('call[name="fwrite"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="fileToUpdate"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `fileToUpdate` as an argument in the `fwrite()` function call of the `replaceContent()` function declaration.");
    }

    public function testFwriteReplaceArgs2()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $call = $nodes->find('call[name="fwrite"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="newContent"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `newContent` as an argument in the `fwrite()` function call of the `replaceContent()` function declaration.");
    }

    public function testFopenArgs2()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="r"]');

        $this->assertEquals(1, $args->count(), "Expecting a read-only mode `r` as an argument in the `fopen()` function call of the `readContent()` function declaration.");
    }

    public function testFopenReplaceArgs2()
    {
        $nodes = self::$code->find('function[name="replaceContent"]');
        $call = $nodes->find('call[name="fopen"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="w"]');

        $this->assertEquals(1, $args->count(), "Expecting a write-only mode `w` as an argument in the `fopen()` function call of the `replaceContent()` function declaration.");
    }

    public function testFgetsInEchoOfWhile()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $obj = $subNode->find('construct[name="echo"]');
        $call = $obj->find('call[name="fgets"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fgets()` function call in the `echo` statement of the `while` statement.");
    }

    public function testFgetsArgs()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $obj = $subNode->find('construct[name="echo"]');
        $call = $obj->find('call[name="fgets"]');
        $args = $call->getSubNode()->getSubNode('args');
        $file = $args->find('variable[name="fileToRead"]');

        $this->assertEquals(1, $file->count(), "Expecting a variable named `fileToRead` as an argument in the `fgets()` function call of the `echo` statement.");
    }

    public function testFeofInWhile()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $call = $subNode->find('call[name="feof"]');

        $this->assertEquals(1, $call->count(), "Expecting one `feof()` function call in the `while` statement.");
    }

    public function testFeofArgs()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $subNode = $nodes->find('construct[name="while"]');
        $call = $subNode->find('call[name="feof"]');
        $args = $call->getSubNode()->getSubNode('args');
        $file = $args->find('variable[name="fileToRead"]');

        $this->assertEquals(1, $file->count(), "Expecting a variable named `fileToRead` as an argument in the `feof()` function call of the `while` statement.");
    }

    public function testFcloseInReadContent()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $call = $nodes->find('call[name="fclose"]');

        $this->assertEquals(1, $call->count(), "Expecting one `fclose()` function call in the `readContent()` function declaration.");
    }

    public function testFcloseArgs()
    {
        $nodes = self::$code->find('function[name="readContent"]');
        $call = $nodes->find('call[name="fclose"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="fileToRead"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `fileToRead` as an argument in the `fclose()` function call of the `readContent()` function.");
    }

    public function testReadContentCall()
    {
        $nodes = self::$code->find('call[name="readContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `readContent()` function call.");
    }

    public function testReplaceContentCall()
    {
        $nodes = self::$code->find('call[name="replaceContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `replaceContent()` function call.");
    }

    public function testReplaceContentCallArgs()
    {
        $nodes = self::$code->find('call[name="replaceContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myFile` as an argument in the `replaceContent()` function call.");
    }

    public function testReplaceContentCallArgs2()
    {
        $nodes = self::$code->find('call[name="replaceContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myNewContent"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myNewContent` as an argument in the `replaceContent()` function call.");
    }

    public function testReadContentCallArgs()
    {
        $nodes = self::$code->find('call[name="readContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myFile` as an argument in the `readContent()` function call.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(4, $nodes->count(), "Expecting four assignment statements.");
    }

    public function testMyFileInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="myFile"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `myFile` in the assignment statement.");
    }

    public function testFileToReadInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="fileToRead"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `fileToRead` in the assignment statement.");
    }

    public function testFileToUpdateInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="fileToUpdate"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `fileToUpdate` in the assignment statement.");
    }

    public function testContentInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="myNewContent"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `myNewContent` in the assignment statement.");
    }

    public function testStringInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="/testDocument.txt"]');

        $this->assertEquals(1, $string->count(), "Expecting `/testDocument.txt` in the assignment statement.");
    }

    //lacking die() and __DIR__ validation; still need implementation on proof
}