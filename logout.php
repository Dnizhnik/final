<?php
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    echo "Вы вышли из учетной записи";
include('loginUser.php');
  }

?>