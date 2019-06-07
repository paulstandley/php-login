<?php 
  require "header.php";
?>

  <main class="signup-main">
    <h2>SIGN UP</h2>
    <?php 
      if(isset($_GET['error'])) {
        if($_GET['error']  == 'emptyfields') {
          echo '<p class="signuperror">Fill in all fields!</p>';
        }else
        if($_GET['error']  == 'invaliduidmail') {
          echo '<p class="signuperror">Invalid user name and email!</p>';
        }else
        if($_GET['error']  == 'invaliduid') {
          echo '<p class="signuperror">Invalid user name!</p>';
        }else
        if($_GET['error']  == 'invalidmail') {
          echo '<p class="signuperror">Inavlid email!</p>';
        }else
        if($_GET['error']  == 'passswordcheck') {
          echo '<p class="signuperror">Passwords do not match!</p>';
        }else
        if($_GET['error']  == 'usertaken') {
          echo '<p class="signuperror">User name taken!</p>';
        }
      }else if($_GET['signup'] == 'success') {
        echo '<p class="signupsuccess">You have signed up</p>';
      }
    ?>
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