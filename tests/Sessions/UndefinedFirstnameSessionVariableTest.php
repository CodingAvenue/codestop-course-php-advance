<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UndefinedFirstnameSessionVariableTest extends TestCase
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
        $expected  = "test-session-123 John Miller";

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

        $this->assertEquals(2, $session->count(), "Expecting two superglobal variable named `__SESSION` in the assignment statements.");
    }

    public function testFirstNameString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="firstName"]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'firstName' in an assignment statement.");
    }

    public function testLastNameString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="lastName"]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'lastName' in an assignment statement.");
    }

    public function testJohnString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="John"]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'John' in an assignment statement.");
    }

    public function testMillerString()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $string = $nodes->find('string[value="Miller"]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'Miller' in an assignment statement.");
    }

    public function testEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `echo` statement.");
    }

    public function testStringFirstInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $arrayFetch = $obj->find('datatype[name="arrayfetch"]');
        $string = $arrayFetch->find('string[value="firstName"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `firstName` in a `_SESSION` superglobal variable.");
    }

    public function testStringLastInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $arrayFetch = $obj->find('datatype[name="arrayfetch"]');
        $string = $arrayFetch->find('string[value="lastName"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `lastName` in a `_SESSION` superglobal variable.");
    }

    public function testArrayFetchInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $arrayFetch = $obj->find('datatype[name="arrayfetch"]');
        $var = $arrayFetch->find('variable[name="_SESSION"]');

        $this->assertEquals(2, $var->count(), "Expecting two `_SESSION` superglobal variables in an `echo` statement.");
    }

    public function testSessionStartCall()
    {
        $start = self::$code->find('call[name="session_start"]');

        $this->assertEquals(1, $start->count(), "Expecting a function call for session_start() function.");
    }

    public function testSessionIdCall()
    {
        $sid = self::$code->find('call[name="session_id"]');

        $this->assertEquals(2, $sid->count(), "Expecting two function calls for session_id() function.");
    }

    public function testSessionIdCallArgs()
    {
        $sid = self::$code->find('call[name="session_id"]');
        $args = $sid->getSubnode("args");
        $string = $args->find('string[value="test-session-123"]');

        $this->assertEquals(1, $string->count(), "Expecting a string argument `test-session-123` in the session_id() function call.");
    }

    public function testSidCallInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $sid = $obj->find('call[name="session_id"]');

        $this->assertEquals(1, $sid->count(), "Expecting a `session_id()` function call in the `echo` statement.");
    }
}