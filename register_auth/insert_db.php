<?php
// Start the session
session_start();
?>
<?php
    if(trim($_POST['first_name']) != "" && trim($_POST['birth_date']) != "" && trim($_POST['comments']) != "" && trim($_FILES['img_upload']['tmp_name']) != "" )
    {
        $type = $_POST['tip'];
        $name = $_POST['first_name'];
        $nastere = $_POST['birth_date'];
        $gender = $_POST['gender'];
        $size = $_POST['size'];
        $comm = $_POST['comments'];
        $country = "";
        session_start();
        if (isset($_SESSION["auth"]) && trim($name) != "")
        {
            $pass =  $_SESSION["auth"];
            $hash = md5($pass);
            $conn = new mysqli("", "", "", "lrmdro_jboi"); 
            $conn->connect_error;
            $sql = "select * from users where password = '$hash'";
            $res = mysqli_query($conn, $sql);
            if($res->num_rows > 0){
                if($row = $res->fetch_assoc()) {
                    $country = $row['country'];
                   
                    $conn2 = new mysqli("", "", "", "lrmdro_jboi"); 
                    $conn2->connect_error;
                    $sql2 = "Delete from $country where tip = '".$type."' ";
                    $conn2->query($sql2);
                    echo $conn2->error;
                    
                    $sql2 = "INSERT INTO $country (tip, nume, nastere, gender, size, com) VALUES ('".$type."', '".$name."', '".$nastere."', '".$gender."', '".$size."', '".$comm."');";
                    
                    $img_name = $_FILES['img_upload']['tmp_name'];
                    $folder = $_SERVER['DOCUMENT_ROOT'] . "/upload/" . $country . "/";

                    $file_type = $_FILES['img_upload']['type'];
                    if($file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/jpeg")
                    {
                        if ($_FILES["img_upload"]['size'] <= 5000000) {
                            if (is_writable($folder.$type.".png")) {
                                unlink($folder.$type.".png");
                            }
                            if (mysqli_query($conn2, $sql2) && move_uploaded_file($img_name, $folder.$type.".png")) {
                                file_get_contents("https://wirepusher.com/send?id=RDJampsk2&title=Utilizator%20nou&message=Utilizator nou");
                                header('Location: ../../register.php?error=0');
                            } else {
                                header('Location: ../../register.php?error=1');
                            }
                        }
                        else
                            header('Location: ../../register.php?error=3');
                    }
                    else {
                        header('Location: ../../register.php?error=2');
                    }
                }
            }
            else{
                header('Location: ../../register.php?error=1');
            }
        }
        else{
            header('Location: ../../register.php?fail=true');
        }
    }
    else
    {
        header('Location: ../../register.php?error=4');
    }

?>          