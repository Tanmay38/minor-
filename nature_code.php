<?php
include('security.php');
$conn= mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['upload']))
    {   
        $id=$_POST['id'];
        $cat = $_POST['category']; 
        $subcat = $_POST['subcategory'];
        $description = $_POST['description'];
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "imagess/".$filename;
       
        $sql ="INSERT INTO `nature`(`category`, `subcategory`, `description`, `photo`) VALUES ('$cat','$subcat','$description','$filename')";

        $insertData = mysqli_query($conn,$sql);
        if (move_uploaded_file($tempname, $folder))  {
            header("location: nature.php");
        $_SESSION['status'] = "profile add";
        $_SESSION['status_code'] = "success";
        echo "location.href='categary.php'";
       
      }else{
         $_SESSION['status'] = "Something wrong!";
         $_SESSION['status_code'] = "error";
        header("location: nature.php");
    }
}


        
//             $conn= mysqli_connect("localhost","root","","adminpanel");
//             if(isset($_POST['natureditbtn']))
//                  {
//                     $id=$_POST['id'];
//                     $cat =$_POST['edit_cat'];
//                     $subcat=$_POST['edit_subcat'];
//                     $description=$_POST['edit_description'];
//                     $filename = $_FILES["image"]["name"];
//                     $tempname = $_FILES["image"]["tmp_name"];
//                     $folder = "upload/".$filename;
            
//                     $sql = "UPDATE `nature` SET `category`='$cat',`subcategory`='$subcat',`description`='$description',`photo`='$filename'WHERE `id`='$id'";
//                     $insertData = mysqli_query($conn,$sql);
            
//                     if (move_uploaded_file($tempname, $folder))  {
//                         header("location: nature.php");
//                     $_SESSION['status'] = "profile add";
//                     $_SESSION['status_code'] = "success";
//                     echo "location.href='categary.php'";
                   
//                   }else{
//                      $_SESSION['status'] = "Something wrong!";
//                      $_SESSION['status_code'] = "error";
//                     header("location: nature.php");
//                 }
//             }
//         }
               
// ?>