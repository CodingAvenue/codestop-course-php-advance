<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingRequireStatementDivideByNegativeExceptionTest extends TestCase
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

    public function testMyErrorMessage()
    {
        $obj = self::$code->find('class[name="DivideByNegativeException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="myErrorMessage", type="public"]');

        $this->assertEquals(1, $error->count(), "Expecting a `myErrorMessage()` method.");
    }

    public function testMyErrorFile()
    {
        $obj = self::$code->find('class[name="DivideByNegativeException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="myErrorFile", type="public"]');

        $this->assertEquals(1, $error->count(), "Expecting a `myErrorFile()` method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="DivideByNegativeException", extends="Exception"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `DivideByNegativeException` class that extends the `Exception` class.");
    }  

    public function testMyErrorFileCall()
    {
        $obj = self::$code->find('class[name="DivideByNegativeException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="myErrorFile", type="public"]');
        $call = $error->find('method-call[name="getFile", variable="this"]');

        $this->assertEquals(1, $call->count(), "Expecting one `getFile()` method call in the `myErrorFile()` method of the `DivideByNegativeException` class.");
    }

    public function testReturnInMyErrorMessage()
    {
        $obj = self::$code->find('class[name="DivideByNegativeException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="myErrorMessage", type="public"]');
        $call = $error->find('construct[name="return"]');

        $this->assertEquals(1, $call->count(), "Expecting one `return` statement in the `myErrorMessage()` method of the `DivideByNegativeException` class.");
    }

    public function testReturnInMyErrorFile()
    {
        $obj = self::$code->find('class[name="DivideByNegativeException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="myErrorFile", type="public"]');
        $call = $error->find('construct[name="return"]');

        $this->assertEquals(1, $call->count(), "Expecting one `return` statement in the `myErrorFile()` method of the `DivideByNegativeException` class.");
    }

    public function testStringInReturnofMyErrorMessage()
    {
        $obj = self::$code->find('class[name="DivideByNegativeException"]');
        $subNodes = $obj->getSubnode();
        $error = $subNodes->find('method[name="myErrorMessage", type="public"]');
        $call = $error->find('construct[name="return"]');
        $string = $call->find('string[value="A negative number as a divisor is encountered"]');

        $this->assertEquals(1, $string->count(), "Expecting a string `A negative number as a divisor is encountered` in the `return` statement of the `myErrorMessage()` method.");
    }
}