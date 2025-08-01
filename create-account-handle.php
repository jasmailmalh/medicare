<?php 
session_start();
//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	require './vendor/autoload.php';


if( isset($_POST["submit"]) ) {

	$name = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$obj = new Operation();
	$obj->createNewUser($name, $email, $password);
		
}


class Operation
{
	private $con;
	private $token;
	private $date;
	private $status;
	// date_default_timezone_set("");
	
	function __construct() 
	{
		$this->con = new mysqli("localhost", "root", "", "medicare");
		 date_default_timezone_set('Asia/Kolkata');
		 $this->token = bin2hex(random_bytes(15));
		 $this->date = date("Y-m-d");
		 $this->status = "inactive";

	}

	function createNewUser($fname, $femail, $fpassword)
	{
		$enyPass = password_hash($fpassword, PASSWORD_BCRYPT, ["cost" =>8]);

		$stmt = $this->con->prepare("INSERT INTO user(username, email, password, token, registerdate, status)VALUES(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $fname, $femail, $enyPass, $this->token, $this->date, $this->status);
		$result = $stmt->execute() or die($this->con->error);
		if($result) {
			$this->mail($femail);
			$this->setSession($fname, $femail);

		} else {
			echo "data not inserted";
		}
	}

	function setSession($fname, $femail)
	{
		$_SESSION["username"] = $fname;
		$_SESSION["email"] = $femail;
	}

	function mail($femail)
		{
			//Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			    $mail->isSMTP();                                            //Send using SMTP
			    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			    $mail->Username   = 'technicalthinking13@gmail.com';                //SMTP username
			    $mail->Password   = '9781560409';                               //SMTP password
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			    //Recipients
			    $mail->setFrom('technicalthinking13@gmail.com', 'jasmail');
			    $mail->addAddress($femail);     //Add a recipient
			    //$mail->addAddress('ellen@example.com');               //Name is optional
			    //$mail->addReplyTo('info@example.com', 'Information');
			    //$mail->addCC('cc@example.com');
			    // $mail->addBCC('bcc@example.com');

			    //Attachments
			    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			    $mail->addAttachment('./vendor/Medicare-removebg-preview.png', 'new.png');    //Optional name

			    //Content
			    $mail->isHTML(true);                                  //Set email format to HTML
			    $mail->Subject = 'This is the verifiacation mail';
			    $mail->Body    = "<a href='http://localhost/medicare//create-account-activate.php?token=$this->token'> click here to verify you mail </a>";
			    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}

		}

    
}


?>
