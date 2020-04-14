# Manipulating Files

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile($fileToRead) or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile, $myCopiedFile);
readFileContent($myCopiedFile);
?>
```
/// type=SS, answer=[4]

Execute the program. What is its output?

 - No output is displayed.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in a single line.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in separate lines.


/// type=SS, answer=[1]

Which of the following is an error handling function?

 - `die()`

 - `copy()`

 - `__DIR__`

 - `readfile()`

 - `readFileContent()`


/// type=MS, answer=[3,5]

Which of the following are user-defined functions?

 - `die()`

 - `copy()`

 - `copyFile()`

 - `readfile()`

 - `readFileContent()`


/// type=MS, answer=[1,3,4]

Which of the following are parameters?

 - `$file`

 - `$myFile`

 - `$fileToRead`

 - `$copiedFile`

 - `$myCopiedFile`


/// type=MS, answer=[2,5]

Which of the following are arguments?

 - `$file`

 - `$myFile`

 - `$fileToRead`

 - `$copiedFile`

 - `$myCopiedFile`


/// type=MS, answer=[2,4]

Which of the following are file handling functions?

 - `die()`

 - `copy()`

 - `copyFile()`

 - `readfile()`

 - `readFileContent()`


/// type=MS, answer=[1,2,3,4]

Which of the following are function calls?

 - `readfile($fileToRead)`

 - `copy($file, $copiedFile)`

 - `readFileContent($myCopiedFile);`

 - `copyFile($myFile, $myCopiedFile);`

 - `function readFileContent($fileToRead) {... }`


/// type=SS, answer=[3]

Which of the following is a magic constant?

 - `die()`

 - `copy()`

 - `__DIR__`

 - `$myFile`

 - `readFile()`


/// type=SS, answer=[1]

On line 4, what does the `copy($file, $copiedFile)` function call do?

 - It copies the content of `$file` to `$copiedFile`.

 - It copies the content of `$copiedFile` to `$file`.

 - It accesses the content of `$file` in `$copiedFile`.

 - It accesses the content of `$copiedFile` in `$file`.

 - It removes the content of `$file` from `$copiedFile`.


/// type=MS, answer=[4,5]

Which statements correctly describe the `copyFile()` function?

 - It opens the specified file as append-only.

 - It creates the specified file if it does not exist.

 - It reads the content of the specified file line by line.

 - It copies the content of the specified file to another file.

 - It is a user-defined function that requires two arguments.


/// type=MS, answer=[1,4]

On line 9, what does the `readfile($fileToRead)` function call do?

 - It reads the specified `$fileToRead`.

 - It deletes the specified `$fileToRead` from its directory.

 - It creates the specified `$fileToRead` if it does not exist.

 - It writes the specified `$fileToRead` to the output buffer.

 - It copies the content of the specified `$fileToRead` to another file.


/// type=MS, answer=[1,4,5]

Which statements correctly describe the `readFileContent()` function?

 - It reads the specified file.

 - It removes the content of the specified file.

 - It creates the specified file if it does not exist.

 - It writes the specified file to the output buffer.

 - It is a user-defined function that requires one argument.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function renameFile($fileToRename, $newName)
{
   rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
echo readlink(__DIR__ . "/myRenamedDocument.txt");
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - No output is displayed.

 - It prints `Unable to rename the file.`.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

 - It prints `C:\xampp\htdocs\PhpProjectFileHandling\myRenamedDocument.txt`.


/// type=SS, answer=[5]

Which of the following is a user-defined function?

 - `$file`

 - `die()`

 - `rename()`

 - `readlink()`

 - `renameFile()`


/// type=MS, answer=[1,2,3,4]

Which of the following are function calls?

 - `rename($fileToRename, $newName)`

 - `die("Unable to rename the file.")`

 - `renameFile($file, "myRenamedDocument.txt")`

 - `readlink(__DIR__ . "/myRenamedDocument.txt")`

 - `function renameFile($fileToRename, $newName) {... }`


/// type=MS, answer=[3,4]

Which of the following are file handling functions?

 - `$file`

 - `die()`

 - `rename()`

 - `readlink()`

 - `renameFile()`


/// type=SS, answer=[4]

On line 4, what does the `rename($fileToRename, $newName)` function call do?

 - It copies the content of `$fileToRename` to `$newName`.

 - It replaces the content of `$fileToRename` with `$newName`.

 - It removes the content of `$fileToRename` from `$newName`.

 - It changes the name of the specified `$fileToRename` to `$newName`.

 - It writes the content of `$fileToRename` to the specified `$newName`.


/// type=MS, answer=[3,4,5]

Which statements correctly describe the `renameFile()` function?

 - It opens the specified file as append-only.

 - It copies the content of the specified file to another file.

 - It is a user-defined function that requires two arguments.

 - It changes the name of the specified file to a new filename.

 - It prints the message `Unable to rename the file.` if an error occurs.


/// type=SS, answer=[5]

In the `echo` statement on line 9, what does the `readlink(__DIR__ . "/myRenamedDocument.txt")` function call do?

 - It deletes the specified `myRenamedDocument.txt` file.

 - It accesses the specified `myRenamedDocument.txt` file.

 - It reads the content of the specified `myRenamedDocument.txt` file.

 - It changes the name of the specified `myRenamedDocument.txt` file.

 - It returns the symbolic link path of the `myRenamedDocument.txt` file.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function renameFile($fileToRename, $newName)
{
    rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

function deleteFile($fileToDelete)
{
    if (!unlink($fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
$newFile = __DIR__ . "/myRenamedDocument.txt";
deleteFile($newFile);
?>
```
/// type=SS, answer=[5]

