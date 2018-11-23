<!DOCTYPE HTML>

<?php

session_start();
require 'connect.php';

if(!empty($_POST['user']) && !empty($_POST['pass'])):

endif;

	if(isset($_POST['submit']))
	{
		$username = $_POST['user'];
		$password = $_POST['pass'];
	}
	
	
?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
	<title>Home - Tower Systems</title>
		
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Oswald|Roboto|Work+Sans:900" rel="stylesheet">
				<link rel="stylesheet" href="./css/main.css">

				<body>
							<section class="intro">					
								<script>
									$(function () {
									$(".h1-content").hide().fadeIn(1000);
									$(".greeting-content").hide().fadeIn(3000);
									$(".get-started-btn").hide().fadeIn(4000);
									});
								</script>
									
									<div class="inner">
										
						
										<div id="div1" class="h1-content">				
											<h1 align="center">Tower Systems</h1>
										</div>
						
											<br>
						
											<div id="div2" class="greeting-content">
												<p id="home-greeting" class="greeting" align="center">Welcome to Tower Systems, where all of your software solutions can be organised with ease, precision and completely stress-free.
														Please log in below to continue.</p>
															
															<br>
															
												<a href="#form1" class="get-started-btn" align="center" >Get Started</a>
													<script>
														
													</script>
											</div>
						
							</section>
		
							<section class="section2">
								<div class="inner">
									<div align="center" id="div1" class="h2-content">				

									</div>
											<br>
												<div class="box">
												<h1>Login</h1>
												
												<form class="login-form" id="form1" action="" method="POST">

												Username <input type="text" placeholder="Enter Username" name="user" class="button-field" />
												Password <input type="password" placeholder="Enter Password" name="pass" class="button-field" />
												<input type="submit" value="Sign In" class="sign-in" name="submit"/> <!-- Sign In Button-->
												
												<a href="register.php"><div id="sign-up">Sign Up</div></a> <!-- Sign Up Button-->
												  
												</div> <!-- End Box -->
												  
												</form>

												<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
								
								<script>
								
								</script>
								<p> &copy 2018 Kofi Danso</P>
							</section>
				</body>	
	</head>
</html>

