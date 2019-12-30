<?php
    session_start();
    if(isset($_POST['sub'])){
        $name=$_POST['username'];
        $pass=$_POST['pass'];
        if($name=='admin' && $pass='123'){
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
        $arr=array($name,$pass);
        $_SESSION['login'] = $arr;
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
            <h5>Pas:</h5>
            <input type="text" name="pass" value=""/> <br/>
            <button type="submit" name="sub">Submit</button>
        </form>
    </body>
</html>