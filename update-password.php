<?php

session_start();
if(isset($_POST["submit"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$Npassword = password_hash($password, PASSWORD_BCRYPT, ["cost"=>8]);
	
	$con = new mysqli("localhost", "root", "", "medicare");
	$stmt = $con->prepare("UPDATE user SET password = ? WHERE email = ?");
	$stmt->bind_param("ss",$Npassword, $email);
	$result = $stmt->execute() or die($con->error);
	if($result) {
		$_SESSION["update-msg"] = "Password updated";
		header('location: https://medicare.test/index.php');
        
	} else {
		echo "something wrong";
	}
}

?>

<?php
	/*
	if(isset($_POST["submit"]))
	{
		// echo "<pre>";
		// print_r($_POST);
		// echo "<pre>";

		$password = $_POST["password"];
		$token = $_POST["token"];


		$obj = new update();
		$obj->updatepassword($password, $token);
	}


	class update
	{
		private $con;

		function __construct()
		{
			$this->con = new mysqli("localhost","root","","medicare");
		}

		function updatepassword($password, $token)
		{
			$encpass = password_hash($password, PASSWORD_BCRYPT,["cost"=>8]);
			$stmt = $this->con->prepare("update user SET password = ? WHERE token = ?");
			$stmt->bind_param("ss" , $encpass ,$token);
			$result = $stmt->execute();
			if($result)
			{
				// echo "password updated";
				header('location:login.php');
			}
			else
			{
				echo "something wrong";
			}
		}


	}


?>