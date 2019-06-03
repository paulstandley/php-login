<?php
// make sure the submit button was used: require the database
  if(isset($_POST['signup-submit'])) {
    require "dbh.inc.php";
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
// check input fields and filter 
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
      header("Location: ../signup.php?error=emptyfieds&uid=".$username."&mail=".$email);
      exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z0-9]*$/", $username))) {
      header("Location: ../signup.php?error=invalidmail&uid");
      exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../signup.php?error=emptyfieds&uid=".$username);
      exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("Location: ../signup.php?error=emptyfieds&mail=".$email);
      exit();
    }
    else if($password !== $passwordRepeat) {
      header("Location: ../signup.php?error=passwordcheckuid".$username."&mail=".$email);
      exit();
    }else{
      $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror1");
        exit();// 1:03:03 there is a problem here ?
      }else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0) {
          header("Location: ../signup.php?error=usertaken&mail=".$email);
          exit();
        }else{
          $sql = "INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror2");
            exit();
          }else{
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../signup.php?signup=success");
            exit(); 
          }
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  // redirect to signup  
  }else{
    header("Location: ../signup.php");
    exit();
  }
?>