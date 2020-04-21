# Templates

+++

### Part 1: Sample Code Analysis

:::

/// type=REPL, readonly=true, filename=[main.php,template.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```
/// type=SS, choiceType=HTML, answer=[1]

Execute the program. What is its output?

 - <h3>Favorites</h3><p><em>My favorite fruit is: Apple</em><br/><em>My favorite color is: Gray</em></p>

 - <h3>{title}</h3><p><em>My favorite fruit is: {fruit}</em><br/><em>My favorite color is: {color}</em></p>

 - <h2>Favorites</h2><p><b>My favorite fruit is: Apple</b><br/><b>My favorite color is: Gray</b></p>

 - <h2>{Favorites}</h2><p><b>My favorite fruit is: {fruit}</b><br/><b>My favorite color is: {color}</b></p>

 - <h3>{Favorites}</h3><p><em>My favorite fruit is: {Apple}</em><br/><em>My favorite color is: {Gray}</em></p>


/// type=SS, answer=[4]

Which of the following is a user-defined function?

 - `file_exists()`

 - `$templateFile`

 - `str_replace()`

 - `readTemplate()`

 - `file_get_contents()`


/// type=MS, answer=[2,4]

Which of the following are function calls?

 - `echo $testTemplate;`

 - `file_get_contents($file)`

 - `foreach ($array as $key => $val)`

 - `str_replace($replace, $val, $output)`

 - `function readTemplate($file, $array) {... }`


/// type=SS, answer=[5]

Which of the following is a file handling function?

 - `foreach()`

 - `$templateFile`

 - `str_replace()`

 - `readTemplate()`

 - `file_get_contents()`


/// type=SS, answer=[3]

In the statement `$output = file_get_contents($file);` on line 5 of `main.php`, what does `file_get_contents($file)` do?

 - It deletes the content of the specified `$file`.

 - It removes the content from the specified `$file`.

 - It reads the content of the specified `$file` into a string.

 - It displays the content of the specified `$file` into a string.

 - It converts the content of the specified `$file` into a string.


/// type=SS, answer=[4]

Which statement best describes `$output = file_get_contents($file);` on line 5 of `main.php`?

 - It assigns the `file_get_contents($file)` function call to `$output`.

 - It accesses the content of the specified `$file` and assigns it to `$output`.

 - It removes the content from the specified `$file` and assigns it to `$output`.

 - It reads the content of the specified `$file` into a string and assigns it to `$output`.

 - It converts the content of the specified `$file` into a string and assigns it to `$output`.


/// type=SS, answer=[3]

Which statement best describes `str_replace($replace, $val, $output)` on line 8 of `main.php`?

 - It adds the string of `$replace` to `$val` in `$output`.

 - It displays the string of `$replace` and `$val` in `$output`.

 - It replaces the string of `$replace` with `$val` in `$output`.

 - It accesses the string of `$replace` and `$val` in `$output`.

 - It removes the string of `$replace` and `$val` from `$output`.


/// type=MS, answer=[2,3,5]

Which statements correctly describe the `readTemplate()` function of `main.php`?

 - It displays the content of the specified file.

 - It is a user-defined function that returns a value.

 - It parses and returns the content of the specified file.

 - It is a user-defined function that does not return a value.

 - It is a user-defined function that requires two arguments of types `resource` and `array`.


/// type=SS, answer=[5]

On line 18 of `main.php`, what is `'title' => "Favorites"`?

 - It is a value.

 - It is a string.

 - It is a variable.

 - It is an array key.

 - It is an array element.


/// type=SS, answer=[4]

In the array element `'title' => "Favorites"`, what is `title`?

 - It is a value.

 - It is a string.

 - It is a variable.

 - It is an array key.

 - It is an array element.


/// type=SS, answer=[1]

In the array element `'title' => "Favorites"`, what is `Favorites`?

 - It is a value.

 - It is a string.

 - It is a variable.

 - It is an array key.

 - It is an array element.


/// type=MS, answer=[1,2,5]

Which of the following are HTML tags?

 - `<br/>`

 - `<p></p>`

 - `{title}`

 - `{fruit}`

 - `<em></em>`


/// type=MS, answer=[3,5]

Which of the following are HTML elements?

 - `{title}`

 - `{color}`

 - `<h3>{title}</h3>`

 - `My favorite fruit is: {fruit}`

 - `<em>My favorite color is: {color}</em>`


/// type=SS, answer=[4]

