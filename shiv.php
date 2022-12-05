<!doctype>
<html>
    <head>
        <title>Sports</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>        
        <style>

            .for{
                background:#FFE5B4;
            }
            /* Slider
http://www.freshdesignweb.com/fashion-responsive-slider-tutorial.html
*/
/* Slider
/*-----------------------------------------------------------------------------------*/
.slider_container{ width:920px; margin:auto; clear:both; background:url(images/shadow_top.png) no-repeat top center; padding:30px 0 0 0;}
.flex-caption{ position: absolute; right:11px; bottom:20px;}
.caption_title_line{ width:450px; height:75px; padding:5px 15px 10px 15px;background:url(images/slider_caption_bg.png) repeat;color: #303030;}
.flex-caption h2{ color:#303030;font-size:20px; padding:5px 0 5px 0; margin:0px;font-family: 'Ovo', serif;}

.flex-container a:active,
.flexslider a:active {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;} 

/* FlexSlider Necessary Styles
*********************************/ 
.flexslider {width:100%; margin: 0; padding: 0 0 30px 0;background:url(images/shadow_bottom.png) no-repeat center bottom;}
.flexslider .slides > li {display: none;} /* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides img {max-width: 100%; display: block; border:10px #ededed solid;}
.flex-pauseplay span {text-transform: capitalize;}
.slides:after {content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;} 
html[xmlns] .slides {display: block;} 
* html .slides {height: 1%;}
.no-js .slides > li:first-child {display: block;}
.flexslider {position: relative; zoom: 1;}
.flexslider .slides {zoom: 1;}
.flexslider .slides > li {position: relative;}
.flex-container {zoom: 1; position: relative;}

/* Direction Nav */
.flex-direction-nav li a {width:45px; height:42px; margin:0; display: block; position: absolute; right:11px; cursor: pointer; text-indent: -9999px;}
.flex-direction-nav li a.next {background:url(images/next.png) no-repeat center; bottom:184px;}
.flex-direction-nav li a.prev {background:url(images/prev.png) no-repeat center;bottom:141px;}
.flex-direction-nav li a.next:hover {background:url(images/next_a.png) no-repeat center;}
.flex-direction-nav li a.prev:hover {background:url(images/prev_a.png) no-repeat center;}
.flex-direction-nav li a.disabled {opacity: .3; filter:alpha(opacity=30); cursor: default;}

/* Control Nav */
.flex-control-nav {width: 100%; position: absolute; bottom: -30px; text-align: center;}
.flex-control-nav li {margin: 0 0 0 5px; display: inline-block; zoom: 1; *display: inline;}
.flex-control-nav li:first-child {margin: 0;}
.flex-control-nav li a {width: 13px; height: 13px; display: block; cursor: pointer; text-indent: -9999px;}
.flex-control-nav li a:hover {background-position: 0 -13px;}
.flex-control-nav li a.active {background-position: 0 -26px; cursor: default;}

/* Media Queries
/*-----------------------------------------------------------------------------------*/

@media screen and (max-width: 1000px) {
.slider_container{ width:90%; margin:0 0 0 2%; clear:both; background:none; padding:30px 0 0 0;}
.flexslider {width: 100%; margin: 0; padding:0 0 30px 0;background:none;}
.flex-direction-nav li a {width:45px; height:42px; margin:0; display: block; position: absolute; right:-10px; cursor: pointer; text-indent: -9999px;}
.flex-direction-nav li a.next {background:url(images/next.png) no-repeat center; bottom:85px;}
.flex-direction-nav li a.prev {background:url(images/prev.png) no-repeat center;bottom:40px;}
.flex-caption { display:none;}
}


            .wrapper {
    padding: 0 25px;
    width: 700px;
    border: 1px solid #666;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    border-top: 3px solid #3c8dbc;
    margin-top:80px;
    display:inline-block;
    margin-left:40px;
    background-color:#FFFFCC;
    margin-bottom:100px;
}

form {
margin: 30px 0;
}

.form-label {
    float: left;
    width: 150px;
}

.form-row {
    margin: 12px 0;
}

.form-field {}

input,
textarea,
select {
    width: 500px;
    height: 28px;
    border: 1px solid #d2d6de;
    padding: 2px 8px;
}

textarea {
    height: 50px;
}

input[type=radio],
input[type=checkbox] {
    width: 20px;
    color: red;
    height: 14px;
}

input[type=submit],
input[type=reset] {
    width: 100px;
    margin-right: 50px;
    background-color: #3c8dbc;
    border-color: #367fa9;
    color: #ffffff;
    cursor: pointer;
}
input[type=submit]:hover,
input[type=reset]:hover {
    background-color: #367fa8;
}


.form-field:after {
    content: '';
    display: block;
    clear: both;
}
        </style>
    </head>
<body>
    <div class="main">
        <h1>MY WEBSITE FOR SPORTS</h1>
        <h5>WEB DESIGN FOR SPORT EQUIPMENT</h5>
        <div class="b1"> 
        <button style="background:none; border: none;" onclick="login">LOGIN</button>
        </div>
        <div class="b2"><button style="background:none; border: none;" onclick="register">REGISTER</button>
        </div>

    </div>
        <div class="one">
            <ul>
                <li><a style="color:white;" href="shiv.html">HOME</a></li>
                <li><a style="color:white;" href="about.html">ABOUT</a></li>
                <li><a style="color:white;" href="contact.html">CONTACT</a></li>
                <li><a style="color:white;" href="blog.html">BLOG</a></li>
                <li><a style="color:white;" href="article.html">ARTICLE</a></li>
            </ul>
        </div>
        <div class=for>
        <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Bodycon Dresses</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
    </div>  
</div>
</div>
      
<div class="continer">
       <div class="three"> <h1>Sport</h1>
        <p>Sport pertains to any form of competitive physical activity or game that aims to use, maintain, or improve physical ability and skills while providing enjoyment to participants and, in some cases, entertainment to spectators. Sports can, through casual or organized participation, improve one's physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, simultaneously or consecutively, with one winner; in others, the contest (a match) is between two sides, each attempting to exceed the other. Some sports allow a "tie" or "draw", in which there is no single winner; others provide tie-breaking methods to ensure one winner and one loser. A number of contests may be arranged in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by playoffs.</p>
       </div>
        <div class="four"><h1> SportAccord uses the following criteria, determining that a sport </h1>
           <p>have an element of competition</p>  
            <p>be in no way harmful to any living creature</p>
            <p>not rely on equipment provided by a single supplier (excluding proprietary games such as arena football)</p>
            <p>not rely on any "luck" element specifically designed into the sport.</p>
        </div>
</div>
<!--about -->
<div class="about">
        <h1>Favourite Sport</h1>    
    <div class="flex-container">
        <div> <a href="en.wikipedia.org/wiki/Cricket_(magazine)"> <img style="box-shadow: 1px 2px  10px white;" src="1.jpg" alt="error" width="300px" height="200px" ></a><p>Cricket is my favourite sports game</p></div>
        <div> <a href="https://en.wikipedia.org/wiki/Football"> <img style="box-shadow: 1px 2px  10px white;" src="2.jpg" alt="error" width="300px" height="200px"></a><p>Football is good sports.I like it more.</p></div>
        <div ><a href="https://en.wikipedia.org/wiki/Olympic"> <img style="box-shadow: 1px 2px  10px white;" src="3.jpg" alt="error" width="300px" height="200px" ></a><p>Without friend no sport can be played</p></div>
            </div>
</div>
<!--about section-->
<section  class="about1">
        <div class="inner-section">
        <?php
      $connection = mysqli_connect("localhost","root","","adminpanel");

      $query= "SELECT * from about ";
      $query_run = mysqli_query($connection,$query);
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {    
             ?>
      
        <h1><?php echo $row['tittle'];?></h1>
        <h2><?php echo $row['subtittle'];?></h2>
        <p class="text"> <?php echo $row['description'];?> </p>
        <p class="text"> <?php echo $row['link'];?> </p>
        <div class="skill"> 
        <button style="background:none; border: none;" onclick="moreabout">MORE ABOUT</button>
    </div>
    </div>
    <?php
            }
          }
            else
            {
            echo"record not found";
            }
          ?>
</section>
<div class="for">
<div class="wrapper">
        <div class="form-header"><h1>Contact Form</h1></div>
        <form action="code.php" method="POST">
        <div class="form-row">
                <div class="form-field">
                <input type="hidden" name="id" value="<?php// echo $row['id']?>">
            </div>
            </div>
  
                 <div class="form-row">
                <div class="form-label">Name</div>
                <div class="form-field">
                    <input type="text" name="name" />
                </div>
            </div>
            </div>
            <div class="form-row">
                <div class="form-label">Phone</div>
                <div class="form-field">
                    <input type="number" name="phone" placeholder="Please enter a number only" /> </div>
            </div>
            <div class="form-row">
                <div class="form-label">Gender</div>
                <div class="form-field">
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female</div>
            </div>
            <div class="form-row">
                <div class="form-label">Preference:</div>
                <div class="form-field">
                    <input type="checkbox" name="pre">Morning
                    <input type="checkbox" name="pre">Evening</div>
            </div>
            <div class="form-row">
                <div class="form-label">Message</div>
                <div class="form-field">
                    <textarea name="message" rows="5" cols="50"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label">Date of Birth</div>
                <div class="form-field">
                    <input type="date" name="date" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"> &nbsp; </div>
                <div class="form-field">
                    <input type="reset" name="reset" />
                    <input type="submit" name="messagebtn" value="Submit" />
                </div>
            </div>
        </form>
    </div>
        </div>
<div class="fun1">
    <div class="con1">
        <h1>LATEST POST</h1>
        <U>Amet turpis, feugiat et sit amet</U><br><hr>
        <u>Ornare in hendrerit in lectus</u><br><hr>
        <u>fnrehrh rirehre hrfrjbr jkrrrr</u><br><hr>
        <u>Ornare in hendrerit in lectus</u><br><hr>
        <U>Amet turpis, feugiat et sit amet</U><br><hr>
        <u>Ornare in hendrerit in lectus</u><hr>
    </div>
    <div class="con2">
        <h1>POPULAR LINK</h1>
        <U>Amet turpis, feugiat et sit amet</U><br><hr>
        <u>Ornare in hendrerit in lectus</u><br><hr>
        <u>fnrehrh rirehre hrfrjbr jkrrrr</u><br><hr>
        <u>Ornare in hendrerit in lectus</u><br><hr>
        <U>Amet turpis, feugiat et sit amet</U><br><hr>
        <u>Ornare in hendrerit in lectus</u><hr>
    </div>
    <div class="con3">
    <H1>FOLLOW US </H1>
    <p>Sport pertains to any form of competitive physical activity or game that aims to use, maintain, or improve physical ability and skills while providing enjoyment to participants and, in some cases, entertainment to spectators. Sports can, through casual or organized participation, improve one's physical health.</p>
    <a href="https://www.instagram.com/"><img src="instagram.png" height="50px" width="50px"></a>
    <a href="https://twitter.com/"><img src="twitter.png" height="50px" width="50px"></a>
    <a href="https://www.facebook.com/"><img src="facebook.png" height="50px" width="50px"></a>
    <a href="https://www.linkedin.com/"><img src="linkedin.png" height="50px" width="50px"></a>
    <a href="https://www.yahoo.com/"><img src="yahoo.png" height="50px" width="50px"></a>
    <div style="margin-right: 20px;" class="key">
    <button style="background:none; border: none;" onclick="read more">READ MORE </button>
    </div>
    </div>
</div>
  <!--footer section-->
<footer>
    <div class="FOOT">
    <p>@UNTITLED.ALL RIGHT RESERVED.|PHOTOS BY FOTOGRAPH|DESIGN BY TEMPLATED</p>
    </div>
</footer>
<script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>

</body>
</html>
