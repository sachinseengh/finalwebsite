<?php
  session_start();
  session_destroy();
  setcookie('username', '',  Time() - 60 * 60*24);
  header('location:../index.php');
?>