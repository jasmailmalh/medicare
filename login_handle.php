<?php
session_start();

if(isset($_POST['submit']))
{
	      $email = $_POST["email"];
		$password = $_POST["password"];
	

		$obj = new  Operation();
		$obj->login($email, $password);

}

class Operation 
{
	private $con;

	 function __construct()
	{
	 	$this->con = new  mysqli("localhost","root","","medicare");
	}

	 public function login($email ,$password)
	 	{
	 	$stmt = $this->con->prepare("SELECT * FROM user WHERE email = ?");
	 	 $stmt->bind_param("s", $email);
	 	 $stmt->execute() or die($this->con->error);
	 	 $result = $stmt->get_result();

	 	 if ($result->num_rows>0){
	 	 	$data =$result->fetch_assoc();

	 	 	if(password_verify($password, $data["password"])) {
					if($data["status"]  == "inactive") {
						echo "first verify your email for login";	
					} else {

							// checking the user click on remember me or not
							if(isset($_POST["Rememberme"])) 
								{
									// setcookie(name,value, expiry);

									setcookie("Cemail", $email, time() + (86400*30));
									setcookie("Cpass", $password, time() + (86400*30));
								} else {
											setcookie("Cemail", $email, time() - (86400*30));
											setcookie("Cpass", $password, time() - (86400*30));	
										}

								$_SESSION['name'] = $data['name'];	
								$_SESSION['email'] = $email ;
								$_SESSION['id'] = $data;
								header('location: https://medicare.test/index.php');
						
							}
				} else {
							echo "wrong password";
						}
			} else {
					echo "email is not matching";
					}
		}

}


?>