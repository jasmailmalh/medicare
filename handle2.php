<?php 

	$Vtoken  = $_GET["token"];

	$con = new mysqli("localhost", "root", "", "student");

	$status = "active";

	$stmt = $con->prepare("UPDATE user SET status = ? WHERE token = ?");
	$stmt->bind_param("ss", $status, $Vtoken);
	$result = $stmt->execute() or die($con->error);
	if($result) {
		echo "account activated";
	} else {
		echo "not activated";
	}
?>