<?php  
if(isset($_POST['submit'])){
	$id =  $_POST['id'];
	$name= $_POST['name'];
	$email = $_POST['email'];
	$number  =$_POST['number'];
	$text =$_POST['text'];



	$con = new mysqli("localhost","root","","medicare");
	$stmt = $con->prepare("UPDATE contact SET  name =?, email=?, number=?,  text=? WHERE id=?");
	$stmt->bind_param("ssisi", $name, $email, $number, $text, $id);
    $result = $stmt->execute() or die($this->con->error);
    if($result){
    header("location:./fetch.php");

    }else{
    	echo "data is not update";	
    }
  }
?>