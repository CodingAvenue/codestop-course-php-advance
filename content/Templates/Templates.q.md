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
/// type=SS, choiceType=HTML, id=15f40a1b-2383-44ed-8249-10bc69e9835b, answer=[1]

Execute the program. What is its output?

 - <h3>Favorites</h3><p><em>My favorite fruit is: Apple</em><br/><em>My favorite color is: Gray</em></p>

 - <h3>{title}</h3><p><em>My favorite fruit is: {fruit}</em><br/><em>My favorite color is: {color}</em></p>

 - <h2>Favorites</h2><p><b>My favorite fruit is: Apple</b><br/><b>My favorite color is: Gray</b></p>

 - <h2>{Favorites}</h2><p><b>My favorite fruit is: {fruit}</b><br/><b>My favorite color is: {color}</b></p>

 - <h3>{Favorites}</h3><p><em>My favorite fruit is: {Apple}</em><br/><em>My favorite color is: {Gray}</em></p>


/// type=SS, id=088bd42a-7ce6-48e6-9d6b-f3d74ac67660, answer=[4]

Which of the following is a user-defined function?

 - `file_exists()`

 - `$templateFile`

 - `str_replace()`

 - `readTemplate()`

 - `file_get_contents()`


/// type=MS, id=29d75481-d3a8-49a7-911b-9390b3189f67, answer=[2,4]

Which of the following are function calls?

 - `echo $testTemplate;`

 - `file_get_contents($file)`

 - `foreach ($array as $key => $val)`

 - `str_replace($replace, $val, $output)`

 - `function readTemplate($file, $array) {... }`


/// type=SS, id=5f770cc6-31e7-4d7e-b4d0-b3bb0850e2bf, answer=[5]

Which of the following is a file handling function?

 - `foreach()`

 - `$templateFile`

 - `str_replace()`

 - `readTemplate()`

 - `file_get_contents()`


/// type=SS, id=1400bb37-0add-43f2-9fe7-d4bbbedd7e15, answer=[3]

In the statement `$output = file_get_contents($file);` on line 5 of `main.php`, what does `file_get_contents($file)` do?

 - It deletes the content of the specified `$file`.

 - It removes the content from the specified `$file`.

 - It reads the content of the specified `$file` into a string.

 - It displays the content of the specified `$file` into a string.

 - It converts the content of the specified `$file` into a string.


/// type=SS, id=34b70d74-32ab-4cfc-be61-f39fbc9a7182, answer=[4]

Which statement best describes `$output = file_get_contents($file);` on line 5 of `main.php`?

 - It assigns the `file_get_contents($file)` function call to `$output`.

 - It accesses the content of the specified `$file` and assigns it to `$output`.

 - It removes the content from the specified `$file` and assigns it to `$output`.

 - It reads the content of the specified `$file` into a string and assigns it to `$output`.

 - It converts the content of the specified `$file` into a string and assigns it to `$output`.


/// type=SS, id=83472697-84ce-4c6f-8b50-3fee51d70490, answer=[3]

Which statement best describes `str_replace($replace, $val, $output)` on line 8 of `main.php`?

 - It adds the string of `$replace` to `$val` in `$output`.

 - It displays the string of `$replace` and `$val` in `$output`.

 - It replaces the string of `$replace` with `$val` in `$output`.

 - It accesses the string of `$replace` and `$val` in `$output`.

 - It removes the string of `$replace` and `$val` from `$output`.


/// type=MS, id=9184a1b7-6ffa-4c10-a08b-cd05117c9963, answer=[2,3,5]

Which statements correctly describe the `readTemplate()` function of `main.php`?

 - It displays the content of the specified file.

 - It is a user-defined function that returns a value.

 - It parses and returns the content of the specified file.

 - It is a user-defined function that does not return a value.

 - It is a user-defined function that requires two arguments of types `resource` and `array`.


/// type=SS, id=d96f9f68-a892-4697-bddf-e75ec904d54a, answer=[5]

