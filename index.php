<?php 
	//Hello
	$sessionId = $_POST["sessionId"];
	$serviceCode = $_POST["serviceCode"];
	$phoneNumber = $_POST["phoneNumber"];
	$text = $_POST["text"];

	if ($text == "") {
		//Hello
		$response = "CON What would you want to check \n";
		$response .= "1. My Account number \n";
		$response .= "2. My Phone number";

	} elseif($text == 1) {
		//Hello
		$response = "CON Choose the account information you want to view \n";
		$response .= "1. Account Number \n";
		$response .= "2. Account Balance";

	} elseif ($text == 2) {
		//Hello
		$response = "END Your phone number is ".$phoneNumber;

	} elseif ($text == "1*1") {
		//Hello
		$accountNumber = "0011220021";
		$response = "END Your account number is ".$accountNumber;
	} elseif ($text == "1*2") {
		//Hello
		$balance = "NGN 65,000,001.95";

		$response = "END Your balance is ".$balance;
	}



	//Hello
	header('Content-type; text/plain');
	echo $response;

 ?>