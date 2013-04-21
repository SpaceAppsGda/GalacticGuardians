<?php
$user=$_GET['user'];
$dbhost='10.43.7.44';
$dbuser='GG';
$dbpassword='starlord';
$database='neo'; 
$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " . mysql_error());
mysql_select_db($database) or die("Error conecting to db.");
//Get records from database
$result = mysql_query("SELECT neo.ObjectID, Category, PlaceOfDiscovery, Magnitude, NoObservations, Arc, Orbital,  `Date` , neo.UserName, Discoverer, AVG( rate ) AS average
FROM neo
INNER JOIN rating ON neo.objectid = rating.objectid
GROUP BY neo.objectid and neo.Username = '$user';");
 
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
?>