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
/// type=SS, id=6568a802-44e4-4756-8127-0237ac7dbbb5, answer=[4]

Execute the program. What is its output?

 - No output is displayed.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in a single line.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in separate lines.


/// type=SS, id=b03cfbca-fa4d-47b9-b0ae-704dd6b1a277, answer=[1]

Which of the following is an error handling function?

 - `die()`

 - `copy()`

 - `__DIR__`

 - `readfile()`

 - `readFileContent()`


/// type=MS, id=6c8e4299-f5fb-47bc-b37f-5d55c3b7c8c4, answer=[3,5]

Which of the following are user-defined functions?

 - `die()`

 - `copy()`

 - `copyFile()`

 - `readfile()`

 - `readFileContent()`


/// type=MS, id=3523a430-b9e0-4123-a9ac-55ee1c2af8d5, answer=[1,3,4]

Which of the following are parameters?

 - `$file`

 - `$myFile`

 - `$fileToRead`

 - `$copiedFile`

 - `$myCopiedFile`


/// type=MS, id=cf20337d-0283-4252-9707-2d84a0bf68cc, answer=[2,5]

Which of the following are arguments?

 - `$file`

 - `$myFile`

 - `$fileToRead`

 - `$copiedFile`

 - `$myCopiedFile`


/// type=MS, id=ba057519-671c-4187-8f62-dcaf51e52c01, answer=[2,4]

Which of the following are file handling functions?

 - `die()`

 - `copy()`

 - `copyFile()`

 - `readfile()`

 - `readFileContent()`


/// type=MS, id=8cdb8824-097f-45c9-9ab6-5a45833342ad, answer=[1,2,3,4]

Which of the following are function calls?

 - `readfile($fileToRead)`

 - `copy($file, $copiedFile)`

 - `readFileContent($myCopiedFile);`

 - `copyFile($myFile, $myCopiedFile);`

 - `function readFileContent($fileToRead) {... }`


/// type=SS, id=e38c3312-8dfb-4a2a-89c8-5658360a0de0, answer=[3]

Which of the following is a magic constant?

 - `die()`

 - `copy()`

 - `__DIR__`

 - `$myFile`

 - `readFile()`


/// type=SS, id=243f7311-0505-4f0b-961f-64ddabc1abff, answer=[1]

On line 4, what does the `copy($file, $copiedFile)` function call do?

 - It copies the content of `$file` to `$copiedFile`.

 - It copies the content of `$copiedFile` to `$file`.

 - It accesses the content of `$file` in `$copiedFile`.

 - It accesses the content of `$copiedFile` in `$file`.

 - It removes the content of `$file` from `$copiedFile`.


/// type=MS, id=0a592fcd-b32e-451d-a740-9e3cdd35a7cd, answer=[4,5]

Which statements correctly describe the `copyFile()` function?

 - It opens the specified file as append-only.

 - It creates the specified file if it does not exist.

 - It reads the content of the specified file line by line.

 - It copies the content of the specified file to another file.

 - It is a user-defined function that requires two arguments.


/// type=MS, id=9f39d39f-253e-467d-83da-c2a3fe695d31, answer=[1,4]

On line 9, what does the `readfile($fileToRead)` function call do?

 - It reads the specified `$fileToRead`.

 - It deletes the specified `$fileToRead` from its directory.

 - It creates the specified `$fileToRead` if it does not exist.

 - It writes the specified `$fileToRead` to the output buffer.

 - It copies the content of the specified `$fileToRead` to another file.


/// type=MS, id=18f0bd81-7ff4-4330-8eeb-c058b5f940b7, answer=[1,4,5]

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
/// type=SS, id=066eaaff-0a4b-440a-8521-47bb2d2fe35b, answer=[5]

Execute the program. What is its output?

 - No output is displayed.

 - It prints `Unable to rename the file.`.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

 - It prints `C:\xampp\htdocs\PhpProjectFileHandling\myRenamedDocument.txt`.


/// type=SS, id=8b7b5ed8-6c54-4c01-a87d-447e1febe284, answer=[5]

Which of the following is a user-defined function?

 - `$file`

 - `die()`

 - `rename()`

 - `readlink()`

 - `renameFile()`


/// type=MS, id=0ca32779-f3f0-4201-a39e-c5fba7faebc2, answer=[1,2,3,4]

Which of the following are function calls?

 - `rename($fileToRename, $newName)`

 - `die("Unable to rename the file.")`

 - `renameFile($file, "myRenamedDocument.txt")`

 - `readlink(__DIR__ . "/myRenamedDocument.txt")`

 - `function renameFile($fileToRename, $newName) {... }`


