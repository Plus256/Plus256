<?php
//require_once('ob_ses.php');
require_once('db.php');

if(isset($_GET['signup_req'])){
  if(!empty($_POST['email'])){
		$mail_check=spamCheck($_POST['email']);
		if($mail_check==false){
			echo "1";
		}
		else{
	    $email=cleanInput($_POST['email']);
	    $q=mysqli_query($conn, "select email from user where email='$email'");
	    if(mysqli_num_rows($q)>0){
	    	echo "0";
	    }
	    else{
        $vkey=hash('sha256', $email.uniqid(rand()));
	    	$to=$email;
	    	$frm="wagaba@plus256.com";
	    	$frm_name="Collins Wagaba";
	    	$sbj="Newsletter";
	
	      $msg='<div style="text-align:center;">';
	      $msg.='<p>';
	    	$msg.='Almost There!';
	    	$msg.='</p>';
	    	
	    	$msg.='<p style="font-weight:200;">';
	    	$msg.='Ignore this email if you didn\'t sign up for it. Otherwise...';
	    	$msg.='</p>';
	
	      $msg.='<a href="http://plus256.com/verify.php?vkey='.$vkey.'" style="display:inline-block; text-decoration:none; padding:1em 5em; background:#ED1C24; color:#FFF; margin:3em 0; border:1px solid #ED1C24;">';
	    	$msg.='ACTIVATE';
	    	$msg.='</a>';
	      $msg.='</div>';
	
	    	$mail_return=sendMsg($to, $frm, $frm_name, $sbj, $msg);//get returned value from function
	    	switch($mail_return){
	    		case 2:
    			//mail sent to address - add to DB
		    	$q=mysqli_query($conn, "insert into user (email, pwd, vkey, dp) values ('$email', '$hash', '$vkey', 1)");
    			if($q){//successful sign up
    				echo "2";
    			}
    			else{echo mysqli_error($conn);}
	    		break;
	    		case 3:
    			echo "3";
    			//mail not sent
	    		break;
	    	}
		  }
		}
	}
	else{
		echo "4";
	}
}

function spamCheck($field){
	//sanitize email
	$field=filter_var($field, FILTER_SANITIZE_EMAIL);
	//validate email
	if(filter_var($field, FILTER_VALIDATE_EMAIL)){
		return true;
	}
	else{
		return false;
	}
}

function cleanInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = strip_tags($data, "<br>");
	return $data;
}

function sendMsg($to, $frm, $frm_name, $sbj, $msg){
	//msg lines should not exceed 70 characters. it's a PHP rule, so we wrap
	$msg=wordwrap($msg, 70);
	$msg_fot='Copyright &copy; '.date('Y').' <a href="http://www.plus256.com" target="_NEW">Plus256 Network, Ltd</a>';
	//HTML message formatting/////////////////////////////////////////////////////////////////////////////////////////////////
	$html_msg='<html>';
	$html_msg.='<head>';
	/////////The Style Sheet//////////////////////////////////////////////////////////////////
	$html_msg.='<style type="text/css">';
	$html_msg.='a{text-decoration:none; color:#ED1C24;} a:hover{text-decoration:underline;}';
	$html_msg.='</style>';
	/////////////////////////////////////////////////////////////////////////////////////////
	$html_msg.='</head>';
	$html_msg.='<body style="width:90%; margin:auto; font-family:Verdana, Geneva, sans-serif; font-size:120%;">';
	///////////////////
	$html_msg.='<div style="text-align:center; padding:10px; background:#ED1C24; color:#FFF; font-weight:bold; border-radius:10px 10px 0 0; -moz-border-radius:10px 10px 0 0; -webkit-border-radius:10px 10px 0 0;">';
	$html_msg.=$sbj;
	$html_msg.='</div>';
	///////////////////////////
	$html_msg.='<div style="padding:10px;">';
	$html_msg.=$msg;
	$html_msg.='</div>';
	//////////////////////////
	$html_msg.='<div style="padding:10px; font-size:85%; color:#A1A1A1; text-align:center; border:1px solid #ED1C24; border-radius:0 0 10px 10px; -moz-border-radius:0 0 10px 10px; -webkit-border-radius:0 0 10px 10px;">';
	$html_msg.=$msg_fot;
	$html_msg.='</div>';
	//////////////////////////
	$html_msg.='</body>';
	$html_msg.='</html>';
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$hed='From: '.$frm.''."\r\n";
	$hed.='Reply-To: '.$frm.''."\r\n";
	//headers to send HTML email
	$hed.='MIME-Version: 1.0'."\r\n";
	$hed.='Content-type: text/html; charset=iso-8859-1'."\r\n";
	require('../vendor/autoload.php');
	$sendgrid_apikey='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';
	$sendgrid = new SendGrid($sendgrid_apikey);
	$email = new SendGrid\Email();
	$email
	    ->addTo($to)
	    ->setFrom($frm)
	    ->setFromName($frm_name)
	    ->setSubject($sbj)
	    ->setText($msg)
	    ->setHtml($html_msg)
	;
	
	try{
	    $sendgrid->send($email);
	    return 2;
	}
	catch(\SendGrid\Exception $e){
	    return 3;
	    /*echo $e->getCode();
	    foreach($e->getErrors() as $er) {
	        echo $er;
	    }*/
	}
}

?>
