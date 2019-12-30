<?php
    $server = "localhost";
    $user = "root";
    $password ="";
    $dbName = "login";
    $db = new mysqli($server, $user, $password, $dbName);
    session_start();
    if(isset($_POST['sub'])){
        $name=$_POST['username'];
        $pass=$_POST['pass'];
        $sql = "SELECT *from users where username='admin' and password='123'";
        $result = $db->query($sql)->fetch_all();
        echo $result[0];
        if($result[0]!=null){
            ?>
                <script>
                     location.href = "admin.php";
                </script>
            <?php
        }else{
            ?>
            <script>
                alert("login fail");  
            </script>
        <?php
        }
        $_SESSION['login'] = $result;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>
        </h1>
        <form method="POST" action="">
            <h5>User name:</h5>
            <input type="text" name="username" value=""/> <br/>
            <h5>Pass:</h5>
            <input type="text" name="pass" value=""/> <br/>
            <button type="submit" name="sub">Submit</button>
        </form>
    </body>
</html>