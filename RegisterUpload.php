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
<<<<<<< HEAD
$hola = "";
$Hola2 = empty($hola);
echo $Hola2;/*
if($Pass == $Pass2 && (!empty($Pass)) && !is_null($FirstName) && !is_null($LastName) && !is_null($UserName) && !is_null($Email) && !is_null($Phone) && !is_null($Country) && !is_null($Occupation) && !is_null($Organization))	//valida contraseña, se sean iguales
=======

if($Pass == $Pass2 && !empty($Pass) && !empty($FirstName) && !empty($LastName) && !empty($UserName) && !empty($Email) && !empty($Phone) && !empty($Country) && !empty($Occupation) && !empty($Organization))	//valida contraseña, se sean iguales
>>>>>>> 8dbbdd90b699478e68ba72b16a79b32bcddb6abd
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
<<<<<<< HEAD
/*		mysql_query("INSERT INTO user(UserName, FirstName, LastName, Email, Pass, Phone, Country, Occupation, Organization) 
=======
		/*mysql_query("INSERT INTO user(UserName, FirstName, LastName, Email, Pass, Phone, Country, Occupation, Organization) 
>>>>>>> 8dbbdd90b699478e68ba72b16a79b32bcddb6abd
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
<<<<<<< HEAD
		$Admin);
*		echo "<script>alert('Registration Successful!')</script>";
=======
		$Admin);*/
		echo "<script>alert('Registration Successful!')</script>";
>>>>>>> 8dbbdd90b699478e68ba72b16a79b32bcddb6abd
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
*/
?>

</body> 
</html>