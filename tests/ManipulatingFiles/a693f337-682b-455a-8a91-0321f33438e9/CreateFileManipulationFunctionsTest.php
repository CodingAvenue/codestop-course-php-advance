<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingDoubleQuotesOnArgumentTest extends TestCase
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

    // this needs verification since the expected output cannot be verified
    // public function testActualCode()
    // {
    //     $evaluator = self::$code->evaluator();
    //     $evaled    = $evaluator->evaluate();
    //     $expected  = "This is a test document content.\nThis is the end of the test document content.";

    //     $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    // }

    public function testReadFileContentFunction()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `readFileContent()` function declaration.");
    }

    public function testFileParam()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `file` in the `readFileContent()` function declaration.");
    }

    public function testReadfileInReadFileContent()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="readfile"]');

        $this->assertEquals(1, $call->count(), "Expecting one `readfile()` function call in the `readFileContent()` function declaration.");
    }

    public function testReadfileArgs()
    {
        $nodes = self::$code->find('function[name="readFileContent"]');
        $call = $nodes->find('call[name="readfile"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `readfile()` function call of the `readFileContent()` function declaration.");
    }

    public function testChangeFileNameFunction()
    {
        $nodes = self::$code->find('function[name="changeFileName"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `changeFileName()` function declaration.");
    }

    public function testDeleteFileFunction()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `deleteFile()` function declaration.");
    }

    public function testoldFileParam()
    {
        $nodes = self::$code->find('function[name="changeFileName"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="oldFile"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `oldFile` in the `changeFileName()` function declaration.");
    }

    public function testNewNameParam()
    {
        $nodes = self::$code->find('function[name="changeFileName"]');
        $subNode = $nodes->getSubnode('params');
        $new = $subNode->find('param[name="newName"]');

        $this->assertEquals(1, $new->count(), "Expecting a parameter named `newName` in the `changeFileName()` function declaration.");
    }

    public function testFileToDeleteParam()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="fileToDelete"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `fileToDelete` in the `deleteFile()` function declaration.");
    }

    public function testRenameInChangeFileName()
    {
        $nodes = self::$code->find('function[name="changeFileName"]');
        $call = $nodes->find('call[name="rename"]');

        $this->assertEquals(1, $call->count(), "Expecting one `rename()` function call in the `changeFileName()` function declaration.");
    }

    public function testRenameArgs1()
    {
        $nodes = self::$code->find('function[name="changeFileName"]');
        $call = $nodes->find('call[name="rename"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="oldFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `oldFile` as an argument in the `rename()` function call of the `changeFileName()` function declaration.");
    }

    public function testRenameArgs2()
    {
        $nodes = self::$code->find('function[name="changeFileName"]');
        $call = $nodes->find('call[name="rename"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="newName"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `newName` as an argument in the `rename()` function call of the `changeFileName()` function declaration.");
    }

    public function testIfInDeleteFileFunction()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $cons = $nodes->find('construct[name="if"]');

        $this->assertEquals(1, $cons->count(), "Expecting one `if` statement in the `deleteFile()` function declaration.");
    }

    public function testEchoInDeleteFileFunction()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $cons = $nodes->find('construct[name="echo"]');

        $this->assertEquals(2, $cons->count(), "Expecting two `echo` statements in the `deleteFile()` function declaration.");
    }

    public function testElseInDeleteFileFunction()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $cons = $nodes->find('construct[name="else"]');

        $this->assertEquals(1, $cons->count(), "Expecting one `else` statement in the `deleteFile()` function declaration.");
    }

    public function testUnlinkInIfOfDeleteFileFunction()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $cons = $nodes->find('construct[name="if"]');
        $call = $cons->find('call[name="unlink"]');

        $this->assertEquals(1, $call->count(), "Expecting one `unlink()` function call in the `if` statement of the `deleteFile()` function declaration.");
    }

    public function testUnlinkArgs()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $cons = $nodes->find('construct[name="if"]');
        $call = $cons->find('call[name="unlink"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="fileToDelete"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `fileToDelete` as an argument in the `unlink()` function call.");
    }

    public function testStringInEcho1()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $cons = $nodes->find('construct[name="echo"]');
        $string = $cons->find('string[value="Unable to delete the file."]');

        $this->assertEquals(1, $string->count(), "Expecting a string `Unable to delete the file.` in the `echo` statement.");
    }

    public function testStringInEcho2()
    {
        $nodes = self::$code->find('function[name="deleteFile"]');
        $cons = $nodes->find('construct[name="echo"]');
        $string = $cons->find('string[value="The file is deleted successfully."]');

        $this->assertEquals(1, $string->count(), "Expecting a string `The file is deleted successfully.` in the `echo` statement.");
    }

    public function testChangeFileNameCall()
    {
        $nodes = self::$code->find('call[name="changeFileName"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `changeFileName()` function call.");
    }

    public function testChangeFileNameCallArgs()
    {
        $nodes = self::$code->find('call[name="changeFileName"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myFile` as an argument in the `changeFileName()` function call.");
    }

    public function testChangeFileNameCallArgs2()
    {
        $nodes = self::$code->find('call[name="changeFileName"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="myPracticeDocument.txt"]');

        $this->assertEquals(1, $args->count(), "Expecting `myPracticeDocument.txt` as an argument in the `changeFileName()` function call.");
    }

    public function testDeleteFileCall()
    {
        $nodes = self::$code->find('call[name="deleteFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `deleteFile()` function call.");
    }

    public function testReadFileCall()
    {
        $nodes = self::$code->find('call[name="readFileContent"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `readFileContent()` function call.");
    }

    public function testDeleteFileCallArgs()
    {
        $nodes = self::$code->find('call[name="deleteFile"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myNewFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myNewFile` as an argument in the `deleteFile()` function call.");
    }

    public function testReadFileCallArgs()
    {
        $nodes = self::$code->find('call[name="readFileContent"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myNewFile"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myNewFile` as an argument in the `readFileContent()` function call.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testFileInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="myFile"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable named `myFile` in the assignment statement.");
    }

    public function testMyNewFileInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="myNewFile"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable named `myNewFile` in the assignment statement.");
    }

    public function testStringInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="/myTestDocument.txt"]');

        $this->assertEquals(1, $string->count(), "Expecting `/myTestDocument.txt` in the assignment statement.");
    }

    public function testStringInAssignment2()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="/myPracticeDocument.txt"]');

        $this->assertEquals(1, $string->count(), "Expecting `/myPracticeDocument.txt` in the assignment statement.");
    }

    //lacking die() and __DIR__ validation; still need implementation on proof
}