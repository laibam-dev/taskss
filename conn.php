<?php 
$conn = mysqli_connect('localhost', 'root', '', 'tasks'); // tasks = database name

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
