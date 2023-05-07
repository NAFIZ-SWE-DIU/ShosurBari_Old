<?php include_once("includes/basic_includes.php");

// Check if the user is logged in
if (isset($_SESSION['id'])) {
  // User is logged in, output CSS to hide the section
  echo '<style>.sb-home-reg { display: none; }</style>';
}
?>

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
 







<!-- ============================  BANNER START ============================ -->

<div class="banner">

    <div class="banner_info">

      <h3 id="banner_text">Thousands of verified Members here</h3>
      <h4>বাংলাদেশী  ম্যাট্রিমনি শশুরবাড়ি ডট কম</h4>
      <h5>সকল ধর্ম, বর্ণ, জেলা, পেশার দেশি ও প্রবাসী বাঙালি পাত্র পাত্রী খুঁজে পাওয়ার সহজ মাধ্যম।</h5>

      <h6>“বিবাহ হয় দৃষ্টি নিয়ন্ত্রণকারী, যৌনাঙ্গের পবিত্রতা রক্ষাকারী।”</h6>
      <p>["বুখারী/৫০৬৫", "মুসলিম/১৪০০", "মিশকাত/৩০৮০:নিকাহ"]</p>


      <div class="sb-home-reg">
        <a href="register.php" class="sb-create-account"><button >নতুন একাউন্ট খুলুন</button></a>
      </div>

    </div>


  <body onLoad="initClock()">
    <div class="clock" id="timedate">
      <h4>Today</h4>

      <div class="day-date">
        <p class="day">Day : <a id="day"></a></p>
        <p class="date">Date : <a id="date"></a></p>
      </div>

      <div class="month-year">
        <p class="month">Month : <a id="month"></a></p>
        <p class="year">Year : <a id="year"></a><br></p>
      </div>

      <p class="time"> Time : <a id="time"></a> </p>
    </div>

</div> 

<!-- ============================  BANNER END ============================ -->









<style>