On line 18 of `main.php`, what is `'title' => "Favorites"`?

 - It is a value.

 - It is a string.

 - It is a variable.

 - It is an array key.

 - It is an array element.


/// type=SS, id=9a3cabbf-3fd0-4bc5-818f-55a025e368ec, answer=[4]

In the array element `'title' => "Favorites"`, what is `title`?

 - It is a value.

 - It is a string.

 - It is a variable.

 - It is an array key.

 - It is an array element.


/// type=SS, id=cc97e4f7-a72d-4352-939c-6bbfbf1e0674, answer=[1]

In the array element `'title' => "Favorites"`, what is `Favorites`?

 - It is a value.

 - It is a string.

 - It is a variable.

 - It is an array key.

 - It is an array element.


/// type=MS, id=87fb02dc-8e00-4b17-be06-730a8155ffc8, answer=[1,2,5]

Which of the following are HTML tags?

 - `<br/>`

 - `<p></p>`

 - `{title}`

 - `{fruit}`

 - `<em></em>`


/// type=MS, id=de4cafb0-8876-4bd5-a995-19584c47c0a6, answer=[3,5]

Which of the following are HTML elements?

 - `{title}`

 - `{color}`

 - `<h3>{title}</h3>`

 - `My favorite fruit is: {fruit}`

 - `<em>My favorite color is: {color}</em>`


/// type=SS, id=748e75cb-cfdf-4f02-a2c0-5ca28c80c415, answer=[4]

In the HTML element `<h3>{title}</h3>` on line 3 of `template.tpl`, what is `{title}`?

 - It is a string.

 - It is an operator.

 - It is a condition.

 - It is a Smarty tag.

 - It is an HTML element.


/// type=SS, id=5ac11c3b-257d-4baf-a663-6c9b3fe90742, answer=[3]

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
/// type=SS, choiceType=HTML, id=b9db4195-f426-4b13-8d56-9016d6286879, answer=[2]

Execute the program. What is its output?

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Science </td><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> 75 </td></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>


/// type=MS, id=e2e51962-0604-4bae-97dc-5b126cd98a3d, answer=[1,3,4]

Which of the following are function calls?

 - `file_get_contents($file)`

 - `foreach ($array as $key => $val)`

 - `str_replace($replace, $val, $output)`

 - `readTemplate($templateFile, array(... ))`

 - `function readTemplate($file, $array) {... }`


/// type=MS, id=96a6fbbb-92c4-43c5-8d78-1e7bc023c779, answer=[1,2,3]

Which of the following are Smarty tags?

 - `{title}`

 - `{head1}`

 - `{Language}`

 - `<td> Science </td>`

 - `tr { border: 3px solid gray; }`


/// type=MS, id=65519bc8-ef0c-4977-accd-f641206488a1, answer=[2,3,4]

Which of the following are array elements?

 - `color: white;`

 - `'Science' => 75`

 - `'head2' => "Score"`

 - `'title' => "Exam Result"`

 - `<caption> {title} </caption>`


/// type=MS, id=5a68ad69-a5b4-4ccf-96ce-da86f541d5f7, answer=[3,4,5]

Which of the following are array keys?

 - `75`

 - `Score`

 - `head1`

 - `Science`

 - `Language`


/// type=MS, id=ce1ba7f9-216e-4189-b206-0c55e27ccb58, answer=[1,2,4,5]

Which of the following are array values?

 - `65`

 - `75`

 - `title`

 - `Subject`

 - `Exam Results`


/// type=MS, id=3965762b-e2b0-4800-9315-dfca320cb0b1, answer=[1,3]

In `main.php`, which statements correctly describe `readTemplate($templateFile, array(... ))` on line 15?

 - It returns the parsed content of the `resultTemplate.tpl` template.

 - It displays the parsed content of the `resultTemplate.tpl` template.

 - It calls the `readTemplate()` function passing two arguments `$templateFile` and `array(... )`.

 - It defines the `readTemplate()` function with two parameters `$templateFile` and `array(... )`.

 - It creates the `readTemplate()` function with two parameters `$templateFile` and `array(... )`.


