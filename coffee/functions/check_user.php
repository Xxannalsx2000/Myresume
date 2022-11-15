<?php
    session_start();
    require_once('../connection/connection.php');
    $query = $db->query("SELECT * FROM member WHERE name = '".$_POST['name']."' AND password='".$_POST['password']."'");
    $has_user = $query->fetch(PDO::FETCH_ASSOC);
    print_r($has_user);
    if($has_user > 0){
        $_SESSION['user'] = $has_user;
        header('Location: ../web/login_success.php');
    }else{
        header('Location: ../web/login_error.php');
    }


?>