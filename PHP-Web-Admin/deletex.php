

<?php

//### load records from text/csv file ###
$str = file_get_contents('rfidlist.csv');
//echo $str."<br><br>";


//### Get ID of record to delete ###
if ($_GET['delx'] >''){
	$findme = $_GET['delx'];

}

//### Search for the ID  in loaded file###


$endstrx = str_replace("xSTARTx","xENDx",$findme);
//echo $findme."<br>";
//echo $endstrx."<br>";
$startpos = strpos($str, $findme);
$endpos = strpos($str, $endstrx);

$endstrxlen = strlen($endstrx);
$endpos = ($endstrxlen + $endpos);



//echo $updatedfile."<br>";
$rplthis = substr($str, $startpos, ($endpos - $startpos));  // bcd

$updatedfile = str_replace($rplthis ,"",$str);
//echo $updatedfile;

//### update file ###

$updatedfile = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $updatedfile);


$myfile = fopen("test.csv", "w") or die("Unable to open file!");
fwrite($myfile, $updatedfile);
fclose($myfile);

?>
<br>
<center>Deleting...</center>
<meta http-equiv="Refresh" content="1;url=http://www.your-domain.com/index.php">
