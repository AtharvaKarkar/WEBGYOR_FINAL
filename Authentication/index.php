<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login/SignUp</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<!-- partial:index.partial.html -->
	<!--a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a-->

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<form action="user_login.php" method="post">
													<input type="email" name="useremail" class="form-style"
														placeholder="Your Email" id="useremail" autocomplete="off">
													<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="userpass" class="form-style"
													placeholder="Your Password" id="userpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>


											<button name="signin" class="btn mt-4">Sign-in</button> 
											</form>
											<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your
													password?</a></p>
										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<form action="user_signup.php" method="post">
											<div class="form-group">
												<input type="text" name="username" class="form-style"
													placeholder="Your Full Name" id="username" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="email" name="useremail" class="form-style"
													placeholder="Your Email" id="usermail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="userpass" class="form-style"
													placeholder="Your Password" id="userpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button name="signup" class="btn mt-4">submit</button>
										</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- partial -->
	<script src="./script.js"></script>

</body>

</html>