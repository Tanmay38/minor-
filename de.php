<?php
include('security.php');
$conn = mysqli_connect("localhost","root","","adminpanel");

$id=$_GET['id'];
$sql= "DELETE FROM book WHERE id=$id";
$result = mysqli_query($conn,$sql);
       if($result)   {
        header("location:bac.php" );
        //echo "NO error";
     }
     else
     {
      header("location:bac.php" );
      echo "error is detected";
    }
?>