
<!DOCTYPE html>
<html>
<head>
	<title> sign up form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container col-lg-6 col-md-12 col-sm-12">
	<div class="row ">
		<!-- <div class="col-sm-12 col-lg-6 "> -->
		   <form class="login1_form" method="post" action="create-account-handle.php">
				<div class="container  mx-auto">
					<div class="text-center">	
						<a href="index.php">
							<img src="./img/medicare.png" class="img-fluid" >
						</a>
					</div>

						<div>
							<h3 class="text-danger">Create an Medicare Account </h3>
						</div>


				<div class="mb-3">
					Please fill the detail to create an account with us.
				</div>
	   						
    						<label class="form-label"> User name</label>
    						<input type="text"  name="username" class="form-control  rounded-pill" value="" >
    						
    						<label class="form-label"> Email</label>
    						<input type="email" name="email" class="form-control rounded-pill" value="">

    						<label  class="form-label"> Password</label>
   			 		        <input type="password" name="password" class="form-control  rounded-pill" >
        				
        				
  				<div class="mt-4">
  					<input type="submit" class="col-sm-4  rounded-pill btn btn-primary" name="submit" value="create account">
  				</div>
  					
  					<div class="text-center my-3">
						<p>have an account? 
							<a href="login.php">
								<span class="text-danger  ">log in<span>
								</a>
						</p>
					</div>
				
			</form>
		</div>
	</div>		
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>