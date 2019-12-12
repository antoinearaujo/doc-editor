<?php

$content  = $_POST['content'];
$filename = $_POST['filename'];


$fp = fopen(__DIR__ . '/../front/' . $filename, 'w');
fwrite($fp, $content);
fclose($fp);

die('ok');