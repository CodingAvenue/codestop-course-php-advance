<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingDoubleQuotesTest extends TestCase
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
        $expected  = "divide(): The value '0' as a divisor is not allowed.";
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    } 

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `echo` statement.");
    }

    public function testDivideInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $call = $obj->find('call[name="divide"]');

        $this->assertEquals(1, $call->count(), "Expecting one `divide()` functon call in the `echo` statement.");
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

        $this->assertEquals(1, $subNode->count(), "Expecting one `return` statement in the `divide()` function declaration.");
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
}