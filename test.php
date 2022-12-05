<?php
include('security.php');
$conn= mysqli_connect("localhost","root","","adminpanel");
            if(isset($_POST['anieditbtn']))
                 {
                    $id=$_POST['id'];
                    $cat =$_POST['edit_cat'];
                    $subcat=$_POST['edit_subcat'];
                    $description=$_POST['edit_description'];
                    $editfilename = $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $folder = "photo/".$editfilename;
                    $del=$_POST['del_image'];
                    
            
                    $sql = "UPDATE `ani` SET `category`='$cat',`subcategory`='$subcat',`description`='$description',`image`='$editfilename'WHERE `id`='$id'";
                    $insertData = mysqli_query($conn,$sql);
            
                    if(move_uploaded_file($tempname ,$folder)) {

                        header("location: animation.php");
                    $_SESSION['status'] = "profile add";
                    $_SESSION['status_code'] = "success";
                   
                  }else{
                     $_SESSION['status'] = "Something wrong!";
                     $_SESSION['status_code'] = "error";
                    header("location: animation.php");
                }

                if( $insertData )
                unlink("photo/".$del);
                header("location:animation.php" );
                 //echo "NO error";
                 }
                else
                {
              header("location:nature.php" );
              echo "error is detected";
              }   
        ?>