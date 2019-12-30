<?php
    session_start();
    echo 'login sucess'.'</br>';
    $arr=($_SESSION['login']);
    echo $arr[0].'</br>';
    echo $arr[1].'</br>';
?>