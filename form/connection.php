<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn === false) {
die("ERROR: Could not connect. "
. mysqli_connect_error());
}
