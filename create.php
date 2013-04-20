<?php
$dbhost='10.43.7.44';
$dbuser='GG';
$dbpassword='starlord';
$database='neo'; 
$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " . mysql_error());
mysql_select_db($database) or die("Error conecting to db.");
$username=$_POST["UserName"];
$sql="INSERT INTO user(Username, FirstName, LastName, Email, Phone, Country, Occupation, Organization) VALUES('" . $username . "', '" . $_POST["FirstName"] . "', '" . $_POST["LastName"]. "', '" . $_POST["Email"] . "', " . $_POST["Phone"] . ", '". $_POST["Country"] . "', '". $_POST["Occupation"] . "', '". $_POST["Organization"] . "');";
$result = mysql_query($sql);
 
//Get last inserted record (to return to jTable)
$r="SELECT * FROM user WHERE Username ='". $username."';";
$result = mysql_query($r);
$row = mysql_fetch_array($result);
//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Records'] = $row;
print json_encode($jTableResult);
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, json_encode($jTableResult));
fclose($fh);
?>