Execute the program. What is its output?

 - No output is displayed.

 - It prints `myRenamedDocument.txt`.

 - It prints `Unable to delete the file.`.

 - It prints `Unable to rename the file.`.

 - It prints `The file is deleted successfully.`.


/// type=MS, answer=[4,5]

Which of the following are user-defined functions?

 - `die()`

 - `rename()`

 - `unlink()`

 - `renameFile()`

 - `deleteFile()`


/// type=MS, answer=[2,3]

Which of the following are file handling functions?

 - `die()`

 - `rename()`

 - `unlink()`

 - `renameFile()`

 - `deleteFile()`


/// type=SS, answer=[4]

Which statement best describes `rename($fileToRename, $newName)` on line 4?

 - It copies the content of `$fileToRename` to `$newName`.

 - It replaces the content of `$fileToRename` with `$newName`.

 - It removes the content of `$fileToRename` from `$newName`.

 - It changes the name of the specified `$fileToRename` to `$newName`.

 - It writes the content of `$fileToRename` to the specified `$newName`.


/// type=SS, answer=[2]

In the `if` statement on line 9, what does the `unlink($fileToDelete)` function call do?

 - It copies the specified `$fileToDelete`.

 - It deletes the specified `$fileToDelete`.

 - It renames the specified `$fileToDelete`.

 - It changes the name of the specified `$fileToDelete`.

 - It reads the content of the specified `$fileToDelete`.


/// type=MS, answer=[1,3,4,5]

Which statements correctly describe the `deleteFile()` function?

 - It deletes the specified file.

 - It changes the name of the specified file.

 - It is a user-defined function that requires one argument.

 - It prints `Unable to delete the file.` if an error occurs.

 - It prints `The file is deleted successfully.` after deleting the specified file.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[3,5]

Which statements correctly describe the `readlink()` function?

 - It reads the specified file.

 - It changes the name of a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.


/// type=MS, answer=[1,5]

Which statements are true about the `unlink()` function?

 - It deletes a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.

 - It generates the `E_WARNING` level error on failure.


/// type=MS, answer=[1,4]

Which statements correctly describe the `readfile()` function?

 - It reads the specified file.

 - It changes the name of a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.


/// type=SS, answer=[2]

Which statement is true about the `rename()` function?

 - It reads the specified file.

 - It changes the name of a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile($fileToRead) or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile $myCopiedFile);
