<?php
    $server = "localhost";
    $user = "root";
    $password ="";
    $dbName = "login";
    $db = new mysqli($server, $user, $password, $dbName);
    session_start();
    echo 'login sucess'.'</br>';
    echo $_SESSION['login'];
    $sql = "SELECT fullName from users where id=".$_SESSION['login'][0];
    $result = $db->query($sql)->fetch_all();
    echo $result[0];
?>