<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateFileInclusionStatementsMyShapeTest extends TestCase
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

    public function testCalculateArea()
    {
        $obj = self::$code->find('interface[name="MyShape"]');
        $subNodes = $obj->getSubnode();
        $stage = $subNodes->find('method[name="calculateArea", type="public"]');

        $this->assertEquals(1, $stage->count(), "Expecting a calculateArea() method.");
    }

    public function testLifeCycleInterface()
    {
        $nodes = self::$code->find('interface[name="MyShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a declaration of the `MyShape` interface.");
    }
} 