<?php
include('security.php');

$conn = mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['del_img']))
    {
    
$id=$_POST['del_id'];
$del=$_POST['del_image'];

$sql= "DELETE FROM nature WHERE id=$id";
$result = mysqli_query($conn,$sql);
       if($result)   {
           unlink("imagess/".$del);
        header("location:nature.php" );
        //echo "NO error";
     }
     else
     {
      header("location:nature.php" );
      echo "error is detected";
    }
        
}



?>