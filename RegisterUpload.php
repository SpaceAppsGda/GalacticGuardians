<?php 
//Upload data into database table 'User'
//Obtain variables from Register page
if(isset($_POST['submit'])){
$FirstName = addslashes($_POST["FirstName"]);
$LastName = addslashes($_POST["LastName"]);
$UserName = addslashes($_POST["UserName"]);
$Email = addslashes($_POST["Email"]);
$Pass = addslashes($_POST["Pass"]);
$Pass2 = addslashes($_POST["Pass2"]);
$Phone = addslashes($_POST["Phone"]);
$Country = addslashes($_POST["Country"]);
$Occupation = addslashes($_POST["Occupation"]);
$Organization = addslashes($_POST["Organization"]);

/*echo $FirstName."<br>";
echo $LastName."<br>";
echo $UserName."<br>";
echo $Email."<br>";
echo $Pass."<br>";
echo $Pass2."<br>";
echo $Phone."<br>";
echo $Country."<br>";
echo $Occupation."<br>";
echo $Organization."<br>";
*/
if(!isset($_POST['Terms'])){
	echo"<script>alert('Please!! Accept the terms!!')</script>";
	echo"<script>history.go(-1)</script>";
}
$Admin = mysql_connect("10.43.7.44" , "GG" , "starlord") or die (mysql_error());
mysql_select_db("neo");

$tabla = mysql_query("SELECT * FROM user") or die (mysql_error());

if($Pass == $Pass2 && !empty($Pass) && !empty($FirstName) && !empty($LastName) && !empty($UserName) && !empty($Email) && !empty($Phone) && !empty($Country) && !empty($Occupation) && !empty($Organization))	//valida contraseña, se sean iguales
{

	
	while($row=mysql_fetch_array($tabla)){
		if ($row[1] != $UserName and $row[4] != $Email)
		{
			echo"Checking Data: "."$row[1]"."  "."$row[4]"."<br>";
			$Finaliza = "si";
		}
		else{
			function error(){
				echo "Username/Mail already in use. Try again with other Username/Mail";
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
		$IDquery=mysql_query("SELECT ID FROM user WHERE username='$user'") or die (mysql_error());
		$ID=mysql_fetch_array($IDquery);
		header("Location:index.php?session=1&ID=".$ID[0]);
	}
	else{
		echo "Username/Mail already in use. Try again with other Username/Mail";
		echo"<script>history.go(-1)</script>";
	}
}

else if($Pass != $Pass2){
	echo "<font color='red'>Passwords did not match</font>";
}
else{
	echo "<script>alert('Fill all the blank spaces please')</script>";
}
}
?>
