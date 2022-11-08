<?php 
/*

if(isset($_GET["token"])) {
	$email = $_GET["token"];

	$con = new mysqli("localhost", "root", "", "student");
	$stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
	$stmt->bind_param("s", $email);
	$result = $stmt->execute();
	if($result) {
		?>
*/
		?>

<?php
	
	if(isset($_SESSION["id"]))
	{
		header('location:login.php');
	}

	$rec_token = $_GET["token"];
	
	$con = new mysqli("localhost","root","","medicare");
	$stmt = $con->prepare("SELECT * FROM user WHERE token = ?");
	$stmt->bind_param("s",$rec_token);
	$stmt->execute() or die($con->error);
	$result = $stmt->get_result();
	if($result->num_rows > 0)
	{
?>





	<html>
		<head> 
			<title> Forget password </title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
		</head>
		<body class="bg-light"> 

			<div class="container mt-5"> 
				<div class="col-5 mx-auto">
					<div class="card"> 
						<div class="card-header">
							<p class="mb-0"> New passowrd Password </p>
						</div>
						<div class="card-body"> 
							<form method="post" action="update-password.php"> 
									<input type="hidden" name="email"  value="<?php echo  $rec_token; ?>">
								<div class="mb-3">
									<label> Enter New password </label>
									<input type="password" name="password" placeholder="Enter your new password" class="form-control">
								</div>
								<div class="mb-1 text-end">
									<input type="submit" name="submit"  class="btn btn-primary btn-sm">
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>

		</body>
	</html>
	<?php }
?>