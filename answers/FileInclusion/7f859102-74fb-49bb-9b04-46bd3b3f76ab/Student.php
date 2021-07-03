<?php 
require __DIR__ . '/Person.php';

class Student extends Person
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student("John", 15);
$student->display();
?>