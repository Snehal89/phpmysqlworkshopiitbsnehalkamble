<?php

function calc($num1,$num2,$op)
{
    switch($op)
    {
        case ">=":
        if($num1 >= $num2)
            echo "$num1 is greater than $num2";
        else
            echo "num1 is not greater than or equal to $num2";
        break;

        case "<=":
        if($num1 <= $num2)
            echo "$num1 is smaller than $num2";
        else
            echo "num1 is not smaller than or equal to $num2";
        break;

        case "==":
        if($num1 == $num2)
            echo "$num1 is equal to $num2";
        else
            echo "$num1 is not equal to $num2";
        break;

        default:
        echo "unknown operator";

    }
}

echo calc(5,2,'==');

?>


