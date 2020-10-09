<?php

$file = file_get_contents("count.txt");
$visitors = $file;

echo "you've had $visitors visitors.";

$visitorsnew = $visitors + 1;

$filenew = fopen("count.txt","w");
fwrite($filenew,$visitorsnew);
?>