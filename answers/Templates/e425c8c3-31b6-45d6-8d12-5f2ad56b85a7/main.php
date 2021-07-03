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

$practice = __DIR__. '/practiceTemplate.tpl';
$contentArray = array ('title' => "Practice Template",
			'name' => "CodeStop",
			'courseOffered' => "Courses Offered",
			'motto' => "Learning by Coding",
			'footer' => "All Rights Reserved CodeStop © 2017"
			);
$practiceContent = readTemplate($practice, $contentArray);
echo $practiceContent;
?>