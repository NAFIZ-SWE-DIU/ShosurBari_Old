<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/optionsearch.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3>Thousands of verified Members</h3>
      <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
    </div>
  </div>
  <body onLoad="initClock()">
  <div class="clock" id="timedate">
    <a id="d">1</a>
	<a id="mon">January</a>,
    <a id="y">0</a><br />
    <a id="h">12</a> :
    <a id="m">00</a>:
    <a id="s">00</a>:
    <a id="mi">000</a>
  </div>
</div> 




<div class="sb-search-page">
  <h2>Find your perfect Partner</h2>
  <div class="sb-search-btn">
    <a href="search.php"><button > Search Biodata </button></a>
  </div>
</div>

<style>

  .sb-search-page{
    margin-top: 30px;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
  }

  .sb-search-btn button{
    background: #ff0080;
    padding: 10px;
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    color: #fff;
    font-size: 20px;
    width: 222px;
  }

  .sb-search-page .sb-search-btn{
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 4px;
    color: #fff;
    text-align: center;
  }

  .sb-search-btn button:hover{
    background: #00bbff;
    color: #fff;
  }



  .sb-search-btn a{
    color: #fff;
    font-size: 24px;
  }
  </style>


<div class="grid_1">
      <div class="sbnew-account">
      	<h1>Featured Profiles</h1>
        
       	<div class="sbhome-heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>


        <ul id="flexiselDemo3">
        <?php
        	$sql="SELECT * FROM 1bd_personal_physical";
        	$result=mysqlexec($sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$profid=$row['user_id'];
        			$biodatagender=$row['biodatagender'];
              $Skin_tones=$row['Skin_tones'];
              $height=$row['height'];
              $dateofbirth=$row['dateofbirth'];



				


					$sql3="SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";		
					$result3=mysqlexec($sql3);
					if($result3)
						while($row3=mysqli_fetch_assoc($result3))
						$occupation=$row3['occupation'];
				
						

							$sql4="SELECT * FROM 4bd_address_details WHERE user_id=$profid";
							$result4=mysqlexec($sql4);
							if($result4)
								while($row4=mysqli_fetch_assoc($result4))
								$permanent_address=$row4['permanent_address'];
							    

								$sql5="SELECT * FROM 8bd_religion_details WHERE user_id=$profid";
								$result5=mysqlexec($sql5);
								if($result5)
									while($row5=mysqli_fetch_assoc($result5))
									$religion=$row5['religion'];
								
				

        				//getting profilepic
        				$pic1='';
						$sql2="SELECT * FROM photos WHERE user_id=$profid";
						$result2 = mysqlexec($sql2);
						if($result2){
							$row2=mysqli_fetch_array($result2);
							$pic1=$row2['pic1'];
						}
						//got profilepic
						//
					//Printing the html
					echo "<li class=\"sb_newbiodata\">";
          echo "<div class=\"biodatarecent_viewlist\">";
          echo "<div class=\"sbbio_header_recent_view\">";
          echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\"> <img  class=\"img-responsive\" src=\"profile/{$profid}\/{$pic1}\"/></a>";
          echo "<div class=\"sbbio_number_recentview\"><span class=\"sb_biodatanumber_recentview\"> {$profid} <br> Biodata Number </span> </div>";
          echo "</div>";
   
          echo "<div class=\"sb_user_recentview\">
          <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Gender </span>  <span class=\"sb_data_recentview\">{$biodatagender}</span></span>
          <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Religion </span>  <span class=\"sb_data_recentview\">{$religion}</span></span>
          <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Birth Year</span>        <span class=\"sb_data_recentview\"> {$dateofbirth}</span></span>
          <a href=\"viewpro.php?id={$profid}\" target=\"_blank\"><button class=\"view_sb_profile_recentview\"> View Full Profile</button> </a>
          </div></div>";

          echo "</li>";

      
        	}
		}
    ?>
  </ul>


	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 4,
				animationSpeed: 700,
				autoPlay:false,
				autoPlaySpeed: 5000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>







	
  <div class="shosurbari-user-statistic">
