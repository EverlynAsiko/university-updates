<?php

$message=$_POST["message"];

send_sms($message);

function send_sms($message){
	// Be sure to include the file you've just downloaded
	require_once('AfricasTalkingGateway.php');
	// Specify your authentication credentials
	$username   = "sodecchallenge";
	$apikey     = "2f019ec74cf3af30fe9701155c25aa9ac1026cfe2e1046101f5576492ee6e167";
	// Specify the numbers that you want to send to in a comma-separated list
	// Please ensure you include the country code (+254 for Kenya in this case)
	$recipients = "+254701869953,+254713427968,+254773177972";
	// And of course we want our recipients to know what we really do
	$message    = $message;
	// Create a new instance of our awesome gateway class
	$gateway    = new AfricasTalkingGateway($username, $apikey);
	/*************************************************************************************
	  NOTE: If connecting to the sandbox:
	  1. Use "sandbox" as the username
	  2. Use the apiKey generated from your sandbox application
	     https://account.africastalking.com/apps/sandbox/settings/key
	  3. Add the "sandbox" flag to the constructor
	  $gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
	**************************************************************************************/
	// Any gateway error will be captured by our custom Exception class below, 
	// so wrap the call in a try-catch block
	try 
	{ 
	  // Thats it, hit send and we'll take care of the rest. 
	  $results = $gateway->sendMessage($recipients, $message);
	            
	  foreach($results as $result) {
	    // status is either "Success" or "error message"
	    echo " Number: " .$result->number;
	    echo " Status: " .$result->status;
	    echo " MessageId: " .$result->messageId;
	    echo " Cost: "   .$result->cost."\n";
	  }
	}
	catch ( AfricasTalkingGatewayException $e )
	{
	  echo "Encountered an error while sending: ".$e->getMessage();
	}
	// DONE!!!
}