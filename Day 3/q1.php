<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name : <input type="text" name="name"   required><br><br>
  Marks in the subject <br><br>
  sub1 : <input type="text" name="sub1"   required><br><br>
  sub2 : <input type="text" name="sub2"   required><br><br>
  sub3 : <input type="text" name="sub3"   required><br><br>
  sub4 : <input type="text" name="sub4"   required><br><br>
  sub5 : <input type="text" name="sub5"   required><br><br>
  total marks obtained : <input type="text" name="marksobtained"   required><br><br>
  total marks  : <input type="text" name="total" required><br><br>
  percentage : <input type="text" name="per" required><br><br>
  <input type="submit">
</form>

<?php
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
   $sub1 = $_POST['sub1'];
   $sub2 = $_POST['sub2'];
   $sub3 = $_POST['sub3'];
   $sub4 = $_POST['sub4'];
   $sub5 = $_POST['sub5'];
   $marksobtained = $_POST['marksobtained'];
   $total = $_POST['total'];
   $percentage = $_POST['per'];

   $sql = "INSERT INTO `class1` ( `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percent`) 
   VALUES ( '$name', $sub1, $sub2, $sub3, $sub4, $sub5, $marksobtained, $total, $percentage);";

    if (!mysqli_query($conn,$sql)) {
    echo("Error description: " . mysqli_error($conn));
  }
  
  mysqli_close($conn);
 
}
?>

</body>
</html>