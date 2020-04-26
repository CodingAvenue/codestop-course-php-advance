# Basic File Handling

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

$file = __DIR__ . "/testDocument.txt";
readFileContent($file);
?> 
```
/// type=SS, id=f988e123-df06-4b27-a0cf-f0ae1c8e7972, answer=[5]

Execute the program. What is its output?

 - It produces an error.

 - It prints `Unable to open the file.`.

 - It prints `This is a test document content. `.

 - It prints `This is the end of the test document content. `.

 - It prints `This is a test document content. ` and `This is the end of the test document content. ` in separate lines.


/// type=SS, id=87101edf-bcf3-4e75-93a7-5ad914baf452, answer=[5]

Which of the following is a user-defined function?

 - `die()`

 - `feof()`

 - `fopen()`

 - `fclose()`

 - `readFileContent()`


/// type=MS, id=b84e5a5b-d9ff-4d46-a856-ec570fc7ff07, answer=[1,2,3,4]

Which of the following are function calls?

 - `fgets($file)`

 - `readFileContent($file)`

 - `fopen($fileToRead, "r")`

 - `die("Unable to open the file.")`

 - `$file = __DIR__ . "/testDocument.txt";`


/// type=SS, id=a72b88f2-067a-48cc-80be-744be981ab4b, answer=[4]

Which of the following is a magic constant?

 - `die()`

 - `$file`

 - `fgets()`

 - `__DIR__`

 - `"/testDocument.txt"`


/// type=SS, id=ecfd64c7-fefd-4533-bfaa-84c94e937173, answer=[1]

Which of the following is an error handling function?

 - `die()`

 - `$file`

 - `fgets()`

 - `__DIR__`

 - `"/testDocument.txt"`


/// type=MS, id=aa238c72-5f6c-42ee-9f04-5260812a7ee4, answer=[2,4]

In the function call `fopen($fileToRead, "r")` on line 4, what is `$fileToRead`?

 - It is a parameter.

 - It is an argument.

 - It specifies the file to read.

 - It specifies the file to open.

 - It specifies the file to create.


/// type=SS, id=b9e65f44-98c8-4509-87bd-e8c4696214f3, answer=[2]

In the function call `fopen($fileToRead, "r")` on line 4, what is `r`?

 - It is a file to read.

 - It is a read-only file handling mode.

 - It is a write-only file handling mode.

 - It is an append-only file handling mode.

 - It is a read and write file handling mode.


/// type=SS, id=b5427469-5932-4a75-b176-2cbe3b689615, answer=[3]

In the function call `fopen($fileToRead, "r")` on line 4, what is `fopen()`?

 - It is a keyword.

 - It is a magic constant.

 - It is a file handling function.

 - It is a user-defined function.

 - It is an error handling function.


/// type=SS, id=3823767a-a0c4-4512-aa85-d98b3103ddc2, answer=[1]

On line 4, what does the `fopen($fileToRead, "r")` function call do?

 - It opens the file in `$fileToRead` as read-only.

 - It opens the file in `$fileToRead` as write-only.

 - It opens the file in `$fileToRead` as append-only.

 - It opens the file in `$fileToRead` as read and write

 - It opens the file in `$fileToRead` as read and append.


/// type=SS, id=2f6170d4-3c6e-4ba4-acb2-3cba8cd9f2d1, answer=[4]

Which statement best describes the `feof($file)` function call on line 6?

 - It opens the specified `$file`.

 - It closes the specified `$file`.

 - It creates the specified `$file`.

 - It checks the end of the specified `$file`.

 - It reads the content in `$file` line by line.


/// type=SS, id=8396e60b-93dd-4fcb-81c4-56a225e42586, answer=[5]

In the `echo` statement on line 7, what does the `fgets($file)` function call do?

 - It opens the specified `$file`.

 - It closes the specified `$file`.

 - It creates the specified `$file`.

 - It checks the end of the specified `$file`.

 - It reads the content in `$file` line by line.


/// type=SS, id=3dcd110d-bc23-4a0f-ae3e-fdac369f4301, answer=[2]

Which statement best describes `fclose($file);` on line 10?

 - It opens the specified `$file`.

 - It closes the specified `$file`.

 - It creates the specified `$file`.

 - It checks the end of the specified `$file`.

 - It reads the content in `$file` line by line.


/// type=MS, id=dfd7b048-c019-4ff5-80f4-9bdb602c8b07, answer=[2,4,5]

Which statements correctly describe the `readFileContent()` function?

 - It adds content to the opened file.

 - It opens the specified file as read-only.

 - It creates the specified file if it does not exist.

 - It reads the content of the specified file line by line.

 - It is a user-defined function that requires an argument.

:::


:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 
```
/// type=SS, id=eaf71f9d-1f48-4580-a648-249fe4841682, answer=[3]

