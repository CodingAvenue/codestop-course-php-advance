<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class UseTernaryOperatorTest extends TestCase
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
        $expected  = "positive";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `echo` statement.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testNumberVariable()
    {
        $nodes = self::$code->find('variable[name="number"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `number`.");
    }

    public function testResultVariable()
    {
        $nodes = self::$code->find('variable[name="result"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `result`.");
    }

    public function testPositiveValue()
    {
        $nodes = self::$code->find('string[value="positive"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a string `positive`.");
    }

    public function testNegativeValue()
    {
        $nodes = self::$code->find('string[value="negative"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a string `negative`.");
    }

    public function testResultOnEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $result = $nodes->find('variable[name="result"]');

        $this->assertEquals(1, $result->count(), "Expecting one occurrence of the variable named `result` in the `echo` statement.");
    }

    public function testGreateThanEqualOperator()
    {
        $nodes = self::$code->find('operator[name="greater-equal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one greater than or equal to operator.");
    }

    public function testNumberOnCondition()
    {
        $nodes = self::$code->find('operator[name="greater-equal"]');
        $left = $nodes->getSubNode('left'); 
        $var = $left->find('variable[name="number"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `number` in the conditional expression.");
    }

    public function testValueOnCondition()
    {
        $nodes = self::$code->find('operator[name="greater-equal"]');
        $left = $nodes->getSubNode('left'); 
        $num = $left->find('integer'); // nice to have 'integer[value=75]' 

        $this->assertEquals(1, $num->count(), "Expecting an integer in the conditional expression.");
    }

    public function testNumberOnAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $subNode = $nodes->getSubNode();
        $var = $subNode->find('variable[name="number"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `number` in an assignment statement.");
    }

    public function testResultOnAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $subNode = $nodes->getSubNode();
        $var = $subNode->find('variable[name="result"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `result` in an assignment statement.");
    }

    // still needs ternary operator validation here...
}
