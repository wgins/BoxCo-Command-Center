<?php
/*A simple reply doc that is used for replies to all incoming texts to BoxCo. command center. Edit the message as needed.
**WILL GINSBERG**
**June, 2014** 
SENSITIVE DATABASE / TABLE INFORMATION, PHONE NUMBERS, PINS, TWILIO CREDENTIALS HAVE BEEN REMOVED
*/

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>Thank you for contacting BoxCo. Please email us at xxxxx@nuboxco.com with any questions or concerns. Thanks!</Message>
</Response>
