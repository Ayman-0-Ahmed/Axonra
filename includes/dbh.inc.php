<?php

$serverName = "";
$dBUsername = "";
$dBpassword = "";
$dBName = "";

$conn = mysqli_connect($serverName, $dBUsername, $dBpassword, $dBName);

if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
