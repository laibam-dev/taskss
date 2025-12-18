<?php
include 'conn.php';

$error = "";
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['signup'])) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $cpassword = $_POST['confirm_password'];

        if ($name == "") {
            $error = "Name is required";
        } elseif ($email == "") {
            $error = "Email is required";
        } elseif ($password == "") {
            $error = "Password is required";
        } elseif ($password !== $cpassword) {
            $error = "Passwords do not match";
        } elseif (strlen($password) < 6) {
            $error = "Password must be at least 6 characters";
        }

        if ($error == "") {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO account (name, email, password)
                    VALUES ('$name', '$email', '$hashedPassword')";
            if ($conn->query($sql)) {
                echo "<script>alert('Signup successful');</script>";
                $name = "";
                $email = "";
            } else {
                $error = "Database Error!";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        body{
            font-family: Arial;
            background:#f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        form{
            background:#fff;
            padding:20px;
            width:350px;
            border-radius:8px;
        }
        input{
            width:100%;
            padding:10px;
            margin:8px 0;
        }
        .error{
            color:red;
            font-size:14px;
        }
    </style>
</head>
<body>

<form method="POST">

<h3>Signup</h3>

<?php if($error != ""){ ?>
    <div class="error"><?php echo $error; ?></div>
<?php } ?>

<input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
<input type="password" name="password" placeholder="Password">
<input type="password" name="confirm_password" placeholder="Confirm Password">

<input type="submit" name="signup" value="Signup">

</form>
</body>
</html>
