<?php
	include("api/smtp_lookup.php");
	//$email = $_GET['txt_email'];
	$email = 'ungdailong@gmail.com';
	$smtp = new SMTP_validateEmail(array($email));
	$domain = array_keys($smtp -> domains);
	$domain = $domain[0];
	
	/* Status of email.
		1 : Hop le.
		2 : Da ton tai.
		3 : Thuoc ve doanh nghiep va da ton tai.
		4 : Thuoc ve doanh nghiep va chua ton tai.
	*/
	if($domain == 'gmail.com'){
		$check = $smtp->validate(array($email));
	}
	else if($domain == 'yahoo.com' || $domain == 'yahoo.com.vn' ){
		$url_yahoo = 'https://sa.edit.yahoo.com/reg_json?PartnerName=yahoo_default&RequestVersion=1&AccountID='.$email.'&GivenName=&FamilyName=&ApiName=ValidateFields&intl=vn';
		$string = file_get_contents($url_yahoo);
		if(strpos($string, 'SUCCESS') == true)
			$result = 2;
		else
			$result = 1;
	}
	else{
		list($hosts, $mxweights) = $smtp->queryMX($domain); 
		if(strpos($hosts[0], 'google') > 0){
			//$postfields = json_decode('{"input01":{"Input":"GmailAddress","GmailAddress":"ungdailong","FirstName":"","LastName":""},"Locale":"vi"}');
			$postfields = '{"input01":{"Input":"GmailAddress","GmailAddress":"'.$email.'","FirstName":"","LastName":""},"Locale":"en"}';
			$output = excute_curl('https://accounts.google.com/InputValidator?resource=SignUp&service=mail','https://accounts.google.com/SignUp?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default&hl=vi',$postfields);	
			$output = json_decode($output);
			print_r($output);die();
			$flag_check = $output -> input01 -> Valid;
			if($flag_check == 'false'){
				$errorMessage = $output -> input01 -> ErrorMessage;
				if(strpos($errorMessage, 'already has that username') > 0)
					$result = 2;
				else if (strpos($errorMessage, 'already associated with an account') > 0)
					$result = 3;
				else if (strpos($errorMessage, 'looks like your email address') > 0)
					$result = 4;

			}
			else
				$result = 1;
		}
		else{
			$postfields = 'SYCUSEUBKEY_testform=SYCUSE_FORM_SUBMITTED_testform&SYCUSE_DATASTORE_testform=null&fromemail=check@verify-email.org&login_submit=&server='.$hosts[0].'&toemail='.$email;
		//die();
		//print_r($hosts);
			$output = excute_curl('https://www.wormly.com/test_smtp_server','https://www.wormly.com',$postfields);
		}
	}
	function excute_curl($url,$referer,$postfields){
		$ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);  
	    //curl_setopt($ch, CURLOPT_REFERER, $referer);
	    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_POST,1);
 		curl_setopt($ch, CURLOPT_POSTFIELDS,$postfields);
 		curl_setopt($ch, CURLOPT_FOLLOWLOCATION ,1);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	    $output = curl_exec($ch);
	    curl_close($ch);
	    return $output;
	}
?>