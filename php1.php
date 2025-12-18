<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tasks";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$address = $_POST['address'];


if(empty($name) || empty($email) || empty($password)){
    die("Name, Email and Password are required fields.");
}


$sql = "INSERT INTO users (name,email,password,gender,country,phone,dob,address)
        VALUES ('$name','$email','$password','$gender','$country','$phone','$dob','$address')";

$sql = "UPDATE users SET password='newpassword123' WHERE id=2";
mysqli_query($conn, $sql);

$sql = "DELETE FROM users WHERE id=4";
mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    echo "Data saved successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
