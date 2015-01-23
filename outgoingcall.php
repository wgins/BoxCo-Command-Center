<?php
//SENSITIVE DATABASE / TABLE INFORMATION, PHONE NUMBERS, PINS, TWILIO CREDENTIALS HAVE BEEN REMOVED
//Make outgoing call from input handler php file. Once employee has entered pin, prompted to enter a number, this takes the number they enter and dials.
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response>
		<Say>You entered " . $_REQUEST['Digits'] . "</Say>
		<Dial>" . $_REQUEST['Digits'] . "</Dial> </Response>";
?>
