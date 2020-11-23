<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateCookieWithSetCookieTest extends TestCase
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
        $expected  = "";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testIf()
    {
        $obj = self::$code->find('construct[name="if"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `if` statement.");
    }

    public function testCookieVarInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNode = $obj->getSubnode()->getSubnode();
        $arrayFetch = $subNode->find('datatype[name="arrayfetch"]');
        $cookie = $arrayFetch->find('variable[name="_COOKIE"]');

        $this->assertEquals(2, $cookie->count(), "Expecting two occurrences of a superglobal variable named `__COOKIE` in the `if` statement.");
    }

    public function testStringInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNode = $obj->getSubnode()->getSubnode();
        $arrayFetch = $subNode->find('datatype[name="arrayfetch"]');
        $string = $arrayFetch->find('string[value="test_cookie"]');

        $this->assertEquals(2, $string->count(), "Expecting two occurrences of the string `test_cookie` in the `__COOKIE` superglobal variable.");
    }

    public function testEchoInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');

        $this->assertEquals(1, $testEcho->count(), "Expecting an `echo` statement in the `if` block.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $string = $testEcho->find('string[value="Cookie Value: "]');

        $this->assertEquals(1, $string->count(), "Expecting a string `Cookie Value: ` in the `echo` statement.");
    }

    public function testStringInArrayFetch()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $arrayFetch = $testEcho->find('datatype[name="arrayfetch"]');
        $string = $arrayFetch->find('string[value="test_cookie"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `test_cookie` in the `__COOKIE` superglobal variable.");
    }

    public function testCookieVariableInEcho()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $arrayFetch = $testEcho->find('datatype[name="arrayfetch"]');
        $cookie = $arrayFetch->find('variable[name="_COOKIE"]');

        $this->assertEquals(1, $cookie->count(), "Expecting a superglobal variable named `__COOKIE` in the `echo` statement.");
    }

    public function testSetCookieCall()
    {
        $set = self::$code->find('call[name="setcookie"]');

        $this->assertEquals(1, $set->count(), "Expecting a `setcookie()` function call.");
    }

    public function testSetCookieStringArgs()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $string = $args->find('string[value="test_cookie"]');

        $this->assertEquals(1, $string->count(), "Expecting a string argument `test_cookie` in the `setcookie()` function call.");
    }

    public function testSetCookieStringArgs2()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $string = $args->find('string[value="This is a test cookie."]');

        $this->assertEquals(1, $string->count(), "Expecting a string argument `This is a test cookie.` in the `setcookie()` function call.");
    }

    public function testSetCookieCallArgs3()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $opr = $args->find('operator[name="addition"]');
        $left = $opr->getSubnode('left');
        $time = $left->find('call[name="time"]');

        $this->assertEquals(1, $time->count(), "Expecting a `time()` function call as an argument of the `setcookie` function call.");
    }

    public function testSetCookieCallArgs4()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $opr = $args->find('operator[name="addition"]');
        $left = $opr->getSubnode('left');
        $int = $left->find('integer'); // nice to have ---if we can identify the value like 360

        $this->assertEquals(1, $int->count(), "Expecting an integer as an argument of the `setcookie()` function call.");
    }
}