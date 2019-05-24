<?php
    global $mosbelocal_options;
    require_once('../../../../wp-load.php');
	require_once('PHPMailer/PHPMailerAutoload.php');	
	$data = array();
	$admin_name  = 'jobayer';
	$admin_email = 'jobayer@belocal.today';    

    global $wpdb;
    // $result = $wpdb->get_row( "SELECT * FROM `wp_new_belocal_mytable` WHERE bname='".$_POST['bname']."'" );
    // if( $result->bname == $_POST['bname'] ):
    //     $data['file'] = 'not ok';
    // else:        
        include ('briefing-document-pdf.php');
        $pdf_name1 = $_POST['bname'].'-'.$_POST['pphone'];
        $pdf_name = '../pdf/'.$pdf_name1.'.pdf';
        $acc_manager1 = $_POST['acc_manager'];
        $acc_manager = ucwords( str_replace('-', ' ', trim( $acc_manager1 ) ) );   
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0; 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = none;
        $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
        $mail->Host = 'mail.belocal.directory';
        $mail->Port = 3930;
        $mail->Username = 'websitemail@belocal.directory';
        $mail->Password = 'kN@kstNT2W';  
        $mail->SetFrom( $_POST['pemail'], $_POST['pname'] );
        $mail->Body = $mosbelocal_options['misc-form-body'];
        // $mail->Body = "Test Mail";
        $mail->Subject = $mosbelocal_options['misc-form-subject'] .' '. $_POST['bname'] ;
        // $mail->Subject = "Subject - " .' '. $_POST['bname'] ;
        if ( $mosbelocal_options['misc-form-recipient'] ):
            foreach ( $mosbelocal_options['misc-form-recipient'] as $belocal_marketing_recipient_id => $belocal_marketing_recipient_value ) {
                $belocal_marketing_recipient_value = explode(",", $belocal_marketing_recipient_value);
                if( $acc_manager ){
                    if ( in_array( trim( $belocal_marketing_recipient_value[0] ), array( $acc_manager ) ) ) {
                        $mail->AddAddress( trim($belocal_marketing_recipient_value[1]), $acc_manager );
                    }
                }else{
                    $mail->AddAddress( trim($belocal_marketing_recipient_value[1]), $belocal_marketing_recipient_value[0] );
                }
            }
        endif;
        $mail->AddAddress('jobayer@belocal.today', 'Hasan Ahmed Jobayer');
        $mail->addBCC('jobayer@belocal.today', 'Hasan Ahmed Jobayer');
        
        //$mail->AddAddress( 'jobayer@belocal.today', 'Hasan Ahmed Jobayer' );
        
        $mail->AddAttachment( $pdf_name );
        $mail->AddAttachment( $_FILES['logoupload']["tmp_name"], $_FILES['logoupload']["name"] );
        $mail->AddAttachment( $_FILES['headshotbusinessowner']["tmp_name"], $_FILES['headshotbusinessowner']["name"] );
        $mail->AddAttachment( $_FILES['headshotemployees']["tmp_name"], $_FILES['headshotemployees']["name"] );
        $mail->AddAttachment( $_FILES['workplaceimage']["tmp_name"], $_FILES['workplaceimage']["name"] );
        $mail->AddAttachment( $_FILES['workplacewithemployeeimage']["tmp_name"], $_FILES['workplacewithemployeeimage']["name"] );
        $mail->AddAttachment( $_FILES['clienttestimonial']["tmp_name"], $_FILES['clienttestimonial']["name"] );
        if(!$mail->Send()) {
          echo "There was a problem sending the email: " . $mail->ErrorInfo;
          exit;
        }else {
            // $wpdb->insert( 'wp_new_belocal_mytable', array('name' => $_POST['pname'], 'phone' => $_POST['pphone'], 'email' => $_POST['pemail'], 'bname' => $_POST['bname'], 'accman' => $acc_manager, 'attachment' => $pdf_name1.'.pdf') );
            // mysqli_query($conn, $query);        
            $data['file'] = 'ok'; 
            $data['filepath'] = '/pdf/'.$pdf_name1.'.pdf'; 
        } 
    // endif;    
    echo json_encode($data);
?>