<h1>Total Groom and Bride's Biodatas</h1>
  </div>

  <ul class="cards-container">
    <li class="total-grmbrd-feature-card">
  <div class="total-grmbrd">
    <img src="images/shosurbari-male.jpg" alt="team builder feature icon" />
  </div>
      <h3>Total Groom and Bride's Biodatas</h3>
      <p>Total Groom and Bride's Biodatas</p>
    </li>

    
    
    <li class="total-groom-feature-card">
    <div class="total-groom">
    <img src="images/shosurbari-male.jpg" alt="team builder feature icon" />
    </div>
      <h3>Total Groom's Biodatas</h3>
      <p>Scans our talent network to create the optimal team for your project</p>
    </li>

    
    
    <li class="total-bride-feature-card">
    <div class="total-bride">
    <img src="images/ShosurBari-female.png" alt="karma feature icon" />
    </div>
      <h3>Total Bride's Biodatas</h3>
      <p> Regularly evaluates our talent to ensure quality</p>
    </li>

    
    
    <li class="total-success-feature-card">
    <div class="total-success">
    <img src="images/ShosurBari-female.png" alt="karma feature icon" />
    </div>
      <h3>Total Successful Marriages</h3>
      <p>Uses data from past projects to provide better delivery estimates</p>
    </li>
  </ul>
	

<style>
  .sb_newbiodata{
    width: 80%;
  }
  #flexiselDemo3{
    left: 0px;

  }
  .nbs-flexisel-ul{
    width: 80%;
  }
.sbnew-account{
  width: 100%;
  margin: auto;
}
.biodatarecent_viewlist {
    border: 1px solid #ccc;
    border-radius: 6px;
    width: 90%;
    gap: 1.5rem;
    padding: 0px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    margin-top: 30px;
    background: white;
    transition: transform .2s;
}