Execute the program. What is printed on line 3?

 - `testDocument.txt`

 - `Unable to open the file.`

 - `This is the newly added content.`

 - `This is a test document content.`

 - `This is the end of the test document content.`


/// type=MS, id=94e2b10d-4874-426a-bf06-b5962d11fbbe, answer=[4,5]

Which of the following are user-defined functions?

 - `fopen()`

 - `fwrite()`

 - `fclose()`

 - `appendContent()`

 - `readFileContent()`


/// type=SS, id=e1fc7aeb-b084-440d-bc52-df2a40844ac9, answer=[1]

Which of the following is a read-only file handling mode?

 - `r`

 - `a`

 - `\n`

 - `feof()`

 - `__DIR__`


/// type=SS, id=bd443bee-a317-4523-b9a5-c5dfefb82d61, answer=[3]

Which function reads the content of a file line by line?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, id=1b500cc0-cb13-4811-b618-6e8a423d7000, answer=[1]

Which function checks the end of a file?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, id=b3b97a53-3409-4934-9fe3-199076ec0133, answer=[2]

Which function opens a file?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, id=39130e25-8b8b-4c1d-a28b-bfe937666454, answer=[5]

Which function closes a file?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, id=23205d54-d30e-4e44-9348-b5fe8d98ff4f, answer=[4]

In the function call `fopen($myFile, "a")` on line 15, what is `a`?

 - It is a file to read.

 - It is a read-only file handling mode.

 - It is a write-only file handling mode.

 - It is an append-only file handling mode.

 - It is a read and write file handling mode.


/// type=SS, id=8e7b5a02-5f88-4ea9-926c-c5c15154ce72, answer=[3]

Which statement best describes `fopen($myFile, "a")` on line 15?

 - It opens the file in `$myFile` as read-only.

 - It opens the file in `$myFile` as write-only.

 - It opens the file in `$myFile` as append-only.

 - It opens the file in `$myFile` as read and write

 - It opens the file in `$myFile` as read and append.


/// type=SS, id=aaf78eac-a6d5-4abf-ae32-7cb743d4ee1e, answer=[3]

In the function call `fwrite($file, $myContent)` on line 17, what does the `$file` argument represent?

 - The end of the file.

 - The file to be written.

 - The file to be opened.

 - The file to be removed.

 - The content to be added.


/// type=SS, id=fafb50f7-5fb6-4b4b-aff0-598c2e904f7e, answer=[4]

In the function call `fwrite($file, $myContent)` on line 17, what does the `$myContent` argument represent?

 - The content to be created.

 - The file to be copied to `$file`.

 - The file to be written by `$file`.

 - The content to be added to `$file`.

 - The content to be removed from `$file`.


/// type=SS, id=3ca5a49e-6a0f-4f06-ac2c-0c876592bbb0, answer=[2]

Which statement best describes `fwrite($file, $myContent)` on line 17?

 - It reads `$content` in `$file`.

 - It writes `$content` to `$file`.

 - It displays `$content` in `$file`.

 - It accesses `$content` in `$file`.

 - It removes `$content` from `$file`.


/// type=MS, id=cf0e4234-f965-424d-915c-9df5e4c3684b, answer=[4,5]

