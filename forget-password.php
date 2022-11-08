<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class=" col-lg-4 col-sm-12  m-auto">

			<form class="login_form" action="forget-password-handle.php" method="POST">
 	 			<div class="text-center">	
					<a href="index.php"><img src="./img/medicare.png" class="img-fluid" ></a>
				</div>

					<div class="mb-3">
   			 			<label class="form-label">Enter Your Email</label>
   			 			
  					</div>
  					<div class="mb-3">
  						<input type="email" placeholder=" enter your linked email" name="email" class="form-control  " value="">
  					</div>

  					<div class="mb-3 col-6">
   			 			<button type="submit" placeholder="submit" name="submit" class="btn btn-primary form-control  " value=""> submit
   			 			</button>  
   			 				
  					</div>
   			 			
  					
			</form>
		</div>
	</div>


</body>
</html>