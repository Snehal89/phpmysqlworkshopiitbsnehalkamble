<!DOCTYPE html>
<html>
<body>
    <form action="q6_2_special_variables_html.php" method="GET">
        Name of the student : <input type="text" name="name" required><br><br>
        Marks in Each Subject <br><br>
        Subject 1* :  <input type="text" name="sub1" required><br><br>
        Subject 2* :  <input type="text" name="sub2" required><br><br>
        Subject 3* :  <input type="text" name="sub3" required><br><br>
        Subject 4* :  <input type="text" name="sub4" required><br><br>
        Subject 5* :  <input type="text" name="sub5" required><br><br>
        <input type="submit" value="click here"><br><br>
    </form>

<?php

if(@$_GET["sub1"] && @$_GET["sub2"] && @$_GET["sub3"] && @$_GET["sub4"] && @$_GET["sub5"] ) 
{
    $sub1 = $_GET['sub1'];
    $sub2 = $_GET['sub2'];
    $sub3 = $_GET['sub3'];
    $sub4 = $_GET['sub4'];
    $sub5 = $_GET['sub5'];
    $total = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5);
    $percentage = $total/5;
    echo "Total marks obtained <br>";
    echo "total is $total <br>";
    echo "percentage obtained is $percentage%";
}

?>

</body>
</html>