On line 22, what does the `appendContent($file, $content);` function call do?

 - It checks `$content` in `$file`.

 - It accesses `$content` in `$file`.

 - It removes `$content` from `$file`.

 - It adds `$content` to the end of `$file`.

 - It creates a new file if the specified `$file` does not exist.


/// type=MS, id=e8f10d76-cda5-4918-965a-dd8bf350c0d2, answer=[1,2,3,5]

Which statements correctly describe the `appendContent()` function?

 - It adds new content to the specified file.

 - It opens the specified file as append-only.

 - It creates the specified file if it does not exist.

 - It reads the content of the specified file line by line.

 - It is a user-defined function that requires two arguments.


:::


:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

$file = __DIR__ . "/testDocument.txt";
$copyHere = __DIR__ . '/myCopiedFile.txt';
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=SS, id=75348034-bd97-4f82-a025-31070e3473eb, answer=[4]

Execute the program. What is printed on line 1?

 - `testDocument.txt`

 - `Unable to open the file.`

 - `This is the newly added content.`

 - `This is a test document content.`

 - `This is the end of the test document content.`


/// type=MS, id=797d975a-e5b7-473b-865e-8b518ad2a1b9, answer=[3,4,5]

Which of the following are file handling functions?

 - `die()`

 - `__DIR__`

 - `fopen()`

 - `fgets()`

 - `fclose()`


/// type=SS, id=fc9cd657-1798-45e0-a69e-b0dbdc6b13aa, answer=[2]

Which of the following is a file handling mode?

 - `!`

 - `r`

 - `$file`

 - `die()`

 - `copy()`


/// type=MS, id=ea79efaa-0c98-4951-985f-d8a98e6c8f28, answer=[1,4]

In the function call `copy($file, $copiedFile)` on line 15, what is `$file`?

 - It is an argument.

 - It specifies the file to read.

 - It specifies the copied file path.

 - It specifies the file to be copied.

 - It specifies the content to be added to the file.


/// type=MS, id=a49d4dfd-325b-42f6-9e51-9bbb8a78bd1f, answer=[1,3]

In the function call `copy($file, $copiedFile)` on line 15, what is `$copiedFile`?

 - It is an argument.

 - It specifies the file to read.

 - It specifies the copied file path.

 - It specifies the file to be copied.

 - It specifies the content to be added to the file.


/// type=SS, id=7c0199fa-7cb8-4f0c-b50e-8a0cdd640f12, answer=[1]

On line 15, what does the `copy($file, $copiedFile)` function call do?

 - It copies the content of `$file` to `$copiedFile`.

 - It copies the content of `$copiedFile` to `$file`.

 - It accesses the content of `$file` in `$copiedFile`.

 - It accesses the content of `$copiedFile` in `$file`.

 - It removes the content of `$file` from `$copiedFile`.


/// type=MS, id=8ca717aa-75f6-4c03-87dd-9944dd4b1623, answer=[4,5]

Which statements correctly describe the `copyFile()` function?

 - It opens the specified file as append-only.

 - It creates the specified file if it does not exist.

 - It reads the content of the specified file line by line.

 - It copies the content of the specified file to another file.

 - It is a user-defined function that requires two arguments.

:::


:::

/// type=REPL

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
$copyHere = __DIR__ . '/myCopiedFile.txt';
appendContent($file, $content);
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=MS, id=ae006696-9b48-4fa4-b0de-108734887060, answer=[3,5]

Execute the program. What is printed on lines 2 and 3?

 - `Unable to copy the file.`

 - `Unable to open the file.`

 - `This is the newly added content.`

 - `This is a test document content.`

 - `This is the end of the test document content.`


/// type=MS, id=d63bcf23-7a94-4172-b66e-5f54de5922d4, answer=[1,2,3]

Which of the following are file handling functions?

 - `fopen()`

 - `fwrite()`

 - `fclose()`

 - `copyFile()`

 - `appendContent()`


/// type=MS, id=cad09631-786b-4f01-8c4f-036752df3fae, answer=[2,3]

Which of the following are file handling modes?

 - `!`

 - `a`

 - `r`

 - `f`

 - `\n`


