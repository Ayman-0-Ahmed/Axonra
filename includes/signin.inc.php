<?php

if (isset($_POST["submit"])) {
  $userInput = $_POST["username_email"];
  $passeord = $_POST["password"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyLoginInput($userInput, $password) !== false) {
    header("location: ../signin.php?error=usernametaken");
    exit();
  }

  if (invalidEmail($email) !== false) {
    header("location: ../signin.php?error=invalidemail");
    exit();
  }

  if (invalidUsername($username) !== false) {
    header("location: ../signin.php?error=invalidusername");
    exit();
  }

  loginUser($conn, $userInput, $password);
} else {
  header("location: ../signin.php");
  exit();
}
