<?php
// now greet the caller
//handles incoming calls two boxco command center. edit as needed. then look at input handler to make systematic changes.
//will ginsberg
//june, 2014
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<Gather numDigits="6" action="boxcoinputhandlerNEW.php" method="POST">
	<Say voice="woman" language="en-gb">Thank you for calling BoxCo. To speak with our manager on duty, please press 1. To hear more info, please press 2. To disconnect, press 3.</Say> <Pause length="5"/>
	<Pause length="2"/>
	<Say voice="woman" language="en-gb">Thank you for calling BoxCo. To speak with our manager on duty, please press 1. To hear more info, please press 2. To disconnect, press 3.</Say> 
</Gather>
</Response>

