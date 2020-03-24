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
/// type=SS, answer=[5]

Execute the program. What is its output?

 - It produces an error.

 - It prints `Unable to open the file.`.

 - It prints `This is a test document content. `.

 - It prints `This is the end of the test document content. `.

 - It prints `This is a test document content. ` and `This is the end of the test document content. ` in separate lines.


/// type=SS, answer=[5]

Which of the following is a user-defined function?

 - `die()`

 - `feof()`

 - `fopen()`

 - `fclose()`

 - `readFileContent()`


/// type=MS, answer=[1,2,3,4]

Which of the following are function calls?

 - `fgets($file)`

 - `readFileContent($file)`

 - `fopen($fileToRead, "r")`

 - `die("Unable to open the file.")`

 - `$file = __DIR__ . "/testDocument.txt";`


/// type=SS, answer=[4]

Which of the following is a magic constant?

 - `die()`

 - `$file`

 - `fgets()`

 - `__DIR__`

 - `"/testDocument.txt"`


/// type=SS, answer=[1]

Which of the following is an error handling function?

 - `die()`

 - `$file`

 - `fgets()`

 - `__DIR__`

 - `"/testDocument.txt"`


/// type=MS, answer=[2,4]

In the function call `fopen($fileToRead, "r")` on line 4, what is `$fileToRead`?

 - It is a parameter.

 - It is an argument.

 - It specifies the file to read.

 - It specifies the file to open.

 - It specifies the file to create.


/// type=SS, answer=[2]

In the function call `fopen($fileToRead, "r")` on line 4, what is `r`?

 - It is a file to read.

 - It is a read-only file handling mode.

 - It is a write-only file handling mode.

 - It is an append-only file handling mode.

 - It is a read and write file handling mode.


/// type=SS, answer=[3]

In the function call `fopen($fileToRead, "r")` on line 4, what is `fopen()`?

 - It is a keyword.

 - It is a magic constant.

 - It is a file handling function.

 - It is a user-defined function.

 - It is an error handling function.


/// type=SS, answer=[1]

On line 4, what does the `fopen($fileToRead, "r")` function call do?

 - It opens the file in `$fileToRead` as read-only.

 - It opens the file in `$fileToRead` as write-only.

 - It opens the file in `$fileToRead` as append-only.

 - It opens the file in `$fileToRead` as read and write

 - It opens the file in `$fileToRead` as read and append.


/// type=SS, answer=[4]

Which statement best describes the `feof($file)` function call on line 6?

 - It opens the specified `$file`.

 - It closes the specified `$file`.

 - It creates the specified `$file`.

 - It checks the end of the specified `$file`.

 - It reads the content in `$file` line by line.


/// type=SS, answer=[5]

In the `echo` statement on line 7, what does the `fgets($file)` function call do?

 - It opens the specified `$file`.

 - It closes the specified `$file`.

 - It creates the specified `$file`.

 - It checks the end of the specified `$file`.

 - It reads the content in `$file` line by line.


/// type=SS, answer=[2]

Which statement best describes `fclose($file);` on line 10?

 - It opens the specified `$file`.

 - It closes the specified `$file`.

 - It creates the specified `$file`.

 - It checks the end of the specified `$file`.

 - It reads the content in `$file` line by line.


/// type=MS, answer=[2,4,5]

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
/// type=SS, answer=[3]

Execute the program. What is printed on line 3?

 - `testDocument.txt`

 - `Unable to open the file.`

 - `This is the newly added content.`

 - `This is a test document content.`

 - `This is the end of the test document content.`


/// type=MS, answer=[4,5]

Which of the following are user-defined functions?

 - `fopen()`

 - `fwrite()`

 - `fclose()`

 - `appendContent()`

 - `readFileContent()`


/// type=SS, answer=[1]

Which of the following is a read-only file handling mode?

 - `r`

 - `a`

 - `\n`

 - `feof()`

 - `__DIR__`


/// type=SS, answer=[3]

Which function reads the content of a file line by line?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, answer=[1]

Which function checks the end of a file?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, answer=[2]

Which function opens a file?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, answer=[5]

