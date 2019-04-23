<?php

  session_start();
  require_once "dbconnection.php";
  session_destroy();
  unset($_SESSION['student']);
  header("location: Login.php");


?>