<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "corephpcrud";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Error");
}
