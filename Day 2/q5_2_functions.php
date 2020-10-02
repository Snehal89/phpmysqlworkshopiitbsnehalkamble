<?php

$firstname = "Sharma";

function writeName2($firstname)
{
    echo "$firstname";
}

echo "My name is "; writeName2($firstname);
echo "<br>";
echo "My brother's name is Ram "; writeName2($firstname);


?>