<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
echo"pata";

// require "./view/login.php";
// require "./controller/sign.php";
require "../module/dbcon.php";
// print_r($_POST);
if(!empty($_POST)){
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM user_details WHERE email = '$email' AND password = '$password'";
echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location:../index.html");
} else {
    echo "0 results";
}
}


