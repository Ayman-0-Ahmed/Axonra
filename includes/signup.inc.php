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

  if (empty($firstname)) {
    header("location: ../signup.php?error=emptyfirstname");
    exit();
  }
  if (empty($lastname)) {
    header("location: ../signup.php?error=emptylastname");
    exit();
  }
  if (empty($email)) {
    header("location: ../signup.php?error=emptyemail");
    exit();
  }
  if (empty($username)) {
    header("location: ../signup.php?error=emptyusername");
    exit();
  }
  if (empty($password)) {
    header("location: ../signup.php?error=emptyfirstname");
    exit();
  }
  if (empty($repeat)) {
    header("location: ../signup.php?error=emptylastname");
    exit();
  }
  if (empty($birthday)) {
    header("location: ../signup.php?error=emptyemail");
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
