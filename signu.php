<!DOCTYPE html>
<html>

<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'snackexperts'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$fullname = $_POST['name']; 
$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 

SignUp(); 

function NewUser() 
{ 
$fullname = $_POST['name']; 
$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 
$cpass = $_POST['cpass'];

$query = "INSERT INTO usercreate (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) 
{	
echo "YOUR NEW ACCOUNT IS CREATED...";
}
} 

function SignUp() 
{ 
$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 
$result = mysql_query("SELECT * FROM usercreate WHERE userName = '$userName' AND pass = '$password'") or die(mysql_error()); 
if(@mysql_num_rows($result) ==1) 
{ 
echo "SORRY...YOU ARE A REGISTERED USER..."; 
} 
else 
{ 
NewUser(); 
} 
} 
?> 

<head>
	<title>Account</title>
</head>
<body>
<br>
<br>
<a href="index.php">Click here </a>to Login using your new account
</center>
</body>
</html>