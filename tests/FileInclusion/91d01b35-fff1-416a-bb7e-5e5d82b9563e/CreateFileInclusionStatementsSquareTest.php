<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateFileInclusionStatementsSquareTest extends TestCase
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

    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a `__construct()` method.");
    }

    public function testCalculateArea()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="calculateArea", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting a `calculateArea()` method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Square", interface="MyShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Square` class that implements the `MyShape` interface.");
    }

    public function testReturn()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `calculateArea()` method.");
    }

    public function testSideParam()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radParam = $construct->find('param[name="side"]');

        $this->assertEquals(1, $radParam->count(), "Expecting a parameter named `side` in the `__construct()` method.");
    }

    public function testSideProperty()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $side = $subNodes->find('property[name="side", type="private"]');

        $this->assertEquals(1, $side->count(), "Expecting a private class property named `side`.");
    }

    public function testSidePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $side = $construct->find('property-call[name="side", variable="this"]');

        $this->assertEquals(1, $side->count(), "Expecting one `side` property call in the `__construct()` method of the `Square` class itself.");
    }

    public function testReturnSide()
    {
        $obj = self::$code->find('class[name="Square"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');
        $call = $nodes->find('property-call[name="side", variable="this"]');

        $this->assertEquals(2, $call->count(), "Expecting two `side` property calls in the `return` statement of the `calculateArea()` method.");
    }

    public function testRequireCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement.");
    }

    public function testRequireCallArgs()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/MyShape.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/MyShape.php` as an argument in the `require_once()` statement.");
    }
}