In the HTML element `<h3>{title}</h3>` on line 3 of `template.tpl`, what is `{title}`?

 - It is a string.

 - It is an operator.

 - It is a condition.

 - It is a Smarty tag.

 - It is an HTML element.


/// type=SS, answer=[3]

In the HTML element `<h3>{title}</h3>` on line 3 of `template.tpl`, what does the Smarty tag `{title}` do?

 - It accesses the `title` element of an associative array.

 - It displays the `title` element of an associative array.

 - It references to the `title` key of an associative array.

 - It references to the value `title` of an associative array.

 - It removes the `title` element from an associative array.

:::


:::

/// type=REPL, readonly=true, filename=[main.php,resultTemplate.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/resultTemplate.tpl';
$testTemplate = readTemplate($templateFile,
        array
        (
            'title' => "Exam Result",
            'head1' => "Subject",
            'head2' => "Score",
            'Science' => 75,
            'Language' => 65,
        ));
echo $testTemplate;
?>
```

```tpl
<html>
    <head>
        <style>
            table {
                border-collapse: separate;
                caption-side: top;
                width: 300px;
                border: 3px solid gray;
            }
            th {
                color: white;  
                background-color: green;    
            }
            td, tr {
               border: 3px solid gray; 
            }
        </style>
    </head>
    <body>
        <table>
            <caption> {title} </caption>
            <tr><th> {head1} </th><th> {head2} </th></tr>
            <tr><td> Science </td><td> {Science} </td></tr>
            <tr><td> Language </td><td> {Language} </td></tr>
        </table>
    </body>
</html>
```
/// type=SS, choiceType=HTML, answer=[2]

Execute the program. What is its output?

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Science </td><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> 75 </td></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>


/// type=MS, answer=[1,3,4]

Which of the following are function calls?

 - `file_get_contents($file)`

 - `foreach ($array as $key => $val)`

 - `str_replace($replace, $val, $output)`

 - `readTemplate($templateFile, array(... ))`

 - `function readTemplate($file, $array) {... }`


/// type=MS, answer=[1,2,3]

Which of the following are Smarty tags?

 - `{title}`

 - `{head1}`

 - `{Language}`

 - `<td> Science </td>`

 - `tr { border: 3px solid gray; }`


/// type=MS, answer=[2,3,4]

Which of the following are array elements?

 - `color: white;`

 - `'Science' => 75`

 - `'head2' => "Score"`

 - `'title' => "Exam Result"`

 - `<caption> {title} </caption>`


/// type=MS, answer=[3,4,5]

Which of the following are array keys?

 - `75`

 - `Score`

 - `head1`

 - `Science`

 - `Language`


/// type=MS, answer=[1,2,4,5]

Which of the following are array values?

 - `65`

 - `75`

 - `title`

 - `Subject`

 - `Exam Results`


/// type=MS, answer=[1,3]

In `main.php`, which statements correctly describe `readTemplate($templateFile, array(... ))` on line 15?

 - It returns the parsed content of the `resultTemplate.tpl` template.

 - It displays the parsed content of the `resultTemplate.tpl` template.

 - It calls the `readTemplate()` function passing two arguments `$templateFile` and `array(... )`.

 - It defines the `readTemplate()` function with two parameters `$templateFile` and `array(... )`.

 - It creates the `readTemplate()` function with two parameters `$templateFile` and `array(... )`.


/// type=SS, answer=[4]

In `main.php`, what key is associated with the value `75`?

 - `head1`

 - `title`

 - `head2`

 - `Science`

 - `Language`


/// type=SS, answer=[4]

On line 6 of `resultTemplate.tpl`, what is `caption-side: top;`?

 - It is a CSS value.

 - It is a CSS property.

 - It is a CSS selector.

 - It is a CSS declaration.

 - It is a CSS declaration block.


/// type=SS, answer=[5]

In the style rule `tr { border: 3px solid gray; }` of `resultTemplate.tpl`, what is `{ border: 3px solid gray; }`?

 - It is a CSS value.

 - It is a CSS property.

 - It is a CSS selector.

 - It is a CSS declaration.

 - It is a CSS declaration block.


/// type=SS, answer=[3]

In the HTML element `<td> {Language} </td>` on line 24 of `resultTemplate.tpl`, what does the Smarty tag `{Language}` do?

 - It accesses the `Language` element of an associative array.

 - It displays the `Language` element of an associative array.

 - It references to the `Language` key of an associative array.

 - It references to the value `Language` of an associative array.

 - It removes the `Language` element from an associative array.


/// type=SS, answer=[4]

Which statement best describes `$output = file_get_contents($file);` on line 5 of `main.php`?

 - It assigns the `file_get_contents($file)` function call to `$output`.

 - It accesses the content of the specified `$file` and assigns it to `$output`.

 - It removes the content from the specified `$file` and assigns it to `$output`.

 - It reads the content of the specified `$file` into a string and assigns it to `$output`.

 - It converts the content of the specified `$file` into a string and assigns it to `$output`.


/// type=MS, answer=[2,3,5]

Which statements correctly describe the `readTemplate()` function of `main.php`?

 - It displays the content of the specified file.

 - It is a user-defined function that returns a value.

 - It parses and returns the content of the specified file.

 - It is a user-defined function that does not return a value.

 - It is a user-defined function that requires two arguments of types `resource` and `array`.

:::


:::

/// type=REPL, filename=[main.php,template.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```
/// type=SS, choiceType=HTML, answer=[5]