.col_1 {
	position:relative;
	overflow:hidden;
}
.col_1.frame-border {
	background-color:#FFF; 
	border:18px solid #FFF;
}
.col_1 img {
    width: 150px;
    height: 140px;
    margin: auto;
}
.col_1 .layer {
	position: absolute; 
	margin: auto;
	top: 0; 
	right: 0; 
	bottom: 0;
	left: 0;
	width:100%;
	height:100%;
}
.col_1 .layer.second-image{
	opacity: 0; 
}
.col_1 .layer.opacity-black-overlay{
	background-color: rgba(0, 0, 0, 0.4);
	opacity: 0.3; 
}
.col_1 .layer.hidden-black-overlay{
    opacity: 0; 
}
.col_1 .layer.photo-caption{
	opacity: 1; 
}
.col_1 .layer.hidden-photo-caption{
	opacity: 0; 
}
.col_1 .layer.border-photo-caption{
	opacity: 1;
	border:1px solid #FFF; 
}
.col_1 .layer.hidden-border-photo-caption{
	opacity: 0;
	border:1px solid #FFF; 
}
.col_1 .layer.link{
	opacity: 1;
}
.col_1 .layer.hidden-link{
	opacity: 0;
}
.col_1:hover .layer.hover-animation.fade-in{
	opacity: 1; 
}
.col_1:hover .layer.hover-animation.half-fade-in{
	opacity: 0.3; 
}
.col_1:hover .layer.hover-animation.fade-out{
	opacity: 0; 
}
.col_1 a:hover{
	color:#000;
	font-weight:bold;
}
/* on Hover Animation */
/* ----------------------------------------------*/
.col_1 img.hover-animation, .col_1:hover img.hover-animation{
	-webkit-transition: all 0.5s; 
		-ms-transition: all 0.5s;
		 -o-transition: all 0.5s;
			transition: all 0.5s;
}
.col_1 .layer.hover-animation, .col_1:hover .layer.hover-animation {
	-webkit-transition: all 0.5s; 
		-ms-transition: all 0.5s;
		 -o-transition: all 0.5s;
			transition: all 0.5s;
}
.col_1:hover .layer.hover-animation.duration1,
.col_1:hover img.hover-animation.duration1{
	transition-duration:0.5s;
}
.col_1:hover .layer.hover-animation.duration2,
.col_1:hover img.hover-animation.duration12{
	transition-duration:1s;
}
.col_1:hover .layer.hover-animation.duration3,
.col_1:hover img.hover-animation.duration3{
	transition-duration:1.5s;
}
.col_1:hover .layer.hover-animation.duration4,
.col_1:hover img.hover-animation.duration4{
	transition-duration:2s;
}
.col_1:hover .layer.hover-animation.duration5,
.col_1:hover img.hover-animation.duration5{
	transition-duration:2.5s;
}
.col_1:hover .layer.hover-animation.delay1,
.col_1:hover img.hover-animation.delay1{
	transition-delay:0.5s;
}
.col_1:hover .layer.hover-animation.delay2,
.col_1:hover img.hover-animation.delay2{
	transition-delay:1s;
}
.col_1:hover .layer.hover-animation.delay3,
.col_1:hover img.hover-animation.delay3{
	transition-delay:1.5s;
}
.col_1:hover .layer.hover-animation.delay4,
.col_1:hover img.hover-animation.delay4{
	transition-delay:2s;
}
.col_1:hover .layer.hover-animation.delay5,
.col_1:hover img.hover-animation.delay5{
	transition-delay:2.5s;
}
/* 09.3.3 on Hover Zoom In					 	 */
/* ----------------------------------------------*/
.col_1:hover img.hover-animation.image-zoom-in {
	-webkit-transform: scale(1.1); 
		-ms-transform: scale(1.1);
		 -o-transform: scale(1.1);  
			transform: scale(1.1);		
}

/* 09.3.4 on Hover Zoom In and Rotate	 	 	*/
/* ----------------------------------------------*/
.col_1:hover img.hover-animation.image-zoom-rotate {
	-webkit-transform: rotate(7deg) scale(1.1);
		-ms-transform: rotate(7deg) scale(1.1);
		 -o-transform: rotate(7deg) scale(1.1);  
			transform: rotate(7deg) scale(1.1);			
}
.hover_alignment{
    position: absolute;
    display: table;
    height: 100%;
    width: 100%;
}
.center-middle {
    vertical-align: middle;
    text-align: center;
    margin: 70px 0 0 0;
}
/* 09.3.5 on Hover Fade Out				 		 */
/* ----------------------------------------------*/
.col_1:hover img.hover-animation.image-fade-out {
	opacity:0;
}

a.button.outline, span.button.outline, input[type=submit].outline {
    background-color: transparent;
    border: solid 1px #FFF;
    color: #FFF;
    padding: 4px 7px;
    font-size: 11px;
}

.nbs-flexisel-container {
	position: relative;
	max-width: 80%;
  margin-left: auto;
  margin-right: auto;
}

.nbs-flexisel-ul {
	position: relative;
	width: 9999px;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	text-align: center;
}

.nbs-flexisel-inner {
	overflow: hidden;
	margin: 0 auto;
	width:100%;
}



.sb_newbiodata li{
    width: 33%;
}



  @media (max-width: 1280px) {
    .sb_newbiodata li{
    width: 33%;
  }

  .sb_newbiodata .nbs-flexisel-item li{
    width: 33%;
}

.nbs-flexisel-item li{
    width: 33%;
}

.nbs-flexisel-item {
	  float: left;
    position: relative;
    margin:-7px;
    margin-bottom:6px;
    padding: 6px;
    line-height: 17px;
    min-height: 220px;
  }
  }


  @media (min-width: 1280px) {
  .nbs-flexisel-item {
	  float: left;
    position: relative;
    margin:-7px;
    margin-bottom:6px;
    padding: 6px;
    line-height: 17px;
    min-height: 220px;
  }

    .sb_newbiodata .nbs-flexisel-item li{
    width: 33%;
}
.sb_newbiodata li{
    width: 33%;
} 
.nbs-flexisel-item li{
    width: 33%;
}
  }






