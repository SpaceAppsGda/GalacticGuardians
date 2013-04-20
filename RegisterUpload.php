<html>
<head><title></title>
</head>
<body>
hi
<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
echo"asdasd";
$FirstName = $_POST["FirstName"];
echo"Nombre";
$LastName = $_POST["LastName"];
echo"apellido";
$UserName = $_POST["UserName"];
echo"use";
$Email = $_POST["Email"];
echo"em";
$Pass = $_POST["Pass"];
echo"pas1";
$Pass2 = $_POST["Pass2"];
echo"pas2";
$Phone = $_POST["Phone"];
echo"pho";
$Country = $_POST["Country"];
echo"Coun";
$Occupation = $_POST["Occupation"];
echo"Occ";
$Organization = $_POST["Organization"];
echo"ORg";

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