<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class MissingDoubleQuotesOnOperandTest extends TestCase
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
        $expected  = "Needs Improvement";

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

    public function testStudentGradeVariable()
    {
        $nodes = self::$code->find('variable[name="studentGrade"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `studentGrade`.");
    }

    public function testRemarksVariable()
    {
        $nodes = self::$code->find('variable[name="remarks"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named `remarks`.");
    }

    public function testVeryGoodValue()
    {
        $nodes = self::$code->find('string[value="Very Good"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a string `Very Good`.");
    }

    public function testNeedsImprovementValue()
    {
        $nodes = self::$code->find('string[value="Needs Improvement"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a string `Needs Improvement`.");
    }

    public function testRemarksOnEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $remarks = $nodes->find('variable[name="remarks"]');

        $this->assertEquals(1, $remarks->count(), "Expecting one occurrence of the variable named `remarks` in the `echo` statement.");
    }

    public function testGreateThanOperator()
    {
        $nodes = self::$code->find('operator[name="greater"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one greater than operator.");
    }

    public function testStudentGradeOnCondition()
    {
        $nodes = self::$code->find('operator[name="greater"]');
        $left = $nodes->getSubNode('left'); 
        $var = $left->find('variable[name="studentGrade"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `studentGrade` in the conditional expression.");
    }

    public function testValueOnCondition()
    {
        $nodes = self::$code->find('operator[name="greater"]');
        $left = $nodes->getSubNode('left'); 
        $num = $left->find('integer'); // nice to have 'integer[value=75]' 

        $this->assertEquals(1, $num->count(), "Expecting an integer in the conditional expression.");
    }

    public function testStudentGradeOnAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $subNode = $nodes->getSubNode();
        $var = $subNode->find('variable[name="studentGrade"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named `studentGrade` in an assignment statement.");
    }

    public function testRemarksOnAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $subNode = $nodes->getSubNode();
        $var = $subNode->find('variable[name="remarks"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named `remarks` in an assignment statement.");
    }

    // still needs ternary operator validation here...
}
