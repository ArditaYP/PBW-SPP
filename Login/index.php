<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form action="proses.php" method="post">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <input type="submit" name="masuk" value="Login">
      <div class="signup_link">
      </div>
      <div class="pass">Forgot Password?</div>
    </form>
  </div>

</body>

</html>