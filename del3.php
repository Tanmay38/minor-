<?php
include('security.php');

$conn = mysqli_connect("localhost","root","","adminpanel");

$id=$_GET['id'];
$sql= "DELETE FROM nature WHERE id=$id";
$result = mysqli_query($conn,$sql);
       if($result)   {
        header("location:nature.php" );
        //echo "NO error";
     }
     else
     {
      header("location:nature.php" );
      echo "error is detected";
    }



?>