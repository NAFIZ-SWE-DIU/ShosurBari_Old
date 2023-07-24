<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>






<head>
<title>Home | ShosurBari</title>
<link rel="icon" href="images/shosurbari-icon.png" type="image/png">
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
<!--Below Link Search Filter Settings Icon Spring -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>





<body>
  <!-- ============================  Navigation Start =========================== -->
  <?php include_once("includes/navigation.php");?>
  <!-- ============================  Navigation End ============================ -->
 




  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                   S  T  A  R  T               --
  --           SHOSURBARI HOME PAGE / BANNER       --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
  <div class="banner">
    <div class="banner_info">

      <h3 id="banner_text">Thousands of verified Members here</h3>
      <!-- <h1>বাংলাদেশী  ম্যাট্রিমনি<br>শশুরবাড়ি ডট কম</h1> -->

      <div class="shosurbari-title">
        <h4>“সকল ধর্ম, বর্ণ, জেলা, পেশার দেশি ও প্রবাসী বাঙালি পাত্র পাত্রী  খুঁজে পাওয়ার সহজ মাধ্যম।”</h4>
      </div>


      <div class="sb-home-reg">
        <?php
          if (!isloggedin()) {
            echo '<a href="register.php" class="sb-create-account"><button>নতুন একাউন্ট খুলুন</button></a>';
          }
        ?>
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


    <!-- <body onLoad="initClock()">
    <div class="clock" id="timedate">
      <h4>Today</h4>
      <p>Day: <a id="day"> </a></p>
      <p>Date: <a id="date"> </a> <a id="month"> <a id="year">  </a> </p>

      <p>Time: <a id="time">  </a> </p>
    </div>  -->
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
  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                     E   N   D                 --
  --           SHOSURBARI HOME PAGE / BANNER       --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

  <style>
.sb-search-logo-btn {
  display: flex;
  align-items: center;
}

.sb-search-options,
.sb-search-logo {
  display: inline-flex;
}

.sb-search-logo-btn {
  display: flex;
  align-items: center;
}

.sb-search-options,
.sb-search-logo {
  display: inline-flex;
}

