<?php
$xx=123456;
$content = <<<fileContent
$xx
fileContent;

$fileSize = file_put_contents("data3.txt", $content);
echo "File size: $fileSize <br />-- Done --";
?>