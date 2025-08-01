<?php

  $vtoken =$_GET['token'];


  $con = new mysqli("localhost", "root" ,"","medicare");
  $status ="active"; 

  $stmt = $con->prepare("UPDATE user SET status= ? WHERE token= ? ");
  $stmt->bind_param("ss", $status, $vtoken);
  $result = $stmt->execute() or die($this->con->error);
  if ($result){
   header('location:http://localhost/login.php');
  }else {
  	echo "account is not activated"; 
  }


?>