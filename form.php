<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      height: 100vh;
      background-color: beige;
      background-image: url('image.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: flex-start;
      margin-left: 50px;
    }
    @media(max-width:480px) {
      body{ flex-direction: column; align-items: flex-start; margin-left: 1px; }
      .form-section{ width:190%; padding: 5px; }
      .form-section h2{ font-size: 15px; }
      button{ width: 100%; }
    }
    .form-section {
      background-color: silver;
      width: 50%;
      padding: 25px;
      border-radius: 10px;
      color: black;
      box-shadow: 0 0 10px rgba(120,100,50,0.3);
      margin:20px;
      height: auto;
    }
    .form-section h2
     { 
      text-align: center; 
      margin-bottom: 15px; }
    .form-group 
    { margin-bottom: 12px;
     }
    label {
       display: block; 
       margin-bottom: 5px; 
      }
    input, textarea, select {
       width: 100%; 
       padding: 8px; 
       border: 1px solid #ccc;
        border-radius: 5px; 
      }
    input[type="radio"], input[type="checkbox"] 
    {
       width: auto; 
      margin-right: 5px;
     }
    button {
      background-color: skyblue;
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      display: block;
      margin: 20px auto;
      width:100%;
    }
  </style>
</head>
<body>
<form action="<?php echo isset($row['id']) ? 'update.php?id='.$row['id'] : 'add.php'; ?>" method="POST" class="form-section">
  <h2>User Registration Form</h2>

  <div class="form-group">
    <label>Name</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name'] ?? ''; ?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email'] ?? ''; ?>">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" value="<?php echo $row['password'] ?? ''; ?>">
  </div>

  <div class="form-group">
    <label>Gender</label>
    <input type="radio" name="gender" value="male" <?php if(($row['gender'] ?? '')=="male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="female" <?php if(($row['gender'] ?? '')=="female") echo "checked"; ?>> Female
  </div>

  <div class="form-group">
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Pakistan" <?php if(($row['country'] ?? '')=="Pakistan") echo "selected"; ?>>Pakistan</option>
      <option value="India" <?php if(($row['country'] ?? '')=="India") echo "selected"; ?>>India</option>
      <option value="USA" <?php if(($row['country'] ?? '')=="USA") echo "selected"; ?>>USA</option>
      <option value="Other" <?php if(($row['country'] ?? '')=="Other") echo "selected"; ?>>Other</option>
    </select>
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" value="<?php echo $row['phone'] ?? ''; ?>">
  </div>

  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" value="<?php echo $row['dob'] ?? ''; ?>">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="<?php echo $row['address'] ?? ''; ?>">
  </div>

  
  <button type="submit" name="submit">
<?php echo isset($row['id']) ? 'Update' : 'Submit'; ?>
</button>

</form>

</body>
</html>
