<?php
  if(isset($_POST['signup-submit'])) {
    require "dbh.inc.php";
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
// 51:52 https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2425s
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
      header("Location: ../signup.php?error=emptyfieds&uid=".$username."&mail=".$email);
      exit();
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z0-9]*$/", $username))) {
      header("Location: ../signup.php?error=invalidmail&uid");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../signup.php?error=emptyfieds&uid=".$username);
      exit();
    }else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("Location: ../signup.php?error=emptyfieds&mail=".$email);
      exit();
    }
  }
?>