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

if($Pass == $Pass2 && $Pass!= null)	//valida contraseña, se sean iguales
{
	$Admin = mysql_connect("10.43.7.44" , "GG" , "starlord");
	$bdNEO = mysql_select_db("neo",$Admin);
	$tabla = mysql_query("SELECT * FROM user");
	
	while($row=mysql_fetch_array($tabla)){
		if ($row[1] != $UserName and $row[4] != $Email)
		{
			echo"Checking Data: "."$row[1]"."  "."$row[4]"."<br>";
		}
		else{
			echo "Existing Data"."<br>";
			break;
		}
	}
	echo "Registration Successful";
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
	
	//header("Location:index.php");
	
}
else{
    echo "Passwords didn't match";
    }
?>
</body> 
</html>