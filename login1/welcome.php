<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif;
		background: radial-gradient(#ad7e76,#ad7a71);
		text-align: center;
		}
    </style>
</head>
<body>
    <h1 class="my-5">HI, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Rental System.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
		<a href="product1.html" class="btn btn-danger ml-3">Go forward</a>
    </p>
</body>
</html>