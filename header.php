<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>PHP LOGIN</title>
</head>
<body>
  <header>
    <nav>
      <a href="#">
        <img src="img/pro-icon-1.png" alt="paz">
      </a>
      <h1>PHP LOGIN</h1>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">PORTFOLIO</a></li>
        <li><a href="#">ABOUT ME</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      <div>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="" placeholder="Username/E-mail...">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </nav>
  </header>