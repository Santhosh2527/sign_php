<?php

require("../confi.php");
require("../module/dbcon.php");

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit']){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE user_details SET 'name' = ?, 'email' = ?, 'password' = ? WHERE 'id' = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $name, $email, $password, $id);

    if ($stmt->execute()){
        header("Location:../view/admin.php");
    }
    else{
        echo "Error: ". $sql. "<br>". $conn->error;
    }

    $stmt->close();
    $conn->close();


}