/// type=MS, id=c355250a-e1da-4859-b655-4dfd73cf6eb9, answer=[3,4,5]

Which of the following are user-defined functions?

 - `fopen()`

 - `fwrite()`

 - `copyFile()`

 - `appendContent()`

 - `readFileContent()`


/// type=SS, id=6f7b0d0d-f00f-43ee-b406-c09ba20495fa, answer=[3]

In the statement `$file = __DIR__ . "/testDocument.txt";` on line 23, replace `/testDocument.txt` with `/basicFileHandling.txt`. Execute the program. What is its output?

 - It prints `Unable to copy the file.`.

 - It prints `Unable to open the file.`.

 - It prints `This is the newly added content.`.

 - It prints `This is a test document content.`.

 - It prints `This is the end of the test document content.`.

:::


:::

/// type=REPL

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/basicFileHandling.txt";
$content = "This is the newly added content.\n";
$copyHere = __DIR__ . '/myCopiedFile.txt';
appendContent($file, $content);
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=SS, id=1c60717d-2833-46d3-b2e6-2eef84350425, answer=[4]

In the statement `$content = "This is the newly added content.\n";` on line 24, replace `This is the newly added content.\n` with `This is the basic file handling lesson.\n`. Execute the program. What is printed on line 2?

 - `Unable to copy the file.`

 - `Unable to open the file.`

 - `This is the newly added content.`

 - `This is the basic file handling lesson.`

 - `This is the end of the test document content.`

:::


:::

/// type=REPL

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/basicFileHandling.txt";
$content = "This is the basic file handling lesson.\n";
$copyHere = __DIR__ . '/myCopiedFile.txt';
appendContent($file, $content);
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=SS, id=576437ef-27b2-43b4-b65d-36b55189d0d0, answer=[4]

In the function call `fopen($myFile, "a")` on line 18, replace `a` with `a+`. Execute the program. What is its output?

 - It prints `Unable to copy the file.`.

 - It prints `Unable to open the file.`.

 - It prints `This is the newly added content.` twice.

 - It prints `This is the basic file handling lesson.` twice.

 - It prints `This is the end of the test document content.` twice.

:::


:::

/// type=REPL

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a+") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/basicFileHandling.txt";
$content = "This is the basic file handling lesson.\n";
$copyHere = __DIR__ . '/myCopiedFile.txt';
appendContent($file, $content);
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=SS, id=0aa5d075-1f73-45ed-8ac6-74cb9fec4bf3, answer=[4]

In the function call `fopen($myFile, "a+")` on line 18, replace `a+` with `w`. Execute the program. What is its output?

 - It prints `Unable to copy the file.`.

 - It prints `Unable to open the file.`.

 - It prints `This is the newly added content.`.

 - It prints `This is the basic file handling lesson.`.

 - It prints `This is the end of the test document content.`.

:::


:::

/// type=REPL

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "w") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/basicFileHandling.txt";
$content = "This is the basic file handling lesson.\n";
$copyHere = __DIR__ . '/myCopiedFile.txt';
appendContent($file, $content);
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=MS, id=a9e9203d-b2d3-4cf2-82ca-e9dba878cce5, answer=[4,5]

Why does the content in the `basicFileHandling.txt` file overwritten by `This is the basic file handling lesson.`?

 - There is no content specified in the `basicFileHandling.txt` file. 

 - There is no file handling mode specified in the `fopen()` function call on line 18.

 - The write-only `w` file handling mode deletes the specified file and creates a new file.

 - On line 18, the `fopen($myFile, "w")` function call sets the opened file as write-only. 

 - The write-only `w` file handling mode replaces the existing contents of the specified file with new content.

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=SS, id=406cdd6e-a000-4d51-ac04-a51a3ec85929, answer=[5]

Which statement best describes file handling?

 - It is a permanent data storage solution for simple data.

 - It enables the content of a certain file to be added to another PHP file.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is a file manipulation process that enables users to easily create, write, and read files in a program.


