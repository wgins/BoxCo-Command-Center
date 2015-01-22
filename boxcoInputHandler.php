<?php
//This file was made to handle BoxCo. incoming call requests. It creates a functioning phone system that processes commands from customers and users to direct them to managers.
//The file queries the BoxCo. database to determine where the calls should redirect to.
//Will Ginsberg
//June, 2014
date_default_timezone_set('America/Chicago');
//db connect
$link = mysqli_connect('xxxxxx', 'xxxxx', 'xxxxxxx', 'xxxxxx');

header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
<?php
$time = date('Hi');
      function getEmployee ()
      {
          $time = date('Hi');
          $link = mysqli_connect('xxxxxx', 'xxxxxxx', 'xxxxxx', 'xxxxxxx');
          $result = mysqli_query($link, "SELECT * FROM `testing` WHERE `ID` = 1");
          $row = mysqli_fetch_array($result);
          
          $currentNum =  $row['1'];
            return $currentNum;  
      }
         $curEmp = getEmployee();
    
if ($_REQUEST['Digits'] == '1')
  {
    ?>
     <Say voice="woman" language="en">You will now be directed to the manager on duty.</Say>
      		<Dial callerID="1999999999"><?php print $curEmp ?></Dial>
          <Say>The call failed or the remote party hung up. Goodbye.</Say>
          die;

<?php
  }
else if ($_REQUEST['Digits'] == '2')
  {
    ?>
      <Say voice="woman" language="en">Please visit boxco.com for more information. Thank you.</Say>
      <Hangup/>
           
<?php
  }
else if ($_REQUEST['Digits'] == '3')
  { 
    ?>
    <Say voice="woman" language="en">Please visit boxco.com for more information. Thank you.</Say>
   <Hangup/>
    <?php
  }
else if ($_REQUEST['Digits'] == 'XXXXXXX')
  {
    ?>
    <!-- gather and then redirec that gather to another php file that then 
    takes in the gathered numbers and calls them -->
    <!-- <Say voice="woman" language="en">Welcome to the call out portal. Enter the number you want to call then press pound.</Say> -->
    <Gather action="outgoingcall.php" method="GET">
      <Say>Welcome to the call out portal. Please enter the number you want to call.></Say>
    </Gather>
    <Say>We didn't hear you.</Say>
    die;
  

<?php
  }
?>
</Response>
     

     
     
     
     
     

