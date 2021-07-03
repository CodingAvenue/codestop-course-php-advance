<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingCommaBetweenArgumentsTest extends TestCase
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

    public function testRenameFileFunction()
    {
        $nodes = self::$code->find('function[name="renameFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `renameFile()` function declaration.");
    }

    public function testFileToRenameParam()
    {
        $nodes = self::$code->find('function[name="renameFile"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="fileToRename"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `fileToRename` in the `renameFile()` function declaration.");
    }

    public function testNewNameParam()
    {
        $nodes = self::$code->find('function[name="renameFile"]');
        $subNode = $nodes->getSubnode('params');
        $new = $subNode->find('param[name="newName"]');

        $this->assertEquals(1, $new->count(), "Expecting a parameter named `newName` in the `renameFile()` function declaration.");
    }

    public function testRenameInRenameFile()
    {
        $nodes = self::$code->find('function[name="renameFile"]');
        $call = $nodes->find('call[name="rename"]');

        $this->assertEquals(1, $call->count(), "Expecting one `rename()` function call in the `renameFile()` function declaration.");
    }

    public function testRenameArgs1()
    {
        $nodes = self::$code->find('function[name="renameFile"]');
        $call = $nodes->find('call[name="rename"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="fileToRename"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `fileToRename` as an argument in the `rename()` function call of the `renameFile()` function declaration.");
    }

    public function testRenameArgs2()
    {
        $nodes = self::$code->find('function[name="renameFile"]');
        $call = $nodes->find('call[name="rename"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="newName"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `newName` as an argument in the `rename()` function call of the `renameFile()` function declaration.");
    }

    public function testRenameFileCall()
    {
        $nodes = self::$code->find('call[name="renameFile"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `renameFile()` function call.");
    }

    public function testRenameFileCallArgs()
    {
        $nodes = self::$code->find('call[name="renameFile"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `file` as an argument in the `renameFile()` function call.");
    }

    public function testRenameFileCallArgs2()
    {
        $nodes = self::$code->find('call[name="renameFile"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="myRenamedDocument.txt"]');

        $this->assertEquals(1, $args->count(), "Expecting `myRenamedDocument.txt` as an argument in the `renameFile()` function call.");
    }

    public function testReadlinkCall()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $call = $nodes->find('call[name="readlink"]');

        $this->assertEquals(1, $call->count(), "Expecting one `readlink()` function call in the `echo` statement.");
    }

    public function testReadlinkCallArgs()
    {
        $nodes = self::$code->find('call[name="readlink"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="/myRenamedDocument.txt"]');

        $this->assertEquals(1, $args->count(), "Expecting `/myRenamedDocument.txt` as an argument in the `readlink()` function call.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
    }

    public function testFileInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="file"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable named `file` in the assignment statement.");
    }

    public function testStringInAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="/testDocument.txt"]');

        $this->assertEquals(1, $string->count(), "Expecting `/testDocument.txt` in the assignment statement.");
    }

    //lacking die() and __DIR__ validation; still need implementation on proof
}