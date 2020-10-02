<!DOCTYPE html>
<html>
<body>

<form action="q1_1_evenodd.php" method="GET">
    Number  : <input type="text" name="num" placeholder="Enter number" required><br><br>
    <input type="submit" value="click here">
</form>

<?php

if(@$_GET["num"]) {
    $number = $_GET['num'];
    if($number % 2 == 0) {
        echo "$number is even number";
    }
    else {
        echo "$number is odd number";
    }
}

?>
</body>
</html>