/// type=MS, id=1ae98d99-e8e9-4639-83b5-c7a77c89e86b, answer=[3,4,5]

Which of the following are file handling functions?

 - `read()`

 - `write()`

 - `fopen()`

 - `fwrite()`

 - `fclose()`


/// type=MS, id=4f169482-5879-4077-a673-3819089b12db, answer=[1,2,3,5]

Which of the following are file handling modes?

 - `w`

 - `a`

 - `r+`

 - `f+`

 - `w+`


/// type=SS, id=9a007716-1e76-41e1-907b-d27e33d25c99, answer=[5]

Which statement best describes the `fopen()` function?

 - It closes a file.

 - It checks the end of the specified file.

 - It reads the content of a file line by line.

 - It adds specific content to a certain file.

 - It opens a file with a specific file handling mode.


/// type=SS, id=7d1c74f4-e608-45a1-a9a2-4c36772acd8f, answer=[3]

What does the `fwrite()` function do?

 - It closes a file.

 - It checks the end of the specified file.

 - It adds specific content to a certain file.

 - It reads the content of a file line by line.

 - It opens a file with a specific file handling mode.


/// type=MS, id=cd9ad585-5a5b-47e1-a3ee-83dc1b68349f, answer=[1,4,5]

Which statements correctly describe the `w+` file handling mode?

 - It is a write and read file handling mode.

 - It is a read and append file handling mode.

 - It adds the specified content to the end of a file.

 - It creates a new file if the specified file does not exist.

 - It overwrites the existing contents of the specified file.


/// type=MS, id=7f1201d1-8faa-4245-8d15-687fff6e8c6c, answer=[2,3,4]

What does the append-only `a` file handling mode do?

 - It is a write and read file handling mode.

 - It is a read and append file handling mode.

 - It adds the specified content to the end of a file.

 - It creates a new file if the specified file does not exist.

 - It overwrites the existing contents of the specified file.


/// type=SS, id=fa8cae5a-82e6-43b8-b3a8-28a5f113b354, answer=[4]

Which statement best describes the `fgets()` function?

 - It closes a file.

 - It checks the end of the specified file.

 - It adds specific content to a certain file.

 - It reads the content of a file line by line.

 - It opens a file with a specific file handling mode.


+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead) or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

$file = __DIR__ . "/testDocument.txt";
readFileContent($file);
?> 
```
/// type=MS, id=1f812de7-5c0d-46c7-aa57-0a91833d9de2, answer=[1,4]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `testDocument.txt`

 - It prints `Unable to open the file.`.

 - It prints `This is a test document content.`.


/// type=SS, id=2eee2100-d2ca-4a87-b0f7-2f39fc9f85f2, answer=[2]

What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, id=f815912d-7817-4d69-99e6-95122494a9c9, answer=[1,2,3]

Which statements correctly describe the error?

 - On line 4, the `fopen($fileToRead)` function call is invalid.

 - The `fopen()` file handling function requires two arguments.

 - There is no second argument specified in the `fopen($fileToRead)` function call on line 4.

 - There are parentheses `()` that enclosed the `$fileToRead` argument in the `fopen()` function call.

 - On line 4, the argument `$fileToRead` in the `fopen()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=32a3eb81-31d9-4ce6-8c8f-317c9fa3fb7a, answer=[tests/BasicFileHandling/IncorrectFopenArgumentTest.php]

Correct the code so that it opens and reads the content of the `testDocument.txt` file.

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead) or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

$file = __DIR__ . "/testDocument.txt";
readFileContent($file);
?> 
```

:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

$file = __DIR__ . "/myStory.txt";
readFileContent($file);
?> 
```
/// type=SS, id=b9385fd7-88bd-48b3-9740-36117823d321, answer=[5]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=SS, id=5af41106-1789-4b6c-9548-1a4044952ed9, answer=[4]

Which statement best describes the error?

 - On line 4, the `fopen($fileToRead, "r")` function call is invalid.

 - On line 14, the `readFileContent($file)` function call is invalid.

 - On line 13, the statement `$file = __DIR__ . "/myStory.txt";` is invalid.

 - On line 13, the specified `"/myStory.txt"` file in the assignment statement does not exist.

 - There is no comma `,` specified between `$fileToRead` and `"r"` in the `fopen()` function call on line 4.

