<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<html>

	<head>
		<title>Online Rental System</title>
		<link rel="stylesheet" href="account.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,600;1,100;1,400&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="img/logo2.png" width="50px">
				</div>
				<nav>
					<ul>
						<li><a href="find_best.html">Home</a></li>
						<li><a href="product.html">Products</a></li>
						
						<li><a href="account.html">Account</a></li>
					</ul>
				</nav>
				
				<a href="index.html"><img src="img/play-store1.png" width="30px" height="30px"></a>
			</div>
			
		</div>
		<div class="container form-signin">
		<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
		 </div>
		<!----------Login------------>
		<div class="account-page">
			<div class="container">
				<div class="row">
					<div class="col-2">	
						<img src="img/IMG-20211123-WA0007.jpg" >
						<div class="color-box">
						
						</div>
					</div>
					<div class="col-2">
						<div class="form-container"role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
							<div class="form-btn">
								<span onclick="login()">Login</span>
								<span onclick="register()">Register</span>
								
								<hr id="indicator">
							</div>
							<div class = "container">
      
       
							<form id="LoginForm" onsubmit="return validateForm()">
								<?php echo $msg; ?>
								<input type="text" name="uname" placeholder="Username">
								<input type="password" name="pass" placeholder="password">
								<a href="forgotpass.html">Forgot Password</a>
								<button type="submit" class="btn">Login</button>
								
							</form>
							
							<form id="RegForm">
								<input type="text" placeholder="Username">
								<input type="email" placeholder="Email">
								<input type="password" placeholder="password">
								<button type="submit" class="btn">Register</button>
								
							</form>
						</div>
						<div class="logout">Click here to  <a href = "logout1.php" tite = "Logout">Logout</div>
					</div>
				</div>
			</div>
		</div>
		<!-----------footer------------>
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-col-1">
						<h3>Contact us</h3>
						<h3>+918766971902</h3>
						<h3>E-MAIL US</h3>
						<p>rental.system123@gmail.com</p>
						<!--<img src="img/play-store.png">
							<h3>Download App</h3>
							<p>Download app<br/> for Android</p>-->
						</div>
						<div class="footer-col-2">
							<h3>Usefull Links</h3>
							<ul>
								<li>Blogs</li>
								<li>Media</li>
								<li>References</li>
								<li>Git</li>
							</ul>
						</div>
							
						
						<div class="footer-col-3">
							
							<p>our purpose is to sustainably make <br/>pleasure and benifits to rental system</p>
						</div>
						<div class="footer-col-4">
							<h3>Follow Us</h3>
							<ul>
								<li>Facebook</li>
								<li>Twitter</li>
								<li>Instagram</li>
								<li>Youtube</li>
							</ul>
						</div>
					</div>
					<hr>
						<p class="copyright">Copyright 2021 - Find Your Best</p>
					</hr>
				</div>
			</div>
		
		<!---- Js for toggle form----->
		<script> 
			var LoginForm = document.getElementById("LoginForm")
			var RegForm = document.getElementById("RegForm")
			var indicator = document.getElementById("indicator")
				function register(){
					RegForm.style.transform = "translateX(0px)";
					LoginForm.style.transform = "translateX(0px)";
					indicator.style.transform = "translateX(100px)";
				}
				function login(){
					RegForm.style.transform = "translateX(300px)";
					LoginForm.style.transform = "translateX(300px)";
					indicator.style.transform = "translateX(0px)";
					
				}
				function validateForm(){	
					let x = document.forms["LoginForm"]["uname"].value;
					if(x == ""){
						alert("Name must be filled out");
						return false;
					}
					else{
						//alert("Invalid Mail address!!!!");
						return true;
					}
				}
		</script>
	</body>
	
</html>