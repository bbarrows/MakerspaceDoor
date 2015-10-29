<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="shane Weddle - SLO Robotics">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>RFID Main</title>
 </head>
 <body>



 <center>
<!-- ### File format ###
### Name(F L)~time(2:30PM-5:30PM)~RFID~Active(1/0) ### -->

RFID ACCESS MANAGEMENT SYSTEM

<hr>

<table width="50%">
<tr>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Start Time</td>
	<td>End Time</td>
	<td>RFID</td>
	<td>Active</td>
	<td>Add/Remove</td>
</tr>
<form method="post" action="">
<tr>
	<td><input type="text" name="fname"></td>
	<td><input type="text" name="lname"></td>
	<td>

<select name="timeopen" id="timeopen">
	<option value="24x7">24x7</option>
	<option value="5:00 AM">5:00 AM</option>
	<option value="5:15 AM">5:15 AM</option>
	<option value="5:30 AM">5:30 AM</option>
	<option value="5:45 AM">5:45 AM</option>
 
	<option value="6:00 AM">6:00 AM</option>
	<option value="6:15 AM">6:15 AM</option>
	<option value="6:30 AM">6:30 AM</option>
	<option value="6:45 AM">6:45 AM</option>
 
	<option value="7:00 AM">7:00 AM</option>
	<option value="7:15 AM">7:15 AM</option>
	<option value="7:30 AM">7:30 AM</option>
	<option value="7:45 AM">7:45 AM</option>
 
	<option value="8:00 AM">8:00 AM</option>
	<option value="8:15 AM">8:15 AM</option>
	<option value="8:30 AM">8:30 AM</option>
	<option value="8:45 AM">8:45 AM</option>
 
	<option value="9:00 AM">9:00 AM</option>
	<option value="9:15 AM">9:15 AM</option>
	<option value="9:30 AM">9:30 AM</option>
	<option value="9:45 AM">9:45 AM</option>
 
	<option value="10:00 AM">10:00 AM</option>
	<option value="10:15 AM">10:15 AM</option>
	<option value="10:30 AM">10:30 AM</option>
	<option value="10:45 AM">10:45 AM</option>
 
	<option value="11:00 AM">11:00 AM</option>
	<option value="11:15 AM">11:15 AM</option>
	<option value="11:30 AM">11:30 AM</option>
	<option value="11:45 AM">11:45 AM</option>
 
	<option value="12:00 PM">12:00 PM</option>
	<option value="12:15 PM">12:15 PM</option>
	<option value="12:30 PM">12:30 PM</option>
	<option value="12:45 PM">12:45 PM</option>
 
	<option value="1:00 PM">1:00 PM</option>
	<option value="1:15 PM">1:15 PM</option>
	<option value="1:30 PM">1:30 PM</option>
	<option value="1:45 PM">1:45 PM</option>
 
	<option value="2:00 PM">2:00 PM</option>
	<option value="2:15 PM">2:15 PM</option>
	<option value="2:30 PM">2:30 PM</option>
	<option value="2:45 PM">2:45 PM</option>
 
	<option value="3:00 PM">3:00 PM</option>
	<option value="3:15 PM">3:15 PM</option>
	<option value="3:30 PM">3:30 PM</option>
	<option value="3:45 PM">3:45 PM</option>
 
	<option value="4:00 PM">4:00 PM</option>
	<option value="4:15 PM">4:15 PM</option>
	<option value="4:30 PM">4:30 PM</option>
	<option value="4:45 PM">4:45 PM</option>
 
	<option value="5:00 PM">5:00 PM</option>
	<option value="5:15 PM">5:15 PM</option>
	<option value="5:30 PM">5:30 PM</option>
	<option value="5:45 PM">5:45 PM</option>
 
	<option value="6:00 PM">6:00 PM</option>
	<option value="6:15 PM">6:15 PM</option>
	<option value="6:30 PM">6:30 PM</option>
	<option value="6:45 PM">6:45 PM</option>
 
	<option value="7:00 PM">7:00 PM</option>
	<option value="7:15 PM">7:15 PM</option>
	<option value="7:30 PM">7:30 PM</option>
	<option value="7:45 PM">7:45 PM</option>
 
	<option value="8:00 PM">8:00 PM</option>
	<option value="8:15 PM">8:15 PM</option>
	<option value="8:30 PM">8:30 PM</option>
	<option value="8:45 PM">8:45 PM</option>
 
	<option value="9:00 PM">9:00 PM</option>
	<option value="9:15 PM">9:15 PM</option>
	<option value="9:30 PM">9:30 PM</option>
	<option value="9:45 PM">9:45 PM</option>
 
	<option value="10:00 PM">10:00 PM</option>
	<option value="10:15 PM">10:15 PM</option>
	<option value="10:30 PM">10:30 PM</option>
	<option value="10:45 PM">10:45 PM</option>
 
	<option value="11:00 PM">11:00 PM</option>
	<option value="11:15 PM">11:15 PM</option>
	<option value="11:30 PM">11:30 PM</option>
	<option value="11:45 PM">11:45 PM</option>
</select>

	</td>
	<td>
	