:::


/// type=CR, id=3dacd708-7675-4913-a2f9-edccb3b8fb0d, answer=[tests/BasicFileHandling/IncorrectFileNameSpecifiedTest.php]

Correct the code so that it opens and reads the content of the `testDocument.txt` file.

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

$file = __DIR__ . "/myStory.txt";
readFileContent($file);
?> 
```


:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 
```
/// type=SS, id=bae32d1e-2e96-46a2-a294-6819696fae8e, answer=[4]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, id=e2d2ecb3-f0b5-4320-bafd-8ad9e1e11f69, answer=[2,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 17.

 - On line 17, the `fwrite($file $myContent)` function call is invalid.

 - The `fwrite()` file handling function only accepts a single argument.

 - There is no comma `,` specified between `$file` and `$myContent` in the `fwrite()` function call on line 17.

 - On line 17, the argument `$myContent` in the `fwrite()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=b300c3ee-2c91-45da-8ed8-d8101b536fcf, answer=[tests/BasicFileHandling/MissingCommaBetweenFwriteArgumentsTest.php]

Correct the code so that it opens, appends the string `This is the newly added content.`, and reads the content of the `testDocument.txt` file.

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 
```


:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($fileToRead);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 
```
/// type=SS, id=72f26acc-8fff-42ae-9b79-a5cda6502996, answer=[3]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, id=8d3750b0-d674-4c8f-950a-b1096ae0b019, answer=[1,5]

Which statements correctly describe the error?

 - The `fclose()` function only accepts an argument of type resource.

 - On line 10, the argument `$fileToRead` in the `fclose($fileToRead)` function call is invalid.

 - There is no second argument specified in the `fclose($fileToRead)` function call on line 10.

 - There are parentheses `()` that enclosed the `$fileToRead` argument in the `fclose()` function call.

 - On line 10, the argument `$fileToRead` in the `fclose()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=f6f370ed-b794-4690-a248-c42b5f48dd0d, answer=[tests/BasicFileHandling/IncorrectFcloseArgumentTypeTest.php]

Correct the code so that it opens, appends, and reads the content of the `testDocument.txt` file without having an error warning.

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($fileToRead);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 
```


:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, a) or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 
```
/// type=SS, id=9989299f-85b7-41dc-8874-b322ddf575ac, answer=[1]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, id=6bdcf862-3c60-4965-a5fe-3179bedaa285, answer=[2,5]

Which statements correctly describe the error?

 - The `fopen()` function only accepts a single argument.

 - On line 15, the `fopen($myFile, a)` function call is invalid.

 - There is no semicolon `;` at the end of the statement on line 15.

 - There is a comma `,` between `$myFile` and `a` in the `fopen()` function call on line 15.

 - On line 15, the second argument `a` in the `fopen()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=228304f2-4edb-4ea3-a5a1-0429bdb1e66b, answer=[tests/BasicFileHandling/MissingDoubleQuotesInModesTest.php]

Correct the code so that it opens, appends, and reads the content of the `testDocument.txt` file without having an error notice.

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function appendContent($myFile, $myContent)
{
    $file = fopen($myFile, a) or die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/testDocument.txt";
$content = "This is the newly added content.\n";
appendContent($file, $content);
readFileContent($file);
?> 
```


:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die(Unable to copy the file.);
}

$file = __DIR__ . "/testDocument.txt";
$copyHere = __DIR__ . '/myCopiedFile.txt';
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=SS, id=b10e347e-2fa6-45be-97a8-e303071cd010, answer=[4]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Error: Call to undefined function `fget()` in /index.php on line number 7

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - syntax error, unexpected `'to'` (T_STRING), expecting `')'` on line number 15

 - Uncaught Error: Call to undefined function `fget()` in /index.php on line number 7


/// type=MS, id=2a66f739-f62d-4206-87bf-e60a66a065d9, answer=[3,5]

