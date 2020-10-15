<?php
    require 'adminconn.php';
    $studname = $_POST['name'];
    $studmail = $_POST['email'];


        $select =("SELECT studname, studmail FROM result WHERE name='$studname'");

        $login = $conn->query($select);

        if (mysqli_num_rows($login)>0)
        {
            while($row = mysqli_fetch_array($login))
            {
                $name1 = $row['studname'];
                $email1 = $row['studmail'];
            }

            //check to see if they match
            if($studname==$name1 && $studmail == $email1)
            {
                echo "yes";
               // header("Location: admin_enters.php");
            }
            else{
                echo "Incorrect email id!";
                
            }        
        }
        else
            die("Your result is not updated yet!");
   
?>


