### Facts for Manipulating Files lesson:

PHP offers other file handling functions to read, copy, rename, and delete a file. These are as follows:

 - `unlink($file)` deletes the specified `$file` and generates the `E_WARNING` level error on failure.

 - `rename($oldName, $newName)` renames the specified file `$oldName` to the specified `$newName`.

 - `readfile($file)` reads and writes the specified `$file` to the output buffer.

 - `readlink($file)` reads and returns the symbolic link of the specified `$file`.

Code:
```php
<?php
function deleteFile($fileToDelete)
{
    if (!unlink($fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$file = __DIR__ . "/newfile.txt";
deleteFile($file);
?>
```

In the example above, the code breaks down as follows:

 - `function deleteFile($fileToDelete) {... }` defines the `deleteFile()` user-defined function with the parameter `$fileToDelete`.

 - `unlink($fileToDelete)` deletes the specified `$fileToDelete`. 

 - `$file = __DIR__ . "/myNewFile.txt";` assigns the `myNewFile.txt` file path to `$file`.

 - `deleteFile($file);` calls the `deleteFile()` user-defined function passing the argument `$file`.
