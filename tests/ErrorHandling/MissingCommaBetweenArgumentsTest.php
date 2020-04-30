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

    // public function testActualCode()
    // {
    //     $evaluator = self::$code->evaluator();
    //     $evaled    = $evaluator->evaluate();
    //     $expected  = "PHP Warning:  divide(): The value '0' as a divisor is not allowed in C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php on line 5\nPHP Stack trace:\nPHP   1. {main}() C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php:0\nPHP   2. divide() C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php:12\nPHP   3. trigger_error() C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php:5\n\nWarning: divide(): The value '0' as a divisor is not allowed in C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php on line 5\n\nCall Stack:\n    0.2204     351392   1. {main}() C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php:0\n    0.2205     351392   2. divide() C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php:12\n    0.2205     351472   3. trigger_error() C:\\Users\\ccanda\\codestop-course-php-advanced\\answers\\ErrorHandling\\MissingCommaBetweenArgumentsTest.php:5\n";

    //     $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    // } NOTE: Need to verify this in the reader

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one echo statement.");
    }

    public function testDivideInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('call[name="divide"]');

        $this->assertEquals(1, $call->count(), "Expecting one `divide()` functon call in the echo statement.");
    }

    public function testDivideFunction()
    {
        $nodes = self::$code->find('function[name="divide"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a divide() function declaration.");
    }

    public function testDividendParam()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->getSubnode('params');
        $dividend = $subNode->find('param[name="dividend"]');

        $this->assertEquals(1, $dividend->count(), "Expecting a parameter named `dividend` in the `divide()` function declaration.");
    }

    public function testDivisorParam()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->getSubnode('params');
        $divisor = $subNode->find('param[name="divisor"]');

        $this->assertEquals(1, $divisor->count(), "Expecting a parameter named `divisor` in the `divide()` function declaration.");
    }

    public function testReturnInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="return"]');

        $this->assertEquals(2, $subNode->count(), "Expecting two `return` statements in the `divide()` function declaration.");
    }

    public function testIfInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `if` statement in the `divide()` function declaration.");
    }

    public function testElseInDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="else"]');

        $this->assertEquals(1, $subNode->count(), "Expecting one `else` statement in the `divide()` function declaration.");
    }

    public function testTriggerErrorInIfOfDivide()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $sub = $subNode->getSubnode();
        $call = $sub->find('call[name="trigger_error"]');

        $this->assertEquals(1, $call->count(), "Expecting a `trigger_error()` function call in the `if` statement of the `divide()` function declaration.");
    }

    public function testTriggerErrorArgs()
    {
        $nodes = self::$code->find('function[name="divide"]');
        $subNode = $nodes->find('construct[name="if"]');
        $sub = $subNode->getSubnode();
        $call = $sub->find('call[name="trigger_error"]');
        $args = $call->getSubnode('args');
        $string = $args->find('string[value="divide(): The value \'0\' as a divisor is not allowed"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `divide(): The value '0' as a divisor is not allowed` as first argument of the `trigger_error()` function call.");
    }
}