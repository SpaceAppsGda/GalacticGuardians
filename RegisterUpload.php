<html>
<head><title></title>
</head>
<body>
<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
$FirstName = $_POST["FirstName"];
echo ($FirstName);
$LastName = $_POST["LastName"];
echo $LastName."\n";
$UserName = $_POST["UserName"];
echo $UserName."\n";
$Email = $_POST["Email"];
echo $Email."\n";
$Pass = $_POST["Pass"];
echo ($Pass)."\n";
$Pass2 = $_POST["Pass2"];
echo ($Pass2)."\n";
$Phone = $_POST["Phone"];
echo $Phone."\n";
$Country = $_POST["Country"];
echo $Country."\n";
$Occupation = $_POST["Occupation"];
echo ($Occupation)."\n";
$Organization = $_POST["Organization"];
echo $Organization."\n";
echo ("LOL")."\n";
echo $Occupation."\n";

if($Pass == $Pass2)	//valida contraseña, se sean iguales
{
	$Admin = mysql_connect("10.43.7.44" , "GG" , "starlord");
	$bdNEO = mysql_select_db("neo",$Admin)
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