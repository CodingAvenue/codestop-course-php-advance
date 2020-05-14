<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingOpenDoubleQuoteMainTest extends TestCase
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
        $expected  = "Exception caught: A negative number as a divisor is encountered in C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\FileInclusion\\431a74cd-fc48-4740-a203-6471cbb77638\\main.php";

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

        $this->assertEquals(1, $subNode->count(), "Expecting one `if` statement in the `divide()` function declaration.");
    }

    public function testDivisorInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $var = $subNode->find('variable[name="divisor"]');

        $this->assertEquals(3, $var->count(), "Expecting three occurrences of the variable named `divisor` in the `if` statement of the `divide()` function declaration.");
    }

    public function testDividendInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $var = $subNode->find('variable[name="dividend"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `dividend` in the `if` statement of the `divide()` function declaration.");
    }

    public function testElseInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="else"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `else` statement in the `divide()` function declaration.");
    }

    public function testElseIfInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="elseif"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `elseif` statement in the `divide()` function declaration.");
    }

    public function testNewInElseIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="elseif"]');
        $call = $subNode->find('construct[name="new"]');

        $this->assertEquals(1, $call->count(), "Expecting one `new` keyword in the `elseif` statement of the `divide()` function declaration.");
    }

    public function testReturnInElseOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="else"]');
        $call = $subNode->find('construct[name="return"]');

        $this->assertEquals(1, $call->count(), "Expecting one `return` statement in the `else` statement of the `divide()` function declaration.");
    }

    public function testDivisorInReturnOfElse()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="else"]');
        $call = $subNode->find('construct[name="return"]');
        $var = $call->find('variable[name="divisor"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `divisor` in the `return` statement of the `else` statement.");
    }

    public function testDividendInReturnOfElse()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="else"]');
        $call = $subNode->find('construct[name="return"]');
        $var = $call->find('variable[name="dividend"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `dividend` in the `return` statement of the `else` statement.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="elseif"]');
        $class = $subNode->find('instantiate[class="DivideByNegativeException"]');

        $this->assertEquals(1, $class->count(), "Expecting an instantiation statement of the 'DivideByNegativeException' class in the `elseif` statement.");
    }

    public function testInstantiationInvalid()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $class = $subNode->find('instantiate[class="DivideByZeroException"]');

        $this->assertEquals(1, $class->count(), "Expecting an instantiation statement of the 'DivideByZeroException' class in the `if` statement.");
    }

    public function testInstantiationInvalidArgs()
    {
        $nodes = self::$code->find('instantiate[class="DivideByZeroException"]');
        $subNode = $nodes->getSubnode('args');
        $string = $subNode->find('string[value="The value \'0\' as a divisor is not allowed."]');

        $this->assertEquals(1, $string->count(), "Expecting an argument string `The value '0' as a divisor is not allowed.` in an instantiation statement of the 'DivideByZeroException' class.");
    }

    public function testErrorMessageInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="errorMessage", variable="div"]');

        $this->assertEquals(1, $call->count(), "Expecting one `errorMessage()` method call of `div` in the `echo` statement.");
    }

    public function testMyErrorFileInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="myErrorFile", variable="neg"]');

        $this->assertEquals(1, $call->count(), "Expecting one `myErrorFile()` method call of `neg` in the `echo` statement.");
    }

    public function testMyErrorMessageInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('method-call[name="myErrorMessage", variable="neg"]');

        $this->assertEquals(1, $call->count(), "Expecting one `myErrorMessage()` method call of `neg` in the `echo` statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('string[value="Exception caught: "]');

        $this->assertEquals(2, $call->count(), "Expecting two strings `Exception caught: ` in the `echo` statements.");
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

        $this->assertEquals(1, $obj->count(), "Expecting a `divide()` function call.");
    }

    public function testDivideCallArgs()
    {
        $obj = self::$code->find('call[name="divide"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('integer');

        $this->assertEquals(2, $args->count(), "Expecting two integers as arguments in the `divide()` function call.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement.");
    }

    public function testRequireOnceCallArgs()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/DivideByZeroException.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/DivideByZeroException.php` as an argument in the `require_once()` statement.");
    }

    public function testIncludeOnceCall()
    {
        $nodes = self::$code->find('include[type="include_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `include_once()` statement.");
    }

    public function testIncludeOnceCallArgs()
    {
        $nodes = self::$code->find('include[type="include_once"]');
        $string = $nodes->find('string[value="/DivideByNegativeException.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/DivideByNegativeException.php` as an argument in the `include_once()` statement.");
    }
    //still need to test THROW, TRY, and CATCH keywords
}