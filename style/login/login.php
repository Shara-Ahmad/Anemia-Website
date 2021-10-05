<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="config.php">
        <div class="field">
          <input type="text" placeholder= "Email" name = "email" required>
          <label>Email</label>
        </div>
        <div class="field">
          <input type="password" placeholder ="Password" name ="password" required>
          <label>Password</label>
        </div>
        
        <div class="field">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="register.php">Register </a></div>
      </form>
    </div>
  </body>
</html>
