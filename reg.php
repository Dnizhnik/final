<?php
    if ($_POST['login']=='' || $_POST['password']=='') echo
        '<!DOCTYPE html>
            <html lang="ru">
            <head>
                <meta charset="UTF-8">
                <title>Регистрация</title>
            </head>
            <body>

                <form action="reg.php" method="POST">
                    <p>логин
                    <input type="text" name="login" id="login"></p>
                    <p>пароль
                    <input type="password" name="password" id="password"></p>
                    <p>адрес электронной почты
                                        <input type="email" name="email" id="email"></p>

                    <input type="submit" id="button" value="Зарегистрироваться">
                </form>
                <p><a href="loginUser.php">Авторизация</a> </p>

            </body>
            </html>';

        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];
         $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $email = trim($email);
         $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("bd.php");
    $result1 = $pdo->prepare("SELECT `login` FROM `registration` WHERE `login` = '$login'");
       $result1->execute();
       $myrow1 = $result1->fetch();
if ($myrow1) {
    exit ("Введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    $result2 = $pdo->prepare("SELECT `email` FROM `registration` WHERE `email` = '$email'");
       $result2->execute();
       $myrow2 = $result2->fetch();
     if ($myrow2) {
    exit ("Введённый вами адрес электронной почты уже зарегистрирован. Введите другой.");
    }
    if ($myrow1 and $myrow2) {
    exit ("Введённые вами логин и адрес электронной почты уже зарегистрированы. Введите другие данные.");
    }
    $result2 = "INSERT INTO `registration` (email, login, password) VALUES(:email, :login, :password)";
    $statement2 = $pdo->prepare($result2);
$statement2->execute([':email' => $email, ':login' => $login, ':password' => $password]);
 echo "Вы успешно зарегистрированы!";
 $_SESSION['user'] = $login;
  echo '<meta charset="UTF-8">Вы вошли как '.$_SESSION['user'].'!';
 require 'index.php';

     ?>