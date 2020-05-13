<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class IncorrectArgumentVariableOnFileGetContentTest extends TestCase
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
        $expected  = "<html>\n    <body>\n        <h3>Favorites</h3>\n        <p>\n            <em>My favorite fruit is: Apple</em><br/>\n            <em>My favorite color is: Gray</em>\n        </p>\n    </body>\n</html>";

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

    public function testTemplateFileVar()
    {
        $nodes = self::$code->find('variable[name="templateFile"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `templateFile`.");
    }

    public function testTestTemplateVar()
    {
        $nodes = self::$code->find('variable[name="testTemplate"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `testTemplate`.");
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
        $args = $subNode->find('variable[name="templateFile"]');

        $this->assertEquals(1, $args->count(), "Expecting one variable named `templateFile` as an argument of the `readTemplate()` function call.");
    }

    public function testReadTemplateCallArgs2()
    {
        $nodes = self::$code->find('call[name="readTemplate"]');
        $subNode = $nodes->getSubNode()->getSubNode('args');
        $args = $subNode->find('datatype[name="array", type="associative"]');

        $this->assertEquals(1, $args->count(), "Expecting one associative array as an argument of the `readTemplate()` function call.");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement.");
    }

    public function testVarEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $var = $nodes->find('variable[name="testTemplate"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `testTemplate` in the `echo` statement.");
    }
    //lacking __DIR__ validation; still need implementation on proof
}