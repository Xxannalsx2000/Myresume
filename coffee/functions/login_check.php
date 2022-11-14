<?php
    session_start();
    if(!isset($_SESSION['user']) && $_SESSION['user'] == null){
        header('Location: ../web/login.php?Msg="LoginFirst"');
    }
?>