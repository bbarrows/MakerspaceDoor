<?php

$opendoorx = "Yes Open Door"; 
$datetime = new DateTime; // current time = server time
$otherTZ  = new DateTimeZone('America/Los_Angeles');

//echo date_format($datetime->setTimezone($otherTZ), 'g:i a');

$cur_timex = date_format($datetime->setTimezone($otherTZ), 'g:i A');;
//echo $cur_timex."<br>";
$cur_time   =   strtotime($cur_timex);


$idinfo = "not in system";
$row = 1;
if (($handle = fopen("rfidlist.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;       

		if ($_GET['idx'] == $data[5]){
		$idinfo = "In System,";
		$opendoorx = "xopendoor";
		$st_time    =   strtotime($data[3]);
		$end_time   =   strtotime($data[4]);


			if($st_time < $cur_time && $end_time > $cur_time){
			$idinfo =  $idinfo."Time Yes,";
			
			$fname = $data[1] . " - ";
			$lname = $data[2] . " - ";
			$otime = $data[3] . " - ";
			$ctime = $data[4] . " - ";
			$rfidx = $data[5] . " - ";
			$activex = $data[6] . " - ";

						if ("on" == $data[6]){
						$idinfo =  $idinfo."Active Yes,";
						}else{
						$idinfo =  $idinfo."Active No,";
						$opendoorx = "NO Do Not Open Door";
						}

			} else {
			$idinfo =  $idinfo."Time No,";
			$opendoorx = "NO Do Not Open Door";

						//### kind of a repeat but need to know status if out of time 
						if ("on" == $data[6]){
						$idinfo =  $idinfo."Active Yes,";
						}else{
						$idinfo =  $idinfo."Active No,";
						$opendoorx = "NO Do Not Open Door";
						}

		//	$opendoorx = "xopendoor";
			}


	    } else {
$opendoorx = "NO Do Not Open Door";
		}
	}
fclose($handle);
}
echo $idinfo."<br>";	
echo $opendoorx;




?>
