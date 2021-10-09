<?php

$serverName = "localhost";
$dBUsername = "root";
$dBpassword = "";
$dBName = "axonra";

$conn = mysqli_connect($serverName, $dBUsername, $dBpassword, $dBName);

if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
