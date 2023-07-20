<?php
/**
 * login page template
 */
if(isset($_POST['submit'])){
    $user = login($_POST['login'], $_POST['password']);
    if($user){
        $user = $user[0];
        $hash = md5(generateCode(10));
        $ip = null;
        if(!empty($_POST['ip'])){
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        updateUser($user['id'], $hash, $ip);
        setcookie('id', $user['id'], time()+60*60*24*30, "/");
        setcookie('hash', $hash, time()+60*60*24*30, "/");
        header("Location: /admin");
        exit();
    }
    if($user == false){
//        $res = '';
//        $res .= '<div class="inner">';
//        $res .= '<div class="content"><span>Ви ввели неправильно логін або пароль</span></div>';
//        $res .= '</div>';
       echo '<script> alert("Ви ввели неправильно логін або пароль")</script>';
        
}
}
//    var_dump($user);
?>
  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="stile.css">

<body>
   <?php echo $res; ?>
    <div class="registering" style="background-image: url(static/images/unnamed.jpg);">
        <div class="loginbox loginbox-log">
            <img src="/static/images/avatar-icon-6.jpg" class="avatar">
            <h1>Логін</h1>
            <form method="POST">
                <p>Login</p>
                <input type="text" name="login" required>
                <p>Password</p>
                <input type="password" name="password" required>
                <p>Прикліпляти до IP: Pass:</p> <input type="checkbox" name="ip"><br>
                <input type="submit" name="submit" value="Ввійти">
                <a href="register">Don't have an account?</a>
            </form>
        </div>

    </div>
    
</body>
<script src="js/index.js"></script>
</html>