<select name="timeclosed" id="timeclosed">
	<option value="24x7">24x7</option>
	<option value="5:00 AM">5:00 AM</option>
	<option value="5:15 AM">5:15 AM</option>
	<option value="5:30 AM">5:30 AM</option>
	<option value="5:45 AM">5:45 AM</option>
 
	<option value="6:00 AM">6:00 AM</option>
	<option value="6:15 AM">6:15 AM</option>
	<option value="6:30 AM">6:30 AM</option>
	<option value="6:45 AM">6:45 AM</option>
 
	<option value="7:00 AM">7:00 AM</option>
	<option value="7:15 AM">7:15 AM</option>
	<option value="7:30 AM">7:30 AM</option>
	<option value="7:45 AM">7:45 AM</option>
 
	<option value="8:00 AM">8:00 AM</option>
	<option value="8:15 AM">8:15 AM</option>
	<option value="8:30 AM">8:30 AM</option>
	<option value="8:45 AM">8:45 AM</option>
 
	<option value="9:00 AM">9:00 AM</option>
	<option value="9:15 AM">9:15 AM</option>
	<option value="9:30 AM">9:30 AM</option>
	<option value="9:45 AM">9:45 AM</option>
 
	<option value="10:00 AM">10:00 AM</option>
	<option value="10:15 AM">10:15 AM</option>
	<option value="10:30 AM">10:30 AM</option>
	<option value="10:45 AM">10:45 AM</option>
 
	<option value="11:00 AM">11:00 AM</option>
	<option value="11:15 AM">11:15 AM</option>
	<option value="11:30 AM">11:30 AM</option>
	<option value="11:45 AM">11:45 AM</option>
 
	<option value="12:00 PM">12:00 PM</option>
	<option value="12:15 PM">12:15 PM</option>
	<option value="12:30 PM">12:30 PM</option>
	<option value="12:45 PM">12:45 PM</option>
 
	<option value="1:00 PM">1:00 PM</option>
	<option value="1:15 PM">1:15 PM</option>
	<option value="1:30 PM">1:30 PM</option>
	<option value="1:45 PM">1:45 PM</option>
 
	<option value="2:00 PM">2:00 PM</option>
	<option value="2:15 PM">2:15 PM</option>
	<option value="2:30 PM">2:30 PM</option>
	<option value="2:45 PM">2:45 PM</option>
 
	<option value="3:00 PM">3:00 PM</option>
	<option value="3:15 PM">3:15 PM</option>
	<option value="3:30 PM">3:30 PM</option>
	<option value="3:45 PM">3:45 PM</option>
 
	<option value="4:00 PM">4:00 PM</option>
	<option value="4:15 PM">4:15 PM</option>
	<option value="4:30 PM">4:30 PM</option>
	<option value="4:45 PM">4:45 PM</option>
 
	<option value="5:00 PM">5:00 PM</option>
	<option value="5:15 PM">5:15 PM</option>
	<option value="5:30 PM">5:30 PM</option>
	<option value="5:45 PM">5:45 PM</option>
 
	<option value="6:00 PM">6:00 PM</option>
	<option value="6:15 PM">6:15 PM</option>
	<option value="6:30 PM">6:30 PM</option>
	<option value="6:45 PM">6:45 PM</option>
 
	<option value="7:00 PM">7:00 PM</option>
	<option value="7:15 PM">7:15 PM</option>
	<option value="7:30 PM">7:30 PM</option>
	<option value="7:45 PM">7:45 PM</option>
 
	<option value="8:00 PM">8:00 PM</option>
	<option value="8:15 PM">8:15 PM</option>
	<option value="8:30 PM">8:30 PM</option>
	<option value="8:45 PM">8:45 PM</option>
 
	<option value="9:00 PM">9:00 PM</option>
	<option value="9:15 PM">9:15 PM</option>
	<option value="9:30 PM">9:30 PM</option>
	<option value="9:45 PM">9:45 PM</option>
 
	<option value="10:00 PM">10:00 PM</option>
	<option value="10:15 PM">10:15 PM</option>
	<option value="10:30 PM">10:30 PM</option>
	<option value="10:45 PM">10:45 PM</option>
 
	<option value="11:00 PM">11:00 PM</option>
	<option value="11:15 PM">11:15 PM</option>
	<option value="11:30 PM">11:30 PM</option>
	<option value="11:45 PM">11:45 PM</option>
</select>
	
	</td>
	<td><input type="text" name="rfid"></td>
	<td><input type="checkbox" name="act"></td>
	<td><input type="submit" value="Save"> &nbsp; <input type="submit" value="Cancel"></td>
</tr>
</form>
</tr>
</table>

<hr>

<table width="50%">
<tr>

<?php
$t=time();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$myfile = fopen("rfidlist.csv", "a") or die("Unable to open file!");
$txt = "xSTARTx".$t."xSTARTx,".$_POST["fname"].",".$_POST["lname"].",".$_POST["timeopen"].",".$_POST["timeclosed"].",".$_POST["rfid"].",".$_POST["act"].",xENDx".$t."xENDx"."\n";
fwrite($myfile, $txt);
fclose($myfile);
}
?>

<?php
$row = 0;
if (($handle = fopen("rfidlist.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
$loopx++;
if ($loopx>1){
        echo "<tr>";
       
        
			echo "<td>";
            echo $data[1] . "</td>";

			echo "<td>";
            echo $data[2] . "</td>";

			echo "<td>";
            echo $data[3] . "</td>";
			
			echo "<td>";
            echo $data[4] . "</td>";
			
			echo "<td>";
            echo $data[5] . "</td>";

			echo "<td>";
            echo $data[6] . "</td>";



echo '<td><input type=\'button\' value=\'Delete\' onclick="location.href=\'http://www.your-domain.com/deletex.php?delx=' .$data[0]. '\'"/></td>';
 
echo '<td><input type=\'button\' value=\'Edit\' onclick="location.href=\'http://www.your-domain.com/rfid.php?editx=' .$data[0]. '\'"/></td>';
echo "</tr>";
}
	
	
	}
    fclose($handle);
}
?>
</table>
 </body>
</html>
