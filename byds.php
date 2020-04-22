 <?php   
 session_start();  
 $conn = mysqli_connect("localhost", "root", "rootroot", "don");  
 if(isset($_POST["accept"]))  
 {  
      if(isset($_SESSION["suser"]))  
      {  
           $item_array_id = array_column($_SESSION["suser"], "id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["suser"]);  
                $item_array = array(  
                     'id'             =>     $_GET["id"],  
                     'serv_src'           =>     $_POST["ss"],  
                     'serv_dest'          =>     $_POST["sd"],  
                     'serv_date'       =>     $_POST["da"]  
                );  
                $_SESSION["suser"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
               		 'id'             =>     $_GET["id"],  
                     'serv_src'           =>     $_POST["ss"],  
                     'serv_dest'          =>     $_POST["sd"],  
                     'serv_date'       =>     $_POST["da"]  
              				
           );  
           $_SESSION["suser"][0] = $item_array;  
      }  
 }  
  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Donor  By Source</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Donor  By Source</h3><br />  
<form method="POST">
service Dest<input type="text" name="ds"> <br>
<input type="submit" name="search" value=" search!"> <br>

</form></center>
				<?php
if(isset($_POST['search'])){
				
$ds=$_POST['ds'];
				
$query = "SELECT serv_id,id,serv_src,serv_dest,serv_status,serv_date,serv_time FROM service WHERE serv_dest LIKE '%$ds%'";			
                $result = mysqli_query($conn,$query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; padding:16px;" align="center">  
                               <h4 class="text-info">Source <?php echo $row["serv_src"]; ?></h4>  
                               <h4 class="text-danger">Dest <?php echo $row["serv_dest"]; ?></h4>  
                               <h4 class="text-danger">status <?php echo $row["serv_status"]; ?></h4>  
                               <h4 class="text-danger">date <?php echo $row["serv_date"]; ?></h4>  
                               <input type="submit" name="accept" style="margin-top:5px;" class="btn btn-success" value="Accept" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
}}   
                ?>  
                
                 
           </div>  
           <br />  
      </body>  
 </html>