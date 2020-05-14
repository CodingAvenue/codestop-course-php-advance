<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingExtendsKeywordDivideByZeroExceptionTest extends TestCase
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

    public function testErrorMessage()
    {
        $obj = self::$code->find('class[name="DivideByZeroException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="errorMessage", type="public"]');

        $this->assertEquals(1, $error->count(), "Expecting an `errorMessage()` method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="DivideByZeroException", extends="Exception"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `DivideByZeroException` class that extends the `Exception` class.");
    }  

    public function testGetMessageCall()
    {
        $obj = self::$code->find('class[name="DivideByZeroException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="errorMessage", type="public"]');
        $call = $error->find('method-call[name="getMessage", variable="this"]');

        $this->assertEquals(1, $call->count(), "Expecting one 'getMessage()' method call in the `errorMessage()` method of the 'DivideByZeroException' class.");
    }

    public function testReturnInErrorMessage()
    {
        $obj = self::$code->find('class[name="DivideByZeroException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="errorMessage", type="public"]');
        $call = $error->find('construct[name="return"]');

        $this->assertEquals(1, $call->count(), "Expecting one 'return' statement in the `errorMessage()` method of the 'DivideByZeroException' class.");
    }
}