.banner{
	background:url(../images/sb-bnr.png)no-repeat center top;
  background: url(https://bannerboo.com/bitrix/templates/landing_tpl/i/header_tpl_bg.svg?v2);

	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	/* min-height:650px; */
    height: 600px;
    margin-top: 35px;

    display: flex;
  justify-content: space-between;
  align-items: center;
}


  .banner_info {
    background-color: rgba(255, 255, 255, 0); /* Transparent background */
    border: 2px solid;
    border-radius: 5px;
    padding: 20px;
    position: relative;
    overflow: hidden;
    margin: auto;
    width:55%;
    animation: colorAnimation 10s linear infinite;


    display: inline-flex;
  flex-direction: column;

  }

    /* search start */

    .sb-search-page h2 {
  font-size: 3em;
  animation: textAnimation 10s linear infinite;
  margin-bottom: 20px;
}

.sb-search-page p {
  font-size: 1.3em;
  text-align: center;
  animation: textAnimation 10s linear infinite;
  margin-bottom: 20px;
}

.sb-home-reg button{
    background: #ff0080;
    padding: 10px;
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    color: #fff;
    font-size: 20px;
    width: 222px;
  }

  .sb-home-reg button:hover{
    background: #00bbff;
    color: #fff;
  }

  .sb-home-reg a{
    color: #fff;
    font-size: 24px;
  }

@keyframes textAnimation {
  0% {
      color: red;
    }
    14.28% {
      color: orange;
    }
    28.56% {
      color: yellow;
    }
    42.84% {
      color: green;
    }
    57.12% {
      color: blue;
    }
    71.4% {
      color:  Maroon;
    }
    85.68% {
      color: violet;
    }
    100% {
      color: red;
    }
}


  .sb-search-page{
    margin: auto 50px auto auto;
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
    margin-top: 50px;
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

  /* search end */

  @keyframes colorAnimation {
    0% {
      border-color: red;
    }
    25% {
      border-color: orange;
    }
    50% {
      border-color: green;
    }
    75% {
      border-color: #43C6DB;
    }
    100% {
      border-color: #3EA055;
    }
  }


  @keyframes slideLeft {
    0% {
      transform: translateX(100%);
      color: red;
    }
    33.33% {
      transform: translateX(0%);
      color: green;
    }
  }

  .banner_info h3 {
    position: relative;
    overflow: hidden;
    font-size: 4em;
    font-family: 'Oswald', sans-serif;
    margin-bottom:30px;
    line-height: 70px;
   
  }

  .banner_info h4 {
    font-size: 3em;
   font-family: 'Oswald', sans-serif;
   margin-bottom: 0px;
   text-align: center;
   line-height: 70px;
    font-weight: 600;
  }

  .banner_info h5 {
    font-size: 1.5em;
   font-family: 'Oswald', sans-serif;
   margin-top:0px;
   margin-bottom:0px;
   text-align: center;
   line-height: 40px;
   color: #F660AB;
  }

  .banner_info h6 {
    font-size: 1.5em;
   font-family: 'Oswald', sans-serif;
   margin-top:80px;
   margin-bottom:0px;
   text-align: center;
   font-weight: 600;
   line-height: 40px;
  }

  .banner_info p {
  font-size: 1em;
   font-family: 'Oswald', sans-serif;
   margin-top:0px;
   margin-bottom:30px;
   text-align: center;
   color: #00bbff;
   line-height: 40px;
  }



  .sb-home-reg  {
   margin: auto;
   text-align: center;
  }

  .grid_1{
	padding:2em 0;
  margin-top: 60px;
}
</style>



<script>
  var bannerText = document.getElementById("banner_text");
  var animationDelay = 10; // in seconds

  function startAnimation() {
    bannerText.style.animation = "slideLeft 30s linear infinite";

    setTimeout(function() {
      bannerText.style.animation = "";
      startAnimation();
    }, animationDelay * 1000);
  }

  startAnimation();
</script>











<style>
    .clock h4{
      text-align: center;
      margin: auto;
      padding: 10px;
      font-size: 25px;
    }

    #timedate {
    font: small-caps lighter 43px/150% "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
    text-align:center;
    width: 280px;
    border-left: 3px solid #ed1f24;
    font-size: 25px;

      background-color: transparent;
      color: #fff;
      padding: 10px;
      border-radius: 4px;
      margin-top: -300px;
      margin-left: auto;
      margin-right: 30px;

      display: inline-flex;
  flex-direction: column;

  }

      /* Day Date Start */

    .day{
      font-size:17px;
      font-weight: 600;
      color: #000;
      padding: 1px 2px;
      width: 50%;
      border: 1px solid transparent;
      animation: borderAnimation 15s infinite;
    }
    .day a{
      font-size:17px;
      font-weight: 600;
      color: #00bbff;
    }

    .day-date{
      display: flex;
    }
    .date{
      font-size:17px;
      font-weight: 600;
      color: #000;
      padding: 1px 2px;
      width: 50%;
      border-top: 1px solid transparent;
      border-right: 1px solid transparent;
      border-bottom: 1px solid transparent;
      animation: borderAnimation 15s infinite;
    }
    .date a{
      font-size:17px;
      font-weight: 600;
      color: #00bbff;
    }

    /* Month Yaer Start */
    .month{
      font-size:17px;
      font-weight: 600;
      color: #000;
      padding: 1px 2px;
      width: 50%;
      border-left: 1px solid transparent;
      border-right: 1px solid transparent;
      animation: borderAnimation 15s infinite;
    }
    .month a{
      font-size:17px;
      font-weight: 600;
      color: #00bbff;
    }

    .month-year{
      display: flex;
    }
    .year{
      font-size:17px;
      font-weight: 600;
      color: #000;
      padding: 1px 2px;
      width: 50%;
      border-right: 1px solid transparent;
      animation: borderAnimation 15s infinite;
    }
    .year a{
      font-size:17px;
      font-weight: 600;
      color: #00bbff;
    }

    .time{
      font-size:17px;
      font-weight: 600;
      color: #000;
      padding: 1px 2px;
      width: auto;
      border: 1px solid transparent;
      animation: borderAnimation 15s infinite;
    }
    .time a{
      font-size:17px;
      font-weight: 600;
      color: #00bbff;
    }







    
    .clock,
 {
      border: 1px solid transparent;
      animation: borderAnimation 15s infinite;
    }

    .clock {
      border: 1px solid transparent;
      animation: borderAnimation 15s infinite;
    }

    

    @keyframes borderAnimation {
      0% {
        border-color: green;
      }

      25% {
        border-color: blue;
      }

      50% {
        border-color: red;
      }

      75% {
        border-color: blue;
      }

      100% {
        border-color: green;
      }
    }

    .clock h4 {
      animation: textAnimation 4s infinite;
    }

    @keyframes textAnimation {
      0% {
        color: orange;
      }

      33% {
        color: green;
      }

      75% {
        color: blue;
      }

      100% {
        color: orange;
      }
    }
  </style>

<script>
    Number.prototype.pad = function(n) {
      for (var r = this.toString(); r.length < n; r = '0' + r);
      return r;
    };

    function updateClock() {
      var now = new Date();
      var sec = now.getSeconds(),
          min = now.getMinutes(),
          hou = now.getHours(),
          dy = now.getDate(),
          mo = now.getMonth(),
          yr = now.getFullYear();

      var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

      var ampm = hou >= 12 ? 'PM' : 'AM';
      hou = hou % 12;
      hou = hou ? hou : 12;

      document.getElementById("day").textContent = days[now.getDay()];
      document.getElementById("date").textContent = dy;
      document.getElementById("month").textContent = months[mo];
      document.getElementById("year").textContent = yr;
      document.getElementById("time").textContent = hou.pad(2) + ":" + min.pad(2) + ":" + sec.pad(2) + " " + ampm;
    }

    function initClock() {
      updateClock();
      setInterval(updateClock, 1000);
    }
  </script>


<div class="sb-search-page">
  <h2>Find your perfect Partner</h2>
  <p>  মনের মতন জীবন সঙ্গী খুঁজে পেতে নিচের সার্চ বাটনে ক্লিক করুন</p>
  <div class="sb-search-btn">
    <a href="search.php"><button > Search Biodata </button></a>
  </div>
</div>


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
				autoPlay:true,
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
  margin: 50px auto 0px auto;
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



  
  @media (max-width: 480px) {
  .nbs-flexisel-item {
	  float: left;
    position: relative;
    margin:-9px;
    margin-bottom:6px;
    padding: 6px;
    line-height: 17px;
    min-height: 220px;
  }

  .biodatarecent_viewlist {
    width: 75%;
}

.nbs-flexisel-container {
    width: 245px;
    position: relative;
    margin-left: auto;
    margin-right: auto;
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
    margin-top: 100px;
    margin-bottom: 100px;
    text-align: center;
  }

  h1{
  font-weight: 600;
  color: hsl(234, 12%, 34%);
  text-align: center;
}
.shosurbari-user-statistic {
  margin-bottom: 60px;
}
	
h2, h3 {
  font-weight: 600;
  color: hsl(234, 12%, 34%);
  text-align: center;
}

p { color: hsl(229, 6%, 66%); }

.cards-container {
  /* List Styling Clean-Up */
  list-style: none;
  padding: 0; 
  margin: 100px auto;
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



   <!-- <i class="fa fa-arrow-up"></i> -->


<div id="scroll-up-btn" onclick="scrollToTop()">
    <i class="fa fa-angle-double-up"></i>
</div>

<style>
	#scroll-up-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                cursor: pointer;
				padding-top: 5px;
    			padding-bottom: 5px;
				padding-left: 12px;
    			padding-right: 12px;
				background: #ff008087;
				color: #fff;
				border-radius: 3px;
            }
			#scroll-up-btn:hover {
				padding-top: 7px;
    			padding-bottom: 7px;
				padding-left: 12px;
    			padding-right: 12px;
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
