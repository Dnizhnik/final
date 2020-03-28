<?php

require 'bd.php';
if ($_POST['login']=='' || $_POST['password']=='') {
    echo
        '<!DOCTYPE html>
            <html lang="ru">
            <head>
                <meta charset="UTF-8">
                <title>Авторизация</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="https://www.rudebox.org.ua/favicon.ico"/>
  <link rel="stylesheet prefetch" href="https://www.rudebox.org.ua/demo/lessons/styles/style.css">
<link rel="stylesheet" href="css/style.css">

            </head>
            <body class="login-page">
<main>
<div class="login-block">
<img src="/icons/1486564400-account_81513.svg" width = "70" height = "70" alt="Scanfcode">
<h1>Введите свои данные</h1>
                <form action="loginUser.php" method="POST">
                    <div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                    <input type="text" name="login" class="form-control" placeholder="Ваш логин">
                    </div>
</div>

<hr class="hr-xs">

<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Ваш пароль">
                    </div>
</div>

                    <input type="submit" class="btn btn-primary btn-block" id="button" value="Войти">

                </form>
                </div>
                <div class="login-links">
<p class="text-center">Еще нету аккаунта? <a class="txt-brand" href="reg.php"><font color=#29aafe>Регистрируйся</font></a></p>
</div>
                </main>
            </body>
            </html>';
        }

if ($_POST['login']!=='' || $_POST['password']!=='') {

        $login = $_POST['login'];
        $password = $_POST['password'];
         $result = $pdo->prepare("SELECT * FROM `registration` WHERE login=:login AND password=:password");
        $result->bindvalue(':login', $_POST['login']);
        $result->bindvalue(':password', md5(md5($_POST['password'])));
        $result->execute( );
        $resall = $result->fetchAll();
        $myfoto = __DIR__.DIRECTORY_SEPARATOR.$resall[0]['id'];
        if (count($resall)>0) {
session_id();
session_start();
 setcookie ("login", $resall[0]['login'], time() + 50000);
        setcookie ("password", md5($resall[0]['login'].$resall[0]['password']), time() + 50000);
        require 'bd.php';

       $_SESSION['id'] = $resall[0]['id'];

 $_SESSION['user'] = $login;
  echo '<meta charset="UTF-8">Вы вошли как '.$_SESSION['user'].'!';
                        echo '<meta charset="UTF-8">Вы успешно авторизировались! ';

                    echo "<a href = 'gallery.php'> Галерея </a>";
            if(isset($_SESSION['id'])) {
                echo "<a href = 'myfotos.php'> Мои фото </a>";
            }
            require 'index.php';
        }

}
if (isset($login) && isset($password) && count($resall)==0) {echo "Логин или пароль не верный или пользователь не существует";
}
?>