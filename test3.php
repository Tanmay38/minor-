<?php
include('security.php');
$conn= mysqli_connect("localhost","root","","adminpanel");
            if(isset($_POST['coneditbtn']))
                 {
                    $id=$_POST['id'];
                    $cat =$_POST['edit_cat'];
                    $subcat=$_POST['edit_subcat'];
                    $description=$_POST['edit_description'];
                    $editfilename = $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $folder = "cons/".$editfilename;
                    $del=$_POST['del_image'];
                    
            
                    $sql = "UPDATE `con` SET `category`='$cat',`subcategory`='$subcat',`description`='$description',`image`='$editfilename'WHERE `id`='$id'";
                    $insertData = mysqli_query($conn,$sql);
            
                    if(move_uploaded_file($tempname ,$folder)) {

                        header("location: Constructio.php");
                    $_SESSION['status'] = "profile add";
                    $_SESSION['status_code'] = "success";
                   
                  }else{
                     $_SESSION['status'] = "Something wrong!";
                     $_SESSION['status_code'] = "error";
                    header("location: Construction.php");
                }

                if( $insertData )
                unlink("cons/".$del);
                header("location:Construction.php" );
                 //echo "NO error";
                 }
                else
                {
              header("location:construction.php" );
              echo "error is detected";
              }   
        ?>