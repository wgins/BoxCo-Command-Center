<?php
/* BoxCo. Mass Texting System. This allows users to send mass text to an array. It requires a pin to prevent any unintentional sending of text.
    **WILL GINSBERG**
    **June, 2014**
    SENSITIVE DATABASE / TABLE INFORMATION, PHONE NUMBERS, PINS, TWILIO CREDENTIALS HAVE BEEN REMOVED
*/

$pin= $_POST['pin'];

if ($pin==xxxxxxx) {

require "/boxco_dev/twilio-php-master/Services/Twilio.php";
 
    $AccountSid = "xxxxxxxx";
    $AuthToken = "xxxxxxx";
    $client = new Services_Twilio($AccountSid, $AuthToken);
 

    // Feel free to change/add your own phone number and name here.
    $people = array(
         "xxxxxxxxxxxxxxx",
    );
 
 
 // $name is the name next to it
    foreach ($people as $number) {
 
        $sms = $client->account->messages->sendMessage(
 
        //THIS IS THE FROM NUMBER, DO NOT CHANGE THIS! PLEASE!
            "xxxxxxxxxx", 
 
            // the number we are sending to - Any phone number
            $number,
 
            // the sms body
            "Hi this is BoxCo. You are scheduled to work tomorrow (6/2), please refer to the google spreadsheet to confirm your time. If you have any questions or concerns, email us at xxxxxx@nuboxco.com. Thanks!"
        );
 
        // Display a confirmation message on the screen
        echo "Sent message to $number . Thanks! </br>";
                                }
        }
else {
    print "You either failed to enter a pin or entered the wrong pin. Please try again.";
}
?>
