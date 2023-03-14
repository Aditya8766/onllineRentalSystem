<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>account</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background: radial-gradient(#f3b3aa99,#ad7a71);
         }
         
         .form-signin {
           
			width: 300px;
			left: 39%;
			position: relative;
			text-align: center;
			padding: 39px 14px;
			box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
			overflow: hidden;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
			width: 83%;
	height: 30px;
	margin: 10px 0;
	padding: 0 10px;
	border: 1px solid #ccc;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
			width: 85%;
	height: 40px;
	margin: 10px 0;
	padding: 0 10px;
	border: 1px solid #ccc;
         }
         
         h2{
            text-align: center;
            color: #060303;
         }
		 .btn{
			 width: 40%;
			border: 2px solid black;
    border-radius: 20px;
	cursor: pointer;
	margin: 10px 0;
		 }
      </style>
      
   </head>
	
   <body>
      
      
      <div class = "container form-signin">
         <h2>CUSTOMERS LOGIN</h2> 
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'customer' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'customer';
                  echo'Correct username and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username " 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password " required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "find_best.html" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>