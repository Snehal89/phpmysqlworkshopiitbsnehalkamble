<html>

<form action='q2_send_mail.php' method='POST'>
    Email : <input type='email' name='toemail'><br><br>
    Name : <input type='text' name='name'><br><br>
    Feedback : <textarea name='message'></textarea><br><br>
    <button type='submit' name='submit' value='send mail'>submit
    </button>
</form>

<?php

if(isset($_POST['submit']))
{
    $toemail = $_POST['toemail'];
    $subject = $_POST['name'];
    $message = $_POST['message'];

    if($toemail && $message)
    {
        //$to = "kamblesnepa18ce@student.mes.ac.in";
        $subject = $subject;
        //$headers="From: kamblesnehal647@gmail.com";
        $body = $message;
        echo $toemail." ".$subject." ".$body;
        if(mail($toemail,$subject,$body))
        {
        echo "mail sent successfully";
        }
    }
    else
        die("you must enter a name and feedback");
}

?>
</html>