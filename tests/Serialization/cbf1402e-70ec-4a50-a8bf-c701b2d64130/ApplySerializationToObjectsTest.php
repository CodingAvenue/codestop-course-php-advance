<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class ApplySerializationToObjectsTest extends TestCase
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
        $expected  = "The Cat is 3 years old.The serialized object is: O:6:\"Animal\":2:{s:12:\"\0Animal\0type\";s:3:\"Cat\";s:11:\"\0Animal\0age\";i:3;}\nThe Cat is 3 years old.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement in the `display()` method.");
    }

    public function testAssignmentCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements in the `__construct()` method.");
    }

    public function testPetVariable()
    {
        $pet = self::$code->find('variable[name="pet"]');

        $this->assertEquals(3, $pet->count(), "Expecting three occurrences of the variable named `pet`.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Animal"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the `Animal` class.");
    } 
    
    public function testIsValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting a private method named `isValid()`.");
    }

    public function testGetAge()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        
        $this->assertEquals(1, $getAge->count(), "Expecting a public method named `getAge()`.");
    }

    public function testGetType()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');
        
        $this->assertEquals(1, $getType->count(), "Expecting a public method named `getType()`.");
    }

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a `display()` method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        
        $this->assertEquals(1, $construct->count(), "Expecting a `__construct()` method.");
    }
    
    public function testTypeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="private"]');
        
        $this->assertEquals(1, $type->count(), "Expecting a private class property named `type`.");
    }

    public function testAgeProperty()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $age = $subNodes->find('property[name="age", type="private"]');
        
        $this->assertEquals(1, $age->count(), "Expecting a private class property named `age`.");
    }

    public function testTypeValue()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $type = $subNodes->find('property[name="type", type="private"]');
        $value = $type->getSubNode()->getSubNode();
        $dogValue = $value->find('string[value="Dog"]');

        $this->assertEquals(1, $dogValue->count(), "Expecting the value `Dog` assigned to the `type` property.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Animal"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Animal` class.");
    }

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="petObject"]');

        $this->assertEquals(1, $display->count(), "Expecting a `display()` method call of `petObject`.");
    }

    public function testDisplayCallPet()
    {
        $display = self::$code->find('method-call[name="display", variable="pet"]');

        $this->assertEquals(1, $display->count(), "Expecting a `display()` method call of `pet`.");
    }

    public function testReturnIsValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $nodes = $isValid->find('construct[name="return"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two `return` statements in the `isValid()` method.");
    }

    public function testReturnType()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');
        $nodes = $getType->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getType()` method.");
    }

    public function testReturnAge()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $nodes = $getAge->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `return` statement in the `getAge()` method.");
    }

    public function testIfValid()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $nodes = $isValid->find('construct[name="if"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `if` statement in the `isValid()` method.");
    }

    public function testAgeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $ageParam = $construct->find('param[name="age"]');

        $this->assertEquals(1, $ageParam->count(), "Expecting a parameter named `age` in the `__construct()` method.");
    }

    public function testTypeParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $typeParam = $construct->find('param[name="type"]');

        $this->assertEquals(1, $typeParam->count(), "Expecting a parameter named `type` in the `__construct()` method.");
    }

    public function testValueParam()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $isValid = $subNodes->find('method[name="isValid", type="private"]');
        $valueParam = $isValid->find('param[name="value"]');

        $this->assertEquals(1, $valueParam->count(), "Expecting a parameter named `value` in the `isValid()` method.");
    }

    public function testTypePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $type = $construct->find('property-call[name="type", variable="this"]');

        $this->assertEquals(1, $type->count(), "Expecting one `type` property call inside the `__construct()` method of the `Animal` class itself.");
    }
    
    public function testTypePropertyCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getType = $subNodes->find('method[name="getType", type="public"]');
        $type = $getType->find('property-call[name="type", variable="this"]');

        $this->assertEquals(1, $type->count(), "Expecting one `type` property call in the `getType()` method of the `Animal` class itself.");
    }

    public function testAgePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $age = $construct->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting one `age` property call in the `__construct()` method of the `Animal` class itself.");
    }

    public function testAgePropertyCallGet()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $getAge = $subNodes->find('method[name="getAge", type="public"]');
        $age = $getAge->find('property-call[name="age", variable="this"]');

        $this->assertEquals(1, $age->count(), "Expecting one `age` property call in the `getAge()` method of the `Animal` class itself.");
    }

    public function testIsValidCallCons()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $isValid = $construct->find('method-call[name="isValid", variable="this"]');
        
        $this->assertEquals(1, $isValid->count(), "Expecting one `isValid()` method call in the `__construct()` method the `Animal` class itself.");
    }

    public function testGetTypeCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getType = $display->find('method-call[name="getType", variable="this"]');

        $this->assertEquals(1, $getType->count(), "Expecting one `getType()` method call in the `display()` method of the `Animal` class itself.");
    }

    public function testGetAgeCall()
    {
        $obj = self::$code->find('class[name="Animal"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $getAge = $display->find('method-call[name="getAge", variable="this"]');

        $this->assertEquals(1, $getAge->count(), "Expecting one `getAge()` method call in the `display()` method of the `Animal` class itself.");
    }

    public function testSerialize()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="serialize"]');

        $this->assertEquals(1, $call->count(), "Expecting one `serialize()` function call in the assignment statement.");
    }

    public function testConverted()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="converted"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `converted` in assignment statements.");
    }

    public function testSerializeArgs()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="serialize"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $pet = $subNode->find('variable[name="pet"]');

        $this->assertEquals(1, $pet->count(), "Expecting one variable named `pet` as an argument in the `serialize()` function call.");
    }

    public function testUnserialize()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="unserialize"]');

        $this->assertEquals(1, $call->count(), "Expecting one `unserialize()` function call in the assignment statement.");
    }

    public function testUnserializeArgs()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="unserialize"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $converted = $subNode->find('variable[name="converted"]');

        $this->assertEquals(1, $converted->count(), "Expecting one variable named `converted` as an argument in the `unserialize()` function call.");
    }

    public function testPetObject()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="petObject"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `petObject` in the assignment statement.");
    }

    public function testStringInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $string = $obj->find('string[value="The serialized object is: "]');

        $this->assertEquals(1, $string->count(), "Expecting a string `The serialized object is: ` in the `echo` statement.");
    }

    public function testVarInEcho()
    {
        $obj = self::$code->find('construct[name="echo"]');
        $var = $obj->find('variable[name="converted"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `converted` in the `echo` statement.");
    }
}