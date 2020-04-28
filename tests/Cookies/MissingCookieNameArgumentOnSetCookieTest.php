<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingCookieNameArgumentOnSetCookieTest extends TestCase
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
        $expected  = "\n<html>\n    <head>\n        <title>Creating and Accessing Cookie</title>\n    </head>\n    <body>\n        Sorry, a cookie is not found!    </body>\n</html>";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');

        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements.");
    }

    public function testCookieNameVariable()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $cookieName = $nodes->find('variable[name="cookieName"]');

        $this->assertEquals(1, $cookieName->count(), "Expecting a variable named 'cookieName' in an assignment statement.");
    }

    public function testCookieValueVariable()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $cookieValue = $nodes->find('variable[name="cookieValue"]');

        $this->assertEquals(1, $cookieValue->count(), "Expecting a variable named 'cookieValue' in an assignment statement.");
    }

    public function testExpiryVariable()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $expiry = $nodes->find('variable[name="expiry"]');

        $this->assertEquals(1, $expiry->count(), "Expecting a variable named 'expiry' in an assignment statement.");
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

    public function testVariableInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNode = $obj->getSubnode()->getSubnode();
        $arrayFetch = $subNode->find('datatype[name="arrayfetch"]');
        $var = $arrayFetch->find('variable[name="cookieName"]');

        $this->assertEquals(2, $var->count(), "Expecting two variables `cookieName` in the `__COOKIE` superglobal variable.");
    }

    public function testEchoInIf()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');

        $this->assertEquals(2, $testEcho->count(), "Expecting two `echo` statements in the `if` statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $string = $testEcho->find('string[value="<br/>Cookie Value: "]');

        $this->assertEquals(1, $string->count(), "Expecting a string `<br/>Cookie Value: ` in the `echo` statement.");
    }
/*
    public function testStringInEcho2()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $sub = $testEcho->getSubnode();
        print_r($sub);
        $string = $sub->find('string[value="Sorry, a cookie is not found!"]'); // error here does not accept a comma in the value
        
        $this->assertEquals(1, $string->count(), "Expecting a string `Sorry, a cookie is not found!` in the `echo` statement.");
    }*/

    public function testVarInArrayFetch()
    {
        $obj = self::$code->find('construct[name="if"]');
        $subNodes = $obj->getSubnode();
        $testEcho = $subNodes->find('construct[name="echo"]');
        $arrayFetch = $testEcho->find('datatype[name="arrayfetch"]');
        $var = $arrayFetch->find('variable[name="cookieName"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable `cookieName` in the `__COOKIE` superglobal variable.");
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

    public function testSetCookieVarArgs()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $var = $args->find('variable[name="cookieName"]');

        $this->assertEquals(1, $var->count(), "Expecting a variable argument `cookieName` in the `setcookie()` function call.");
    }

    public function testSetCookieVarArgs2()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $var = $args->find('variable[name="cookieValue"]');;

        $this->assertEquals(1, $var->count(), "Expecting a variable argument `cookieValue` in the `setcookie()` function call.");
    }

    public function testSetCookieCallVarArgs3()
    {
        $set = self::$code->find('call[name="setcookie"]');
        $args = $set->getSubnode("args");
        $var = $args->find('variable[name="expiry"]');;

        $this->assertEquals(1, $var->count(), "Expecting a variable argument `expiry` in the `setcookie()` function call.");
    }
}