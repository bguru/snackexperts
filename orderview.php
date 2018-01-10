<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'snackexperts'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

error_reporting(E_ERROR | E_PARSE);

?>

<span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;font-size: small"><span style="line-height: 19px"> </span></span>
 <html>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
 
<style type="text/css">
    #header {
   padding:10px;
}

</style>

 <body>

     <form name="frmdropdown" method="post" action="">
     <center>
            <h2 align="center">ORDER DETAILS</h2>
         <br>
            <strong> Select Date Range </strong> 
            <br>
            <br>
<p>From Date: <input type="text" id="datepicker" name="datepicker"></p>
<p>To Date: &nbsp;<input type="text" id="datepicker2" name="datepicker2"></p>
<br>
    <!-- <input type="submit" name="find" value="View Details"/> -->
     
<button onClick="toggle_div('sectiontohide');">View Details</button>
<script type="text/javascript">
window.onload = function () 
{
    toggle_div("sectiontohide");
};
</script>
     <br><br>
            
  <div id="sectiontohide">
   <table border="1">
 <tr align="center">
    <th>S. No</th> <th>Date </th>      <th>Product Name </th>     <th>Product Quantity</th>
 </tr> 
 
 <?php

 $datepicker = $_POST['datepicker']; 
 $datepicker2 = $_POST['datepicker2']; 


  if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["datepicker"]; 
         if($des=="")
         { 
             $res=mysql_query("Select * from orderdetails");
         }
         else
         { 
            //echo "$datepicker";

             $res=mysql_query("SELECT * FROM `orderdetails` WHERE Date BETWEEN '$datepicker' AND '$datepicker2'");
         }
  
         echo "<tr><td colspan='4'></td></tr>";
         while($r=mysql_fetch_row($res))
         {
                 echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td width='200'>$r[1]</td>";
                 echo "<td width='100' align='center'>$r[2]</td>";
                 echo "<td alig='center' width='40'> $r[3]</td>";
                 echo "</tr>";
        }
    }
?>
  </table>
  </div>
 </center>
</form>
<div id="header">
<center><a href="index.php">Home</a> &nbsp;<a href="logout.php">Log Out</a></div></center>
</body>
</html>