In the array element `'color' => "Gray"` on line 20 of `main.php`, replace `color` with `colors`. Execute the program. What is its output?

 - <h3>Favorites</h3><p><em>My favorite fruit is: Apple</em><br/><em>My favorite color is: Gray</em></p>

 - <h3>{title}</h3><p><em>My favorite fruit is: {fruit}</em><br/><em>My favorite color is: {color}</em></p>

 - <h2>Favorites</h2><p><b>My favorite fruit is: Apple</b><br/><b>My favorite color is: Gray</b></p>

 - <h2>{Favorites}</h2><p><b>My favorite fruit is: {fruit}</b><br/><b>My favorite color is: {color}</b></p>

 - <h3>Favorites</h3><p><em>My favorite fruit is: Apple</em><br/><em>My favorite color is: {color}</em></p>

:::


:::

/// type=REPL, filename=[main.php,template.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'colors' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```
/// type=MS, answer=[4,5]

Why does the Smarty tag `{color}` not replaced with the array value `Gray` when rendered in the web browser window?

 - On line 6 of `template.tpl`, the Smarty tag `{color}` is not enclosed in double quotes `""`.

 - There is no comma `,` after the array element `'colors' => "Gray"` on line 20 of `main.php`.

 - There is no semicolon `;` after the array element `'colors' => "Gray"` on line 20 of `main.php`.

 - On line 6 of `template.tpl`, the specified array key `color` in the Smarty tag `{color}` does not exist.

 - On line 20 of `main.php`, the key `color` of the array element `'colors' => "Gray"` is misspelled as `colors`.

:::


:::

/// type=REPL, filename=[main.php,resultTemplate.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/resultTemplate.tpl';
$testTemplate = readTemplate($templateFile,
        array
        (
            'title' => "Exam Result",
            'head1' => "Subject",
            'head2' => "Score",
            'Science' => 75,
            'Language' => 65,
        ));
echo $testTemplate;
?>
```

```tpl
<html>
    <head>
        <style>
            table {
                border-collapse: separate;
                caption-side: top;
                width: 300px;
                border: 3px solid gray;
            }
            th {
                color: white;
                background-color: green;
            }
            td, tr {
               border: 3px solid gray;
            }
        </style>
    </head>
    <body>
        <table>
            <caption> {title} </caption>
            <tr><th> {head1} </th><th> {head2} </th></tr>
            <tr><td> Science </td><td> {Science} </td></tr>
            <tr><td> Language </td><td> {Language} </td></tr>
        </table>
    </body>
