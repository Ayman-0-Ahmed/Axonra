<?php

function emptyInput($firstname, $lastname, $username, $email, $password, $passwordRepeat) {
  $result;
  if (empty($firstname)) {
    $result = true;
  } elseif (empty($lastname)) {
    $result = true;
  } elseif (empty($username)) {
    $result = true;
  } elseif (empty($email)) {
    $result = true;
  } elseif (empty($password)) {
    $result = true;
  } elseif (empty($passwordRepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUsername($username) {
  $result
  if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_.]{5,31}$/", $username)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function passwordUnmatched($password, $passwordRepeat) {
  $result;
  if ($password !== $passwordRepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function usernameTaken($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($symt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return row;
  } else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname, $lastname, $username, $email, $password, $gender, $birthday) {
  $sql = "INSERT INTO users (fullname, userName, userEmail, userPassword, userGender, userBirthday) VALUES (?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=usernametaken");
    exit();
  }

  $name = "$firstname $lastname";
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $username, $hashedPassword, $gender, $birthday);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
  exit();
}

function emptyLoginInput($userInput, $password) {
  $result;
  if (empty($userInput)) {
    $result = true;
  } elseif (empty($password)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $userInput, $password) {
  $usernameTaken = usernameTaken($conn, $userInput, $email);

  if ($usernameTaken === false) {
    header("location: ../signin.php?error=wronglogin");
    exit();
  }

  $passwordHashed = $usernameTaken["password"];
  $passwordCheck = password_verify($password, $passwordHashed);

  if ($passwordCheck === false) {
    header("location: ../signin.php?error=wronglogin");
    exit();
  } elseif ($passwordCheck === true) {
    session_start();
    $_session["userid"] = $usernameTaken["userId"];
    $_session["Username"] = $usernameTaken["username"];
    header("location: ../index.html");
    exit();
  }
}
