
<?php 

include "../module/dbcon.php";

if(isset($_POST['submit']) ){

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$passcode =password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user_details (name,email,password) 
VALUES ('$name','$email','$passcode')";

print_r($_POST);

$result=$conn->query($sql);
echo $result;
if ($result) {
    echo "New record created successfully";
    header("Location:../view/login.php");
}
else{
    echo "Error: ". $sql. "<br>". $conn->error;
}
}
?>