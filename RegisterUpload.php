<html>
<head><title></title>
</head>
<body>
<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
$FirstName = $_POST["FirstName"];
echo ($FirstName)."\n";
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
	$Admin = mysqli_connect("10.43.7.44" , "GG" , "starlord" , "neo");
	mysql_select_db("user", $Admin); 
	$Datos = mysql_query("SELECT FirstName, LastName, UserName, Email FROM user", $Admin); 

	if ($row["FirstName"] != $FirstName and $row["LastName"] != $LastName and $row["UserName"] != $UserName and $row["Email"] != $Email)
	{
		?>
		<script language="javascript">
		alert("Coneccion!")
		</script>
        <?php
		echo("Coneccion!");
//		$NuevoUsuario = mysql_query("INSERT INTO user(UserName,FirstName,LastName,Email,Pass,Phone,Country,Occupation,Organization) VALUES ($UserName,$FirstName,$LastName,$Email,$Pass,$Phone,$Country,$Occupation,$Organization)", $Admin); 
//		header("Location:index.php");
		
	}
	
	else
	{
		?>
		<script language="javascript">
		alert("Dato existente")
		</script>
        <?php
	}
}
else if($Pass != $Pass2){
	?>
    <script language="javascript">
	alert("DON'T Match the Passwords! Try Again!!")
	</script>
    <?php
    }
?>
</body> 
</html>