/// type=MS, id=177c218a-e5dc-4b89-81f9-09f703eaf423, answer=[3,4]

Which of the following are file handling functions?

 - `$file`

 - `die()`

 - `rename()`

 - `readlink()`

 - `renameFile()`


/// type=SS, id=ea49342e-88c4-4946-a25c-a77a0ad77b69, answer=[4]

On line 4, what does the `rename($fileToRename, $newName)` function call do?

 - It copies the content of `$fileToRename` to `$newName`.

 - It replaces the content of `$fileToRename` with `$newName`.

 - It removes the content of `$fileToRename` from `$newName`.

 - It changes the name of the specified `$fileToRename` to `$newName`.

 - It writes the content of `$fileToRename` to the specified `$newName`.


/// type=MS, id=61d7420f-0517-4c0e-ab8d-bca18b1c8556, answer=[3,4,5]

Which statements correctly describe the `renameFile()` function?

 - It opens the specified file as append-only.

 - It copies the content of the specified file to another file.

 - It is a user-defined function that requires two arguments.

 - It changes the name of the specified file to a new filename.

 - It prints the message `Unable to rename the file.` if an error occurs.


/// type=SS, id=7fc35062-43e0-437e-a7a4-da0aefa5cd05, answer=[5]

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
/// type=SS, id=297b81d1-7784-4f52-9e6a-0a322c5576a1, answer=[5]

Execute the program. What is its output?

 - No output is displayed.

 - It prints `myRenamedDocument.txt`.

 - It prints `Unable to delete the file.`.

 - It prints `Unable to rename the file.`.

 - It prints `The file is deleted successfully.`.


/// type=MS, id=044bc96b-ed26-4449-881d-d6d1622b65f2, answer=[4,5]

Which of the following are user-defined functions?

 - `die()`

 - `rename()`

 - `unlink()`

 - `renameFile()`

 - `deleteFile()`


/// type=MS, id=a591b9e2-100c-412f-a62e-e4cc660a6b7f, answer=[2,3]

Which of the following are file handling functions?

 - `die()`

 - `rename()`

 - `unlink()`

 - `renameFile()`

 - `deleteFile()`


/// type=SS, id=7f1f643f-9d91-45f5-8af1-715ba1a54c73, answer=[4]

Which statement best describes `rename($fileToRename, $newName)` on line 4?

 - It copies the content of `$fileToRename` to `$newName`.

 - It replaces the content of `$fileToRename` with `$newName`.

 - It removes the content of `$fileToRename` from `$newName`.

 - It changes the name of the specified `$fileToRename` to `$newName`.

 - It writes the content of `$fileToRename` to the specified `$newName`.


/// type=SS, id=82869296-1d08-495b-8256-09e4faa3e0cd, answer=[2]

In the `if` statement on line 9, what does the `unlink($fileToDelete)` function call do?

 - It copies the specified `$fileToDelete`.

 - It deletes the specified `$fileToDelete`.

 - It renames the specified `$fileToDelete`.

 - It changes the name of the specified `$fileToDelete`.

 - It reads the content of the specified `$fileToDelete`.


/// type=MS, id=65e37e62-3cb0-44a5-94b9-c2326b173e02, answer=[1,3,4,5]

Which statements correctly describe the `deleteFile()` function?

 - It deletes the specified file.

 - It changes the name of the specified file.

 - It is a user-defined function that requires one argument.

 - It prints `Unable to delete the file.` if an error occurs.

 - It prints `The file is deleted successfully.` after deleting the specified file.

:::


:::

/// type=REPL

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
/// type=SS, id=8f458037-cec7-42b9-b5fe-3331354fecc3, answer=[4]

Execute the program. What is its output?

 - No output is displayed.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in a single line.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in separate lines.


/// type=SS, id=da4a7913-8cef-417a-bc4c-2aac8102a93d, answer=[4]

On line 15, replace the `readFileContent($myCopiedFile);` function call with `echo file_get_contents($myCopiedFile);`. Execute the program. What is its output?

 - No output is displayed.

 - It prints `Unable to read the file.`.

 - It prints `This is the end of the test document content.`.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in a single line.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in separate lines.

:::


:::

