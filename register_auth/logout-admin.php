<?php
    session_start();
    $_SESSION['admin'] = "";
    session_destroy();
    header('Location: ../../admin.php');
?>