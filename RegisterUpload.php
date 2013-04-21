<html>
<head><title></title>
</head>
<body>
<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
$FirstName = addslashes($_POST["FirstName"]);
$LastName = addslashes($_POST["LastName"]);
$UserName = addslashes($_POST["UserName"]);
$Email = addslashes($_POST["Email"]);
$Pass = addslashes($_POST["Pass"]);
$Pass2 = addslashes($_POST["Pass2"]);
$Phone = addslashes($_POST["Phone"]);
$Country = addslashes($_POST["Country"]);
$Occupation = addslashes($_POST["Occupation"]);
$Organization = addslashes($_POST["Organization"]);
//$Terms = addslashes($_POST["Terms"]);

echo $FirstName."<br>";
echo $LastName."<br>";
echo $UserName."<br>";
echo $Email."<br>";
echo $Pass."<br>";
echo $Pass2."<br>";
echo $Phone."<br>";
echo $Country."<br>";
echo $Occupation."<br>";
echo $Organization."<br>";
//echo $Terms."<br>";

if(!isset($_POST['Terms'])){
	echo"<script>alert('Please!! Accept the terms!!')</script>";
	echo"<script>history.go(-1)</script>";
}

if($Pass == $Pass2 && !empty($Pass) && !empty($FirstName) && !empty($LastName) && !empty($UserName) && !empty($Email) && !empty($Phone) && !empty($Country) && !empty($Occupation) && !empty($Organization))	//valida contraseña, se sean iguales
{
	$Admin = mysql_connect("10.43.7.44" , "GG" , "starlord");
	$bdNEO = mysql_select_db("neo",$Admin);
	$tabla = mysql_query("SELECT * FROM user");
	
	while($row=mysql_fetch_array($tabla)){
		if ($row[1] != $UserName and $row[4] != $Email)
		{
//			echo"Checking Data: "."$row[1]"."  "."$row[4]"."<br>";
			$Finaliza = "si";
		}
		else{
			function error(){
				echo "<script>alert('Username/Mail already in use. Try again with other Username/Mail')</script>";
				echo"<script>history.go(-1)</script>";
			}
			$Finaliza = "no";
			break;
		}
	}
	
	if($Finaliza == "si"){
		/*mysql_query("INSERT INTO user(UserName, FirstName, LastName, Email, Pass, Phone, Country, Occupation, Organization) 
		VALUES (
		'{$_POST["UserName"]}',
		'{$_POST["FirstName"]}',
		'{$_POST["LastName"]}',
		'{$_POST["Email"]}',
		'{$_POST["Pass"]}',
		'{$_POST["Phone"]}',
		'{$_POST["Country"]}',
		'{$_POST["Occupation"]}',
		'{$_POST["Organization"]}')",
		$Admin);*/
		echo "<script>alert('Registration Successful!')</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert('Mail/Username is on Use!')</script>";
		echo"<script>history.go(-1)</script>";
	}
}
else if($Pass != $Pass2){
	echo "<script>alert('Passwords did not match')</script>";
	echo"<script>history.go(-1)</script>";
}
else{
	echo "<script>alert('Fill all the blank spaces please')</script>";
	echo"<script>history.go(-1)</script>";
}
?>

</body> 
</html>