/// type=REPL

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
echo file_get_contents($myCopiedFile);
?>
```
/// type=SS, id=decf893f-5f03-4eac-bf2f-c6c8a9b557d9, answer=[4]

In the `echo` statement on line 15, what does the `file_get_contents($myCopiedFile)` function call do?

 - It deletes the content of the specified `$myCopiedFile`.

 - It displays the content of the specified `$myCopiedFile`.

 - It returns the symbolic link of the specified `$myCopiedFile`.

 - It reads the content of the specified `$myCopiedFile` into a string.

 - It writes the content of the specified `$myCopiedFile` to the output buffer.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, id=18bfb50d-f34e-48d7-ab84-083ebaa3ed49, answer=[3,5]

Which statements correctly describe the `readlink()` function?

 - It reads the specified file.

 - It changes the name of a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.


/// type=MS, id=677e51e8-bb60-4642-a979-8635ace8063a, answer=[1,5]

Which statements are true about the `unlink()` function?

 - It deletes a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.

 - It generates the `E_WARNING` level error on failure.


/// type=MS, id=9265f711-4899-43b8-b924-50040236a15c, answer=[1,4]

Which statements correctly describe the `readfile()` function?

 - It reads the specified file.

 - It changes the name of a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.


/// type=SS, id=fbfd3f1f-2c42-4773-ad05-3193b8db661e, answer=[2]

Which statement is true about the `rename()` function?

 - It reads the specified file.

 - It changes the name of a file.

 - It reads the symbolic link of the specified file.

 - It writes the specified file to the output buffer.

 - It returns the symbolic link of the specified file.


/// type=SS, id=1248b529-b307-4c5c-b4cd-fd0438d83a20, answer=[4]

Which statement best describes the `file_get_contents()` function?

 - It deletes the content of the specified file.

 - It displays the content of the specified file.

 - It returns the symbolic link of the specified file.

 - It reads the content of the specified file into a string.

 - It writes the content of the specified file to the output buffer.


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
/// type=SS, id=96f03e55-b037-47bb-997f-35cc2d8ef66f, answer=[1]

Execute the program. What is its output?

 - It produces an error.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in a single line.

 - It prints `This is a test document content.` and `This is the end of the test document content.` in separate lines.


/// type=SS, id=3b896dee-fa46-4256-8d1e-b7a1a0918db6, answer=[5]

What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, id=0f27fba9-d40a-48b1-bc81-dad13b0a8c60, answer=[2,5]

Which statements correctly describe the error?

 - There is no close parenthesis `)` after `$myCopiedFile` on line 14.

 - On line 14, the `copyFile($myFile $myCopiedFile)` function call is invalid.

 - On line 14, the argument `$myCopiedFile` is not enclosed in double quotes `""`.

 - There is no semicolon `;` at the end of the `copyFile($myFile $myCopiedFile)` function call on line 14.

 - There is no comma `,` between `$myFile` and `$myCopiedFile` in the `copyFile()` function call on line 14.

:::


/// type=CR, id=dbce005f-398b-43d1-aa9d-8a372818abc5, answer=[tests/ManipulatingFiles/MissingCommaBetweenArgumentsTest.php]

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
/// type=SS, id=94c62a0a-5470-4c91-b3e5-cca76180672f, answer=[3]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, id=eb725b91-89ac-47d8-97cd-73a47240b23d, answer=[2,3,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 9.

 - There is no argument specified in the `readfile()` function call on line 9.

 - The `readfile()` file handling function requires one argument when called.

 - On line 9, the statement `readfile() or die("Unable to read the file.");` is invalid.

 - On line 9, the string `Unable to read the file.` in the `die()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=3a342a9c-cbb2-42f9-b90f-da281ff998e6, answer=[tests/ManipulatingFiles/MissingArgumentOnReadfileTest.php]

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
/// type=SS, id=27b334ec-fb92-47c1-81ea-1238ea7671ff, answer=[2]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, id=c4fe0294-605e-4a0d-8441-c60c03b14b4e, answer=[1,2,3]

Which statements correctly describe the error?

 - The `copy()` file handling function requires two arguments when called.

 - There is no first argument `$file` specified in the `copy()` function call on line 9.

 - On line 4, the statement `copy($copiedFile) or die("Unable to copy the file.");` is invalid.

 - On line 4, the argument `$copiedFile` in the `copy()` function call is not enclosed in double quotes `""`. 

 - There is no comma `,` between `$myFile` and `$myCopiedFile` in the `copyFile()` function call on line 14.

:::


/// type=CR, id=35551047-c916-4def-b775-9d1ddca54e1f, answer=[tests/ManipulatingFiles/MissingOneArgumentOnCopyFunctionTest.php]

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
/// type=SS, id=982b4bd2-20b9-419e-9f05-d752d9231c0b, answer=[4]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, id=7b6be8c9-47f6-473d-b55d-465772acb30a, answer=[2,5]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 4.

 - On line 4, the `rename($fileToRename $newName)` function call is invalid.

 - The `rename()` file handling function accepts only one argument when called.

 - On line 4, the argument `newName` in the `rename()` function call is not enclosed in double quotes `""`.

 - There is no comma `,` between `$fileToRename` and `$newName` in the `rename()` function call on line 4.

