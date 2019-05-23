<?php
    global $dumketo;
    require_once('../../../../wp-load.php');
	require_once('PHPMailer/PHPMailerAutoload.php');

	
	$data    = array();
    $name  = $_POST['name'];
    $email = $_POST['email'];

	$admin_name  = $dumketo['admin_name'] ;
	$admin_email = $dumketo['admin_email'];

    $mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = none;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Host = 'mail.belocal.directory';
	$mail->Port = 25;
	$mail->Username = 'murad@belocal.directory';
	$mail->Password = 'FuC29SsC';  
	$mail->SetFrom( $email, $name );
	$mail->Body =
		'Business Name                  : '. $name . PHP_EOL .
        'Business Owner Name            : '. $_POST['details']. PHP_EOL .
        'Business Email                 : '. $email . PHP_EOL .
		'Business Phone Number          : '. $_POST['phone'];		

	$mail->Subject = 'Email Notification';
	$mail->AddAddress( $admin_email, $admin_name );
	if(!$mail->Send()) {
      echo "There was a problem sending the email: " . $mail->ErrorInfo;
      exit;
    }else {
        $data['message'] = 'Thanks!';		
        $data['file'] = 'ok';		
	}
    echo json_encode($data);
?>