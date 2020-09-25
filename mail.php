<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	//Load composer's autoloader
	require 'vendor/autoload.php';


//print_r($_POST);

//print_r($_SERVER);

if ( isset( $_SERVER['HTTP_REFERER'] ) && strpos( $_SERVER['HTTP_REFERER'], '850route28.com' ) !== false ) {


	$mail = new PHPMailer(true);
	try {

		$captcha = '';
		if ( isset($_POST['g-recaptcha-response']) ){
          $captcha=$_POST['g-recaptcha-response'];
        }

        if ( $captcha != '' ) {



			//The data you want to send via POST
			$fields = [
			    'secret'      => 'SECRET',
			    'response' => $captcha,
			    'remoteip'         => $_SERVER['REMOTE_ADDR']
			];

			$url = 'https://www.google.com/recaptcha/api/siteverify';

			//url-ify the data for the POST
			$fields_string = http_build_query($fields);

			//open connection
			$ch = curl_init();

			//set the url, number of POST vars, POST data
			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, true);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

			//So that curl_exec returns the contents of the cURL; rather than echoing it
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

			//execute post
			$result = curl_exec($ch);
			$responseKeys = json_decode($result,true);

//			print_r( $responseKeys );
//			die('');

			if ( $responseKeys['success'] ) {

			    //Server settings
			//    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
			    $mail->isSMTP();                                      // Set mailer to use SMTP
			    $mail->Host = 'HOST';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                               // Enable SMTP authentication
			    $mail->Username = 'user@';                 // SMTP username
			    $mail->Password = 'pasword';                           // SMTP password
			    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 465;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('contact@dom', 'Name');
			//    $mail->addAddress('ellen@example.com');               // Name is optional
			//    $mail->addReplyTo('info@example.com', 'Information');
			//    $mail->addCC('cc@example.com');
			//    $mail->addBCC('bcc@example.com');

			    //Attachments
			//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			    //Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'The subject';
			    $mail->Body    = 'First Name: ' . $_POST['first_name'] .'<br>
			    					Last Name : ' . $_POST['last_name'] . '<br>
			    					Email : ' . $_POST['email'] . '<br>
			    					Comments: ' . $_POST['comments'];
		//	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
		//	    echo 'Message has been sent';
			}
		}
	} catch (Exception $e) {
//	    echo 'Message could not be sent.';
//	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}

header("Location: /thanks");
