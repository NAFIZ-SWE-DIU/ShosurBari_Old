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
      <h5>সকল ধর্ম, বর্ণ, জেলা, পেশার দেশি ও প্রবাসী বাঙালি পাত্র পাত্রী <br> খুঁজে পাওয়ার সহজ মাধ্যম।</h5>

      <h6>“বিবাহ হয় দৃষ্টি নিয়ন্ত্রণকারী, যৌনাঙ্গের পবিত্রতা রক্ষাকারী।”</h6>
      <p>["বুখারী/৫০৬৫", "মুসলিম/১৪০০", "মিশকাত/৩০৮০:নিকাহ"]</p>


      <div class="sb-home-reg">
        <a href="register.php" class="sb-create-account"><button >নতুন একাউন্ট খুলুন</button></a>
      </div>

    </div>


<script>
// Text Animation Start
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
// Text Animation End
</script>



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


<script>
// START CLOCK SCRIPT
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
// END CLOCK SCRIPT
</script>
<!-- ============================  BANNER END ============================ -->



<div class="sb-search-page">
  <h2>Find your perfect Partner</h2>
  <p>  মনের মতন জীবন সঙ্গী খুঁজে পেতে নিচের সার্চ বাটনে ক্লিক করুন</p>
  <div class="sb-search-btn">
    <a href="search.php"><button > Search Biodata </button></a>
  </div>
</div>


<div class="grid_1">
      <div class="sb-featured-profiles">
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


  <?php include_once("footer.php");?>
</body>
</html>	

