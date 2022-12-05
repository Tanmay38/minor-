<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<html>
    <head>
        <title>Profile</title>
<style>
body{
  background-color:#31394D;
}
.color-card{
  background:#31394D;
}

.color-card-2{
  background:#FDFEFF;
}
.title{
  color:#ffffff;
  font-family: roboto;
  weight:300;
}
.title-2{
  color:#2D354A;
  font-family: roboto;
  weight:300;
}
.followers{
  color:#666B7D;
  font-family:10px;
  margin-top:10px;
  font-family: roboto;
  weight:100;
}

.job-title{
  color:#7C8097;
  font-size:12px;
  weight:100;
  font-family:roboto;
}

.desc{
  font-size:12px;
  margin-left: 65px;
  margin-right: 65px;
  color:#B7B8C0;
  text-align:center;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}


.i-l{
  float:left;
  margin-left:16px;
  margin-top:16px;
}
.i-r{
  float:right;
  margin-right:16px;
  margin-top:16px;
}
.w{
   color:#ffffff;
}
.b{
   color:#2F3B4B;
}
hr{
  border-color:#7C8097;
  width:90%;
  margin-top:24px;
  margin-bottom:24px;
}

.hr-2{
  border-color:#E4E8ED;
}


.content{
  display:center;
}

.top{
  /* margin-top:16px; */
}
.color-a{
  background: linear-gradient(to top right, #8162CE, #F54BA5);
}

.color-b{
  background: linear-gradient(to bottom right, #C90A6D, #FF48A0);
}

.color-c{
  background: linear-gradient(to bottom right, #5E5AEC, #3F9EFC);
}
.color-d{
  background: linear-gradient(to bottom right, #6452E9, #639FF9);
}

.btn{
  border:none;
  height:40px;
  color:#ffffff;
  width:35%;
  font-size:16px;
  border-radius:30px;
  box-shadow: 0 13px 26px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.16);
}
.btn:hover{
  border:solid 1px #DA59B1;
  height:40px;
  font-family: Roboto;
  color: #DA59B1;
  background:#ffffff;
  width:35%;
  border-color: linear-gradient(to top right, #8162CE, #F54BA5);;
  border-radius:30px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.16);
}

.circule{
  border-radius:50%;
  border:none;
  height:60px;
  width:60px;
  color:#ffffff;
  box-shadow: 0 13px 26px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.16);
  
  }

.up{
  margin-top:40px;
}

.img{
  width:280px;
}
.container {
	width: 960px;
	margin: 0 auto;
	padding: 0px;
	position: relative;
}

.container:after, .container:before {
	content: " ";
	display: table;
}

.container:after {
	clear: both;
}

.grid-1, .grid-2, .grid-3, .grid-4, .grid-5, .grid-6, .grid-7, .grid-07,  .grid-8, .grid-9, .grid-10, .grid-11, .grid-12, .grid-13, .grid-14, .grid-15, .grid-16, .grid-1-3 {
	float: left ;
	margin-left: 10px;
	margin-right: 10px;
}

.grid-1 	{width: 40px;}
.grid-2 	{width: 100px;}
.grid-3 	{width: 160px;}
.grid-4 	{width: 220px;}
.grid-5 	{width: 280px;}
.grid-6 	{width: 340px;}
.grid-07  {width:375px;}
.grid-7 	{width: 400px;}
.grid-8 	{width: 460px;}
.grid-9 	{width: 520px;}
.grid-10 	{width: 580px;}
.grid-11 	{width: 640px;}
.grid-12 	{width: 700px;}
.grid-13 	{width: 760px;}
.grid-14 	{width: 820px;}
.grid-15 	{width: 880px;}
.grid-16 	{width: 940px;}
.grid-1-3	{width: 300px;}



body {
  background: #e2e1e0;
  text-align: center;
}

.card {
  border-radius: 6px;
  display: inline-block;
  height: 600px;
  /* margin: 1rem;  */
  position: relative;
  width: 1000px;
  box-shadow: 0 12px 13px rgba(0,0,0,0.16), 0 12px 13px rgba(0,0,0,0.16);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-2 {
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

.card-3 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.card-4 {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.15), 0 15px 12px rgba(0,0,0,0.15);
}

.card-6{
  -webkit-box-shadow: 10px 10px 44px 15px rgba(0,0,0,0.14);
-moz-box-shadow: 10px 10px 44px 15px rgba(0,0,0,0.14);
box-shadow: 10px 10px 44px 15px rgba(0,0,0,0.14);
}








.header{
  background: linear-gradient(to bottom right, #F762D2, #FF51A0);
  height:250px;
}


.profile{
  border-radius:100%;
  margin-top:60px;
  width:132px;
  height:128px;
}

.center{
      display: block;
    margin-left: auto;
    margin-right: auto
}

</style>

<body>

<div class="container">
  <div class="grid-10 element-animation">
   <!--card-2-->

  <div class="grid-10 element-animation">
    <div class="card color-card-2">
    <?php
 //echo $id;
 $servername="localhost";
 $username="root";
 $password="";
 $database="adminpanel";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `register` ";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);

?>
<?php
      $connection = mysqli_connect("localhost","root","","adminpanel");

      $query= "SELECT * from register ";
      $query_run = mysqli_query($connection,$query);
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {    
             ?>
      
      <ul>
       <a href="index.php"><li><i class="fas fa-arrow-left i-l b"></i></li></a>
      </ul>
      <?php echo ' <img src="upload/'.$row['images'].'"  alt="profile-pic" class="profile">'?> 

      <h1 class="title-2"><?php echo $row['username']?></h1>
      <p class="job-title"><?php echo $row['email']?></p>
      <div class="desc top">
        <p>Create usable interface and designs @GraphicSpark</p>
      </div>
      <?php
            }
          }
            else
            {
            echo"record not found";
            }
          ?>
      <a href="logout.php"><button class="btn color-a top"> Sign-out</button></a>
      
      

      <hr class="hr-2">
      <div class="container">
        <div class="content">
          <div class="grid-2">
            <button class="color-b circule"> <i class="fab fa-dribbble fa-2x"></i></button>
            <h2 class="title-2">12.3k</h2>
            <p class="followers">Followers</p>
          </div>
          <div class="grid-2">
            <button class="color-c circule"><i class="fab fa-behance fa-2x"></i></button>
            <h2 class="title-2">16k</h2>
            <p class="followers">Followers</p>
          </div>
          <div class="grid-2">
            <button class="color-d circule"><i class="fab fa-github-alt fa-2x"></i></button>
            <h2 class="title-2">17.8k</h2>
            <p class="followers">Followers</p>
          </div>
          <div class="grid-2">
          <a href="https://www.instagram.com/"><img src="instagram.png" height="60px" width="60px"></a>
            <h2 class="title-2">16k</h2>
            <p class="followers">Followers</p>
          </div>
          <div class="grid-2">
          <a href="https://twitter.com/"><img src="twitter.png" height="60px" width="60px"></a>
            <h2 class="title-2">16k</h2>
            <p class="followers">Followers</p>
          </div>
          <div class="grid-2">
          <a href="https://www.facebook.com/"><img src="facebook.png" height="60px" width="60px"></a>
            <h2 class="title-2">16k</h2>
            <p class="followers">Followers</p>
          </div>
          <div class="grid-2">
          <a href="https://www.linkedin.com/"><img src="linkedin.png" height="60px" width="60px"></a>
          <h2 class="title-2">16k</h2>
          <p class="followers">Followers</p>
          </div>
          <div class="grid-2">
          <a href="https://www.yahoo.com/"><img src="yahoo.png" height="60px" width="60px"></a>
          <h2 class="title-2">16k</h2>
          <p class="followers">Followers</p>
          </div>
         
         
         
          
        </div>
      </div>
    </div>
  </div>
</div>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
</body>
</html>


