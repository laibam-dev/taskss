<style>
table {
  width: 100%;
  border-collapse: collapse;
}
th {
  background:silver;
  height:50px;
  color: black;
  border:1px silver;

}
td {
  padding: 10px;
  border:1px silver;
}


</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "tasks");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $country = $_POST['country'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $address = $_POST['address'] ?? '';

    if(empty($name) || empty($email) || empty($password)){
        die("Name, Email and Password are required fields.");
    }

    $sql = "INSERT INTO users (name,email,password,gender,country,phone,dob,address)
            VALUES ('$name','$email','$password','$gender','$country','$phone','$dob','$address')";
    mysqli_query($conn, $sql);
}

$result = mysqli_query($conn, "SELECT * FROM users");

echo "<table style='width:100%; border-collapse:collapse; margin-top:20px'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>Country</th>
<th>Phone</th>
<th>DOB</th>
<th>Address</th>
<th>Operations</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['country']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['dob']}</td>
        <td>{$row['address']}</td>
        <td>
        <a href='update.php?id={$row['id']}'>Update</a> 
            <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
           </td>
    </tr>";
}

echo "</table>";
mysqli_close($conn);
?>
