<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Welcome</title>
</head>
<body>
<center>
<h1>Welcome to your account <?php echo $login_session; ?></h1>

<br>
<a href="orderview.php">Click here </a>to view your order details <br>
<br>
<a href="logout.php">Logout</a>
</center>
</body>
</html>