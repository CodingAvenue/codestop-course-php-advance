<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateNewCustomExceptionClassFileNotFoundExceptionTest extends TestCase
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

    public function testGetErrorMessage()
    {
        $obj = self::$code->find('class[name="FileNotFoundException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="getErrorMessage", type="public"]');

        $this->assertEquals(1, $error->count(), "Expecting a `getErrorMessage()` method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="FileNotFoundException", extends="Exception"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `FileNotFoundException` class that extends the `Exception` class.");
    }  

    public function testGetErrorMessageCall()
    {
        $obj = self::$code->find('class[name="FileNotFoundException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="getErrorMessage", type="public"]');
        $call = $error->find('method-call[name="getMessage", variable="this"]');

        $this->assertEquals(1, $call->count(), "Expecting one 'getMessage()' method call in the `getErrorMessage()` method of the 'FileNotFoundException' class.");
    }

    public function testReturnInGetErrorMessage()
    {
        $obj = self::$code->find('class[name="FileNotFoundException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="getErrorMessage", type="public"]');
        $call = $error->find('construct[name="return"]');

        $this->assertEquals(1, $call->count(), "Expecting one 'return' statement in the `getErrorMessage()` method of the 'FileNotFoundException' class.");
    }
}