<?php
echo "1]count no. of string <br>";
$string = "HELLO";
echo strlen($string);
echo "<br>";

echo "2]Breaking down a string into an array <br>";
$string1 = "1 2 3 4 5";
$exparray = explode(" ",$string1);
echo $exparray[2];
echo "<br>";

echo "3]Reverse the string<br>";
echo strrev($string);
echo "<br>";

echo "4]Convert all alphabetic characters in string to their lower case form.<br>";
echo strtolower($string);
echo "<br>";

echo "5]Convert all alphabetic characters in string to their upper case form.<br>";
$string2 = "new world";
echo strtoupper($string2);
echo "<br>";

echo "6]Declare a substring and replace the content of substring into original string.<br>";
$replace = "my name is abc";
$result = substr_replace($replace, "snehal",11,13);
echo ($result);
echo "<br>";

?>