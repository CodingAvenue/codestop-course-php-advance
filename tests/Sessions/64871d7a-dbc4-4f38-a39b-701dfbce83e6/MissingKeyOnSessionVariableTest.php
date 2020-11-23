<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MisplacedSessionStartFunctionTest extends TestCase
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
        $expected  = "Welcome, Diana!";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement.");
    }

    public function testSessionVariable()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $arrayFetch = $nodes->find('datatype[name="arrayfetch"]');
        $session = $arrayFetch->find('variable[name="_SESSION"]');

        $this->assertEquals(1, $session->count(), "Expecting one superglobal variable named `__SESSION` in an assignment statement.");
    }

    public function testNameString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="name"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `name` in the assignment statement.");
    }

    public function testDianaString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="Diana"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `Diana` in the assignment statement.");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `echo` statement.");
    }

    public function testStringNameInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $arrayFetch = $obj->find('datatype[name="arrayfetch"]');
        $string = $arrayFetch->find('string[value="name"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `name` in a `_SESSION` superglobal variable.");
    }

    public function testArrayFetchInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $arrayFetch = $obj->find('datatype[name="arrayfetch"]');
        $var = $arrayFetch->find('variable[name="_SESSION"]');

        $this->assertEquals(1, $var->count(), "Expecting one `_SESSION` superglobal variable in the `echo` statement.");
    }

    public function testSessionStartCall()
    {
        $start = self::$code->find('call[name="session_start"]');

        $this->assertEquals(1, $start->count(), "Expecting a `session_start()` function call.");
    }
}