<?php

 //Author: Will Ginsberg
 //BoxCo Twilio Handler
 //Description: Allow users to change database entry of phone number. This change then allows other essential Twilio files to redirect calls to on duty manager of boxco.
 //SENSITIVE DATABASE / TABLE INFORMATION, PHONE NUMBERS, PINS, TWILIO CREDENTIALS HAVE BEEN REMOVED
date_default_timezone_set('America/Chicago');

    		function getEmployee (){
    			 	$time = date('Hi');
					$link = mysqli_connect('xxxxxxxx', 'xxxxxxxxx', 'xxxxxxxx', 'xxxxx');
					$result = mysqli_query($link, "SELECT * FROM `TEST` WHERE `ID` = 1");
					$row = mysqli_fetch_array($result);
					
     				 $currentNum =  $row['1'];
   					   return $currentNum;  
      					}
    		 $curEmp = getEmployee();
?>
<html>
<head>
<style>
body {background-color:#b0c4de;}

.rainbow {
  background-image:-webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  font-size: 60px;
}
.rainbowSmall {
  background-image:-webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  color:transparent;
  -webkit-background-clip: text;
  font-size: 40px;
}

.clown {
	font-size: 40px;
	}

</style>
<title>Phone Ordering Configurator Magic</title>
</head>
<center>
<span class="rainbow">Phone Configurator Magic </span>
</br>
<body>
Select the manager on phone duty for the day, then click the button.  
</center>
</br>
<form name="Exmployee Name" action="setphone.php" method="POST">
<div align="center">
<select name="Employee">
<option value="19999999999">CLEAR</option>
<option value="18888888888">Example User</option>
<option value="18888888888">Example User</option>
<option value="18888888888">Example User</option>
<option value="18888888888">Example User</option>
<option value="18888888888">Example User</option>
<option value="18888888888">Example User</option>
<option value="18888888888">Example User</option>

</select>
<input type="submit" value="Set the system!">
</div>
</form>
</br>
</br>
</br>
</br>
</br>
</br>
     <hr noshade size=3> 
<center>
 <span class="rainbowSmall">
WE'RE REDIRECTING CALLS TO:
</span>
</br>
<div class="clown">
<?php echo $curEmp ?> 
</div>
     <hr noshade size=3> 
 </center>
</body>
</html>