.nbs-flexisel-item:first-child{
	margin-left:0;
}
.nbs-flexisel-item > img {
	cursor: pointer;
	position: relative;
    height: 170px;
    width: 160px;
}
/*** Navigation ***/
.nbs-flexisel-nav-left, .nbs-flexisel-nav-right {
    position: absolute;
	cursor: pointer;
	z-index: 100;
	margin-top:0px;
}
.nbs-flexisel-nav-left{
	left: -20px;
}
.nbs-flexisel-nav-left:after{
	text-shadow: none;
    -webkit-font-smoothing: antialiased;
    font-family: 'fontawesome';
    --speak: none;
    font-weight: normal;
    font-variant: normal;
    line-height: 1;
    text-transform: none;
    -moz-transition: 0.4s;
    -o-transition: 0.4s;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    color:#ff0080;
    content: "\f104";
    display: inline-block;
    font-size: 50px;
    top:-40px;
}
.nbs-flexisel-nav-right {
	right: -20px;
}
.nbs-flexisel-nav-right:after{
	 text-shadow: none;
    -webkit-font-smoothing: antialiased;
    font-family: 'fontawesome';
    --speak: none;
    font-weight: normal;
    font-variant: normal;
    line-height: 1;
    text-transform: none;
    -moz-transition: 0.4s;
    -o-transition: 0.4s;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    color:#ff0080;
    content: "\f105";
    display: inline-block;
    font-size: 50px;
    top:-40px;
}
ul#flexiselDemo3 h3{
   font-size:12px;
   line-height:1.8em;
   margin: 10px;
   border-style: double;
   padding: 5px;
}
ul#flexiselDemo3 h3 a{
	color:#000;
}
ul#flexiselDemo3 h3 a:hover{
   color:#ff0080;
}










































  .shosurbari-user-statistic{
    margin-top: 30px;
    margin-bottom: 30px;
    text-align: center;
  }
	
h1, h2, h3 {
  font-weight: 600;
  color: hsl(234, 12%, 34%);
  text-align: center;
}

p { color: hsl(229, 6%, 66%); }

.cards-container {
  /* List Styling Clean-Up */
  list-style: none;
  padding: 0; margin: 0;
  margin: auto;
  margin-bottom: 50px;
}
.total-grmbrd{
  margin-top:  -10px;
}
.total-grmbrd-feature-card img{
    height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}
.total-groom{
  margin-top:  -10px;
}
.total-groom-feature-card img{
  height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}.total-bride{
  margin-top:  -10px;
}
.total-bride-feature-card img{
  height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}
.total-success{
  margin-top:  -10px;
}
.total-success-feature-card img{
  height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}

@media (min-width: 788px) {
  .cards-container { 
    width: 728px;
  }
  /* Clear Fix */
  .cards-container::after {
    content: "";
    clear: both;
    display: table;
  }
}

@media (min-width: 1166px) {
  .cards-container {
    width: 1106px;
  }
}


[class$='feature-card'] {
  /* Positioning and Sizing */
  position: relative;
  box-sizing: border-box;
  width: 350px; height: 250px;
  margin: 0;
  padding: 32px;

  /* Box Details */
  border-radius: 10px;
  border-top: solid 5px black;
  box-shadow: 2px 5px 20px rgb(0,0,0,0.1);
}


[class$='feature-card'] h2, [class$='feature-card'] p { margin: 0; }


/*
 * ### Top Border Colors Rules
 */

