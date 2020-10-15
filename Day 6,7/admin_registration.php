<html>
    <h2>Registration Form</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    name : <input type="text" name ="name" required><br><br>
    Enter college id : <input type="password" name="password" required><br><br>
    <button type="submit" value="submit">register</button><br><br>
    </form>

    already a user?? <a href="admin_login.html">login here</a>

<?php

    require 'adminconn.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    // collect value of input field
      $name = $_POST['name'];
      $userpassword = $_POST['password'];
      $userpasswordenc = md5($userpassword);
      
     $sql = "INSERT INTO `admin`(`name`, `clgid`) VALUES ('$name', '$userpasswordenc');";
    //header("Location: login.html");
    
    if (!mysqli_query($conn,$sql)) {
    echo("Error description: " . mysqli_error($conn));
  }
  header("Location: admin_login.html");
  mysqli_close($conn);
 
}
?>


</html>