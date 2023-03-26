<?php
    $email = $_POST['email'];
    if(trim($_POST['fullname']) != "" && trim($_POST['email']) != "" &&  trim($_POST['school']) != ""){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $to = "contact@jboi2022.lrmd.ro";
            $subject = $_POST['title'];
            $message = "Email person: ".$_POST['email']."\n";
            $message .= "Name: ".$_POST['fullname']."\n";
            $message .= "Country: ".$_POST['country']."\n";
            $message .= "Date: ".date("d/m/Y")."\n\n";
            $message .= "Subject: ".$_POST['subject']."\n";

            $retval = mail ($to,$subject,$message);

            if( $retval == true ) {
                header('Location: ../../contact.php?error=0');
            }else {
                header('Location: ../../contact.php?error=2');
            }
        }
        else
            header('Location: ../../contact.php?error=1');
    }
    else
        header('Location: ../../contact.php?error=3');
?>