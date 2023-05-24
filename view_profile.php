<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
error_reporting(0);
$id=$_GET['id'];
//Safty purpose copy the get id
$profileid=$id;

//Getting profile details from db
$sql = "SELECT * FROM 1bd_personal_physical  WHERE user_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);
//End of getting profile detils

$pic1="";

//Getting image filenames from db
$sql2="SELECT * FROM photos WHERE user_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	if($row2){
	$pic1=$row2['pic1'];
	}
}
}else{
echo "<script>alert(\"Invalid Profile ID\")</script>";
}
?>




<!DOCTYPE HTML>
<html>

<head>
	<title>View Profile - ShosurBari</title>
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
	<!-- ============================  Navigation Start ========================== -->
	<?php include_once("includes/navigation.php");?>
	<!-- ============================  Navigation End ============================ -->






	<div class="UserProfile">  <!-- UserProfile -->
		<div class="profile-header">

            <div class="profile-img">
				<?php if (!empty($pic1)): ?>
					<img src="profile/<?php echo $profileid; ?>/<?php echo $pic1; ?>" />
					<?php else: ?>
					<img src="images/shosurbari-male-icon.jpg" />
				<?php endif; ?>
		    </div>


			<div class="profile-nav-info">
				<?php if (!empty($profileid)) { ?>
					<h3>Biodata No : <span><?php echo $profileid;?></span></h3>
				<?php } ?>

				<?php
					$id=$_GET['id'];
					$profileid=$id;
					
					//getting profile details from db
					$sql = "SELECT * FROM 4bd_address_details  WHERE user_id = $id";
					$result = mysqlexec($sql);
					$row=mysqli_fetch_assoc($result);

					//Biodata 4
					if($row){
					$present_address=$row['present_address'];
					}

					// Get profile creation date from 1bd_personal_physical table
					$sql = "SELECT profilecreationdate FROM 1bd_personal_physical WHERE user_id = $id";
					$result = mysqlexec($sql);
					$row = mysqli_fetch_assoc($result);

					// Check if profile creation date exists and format it
					$profilecreationdate = '';
					if ($row && !empty($row['profilecreationdate'])) {
						// Convert the profile creation date to a DateTime object
						$profileCreationDateTime = new DateTime($row['profilecreationdate']);

						// Get the formatted date string in the desired format (date month year)
						$formattedProfileCreationDate = $profileCreationDateTime->format('d F Y');

						// Set the formatted profile creation date
						$profilecreationdate = $formattedProfileCreationDate;
					}
				?>

				<div class="address">
					<?php if (!empty($present_address)) { ?>
						<td class="day_value closed">Present Address: <?php echo $present_address; ?></td><br>
						<?php if (!empty($profilecreationdate)) { ?>
							<td class="day_value closed">Profile Create: <?php echo $profilecreationdate; ?></td>
						<?php } ?>
					<?php } ?>
				</div>
    		</div>


			<div class="see_sb_biodata">
		    	<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

					<ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
						<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
						<li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Extpected Partner</a></li>
					</ul>
				</div>
			</div>
	 	</div>

		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
		// Profile Section Show With Scrolling Just for Mobile Responsive.
		$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		var headerHeight = $('.profile-header').outerHeight() * 0.9; // 90% of the profile-header height

		if (scroll >= headerHeight) {
			$('.nav-tabs1').addClass('fixed');
		} else {
			$('.nav-tabs1').removeClass('fixed');
		}
		});


		$(document).ready(function() {
		// Smooth scroll to the target section
		$('.nav-tabs1 a').click(function(event) {
		event.preventDefault();

		var targetOffset = $('.profile-header').offset().top + ($('.profile-header').outerHeight() / 2);

		if ($(window).width() >= 931 && $(window).width() <= 2000) {
		// Media width between 931px and 2000px
		targetOffset -= -5; // Adjust the scroll offset as desired (scroll top 50px)
		} else {
		targetOffset += 530; // Adjust the scroll offset as desired
		}


		$('html, body').animate({
		scrollTop: targetOffset
		}, 950);
		});
		});
		</script>


		<style>
			/*View Profile Details NavBar Sticky Start*/
			@media(min-width:2150px){
				.UserProfile {
				width: 2000px;
				margin: auto;
			}
			}

			@media(max-width:2150px){
			.fixed {
				position: fixed;
				top: 64px;
				right: 5%;
				width: 55.8%;
				z-index: 100;
				margin-left: auto;
				margin-right: auto;
				border-radius: 0px 0px 4px 4px;
				display: flex;
				justify-content: center;
				background:#06b6d4;
			}

			a#profile-tab, a#home-tab, a#profile-tab1 {
				width: 100%;
				padding: 12px 25px;
				margin: 5px auto;
				font-size: 17px;
			}

			.nav-tabs1>li{
				margin-left: 7px;
				margin-right: 7px;
				border-top: 0px solid #06b6d4;
				border-right: 1px solid #06b6d4;
				border-bottom: 0px solid #06b6d4;
				border-left: 1px solid #06b6d4;
				border-radius: 4px;
			}
			}

			@media (max-width:1920px){
			a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 12px 20px;
				font-size: 17px;
			}
			}

			@media (max-width:1600px){
				a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 11px 15px;
				font-size: 16px;
			}
			}

			@media (max-width:1400px){
				a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 11px 13px;
				font-size: 15px;
			}
			}

			@media (max-width:1280px){
			.fixed {
				right: 5%;
				width: 61.2%;
			}

			a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 10px 10px;
				font-size: 14px;
			}
			}

			@media (max-width:1024px){
			.fixed {
				right: 5%;
				width: 58.5%;
			}

			a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 10px 4px;
				font-size: 13px;
			}
			}

			@media (max-width:930px){
			.fixed {
				left: 10px;
				right: 10px;
				width: 81%;
			}

			a#profile-tab, a#home-tab, a#profile-tab1 {
				width: 100%;
				padding: 10px 10px;
				margin: 5px auto;
				font-size: 14px;
			}
			}  

			@media (max-width: 736px){
			.fixed {
				top: 110px;
			}
			}

			@media (max-width: 600px){
			a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 8px 10px;
			}

			.nav-tabs1>li{
				margin-left: 4px;
				margin-right: 4px;
			}
			}

			@media (max-width: 480px){
			a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 8px 3px;
				font-size: 13px;
			}

			.nav-tabs1>li{
				margin-left: 3px;
				margin-right: 3px;
			}
			}

			@media (max-width: 384px){

			a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 6px 1px;
				font-size: 11px;
			}

			.nav-tabs1>li{
				margin-left: 2px;
				margin-right: 2px;
			}
			}

			@media (max-width: 320px){
			a#profile-tab, a#home-tab, a#profile-tab1 {
				padding: 6px 2px;
				font-size: 12px;
			}
			.nav-tabs1>li{
				margin-left: 0px;
				margin-right: 0px;
			}
			}
			/*View Profile Details NavBar Sticky End*/
		</style>


		<div class="main-bd"> <!-- Main BioData-->
    		<div class="left-side">
      			<div class="profile-side">
		

					<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
					-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
					--               S  T  A  R  T                   --
					--   Heading Section  / SB Short Biodata    --
					-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
					-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

					<div class="user-bio">

						<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
						--   SB Short Biodata / 1bd_personal_physical    --
						-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
						<?php
							$id=$_GET['id'];
							$profileid=$id;
							
							//getting profile details from db
							$sql = "SELECT * FROM 1bd_personal_physical  WHERE user_id = $id";
							$result = mysqlexec($sql);

							if($result){
							$row=mysqli_fetch_assoc($result);

							//Biodata 1
							if($row){
							$biodatagender=$row['biodatagender'];
							}
							if($row){
							$dob=$row['dateofbirth'];
							}
							if($row){
							$Skin_tones = $row['Skin_tones'];
							}
							if($row){
							$height=$row['height'];
							}
							if($row){
							$weight=$row['weight'];	
							}
							}
						?>


						<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
						--   SB Short Biodata / 2bd_personal_lifestyle   --
						-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
						<?php
							$id=$_GET['id'];
							$profileid=$id;
							
							//getting profile details from db
							$sql = "SELECT * FROM 2bd_personal_lifestyle  WHERE user_id = $id";
							$result = mysqlexec($sql);
							$row=mysqli_fetch_assoc($result);

							//Biodata 2
							if($row){
							$occupation = $row['occupation'];
							}
						?>


						<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
						--     SB Short Biodata / 4bd_address_details    --
						-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
						<?php
							$id=$_GET['id'];
							$profileid=$id;
							
							//getting profile details from db
							$sql = "SELECT * FROM 4bd_address_details  WHERE user_id = $id";
							$result = mysqlexec($sql);
							$row=mysqli_fetch_assoc($result);

							//Biodata 4
							if($row){
							$permanent_address=$row['permanent_address'];
							}
						?>



						<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
						--     SB Short Biodata / 6bd_7bd_marital_status --
						-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
						<?php
							$id=$_GET['id'];
							$profileid=$id;
							
							//getting profile details from db
							$sql = "SELECT * FROM 6bd_7bd_marital_status  WHERE user_id = $id";
							$result = mysqlexec($sql);
							$row=mysqli_fetch_assoc($result);

							//Biodata 4
							if($row){
							$maritalstatus=$row['maritalstatus'];
							}
						?>


						<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
						--    SB Short Biodata / 8bd_religion_details    --
						-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
						<?php
							$id=$_GET['id'];
							$profileid=$id;
							
							//getting profile details from db
							$sql = "SELECT * FROM 8bd_religion_details  WHERE user_id = $id";
							$result = mysqlexec($sql);
							$row=mysqli_fetch_assoc($result);

							//Biodata 8
							if($row){
							$religion=$row['religion'];
							}
						?>


						<div class="biodatanumber_head">
							<table class="short_biodata_value">
                				<tbody>

									<tr class="opened">
										<?php if (!empty($biodatagender)) { ?>
										<td class="day_label">Biodata Type</td>
										<?php } ?>
										<?php if (!empty($biodatagender)) { ?>
										<td class="day_value"><?php echo $biodatagender;?></td>
										<?php } ?>
									</tr>
										
									<tr class="opened">
										<?php if (!empty($dob)) { ?>
										<td class="day_label">DOB</td>
										<?php } ?>
										<?php if (!empty($dob)) { ?>
										<td class="day_value"><?php echo $dob; ?></td>
										<?php } ?>
									</tr>

									<tr class="opened">
										<?php if (!empty($religion)) { ?>
										<td class="day_label">Religion</td>
										<?php } ?>
										<?php if (!empty($religion)) { ?>
										<td class="day_value"><?php echo $religion;?></td>
										<?php } ?>
									</tr>

									<tr class="opened">
										<?php if (!empty($maritalstatus)) { ?>
										<td class="day_label">Marital Status</td>
										<?php } ?>
										<?php if (!empty($maritalstatus)) { ?>
										<td class="day_value"><?php echo $maritalstatus;?></td>
										<?php } ?>
									</tr>

									<tr class="opened">
										<?php if (!empty($Skin_tones)) { ?>
										<td class="day_label">Skin Tones</td>
										<?php } ?>
										<?php if (!empty($Skin_tones)) { ?>
										<td class="day_value"><?php echo $Skin_tones;?></td>
										<?php } ?>
									</tr>

									<tr class="closed">
										<?php if (!empty ($height)) { ?>
										<td class="day_label">Height</td>
										<?php } ?>
										<?php if (!empty ($height)) { ?>
										<td class="day_value closed"><?php echo $height;?></td>
										<?php } ?>
									</tr>

									<tr class="closed">
										<?php if (!empty ($weight)) { ?>
										<td class="day_label">Weight</td>
										<?php } ?>
										<?php if (!empty ($weight)) { ?>
										<td class="day_value closed"><?php echo $weight;?></td>
										<?php } ?>
									</tr>

									<tr class="closed">
										<?php if (!empty ($occupation)) { ?>
										<td class="day_label">Occupation</td>
										<?php } ?>
										<?php if (!empty ($occupation)) { ?>
										<td class="day_value closed"><?php echo $occupation;?></td>
										<?php } ?>
									</tr>

									<tr class="closed">
										<?php if (!empty ($permanent_address)) { ?>
										<td class="day_label">Permanent Address</td>
										<?php } ?>
										<?php if (!empty ($permanent_address)) { ?>
										<td class="day_value closed"><?php echo $permanent_address;?></td>
										<?php } ?>
									</tr>

								</tbody>
							</table>
						</div>
 					</div>
					<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
					-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
					--                   E   N   D                   --
					--   Heading Font Section  / SB Short Biodata    --
					-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
					-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->




					<div class="profile-btn">

						<div class="contact-bio">
							<a href="contactbiodata.php" target="_blank"> <button class="chatbtn" id="chatBtn"><i class="fa fa-phone"></i> Contact</button></a>
						</div>

						<div class="copy-sbbio-link">
							<button class="copylink clipboard" id="Create-post"><i class="fa fa-copy"></i>Copy Link</button>
						</div>

						<div id="copy-message">Link Successfully Copied!</div>
					</div>


					<script>
						var $temp = $("<input>");
						var $url = $(location).attr('href');
						$('.clipboard').on('click', function() {
						$("body").append($temp);
						$temp.val($url).select();
						document.execCommand("copy");
						$temp.remove();
						$("#copy-message").addClass("show");
						setTimeout(function() {
							$("#copy-message").removeClass("show");
						}, 2000);
						})
					</script>

				</div>





				<div class="sbbiodata_profile_recentview">
					<h3>Profiles Recent View</h3>

					<?php
						$sql="SELECT * FROM 1bd_personal_physical  ORDER BY profilecreationdate DESC LIMIT 20"; //Last 20 Profile View maximum 20 Profile Show
						$result=mysqlexec($sql);
						$count=1;
						
						while($row=mysqli_fetch_assoc($result)){
						$profid=$row['user_id'];
						$Skin_tones_recentview1=$row['Skin_tones'];
						$height_recentview1=$row['height'];
						$dateofbirth_recentview1=$row['dateofbirth'];

						$sql3="SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";		
						$result3=mysqlexec($sql3);
						if($result3)
						while($row3=mysqli_fetch_assoc($result3))
						$occupation_recentview1=$row3['occupation'];

						$sql4="SELECT * FROM 4bd_address_details WHERE user_id=$profid";		
						$result4=mysqlexec($sql4);
						if($result4)
						while($row4=mysqli_fetch_assoc($result4))
						$permanent_address_recentview1=$row4['permanent_address'];
							
						//getting photo
						$sql2="SELECT * FROM photos WHERE user_id=$profid";
						$result2=mysqlexec($sql2);
						$row2=mysqli_fetch_assoc($result2);
						$pic1=$row2['pic1'];

						echo "<div class=\"biodatarecent_viewlist\">";
						echo "<div class=\"sbbio_header_recent_view\">";

						// Start of Default Photo Show
						echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\">";
						if (!empty($pic1)) {
						echo "<img class=\"img-responsive\" src=\"profile/{$profid}/{$pic1}\"/>";
						} else {
						echo "<img class=\"img-responsive\" src=\"images/shosurbari-male-icon.jpg\"/>";
						}
						echo "</a>";
						// End of Default photo Show

						echo "<div class=\"sbbio_number_recentview\"><span class=\"sb_biodatanumber_recentview\"> {$profid} <br> Biodata Number </span> </div>";
						echo "</div>";
						echo "<div class=\"sb_user_recentview\">
						<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Skin Tones </span>  <span class=\"sb_data_recentview\">{$Skin_tones_recentview1}</span></span>
						<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Height </span>  <span class=\"sb_data_recentview\">{$height_recentview1}</span></span>
						<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Occupation </span>      <span class=\"sb_data_recentview\"> {$occupation_recentview1}</span></span>
						<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Address </span>      <span class=\"sb_data_recentview\"> {$permanent_address_recentview1}</span></span>
						<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Birth Year</span>        <span class=\"sb_data_recentview\"> {$dateofbirth_recentview1}</span></span>
						<a href=\"view_profile.php?id={$profid}\" target=\"_blank\"><button class=\"view_sb_profile_recentview\"> View Full Profile</button> </a>
						</div></div>";
						$count++;
						}
					?>
    			</div>
			</div>




			<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
			-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
			--                S  T  A  R  T                  --
			--    		  Profile Details Show   		 	 --
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->	

			<div class="right-side"> <!-- Right-Side -->
				<div class="separate_biodata_sector">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<div id="myTabContent" class="tab-content">


							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                S  T  A  R  T                  --
							--      Personal & Physical  / sb-biodata-1      --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->	
							<?php
								$id=$_GET['id'];
								$profileid=$id;
								
								//getting profile details from db
								$sql = "SELECT * FROM 1bd_personal_physical  WHERE user_id = $id";
								$result = mysqlexec($sql);

								if($result){
								$row= mysqli_fetch_assoc($result);

								if($row){
								$biodatagender=$row['biodatagender'];
								}
								if($row){
								$dob=$row['dateofbirth'];
								}
								if($row){
								$height=$row['height'];
								}
								if($row){
								$weight=$row['weight'];	
								}
								if($row){
								$physicalstatus=$row['physicalstatus'];
								}
								if($row){
								$Skin_tones = $row['Skin_tones'];
								}
								if($row){
								$bloodgroup=$row['bloodgroup'];
								}
								}
							?>		

							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Personal & Physical</h3>
										<tbody>

											<tr class="opened">
												<?php if (!empty($biodatagender)) { ?>
												<td class="day_label">Biodata Type</td>
												<?php } ?>
												<?php if (!empty($biodatagender)) { ?>
												<td class="day_value"><?php echo $biodatagender; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
											<?php if (!empty ($dob)) { ?>
												<td class="day_label">DOB</td>
												<?php } ?>
												<?php if (!empty ($dob)) { ?>
												<td class="day_value"><?php echo $dob;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
											<?php if (!empty ($height)) { ?>
												<td class="day_label">Height</td>
												<?php } ?>
												<?php if (!empty ($height)) { ?>
												<td class="day_value"><?php echo $height;?></td>
												<?php } ?>
											</tr>
											
											<tr class="opened">
											<?php if (!empty ($weight)) { ?>
												<td class="day_label">Weight</td>
												<?php } ?>
												<?php if (!empty ($weight)) { ?>
												<td class="day_value"><?php echo $weight;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
											<?php if (!empty ($physicalstatus)) { ?>
												<td class="day_label">Physical Status</td>
												<?php } ?>
												<?php if (!empty ($physicalstatus)) { ?>
												<td class="day_value closed"><span><?php echo $physicalstatus;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
											<?php if (!empty ($Skin_tones)) { ?>
												<td class="day_label">Skin Tones</td>
												<?php } ?>
												<?php if (!empty ($Skin_tones)) { ?>
												<td class="day_value closed"><span><?php echo $Skin_tones;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
											<?php if (!empty ($bloodgroup)) { ?>
												<td class="day_label">Blood Group</td>
												<?php } ?>
												<?php if (!empty ($bloodgroup)) { ?>
												<td class="day_value closed"><span><?php echo $bloodgroup;?></span></td>
												<?php } ?>
											</tr>

										</tbody>
									</table>
								</div>
								<div class="clearfix"> </div>
								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                   E   N   D                   --
								--       Personal & Physical  / sb-biodata-1     --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                S  T  A  R  T                  --
								--     Personal & Life Style  / sb-biodata-2     --
								--                                               --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
								<?php
									$id=$_GET['id'];
									$profileid=$id;

									//getting profile details from db
									$sql = "SELECT * FROM 2bd_personal_lifestyle WHERE user_id = $id";
									$result = mysqlexec($sql);

									if($result){
									$row= mysqli_fetch_assoc($result);

									if($row){
									$smoke=$row['smoke'];
									}
									if($row){
									$occupation=$row['occupation'];
									}
									if($row){
									$occupation_describe=$row['occupation_describe'];
									}
									if($row){
									$dress_code=$row['dress_code'];
									}
									if($row){
									$aboutme=$row['aboutme'];
									}
									}
								?>

				    			<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Personal & Life Style</h3>
										<tbody>

											<tr class="opened">
												<?php if (!empty ($smoke)) { ?>
												<td class="day_label">Smoke or Drinks</td>
												<?php } ?>
												<?php if (!empty ($smoke)) { ?>
												<td class="day_value"><?php echo $smoke;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($occupation)) { ?>
												<td class="day_label">Occupation</td>
												<?php } ?>
												<?php if (!empty ($occupation)) { ?>
												<td class="day_value"><?php echo $occupation;?></td>
												<?php } ?>
											</tr>
											
											<tr class="opened">
												<?php if (!empty ($occupation_describe)) { ?>
												<td class="day_label">Occupation Describe</td>
												<?php } ?>
												<?php if (!empty ($occupation_describe)) { ?>
												<td class="day_value"><?php echo $occupation_describe;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($dress_code)) { ?>
												<td class="day_label">Dress Code</td>
												<?php } ?>
												<?php if (!empty ($dress_code)) { ?>
												<td class="day_value closed"><span><?php echo $dress_code;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($aboutme)) { ?>
												<td class="day_label">About Me</td>
												<?php } ?>
												<?php if (!empty ($aboutme)) { ?>
												<td class="day_value closed"><span><?php echo $aboutme;?></span></td>
												<?php } ?>
											</tr>

										</tbody>
				            		</table>
				        		</div>
				        		<div class="clearfix"> </div>
								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                   E   N   D                   --
								--     Personal & Life Style  / sb-biodata-2     --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                S  T  A  R  T                  --
								--  Educational Qualifications  / sb-biodata-3   --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
								<?php
									$id=$_GET['id'];
									$profileid=$id;
									
									//getting profile details from db
									$sql = "SELECT * FROM 3bd_educational_qualifications WHERE user_id = $id";
									$result = mysqlexec($sql);

									if($result){
									$row= mysqli_fetch_assoc($result);

									if($row){
									$education_method=$row['education_method'];
									}
									if($row){
									$sscpassyear=$row['sscpassyear'];
									}
									if($row){
									$current_education=$row['current_education'];
									}
									if($row){
									$maximum_education=$row['maximum_education'];
									}
									}
								?>

								<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Educational Qualifications</h3>
										<tbody>

											<tr class="opened">
												<?php if (!empty ($education_method)) { ?>
												<td class="day_label">Education Method</td>
												<?php } ?>
												<?php if (!empty ($education_method)) { ?>
												<td class="day_value"><?php echo $education_method; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($sscpassyear)) { ?>
												<td class="day_label">SSC Passing Year</td>
												<?php } ?>
												<?php if (!empty ($sscpassyear)) { ?>
												<td class="day_value"><?php echo $sscpassyear;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($current_education)) { ?>
												<td class="day_label">Current Education</td>
												<?php } ?>
												<?php if (!empty ($current_education)) { ?>
												<td class="day_value"><?php echo $current_education;?></td>
												<?php } ?>
											</tr>
											
											<tr class="opened">
												<?php if (!empty ($maximum_education)) { ?>
												<td class="day_label">Maximum Education</td>
												<?php } ?>
												<?php if (!empty ($maximum_education)) { ?>
												<td class="day_value"><?php echo $maximum_education; ?></td>
												<?php } ?>
											</tr>

										</tbody>
									</table>
								</div>
								<div class="clearfix"> </div>
								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                   E   N   D                   --
								--  Educational Qualifications  / sb-biodata-3   --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                S  T  A  R  T                  --
								--       Address Details  /  sb-biodata-4        --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
								<?php
									$id=$_GET['id'];
									$profileid=$id;
									
									//getting profile details from db
									$sql = "SELECT * FROM 4bd_address_details WHERE user_id = $id";
									$result = mysqlexec($sql);

									if($result){
									$row= mysqli_fetch_assoc($result);

									if($row){
									$permanent_division=$row['permanent_division'];
									}
									if($row){
									$present_address=$row['present_address'];
									}
									if($row){
									$permanent_address=$row['permanent_address'];
									}
									if($row){
									$childhood=$row['childhood'];
									}
									}
								?>

				    			<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Address Details</h3>
										<tbody>

											<tr class="opened">
												<?php if (!empty ($permanent_division)) { ?>
												<td class="day_label">Permanent Address Division</td>
												<?php } ?>
												<?php if (!empty ($permanent_division)) { ?>
												<td class="day_value"><?php echo $permanent_division; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($permanent_address)) { ?>
												<td class="day_label">Permanent Address District</td>
												<?php } ?>
												<?php if (!empty ($permanent_address)) { ?>
												<td class="day_value"><?php echo $permanent_address;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($present_address)) { ?>
												<td class="day_label">Present Address</td>
												<?php } ?>
												<?php if (!empty ($present_address)) { ?>
												<td class="day_value"><?php echo $present_address;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($childhood)) { ?>
												<td class="day_label">Childhood</td>
												<?php } ?>
												<?php if (!empty ($childhood)) { ?>
												<td class="day_value"><?php echo $childhood; ?></td>
												<?php } ?>
											</tr>

										</tbody>
				            		</table>
				        		</div>
				        		<div class="clearfix"> </div>
								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                   E   N   D                   --
								--       Address Details  /  sb-biodata-4        --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                S  T  A  R  T                  --
								--   Male Marriage related Info / sb-biodata-6   --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
								<?php
									$id=$_GET['id'];
									$profileid=$id;
									

									//bd_marriage_related_qs_male_6($id);
									//getting profile details from db
									$sql="SELECT * FROM 6bd_marriage_related_qs_male WHERE user_id = $id";
									$result = mysqlexec($sql);

									if($result){
										$row=mysqli_fetch_assoc($result);
										if($row){
											$guardians_agree_male=$row['guardians_agree_male'];
										}
										if($row){
											$allowstudy_aftermarriage=$row['allowstudy_aftermarriage'];
										}
										if($row){
											$allowjob_aftermarriage=$row['allowjob_aftermarriage'];
										}
										if($row){
											$livewife_aftermarriage=$row['livewife_aftermarriage'];
										}
										if($row){
											$profileby=$row['profileby'];
										}
									}


									//bd_marriage_related_qs_female_7($id);
									//getting profile details from db
									$sql="SELECT * FROM 7bd_marriage_related_qs_female WHERE user_id = $id";
									$result = mysqlexec($sql);

									if($result){
										$row=mysqli_fetch_assoc($result);
										if($row){
											$guardians_agree_female=$row['guardians_agree_female'];
										}
										if($row){
											$anyjob_aftermarriage=$row['anyjob_aftermarriage'];
										}
										if($row){
											$studies_aftermarriage=$row['studies_aftermarriage'];
										}
										if($row){
											$agree_marriage_student=$row['agree_marriage_student'];
										}
										if($row){
											$profileby=$row['profileby'];
										}
									}


									//6bd_7bd_marital_status($id);
									//getting profile details from db
									$sql="SELECT * FROM 6bd_7bd_marital_status WHERE user_id = $id";
									$result = mysqlexec($sql);

									if($result){
										$row=mysqli_fetch_assoc($result);
										if($row){
											$maritalstatus=$row['maritalstatus'];
										}


										if($row){
											$divorce_reason=$row['divorce_reason'];
										}
										if($row){
											$divorce_how_many_son=$row['divorce_how_many_son'];
										}
										if($row){
											$divorce_son_details=$row['divorce_son_details'];
										}


										if($row){
											$how_widow=$row['how_widow'];
										}
										if($row){
											$widow_how_many_son=$row['widow_how_many_son'];
										}
										if($row){
											$widow_son_details=$row['widow_son_details'];
										}


										if($row){
											$how_widower=$row['how_widower'];
										}
										if($row){
											$widower_how_many_son=$row['widower_how_many_son'];
										}
										if($row){
											$widower_son_details=$row['widower_son_details'];
										}


										if($row){
											$get_wife_permission=$row['get_wife_permission'];
										}
										if($row){
											$get_family_permission=$row['get_family_permission'];
										}
										if($row){
											$why_again_married=$row['why_again_married'];
										}
										if($row){
											$married_how_many_son=$row['married_how_many_son'];
										}
										if($row){
											$married_son_details=$row['married_son_details'];
										}
										if($row){
											$profilecreationdate=$row['profilecreationdate'];
										}
									}
								?>

				    			<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Marriage related Information</h3>
										<tbody>

										<!-- Marital Status 6 & 7 -->
											<tr class="opened">
												<?php if (!empty ($maritalstatus)) { ?>
												<td class="day_label">Marital Status</td>
												<?php } ?>
												<?php if (!empty ($maritalstatus)) { ?>
												<td class="day_value"><?php echo $maritalstatus; ?></td>
												<?php } ?>
											</tr>

											<!-- If Divorce -->
											<tr class="opened">
												<?php if (!empty ($divorce_reason)) { ?>
												<td class="day_label">Reason of Divorce?</td>
												<?php } ?>
												<?php if (!empty ($divorce_reason)) { ?>
												<td class="day_value"><?php echo $divorce_reason; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($divorce_how_many_son)) { ?>
												<td class="day_label">How many sons?</td>
												<?php } ?>
												<?php if (!empty ($divorce_how_many_son)) { ?>
												<td class="day_value"><?php echo $divorce_how_many_son; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($divorce_son_details)) { ?>
												<td class="day_label">Son Details?</td>
												<?php } ?>
												<?php if (!empty ($divorce_son_details)) { ?>
												<td class="day_value"><?php echo $divorce_son_details; ?></td>
												<?php } ?>
											</tr>


											<!-- If Widow -->
											<tr class="opened">
												<?php if (!empty ($how_widow)) { ?>
												<td class="day_label">How to Widow?</td>
												<?php } ?>
												<?php if (!empty ($how_widow)) { ?>
												<td class="day_value"><?php echo $how_widow; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($widow_how_many_son)) { ?>
												<td class="day_label">How many sons?</td>
												<?php } ?>
												<?php if (!empty ($widow_how_many_son)) { ?>
												<td class="day_value"><?php echo $widow_how_many_son; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($widow_son_details)) { ?>
												<td class="day_label">Son Details?</td>
												<?php } ?>
												<?php if (!empty ($widow_son_details)) { ?>
												<td class="day_value"><?php echo $widow_son_details; ?></td>
												<?php } ?>
											</tr>

											<!-- If Widower -->
											<tr class="opened">
												<?php if (!empty ($how_widower)) { ?>
												<td class="day_label">How to Widower?</td>
												<?php } ?>
												<?php if (!empty ($how_widower)) { ?>
												<td class="day_value"><?php echo $how_widower; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($widower_how_many_son)) { ?>
												<td class="day_label">How many sons?</td>
												<?php } ?>
												<?php if (!empty ($widower_how_many_son)) { ?>
												<td class="day_value"><?php echo $widower_how_many_son; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($widower_son_details)) { ?>
												<td class="day_label">Son Details?</td>
												<?php } ?>
												<?php if (!empty ($widower_son_details)) { ?>
												<td class="day_value"><?php echo $widower_son_details; ?></td>
												<?php } ?>
											</tr>


											<!-- If Married -->
											<tr class="opened">
												<?php if (!empty ($get_wife_permission)) { ?>
												<td class="day_label">Get permission from your present Wife?</td>
												<?php } ?>
												<?php if (!empty ($get_wife_permission)) { ?>
												<td class="day_value"><?php echo $get_wife_permission; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($get_family_permission)) { ?>
												<td class="day_label">Get permission from your Family & Wife's Family?</td>
												<?php } ?>
												<?php if (!empty ($get_family_permission)) { ?>
												<td class="day_value"><?php echo $get_family_permission; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($why_again_married)) { ?>
												<td class="day_label">Why again Married?</td>
												<?php } ?>
												<?php if (!empty ($why_again_married)) { ?>
												<td class="day_value"><?php echo $why_again_married; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($married_how_many_son)) { ?>
												<td class="day_label">How many sons?</td>
												<?php } ?>
												<?php if (!empty ($married_how_many_son)) { ?>
												<td class="day_value"><?php echo $married_how_many_son; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($married_son_details)) { ?>
												<td class="day_label">Son Details?</td>
												<?php } ?>
												<?php if (!empty ($married_son_details)) { ?>
												<td class="day_value"><?php echo $married_son_details; ?></td>
												<?php } ?>
											</tr>


											

										<!-- bd_marriage_related_qs_Male & Female($id); -->
											<tr class="opened">
												<?php if (!empty ($guardians_agree_male)) { ?>
												<td class="day_label">Guardians Agree</td>
												<?php } ?>
												<?php if (!empty ($guardians_agree_male)) { ?>
												<td class="day_value"><?php echo $guardians_agree_male; ?></td>
												<?php } ?>
											</tr>


											<tr class="opened">
												<?php if (!empty ($allowstudy_aftermarriage)) { ?>
												<td class="day_label">Allow Study After Marriage</td>
												<?php } ?>
												<?php if (!empty ($allowstudy_aftermarriage)) { ?>
												<td class="day_value"><?php echo $allowstudy_aftermarriage;?></td>
												<?php } ?>
											</tr>
											<!-- Top Male |OR| Bellow Female -->
											<tr class="opened">
												<?php if (!empty ($studies_aftermarriage)) { ?>
												<td class="day_label">Studies After Marriage</td>
												<?php } ?>
												<?php if (!empty ($studies_aftermarriage)) { ?>
												<td class="day_value"><?php echo $studies_aftermarriage;?></td>
												<?php } ?>
											</tr>


											<tr class="opened">
												<?php if (!empty ($allowjob_aftermarriage)) { ?>
												<td class="day_label">Allow Job After Marriage</td>
												<?php } ?>
												<?php if (!empty ($allowjob_aftermarriage)) { ?>
												<td class="day_value"><?php echo $allowjob_aftermarriage;?></td>
												<?php } ?>
											</tr>
											<!-- Top Male |OR| Bellow Female -->
											<tr class="opened">
												<?php if (!empty ($anyjob_aftermarriage)) { ?>
												<td class="day_label">Any Job After Marriage</td>
												<?php } ?>
												<?php if (!empty ($anyjob_aftermarriage)) { ?>
												<td class="day_value"><?php echo $anyjob_aftermarriage;?></td>
												<?php } ?>
											</tr>

											
											<tr class="opened">
												<?php if (!empty ($livewife_aftermarriage)) { ?>
												<td class="day_label">Live Wife After Marriage</td>
												<?php } ?>
												<?php if (!empty ($livewife_aftermarriage)) { ?>
												<td class="day_value"><?php echo $livewife_aftermarriage; ?></td>
												<?php } ?>
											</tr>
											<!-- Top Male |OR| Bellow Female -->
											<tr class="opened">
												<?php if (!empty ($agree_marriage_student)) { ?>
												<td class="day_label">Agree Marriage Student</td>
												<?php } ?>
												<?php if (!empty ($agree_marriage_student)) { ?>
												<td class="day_value"><?php echo $agree_marriage_student; ?></td>
												<?php } ?>
											</tr>



											<tr class="opened">
												<?php if (!empty ($profileby)) { ?>
												<td class="day_label">Profile By</td>
												<?php } ?>
												<?php if (!empty ($profileby)) { ?>
												<td  class="day_value closed"><span><?php echo $profileby;?></span></td>
												<?php } ?>
											</tr>

										</tbody>
									</table>
								</div>
				        		<div class="clearfix"> </div>
								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                   E   N   D                   --
								--   Male Marriage related Info / sb-biodata-6   --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                S  T  A  R  T                  --
								--  Female Marriage related Info / sb-biodata-7  --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
								<!-- <?php
									// $id=$_GET['id'];
									// $profileid=$id;
									
									// //getting profile details from db
									// $sql = "SELECT * FROM 7bd_marriage_related_qs_female WHERE user_id = $id";
									// $result = mysqlexec($sql);

									// if($result){
									// $row= mysqli_fetch_assoc($result);

									// if($row){
									// $guardians_agree_female=$row['guardians_agree_female'];
									// }
									// if($row){
									// $anyjob_aftermarriage=$row['anyjob_aftermarriage'];
									// }
									// if($row){
									// $studies_aftermarriage=$row['studies_aftermarriage'];
									// }
									// if($row){
									// $agree_marriage_student=$row['agree_marriage_student'];
									// }
									// if($row){
									// $profileby=$row['profileby'];
									// }
									// }
								?> -->
								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                   E   N   D                   --
								--  Female Marriage related Info / sb-biodata-7  --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





								<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
								-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
								--                S  T  A  R  T                  --
								--        Religion Details / sb-biodata-8        --
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
								-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
								<?php
									$id=$_GET['id'];
									$profileid=$id;
									
									//getting profile details from db
									$sql = "SELECT * FROM 8bd_religion_details WHERE user_id = $id";
									$result = mysqlexec($sql);

									if($result){
									$row= mysqli_fetch_assoc($result);

									if($row){
									$religion=$row['religion'];
									}
									if($row){
									$yourreligion_condition=$row['yourreligion_condition'];
									}
									}
								?>

								<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Religion Details</h3>
				        				<tbody>

											<tr class="opened">
												<?php if (!empty ($religion)) { ?>
												<td class="day_label">Religion</td>
												<?php } ?>
												<?php if (!empty ($religion)) { ?>
												<td class="day_value"><?php echo $religion; ?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($yourreligion_condition)) { ?>
												<td class="day_label">Your Religion Condition</td>
												<?php } ?>
												<?php if (!empty ($yourreligion_condition)) { ?>
												<td class="day_value"><?php echo $yourreligion_condition;?></td>
												<?php } ?>
											</tr>

										</tbody>
									</table>
								</div>
								<div class="clearfix"> </div>
							</div>
							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                   E   N   D                   --
							--        Religion Details / sb-biodata-8        --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                S  T  A  R  T                  --
							--        Family Details  / sb-biodata-5         --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
							<?php
								$id=$_GET['id'];
								$profileid=$id;
								
								//getting profile details from db
								$sql = "SELECT * FROM 5bd_family_information WHERE user_id = $id";
								$result = mysqlexec($sql);

								if($result){
								$row= mysqli_fetch_assoc($result);

								if($row){
									$father_alive=$row['father_alive'];
								}
								if($row){
								$fatheroccupation=$row['fatheroccupation'];
								}
								if($row){
								$mother_alive=$row['mother_alive'];
								}
								if($row){
								$motheroccupation=$row['motheroccupation'];
								}
								if($row){
								$brosis_number=$row['brosis_number'];
								}
								if($row){
								$brosis_info=$row['brosis_info'];
								}
								if($row){
								$uncle_profession=$row['uncle_profession'];
								}
								if($row){
								$family_class=$row['family_class'];
								}
								if($row){
								$financial_condition=$row['financial_condition'];
								}
								if($row){
								$family_religious=$row['family_religious'];
								}
								}
							?>


							<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
								<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Family Details</h3>
										<tbody>

											<tr class="opened">
												<?php if (!empty ($father_alive)) { ?>
												<td class="day_label">Father Alive</td>
												<?php } ?>
												<?php if (!empty ($father_alive)) { ?>
												<td class="day_value"><?php echo $father_alive;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($fatheroccupation)) { ?>
												<td class="day_label">Father Occupation</td>
												<?php } ?>
												<?php if (!empty ($fatheroccupation)) { ?>
												<td class="day_value"><?php echo $fatheroccupation;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($mother_alive)) { ?>
												<td class="day_label">Mother Alive</td>
												<?php } ?>
												<?php if (!empty ($mother_alive)) { ?>
												<td class="day_value closed"><span><?php echo $mother_alive;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($motheroccupation)) { ?>
												<td class="day_label">Mother Occupation</td>
												<?php } ?>
												<?php if (!empty ($motheroccupation)) { ?>
												<td class="day_value closed"><span><?php echo $motheroccupation;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($brosis_number)) { ?>
												<td class="day_label">Bro Sis Number</td>
												<?php } ?>
												<?php if (!empty ($brosis_number)) { ?>
												<td class="day_value closed"><span><?php echo $brosis_number;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($brosis_info)) { ?>
												<td class="day_label">Bro Sis Info</td>
												<?php } ?>
												<?php if (!empty ($brosis_info)) { ?>
												<td class="day_value closed"><span><?php echo $brosis_info;?></span></td>
												<?php } ?>
											</tr>

											
											<tr class="opened">
												<?php if (!empty ($uncle_profession)) { ?>
												<td class="day_label">Uncle Profession</td>
												<?php } ?>
												<?php if (!empty ($uncle_profession)) { ?>
												<td class="day_value closed"><span><?php echo $uncle_profession;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($family_class)) { ?>
												<td class="day_label">Family Class</td>
												<?php } ?>
												<?php if (!empty ($family_class)) { ?>
												<td class="day_value closed"><span><?php echo $family_class;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($financial_condition)) { ?>
												<td class="day_label">Financial Condition</td>
												<?php } ?>
												<?php if (!empty ($financial_condition)) { ?>
												<td class="day_value closed"><span><?php echo $financial_condition;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($family_religious)) { ?>
												<td class="day_label">Family Religious</td>
												<?php } ?>
												<?php if (!empty ($family_religious)) { ?>
												<td class="day_value closed"><span><?php echo $family_religious;?></span></td>
												<?php } ?>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="clearfix"> </div>
							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                   E   N   D                   --
							--        Family Details  / sb-biodata-5         --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

							



							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                S  T  A  R  T                  --
							--     Expected Life Partner / sb-biodata-9      --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
							<?php
								$id=$_GET['id'];
								$profileid=$id;
								
								//getting profile details from db
								$sql = "SELECT * FROM 9bd_expected_life_partner WHERE user_id = $id";
								$result = mysqlexec($sql);

								if($result){
								$row= mysqli_fetch_assoc($result);

								if($row){
								$partner_religius=$row['partner_religius'];
								}
								if($row){
								$partner_district=$row['partner_district'];
								}
								if($row){
								$partner_maritialstatus=$row['partner_maritialstatus'];
								}
								if($row){
								$partner_age=$row['partner_age'];
								}
								if($row){
								$partner_skintones=$row['partner_skintones'];
								}
								if($row){
								$partner_height=$row['partner_height'];
								}
								if($row){
								$partner_education=$row['partner_education'];
								}
								if($row){
								$partner_profession=$row['partner_profession'];
								}
								if($row){
								$partner_financial=$row['partner_financial'];
								}
								if($row){
								$partner_attributes=$row['partner_attributes'];
								}
								}
							?>	

							<div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
								<div class="biodatavalue_list">
									<table class="biodata_value_data">
										<h3>Expected Partner</h3>
										<tbody>
											<tr class="opened">
												<?php if (!empty ($partner_religius)) { ?>
												<td class="day_label">Partner Religius</td>
												<?php } ?>
												<?php if (!empty ($partner_religius)) { ?>
												<td class="day_value"><?php echo $partner_religius;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_district)) { ?>
												<td class="day_label">Partner District</td>
												<?php } ?>
												<?php if (!empty ($partner_district)) { ?>
												<td class="day_value"><?php echo $partner_district;?></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_maritialstatus)) { ?>
												<td class="day_label">Partner Maritial Status</td>
												<?php } ?>
												<?php if (!empty ($partner_maritialstatus)) { ?>
												<td class="day_value closed"><span><?php echo $partner_maritialstatus;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_age)) { ?>
												<td class="day_label">Partner Age</td>
												<?php } ?>
												<?php if (!empty ($partner_age)) { ?>
												<td class="day_value closed"><span><?php echo $partner_age;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_skintones)) { ?>
												<td class="day_label">Partner Skin Tones</td>
												<?php } ?>
												<?php if (!empty ($partner_skintones)) { ?>
												<td class="day_value closed"><span><?php echo $partner_skintones;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_height)) { ?>
												<td class="day_label">Partner Height</td>
												<?php } ?>
												<?php if (!empty ($partner_height)) { ?>
												<td class="day_value closed"><span><?php echo $partner_height;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_education)) { ?>
												<td class="day_label">Partner Education</td>
												<?php } ?>
												<?php if (!empty ($partner_education)) { ?>
												<td class="day_value closed"><span><?php echo $partner_education;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_profession)) { ?>
												<td class="day_label">Partner Profession</td>
												<?php } ?>
												<?php if (!empty ($partner_profession)) { ?>
												<td class="day_value closed"><span><?php echo $partner_profession;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_financial)) { ?>
												<td class="day_label">Partner Financial</td>
												<?php } ?>
												<?php if (!empty ($partner_financial)) { ?>
												<td class="day_value closed"><span><?php echo $partner_financial;?></span></td>
												<?php } ?>
											</tr>

											<tr class="opened">
												<?php if (!empty ($partner_attributes)) { ?>
												<td class="day_label">Partner Attributes</td>
												<?php } ?>
												<?php if (!empty ($partner_attributes)) { ?>
												<td class="day_value closed"><span><?php echo $partner_attributes;?></span></td>
												<?php } ?>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="clearfix"> </div>
							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                S  T  A  R  T                  --
							--     Expected Life Partner / sb-biodata-9      --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                S  T  A  R  T                  --
							--    	 Contact Biodata / Contact Biodata    	 --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
							<div class="biodatavalue_list">
								<div class="contact-alert">
									<h3>If you are agree for contact please red message in bellow</h3>
									<p>You can contact Any Biodatas Profile but need some charge for contact You can contact Any Biodatas Profile but need some charge for contact </p>
								</div>

								<div class="profile-btn2">
									<a href="contactbiodata.php" target="_blank"> <button class="chatbtn" id="chatBtn"><i class="fa fa-phone"></i> Contact</button></a>
								</div>
							</div>
							<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
							-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
							--                 E    N    D   	             --
							--    	 Contact Biodata / Contact Biodata    	 --
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
							-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
          
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






	<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
	-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
	--                 S  T  A  R  T  	             --
	--    	 Recent View / Last View Profile    	 --
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
	<div class="sbbiodata_profile_recentview-mobile">
        <h3>Profiles Recent View</h3>

        <?php
        	$sql="SELECT * FROM 1bd_personal_physical  ORDER BY profilecreationdate DESC LIMIT 20";  //Last 20 Profile View maximum 20 Profile Show
            $result=mysqlexec($sql);
            $count=1;
            while($row=mysqli_fetch_assoc($result)){
            $profid=$row['user_id'];
			$Skin_tones_recentview2=$row['Skin_tones'];
			$height_recentview2=$row['height'];
			$dateofbirth_recentview2=$row['dateofbirth'];

			$sql3="SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";		
			$result3=mysqlexec($sql3);
			if($result3)
			while($row3=mysqli_fetch_assoc($result3))
			$occupation_recentview2=$row3['occupation'];

			$sql4="SELECT * FROM 4bd_address_details WHERE user_id=$profid";		
			$result4=mysqlexec($sql4);
			if($result4)
			while($row4=mysqli_fetch_assoc($result4))
			$permanent_address_recentview2=$row4['permanent_address'];
				
            //getting photo
            $sql2="SELECT * FROM photos WHERE user_id=$profid";
            $result2=mysqlexec($sql2);
            $row2=mysqli_fetch_assoc($result2);
			$pic1=$row2['pic1'];

		   	echo "<div class=\"biodatarecent_viewlist\">";
		   	echo "<div class=\"sbbio_header_recent_view\">";
 
			// Start of Default Photo Show
			echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\">";
			if (!empty($pic1)) {
				echo "<img class=\"img-responsive\" src=\"profile/{$profid}/{$pic1}\"/>";
			} else {
				echo "<img class=\"img-responsive\" src=\"images/shosurbari-male-icon.jpg\"/>";
			}
			echo "</a>";
			// End of Default photo Show

			echo "<div class=\"sbbio_number_recentview\"><span class=\"sb_biodatanumber_recentview\"> {$profid} <br> Biodata Number </span> </div>";
			echo "</div>";
			echo "<div class=\"sb_user_recentview\">
			<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Skin Tones </span>  	<span class=\"sb_data_recentview\">{$Skin_tones_recentview2}</span></span>
			<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Height </span>  <span 	class=\"sb_data_recentview\">{$height_recentview2}</span></span>
			<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Occupation </span>      <span class=\"sb_data_recentview\"> {$occupation_recentview2}</span></span>
			<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Address </span>      	<span class=\"sb_data_recentview\"> {$permanent_address_recentview2}</span></span>
			<span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Birth Year</span>       <span class=\"sb_data_recentview\"> {$dateofbirth_recentview2}</span></span>
			<a href=\"view_profile.php?id={$profid}\" target=\"_blank\"><button class=\"view_sb_profile_recentview\"> View Full Profile</button> </a>
			</div></div>";
			$count++;
        	}
        ?>
    </div>
	<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
	-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
	--                 	 E   N   D	 	             --
	--    	 Recent View / Last View Profile    	 --
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->


	<?php include_once("footer.php");?>
	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
		});
	</script> 
</body>
</html>	