</html>
```
/// type=SS, choiceType=HTML, answer=[2]

Execute the program. What is its output?

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Science </td><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> 75 </td></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>


/// type=SS, choiceType=HTML, answer=[5]

On line 11 of `resultTemplate.tpl`, remove the semicolon `;` after the CSS declaration `color: white`. Execute the program. What is its output?

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Science </td><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> 75 </td></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th> Subject </th><th> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

:::


+++


+++

### Part 2: Knowledge Assessment

/// type=MS, answer=[2,4]

Which statements correctly describe a template?

 - It is used to modify the layout and design a certain website.

 - It is used to separate the PHP application logic from the HTML and CSS design.

 - It is an engine that provides an easier way to separate the PHP code from the HTML and CSS code.

 - It is a pre-formatted file that can be applied to the layout and design on different parts of a certain website.

 - It is a software designed to provide an easier way of combining templates and related data elements in producing a certain document.


/// type=SS, answer=[5]

Which statement is true about the template engine?

 - It is used to modify the layout and design a certain website.

 - It is used to separate the PHP application logic from the HTML and CSS design.

 - It is an engine that provides an easier way to separate the PHP code from the HTML and CSS code.

 - It is a pre-formatted file that can be applied to the layout and design on different parts of a certain website.

 - It is a software designed to provide an easier way of combining templates and related data elements in producing a certain document.


/// type=MS, answer=[1,2,5]

Which of the following are PHP template engines?

 - `Twig`

 - `Blade`

 - `Glass`

 - `Steam`

 - `Smarty`


/// type=SS, answer=[4]

Which file extension is used for the `Smarty` template?

 - `.php`

 - `.txt`

 - `.css`

 - `.tpl`

 - `.html`


/// type=SS, answer=[5]

Which delimiter is used for the `Smarty` tags?

 - `[]`

 - `""`

 - `%%`

 - `<>`

 - `{}`

+++


+++

### Part 3: Finding and Fixing Errors

:::

/// type=REPL, readonly=true, filename=[main.php,template.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($fle);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```
/// type=MS, answer=[1,2]

Execute the program. What are the error messages?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - Warning: Missing argument `2` for `readTemplate()`, called in `/main.php` on line number 18 and defined in `/main.php` on line number 2


/// type=MS, answer=[2,3,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5 of `main.php`.

 - On line 5 of `main.php`, the statement `$output = file_get_contents($fle);` is invalid.

 - On line 5 of `main.php`, the argument `$fle` in the `file_get_content()` function call is incorrect.

 - On line 5 of `main.php`, the argument `$file` in the `file_get_content()` function call is misspelled as `$fle`.

 - On line 5 of `main.php`, the argument `$file` in the `file_get_content()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/Templates/IncorrectArgumentVariableOnFileGetContentTest.php], filename=[main.php,template.tpl]

Correct the code so that it properly renders the content of `template.tpl` in the web browser window.

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($fle);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```


:::

/// type=REPL, readonly=true, filename=[main.php,template.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```
/// type=SS, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - Warning: Missing argument `2` for `readTemplate()`, called in `/main.php` on line number 18 and defined in `/main.php` on line number 2


/// type=MS, answer=[2,4]

Which statements correctly describe the error?

 - The `str_replace()` function only accepts two arguments when called.

 - On line 8 of `main.php`, the `str_replace($replace $val, $output)` function call is invalid.

 - There is a comma `,` between `$val` and `$output` arguments in the `str_replace()` function call on line 8 of `main.php`.

 - There is no comma `,` between `$replace` and `$val` arguments in the `str_replace()` function call on line 8 of `main.php`.

 - On line 8 of `main.php`, the first argument `$replace` in the `str_replace()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, answer=[tests/Templates/MissingCommaBetweenArgumentsTest.php], filename=[main.php,template.tpl]

Correct the code so that it properly renders the content of `template.tpl` in the web browser window.

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```


:::

/// type=REPL, readonly=true, filename=[main.php,template.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate(
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```
/// type=MS, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - Warning: Missing argument `2` for `readTemplate()`, called in `/main.php` on line number 18 and defined in `/main.php` on line number 2


/// type=MS, answer=[1,2,5]

Which statements correctly describe the error?

 - The `readTemplate()` function requires two arguments when called.

 - On line 15 of `main.php`, the `readTemplate()` function call is invalid.

 - The `readTemplate()` function does not accept an argument of type array.

 - There is no semicolon `;` at the end of the statement on line 15 of `main.php`.

 - There is no first argument specified in the `readTemplate()` function call on line 15 of `main.php`.

:::


/// type=CR, answer=[tests/Templates/MissingFirstArgumentOnReadTemplateTest.php], filename=[main.php,template.tpl]

Correct the code so that it properly renders the content of `template.tpl` in the web browser window.

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate(
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```


:::

/// type=REPL, readonly=true, filename=[main.php,template.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' = "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```
/// type=SS, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - syntax error, unexpected `'='`, expecting `')'` in `/main.php` on line number 18

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4


/// type=MS, answer=[2,4,5]

