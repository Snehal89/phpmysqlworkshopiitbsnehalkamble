<html>
    <h2>student Form</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter student name : <input type="text" name ="name" required><br><br>
    Enter student email : <input type="email" name="email" required><br><br>
    <u>Enter marks in subjects</u><br><br>
    php :<input type="text" name ="sub1" required><br><br> 
    mysql :<input type="text" name ="sub2" required><br><br> 
    html :<input type="text" name ="sub3" required><br><br> 
    <button type="submit" value="submit">Submit</button><br><br>
    </form>

<?php

require 'adminconn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
// collect value of input field
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sub1 = $_POST['sub1'];
  $sub2 = $_POST['sub2'];
  $sub3 = $_POST['sub3'];
  $total = ($sub1 + $sub2 + $sub3);
  $percentage = ($total/300) * 100;

 $sql = "INSERT INTO `result`(`studname`, `studmail`, `php`, `mysql`, `html`, `total`, `percentage`) 
        VALUES ('$name', '$email', '$sub1', '$sub2', '$sub3', '$total', '$percentage');";
//header("Location: login.html");

if (!mysqli_query($conn,$sql)) {
echo("Error description: " . mysqli_error($conn));
}
mysqli_close($conn);

}
?>
</html>