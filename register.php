<?php

session_start();
require 'connect.php';

	if(!empty($_POST['user]']) && !empty($_POST['pass'])):

	$sql = "INSERT INTO user (username, password) VALUES (:username, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':username', $_POST['user']);
	$stmt->bindParam(':password', $_POST['pass']);
	
	if($stmt->execute() ):
		die('Success');
	else:
		die('Fail');
		endif;
	
endif;


?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
	<title>Signup - Tower Systems</title>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Oswald|Roboto|Work+Sans:900" rel="stylesheet">
				<link rel="stylesheet" href="./css/main.css">

				<body>
							<section class="login-section">
								<script>
									$(function () {
									$(".h1-content").hide().fadeIn(2000);
									$(".greeting-content").hide().fadeIn(4000);
									$(".get-started-btn").hide().fadeIn(7000);
									});
								</script>
									<div class="inner">
											<br>
											 <form method="POST">
												<div class="box">
												<h1>Signup</h1>

												Username <input type="text" placeholder="Enter Username" name="user" class="button-field" />
												Password <input type="password" placeholder="Enter Password" name="pass" class="button-field" />	
												Confirm Password<input type="password" placeholder="Enter Password" name="confirm-pass" class="button-field" />
																								
												<a href="#"><div id="sign-up" align="center">Sign Up</div></a> <!-- Sign Up -->
												  
												</div> <!-- End Box -->
												  
												</form>
												  
																		
							</section>
				</body>	
	</head>
</html>