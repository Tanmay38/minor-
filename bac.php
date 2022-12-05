<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Book Detail
           
    </h6>
  </div>

  <div class="card-body">

    <?php
      if(isset($_SESSION['sucesss']) && $_SESSION['sucesss']!='')
        {
        echo '<h2>'.$_SESSION['sucesss'].'</h2>';
        unset($_SESSION['sucesss']);
        }

      
      if(isset($_SESSION['status']) && $_SESSION['status']!='')
        {
        echo '<h2 class="bg-info>'.$_SESSION['status'].'<h2>';
        unset($_SESSION['status']);
        }
      ?>
    <div class="table-responsive">
      <?php
      $connection = mysqli_connect("localhost","root","","adminpanel");

      $query= "SELECT * from book ";
      $query_run = mysqli_query($connection,$query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th> name </th>
            <th>phone </th>
            <th> email</th>
            <th>add</th>
            <th>date</th>
            <th>Save </th>
            <th>Delete </th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {    
             ?>
          <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['Name'];?></td>
          <td><?php echo $row['Phone No'];?></td>
          <td><?php echo $row['Email'];?></td>
          <td><?php echo $row['Address'];?></td>
          <td><?php echo $row['Date'];?></td>
 

          <td>
          <a href="bac.php"><button  type="button" class="btn btn-primary">Save</button></a>
          </td>
          <td>
          <a href="de.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-danger">Delete</button></a>
          </td>
          </tr>
          <?php
            }
          }
            else
            {
            echo"record not found";
            }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>