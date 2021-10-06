<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="" method ="POST" class="login-email">
        <div class="field">
          <input type="text" placeholder= "Email" name = "email" value="<?php echo $email; ?>"  required>
          <label>Email</label>
        </div>
        <div class="field">
          <input type="password" placeholder ="Password" name ="password" value="<?php echo $_POST['password']; ?>" required>
          <label>Password</label>
        </div>
        
        <div class="field">
          <input type="submit" name = "submit"value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="register.php">Register </a></div>
      </form>
    </div>
  </body>
</html>