Which function closes a file?

 - `feof()`

 - `fopen()`

 - `fgets()`

 - `fwrite()`

 - `fclose()`


/// type=SS, answer=[4]

In the function call `fopen($myFile, "a")` on line 15, what is `a`?

 - It is a file to read.

 - It is a read-only file handling mode.

 - It is a write-only file handling mode.

 - It is an append-only file handling mode.

 - It is a read and write file handling mode.


/// type=SS, answer=[3]

Which statement best describes `fopen($myFile, "a")` on line 15?

 - It opens the file in `$myFile` as read-only.

 - It opens the file in `$myFile` as write-only.

 - It opens the file in `$myFile` as append-only.

 - It opens the file in `$myFile` as read and write

 - It opens the file in `$myFile` as read and append.


/// type=SS, answer=[3]

In the function call `fwrite($file, $myContent)` on line 17, what does the `$file` argument represent?

 - The end of the file.

 - The file to be written.

 - The file to be opened.

 - The file to be removed.

 - The content to be added.


/// type=SS, answer=[4]

In the function call `fwrite($file, $myContent)` on line 17, what does the `$myContent` argument represent?

 - The content to be created.

 - The file to be copied to `$file`.

 - The file to be written by `$file`.

 - The content to be added to `$file`.

 - The content to be removed from `$file`.


/// type=SS, answer=[2]

Which statement best describes `fwrite($file, $myContent)` on line 17?

 - It reads `$content` in `$file`.

 - It writes `$content` to `$file`.

 - It displays `$content` in `$file`.

 - It accesses `$content` in `$file`.

 - It removes `$content` from `$file`.


/// type=MS, answer=[4,5]

On line 22, what does the `appendContent($file, $content);` function call do?

 - It checks `$content` in `$file`.

 - It accesses `$content` in `$file`.

 - It removes `$content` from `$file`.

 - It adds `$content` to the end of `$file`.

 - It creates a new file if the specified `$file` does not exist.


/// type=MS, answer=[1,2,3,5]

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
/// type=SS, answer=[4]

Execute the program. What is printed on line 1?

 - `testDocument.txt`

 - `Unable to open the file.`

 - `This is the newly added content.`

 - `This is a test document content.`

 - `This is the end of the test document content.`


/// type=MS, answer=[3,4,5]

Which of the following are file handling functions?

 - `die()`

 - `__DIR__`

 - `fopen()`

 - `fgets()`

 - `fclose()`


/// type=SS, answer=[2]

Which of the following is a file handling mode?

 - `!`

 - `r`

 - `$file`

 - `die()`

 - `copy()`


/// type=MS, answer=[1,4]

In the function call `copy($file, $copiedFile)` on line 15, what is `$file`?

 - It is an argument.

 - It specifies the file to read.

 - It specifies the copied file path.

 - It specifies the file to be copied.

 - It specifies the content to be added to the file.


/// type=MS, answer=[1,3]

In the function call `copy($file, $copiedFile)` on line 15, what is `$copiedFile`?

 - It is an argument.

 - It specifies the file to read.

 - It specifies the copied file path.

 - It specifies the file to be copied.

 - It specifies the content to be added to the file.


/// type=SS, answer=[1]

On line 15, what does the `copy($file, $copiedFile)` function call do?

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
/// type=MS, answer=[3,5]

Execute the program. What is printed on lines 2 and 3?

 - `Unable to copy the file.`

 - `Unable to open the file.`

 - `This is the newly added content.`

 - `This is a test document content.`

 - `This is the end of the test document content.`


/// type=MS, answer=[1,2,3]

Which of the following are file handling functions?

 - `fopen()`

 - `fwrite()`

 - `fclose()`

 - `copyFile()`

 - `appendContent()`


/// type=MS, answer=[2,3]

Which of the following are file handling modes?

 - `!`

 - `a`

 - `r`

 - `f`

 - `\n`


/// type=MS, answer=[3,4,5]

Which of the following are user-defined functions?

 - `fopen()`

 - `fwrite()`

 - `copyFile()`

 - `appendContent()`

 - `readFileContent()`


