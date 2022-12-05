<?php
include('security.php');
$conn= mysqli_connect("localhost","root","","adminpanel");
            if(isset($_POST['natureditbtn']))
                 {
                    $id=$_POST['id'];
                    $cat =$_POST['edit_cat'];
                    $subcat=$_POST['edit_subcat'];
                    $description=$_POST['edit_description'];
                    $editfilename = $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $folder = "imagess/".$editfilename;
                    $del=$_POST['del_image'];
                    
            
                    $sql = "UPDATE `nature` SET `category`='$cat',`subcategory`='$subcat',`description`='$description',`photo`='$editfilename'WHERE `id`='$id'";
                    $insertData = mysqli_query($conn,$sql);
            
                    if(move_uploaded_file($tempname ,$folder)) {

                        header("location: nature.php");
                    $_SESSION['status'] = "profile add";
                    $_SESSION['status_code'] = "success";
                   
                  }else{
                     $_SESSION['status'] = "Something wrong!";
                     $_SESSION['status_code'] = "error";
                    header("location: nature.php");
                }

                if( $insertData )
                unlink("imagess/".$del);
                header("location:nature.php" );
                 //echo "NO error";
                 }
                else
                {
              header("location:nature.php" );
              echo "error is detected";
              }   
        ?>