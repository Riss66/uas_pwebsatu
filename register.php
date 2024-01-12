<?php
session_start();
include 'conek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
body {
	color: #fff;
	background: #344a71;
	font-family: 'Roboto', sans-serif;
}
.form-control {		
	min-height: 41px;
	box-shadow: none;
	border-color: #e1e4e5;
}
.form-control:focus {
	border-color: #49c1a2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 0 auto;
	padding: 30px 0;
}
.signup-form form {
	color: #9ba5a8;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 14px;
}
.signup-form .btn, .signup-form .btn:active {
	font-size: 16px;
	font-weight: bold;
	background: #49c1a2 !important;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #3cb094 !important;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #49c1a2;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>
<?php
if(isset($_POST['username'])) {
    $username = $_POST['username'];
	$email = $_POST['email'];
    $password = $_POST['password'];
	// $confirm_password = $_POST['confirm_password'];

    $query = mysqli_query($conn, "INSERT INTO login (username, password, email) values ('$username', '$password', '$email')");
    if($query) {
        echo '<script> alert("Register Succes.Silahkan Login");
        location.href="login.php"</script>';
} else {
    echo '<script>alert("Register Fail");</script>';
}
}

?>




<div class="signup-form">
    <form method="post" class="form-horizontal">
		<h2>Sign Up</h2>
		<p>It's free and only takes a minute.</p>
		<hr>
        <div class="form-group">
			<label>Username</label>
        	<input type="text" class="form-control" name="username" required="required">
        </div>
        <div class="form-group">
			<label>Email Address</label>
        	<input type="email" class="form-control" name="email" required="required">
        </div>
		<div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" name="password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
		<p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a></p>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>
</body>
</html>