<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- Menghubungkan file CSS -->
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="login body"> </div>
  <div class="login container">
    <form action="proses_login.php" method="post" class="login-form">
      <h2>Login</h2>
      <div class="login form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="login form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="login form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
</body>

</html>