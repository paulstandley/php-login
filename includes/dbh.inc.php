<?php
  $servername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "lognsystemtut";
  $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);
  if(!conn) {
    die("Connection failed: ".mysqli_connect_error());
  }
?>