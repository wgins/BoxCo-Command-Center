<?php
/* BoxCo. Mass Texting System. This allows users to send mass text to an array. It requires a pin to prevent any malicious use.
    **WILL GINSBERG**
    **June, 2014**
    SENSITIVE DATABASE / TABLE INFORMATION, PHONE NUMBERS, PINS, TWILIO CREDENTIALS HAVE BEEN REMOVED
*/

$pin= $_POST['pin'];

//if correct pin is entered, then send the text(s)
if ($pin==xxxxxxx) {

require "/boxco_dev/twilio-php-master/Services/Twilio.php";
//Twilio authentication information
    $AccountSid = "xxxxxxxx";
    $AuthToken = "xxxxxxx";
    $client = new Services_Twilio($AccountSid, $AuthToken);
 

//Add all numbers to this array that you desire to send your text to.
    $people = array(
         "xxxxxxxxxxxxxxx",
    );
 
   foreach ($people as $number) {
 
        $sms = $client->account->messages->sendMessage(
 
        //THIS IS THE FROM NUMBER, DO NOT CHANGE THIS! PLEASE!
            "xxxxxxxxxx", 
 
            //Takes number from array
            $number,
 
            //TEXT BODY
            "Hi this is BoxCo. You are scheduled to work tomorrow (1/10), please refer to the google spreadsheet to confirm your time. If you have any questions or concerns, email us at xxxxxx@nuboxco.com. Thanks!"
        );
 
        // Display a confirmation message on the screen
        echo "Sent message to $number . Thanks! </br>";
                                }
        }
//Otherwise say that you didn't enter the right pin.
else {
    print "You either failed to enter a pin or entered the wrong pin. Please try again.";
}
?>
