<?php
    include "../../User_model.php";

    $user = new User_model();

    session_start();
    $username = $_SESSION['username'];
    
?>
