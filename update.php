<?php
$conn = mysqli_connect("localhost", "root", "", "tasks");
if (!$conn) {
    die("Connection failed");
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    die("Invalid ID");
}


$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
$row = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $password= $_POST['password'];
    $gender  = $_POST['gender'];
    $country = $_POST['country'];
    $phone   = $_POST['phone'];
    $dob     = $_POST['dob'];
    $address = $_POST['address'];

    $update_query = "
        UPDATE users SET
        name='$name',
        email='$email',
        password='$password',
        gender='$gender',
        country='$country',
        phone='$phone',
        dob='$dob',
        address='$address'
        WHERE id=$id
    ";

    if (mysqli_query($conn, $update_query)) {
        header("Location: add.php");
        exit;
    } else {
        echo "Update error: " . mysqli_error($conn);
    }
}
?>
<?php include("form.php"); ?>
