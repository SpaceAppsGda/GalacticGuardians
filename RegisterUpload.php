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
echo $FirstName;
echo $LastName;
echo $UserName;
echo $Email;
echo $Pass;
echo $Pass2;
echo $Phone;
echo $Country;
echo ($Occupation);
echo $Organization;

if($Pass == $Pass2)	//valida contraseña, se sean iguales
{
	$Admin = mysql_connect("10.43.7.44" , "GG" , "starlord");
	$bdNEO = mysql_select_db("neo",$Admin);
	$tabla = mysql_query("SELECT * FROM user");
	
	while($row=mysql_fetch_array($tabla)){
		if ($row[1] != $UserName and $row[4] != $Email)
		{
			echo("Coneccion!");
//			$NuevoUsuario = mysql_query("INSERT INTO user(UserName,FirstName,LastName,Email,Pass,Phone,Country,Occupation,Organization) VALUES ($UserName,$FirstName,$LastName,$Email,$Pass,$Phone,$Country,$Occupation,$Organization)", $Admin); 
//			header("Location:index.php");
		}
		else{
			echo "Existing Data";
			break;
		}
	}
}
else{
    echo "Passwords didn't match";
    }
?>
</body> 
</html>