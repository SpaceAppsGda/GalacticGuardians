<?php
$dbhost='10.43.7.44';
$dbuser='GG';
$dbpassword='starlord';
$database='neo'; 
$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " . mysql_error());
mysql_select_db($database) or die("Error conecting to db.");
//Get records from database
/*$cat=$_GET['category'];
$filter="";
$col=$_GET['filter'];
$value=$_GET['value'];
if($col!="" && ($value!="" || $value!='null')){
	$filter="WHERE ".$col." = '".$value."'";
	if($value=='null'){
		$filter="WHERE ".$col." IS NULL";
	}
	$col=$_GET['filter1'];
	$value=$value=$_GET['value1'];
	if($col!="" && ($value!="" || $value!='null')){
		$filter="$filter AND ".$col."= '".$value."'";
		if($value=='null'){
			$filter="$filter AND ".$col." IS NULL";
		}
		$col=$_GET['filter2'];
		$value=$value=$_GET['value2'];
		if($col!="" && ($value!="" || $value!='null')){
			$filter="$filter AND ".$col."= '".$value."'";
			if($value=='null'){
				$filter="$filter AND ".$col." IS NULL";
			}
		}
	}
}
$result = mysql_query("SELECT DISTINCT $cat FROM demo $filter;");
 
//Add all records to an array
$rows = array();
while($row = mysql_fetch_array($result))
{
    $rows[] = $row;
}
 
//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Records'] = $rows;
print json_encode($jTableResult);
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, "col: $col value: $value");
fclose($fh);*/
?>
