<?php
/*This document was made to send texts to customers 30 minutes to 1 hour before their pickup time. If pickup time is 10am, text is sent at 935am (cron job) . If pickup time is 1030am, text is sent at 935am as well.
This queries the database, finds user names, phones, pickup dates and times, and then looks to see if customer has been sent a text already or not. If they have, "30 reminder" is marked with a 1, if they haven't "30 reminder" column will be a 0." 
This is only operational between 6am and 6pm, otherwise it will not execute. This combats problems with am vs pm. 1am vs 1pm, etc. Because pickup times do not occur at 7am and 7pm, we can eliminate the 12 hour period between 6am and 6pm so as not to confuse the system
**WILL GINSBERG**
**June, 2014** */
require "/boxco_dev/twilio-php-master/Services/Twilio.php";
// Set timezone
date_default_timezone_set('America/Chicago');

//6am - 6pm

$timetest = date('Hi');
if ($timetest < 0600 || $timetest > 1800)
{
	print "This form is not operational between 6pm and 6am.";
	exit(0);
}
/*
if (date("G") < 6 || date("G") > 18){
	exit(0);
}	*/

//db connect
$db = new mysqli('xxxxxxxxxx', 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxx');
if($db->connect_error){
  	die ('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
   }


$account_sid = 'xxxxxxx'; 
$auth_token = 'xxxxxxx'; 
$client = new Services_Twilio($account_sid, $auth_token); 


$cur_date= date('Y-m-d');
$cur_time= date('g:i');

$before=date("g", strtotime("+30 minutes"));

echo "Current Date: ";
echo $cur_date;
echo "<br />";
echo "Current Time: ";
echo $cur_time;
echo "<br />";
echo "Next Hour: ";
echo $before;
//Get current date and time


$students= $db->query("select tbl_users.user_id, tbl_users.user_fname, tbl_users.user_lname,tbl_users.user_phone, tbl_pickup_dates.pickup_dates,tbl_pickup_times.pickup_time, tbl_users.reminder_30 from tbl_orders join tbl_pickup_dates on tbl_pickup_dates.pickup_dates_id=tbl_orders.pickup_dates_id join tbl_pickup_times on tbl_pickup_times.pickup_times_id=tbl_orders.pickup_times_id join tbl_users on tbl_users.user_id = tbl_orders.user_id where tbl_pickup_dates.pickup_dates = '".$cur_date."' and tbl_users.reminder_30 = 0");


while ($list= $students->fetch_assoc() ){
	$name= $list['user_fname'];
	$time= $list['pickup_time'];
	$to_number= $list['user_phone'];
	$date= $list['pickup_date'];
	$id= $list['user_id'];

	$first_part= explode("-", $time);
	$first_digits= explode(":", $first_part[0]);

	$msg= "Hi $name, this is BoxCo. Your scheduled pickup time is $time, please be ready with your items packed by then. If you have any urgent or serious concerns, you can reach us at (847) 513-9291 and we'd love to help. See you soon!";

	//print $first_digits[0]." and ".$before."<br>";

	if($first_digits[0] == $before){
		print "Just sent to a text reminder to: ";

		print "".$name." ".$time." ".$date." ".$to_number;
		print "<br />".$msg;
		print "<br />";
		print "<br />";


//send text 

		$sms = $client->account->messages->sendMessage(
            "9999999999", 
            //change to $to_number
            $to_number, 
            // the sms body
            $msg
        );

        //update db 

       $db->query("UPDATE tbl_users SET reminder_30='1' WHERE user_id= '".$id."' ");
 
    }

		//update db 



}


?>
