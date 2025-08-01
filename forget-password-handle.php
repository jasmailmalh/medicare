<?php
	
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader


require 'vendor/autoload.php';

	if(isset($_POST["submit"]))
	{
		$user_email = $_POST["email"];


		$obj = new verify();
		$obj->emailexist($user_email);
	}


	class verify
	{
		private $con;

		function __construct()
		{
			$this->con = new mysqli("localhost","root","","medicare");
		}

		function emailexist($email)
		{
			$stmt = $this->con->prepare("SELECT * FROM user WHERE email = ?");
			$stmt->bind_Param("s", $email);
			$stmt->execute() or die($this->con->error);
			$result = $stmt->get_result();
			if($result->num_rows > 0)
			{
				// echo "email exist";
				$data = $result->fetch_assoc();
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				$db_token = $data["token"];

				$this->email($email, $db_token);
			}
			else
			{
				echo "email not exist";
			}
		}

		function email($email, $token)
		{
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			    $mail->isSMTP();                                            //Send using SMTP
			    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			    $mail->Username   = 'technicalthinking13@gmail.com';                //SMTP username
			    $mail->Password   = 'intdep@1322';                               //SMTP password
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			    //Recipients
			    $mail->setFrom('jasmailmalh13@gmail.com', 'Mr jasmail');
			    $mail->addAddress($email);     //Add a recipient
			    //$mail->addAddress('ellen@example.com');               //Name is optional
			    //$mail->addReplyTo('info@example.com', 'Information');
			    //$mail->addCC('cc@example.com');
			    // $mail->addBCC('bcc@example.com');

			    //Attachments
			    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			    //Content
			    $mail->isHTML(true);                                  //Set email format to HTML
			    $mail->Subject = 'This is your verify email';
			    $mail->Body    = "<a href='http://medicare.test/recover_password.php?token=$token'>Click here to verify your account</a>";
			    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
	}

	


?>




<html>
	<head> 
		<title> Recover password </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body class="bg-light">
		<div class="container mt-2">
			<i> Check your email to recover password </i>
		</div>
	</body>
</html>