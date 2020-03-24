<?php

require 'bd.php';
if ($_POST['login']=='' || $_POST['password']=='') echo
        '<!DOCTYPE html>
            <html lang="ru">
            <head>
                <meta charset="UTF-8">
                <title>Авторизация</title>
            </head>
            <body>

                <form action="loginUser.php" method="POST">
                    <p>логин
                    <input type="text" name="login" id="login"></p>
                    <p>пароль
                    <input type="password" name="password" id="password"></p>
                    <input type="submit" id="button" value="Войти">

                </form>
                <p><a href="reg.php">Регистрация</a> </p>

            </body>
            </html>';

        $login = $_POST['login'];
        $password = $_POST['password'];
        $result = $pdo->prepare("SELECT * FROM `registration` WHERE login=:login AND password=:password");
        $result->bindvalue(':login', $_POST['login']);
        $result->bindvalue(':password', md5(md5($_POST['password'])));
        $result->execute( );
        $result = $result->fetchAll();

        if (count($result)>0) {
            echo '<meta charset="UTF-8">Вы успешно авторизировались!';
            $_SESSION['user'] = $result[0];
            echo '<meta charset="UTF-8">Вы вошли как '.$_SESSION['user']['login'].'!';
            echo "<a href = 'gallery.php'>Галерея</a>";
            require 'index.php';


        }
        else {echo '<meta charset="UTF-8">Логин или пароль не верный или пользователь не существует';
    }


?>