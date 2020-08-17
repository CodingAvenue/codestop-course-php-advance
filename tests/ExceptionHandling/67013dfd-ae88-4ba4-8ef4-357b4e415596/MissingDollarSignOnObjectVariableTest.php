<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingDollarSignOnObjectVariableTest extends TestCase
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
        $expected  = "Exception caught: Invalid argument value provided in C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ExceptionHandling\\67013dfd-ae88-4ba4-8ef4-357b4e415596\\MissingDollarSignOnObjectVariableTest.php on line number 5";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(3, $obj->count(), "Expecting two `echo` statements.");
    }

    public function testDivideFunction()
    {
        $nodes = self::$code->find('function[name="divide"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a `divide()` function declaration.");
    }

    public function testDividendParam()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->getSubnode('params');
        $div = $subNode->find('param[name="dividend"]');

        $this->assertEquals(1, $div->count(), "Expecting a parameter named `dividend` in the `divide()` function declaration.");
    }

    public function testDivisorParam()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->getSubnode('params');
        $div = $subNode->find('param[name="divisor"]');

        $this->assertEquals(1, $div->count(), "Expecting a parameter named `divisor` in the `divide()` function declaration.");
    }

    public function testIfInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');

        $this->assertEquals(2, $subNode->count(), "Expecting one `if` statements in the `divide()` function declaration.");
    }

    public function testIsNumericInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $call = $subNode->find('call[name="is_numeric"]');

        $this->assertEquals(2, $call->count(), "Expecting two `is_numeric` function calls in the `if` statement of the `divide()` function declaration.");
    }

    public function testDivisorInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $var = $subNode->find('variable[name="divisor"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `divisor` in the `if` statement of the `divide()` function declaration.");
    }

    public function testDividendInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $var = $subNode->find('variable[name="dividend"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable named `dividend` in the `if` statement of the `divide()` function declaration.");
    }

    public function testElseInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="else"]');

        $this->assertEquals(0, $subNode->count(), "Unexpected `else` statement in the `divide()` function declaration.");
    }

    public function testElseIfInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="elseif"]');

        $this->assertEquals(0, $subNode->count(), "Unexpected `elseif` statement in the `divide()` function declaration.");
    }

    public function testNewInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $call = $subNode->find('construct[name="new"]');

        $this->assertEquals(2, $call->count(), "Expecting two `new` keyword in the `if` statement of the `divide()` function declaration.");
    }

    public function testReturnInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `return` statement in the `divide()` function declaration.");
    }

    public function testDivisorInReturn()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');
        $var = $subNode->find('variable[name="divisor"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `divisor` in the `return` statement of the `divide()` function.");
    }

    public function testDividendInRetur()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');
        $var = $subNode->find('variable[name="dividend"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `dividend` in the `return` statement of the `divide()` function.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $class = $subNode->find('instantiate[class="Exception"]');

        $this->assertEquals(1, $class->count(), "Expecting an instantiation statement of the 'Exception' class in the `if` statement.");
    }

    public function testInstantiationInvalid()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $class = $subNode->find('instantiate[class="InvalidArgumentException"]');

        $this->assertEquals(1, $class->count(), "Expecting an instantiation statement of the 'InvalidArgumentException' class in the `if` statement.");
    }

    public function testInstantiationInvalidArgs()
    {
        $nodes = self::$code->find('instantiate[class="InvalidArgumentException"]');
        $subNode = $nodes->getSubnode('args');
        $string = $subNode->find('string[value="Invalid argument value provided"]');

        $this->assertEquals(1, $string->count(), "Expecting an argument string `Invalid argument value provided` in an instantiation statement of the 'InvalidArgumentException' class.");
    }

    public function testIsNumericDivisorArgs()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $call = $subNode->find('call[name="is_numeric"]');
        $args = $call->getSubnode('args');
        $var = $args->find('variable[name="divisor"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `divisor` as an argument in the `is_numeric` function call of the `if` statement.");
    }

    public function testIsNumericDividendArgs()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $call = $subNode->find('call[name="is_numeric"]');
        $args = $call->getSubnode('args');
        $var = $args->find('variable[name="dividend"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `dividend` as an argument in the `is_numeric` function call of the `if` statement.");
    }

    public function testInstantiationArgs()
    {
        $nodes = self::$code->find('instantiate[class="Exception"]');
        $subNode = $nodes->getSubnode('args');
        $string = $subNode->find('string[value="The value \'0\' as a divisor is not allowed."]');

        $this->assertEquals(1, $string->count(), "Expecting an argument string `The value '0' as a divisor is not allowed.` in an instantiation statement of the 'Exception' class.");
    }

    public function testGetMessageInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getMessage", variable="e"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getMessage()` method call of `e` in the `echo` statement.");
    }

    public function testGetCodeInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getCode", variable="e"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getCode()` method call of `e` in the `echo` statement.");
    }

    public function testIEGetMessageInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getMessage", variable="ie"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getMessage()` method call of `ie` in the `echo` statement.");
    }

    public function testIEGetFileInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getFile", variable="ie"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getFile()` method call of `ie` in the `echo` statement.");
    }

    public function testIEGetLineInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="getLine", variable="ie"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getLine()` method call of `ie` in the `echo` statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value="Exception caught: "]');

        $this->assertEquals(1, $call->count(), "Expecting a string `Exception caught: ` in the `echo` statement.");
    }

    public function testStringInEcho2()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value="Exception caught: ["]');

        $this->assertEquals(1, $call->count(), "Expecting a string `Exception caught: [` in the `echo` statement.");
    }

    public function testStringInEcho3()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value=" on line number "]');

        $this->assertEquals(1, $call->count(), "Expecting a string ` on line number ` in the `echo` statement.");
    }

    public function testNewInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="new"]');

        $this->assertEquals(2, $subNode->count(), "Expecting two `new` keywords in the `divide()` function declaration.");
    }

    public function testDivideCall()
    {
        $obj = self::$code->find('call[name="divide"]');

        $this->assertEquals(1, $obj->count(), "Expecting an `divide()` function call.");
    }

    public function testDivideCallArgs()
    {
        $obj = self::$code->find('call[name="divide"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('integer');

        $this->assertEquals(1, $args->count(), "Expecting one integer as an argument in the `divide()` function call.");
    }

    public function testDivideCallArgs2()
    {
        $obj = self::$code->find('call[name="divide"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('string[value="hello"]');

        $this->assertEquals(1, $args->count(), "Expecting a string `hello` as an argument in the `divide()` function call.");
    }
    //still need to test THROW, TRY, and CATCH keywords
}