<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response>
		<Say>You entered " . $_REQUEST['Digits'] . "</Say>
		<Dial>" . $_REQUEST['Digits'] . "</Dial> </Response>";
?>
