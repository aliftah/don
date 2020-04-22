<?php session_start();?>
<html>
<head> <title>Donor Page</title>
<link rel="stylesheet" type="text/css" href="files/s.css">
<!-- <script src="s.js"></script>-->
 

 </head>
<body>  
<?php include'files/logo.html';?>
<?php include'files/menu/donormenu.html';?>
<?php
echo "welcome ".$_SESSION['suser']."<br>";
?>
<center>

<?php include'files/slider.html';?>

</center>   </body>    </html>


