<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingNewKeywordTest extends TestCase
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
        $expected  = "Car Object\n(\n    [driver:protected] => Person Object\n        (\n            [name:protected] => John\n        )\n\n)";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setName = $subNodes->find('method[name="setName", type="public"]');
        $nodes = $setName->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `setName()` method.");
    }

    public function testAssignmentCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method.");
    }

    public function testPersonClass()
    {
        $nodes = self::$code->find('class[name="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Person` class.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Person"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Person' class.");
    }

    public function testPersonVariable()
    {
        $person = self::$code->find('variable[name="person"]');

        $this->assertEquals(2, $person->count(), "Expecting two occurrences of the variable named 'person'.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="protected"]');

        $this->assertEquals(1, $name->count(), "Expecting a protected class property named 'name'.");
    }

    public function testContruct()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a '__construct()' method in the `Person` class.");
    }

    public function testGetName()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');

        $this->assertEquals(1, $getName->count(), "Expecting a 'getName()' method.");
    }

    public function testSetName()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setName = $subNodes->find('method[name="setName", type="public"]');

        $this->assertEquals(1, $setName->count(), "Expecting a 'setName()' method.");
    }

    public function testReturnGet()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');
        $nodes = $getName->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getName()` method.");
    }

    public function testNamePropertyCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');
        $name = $getName->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call in the `getName()` method of the `Person` class itself.");
    }

    public function testNamePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $name = $construct->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call in the `__construct()` method of the `Person` class itself.");
    }

    public function testNamePropertyCallSet()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setName = $subNodes->find('method[name="setName", type="public"]');
        $name = $setName->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call in the `setName()` method of the `Person` class itself.");
    }

    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setName = $subNodes->find('method[name="setName", type="public"]');
        $nameParam = $setName->find('param[name="name", type="string"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' of type `string` in the `setName()` method.");
    }

    public function testNameParamCons()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name", type="string"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' of type `string` in the `__construct()` method.");
    }

    public function testCarClass()
    {
        $nodes = self::$code->find('class[name="Car"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Car` class.");
    }

    public function testCarInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Car"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Car' class.");
    }

    public function testMyCarVariable()
    {
        $myCar = self::$code->find('variable[name="myCar"]');

        $this->assertEquals(2, $myCar->count(), "Expecting two occurrences of the variable named 'myCar'.");
    }

    public function testDriverProperty()
    {
        $obj = self::$code->find('class[name="Car"]');
        $subNode = $obj->getSubnode();
        $driver = $subNode->find('property[name="driver", type="protected"]');

        $this->assertEquals(1, $driver->count(), "Expecting a protected class property named 'driver'.");
    }

    public function testContructCar()
    {
        $obj = self::$code->find('class[name="Car"]');
        $subNode = $obj->getSubnode();
        $construct = $subNode->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a '__construct()' method in the `Car` class.");
    }

    public function testDriverPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Car"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $driver = $construct->find('property-call[name="driver", variable="this"]');

        $this->assertEquals(1, $driver->count(), "Expecting one `driver` property call in the `__construct()` method of the `Car` class itself.");
    }

    public function testAssignmentCarCons()
    {
        $obj = self::$code->find('class[name="Car"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `__construct()` method of the `Car` class.");
    }

    public function testPrintR()
    {
        $obj = self::$code->find('call[name="print_r"]');

        $this->assertEquals(1, $obj->count(), "Expecting one `print_r()` function call.");
    }

    public function testPrintArgs()
    {
        $obj = self::$code->find('call[name="print_r"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="myCar"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `myCar` as an argument in the `print_r()` function call.");
    }

    //still need implementations in the proof

    // public function testDriverParamCons()
    // {
    //     $obj = self::$code->find('class[name="Car"]');
    //     $subNode = $obj->getSubnode();
    //     $construct = $subNode->find('method[name="__construct", type="public"]');
    //     $param = $construct->getSubnode()->getSubnode();
    //     $nameParam = $param->find('param[name="driver"]');

    //     $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'driver' of type `Person` in the `__construct()` method of the `Car` class.");
    // }

// NOTE: still need implementation of `declare(strict_types = 1);`
}