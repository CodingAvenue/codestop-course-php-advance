<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class ReadAndAccessTemplateTest extends TestCase
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
        $expected  = "<!DOCTYPE html>\n<html>\n    <head>\n        <title>Practice Template</title>\n    </head>\n    <body>\n        <header style=\"text-align: center\">\n            <img src=\"CodeStop_Logo.png\" width=\"250px\"/>\n        </header>\n        <nav>\n            <ul type=\"disc\">\n                <li><a href=\"https://codestop.io/\">CodeStop Website</a></li>\n                <li><a href=\"https://codestop.io/courses\">Courses Offered</a></li>\n            </ul>\n        </nav>\n          <section style=\"text-align: justify; border-top-style: solid; border-width: 1px\">\n            <article>\n                <h1>Learning by Coding</h1>\n                <p>\"The goal of CodeStop is to design programming courses that are affordable to young people in developing nations. Ultimately, we want young people to build the path to a sustainable career through technology.\"</p>\n            </article>\n            <article>\n                <p>\"CodeStop has been a platform for learning to program and code since 2017.\"</p>\n            </article>\n        </section>\n        <aside style=\"margin-left: 350px\">\n            <p>\"We designed our platform to make programming easy to learn, understand, and share.\" - <b>CodeStop</b></p>\n        </aside>\n        <footer style=\"text-align: center; border-top-style: solid; border-width: 1px\">\n            <p>All Rights Reserved CodeStop © 2017</p>\n        </footer>\n    </body>\n</html>";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testReadTemplateFunction()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `readTemplate()` function declaration.");
    }

    public function testFileParam()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $subNode = $nodes->getSubnode('params');
        $file = $subNode->find('param[name="file"]');

        $this->assertEquals(1, $file->count(), "Expecting a parameter named `file` in the `readTemplate()` function declaration.");
    }

    public function testArrayParam()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $subNode = $nodes->getSubnode('params');
        $array = $subNode->find('param[name="array"]');

        $this->assertEquals(1, $array->count(), "Expecting a parameter named `array` in the `readTemplate()` function declaration.");
    }

    public function testIfInReadTemplateFunction()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');

        $this->assertEquals(1, $if->count(), "Expecting one `if` statement in the `readTemplate()` function declaration.");
    }

    public function testFileExistsInIf()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $call = $if->find('call[name="file_exists"]');

        $this->assertEquals(1, $call->count(), "Expecting one `file_exists()` function call in the `if` statement of the `readTemplate()` function declaration.");
    }

    public function testFileExistsArgs()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $call = $if->find('call[name="file_exists"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `file` as an argument in the `file_exists()` function call.");
    }

    public function testAssignmentInIf()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $assign = $if->find('operator[name="assignment"]');

        $this->assertEquals(3, $assign->count(), "Expecting three assignment statements in the `if` statement of the `readTemplate()` function declaration.");
    }

    public function testOutputInIfAssignment()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $assign = $if->find('operator[name="assignment"]');
        $var = $assign->find('variable[name="output"]');

        $this->assertEquals(3, $var->count(), "Expecting three occurrences of the variable named `output` in the `if` statement of the `readTemplate()` function declaration.");
    }

    public function testFileGetContentInIf()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $assign = $if->find('operator[name="assignment"]');
        $call = $assign->find('call[name="file_get_contents"]');

        $this->assertEquals(1, $call->count(), "Expecting one `file_get_contents()` function call in the `if` statement of the `readTemplate()` function declaration.");
    }

    public function testFileGetContentInIfArgs()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $assign = $if->find('operator[name="assignment"]');
        $call = $assign->find('call[name="file_get_contents"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="file"]');

        $this->assertEquals(1, $call->count(), "Expecting one variable named `file` as an argument in the `file_get_contents()` function call of the `readTemplate()` function declaration.");
    }

    public function testForeachInIf()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');

        $this->assertEquals(1, $foreach->count(), "Expecting one `foreach` statement in the `if` statement of the `readTemplate()` function declaration.");
    }

    public function testArrayInForeach()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $var = $foreach->find('variable[name="array"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `array` in the `foreach` statement.");
    }

    public function testKeyInForeach()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $var = $foreach->find('variable[name="key"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `key` in the `foreach` statement.");
    }

    public function testValInForeach()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $var = $foreach->find('variable[name="val"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `val` in the `foreach` statement.");
    }

    public function testAssignmentInForeachOfIf()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $assign = $foreach->find('operator[name="assignment"]');

        $this->assertEquals(2, $assign->count(), "Expecting two assignment statements in the `foreach` statement of the `readTemplate()` function declaration.");
    }

    public function testReplaceInAssignmentOfForeach()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $assign = $foreach->find('operator[name="assignment"]');
        $var = $assign->find('variable[name="replace"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `replace` in the `foreach` statement.");
    }

    public function testOutputInAssignmentOfForeach()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $assign = $foreach->find('operator[name="assignment"]');
        $var = $assign->find('variable[name="output"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `output` in the `foreach` statement.");
    }

    public function testStrReplaceInForeach()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $assign = $foreach->find('operator[name="assignment"]');
        $call = $assign->find('call[name="str_replace"]');

        $this->assertEquals(1, $call->count(), "Expecting one `str_replace()` function call in the `foreach` statement.");
    }

    public function testStrReplaceArgs()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $assign = $foreach->find('operator[name="assignment"]');
        $call = $assign->find('call[name="str_replace"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="replace"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `replace` as an argument in the `str_replace()` function call.");
    }

    public function testStrReplaceArgs2()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $assign = $foreach->find('operator[name="assignment"]');
        $call = $assign->find('call[name="str_replace"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="val"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `val` as an argument in the `str_replace()` function call.");
    }

    public function testStrReplaceArgs3()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $foreach = $if->find('construct[name="foreach"]');
        $assign = $foreach->find('operator[name="assignment"]');
        $call = $assign->find('call[name="str_replace"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="output"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `output` as an argument in the `str_replace()` function call.");
    }

    public function testReturnInIf()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $return = $if->find('construct[name="return"]');

        $this->assertEquals(1, $return->count(), "Expecting one `return` statement in the `if` statement of the `readTemplate()` function declaration.");
    }

    public function testOutputInReturnOfIf()
    {
        $nodes = self::$code->find('function[name="readTemplate"]');
        $if = $nodes->find('construct[name="if"]');
        $return = $if->find('construct[name="return"]');
        $var = $return->find('variable[name="output"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `output` in the `return` statement of the `if` statement.");
    }

    public function testPracticeVar()
    {
        $nodes = self::$code->find('variable[name="practice"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `practice`.");
    }

    public function testContentArrayVar()
    {
        $nodes = self::$code->find('variable[name="contentArray"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `contentArray`.");
    }

    public function testPracticeContentVar()
    {
        $nodes = self::$code->find('variable[name="practiceContent"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `practiceContent`.");
    }

    public function testReadTemplateCall()
    {
        $nodes = self::$code->find('call[name="readTemplate"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `readTemplate` function call.");
    }

    public function testReadTemplateCallArgs()
    {
        $nodes = self::$code->find('call[name="readTemplate"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="practice"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `practice` as an argument of the `readTemplate()` function call.");
    }

    public function testReadTemplateCallArgs2()
    {
        $nodes = self::$code->find('call[name="readTemplate"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="contentArray"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `contentArray` as an argument of the `readTemplate()` function call.");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement.");
    }

    public function testVarEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $var = $nodes->find('variable[name="practiceContent"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `practiceContent` in the `echo` statement.");
    }


    public function testArrayNodeTypes()
    {
        $nodes = self::$code->find('datatype[name="array", type="associative"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an associative array named 'contentArray'.");
    }

    //lacking __DIR__ validation; still need implementation on proof
}