Which statements correctly describe the error?

 - There is a comma `,` after `'title' = "Favorites"` on line 18 of `main.php`.

 - On line 18 of `main.php`, the array element `'title' = "Favorites"` is invalid.

 - There is no semicolon `;` at the end of `'title' = "Favorites"` on line 18 of `main.php`.

 - There is no double arrow operator `=>` specified in `'title' = "Favorites"` on line 18 of `main.php`.

 - On line 18 of `main.php`, the double arrow operator `=>` between `'title'` and `"Favorites"` is replaced with `=`.

:::


/// type=CR, answer=[tests/Templates/IncorrectOperatorForAssociativeArrayTest.php], filename=[main.php,template.tpl]

Correct the code so that it properly renders the content of `template.tpl` in the web browser window.

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' = "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>
```

```tpl
<html>
    <body>
        <h3>{title}</h3>
        <p>
            <em>My favorite fruit is: {fruit}</em><br/>
            <em>My favorite color is: {color}</em>
        </p>
    </body>
</html>
```


:::

/// type=REPL, filename=[main.php,resultTemplate.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/resultTemplate.tpl';
$testTemplate = readTemplate($templateFile,
        array
        (
            'title' => "Exam Result",
            'head1' => "Subject",
            'head2' => "Score",
            'Science' => 75,
            'Language' => 65,
        ));
echo $testTemplate;
?>
```

```tpl
<html>
    <head>
        <style>
            table {
                border-collapse: separate;
                caption-side: top;
                width: 300px;
                border: 3px solid gray;
            }
            th {
                color: white;
                background-color: green;
            }
            td, tr {
               border: 3px solid gray;
            }
        </style>
    </head>
    <body>
        <table>
            <caption> {title} </caption>
            <tr><th> {head1} </th><th> {head2} </th></tr>
            <tr><td> Science </td><td> {Science} </td></tr>
            <tr><td> Language </td><td> {Language} </td></tr>
        </table>
    </body>
</html>
```
/// type=SS, choiceType=HTML, answer=[2]

Execute the program. What is its output?

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Science </td><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> 75 </td></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>


/// type=SS, answer=[5]

On line 14 of `main.php`, remove the concatenation operator `.` between `__DIR__` and `'/resultTemplate.tpl'`. Execute the program. What is the error message?

 - syntax error, unexpected `')'` in `/main.php` on line number 8

 - syntax error, unexpected `'$key'` (T_VARIABLE) in `/main.php` on line number 6

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - syntax error, unexpected `''/resultTemplate.tpl''` (T_CONSTANT_ENCAPSED_STRING) in `/main.php` on line number 14

:::


:::

/// type=REPL, filename=[main.php,resultTemplate.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__ '/resultTemplate.tpl';
$testTemplate = readTemplate($templateFile,
        array
        (
            'title' => "Exam Result",
            'head1' => "Subject",
            'head2' => "Score",
            'Science' => 75,
            'Language' => 65,
        ));
echo $testTemplate;
?>
```

```tpl
<html>
    <head>
        <style>
            table {
                border-collapse: separate;
                caption-side: top;
                width: 300px;
                border: 3px solid gray;
            }
            th {
                color: white;
                background-color: green;
            }
            td, tr {
               border: 3px solid gray;
            }
        </style>
    </head>
    <body>
        <table>
            <caption> {title} </caption>
            <tr><th> {head1} </th><th> {head2} </th></tr>
            <tr><td> Science </td><td> {Science} </td></tr>
            <tr><td> Language </td><td> {Language} </td></tr>
        </table>
    </body>
</html>
```
/// type=SS, answer=[1]

On line 8 of `main.php`, remove the `$output` argument from the `str_replace($replace, $val, $output)` function call. Execute the program. What is the error message?

 - syntax error, unexpected `')'` in `/main.php` on line number 8

 - syntax error, unexpected `'$key'` (T_VARIABLE) in `/main.php` on line number 6

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - syntax error, unexpected `''/resultTemplate.tpl''` (T_CONSTANT_ENCAPSED_STRING) in `/main.php` on line number 14

:::


:::

/// type=REPL, filename=[main.php,resultTemplate.tpl]

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val,);
        }
        return $output;
    }
}

$templateFile = __DIR__ '/resultTemplate.tpl';
$testTemplate = readTemplate($templateFile,
        array
        (
            'title' => "Exam Result",
            'head1' => "Subject",
            'head2' => "Score",
            'Science' => 75,
            'Language' => 65,
        ));
echo $testTemplate;
?>
```

