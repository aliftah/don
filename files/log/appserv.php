<html>
<head> <title> Applicant Registration</title>
<link rel="stylesheet" type="text/css" href="../s.css">
<!-- <script src="s.js"></script>-->
 </head>
<Body>
<center><img src="../../pic/don2.png" alt="logo " height="150" width="1200">
</center>
<?php include'../menu/appmenu.html';?>
<center>
Applicant Registration

<form method="POST">
service Id<input type="text" name="sid" disabled> <br>
Applicant Id<input type="text" name="id"> <br>
service Source<input type="text" name="ss"> <br>
service Destaination<input type="text" name="sd"> <br>
service status<input type="text" name="st"> <br>
service Date<input type="date" name="da"> <br>
service Time<input type="time" name="ti"> <br>
<input type="submit" name="add" value="Sign up!"> <br>

</form></center></body></html>
<?php
include"../conn.php";
if(isset($_POST['add'])){
$id=$_POST['id'];
$ss=$_POST['ss'];
$sd=$_POST['sd'];
$st=$_POST['st'];
$da=$_POST['da'];
$ti=$_POST['ti'];
$sql = "INSERT INTO service(id,serv_src,serv_dest,serv_status,serv_date,serv_time) 
VALUES ('$id','$ss','$sd','$st','$da','$ti')";
$do=mysqli_query($conn,$sql);
if($do)echo 'ok';
else echo mysqli_error($conn);}
?>

