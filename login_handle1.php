<?php 
session_start();

if(isset($_POST['submit'])){
		$email =$_POST['email'];
 		$password = $_POST['password'];

		$obj = new login();
		$obj->login($email ,$password);
}




class login 
{
	private $con;
	function __construct()
	{
		$this->con = new mysqli("localhost","root","","medicare");
	}
  
	public function login($email ,$password)
	{
		$stmt = $this->con->prepare("SELECT * FROM user WHERE email = ?");
		$stmt->bind_param("s" ,$email);
		$stmt->execute() or die($this->con->error);
		$result = $stmt->get_result();
		if ($result->num_rows>0){
			$data =$result->fetch_assoc();
			
			if(password_verify($password, $data['password'])){
				if($data['status'] == "inactive"){
					echo " first verify your email verfication ";
				}else{
					if(isset($_POST['Rememberme'])){
 	 					setcookie("Cmail" ,$email ,time()+(86400*30));
 	 					setcookie("Cpass" ,$pass ,time()+(86400*30));
 						}else{
 							setcookie("Cmail" ,$email ,time()-(86400*30));
 	 					    setcookie("Cpass" ,$pass ,time()-(86400*30));
 							}
 							$_SESSION['email']= $email;

 							header('location:http://medicare.test/index.php');
				}
				
			}else{
				echo"password not macthed";
			}
		}else {
			
			header('location:http://medicare.test/login.php');
		}
	}
}
?>