.total-grmbrd-feature-card{
  border-color: #193f4c;
}
.total-groom-feature-card{
  border-color: #00bbff;
}
.total-bride-feature-card{
  border-color: #ff0080;
}
.total-success-feature-card{
  border-color: #15ab15;
}

@media (min-width: 788px) {
  [class$='feature-card'] {
    float: left;
  }

  @media (min-width: 1166px) {
    
    [class$='feature-card']:first-child {
      margin: 140px 0;
    }
   
    [class$='feature-card']:nth-child(2),
    [class$='feature-card']:nth-child(3) {
      margin: 0 22px;
    }

    [class$='feature-card']:last-child {
      margin-top: -110px;
    }

    [class$='feature-card']:nth-child(3) {
      margin-top: 30px;
    }
  }

  @media (max-width: 1165px) {

    [class$='feature-card']:nth-child(3),
    [class$='feature-card']:nth-child(4) {
      margin-top: 30px;
    }

    [class$='feature-card']:nth-child(2),
    [class$='feature-card']:nth-child(4) {
      margin-left: 28px;
    }
  }
}

@media (max-width: 787px) {

  [class$='feature-card'] {
    width: 300px; height: 220px;
    margin: auto;
  }

  [class$='feature-card']:not(:first-child) {
    margin-top: 22px;
  }
}
	</style>

<div class="shosurbari-user-statistic">
<h1>How ShosurBari Works</h1>
  </div>

  <ul class="cards-container">
    <li class="total-grmbrd-feature-card">
  <div class="total-grmbrd">
    <img src="images/shosurbari-male.jpg" alt="team builder feature icon" />
  </div>
      <h3>How to Post Biodata</h3>
      <p>Total Groom and Bride's Biodatas</p>
    </li>

    
    
    <li class="total-groom-feature-card">
    <div class="total-groom">
    <img src="images/shosurbari-male.jpg" alt="team builder feature icon" />
    </div>
      <h3>Search Biodata</h3>
      <p>Scans our talent network to create the optimal team for your project</p>
    </li>

    
    
    <li class="total-bride-feature-card">
    <div class="total-bride">
    <img src="images/ShosurBari-female.png" alt="karma feature icon" />
    </div>
      <h3>Contact with gurdians</h3>
      <p> Regularly evaluates our talent to ensure quality</p>
    </li>

    
    
    <li class="total-success-feature-card">
    <div class="total-success">
    <img src="images/ShosurBari-female.png" alt="karma feature icon" />
    </div>
      <h3>Get married</h3>
      <p>Uses data from past projects to provide better delivery estimates</p>
    </li>
  </ul>





	


    <div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<li><a href="services.php">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="https://www.facebook.com/ShosurBari.Matrimony" target="blank"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="mailto:shosurbari@gmail.com" target="blank"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2012-23 ShosurBari.com | All Rights Reserved  | Developed By - <a href="https://www.facebook.com/NAFIZ.SWE.DIU/" target="_blank">Nafiz Noyon</a></p>
	        </div>
    	</div>
    </div>
</body>
</html>	



<div id="scroll-up-btn" onclick="scrollToTop()">
    <i class="fa fa-arrow-up"></i>
</div>

<style>
	#scroll-up-btn {
                position: fixed;
                bottom: 20px;
                right: 30px;
                cursor: pointer;
				padding: 10px;
				background: #ff008087;
				color: #fff;
				border-radius: 3px;
            }
			#scroll-up-btn:hover {
				padding: 10px;
				background: #ff0080;
				color: #fff;
				border-radius: 3px;
            }
  </style>

<script>
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	var scrollBtn = document.getElementById("scroll-up-btn");
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		scrollBtn.style.display = "block";
	} else {
		scrollBtn.style.display = "none";
	}
}

function scrollToTop() {
	var scrollOptions = {
		top: 0,
		left: 0,
		behavior: 'smooth'
	};
	document.documentElement.scrollTo(scrollOptions);
}
  </script>
