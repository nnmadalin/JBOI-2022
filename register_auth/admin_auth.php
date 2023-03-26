<?php
// Start the session
session_start();
?>
<?php
    if(trim($_GET['password']) != ""){
        $pass = $_GET['password'];
        
        if($pass == "#####"){
            $_SESSION["admin"] = $pass;
            echo '<script>window.location.href = "../../admin.php";</script>';
        }
        else
            echo '<script>window.location.href = "../../admin.php?error=5";</script>';
    }
    else{
        echo '<script>window.location.href = "../../admin.php?error=4";</script>';

    }
?>          