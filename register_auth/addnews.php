<?php
// Start the session
session_start();
?>
<?php
    if(trim($_POST['title']) != "" && trim($_POST['description']) != "")
    {
        $title = $_POST['title'];
        $desc = $_POST['description'];
        session_start();
        if (isset($_SESSION["admin"]))
        {
            $conn = new mysqli("", "", "", "lrmdro_jboi"); 
                $conn->connect_error;  
                $sql = "INSERT INTO news (titlu, descriere) VALUES ('".$title."', '".$desc."');";
                if (mysqli_query($conn, $sql)){
                    echo '<script>window.location.href = "../../admin.php?error=0";</script>';

                }
                else
                    echo '<script>window.location.href = "../../admin.php?error=1";</script>';
        }
        else
            echo '<script>window.location.href = "../../admin.php?error=5";</script>';
    }
    else
    {
        header('Location: ../../admin.php?error=4');
    }

?>          