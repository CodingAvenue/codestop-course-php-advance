<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateFileInclusionStatementsMainTest extends TestCase
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
        $expected  = "Circle area: 19.6349375\nSquare area: 6.25";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two echo statements.");
    }

    public function testStringInEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $string = $nodes->find('string[value="Circle area: "]');

        $this->assertEquals(1, $string->count(), "Expecting a string `Circle area: ` in the echo statement.");
    }

    public function testCircleVariable()
    {
        $circle = self::$code->find('variable[name="circle"]');

        $this->assertEquals(2, $circle->count(), "Expecting two occurrences of the variable named 'circle'.");
    }

    public function testSquareVariable()
    {
        $square = self::$code->find('variable[name="square"]');

        $this->assertEquals(2, $square->count(), "Expecting two occurrences of the variable named 'square'.");
    }

    public function testInstantiationSquare()
    {
        $nodes = self::$code->find('instantiate[class="Square"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Square' class.");
    } 

    public function testInstantiationCircle()
    {
        $nodes = self::$code->find('instantiate[class="Circle"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Circle' class.");
    } 

    public function testCalculateAreaCall()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $area = $nodes->find('method-call[name="calculateArea", variable="circle"]');

        $this->assertEquals(1, $area->count(), "Expecting a 'calculateArea()' method call of 'circle' in the `echo` statement.");
    }   

    public function testCalculateAreaCallSquare()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $area = $nodes->find('method-call[name="calculateArea", variable="square"]');

        $this->assertEquals(1, $area->count(), "Expecting a 'calculateArea()' method call of 'square' in the `echo` statement.");
    }   

    public function testIncludeCall()
    {
        $nodes = self::$code->find('include[type="include"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `include()` statement.");
    }

    public function testRequireCall()
    {
        $nodes = self::$code->find('include[type="require"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require()` statement.");
    }

    public function testIncludeCallArgs()
    {
        $nodes = self::$code->find('include[type="include"]');
        $string = $nodes->find('string[value="/Circle.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/Circle.php` as an argument in the `include()` statement.");
    }

    public function testRequireCallArgs()
    {
        $nodes = self::$code->find('include[type="require"]');
        $string = $nodes->find('string[value="/Square.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/Square.php` as an argument in the `require()` statement.");
    }
}