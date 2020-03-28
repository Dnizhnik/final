<?php
    if ($_POST['login']=='' || $_POST['password']=='') {
        echo
        '<!DOCTYPE html>
            <html lang="ru">
            <head>
                <meta charset="UTF-8">
                <title>Регистрация</title>
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
<h1>Регистрация нового пользователя</h1>
                <form action="reg.php" method="POST">
                    <div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                    <input type="text" class="form-control" placeholder="Введите логин" name="login" id="login">
                    </div>
</div>

<hr class="hr-xs">

<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                    <input type="password" class="form-control" placeholder="Введите пароль" name="password" id="password">
</div>
</div>

<hr class="hr-xs">

<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                                        <input type="email" class="form-control" placeholder="Введите адрес электронной почты" name="email" id="email"></p>
 </div>
</div>
                    <input type="submit" class="btn btn-primary btn-block" id="button" value="Зарегистрироваться">
                </form>
                </div>
                 <div class="login-links">
<p class="text-center">Уже зарегестрирован? <a class="txt-brand" href="loginUser.php"><font color=#29aafe>Тогда заходи</font></a></p>
</div>
                </main>
            </body>
            </html>';
} else {
        $login = $_POST['login'];
         $email = $_POST['email'];
         $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $email = trim($email);
         $login = stripslashes($login);
    $login = htmlspecialchars($login);
     $login = trim($login);
     $password = md5(md5($_POST['password']));
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
        }
        if (isset($statement2)) {
        include ('loginUser.php');


if (!file_exists($myfoto)){
            mkdir($myfoto, 0777, false);
            chdir($myfoto);
            mkdir('miniatures');
}
}
     ?>