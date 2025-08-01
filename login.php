<?php
	session_start();
 	if(isset($_SESSION['email']))
 	{
  		header('location:http://localhost/index.php');
 	} 




if (isset($_POST['submit'])) {
	  $vtoken =$_GET["token"];
  	$con = new mysqli("localhost", "root" ,"","medicare");
  	$status ="active"; 

  	$stmt = $con->prepare("UPDATE user SET status= ? WHERE token= ? ");
  	$stmt->bind_param("ss", $status, $vtoken);
  	$result = $stmt->execute() or die($this->con-error);
  	if ($result){
  		echo "account activated";
  	}else {
  		echo "account is not activated"; 
		}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title> log in form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body>
	<div class="container">
		<div class="row">
			<div class=" col-lg-4 col-sm-12  m-auto">
				<form class="login_form" action="login_handle1.php" method="POST">
 	 				<div class="text-center">	
						<a href="index.php"><img src="./img/medicare.png" class="img-fluid" ></a>
					</div>

 	 				<div class="mb-3">
    					<label class="form-label">Username or Email address</label>
    					<input type="text" id="email" class="form-control  rounded-pill" name="email" placeholder="Youremail@example.com" value="<?php if(isset($_COOKIE['Cemail'])){ echo  $_COOKIE['Cemail'];} ?>">
   					</div>

  					<div class="mb-3">
   			 			<label for="exampleInputPassword1" class="form-label">Password</label>
   			 			<input type="password" id="password" placeholder="*******" name="password" class="form-control  rounded-pill" value="<?php if(isset($_COOKIE['Cpass'])){ echo  $_COOKIE['Cpass'];} ?>">
  					</div>
  					<div class="mb-3">
							<input type="checkbox" class="form-check-input" name="Rememberme" checked>
							<label for="" class="form-check-label">Remember me</label>
						</div>

						<div class="text-center">
  							<button type="submit" id="submit" name="submit" class="col-12 rounded-pill btn btn-primary">log in</button>
  						</div>

  			  				<div>
  								<div class="col-12 text-center my-3"> 
  									<a href="forget-password.php" class="text-center">Forget password</a>
  								</div>	

  								<div class="col-12 text-center">
									<p>Dont have account? 
										<a href="createaccount.php"> 
											<span class="text-primary ">create account<span>
										</a>
									</p>
								</div>
							</div>
							<div>
								<a href="index.php"><p class="text-end text-danger"><b>Home</b></p></a>
							</div>
				</form>
			</div>
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="./js/jquery.js"></script>
  </body>
</html>




   <script type="text/javascript">
    	$(document).ready(function(){
    		$("#email").focus(function(){
    			$(this).css("background","light");
    		});

    		$("#email").blur(function(){
    			$(this).css("background","white");
    		});

    		$("#email").select(function(){
    			$(this).css("background","light");
    		});
    		$("#password").focus(function(){
    			$(this).css("background","light");
    		});

    		$("#password").blur(function(){
    			$(this).css("background","white");
    		});

    		$("#password").select(function(){
    			$(this).css("background","");
    		});

    		$("#submit").submit(function(){
    			alert("Welcome! thanks for login in medicare ");
    		});

    		
    	});
    </script>