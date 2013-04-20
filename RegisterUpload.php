<?php //Upload data into database table 'User'
	//Obtain variables from Register page
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$UserName=$_POST["UserName"];
$Email=$_POST["Email"];
$Pass=$_POST["Pass"];
$Pass2=$_POST["Pass2"];
$Phone=$_POST["Phone"];
$Country=$_POST["Country"];
$Organization=$_POST["Occupation"];
$Organization=$_POST["Organization"];

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
/*	if(){
	
	}
	else{
		//Go to index once the registration is successsful
		header('Location: index.php');
	}
*/
?>
<?php 
$link = mysql_connect("localhost", "nobody"); 
mysql_select_db("mydb", $link); 
$result = mysql_query("SELECT nombre, email FROM agenda", $link); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n"; 
   do { 
      echo "<tr><td>".$row["nombre"]."</td><td>".$row["email"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 
  
</body> 
</html>