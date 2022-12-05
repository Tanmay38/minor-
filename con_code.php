<?php
include('security.php');
$conn= mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['upd']))
    {   
        $id=$_POST['id'];
        $cat = $_POST['category']; 
        $subcat = $_POST['subcategory'];
        $description = $_POST['description'];
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "cons/".$filename;
       
        $sql ="INSERT INTO `con`(`category`, `subcategory`, `description`, `image`) VALUES ('$cat','$subcat','$description','$filename')";

        $insertData = mysqli_query($conn,$sql);
        if (move_uploaded_file($tempname, $folder))  {
            header("location: Construction.php");
        $_SESSION['status'] = "profile add";
        $_SESSION['status_code'] = "success";
        // echo "location.href='categary.php'";
       
      }else{
         $_SESSION['status'] = "Something wrong!";
         $_SESSION['status_code'] = "error";
        header("location: Construction.php");
    }
}
?>