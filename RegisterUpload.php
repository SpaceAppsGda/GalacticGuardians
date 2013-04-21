<html>
<head><title></title>
</head>
<body>
<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$UserName = $_POST["UserName"];
$Email = $_POST["Email"];
$Pass = $_POST["Pass"];
$Pass2 = $_POST["Pass2"];
$Phone = $_POST["Phone"];
$Country = $_POST["Country"];
$Occupation = $_POST["Occupation"];
$Organization = $_POST["Organization"];
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

if($Pass == $Pass2 && !is_null($Pass) && !is_null($FirstName) && !is_null($LastName) && !is_null($UserName) && !is_null($Email) && !is_null($Phone) && !is_null($Country) && !is_null($Occupation) && !is_null($Organization))	//valida contraseña, se sean iguales
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
				echo "<script>alert('Existing Data! try again with other Username/Mail')</script>";
				echo"<script>history.go(-1)</script>";
			}
			$Finaliza = "no";
			break;
		}
	}
	
	if($Finaliza == "si"){
		mysql_query("INSERT INTO user(UserName, FirstName, LastName, Email, Pass, Phone, Country, Occupation, Organization) 
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
		$Admin);
		echo "<script>alert('Registration Successful!')</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert('PassWord/Username it is on Use!')</script>";
		echo"<script>history.go(-1)</script>";
	}
}
else if($Pass != $Pass2){
	echo "<script>alert('Passwords did not match')</script>";
	echo"<script>history.go(-1)</script>";
}
else{
	echo "<script>alert('Fill all the Spaces Pleas!')</script>";
	echo"<script>history.go(-1)</script>";
}
?>

</body> 
</html>