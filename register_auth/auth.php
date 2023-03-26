<?php
// Start the session
session_start();
?>
<?php
    if(trim($_POST['user']) != "" && trim($_POST['password']) != "" ){
        $user= $_POST['user'];
        $pass = $_POST['password'];
        $hash = md5($pass);

        $conn = new mysqli("", "", "", "lrmdro_jboi"); 
        $conn->connect_error;
        $sql = "select * from users where user = '$user' and password = '$hash'";
        $res = mysqli_query($conn, $sql);
        if($res->num_rows > 0){
            if($row = $res->fetch_assoc()) {
                $_SESSION["auth"] = $pass;
                header('Location: ../../register.php');
            }
            else
                 header('Location: ../../register.php?error=5');
        }
        else
        {
            header('Location: ../../register.php?error=5');
        }
    }
    else{
        header('Location: ../../register.php?error=4');
    }
?>          