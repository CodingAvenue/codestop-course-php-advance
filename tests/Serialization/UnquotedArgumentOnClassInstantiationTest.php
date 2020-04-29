<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UnquotedArgumentOnClassInstantiationTest extends TestCase
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
        $expected  = "O:6:\"Worker\":3:{s:10:\"\0Worker\0id\";s:6:\"W-1002\";s:7:\"\0*\0name\";s:11:\"Charles Han\";s:7:\"\0*\0dept\";s:10:\"Accounting\";}\nWorker Object\n(\n    [id:Worker:private] => W-1002\n    [name:protected] => Charles Han\n    [dept:protected] => Accounting\n)";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $nodes = $display->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an echo statement in the `display()` method.");
    }

    public function testAssignmentCons()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nodes = $construct->find('operator[name="assignment"]');
	
        $this->assertEquals(3, $nodes->count(), "Expecting three assignment statements in the `__construct()` method.");
    }

    public function testWorkerVariable()
    {
        $worker = self::$code->find('variable[name="worker"]');

        $this->assertEquals(2, $worker->count(), "Expecting two occurrences of the variable named 'worker'.");
    }

    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Worker"]');
        
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Worker' class.");
    } 

    public function testDisplay()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');

        $this->assertEquals(1, $display->count(), "Expecting a display() method.");
    }

    public function testConstruct()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');

        $this->assertEquals(1, $construct->count(), "Expecting a __construct() method.");
    }
    
    public function testIdProperty()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $id = $subNodes->find('property[name="id", type="private"]');

        $this->assertEquals(1, $id->count(), "Expecting a private class property named 'id'.");
    }

    public function testNameProperty()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $name = $subNodes->find('property[name="name", type="protected"]');

        $this->assertEquals(1, $name->count(), "Expecting a protected class property named 'name'.");
    }

    public function testDeptProperty()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $dept = $subNodes->find('property[name="dept", type="protected"]');

        $this->assertEquals(1, $dept->count(), "Expecting a protected class property named 'dept'.");
    }

    public function testClass()
    {
        $nodes = self::$code->find('class[name="Worker"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Worker` class.");
    }

    public function testIdParam()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $idParam = $construct->find('param[name="id"]');

        $this->assertEquals(1, $idParam->count(), "Expecting a parameter named 'id' in the `__construct()` method.");
    }

    public function testNameParam()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $nameParam = $construct->find('param[name="name"]');

        $this->assertEquals(1, $nameParam->count(), "Expecting a parameter named 'name' in the `__construct()` method.");
    }

    public function testDeptParam()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $deptParam = $construct->find('param[name="dept"]');

        $this->assertEquals(1, $deptParam->count(), "Expecting a parameter named 'dept' in the `__construct()` method.");
    }

    public function testIdPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $id = $construct->find('property-call[name="id", variable="this"]');

        $this->assertEquals(1, $id->count(), "Expecting one `id` property call inside the `__construct()` method of the `Worker` class itself.");
    }

    public function testIdPropertyCallDis()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $id = $display->find('property-call[name="id", variable="this"]');

        $this->assertEquals(1, $id->count(), "Expecting one `id` property call inside the `display()` method of the `Worker` class itself.");
    }

    public function testNamePropertyCallCons()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $name = $construct->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call inside the `__construct()` method of the `Worker` class itself.");
    }

    public function testNamePropertyCallDis()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $name = $display->find('property-call[name="name", variable="this"]');

        $this->assertEquals(1, $name->count(), "Expecting one `name` property call inside the `display()` method of the `Worker` class itself.");
    }

    public function testDeptPropertyCallCons()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $construct = $subNodes->find('method[name="__construct", type="public"]');
        $dept = $construct->find('property-call[name="dept", variable="this"]');

        $this->assertEquals(1, $dept->count(), "Expecting one `dept` property call inside the `__construct()` method of the `Worker` class itself.");
    }

    public function testDeptPropertyCallDis()
    {
        $obj = self::$code->find('class[name="Worker"]');
        $subNodes = $obj->getSubnode();
        $display = $subNodes->find('method[name="display", type="public"]');
        $dept = $display->find('property-call[name="dept", variable="this"]');

        $this->assertEquals(1, $dept->count(), "Expecting one `dept` property call inside the `display()` method of the `Worker` class itself.");
    }

    public function testSerialize()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="serialize"]');

        $this->assertEquals(1, $call->count(), "Expecting one `serialize()` function call in the assignment statement.");
    }

    public function testSerializedWorker()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="serializedWorker"]');

        $this->assertEquals(2, $var->count(), "Expecting two variables named `serializedWorker` in assignment statements.");
    }

    public function testSerializeArgs()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $call = $nodes->find('call[name="serialize"]');
        $subNode = $call->getSubNode()->getSubNode('args');
        $worker = $subNode->find('variable[name="worker"]');

        $this->assertEquals(1, $worker->count(), "Expecting a variable named `worker` as argument in the `serialize()` function call.");
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
        $serializedWorker = $subNode->find('variable[name="serializedWorker"]');

        $this->assertEquals(1, $serializedWorker->count(), "Expecting a variable named `serializedWorker` as argument in the `unserialize()` function call.");
    }

    public function testUnserializedWorker()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $var = $nodes->find('variable[name="unserializedWorker"]');

        $this->assertEquals(1, $var->count(), "Expecting one variable named `unserializedWorker` in the assignment statement.");
    }

    public function testPrintR()
    {
        $obj = self::$code->find('call[name="print_r"]');

        $this->assertEquals(2, $obj->count(), "Expecting two `print_r()` function calls.");
    }

    public function testPrintArgs()
    {
        $obj = self::$code->find('call[name="print_r"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="serializedWorker"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `serializedWorker` as argument in the `print_r()` function call.");
    }

    public function testPrintArgs2()
    {
        $obj = self::$code->find('call[name="print_r"]');
        $subNode = $obj->getSubNode()->getSubNode('args');
        $args = $subNode->find('variable[name="unserializedWorker"]');

        $this->assertEquals(1, $args->count(), "Expecting a variable named `unserializedWorker` as argument in the `print_r()` function call.");
    }
}