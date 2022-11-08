<?php  

if(isset($_GET['id'])){

 $id = $_GET['id'];

 $con = new mysqli("localhost","root","","medicare");
 $stmt = $con->prepare("DELETE FROM contact  WHERE id =?");
 $stmt->bind_param("i" , $id);
 $result = $stmt->execute();
 if ($result){
 	header("location :./fetch.php");
 } else {
 	echo "data not deleted";
 }
 }

?>