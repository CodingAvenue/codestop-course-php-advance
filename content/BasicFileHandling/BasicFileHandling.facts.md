### Facts for Basic File Handling lesson:

A file is a permanent data storage solution for simple data like `contact names`, `server logs`, and more. 

File handling is a file manipulation process that enables users to easily create, write, and read files in a program.

PHP provides different file handling functions to manipulate files easily. These are as follows:

 - `fopen($file, $mode)` opens the specified `$file` with its corresponding file handling `$mode`. PHP offers different file handling modes such as `r`, `r+`, `w`, `w+`, `a`, and `a+`.

 - `fwrite($file, $content)` writes the specified `$content` to the specified `$file`.

 - `fclose($file)` closes the specified open `$file`.

 - `fgets($file)` reads the content of `$file` line by line.

 - `copy($file, $copiedFile)` copies the content of `$file` into the specified `$copiedFile`.

Code:

```php
<?php
function readFileContent($fileToRead)
{
    $file = fopen($fileToRead, "r") OR die("Unable to open the file.");

    while(!feof($file)) {
        echo fgets($file). "<br>";
    }
}

function addContent($myFile, $myContent)
{
    $file = fopen($myFile, "a") OR die("Unable to open the file.");

    fwrite($file, $myContent);
}

$file = __DIR__ . "/myNewFile.txt";
$content = "This is my sample file content.\n";
addContent($file, $content);
readFileContent($file);
?> 
```

In the example above, the code breaks down as follows:

 - `fopen($myFile, "a")` opens the specified file in `$myFile` with the file handling mode `a`.

 - `fwrite($file, $myContent);` adds the value of `$myContent` to the end of `$file`.

 - `fopen($fileToRead, "r")` opens the specified file in `$fileToRead` with the file handling mode `r`.

 - `fgets($file)` reads the content of `$file` line by line.

 - `feof($file)` checks the end of `$file`.

 - `die("Unable to open the file.")` prints the error message `Unable to open the file.` and terminates the program execution if an error occurs.

 - `$file = __DIR__ . "/myNewFile.txt";` assigns the `myNewFile.txt` file path to `$file`.

 - `$content = "This is my sample file content.\n";` assigns the string `This is my sample file content.\n` to `$content`.

 - `addContent($file, $content);` calls the `addContent()` function passing the arguments `$file` and `$content`.

 - `readFileContent($file);` calls the `readFileContent();` function passing the argument `$file`.
