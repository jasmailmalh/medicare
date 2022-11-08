<?php 
session_start();

if((isset($_SESSION["id"]))) {
	header('location: https://logout.test/account.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
</head>
<body class="bg-light">

	<div class="container bg-light">
		<div class="col-lg-4 mx-auto">
			<form method="post" action="loginUser.php">
				<div class="card mt-5">
						<?php if(isset($_SESSION["msg"])) {
							
							$status = $_SESSION["msg"];
							$name = $_SESSION["name"];
							$email = $_SESSION["email"];
							if($status == "inactive") { 
						?>
						<p class="bg-secondary text-white text-center py-2"> Hello <?php echo $name; ?> check your <?php echo $email ?> For activate your account </p>
						<?php
						}
					}
					?>
						<?php if(isset($_SESSION["msg"])) { 
							$status = $_SESSION["msg"];
							$name = $_SESSION["name"];

							if($status == "active") { 
						?>
						<p class="bg-success text-white text-center py-2"> Congrats..!! <?php echo $name; ?> Your account is now activated  </p>
					<?php	}
					}
					?>
						<?php if(isset($_SESSION["update-msg"])) { 
							
						?>
						<p class="bg-success text-white text-center py-2"> Congrats..!! Your password  is now updated  </p>
					<?php	
					}
					?>
					<div class="card-header">
						<h1> Login Account </h1>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label for="" class="form-abel">Email</label>
							<input type="text" class="form-control" name="email" value="<?php 
								if( isset($_COOKIE["cemail"])) {
									echo $_COOKIE["cemail"];
								}

						?>">
							<?php if(isset($_GET["email-error"])) { 
							?>
							<p class="text-danger"> Email is not existing </p> 
							<?php } ?>
						</div>
						<div class="mb-3">
							<label for="" class="form-abel">Password</label>
							<input type="password" class="form-control" name="password"  value="<?php 
								if( isset($_COOKIE["cpassword"])) {
									echo $_COOKIE["cpassword"];
								}

						?>">
							<?php if(isset($_GET["pass-error"])) { 
					
							?>
							<p class="text-danger"> Password is not matched </p> 
							<?php } ?>
						</div>
						
						<div class="mb-3">
							<input type="checkbox" class="form-check-input" name="rememberme" checked>
							<label for="" class="form-check-label">Remember me</label>
						</div>
						<div class="mb-3 d-grid gap-2">
							<input type="submit" name="submit" class="btn btn-primary" value="Login">
						</div>
					</div>
					<div class="mb-3 text-center">
						<p> Have not account ? <a href="login.php" class="text-decoration-none"> Create account </a> </p>
					</div>

					<div class="mb-3 text-center">
						<small class="text-secondary"> Forget password don't worry  ? <a href="forget.php" class="text-decoration-none"> Click here </a> </small>
					</div>
				</div>
			</form>
		</div>
	</div>
  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>