Which statements correctly describe the error?

 - The `die()` function requires two arguments.

 - On line 15, the `copy($file, $copiedFile)` function call is invalid.

 - On line 15, the `die(Unable to copy the file.)` function call is invalid.

 - There is no second argument specified in the `die()` function call on line 15.

 - On line 15, the argument `Unable to copy the file.` in the `die()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=59f19ffa-2f20-4b6b-8f93-ec8ab67610bc, answer=[tests/BasicFileHandling/MissingDoubleQuotesInDieArgumentTest.php]

Correct the code so that it copies the content of the `testDocument.txt` file to the `myCopiedFile.txt` file.

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }

    fclose($file);
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die(Unable to copy the file.);
}

$file = __DIR__ . "/testDocument.txt";
$copyHere = __DIR__ . '/myCopiedFile.txt';
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```


:::

/// type=REPL, readonly=true

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fget($file) . "<br>";
    }

    fclose($file);
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

$file = __DIR__ . "/testDocument.txt";
$copyHere = __DIR__ . '/myCopiedFile.txt';
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```
/// type=MS, id=72c380a5-5af3-4b15-b7a5-6146cdfa23be, answer=[2,5]

Execute the program. What are the error messages?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Error: Call to undefined function `fget()` in /index.php on line number 7

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - syntax error, unexpected `'to'` (T_STRING), expecting `')'` on line number 15

 - Uncaught Error: Call to undefined function `fget()` in /index.php on line number 7


/// type=MS, id=4b630518-f457-42f5-ac55-3c4332dea294, answer=[2,4]

Which statements correctly describe the error?

 - The `fgets()` function requires two arguments.

 - On line 7, the function call `fget($file)` is invalid.

 - There is no semicolon `;` at the end of the `echo` statement on line 7.

 - On line 7, the file handling function `fgets()` is misspelled as `fget()`.

 - There is a concatenation operator `.` between `fget($file)` and `"<br>"` in the `echo` statement on line 7.

:::


/// type=CR, id=f3dfe52a-3bf0-4d13-b98f-2464e890ed96, answer=[tests/BasicFileHandling/MisspelledFgetsFunctionTest.php]

Correct the code so that it copies the content of the `testDocument.txt` file to the `myCopiedFile.txt` file.

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") or die("Unable to open the file.");

    while(!feof($file)) {
        echo fget($file) . "<br>";
    }

    fclose($file);
}

function copyFile($file, $copiedFile)
{
    copy($file, $copiedFile) or die("Unable to copy the file.");
}

$file = __DIR__ . "/testDocument.txt";
$copyHere = __DIR__ . '/myCopiedFile.txt';
copyFile($file, $copyHere);
readFileContent($copyHere);
?>
```

+++


+++

### Part 4: Practice

/// type=CR, id=65803c9e-288a-457d-befc-65025cf8e9ca, answer=[tests/BasicFileHandling/CreateFileManipulationTest.php]

Write a program that uses the different file handling functions and modes to manipulate files. First, create a function named `replaceContent()` with two parameters `$file` and `$newContent`. Inside the function body, create a statement that assigns `fopen($file, "w") or die("Unable to open the file.");` to `$fileToUpdate`. Then, add the `fwrite($fileToUpdate, $newContent);` function call. Next, create another function named `readContent()` with a parameter named `$file`. Inside the function body, create a statement that assigns `fopen($file, "r") or die("Unable to open the file.");` to `$fileToRead`. Then, add a `while` loop that evaluates the condition `!feof($fileToRead)`. Inside the loop body, add the statement `echo fgets($fileToRead) . "<br>";`. Outside the `while` statement, add the `fclose($fileToRead);` function call to close the opened file. After the function definition, add two assignment statements `$myFile = __DIR__ . "/testDocument.txt";` and `$myNewContent = "This is a new file content.\n";` respectively. Then, add two function calls `replaceContent($myFile, $myNewContent);` and `readContent($myFile);` respectively. Run the program to view the result.

```php
<?php


?>
```

+++
