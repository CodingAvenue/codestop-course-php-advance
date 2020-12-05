### Facts for Templates lesson:

A template is a pre-formatted file that can be applied to the layout and design on different parts of a certain website. 

A template is used to separate the PHP application logic from the HTML and CSS design.

A template engine is a software designed to provide an easier way of combining templates and related data elements in producing a certain document.

PHP offers several types of template engines that can be used to create a template like `Smarty`, `Twig`, and `Blade`.

This lesson uses the basics of the `Smarty` template engine in creating a custom template for basic search and replace functionality.

The `Smarty` template engine provides an easier way to separate the PHP code from the HTML and CSS code.

Smarty template tags should be enclosed in curly braces `{}` as delimiters. The template should be saved with the `.tpl` extension. 

Code:

```php
// main.php
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

```html
<!-- template.tpl -->
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

Output:

<html>
    <body>
        <h3>Favorites</h3>
        <p>
            <em>My favorite fruit is: Apple</em><br/>
            <em>My favorite color is: Gray</em>
        </p>
    </body>
</html>

In the above example, the code breaks down as follows:

 - `$output = file_get_contents($file);` reads the content of `$file` into a string and assigns it to `$output`.

 - `str_replace($replace, $val, $output)` replaces the string `$replace` in `$output` with the value in `$val`

 - `readTemplate($templateFile, array(... ))` parses and returns the content of `template.tpl`.

 - `{title}`, `{fruit}`, and `{color}` are Smarty tags that referenced the associative array keys `title`, `fruit`, and `color`.
