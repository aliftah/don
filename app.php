<?php session_start();?>

<html>
<head> <title>Applicant Page</title>
<link rel="stylesheet" type="text/css" href="files/s.css">
<!-- <script src="s.js"></script>-->
 

 </head>
<body>  
<?php include'files/logo.html';?>
<?php include'files/menu/appmenu.html';?>
<?php
echo "welcome ".$_SESSION['suser']."<br>";
?>
<center>

<?php include'files/slider.html';?>

</center>   </body>    </html>


