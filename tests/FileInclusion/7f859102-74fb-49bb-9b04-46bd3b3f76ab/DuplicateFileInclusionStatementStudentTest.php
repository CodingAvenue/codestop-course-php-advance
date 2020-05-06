<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class DuplicateFileInclusionStatementStudentTest extends TestCase
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
        $expected  = "John is 15 years old.";
        
        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testStudentVariable()
    {
        $student = self::$code->find('variable[name="student"]');
        
        $this->assertEquals(2, $student->count(), "Expecting two occurrences of the variable named 'student'.");
    }
    
    public function testInstantiation()
    {
        $nodes = self::$code->find('instantiate[class="Student"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Student' class.");
    } 
    
    public function testGetCourse()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $getCourse = $subNodes->find('method[name="getCourse", type="public"]');
        
        $this->assertEquals(1, $getCourse->count(), "Expecting a public method named 'getCourse()'.");
    }
 
    public function testCourseProperty()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $course = $subNodes->find('property[name="course", type="private"]');
        
        $this->assertEquals(1, $course->count(), "Expecting a private class property named 'course'.");
    }
    
    public function testClassStudent()
    {
        $nodes = self::$code->find('class[name="Student", extends="Person"]');
		
        $this->assertEquals(1, $nodes->count(), "Expecting a class declaration of the `Student` class that extends the `Person` class.");
    }  

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="student"]');
        
        $this->assertEquals(1, $display->count(), "Expecting a 'display()' method call of 'student'.");
    }   
      
    public function testReturn()
    {
        $obj = self::$code->find('class[name="Student"]');
        $subNodes = $obj->getSubnode();
        $getCourse = $subNodes->find('method[name="getCourse", type="public"]');
        $nodes = $getCourse->find('construct[name="return"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one return statement in the `getCourse()` method.");
    }

    public function testRequireCall()
    {
        $nodes = self::$code->find('include[type="require"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require()` statement.");
    }

    public function testRequireCallArgs()
    {
        $nodes = self::$code->find('include[type="require"]');
        $string = $nodes->find('string[value="/Person.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/Person.php` as an argument in the `require()` statement.");
    }
}