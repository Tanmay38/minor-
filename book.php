<?php
$conn= mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['sub']))
        {   
    
            $name=$_POST['name'];
            $phone = $_POST['phone'];
            $email=$_POST['email']; 
            $add = $_POST['add'];
            $date=$_POST['date'];
    
                    $query =  "INSERT INTO `book`( `Name`, `Phone No`, `Email`, `Address`, `Date`) VALUES ('$name','$phone','$email','$add','$date')";
                    $query_run = mysqli_query($conn,$query);
    
                    if($query_run)
                    {
                        //echo"working";
                        $_SESSION['sucesss']="contact  Added";
                        header("Location: thank.php");
                    }
                    else{
                           // echo"notworking";
                            $_SESSION['status']="contact is not added";
                            header("Location: thank.php");
                        }
        }
        ?>
   