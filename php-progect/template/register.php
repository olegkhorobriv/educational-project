<?php
/**
 * register page template
 */
if(isset($_POST['submit'])){
    $err = [];
    if(strlen($_POST['login']) < 4 or strlen($_POST['login']) > 30){
        $err[] = "Логін не менше 3 і не більше 30 символів";
    }
//    if(strlen($_POST['password']) < 4 or strlen($_POST['password']) > 30){
//        $err = "Пароль не менше 3 і не більше 30 символів";
//    }
     if( isLoginExits($_POST['login'])){
        $err[] = "Такий логін вже існує";
    }
    if(count($err) === 0) {
        createUser($_POST['login'], $_POST['password']);
        header('Location: /login');
        exit();
    }
    else{
        echo '<h4>Помилки реєстрації</h4>';
        foreach($err as $error){
            echo $error.'<br>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<link rel="stylesheet" href="stile.css">

<body>

    <div class="registering" style=" background-image: url(static/images/unnamed.jpg)";>
        <div class="loginbox loginbox-form">
            <img src="/static/images/avatar-icon-6.jpg" class="avatar">
            <h1>Реєстрація</h1>
            <form method="POST">
               <p>Login</p>
                <input type="text" name="login" required>
                <p>Password</p>
                <input type="password" name="password" required>
                <input type="submit" name="submit" value="Реєстрація">
            </form>
        </div>

    </div>



</body>

</html>
