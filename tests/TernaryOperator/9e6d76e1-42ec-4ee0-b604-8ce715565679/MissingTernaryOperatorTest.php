<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CorrectTernaryOperatorTest extends TestCase
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
        $expected  = "The student grade is: 75";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one echo statement.");
    }

    public function testAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        
        $this->assertEquals(2, $nodes->count(), "Expecting two assignment statements.");
    }

    public function testScoreVariable()
    {
        $nodes = self::$code->find('variable[name="score"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named 'score'.");
    }

    public function testStudentGradeVariable()
    {
        $nodes = self::$code->find('variable[name="studentGrade"]');

        $this->assertEquals(2, $nodes->count(), "Expecting two occurrences of the variable named 'studentGrade'.");
    }

    public function testTheGradeValue()
    {
        $nodes = self::$code->find('string[value="The student grade is: "]');

        $this->assertEquals(1, $nodes->count(), "Expecting a string 'The student grade is: '.");
    }

    public function testInvalidValue()
    {
        $nodes = self::$code->find('string[value="Invalid value"]');

        $this->assertEquals(1, $nodes->count(), "Expecting a string 'Invalid value'.");
    }

    public function testStudentGradeOnEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $studentGrade = $nodes->find('variable[name="studentGrade"]');

        $this->assertEquals(1, $studentGrade->count(), "Expecting one occurrence of the variable named 'studentGrade' in the echo statement.");
    }

    public function testScoreOnAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $subNode = $nodes->getSubNode();
        $var = $subNode->find('variable[name="score"]');

        $this->assertEquals(2, $var->count(), "Expecting two occurrences of the variable named 'score' in an assignment statement.");
    }

    public function testStudentGradeOnAssignment()
    {
        $nodes = self::$code->find('operator[name="assignment"]');
        $subNode = $nodes->getSubNode();
        $var = $subNode->find('variable[name="studentGrade"]');

        $this->assertEquals(1, $var->count(), "Expecting one occurrence of the variable named 'studentGrade' in an assignment statement.");
    }

    public function testStringOnEcho()
    {
        $nodes = self::$code->find('construct[name="echo"]');
        $string = $nodes->find('string[value="The student grade is: "]');

        $this->assertEquals(1, $string->count(), "Expecting a string 'The student grade is: ' in the echo statement.");
    }
    // still needs ternary operator validation here...
}