```tpl
<html>
    <head>
        <style>
            table {
                border-collapse: separate;
                caption-side: top;
                width: 300px;
                border: 3px solid gray;
            }
            th {
                color: white;
                background-color: green;
            }
            td, tr {
               border: 3px solid gray;
            }
        </style>
    </head>
    <body>
        <table>
            <caption> {title} </caption>
            <tr><th> {head1} </th><th> {head2} </th></tr>
            <tr><td> Science </td><td> {Science} </td></tr>
            <tr><td> Language </td><td> {Language} </td></tr>
        </table>
    </body>
</html>
```
/// type=SS, answer=[2]

In the `foreach ($array as $key => $val)` construct on line 6 of `main.php`, remove `as` between `$array` and `$key`. Execute the program. What is the error message?

 - syntax error, unexpected `')'` in `/main.php` on line number 8

 - syntax error, unexpected `'$key'` (T_VARIABLE) in `/main.php` on line number 6

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - syntax error, unexpected `''/resultTemplate.tpl''` (T_CONSTANT_ENCAPSED_STRING) in `/main.php` on line number 14

:::


/// type=CR, answer=[tests/Templates/CorrectMultipleErrorsTest.php], filename=[main.php,resultTemplate.tpl]

Correct the code so that it properly renders the content of `resultTemplate.tpl` in the web browser window.

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array  $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val,);
        }
        return $output;
    }
}

$templateFile = __DIR__ '/resultTemplate.tpl';
$testTemplate = readTemplate($templateFile,
        array
        (
            'title' => "Exam Result",
            'head1' => "Subject",
            'head2' => "Score",
            'Science' => 75,
            'Language' => 65,
        ));
echo $testTemplate;
?>
```

```tpl
<html>
    <head>
        <style>
            table {
                border-collapse: separate;
                caption-side: top;
                width: 300px;
                border: 3px solid gray;
            }
            th {
                color: white;
                background-color: green;
            }
            td, tr {
               border: 3px solid gray;
            }
        </style>
    </head>
    <body>
        <table>
            <caption> {title} </caption>
            <tr><th> {head1} </th><th> {head2} </th></tr>
            <tr><td> Science </td><td> {Science} </td></tr>
            <tr><td> Language </td><td> {Language} </td></tr>
        </table>
    </body>
</html>
```

+++


+++

### Part 4: Practice

/// type=CR, answer=[tests/Templates/ReadAndAccessTemplateTest.php], filename=[main.php,practiceTemplate.tpl]

Given the `practiceTemplate.tpl` template and the initial `main.php` implementations, write a program statement that parses and returns the content of the `practiceTemplate.tpl` template. In the `main.php` tab, add a statement that assigns `__DIR__ . '/practiceTemplate.tpl'` to a variable named `$practice`. Add another statement that assigns the associative array `array ('title' => "Practice Template", 'name' => "CodeStop", 'courseOffered' => "Courses Offered", 'motto' => "Learning by Coding", 'footer' => "All Rights Reserved CodeStop © 2017");` to a variable named `$contentArray`. Then, add a statement that calls the `readTemplate()` function passing two arguments `$practice` and `$contentArray` respectively and assigns it to a variable named `$practiceContent`. Next, create an `echo` statement to display the value of `$contentArray`. Run the program to view the output. 

```php
<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

/// add the required implementation here...

?>
```

```tpl
<!DOCTYPE html>
<html>
    <head>
        <title>{title}</title>
    </head>
    <body>
        <header style="text-align: center">
            <img src="CodeStop_Logo.png" width="250px"/>
        </header>
        <nav>
            <ul type="disc">
                <li><a href="https://codestop.io/">{name} Website</a></li>
                <li><a href="https://codestop.io/courses">{courseOffered}</a></li>
            </ul>
        </nav>
          <section style="text-align: justify; border-top-style: solid; border-width: 1px">
            <article>
                <h1>{motto}</h1>
                <p>"The goal of CodeStop is to design programming courses that are affordable to young people in developing nations. Ultimately, we want young people to build the path to a sustainable career through technology."</p>
            </article>
            <article>
                <p>"CodeStop has been a platform for learning to program and code since 2017."</p>
            </article>
        </section>
        <aside style="margin-left: 350px">
            <p>"We designed our platform to make programming easy to learn, understand, and share." - <b>{name}</b></p>
        </aside>
        <footer style="text-align: center; border-top-style: solid; border-width: 1px">
            <p>{footer}</p>
        </footer>
    </body>
</html>
```

+++