:::


/// type=CR, id=093174e3-0ef1-449f-a2e4-06549b2d4935, answer=[tests/ManipulatingFiles/MissingCommaBetweenArgumentsOnRenameTest.php]

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
/// type=SS, id=cb18fd04-c631-4c2f-9b98-cdc30cd0c65b, answer=[1]

Execute the program. What is the error message?

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Warning: `copy()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `readfile()` expects at least `1` parameter, `0` given on line number 9

 - syntax error, unexpected `'$newName'` (T_VARIABLE), expecting `','` or `')'` on line number 4

 - syntax error, unexpected `'$myCopiedFile'` (T_VARIABLE), expecting `','` or `')'` on line number 14


/// type=MS, id=6e56f6e7-7457-48e3-bd14-f53fcbfb6526, answer=[3,4]

Which statements correctly describe the error?

 - There is no open curly brace `{` after the `if` construct on line 9.

 - The `unlink()` file handling function requires two arguments when called.

 - There is no open parenthesis `(` after `unlink` in the `if` construct on line 9.

 - On line 9, the function call `unlink $fileToDelete)` in the `if` construct is invalid.

 - On line 9, the argument `$fileToDelete` in the `unlink()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=e8831cb5-3308-4b9e-ac4f-2cf8ba537893, answer=[tests/ManipulatingFiles/MissingOpenParenthesisAfterUnlinkTest.php]

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
/// type=MS, id=f3fb2338-a089-40b9-8ecc-5ebbbf12b2f7, answer=[1,3,5]

Execute the program. What are the error messages?

 - Use of undefined constant `txt` - assumed `'txt'` on line number 17

 - syntax error, unexpected `'$fileToDelete'` (T_VARIABLE) on line number 9

 - Use of undefined constant `myRenamedDocument` - assumed `'myRenamedDocument'` on line number 17

 - syntax error, unexpected `'myRenamedDocument'` (T_VARIABLE), expecting `','` or `')'` on line number 14

 - Warning: `rename(\testDocument.txt,myRenamedDocumenttxt)`: The system cannot find the file specified. (code: 2) on line number 4


/// type=MS, id=03cc9efb-7f9c-4117-a486-d0c6e95c896f, answer=[1,5]

Which statements correctly describe the error?

 - On line 17, the `renameFile($file, myRenamedDocument.txt);` function call is invalid.

 - There is no close parenthesis `)` after the second argument `myRenamedDocument.txt` on line 17.

 - There is no semicolon `;` after the `renameFile($file, myRenamedDocument.txt);` function call on line 17.

 - There is a comma `,` between `$file` and `myRenamedDocument.txt` in the `renameFile()` function call on line 17.

 - On line 17, the second argument `myRenamedDocument.txt` in the `renameFile()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=62601e38-1b70-47d8-86dd-25f8503110e6, answer=[tests/ManipulatingFiles/MissingDoubleQuotesOnArgumentTest.php]

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

/// type=CR, id=a693f337-682b-455a-8a91-0321f33438e9, answer=[tests/ManipulatingFiles/CreateFileManipulationFunctionsTest.php]

Write a program that uses the different file handling functions like `unlink()`, `rename()`, and `readfile()` to manipulate files. First, create a function named `changeFileName()` with two parameters `$oldFile` and `$newName`. Inside the function body, add the statement `rename($oldFile, $newName) or die("Unable to rename the file.");`. Then, create another function named `readFileContent()` with a parameter named `$file`. Inside the function body, add the statement `readfile($file) or die("Unable to read the file.");`. Next, create another function named `deleteFile()` with a parameter named `$fileToDelete`. Inside the function body, add an `if-else` statement to check if the specified `$fileToDelete` is deleted successfully or not. In the `if` construct, add the condition `!unlink($fileToDelete)`. Inside the `if` block, create an `echo` statement to display the string `Unable to delete the file.`. In the `else` block, create an `echo` statement to display the string `The file is deleted successfully.`. After the function definition, add the assignment statement `$myFile = __DIR__ . "/myTestDocument.txt";`. Then, add the function call `changeFileName($myFile, "myPracticeDocument.txt");`. Next, add another assignment statement `$myNewFile = __DIR__ . "/myPracticeDocument.txt";`. Lastly, add two function calls `readFileContent($myNewFile)` and `deleteFile($myNewFile)` respectively. Run the program to view the result.

```php
<?php


?>
```

+++
