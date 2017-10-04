<?php
	
	if(isset($_POST['send'])){
	
	$MAIL = new PHPMailer(true);
	
	try {
		//Server settings
		$MAIL->SMTPDebug = 2;                                 // Enable verbose debug output
		$MAIL->isSMTP();                                      // Set mailer to use SMTP
		$MAIL->Host = 'localhost';  						  // Specify main and backup SMTP servers
		$MAIL->SMTPAuth = true;                               // Enable SMTP authentication
		$MAIL->Username = 'noreply@domain.ltd';               // SMTP username
		$MAIL->Password = 'secret';                           // SMTP password
		$MAIL->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$MAIL->Port = 587;                                    // TCP port to connect to

		//Recipients
		$MAIL->setFrom('noreply@domain.ltd', 'Company - No reply');
		$MAIL->addAddress('danny@dannyvandooijeweert.nl', 'Danny v. Dooijeweert');

		//Content
		$MAIL->isHTML(true);                                  // Set email format to HTML
		$MAIL->Subject = 'Here is the subject';
		$MAIL->Body    = 'This is the HTML message body <b>in bold!</b>';
		$MAIL->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$MAIL->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $MAIL->ErrorInfo;
	}
	
	}
	
?>
<form method="post">
	<button class="btn btn-primary" type="submit" name="send">Send</button>
</form>