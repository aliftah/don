<html>
<head> <title> Applicant Registration</title>
<link rel="stylesheet" type="text/css" href="../s.css">
<!-- <script src="s.js"></script>-->
 </head>
<Body>
<center><img src="../../pic/don2.png" alt="logo " height="150" width="1200">
</center>
<?php include'../menu/signupmenu.html';?>
<center>
Applicant Registration

<form method="POST">
Applicant Id<input type="text" name="id" disabled> <br>
Applicant Name<input type="text" name="na"> <br>
Applicant User Name<input type="text" name="us"> <br>
Applicant Password<input type="text" name="pa"> <br>
Applicant Address<input type="text" name="ad"> <br>
Applicant Mobile<input type="text" name="mb"> <br>
Applicant job<input type="text" name="jb"> <br>
Applicant work address<input type="text" name="wad"> <br>
Applicant serv_account<input type="text" name="sac"> <br>
<input type="submit" name="add" value="Sign up!"> <br>

</form></center></body></html>
<?php
include"../conn.php";
if(isset($_POST['add'])){
$na=$_POST['na'];
$us=$_POST['us'];
$pa=$_POST['pa'];
$ad=$_POST['ad'];
$mb=$_POST['mb'];
$jb=$_POST['jb'];
$wad=$_POST['wad'];
$ty='3'; 
$sac=$_POST['sac'];
$sql = "INSERT INTO info(name,user,pass,addr,mob,job,jobaddr,type,count)
VALUES ('$na','$us','$pa','$ad','$mb','$jb','$wad',$ty,'$sac')";
$do=mysqli_query($conn,$sql);
if($do)echo 'ok';
else echo mysqli_error($conn);}
?>

