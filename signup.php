<?php 
  require "header.php";
?>

  <main class="signup-main">
    <h2>SIGN UP</h2>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username">
      <input type="email" name="mail" placeholder="E-mail">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder="Repeat Password">
      <button type="submit" name="signup-submit">SIGN UP</button>
    </form>
  </main>

<?php 
  require "footer.php";
?>  