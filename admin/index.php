<!DOCTYPE html>
<html>
<head>
	<title> log in form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class=" col-lg-4 col-sm-12  m-auto">
				<form class="login_form" action="" method="POST">
 	 				<div class="text-center">	
						<a href="index.php"><img src="./image/Medicare.png" class="img-fluid" ></a>
					</div>

 	 				<div class="mb-3">
    					<label class="form-label">Admin Email</label>
    					<input type="text" class="form-control  rounded-pill" name="email" placeholder="abc@gmail.com" value="">
    					
   					</div>

  					<div class="mb-3">
   			 			<label for="exampleInputPassword1" class="form-label">Password</label>
   			 			<input type="password" placeholder="*******" name="password" class="form-control  rounded-pill" value="">
  					</div>
  					

						<div class="text-center">
  							<a class="btn btn-primary"  href="admin/dashboard.php" type="submit" name="submit" class="col-12 rounded-pill btn btn-primary">log in </a>
  						</div>

  			  				
				</form>
			</div>
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
    </body>
</html>