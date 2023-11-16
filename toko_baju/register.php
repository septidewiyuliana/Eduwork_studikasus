<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- Custom styles for this template -->
  <link href="css/register.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <form action="proses_register.php" method="post" class="register-form">
      <h2>Register</h2>
      <div class="register form-group">
        <label for="nama">Name:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="register form-group">
        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone" required>
      </div>
      <div class="register form-group">
        <label for="addres">Address:</label>
        <textarea id="addres" name="addres" required></textarea>
      </div>
      <div class="register form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="register form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="register form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="register confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>
      <div class="register form-group">
        <input type="submit" value="Register">
      </div>
      <div class="register form-group">
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
      </div>
    </form>
  </div>
</body>
</html>
