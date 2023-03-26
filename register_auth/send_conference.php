<?php
    $email = $_POST['email'];
    if(trim($_POST['fullname']) != "" && trim($_POST['email']) != "" &&  trim($_POST['school']) != ""){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $fname = $_POST['fullname'];
            $school = $_POST['school'];
            $phone = $_POST['number'];
            echo "gg";
            if(trim($phone) != ""){
                $conn = new mysqli("", "", "", "lrmdro_jboi");    
                $conn->connect_error;  
                $sql = "INSERT INTO conference (nume, email, school, phone) VALUES ('".$fname."', '".$email."', '".$school."', '".$phone."');";
                if (mysqli_query($conn, $sql)){
                    echo '<script>window.location.href = "../../conference.php?error=0";</script>';

                }
                else
                    echo '<script>window.location.href = "../../conference.php?error=1";</script>';
            }
            else{
                $conn = new mysqli("", "", "", "lrmdro_jboi"); 
                $conn->connect_error;  
                $sql = "INSERT INTO conference (nume, email, school) VALUES ('".$fname."', '".$email."', '".$school."');";
                if (mysqli_query($conn, $sql)){
                    echo '<script>window.location.href = "../../conference.php?error=0";</script>';

                }
                else
                    echo '<script>window.location.href = "../../conference.php?error=1";</script>';
            }
        }
        else
            header('Location: ../../conference.php?error=1');
    }
    else
        header('Location: ../../conference.php?error=3');
?>