<?php
include('security.php');

$conn = mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['del_img']))
    {
    
$id=$_POST['del_id'];
$del=$_POST['del_image'];

$sql= "DELETE FROM con WHERE id=$id";
$result = mysqli_query($conn,$sql);
       if($result)   {
           unlink("cons/".$del);
        header("location:Construction.php" );
        //echo "NO error";
     }
     else
     {
      header("location:Construction.php" );
      echo "error is detected";
    }
        
}



?>