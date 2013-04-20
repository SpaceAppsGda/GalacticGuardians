<html>
<head><title></title>
</head>
<body>
<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
$FirstName = "asdasdasd prueba!!";
$FirstName = $_POST["FirstName"];
printf ($FirstName);
echo ($FirstName);
$LastName = $_POST["LastName"];
echo $LastName;
$UserName = $_POST["UserName"];
echo $UserName;
$Email = $_POST["Email"];
echo $Email;
$Pass = $_POST["Pass"];
echo ($Pass);
$Pass2 = $_POST["Pass2"];
echo ($Pass2);
$Phone = $_POST["Phone"];
echo $Phone;
$Country = $_POST["Country"];
echo $Country;
$Occupation = $_POST["Occupation"];
echo ($Occupation);
$Organization = $_POST["Organization"];
echo $Organization;
echo ("LOL");
echo $Occupation;

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