readFileContent($myCopiedFile);
?>
```
/// type=SS, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in a single line.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in separate lines.


/// type=SS, answer=[5]

What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - There is no close parenthesis `)` after `$myCopiedFile` on line 14.

 - On line 14, the `copyFile($myFile $myCopiedFile)` function call is invalid.

 - On line 14, the argument `$myCopiedFile` is not enclosed in double quotes `""`.

 - There is no semicolon `;` at the end of the `copyFile($myFile $myCopiedFile)` function call on line 14.

 - There is no comma `,` between `$myFile` and `$myCopiedFile` in the `copyFile()` function call on line 14.

:::


/// type=CR, answer=[tests/ManipulatingFiles/MissingCommaBetweenArgumentsTest.php]

Correct the code so that it successfully copies and reads the content of the specified file.

```php
<?php
function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile($fileToRead) or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile $myCopiedFile);
readFileContent($myCopiedFile);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile() or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile, $myCopiedFile);
readFileContent($myCopiedFile);
?>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, answer=[2,3,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 9.

 - There is no argument specified in the `readfile()` function call on line 9.

 - The `readfile()` file handling function requires one argument when called.

 - On line 9, the statement `readfile() or die("Unable to read the file.");` is invalid.

 - On line 9, the string `Unable to read the file.` in the `die()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/ManipulatingFiles/MissingArgumentOnReadfileTest.php]

Correct the code so that it successfully copies and reads the content of the specified file.

```php
<?php
function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile() or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile, $myCopiedFile);
readFileContent($myCopiedFile);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function copyFile($file, $copiedFile)
{
    copy($copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile($fileToRead) or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile, $myCopiedFile);
readFileContent($myCopiedFile);
?>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, answer=[1,2,3]

Which statements correctly describe the error?

 - The `copy()` file handling function requires two arguments when called.

 - There is no first argument `$file` specified in the `copy()` function call on line 9.

 - On line 4, the statement `copy($copiedFile) or die("Unable to copy the file.");` is invalid.

 - On line 4, the argument `$copiedFile` in the `copy()` function call is not enclosed in double quotes `""`. 

 - There is no comma `,` between `$myFile` and `$myCopiedFile` in the `copyFile()` function call on line 14.

:::


/// type=CR, answer=[tests/ManipulatingFiles/MissingOneArgumentOnCopyFunctionTest.php]

Correct the code so that it successfully copies and reads the content of the specified file.

```php
<?php
function copyFile($file, $copiedFile)
{
    copy($copiedFile) or die("Unable to copy the file.");
}

function readFileContent($fileToRead)
{
    readfile($fileToRead) or die("Unable to read the file.");
}

$myFile = __DIR__ . "/testDocument.txt";
$myCopiedFile = __DIR__ . "/copiedFromTestDocument.txt";
copyFile($myFile, $myCopiedFile);
readFileContent($myCopiedFile);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function renameFile($fileToRename, $newName)
{
   rename($fileToRename $newName) or die("Unable to rename the file."); 
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
echo readlink(__DIR__ . "/myRenamedDocument.txt");
?>
```
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 4.

 - On line 4, the `rename($fileToRename $newName)` function call is invalid.

 - The `rename()` file handling function accepts only one argument when called.

 - On line 4, the argument `newName` in the `rename()` function call is not enclosed in double quotes `""`.

 - There is no comma `,` between `$fileToRename` and `$newName` in the `rename()` function call on line 4.

:::


/// type=CR, answer=[tests/ManipulatingFiles/MissingCommaBetweenArgumentsOnRenameTest.php]

Correct the code so that it successfully renames the specified file.

```php
<?php
function renameFile($fileToRename, $newName)
{
   rename($fileToRename $newName) or die("Unable to rename the file."); 
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
echo readlink(__DIR__ . "/myRenamedDocument.txt");
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function renameFile($fileToRename, $newName)
{
    rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

function deleteFile($fileToDelete)
{
    if (!unlink $fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
$newFile = __DIR__ . "/myRenamedDocument.txt";
deleteFile($newFile);
?>
```
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, answer=[3,4]

Which statements correctly describe the error?

 - There is no open curly brace `{` after the `if` construct on line 9.

 - The `unlink()` file handling function requires two arguments when called.

 - There is no open parenthesis `(` after `unlink` in the `if` construct on line 9.

 - On line 9, the function call `unlink $fileToDelete)` in the `if` construct is invalid.

 - On line 9, the argument `$fileToDelete` in the `unlink()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/ManipulatingFiles/MissingOpenParenthesisAfterUnlinkTest.php]

Correct the code so that it successfully renames and deletes the specified file.

```php
<?php
function renameFile($fileToRename, $newName)
{
    rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

function deleteFile($fileToDelete)
{
    if (!unlink $fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, "myRenamedDocument.txt");
$newFile = __DIR__ . "/myRenamedDocument.txt";
deleteFile($newFile);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function renameFile($fileToRename, $newName)
{
    rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

function deleteFile($fileToDelete)
{
    if (!unlink($fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, myRenamedDocument.txt);
$newFile = __DIR__ . "/myRenamedDocument.txt";
deleteFile($newFile);
?>
```
/// type=MS, answer=[1,3,5]

Execute the program. What are the error messages?

 - Use of undefined constant `txt` - assumed `'txt'` on line number 17

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Use of undefined constant `myRenamedDocument` - assumed `'myRenamedDocument'` on line number 17

 - syntax error, unexpected `'myRenamedDocument'` (T_VARIABLE), expecting `','` or `')'` on line number 14

 - Warning: `rename(\testDocument.txt,myRenamedDocumenttxt)`: The system cannot find the file specified. (code: 2) on line number 4


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - On line 17, the `renameFile($file, myRenamedDocument.txt);` function call is invalid.

 - There is no close parenthesis `)` after the second argument `myRenamedDocument.txt` on line 17.

 - There is no semicolon `;` after the `renameFile($file, myRenamedDocument.txt);` function call on line 17.

 - There is a comma `,` between `$file` and `myRenamedDocument.txt` in the `renameFile()` function call on line 17.

 - On line 17, the second argument `myRenamedDocument.txt` in the `renameFile()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/ManipulatingFiles/MissingDoubleQuotesOnArgumentTest.php]

Correct the code so that it successfully renames and deletes the specified file.

```php
<?php
function renameFile($fileToRename, $newName)
{
    rename($fileToRename, $newName) or die("Unable to rename the file."); 
}

function deleteFile($fileToDelete)
{
    if (!unlink($fileToDelete)) {
        echo "Unable to delete the file.";
    } else {
        echo "The file is deleted successfully.";
    }
}

$file = __DIR__ . "/testDocument.txt";
renameFile($file, myRenamedDocument.txt);
$newFile = __DIR__ . "/myRenamedDocument.txt";
deleteFile($newFile);
?>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/ManipulatingFiles/CreateFileManipulationFunctionsTest.php]

Write a program that uses the different file handling functions like `unlink()`, `rename()`, and `readfile()` to manipulate files. First, create a function named `changeFileName()` with two parameters `$oldFile` and `$newName`. Inside the function body, add the statement `rename($oldFile, $newName) or die("Unable to rename the file.");`. Then, create another function named `readFileContent()` with a parameter named `$file`. Inside the function body, add the statement `readfile($file) or die("Unable to read the file.");`. Next, create another function named `deleteFile()` with a parameter named `$fileToDelete`. Inside the function body, add an `if-else` statement to check if the specified `$fileToDelete` is deleted successfully or not. In the `if` construct, add the condition `!unlink($fileToDelete)`. Inside the `if` block, create an `echo` statement to display the string `Unable to delete the file.`. In the `else` block, create an `echo` statement to display the string `The file is deleted successfully.`. After the function definition, add the assignment statement `$myFile = __DIR__ . "/myTestDocument.txt";`. Then, add the function call `changeFileName($myFile, "myPracticeDocument.txt");`. Next, add another assignment statement `$myNewFile = __DIR__ . "/myPracticeDocument.txt";`. Lastly, add two function calls `readFileContent($myNewFile)` and `deleteFile($myNewFile)` respectively. Run the program to view the result.

```php
<?php


?>
```

+++
