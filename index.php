<?php
   include("config.php");
   session_start();
   $msg = " ";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = mysqli_real_escape_string($db,$_POST['userName']);
    $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT userName FROM usercreate WHERE userName = '$userName' and pass = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
           if($count == 1) {
       $_SESSION['userName'] = $userName;
         header("Location: welcome.php");
      }else 
      {
$msg = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Welcome to Snack Experts</title>
</head>
<style type="text/css">
	#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   
}

</style>
<body>
<center>
<h1>Welcome to Snack Experts</h1>

<div>
	Login
<br>
	<form action="" method="post">

	User ID : <input type="text" placeholder="Enter User ID" name="userName" required>
	<br>
	Password :<input type="password" placeholder="Enter Password" name="password" required>
	<br>
	<div>
	<input type="submit" name="submit">
	</div>
   <?php echo $msg; ?>
	<br><br>
   New User?
   
<a href="signup.php">Click here</a>
	</form>
</div>


<div id="footer">
<div><a href="index.php">Home</a>&nbsp; &nbsp;<a href="contact.php">Contact Us</a></div>

 <?php
 $handle = fopen("counter.txt", "r");
if(!$handle){
 echo "could not open the file" ;
}
else 
  {
  $counter = ( int ) fread ($handle,20) ;
  fclose ($handle) ;
  $counter++ ;
  echo"  Website Total Visits :".  $counter . "  " ;
  $handle =  fopen("counter.txt", "w" ) ;
  fwrite($handle,$counter) ;
  fclose ($handle) ;
  }
?>
</div>
</center>

</body>
</html>