/// type=SS, answer=[3]

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
/// type=SS, answer=[4]

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
/// type=SS, answer=[4]

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
/// type=SS, answer=[4]

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
/// type=MS, answer=[4,5]

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

/// type=SS, answer=[5]

Which statement best describes file handling?

 - It is a permanent data storage solution for simple data.

 - It enables the content of a certain file to be added to another PHP file.

 - It is the process of detecting and dealing errors that occur in a program properly.

 - It is an object thrown by a program when there is an unexpected event or error that occurred.

 - It is a file manipulation process that enables users to easily create, write, and read files in a program.


/// type=MS, answer=[3,4,5]

Which of the following are file handling functions?

 - `read()`

 - `write()`

 - `fopen()`

 - `fwrite()`

 - `fclose()`


/// type=MS, answer=[1,2,3,5]

Which of the following are file handling modes?

 - `w`

 - `a`

 - `r+`

 - `f+`

 - `w+`


/// type=SS, answer=[5]

Which statement best describes the `fopen()` function?

 - It closes a file.

 - It checks the end of the specified file.

 - It reads the content of a file line by line.

 - It adds specific content to a certain file.

 - It opens a file with a specific file handling mode.


/// type=SS, answer=[3]

What does the `fwrite()` function do?

 - It closes a file.

 - It checks the end of the specified file.

 - It adds specific content to a certain file.

 - It reads the content of a file line by line.

 - It opens a file with a specific file handling mode.


/// type=MS, answer=[1,4,5]

Which statements correctly describe the `w+` file handling mode?

 - It is a write and read file handling mode.

 - It is a read and append file handling mode.

 - It adds the specified content to the end of a file.

 - It creates a new file if the specified file does not exist.

 - It overwrites the existing contents of the specified file.


/// type=MS, answer=[2,3,4]

What does the append-only `a` file handling mode do?

 - It is a write and read file handling mode.

 - It is a read and append file handling mode.

 - It adds the specified content to the end of a file.

 - It creates a new file if the specified file does not exist.

 - It overwrites the existing contents of the specified file.


/// type=SS, answer=[4]

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
/// type=MS, answer=[1,4]

Execute the program. What is its output?

 - It produces an error.

 - No output is displayed.

 - It prints `testDocument.txt`

 - It prints `Unable to open the file.`.

 - It prints `This is a test document content.`.


/// type=SS, answer=[2]

What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, answer=[1,2,3]

Which statements correctly describe the error?

 - On line 4, the `fopen($fileToRead)` function call is invalid.

 - The `fopen()` file handling function requires two arguments.

 - There is no second argument specified in the `fopen($fileToRead)` function call on line 4.

 - There are parentheses `()` that enclosed the `$fileToRead` argument in the `fopen()` function call.

 - On line 4, the argument `$fileToRead` in the `fopen()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/BasicFileHandling/IncorrectFopenArgumentTest.php]

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
/// type=SS, answer=[5]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=SS, answer=[4]

Which statement best describes the error?

 - On line 4, the `fopen($fileToRead, "r")` function call is invalid.

 - On line 14, the `readFileContent($file)` function call is invalid.

 - On line 13, the statement `$file = __DIR__ . "/myStory.txt";` is invalid.

 - On line 13, the specified `"/myStory.txt"` file in the assignment statement does not exist.

 - There is no comma `,` specified between `$fileToRead` and `"r"` in the `fopen()` function call on line 4.

:::


/// type=CR, answer=[tests/BasicFileHandling/IncorrectFileNameSpecifiedTest.php]

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
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, answer=[2,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 17.

 - On line 17, the `fwrite($file $myContent)` function call is invalid.

 - The `fwrite()` file handling function only accepts a single argument.

 - There is no comma `,` specified between `$file` and `$myContent` in the `fwrite()` function call on line 17.

 - On line 17, the argument `$myContent` in the `fwrite()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/BasicFileHandling/MissingCommaBetweenFwriteArgumentsTest.php]

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
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, answer=[1,5]

