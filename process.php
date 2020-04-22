<?php
session_start();
$_SESSION['suser']=$_POST['tu'];
if(empty($_POST['tu']) || empty($_POST['tp'])) {
	echo "Please fill all fields";
} else { 
include"files/conn.php";
$sql="SELECT * FROM info WHERE `user` = '"
    .$_POST['tu']."' AND `pass` = '".$_POST['tp']."' ";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);
if ($result==0){
	echo "There is an error in the username or password";
} else {
  If($result[8]==1)
  header("Location: admin.php");	
  elseIf($result[8]==2)
  header("Location: donor.php");	
  elseIf($result[8]==3)
  header("Location: app.php");	
  else 
	  echo"unknown role";
       }// else in line 12
 }// else in line 4
?>