/// type=SS, id=1bc155d4-52d3-4efb-8204-d4dc742d4052, answer=[4]

In `main.php`, what key is associated with the value `75`?

 - `head1`

 - `title`

 - `head2`

 - `Science`

 - `Language`


/// type=SS, id=2ea0ab42-4c03-4d54-ae4f-254e3159f4c5, answer=[4]

On line 6 of `resultTemplate.tpl`, what is `caption-side: top;`?

 - It is a CSS value.

 - It is a CSS property.

 - It is a CSS selector.

 - It is a CSS declaration.

 - It is a CSS declaration block.


/// type=SS, id=b74e4466-1075-485d-9e9c-54f566557c4c, answer=[5]

In the style rule `tr { border: 3px solid gray; }` of `resultTemplate.tpl`, what is `{ border: 3px solid gray; }`?

 - It is a CSS value.

 - It is a CSS property.

 - It is a CSS selector.

 - It is a CSS declaration.

 - It is a CSS declaration block.


/// type=SS, id=905f8d5b-b148-411e-a758-cb8c7a543802, answer=[3]

In the HTML element `<td> {Language} </td>` on line 24 of `resultTemplate.tpl`, what does the Smarty tag `{Language}` do?

 - It accesses the `Language` element of an associative array.

 - It displays the `Language` element of an associative array.

 - It references to the `Language` key of an associative array.

 - It references to the value `Language` of an associative array.

 - It removes the `Language` element from an associative array.


/// type=SS, id=0bec71a6-a305-4316-92f0-fc63f76ec91c, answer=[4]

Which statement best describes `$output = file_get_contents($file);` on line 5 of `main.php`?

 - It assigns the `file_get_contents($file)` function call to `$output`.

 - It accesses the content of the specified `$file` and assigns it to `$output`.

 - It removes the content from the specified `$file` and assigns it to `$output`.

 - It reads the content of the specified `$file` into a string and assigns it to `$output`.

 - It converts the content of the specified `$file` into a string and assigns it to `$output`.


/// type=MS, id=90bd4a55-dce0-4fd5-b7b1-6aab13c69f96, answer=[2,3,5]

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
/// type=SS, choiceType=HTML, id=17e17ee2-a6c9-4c0e-9813-ec0a2f35b337, answer=[5]

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
/// type=MS, id=c6582bf1-2bac-428b-b865-319a7db07a30, answer=[4,5]

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
/// type=SS, choiceType=HTML, id=a7a313c0-7395-450e-a1c0-8bb4d19afcfa, answer=[2]

Execute the program. What is its output?

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Science </td><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> 75 </td></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>


/// type=SS, choiceType=HTML, id=a4e0e910-3fad-4c52-aedb-13e43880f1bf, answer=[5]

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

/// type=MS, id=90892e74-be4e-4370-8798-4c8fe00493d3, answer=[2,4]

Which statements correctly describe a template?

 - It is used to modify the layout and design a certain website.

 - It is used to separate the PHP application logic from the HTML and CSS design.

 - It is an engine that provides an easier way to separate the PHP code from the HTML and CSS code.

 - It is a pre-formatted file that can be applied to the layout and design on different parts of a certain website.

 - It is a software designed to provide an easier way of combining templates and related data elements in producing a certain document.


/// type=SS, id=1879f6d2-2c50-4b23-bd8c-9401134e7161, answer=[5]

Which statement is true about the template engine?

 - It is used to modify the layout and design a certain website.

 - It is used to separate the PHP application logic from the HTML and CSS design.

 - It is an engine that provides an easier way to separate the PHP code from the HTML and CSS code.

 - It is a pre-formatted file that can be applied to the layout and design on different parts of a certain website.

 - It is a software designed to provide an easier way of combining templates and related data elements in producing a certain document.