@media screen and (max-width: 930px) {
  .sb-search-options {
    display: none;
  }

  .sb-search-logo-btn {
    justify-content: center;
  }
}
</style>



  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                 S  T  A  R  T                 --
  --      SHOSURBARI HOME PAGE / BODY CONTENT      --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
  <div class="sb-search-page">
    <h2>Find your perfect Partner</h2>

    <div class="sb-search-logo-btn">
      <div class="sb-search-options">
        <img src="images/shosurbari-search.png">
      </div>

      <div class="sb-search-logo">
        <div class="sb-search-btn">
          <p>  মনের মতন জীবন সঙ্গী <i class="fa fa-search" style="font-size:24px"> </i>  খুঁজে পেতে নিচের বাটনে ক্লিক করুন</p>
          <a href="search.php"><button > <i class="fa fa-gear fa-spin" style="font-size:24px"> </i> বায়োডাটা খুজুন </button></a>
        </div>
      </div>
    </div>
  </div>
  


  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                 S  T  A  R  T                 --
  --    SHOSURBARI HOME PAGE / FEATURED PROFILES   --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
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
        	$sql="SELECT * FROM 1bd_personal_physical ORDER BY profilecreationdate DESC LIMIT 20"; //Last 20 New Profile View maximum 20 Profile Show
        	$result=mysqlexec($sql);
        	if($result){
        	while($row=mysqli_fetch_assoc($result)){
        		$profid=$row['user_id'];
        		$biodatagender=$row['biodatagender'];
            $dateofbirth=$row['dateofbirth'];
							    

						$sql5="SELECT * FROM 8bd_religion_details WHERE user_id=$profid";
						$result5=mysqlexec($sql5);
						if($result5)
						while($row5=mysqli_fetch_assoc($result5))
						$religion=$row5['religion'];
								

        		//Getting Profile Pic
        		$pic1='';
						$sql2="SELECT * FROM photos WHERE user_id=$profid";
						$result2 = mysqlexec($sql2);
						if($result2){
						$row2=mysqli_fetch_array($result2);
						$pic1=$row2['pic1'];
						}


        // 2bd_personal_lifestyle
        $sql3 = "SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";
        $result3 = mysqlexec($sql3);
        if ($result3 && mysqli_num_rows($result3) > 0) {
            $row3 = mysqli_fetch_assoc($result3);
            $other_occupation_sector=$row3['other_occupation_sector'];

            $occupation_levels = array(
                'business_occupation_level' => $row3['business_occupation_level'],
                'student_occupation_level' => $row3['student_occupation_level'],
                'health_occupation_level' => $row3['health_occupation_level'],
                'engineer_occupation_level' => $row3['engineer_occupation_level'],
                'teacher_occupation_level' => $row3['teacher_occupation_level'],
                'defense_occupation_level' => $row3['defense_occupation_level'],
                'foreigner_occupation_level' => $row3['foreigner_occupation_level'],
                'garments_occupation_level' => $row3['garments_occupation_level'],
                'driver_occupation_level' => $row3['driver_occupation_level'],
                'service_andcommon_occupation_level' => $row3['service_andcommon_occupation_level'],
                'mistri_occupation_level' => $row3['mistri_occupation_level'],
            );
            $occupation_levels = array_filter($occupation_levels); // Remove empty values
            $occupation_count = count($occupation_levels);

            if ($occupation_count > 0) {
                $occupation_label = array_keys($occupation_levels)[0];
                $occupation_value = $occupation_levels[$occupation_label];



					  //PRINTING THE PROFILE
            echo "<li class=\"sb_newbiodata\">";
            echo "<div class=\"sb_featured_profile_head\">";
            echo "<div class=\"sbbio_header_recent_view\">";

            // Start for Default Photo Show
            echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\">";
            if (!empty($pic1)) {
            echo "<img class=\"img-responsive\" src=\"profile/{$profid}/{$pic1}\"/>";
            } else {
            echo "<img class=\"img-responsive\" src=\"images/shosurbari-male-icon.jpg\"/>";
            }
            echo "</a>";
            // End for Default photo Show

            echo "<div class=\"sbbio_number_recentview\"><span class=\"sb_biodatanumber_recentview\"> {$profid} <br> বায়োডাটা নং </span> </div>";
            echo "</div>";
            echo "<div class=\"sb_user_recentview\">";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> বায়োডাটা </span>  <span class=\"sb_data_recentview\">{$biodatagender}</span></span>";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> ধর্ম </span>  <span class=\"sb_data_recentview\">{$religion}</span></span>";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> পেশা </span>  <span class=\"sb_data_recentview\">{$occupation_value}</span></span>";
            echo "<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> জন্ম সন</span>        <span class=\"sb_data_recentview\"> {$dateofbirth}</span></span>";
            echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\"><button class=\"view_sb_profile_recentview\">সম্পূর্ণ প্রোফাইল</button> </a>";
            echo "</div></div>";
            echo "</li>";
        	}
		      }
        }
      }
        ?>
      </ul>


      <!-- START FOR PROFILES ANIMATION SLIDE SHOW -->
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
      <!-- ENDT FOR PROFILES ANIMATION SLIDE SHOW -->


      <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
  </div>
  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                     E   N   D                 --
  --    SHOSURBARI HOME PAGE / FEATURED PROFILES   --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                 S  T  A  R  T                 --
  --       SHOSURBARI HOME PAGE / WEB  DETAILS     --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->	

  
  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                     E   N   D                 --
  --       SHOSURBARI HOME PAGE / WEB  DETAILS     --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->	





  <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
  -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
  --                   E   N   D                    --
  --      SHOSURBARI HOME PAGE / BODY CONTENT      --
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
  <?php include_once("footer.php");?>
</body>
</html>	