Which statements correctly describe the error?

 - The `fclose()` function only accepts an argument of type resource.

 - On line 10, the argument `$fileToRead` in the `fclose($fileToRead)` function call is invalid.

 - There is no second argument specified in the `fclose($fileToRead)` function call on line 10.

 - There are parentheses `()` that enclosed the `$fileToRead` argument in the `fclose()` function call.

 - On line 10, the argument `$fileToRead` in the `fclose()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/BasicFileHandling/IncorrectFcloseArgumentTypeTest.php]

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
/// type=SS, answer=[1]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - Warning: `fclose()` expects parameter `1` to be resource, string given on line number 10

 - syntax error, unexpected `'$myContent'` (T_VARIABLE), expecting `','` or `')'` on line number 17

 - Warning: `fopen(/MyStory.txt)`: failed to open stream: No such file or directory in /index.php on line number 4


/// type=MS, answer=[2,5]

Which statements correctly describe the error?

 - The `fopen()` function only accepts a single argument.

 - On line 15, the `fopen($myFile, a)` function call is invalid.

 - There is no semicolon `;` at the end of the statement on line 15.

 - There is a comma `,` between `$myFile` and `a` in the `fopen()` function call on line 15.

 - On line 15, the second argument `a` in the `fopen()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/BasicFileHandling/MissingDoubleQuotesInModesTest.php]

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
/// type=SS, answer=[4]

Execute the program. What is the error message?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Error: Call to undefined function `fget()` in /index.php on line number 7

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - syntax error, unexpected `'to'` (T_STRING), expecting `')'` on line number 15

 - Uncaught Error: Call to undefined function `fget()` in /index.php on line number 7


/// type=MS, answer=[3,5]

Which statements correctly describe the error?

 - The `die()` function requires two arguments.

 - On line 15, the `copy($file, $copiedFile)` function call is invalid.

 - On line 15, the `die(Unable to copy the file.)` function call is invalid.

 - There is no second argument specified in the `die()` function call on line 15.

 - On line 15, the argument `Unable to copy the file.` in the `die()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/BasicFileHandling/MissingDoubleQuotesInDieArgumentTest.php]

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
/// type=MS, answer=[2,5]

Execute the program. What are the error messages?

 - Notice: Use of undefined constant `a` - assumed `'a'` on line number 15

 - Error: Call to undefined function `fget()` in /index.php on line number 7

 - Warning: `fopen()` expects at least `2` parameters, `1` given on line number 4

 - syntax error, unexpected `'to'` (T_STRING), expecting `')'` on line number 15

 - Uncaught Error: Call to undefined function `fget()` in /index.php on line number 7


/// type=MS, answer=[2,4]

Which statements correctly describe the error?

 - The `fgets()` function requires two arguments.

 - On line 7, the function call `fget($file)` is invalid.

 - There is no semicolon `;` at the end of the `echo` statement on line 7.

 - On line 7, the file handling function `fgets()` is misspelled as `fget()`.

 - There is a concatenation operator `.` between `fget($file)` and `"<br>"` in the `echo` statement on line 7.

:::


/// type=CR, answer=[tests/BasicFileHandling/MisspelledFgetsFunctionTest.php]

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

/// type=CR, answer=[tests/BasicFileHandling/CreateFileManipulationTest.php]

Write a program that uses the different file handling functions and modes to manipulate files. First, create a function named `replaceContent()` with two parameters `$file` and `$newContent`. Inside the function body, create a statement that assigns `fopen($file, "w") or die("Unable to open the file.");` to `$fileToUpdate`. Then, add the `fwrite($fileToUpdate, $newContent);` function call. Next, create another function named `readContent()` with a parameter named `$file`. Inside the function body, create a statement that assigns `fopen($file, "r") or die("Unable to open the file.");` to `$fileToRead`. Then, add a `while` loop that evaluates the condition `!feof($fileToRead)`. Inside the loop body, add the statement `echo fgets($fileToRead) . "<br>";`. Outside the `while` statement, add the `fclose($fileToRead);` function call to close the opened file. After the function definition, add two assignment statements `$myFile = __DIR__ . "/testDocument.txt";` and `$myNewContent = "This is a new file content.\n";` respectively. Then, add two function calls `replaceContent($myFile, $myNewContent);` and `readContent($myFile);` respectively. Run the program to view the result.

```php
<?php


?>
```

+++
