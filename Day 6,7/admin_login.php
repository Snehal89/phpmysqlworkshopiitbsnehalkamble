<?php
    require 'adminconn.php';
    $name = $_POST['name'];
    $clgid = $_POST['password'];
    $clgidenc = md5($clgid);

        $select =("SELECT * FROM admin WHERE name='$name'");

        $login = $conn->query($select);

        if (mysqli_num_rows($login)>0)
        {
            while($row = mysqli_fetch_array($login))
            {
                $name1 = $row['name'];
                $clgid1 = $row['clgid'];
            }

            //check to see if they match
            if($name==$name1 && $clgidenc == $clgid1)
            {
                //"you are logged in!";
                header("Location: admin_enters.php");
            }
            else
                echo "Incorrect college id!";
                
                   
        }
        else
            die("That user doesn't exist!");
   
?>


