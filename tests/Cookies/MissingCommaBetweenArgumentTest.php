<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingCommaBetweenArgumentTest extends TestCase
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

        $this->assertEquals(1, $obj->count(), "Expecting one if statement.");
    }

    public function testCookieVarInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNode = $obj->getSubnode()->getSubnode();
        $arrayFetch = $subNode->find('datatype[name="arrayfetch"]');
        $cookie = $arrayFetch->find('variable[name="_COOKIE"]');

        $this->assertEquals(2, $cookie->count(), "Expecting two superglobal variable named `__COOKIE` in the `if` condition.");
    }

    public function testStringInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNode = $obj->getSubnode()->getSubnode();
        $arrayFetch = $subNode->find('datatype[name="arrayfetch"]');
        $string = $arrayFetch->find('string[value="user"]');

        $this->assertEquals(2, $string->count(), "Expecting two strings `user` in the `__COOKIE` superglobal variable.");
    }

    public function testEchoInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');

        $this->assertEquals(1, $testEcho->count(), "Expecting an echo statement in the `if` block.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $string = $testEcho->find('string[value="The cookie value is: "]');

        $this->assertEquals(1, $string->count(), "Expecting a string `The cookie value is: ` in the `echo` statement.");
    }

    public function testStringInArrayFetch()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $arrayFetch = $testEcho->find('datatype[name="arrayfetch"]');
        $string = $arrayFetch->find('string[value="user"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `user` in the `__COOKIE` superglobal variable.");
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

        $this->assertEquals(1, $set->count(), "Expecting a function call for setcookie() function.");
    }

    public function testSetCookieStringArgs()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $string = $args->find('string[value="user"]');

        $this->assertEquals(1, $string->count(), "Expecting a string argument `user` in the `setcookie()` function call.");
    }

    public function testSetCookieStringArgs2()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $string = $args->find('string[value="My Cookie"]');

        $this->assertEquals(1, $string->count(), "Expecting a string argument `My Cookie` in the `setcookie()` function call.");
    }

    public function testSetCookieCallArgs3()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $opr = $args->find('operator[name="addition"]');
        $left = $opr->getSubnode('left');
        $time = $left->find('call[name="time"]');

        $this->assertEquals(1, $time->count(), "Expecting a `time()` function call as argument of the `setcookie` function call.");
    }

    public function testSetCookieCallArgs4()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $opr = $args->find('operator[name="addition"]');
        $left = $opr->getSubnode('left');
        $int = $left->find('integer'); // nice to have ---if we can identify the value like 360

        $this->assertEquals(1, $int->count(), "Expecting an interger argument of the `setcookie` function call.");
    }
}