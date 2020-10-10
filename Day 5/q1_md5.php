<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    name : <input type="text" name ="name" required><br><br>
    password : <input type="password" name="password" required><br><br>
    <input type="submit" value="sign in"><br><br>
    </form>

<?php

    require 'connect1.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  $userpassword = $_POST['password'];
  $userpasswordenc = md5($userpassword);

   $sql = "INSERT INTO `day5` (`name`, `password`) VALUES ('$name', '$userpasswordenc');";

    if (!mysqli_query($conn,$sql)) {
    echo("Error description: " . mysqli_error($conn));
  }
  
  mysqli_close($conn);
 
}
?>

</body>
</html>