<?php

if (isset($_POST["submit"])) {
  $firstname = $_POST["firstName"];
  $lastname = $_POST["lastName"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $passwordRepeat = $_POST["passwodRepeat"];
  $gender = "M";
  $birthday = $_POST["birthday"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInput($firstname, $lastname, $username, $email, $password, $passwordRepeat) !== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
    exit();
  }
  if (invalidUsername($username) !== false) {
    header("location: ../signup.php?error=invalidusername");
    exit();
  }
  if (passwordUnmatched($password, $passwordRepeat) !== false) {
    header("location: ../signup.php?error=passwordsunmatched");
    exit();
  }
  if (usernameTaken($conn, $username, $email) !== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
  }

  loginUser($conn, $userInput, $password);
} else {
  header("location: ../signup.php");
  exit();
}
