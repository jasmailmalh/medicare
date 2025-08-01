<?php


if(isset($_POST['submit']))
{

	$name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $textarea =  $_POST["text"];
    $img =$_FILES['img']["name"];
    $tmppath= $_FILES['img']["tmp_name"];
    $imgpath = "./image/" . $img;



	$obj = new Operation();
	$obj->insertdata($name, $email, $number, $textarea ,$imgpath, $tmppath);
}

class Operation

{
	private $con;
 
	function __construct()
	{
		$this->con = new mysqli("localhost" ,"root","","medicare");
	}

	function insertdata($name , $email, $number , $textarea ,$imgpath, $tmppath)
	{
		$stmt = $this->con->prepare("INSERT INTO contact(name, email , number ,text,img)VALUES(?,?,?,?,?)");
		$stmt->bind_param("ssiss" ,$name ,$email, $number ,$textarea,$imgpath);
		$result = $stmt->execute() or die($this->con->error);
		if ($result){
			move_uploaded_file($tmppath, $imgpath);
			header('location:http://medicare.test/contect-submit-alert.php');

		}else{
			echo"data is not inserted";
		}

	}
}




?>