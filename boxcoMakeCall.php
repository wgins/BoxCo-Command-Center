<?php

/*This makes a call to customer for BoxCo. outgoing call system. It requires a pin in order to prevent any unintentional or malicious use of outgoing call feature.
**WILL GINSBERG**
**June, 2014** 
SENSITIVE DATABASE / TABLE INFORMATION, PHONE NUMBERS, PINS, TWILIO CREDENTIALS HAVE BEEN REMOVED
*/

$pin= $_POST['pin'];
$personNum=$_POST['number'];
$user=$_POST['user'];

/*Takes input from outgoing call html file. User specifies the number they want to call and chooses their name.
Twilio calls the user and then connects the call to the number specified. */

//If user chooses clr, system is set to blank.
if($user=="clr"){
	$toNumber="";
}else if($user=="a"){
	$toNumber="1999999999";
}else if($user=="d"){
	$toNumber="1999999999";
}else if($user=="j"){
	$toNumber="1999999999";
}else if($user=="k"){
	$toNumber="1999999999";
}else if($user=="an"){
	$toNumber="1999999999";
}else if($user=="x"){
	$toNumber="1999999999";
}else if($user=="l"){
	$toNumber="1999999999";
}else if($user=="r"){
	$toNumber="1999999999";
}else if($user=="c"){
	$toNumber="1999999999";
}else if($user=="aa"){
	$toNumber="1999999999";
}else if($user=="am"){
	$toNumber="1999999999";
}else if($user=="la"){
	$toNumber="1999999999";
}else if($user=="s"){
	$toNumber="1999999999";
}else if($user=="w"){
	$toNumber="1999999999";
}


//If correct pin is entered, initiate the call. Dials the specified number with callerID of BoxCo.
if($pin==xxxx){

	$myFile = "call.xml";
	$fh = fopen($myFile, 'w') or die("can't open file");
	$stringData = "<?xml version='1.0' encoding='UTF-8'?>
<Response>
<Pause length='1'/>
	<Say> Now connecting your call</Say>
<Pause length='1'/>
    <Dial callerId='19999999999'>$personNum</Dial>
</Response>";
	fwrite($fh, $stringData);

	fclose($fh);
	// Include the Twilio PHP library
	require "/boxco_dev/twilio-php-master/Services/Twilio.php";

	// Twilio REST API version
	$version = "2010-04-01";

	// Set our Account SID and AuthToken
	$sid = 'xxxxxxx';
	$token = 'xxxxxx';
	
	// A phone number you have previously validated with Twilio
	$phonenumber = '19999999999';
	
	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($sid, $token, $version);
	try {
	
		// Initiate a new outbound call
		$call = $client->account->calls->create(
			$phonenumber, // The number of the phone initiating the call
			$toNumber, // The number of the phone receiving call
			'http://nuboxco.com/call.xml' // The URL Twilio will request when the call is answered
		);
		echo 'Started call: ' . $call->sid;
	} catch (Exception $e) {
		echo 'Error: ' . $e->getMessage();
	}
}else{
	print "no pin";
}
?>
