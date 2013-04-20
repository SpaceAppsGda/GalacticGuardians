<html>
<head><title></title>
</head>
<body>
hi
<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
$FirstName = "asdasdasd prueba!!";
$FirstName = !isset($_POST["FirstName"]);
echo $FirstName."\n";
$LastName = !isset($_POST["LastName"]);
echo $LastName."\n";
$UserName = !isset($_POST["UserName"]);
echo $UserName."\n";
$Email = !isset($_POST["Email"]);
echo $Email."\n";
$Pass = !isset($_POST["Pass"]);
echo ($Pass)."\n";
$Pass2 = !isset($_POST["Pass2"]);
echo ($Pass2)."\n";
$Phone = !isset($_POST["Phone"]);
echo $Phone."\n";
$Country = !isset($_POST["Country"]);
echo $Country."\n";
$Occupation = !isset($_POST["Occupation"]);
echo $Occupation."\n";
$Organization = !isset($_POST["Organization"]);
echo $Organization."\n";
echo"LOL"."\n";
echo $Occupation."\n";

if(Pass == Pass2){	//valida contraseña, se sean iguales
	$Admin = mysqli_connect("10.43.7.44" , "GG" , "starlord" , "neo");
	mysql_select_db("user", $Admin); 
	$Datos = mysql_query("SELECT FirstName, LastName, UserName, Email FROM user", $Admin); 

	if ($row["FirsName"] != $FirstName and $row["LastName"] != $LastName and $row["UserName"] != $UserName and $row["Email"] != $Email)
	{
		echo "Coneccion!";
		//$NuevoUsuario = mysql_query("INSERT INTO user(UserName,FirstName,LastName,Email,Pass,Phone,Country,Occupation,Organization) VALUES ($UserName,$FirstName,$LastName,$Email,$Pass,$Phone,$Country,$Occupation,$Organization)", $Admin); 
	}
	
	else{
		?>
		<script language="javascript">
		alert("Dato eXistente");
		</script>
        <?php
	}
}
else{
	?>
    <script language="javascript">
	alert("DON'T Match the Passwords! Try Again!!");
	</script>
    <?php
    }
?>
</body> 
</html>