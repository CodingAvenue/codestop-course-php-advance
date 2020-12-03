### Facts for Serialization lesson:

Serialization is a process of converting any PHP values into a storable representation without losing their type and structure.

The `serialize()` function generates a byte-stream representation of a value.

The `unserialize()` function converts a byte-stream representation back to a specific PHP value.

Code:

```php
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
$serialized = serialize($worker);
echo "Serialized object in string format:\n" . $serialized . "\n\n";
$unserialize = unserialize($serialized);
echo "Object Unserialized:\n";
$unserialize->display();
?>
```

Output:

```
Serialized object in string format:
O:6:"Worker":3:{s:10:"Workerid";s:6:"W-1002";s:7:"*name";s:11:"Charles Han";s:7:"*dept";s:10:"Accounting";}

Object Unserialized:
ID : W-1002
Name : Charles Han
Department : Accounting
```

In the example above, the code breaks down as follows:

 - `$worker = new Worker('W-1002', 'Charles Han', 'Accounting');` creates the `$worker` instance of the `Worker` class.

 - `$serialized = serialize($worker);` converts the `$worker` object into byte-stream representation and assigns it to `$serialized`.

 - `$unserialize = unserialize($serialized);` converts the byte-stream representation in `$serialized` back to object and assigns it to `$unserialize`.

 - `$unserialize->display();` calls the `display()` method of the `Worker` class.