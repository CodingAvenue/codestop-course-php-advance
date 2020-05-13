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