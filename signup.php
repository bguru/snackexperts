<!DOCTYPE HTML>
 <html>
 <head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <title>Sign-Up</title>
 </head>
 <body id="bodycolor" background="image.png"> 
 <div id="Signup"> 
 <div id="header">
 <img src="sncakexperts.jpg" width="1350" height="300"  alt="Welcome to Sncakexperts"" />
 </div>
 <fieldset style="width:30%">
 <center>
 <legend>Registration Form</legend> 
 <table border="0" align="center">
 <tr> 
 <form method="post" action="signu.php"> 
 <td>Name</td>
 <td> <input type="text" placeholder="Enter Name" name="name" required></td> 
 </tr>
 <tr>
 <td>Email</td>
 <td> <input type="email" placeholder="Enter Email" name="email" required></td> 
 </tr> 
 <tr>
 <td>UserName</td>
 <td> <input type="text" placeholder="Enter User ID" name="user" id="name" required></td> 
 </tr> 
 <tr> 
 <td>Password</td>
 <td> <input type="password" placeholder="Enter Password" name="pass" id="pass" required></td>
 </tr> 
 <tr> 
 <td>Confirm Password </td>
 <td><input type="password" placeholder="Confirm Password" name="cpass" id="cpass" required></td>
 </tr> 
 <tr> 
 <td><input id="button" type="submit" name="submit" value="Create account" id="submit"></td>
 </tr>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    var password = document.getElementById("pass"),confirm_password = document.getElementById("cpass");

function validatePassword()
{
  if(password.value != confirm_password.value) 
  {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } 
  else 
  {
    confirm_password.setCustomValidity('You are not authorised');
  }
}

pass.onchange = validatePassword;
cpass.onkeyup = validatePassword;
</script>
 </form>
 </table> 
 </center>
 </fieldset>
 </div> 
 </body> 
 </html>

