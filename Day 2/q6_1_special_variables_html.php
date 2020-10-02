<!DOCTYPE html>
<html>
<body>
    <form action="q6_1_special_variables_html.php" method="GET">
        Side 1 : <input type="text" name="s1" required><br><br>
        Side 2 : <input type="text" name="s2" required><br><br>
        Side 3 : <input type="text" name="s3" required><br><br>
        <input type="submit" value="click here">
    </form>

<?php

if(@$_GET["s1"] && @$_GET["s2"]  && @$_GET["s3"])
{
    $x = $_GET['s1'];
    $y = $_GET['s2'];
    $z = $_GET['s3'];
    if($x==$y && $y==$z)
        echo "It is equilateral triangle";
    elseif($x==$y || $y==$z || $z==$x)
        echo "It is isosceles triangle";
    elseif($x*$x + $y*$y == $z*$z || $x*$x + $z*$z == $y*$y || $y*$y + $z*$z == $x*$x)
        echo "It is right angled triangle";
    elseif($x!=$y && $y!=$z)
        echo "It is scalene triangle";
    
    else
        echo " ";

}

?>
</body>
</html>
