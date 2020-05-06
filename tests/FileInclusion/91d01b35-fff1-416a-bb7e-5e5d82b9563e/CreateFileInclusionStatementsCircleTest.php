<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateFileInclusionStatementsCircleTest extends TestCase
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
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }

    public function testCalculateArea()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $area = $subNodes->find('method[name="calculateArea", type="public"]');

        $this->assertEquals(1, $area->count(), "Expecting an calculateArea() method.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Circle", interface="MyShape"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Circle` class that implements the `MyShape` interface.");
    }

    public function testReturn()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `calculateArea()` method.");
    }

    public function testRadiusParam()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radParam = $construct->find('param[name="radius"]');

        $this->assertEquals(1, $radParam->count(), "Expecting a parameter named 'radius' in the `__construct()` method.");
    }

    public function testRadiusProperty()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $radius = $subNodes->find('property[name="radius", type="private"]');

        $this->assertEquals(1, $radius->count(), "Expecting a private class property named 'radius'.");
    }

    public function testConstPi()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');

        $this->assertEquals(1, $pi->count(), "Expecting a class constant named `PI`.");
    }

    public function testConstPiValue()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $pi = $subNodes->find('const[name="PI"]');
        $value = $pi->getSubNode()->getSubNode();
        $piValue = $value->find('float'); // NOTE: need to verify and improve this validation

        $this->assertEquals(1, $piValue->count(), "Expecting a class PI constant value of type float.");
    }

    public function testRadiusPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $radius = $construct->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(1, $radius->count(), "Expecting one `radius` property call inside the `__construct()` method of the `Circle` class itself.");
    }

    public function testReturnRadius()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');
        $call = $nodes->find('property-call[name="radius", variable="this"]');

        $this->assertEquals(2, $call->count(), "Expecting two `radius` property calls in the return statement of the `calculateArea()` method.");
    }

    public function testReturnPiCall()
    {
        $obj = self::$code->find('class[name="Circle"]');
        $subNodes = $obj->getSubnode();
        $calculateArea = $subNodes->find('method[name="calculateArea", type="public"]');
        $nodes = $calculateArea->find('construct[name="return"]');
        $call = $nodes->find('const-fetch[name="PI", class="self"]');

        $this->assertEquals(1, $call->count(), "Expecting one `PI` constant call in the return statement of the `calculateArea()` method.");
    }

    public function testIncludeCall()
    {
        $nodes = self::$code->find('include[type="include_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `include_once()` statement.");
    }

    public function testIncludeCallArgs()
    {
        $nodes = self::$code->find('include[type="include_once"]');
        $string = $nodes->find('string[value="/MyShape.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/MyShape.php` as an argument in the `include_once()` statement.");
    }
}