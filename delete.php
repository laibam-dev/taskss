<?php
$conn = mysqli_connect("localhost", "root", "", "tasks");
if (!$conn) {
    die("Connection failed");
}

if (!isset($_GET['id']) || $_GET['id'] == '') {
    die("ID not found");
}

$id = intval($_GET['id']);

$query = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: php2.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
