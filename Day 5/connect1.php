<?php 
//error reporting

$conn = mysqli_connect("localhost","root","","data1") or die(mysqli_connect_error());
//mysqli_select_db($conn,"data1") or die(mysqli_error($conn));

echo "Connected! <br/>";

?>