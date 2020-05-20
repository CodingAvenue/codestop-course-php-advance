<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAndAccessSessionVariablesTest extends TestCase
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
        $expected  = "practice-session-101 James";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testSessionVariable()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $arrayFetch = $nodes->find('datatype[name="arrayfetch"]');
        $session = $arrayFetch->find('variable[name="_SESSION"]');

        $this->assertEquals(2, $session->count(), "Expecting two occurrences of the superglobal variable named `__SESSION` in the assignment statements.");
    }

    public function testNameString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="name"]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'name' in an assignment statement.");
    }

    public function testPasswordString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="password"]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'password' in an assignment statement.");
    }

    public function testJamesString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="James"]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'James' in an assignment statement.");
    }

    public function test123PassString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="123-pass"]');

        $this->assertEquals(1, $string->count(), "Expecting a string '123-pass' in an assignment statement.");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `echo` statement.");
    }

    public function testStringInEcho()
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

        $this->assertEquals(1, $var->count(), "Expecting a `_SESSION` superglobal variable in an `echo` statement.");
    }

    public function testSessionStartCall()
    {
        $start = self::$code->find('call[name="session_start"]');

        $this->assertEquals(1, $start->count(), "Expecting a function call for `session_start()` function.");
    }

    public function testSessionIdCall()
    {
        $sid = self::$code->find('call[name="session_id"]');

        $this->assertEquals(2, $sid->count(), "Expecting two function calls for `session_id()` function.");
    }

    public function testSessionIdCallArgs()
    {
        $sid = self::$code->find('call[name="session_id"]');
        $args = $sid->getSubnode("args");
        $string = $args->find('string[value="practice-session-101"]');

        $this->assertEquals(1, $string->count(), "Expecting a string argument `practice-session-101` in the `session_id()` function call.");
    }

    public function testSidCallInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $sid = $obj->find('call[name="session_id"]');

        $this->assertEquals(1, $sid->count(), "Expecting one `session_id()` function call in the `echo` statement.");
    }
}