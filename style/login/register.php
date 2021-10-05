
<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="wrapper">
      <div class="title">Register</div>
      <form action="" method ="POST">
          <div class = "field">
          <input type="text" placeholder ="Username" name = "username" value ="<?php echo $username; ?>"required>
          <label>Username</label>
       </div>
        <div class="field">
          <input type="email"placeholder = "Email" name = "email" value ="<?php echo $email; ?>" required>
          <label>Email</label>
        </div>
        <div class="field">
          <input type="password" placeholder ="Password" name ="password" value ="<?php echo $_POST['password']; ?>"required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="password" placeholder ="Confirm password" name ="cpassword" value ="<?php echo $_POST['cpassword']; ?>"required>
          <label>Confirm password</label>
        </div>
        
        <div class="field">
          <input type="submit" name = "submit" value="Register">
        </div>
        <div class="signup-link">Already a member? <a href="login.php">Login </a></div>
      </form>
    </div>
</body>
</html>