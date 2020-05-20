<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class NoArgumentSpecifiedOnMethodTest extends TestCase
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
        $expected  = "Person name: Anna";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testStringInEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $subNode = $nodes->getSubnode()->getSubnode();
        $value = $subNode->find('string[value="Person name: "]');

        $this->assertEquals(1, $value->count(), "Expecting a string `Person name: ` in an echo statement.");
    }

    public function testGetNameCallInEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $subNode = $nodes->getSubnode()->getSubnode();
        $getName = $subNode->find('method-call[name="getName", variable="person"]');

        $this->assertEquals(1, $getName->count(), "Expecting a 'getName()' method call of 'person' in an echo statement.");
    }

    public function testAssignment()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $setName = $subNodes->find('method[name="setName", type="public"]');
        $nodes = $setName->find('operator[name="assignment"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one assignment statement in the `setName()` method.");
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

        $this->assertEquals(3, $person->count(), "Expecting three occurrences of the variable named 'person'.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="protected"]');

        $this->assertEquals(1, $name->count(), "Expecting a protected class property named 'name'.");
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

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `getName()` method.");
    }

    public function testNamePropertyCall()
    {
        $obj = self::$code->find('class[name="Person"]');
        $subNodes = $obj->getSubnode();
        $getName = $subNodes->find('method[name="getName", type="public"]');
        $name = $getName->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call in the `getName()` method of the `Person` class itself.");
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

    public function testGetNameCall()
    {
        $getName = self::$code->find('method-call[name="getName", variable="person"]');

        $this->assertEquals(1, $getName->count(), "Expecting a 'getName()' method call of 'person'.");
    }

    public function testSetNameCall()
    {
        $setName = self::$code->find('method-call[name="setName", variable="person"]');

        $this->assertEquals(1, $setName->count(), "Expecting a 'setName()' method call of 'person'.");
    }

    public function testSetNameCallArgs()
    {
        $setName = self::$code->find('method-call[name="setName", variable="person"]');
        $args = $setName->getSubNode()->getSubnode();
        $value = $args->find('string[value="Anna"]');

        $this->assertEquals(1, $value->count(), "Expecting the argument `Anna` in the 'setName()' method call of 'person'.");
    }

// NOTE: still need implementation of `declare(strict_types = 1);`
}