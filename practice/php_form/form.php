<!DOCTYPE html>
<html>
<head>
  <title>PHP Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
      margin: 0;
    }
    form {
      background: #fff;
      padding: 25px 35px;
      border: 1px solid #000;
      border-radius: 8px;
      width: 100%;
      max-width: 420px;
      margin-bottom: 20px;
    }
    input, textarea, button {
      width: 400px;
      padding: 10px;
      margin-top: 8px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }
    textarea{
      height: 6rem;
    }
    button {
      width: 100%;
      background-color: black;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    label {
      font-weight: bold;
    }
    .success {
      color: green;
      text-align: center;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .error {
      color: red;
      text-align: center;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .output {
      background: #fff;
      padding: 20px;
      border: 1px solid #000;
      border-radius: 8px;
      width: 100%;
      max-width: 450px;
    }
  </style>
</head>
<body>

  <form method="POST">
    <h2 style="text-align:center;">PHP Form</h2>

    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Phone:</label>
    <input type="number" name="phone" required>

    <label>Age:</label>
    <input type="number" name="age" required>

    <label>Address:</label>
    <textarea name="address" required></textarea>

    <button type="submit">Submit</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = trim($_POST["name"]);
      $email = trim($_POST["email"]);
      $phone = trim($_POST["phone"]);
      $age = trim($_POST["age"]);
      $address = trim($_POST["address"]);

      echo "<div class='output'>";
      if (!$name || !$email || !$phone || !$age || !$address) {
          echo "<div class='error'>Please fill all fields!</div>";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<div class='error'>Invalid email format!</div>";
      } elseif (strlen($phone) != 11) {
          echo "<div class='error'>Phone number must be 11 digits!</div>";
      } else {
          echo "<div class='success'> submitted</div>";
          echo "<b>Name:</b> $name<br>";
          echo "<b>Email:</b> $email<br>";
          echo "<b>Phone:</b> $phone<br>";
          echo "<b>Age:</b> $age<br>";
          echo "<b>Address:</b> $address<br>";
      }
      echo "</div>";
  }
  ?>

</body>
</html>
