<?php
//handles incoming calls to boxco command center. edit as needed. then look at input handler to make systematic changes.
//will ginsberg
//june, 2014
//SENSITIVE DATABASE / TABLE INFORMATION, PHONE NUMBERS, PINS, TWILIO CREDENTIALS HAVE BEEN REMOVED
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<Gather numDigits="6" action="boxcoInputHandler.php" method="POST">
	<Say voice="woman" language="en-gb">Thank you for calling BoxCo. To speak with our manager on duty, please press 1. To hear more info, please press 2. To disconnect, press 3.</Say> <Pause length="5"/>
	<Pause length="2"/>
	<Say voice="woman" language="en-gb">Thank you for calling BoxCo. To speak with our manager on duty, please press 1. To hear more info, please press 2. To disconnect, press 3.</Say> 
</Gather>
</Response>