/// type=MS, id=b609595d-e312-40f6-a75c-f17631e88895, answer=[1,2,5]

Which of the following are PHP template engines?

 - `Twig`

 - `Blade`

 - `Glass`

 - `Steam`

 - `Smarty`


/// type=SS, id=a236fb40-76ba-4ea3-b14c-7d9c49e692aa, answer=[4]

Which file extension is used for the `Smarty` template?

 - `.php`

 - `.txt`

 - `.css`

 - `.tpl`

 - `.html`


/// type=SS, id=db731afe-f371-42eb-98c6-22f476d0f9a0, answer=[5]

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
/// type=MS, id=b774c6ea-ac4d-4559-a502-d1041dc4ecc3, answer=[1,2]

Execute the program. What are the error messages?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - Warning: Missing argument `2` for `readTemplate()`, called in `/main.php` on line number 18 and defined in `/main.php` on line number 2


/// type=MS, id=7b47649e-ca45-4588-b299-ee69cc36c2d9, answer=[2,3,4]

Which statements correctly describe the error?

 - There is no semicolon `;` at the end of the statement on line 5 of `main.php`.

 - On line 5 of `main.php`, the statement `$output = file_get_contents($fle);` is invalid.

 - On line 5 of `main.php`, the argument `$fle` in the `file_get_content()` function call is incorrect.

 - On line 5 of `main.php`, the argument `$file` in the `file_get_content()` function call is misspelled as `$fle`.

 - On line 5 of `main.php`, the argument `$file` in the `file_get_content()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=5eb6fd05-6806-443a-aa80-ed57cd02d514, answer=[tests/Templates/5eb6fd05-6806-443a-aa80-ed57cd02d514], filename=[main.php,template.tpl]

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
/// type=SS, id=f23ba703-9e79-4eb2-8721-d8fdb45b1de0, answer=[3]

Execute the program. What is the error message?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - Warning: Missing argument `2` for `readTemplate()`, called in `/main.php` on line number 18 and defined in `/main.php` on line number 2


/// type=MS, id=41734513-7b88-4f7a-a938-c0870cf0c639, answer=[2,4]

Which statements correctly describe the error?

 - The `str_replace()` function only accepts two arguments when called.

 - On line 8 of `main.php`, the `str_replace($replace $val, $output)` function call is invalid.

 - There is a comma `,` between `$val` and `$output` arguments in the `str_replace()` function call on line 8 of `main.php`.

 - There is no comma `,` between `$replace` and `$val` arguments in the `str_replace()` function call on line 8 of `main.php`.

 - On line 8 of `main.php`, the first argument `$replace` in the `str_replace()` function call is not enclosed in double quotes `""`.

:::


/// type=CR, id=f3c5f0b1-c909-4f13-af26-954d9b93ca1e, answer=[tests/Templates/f3c5f0b1-c909-4f13-af26-954d9b93ca1e], filename=[main.php,template.tpl]

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
/// type=MS, id=3ab0fdad-03ec-4821-bc48-8a40e49b74e8, answer=[4,5]

Execute the program. What are the error messages?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - Warning: Missing argument `2` for `readTemplate()`, called in `/main.php` on line number 18 and defined in `/main.php` on line number 2


/// type=MS, id=2254ef96-6692-4d86-b164-b7b9d1ecc0ea, answer=[1,2,5]

Which statements correctly describe the error?

 - The `readTemplate()` function requires two arguments when called.

 - On line 15 of `main.php`, the `readTemplate()` function call is invalid.

 - The `readTemplate()` function does not accept an argument of type array.

 - There is no semicolon `;` at the end of the statement on line 15 of `main.php`.

 - There is no first argument specified in the `readTemplate()` function call on line 15 of `main.php`.

:::


/// type=CR, id=f0c49ebc-76cf-4ec6-bbb7-f245c2a2b932, answer=[tests/Templates/f0c49ebc-76cf-4ec6-bbb7-f245c2a2b932], filename=[main.php,template.tpl]

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
/// type=SS, id=76cb72d3-aa0f-47a5-9d9f-2fd7f213d995, answer=[2]

Execute the program. What is the error message?

 - Undefined variable: `fle` in `/main.php` on line number 5

 - syntax error, unexpected `'='`, expecting `')'` in `/main.php` on line number 18

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - syntax error, unexpected `'$val'` (T_VARIABLE), expecting `','` or `')'` in `/main.php` on line number 8

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4


/// type=MS, id=1a840f19-d2f1-44d9-b114-e616050bd1f0, answer=[2,4,5]

Which statements correctly describe the error?

 - There is a comma `,` after `'title' = "Favorites"` on line 18 of `main.php`.

 - On line 18 of `main.php`, the array element `'title' = "Favorites"` is invalid.

 - There is no semicolon `;` at the end of `'title' = "Favorites"` on line 18 of `main.php`.

 - There is no double arrow operator `=>` specified in `'title' = "Favorites"` on line 18 of `main.php`.

 - On line 18 of `main.php`, the double arrow operator `=>` between `'title'` and `"Favorites"` is replaced with `=`.

:::


/// type=CR, id=5a3b951e-d541-4af0-aae9-d8fd98674353, answer=[tests/Templates/5a3b951e-d541-4af0-aae9-d8fd98674353], filename=[main.php,template.tpl]

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
/// type=SS, choiceType=HTML, id=22c3e0df-73c9-4997-90da-592cf62f4288, answer=[2]

Execute the program. What is its output?

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Science </td><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> 75 </td></tr><tr style = "border: 3px solid gray; color: blue; font-family: Arial;"><td style = "border: 3px solid gray; color: blue; font-family: Arial;"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><caption style = "caption-side: top;"> Exam Result </caption><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>

 - <table style = "border-collapse: separate; width: 300px;border: 3px solid gray;"><tr style = "border: 3px solid gray"><th style = "color: white; background-color: green;"> Subject </th><th style = "color: white; background-color: green;"> Score </th></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Science </td><td style = "border: 3px solid gray"> 75 </td></tr><tr style = "border: 3px solid gray"><td style = "border: 3px solid gray"> Language </td><td style = "border: 3px solid gray"> 65 </td></tr></table>


/// type=SS, id=f3d54ecc-a804-481d-83d2-e45e9a98fbe7, answer=[5]

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
/// type=SS, id=7c73354d-266c-4b73-a2d7-b5ed21f08023, answer=[1]

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
/// type=SS, id=e480e910-cfd2-4bef-812e-4fdfc3da5518, answer=[2]

In the `foreach ($array as $key => $val)` construct on line 6 of `main.php`, remove `as` between `$array` and `$key`. Execute the program. What is the error message?

 - syntax error, unexpected `')'` in `/main.php` on line number 8

 - syntax error, unexpected `'$key'` (T_VARIABLE) in `/main.php` on line number 6

 - Warning: `file_get_contents():` Filename cannot be empty in `/main.php` on line number 5

 - Warning: `file_exists()` expects parameter `1` to be a valid path, array given in `/main.php` on line number 4

 - syntax error, unexpected `''/resultTemplate.tpl''` (T_CONSTANT_ENCAPSED_STRING) in `/main.php` on line number 14

:::


/// type=CR, id=8131c801-225b-4889-9993-4530b576a8e4, answer=[tests/Templates/8131c801-225b-4889-9993-4530b576a8e4], filename=[main.php,resultTemplate.tpl]

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

/// type=CR, id=e425c8c3-31b6-45d6-8d12-5f2ad56b85a7, answer=[tests/Templates/e425c8c3-31b6-45d6-8d12-5f2ad56b85a7], filename=[main.php,practiceTemplate.tpl]

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
