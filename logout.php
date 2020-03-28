<?php
if (isset($_POST['logout'])) {
session_start();
unset($_SESSION['id']);
SetCookie("login", "");

SetCookie("password", "");
    session_destroy();
    echo "Вы вышли из учетной записи";
include('loginUser.php');
  }

?>