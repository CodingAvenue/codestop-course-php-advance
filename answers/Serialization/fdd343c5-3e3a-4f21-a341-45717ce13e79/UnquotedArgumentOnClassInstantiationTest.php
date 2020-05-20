<?php
class Worker
{
    private $id;
    protected $name;
    protected $dept;

    public function __construct($id, $name, $dept)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
    }

    public function display()
    {
        echo "ID : " . $this->id . "\nName : " . $this->name . "\nDepartment : " . $this->dept;
    }
}

$worker = new Worker('W-1002', 'Charles Han', 'Accounting');
$serializedWorker = serialize($worker);
print_r($serializedWorker);
echo "\n";
$unserializedWorker = unserialize($serializedWorker);
print_r($unserializedWorker);
?>