<!DOCTYPE html>
<html>
<body>
    <form action="q1_2_vowel.php" method="GET">
        Input : <input type="text" name="vowel" maxlength="1" required><br><br>
        <input type="submit" value="click here">
    </form>

<?php

if(@$_GET["vowel"]) {
    $vowel = $_GET['vowel'];

    switch("$vowel")
    {
        case "a":
        echo "its vowel";
        break;

        case "e":
        echo "its vowel";
        break;

        case "i":
        echo "its vowel";
        break;

        case "o":
        echo "its vowel";
        break;

        case "u":
        echo "its vowel";
        break;

        default:
        echo "its constant";
    }
}

?>
</body>
</html>