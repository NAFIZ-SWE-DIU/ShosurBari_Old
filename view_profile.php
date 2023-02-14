
<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
error_reporting(0);
 // if(isloggedin()){ 
 //do nothing stay here
// } else{
 //  header("location:login.php");
//}
 
$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;


//getting profile details from db
$sql = "SELECT * FROM 1bd_personal_physical  WHERE user_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);
//end of getting profile detils


	$pic1="";

//getting image filenames from db
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
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->

<!-- here 2/0 <div> -->
<div class="grid_3">
<div class="container">

    <div class="breadcrumb1">
    <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
    </ul>
    </div>

<!-- here 2/4 <div> -->
    <div class="profile">
   	<div class="col-md-8 profile_left">
   	 	    <div class="col_3">










<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--               S  T  A  R  T                   --
--   Heading Font Section  / SB Short Biodata    --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

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
$maritalstatus=$row['maritalstatus'];
}
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

			    <div class="col-sm-8 row_1">
				    <table class="table_working_hours">
					    <div class="biodatanumber">
						<?php if (!empty($profileid)) { ?>
							<h2>Biodata No : <span><?php echo $profileid;?></span></h2>
			                <?php } ?>
						</div>

					<div class="col-sm-4 row_22">
					<ul class="slides2">
						<img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
					</ul>

<div class="background2">
  <button class="Contactme1">Contact Me</button>
  <h5>Contact for Married</h5>
</div>
<div class="background">
  <button class="clipboard">Click Me</button>
  <p>Copy My Profile Link</p>
</div>


<script>
var $temp = $("<input>");
var $url = $(location).attr('href');
$('.clipboard').on('click', function() {
  $("body").append($temp);
  $temp.val($url).select();
  document.execCommand("copy");
  $temp.remove();
  $("p").text("Successfully Copied!");
})
</script>



					</div>
		        	<tbody>

		        		<tr class="opened">
							<td class="day_label">Biodata Type :</td>
							<?php if (!empty($biodatagender)) { ?>
							<td class="day_value"><?php echo $biodatagender;?></td>
						    <?php } ?>
						</tr>
							
						<tr class="opened">
							<td class="day_label">DOB :</td>
							<?php if (!empty($dob)) { ?>
							<td class="day_value"><?php echo $dob; ?></td>
							<?php } ?>
						</tr>

					  	<tr class="opened">
							<td class="day_label">Religion :</td>
							<?php if (!empty($religion)) { ?>
							<td class="day_value"><?php echo $religion;?></td>
							<?php } ?>
						</tr>

					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<?php if (!empty($maritalstatus)) { ?>
							<td class="day_value"><?php echo $maritalstatus;?></td>
							<?php } ?>
						</tr>

					    <tr class="opened">
							<td class="day_label">Skin Tones :</td>
							<?php if (!empty($Skin_tones)) { ?>
							<td class="day_value"><?php echo $Skin_tones;?></td>
							<?php } ?>
						</tr>

					    <tr class="closed">
							<td class="day_label">Height :</td>
							<?php if (!empty ($height)) { ?>
							<td class="day_value closed"><?php echo $height;?></td>
							<?php } ?>

						</tr>

					    <tr class="closed">
							<td class="day_label">Weight :</td>
							<?php if (!empty ($weight)) { ?>
							<td class="day_value closed"><?php echo $weight;?></td>
							<?php } ?>
						</tr>

						<tr class="closed">
							<td class="day_label">Occupation :</td>
							<?php if (!empty ($occupation)) { ?>
							<td class="day_value closed"><?php echo $occupation;?></td>
							<?php } ?>
						</tr>

						<tr class="closed">
							<td class="day_label">Permanent Address :</td>
							<?php if (!empty ($permanent_address)) { ?>
							<td class="day_value closed"><?php echo $permanent_address;?></td>
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
--   Heading Font Section  / SB Short Biodata    --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->








<!-- here 2/6 <div> -->
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

			    <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				    <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Extpected Partner</a></li>
			    </ul>

				<!-- here 2/8 <div> -->
			    <div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">



					
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--      Personal & Physical  / sb-biodata-1      --
--                                               --
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
//Biodata 1
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

				    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Personal & Physical</h3>
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Biodata Type :</td>
									<?php if (!empty ($biodatagender)) { ?>
									<td class="day_value"><?php echo $biodatagender; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">DOB :</td>
									<?php if (!empty ($dob)) { ?>
									<td class="day_value"><?php echo $dob;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Height :</td>
									<?php if (!empty ($height)) { ?>
									<td class="day_value"><?php echo $height;?></td>
									<?php } ?>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<?php if (!empty ($weight)) { ?>
									<td class="day_value"><?php echo $weight;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<?php if (!empty ($physicalstatus)) { ?>
									<td class="day_value closed"><span><?php echo $physicalstatus;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Skin Tones :</td>
									<?php if (!empty ($Skin_tones)) { ?>
									<td class="day_value closed"><span><?php echo $Skin_tones;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Blood Group :</td>
									<?php if (!empty ($bloodgroup)) { ?>
									<td class="day_value closed"><span><?php echo $bloodgroup;?></span></td>
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
--       Personal & Physical  / sb-biodata-1     --
--                                               --
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
//Biodata 2 
if($row){
$maritalstatus=$row['maritalstatus'];
}
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

				    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Personal & Life Style</h3>
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<?php if (!empty ($maritalstatus)) { ?>
									<td class="day_value"><?php echo $maritalstatus;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Smoke or Drinks :</td>
									<?php if (!empty ($smoke)) { ?>
									<td class="day_value"><?php echo $smoke;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Occupation :</td>
									<?php if (!empty ($occupation)) { ?>
									<td class="day_value"><?php echo $occupation;?></td>
									<?php } ?>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Occupation Describe :</td>
									<?php if (!empty ($occupation_describe)) { ?>
									<td class="day_value"><?php echo $occupation_describe;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Dress Code :</td>
									<?php if (!empty ($dress_code)) { ?>
									<td class="day_value closed"><span><?php echo $dress_code;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">About Me :</td>
									<?php if (!empty ($aboutme)) { ?>
									<td class="day_value closed"><span><?php echo $aboutme;?></span></td>
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
--     Personal & Life Style  / sb-biodata-2     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->












<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Educational Qualifications  / sb-biodata-3   --
--                                               --
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

//Biodata 3
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

				    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Educational Qualifications</h3>
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Education Method :</td>
									<?php if (!empty ($education_method)) { ?>
									<td class="day_value"><?php echo $education_method; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">SSC Passing Year :</td>
									<?php if (!empty ($sscpassyear)) { ?>
									<td class="day_value"><?php echo $sscpassyear;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Current Education :</td>
									<?php if (!empty ($current_education)) { ?>
									<td class="day_value"><?php echo $current_education;?></td>
									<?php } ?>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Maximum Education :</td>
									<?php if (!empty ($maximum_education)) { ?>
									<td class="day_value"><?php echo $maximum_education; ?></td>
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
--  Educational Qualifications  / sb-biodata-3   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->













<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--       Address Details  /  sb-biodata-4        --
--                                               --
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
//Biodata 4
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

				    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Address Details</h3>
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Permanent Address Division :</td>
									<?php if (!empty ($permanent_division)) { ?>
									<td class="day_value"><?php echo $permanent_division; ?></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Permanent Address District:</td>
									<?php if (!empty ($permanent_address)) { ?>
									<td class="day_value"><?php echo $permanent_address;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Present Address :</td>
									<?php if (!empty ($present_address)) { ?>
									<td class="day_value"><?php echo $present_address;?></td>
									<?php } ?>
								</tr>

							    
							    <tr class="opened">
									<td class="day_label">Childhood :</td>
									<?php if (!empty ($childhood)) { ?>
									<td class="day_value"><?php echo $childhood; ?></td>
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
--       Address Details  /  sb-biodata-4        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->












<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--   Male Marriage related Info / sb-biodata-6   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<?php
 $id=$_GET['id'];
 $profileid=$id;
 
 //getting profile details from db
$sql = "SELECT * FROM 6bd_marriage_related_qs_male WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row= mysqli_fetch_assoc($result);
//Biodata 6 
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
	$profileby_male=$row['profileby_male'];
	}
}
?>

				    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Marriage related Information - M</h3>
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Guardians Agree :</td>
									<?php if (!empty ($guardians_agree_male)) { ?>
									<td class="day_value"><?php echo $guardians_agree_male; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Allow Study After Marriage :</td>
									<?php if (!empty ($allowstudy_aftermarriage)) { ?>
									<td class="day_value"><?php echo $allowstudy_aftermarriage;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Allow Job After Marriage :</td>
									<?php if (!empty ($allowjob_aftermarriage)) { ?>
									<td class="day_value"><?php echo $allowjob_aftermarriage;?></td>
									<?php } ?>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Live Wife After Marriage :</td>
									<?php if (!empty ($livewife_aftermarriage)) { ?>
									<td class="day_value"><?php echo $livewife_aftermarriage; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Profile By :</td>
									<?php if (!empty ($profileby_male)) { ?>
									<td  class="day_value closed"><span><?php echo $profileby_male;?></span></td>
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
--   Male Marriage related Info / sb-biodata-6   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->














<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Female Marriage related Info / sb-biodata-7  --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<?php
 $id=$_GET['id'];
 $profileid=$id;
 
 //getting profile details from db
$sql = "SELECT * FROM 7bd_marriage_related_qs_female WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row= mysqli_fetch_assoc($result);
//Biodata 7
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
	$profileby_female=$row['profileby_female'];
	}
}
?>

                    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Marriage related Information - F</h3>
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Guardians Agree :</td>
									<?php if (!empty ($guardians_agree_female)) { ?>
									<td class="day_value"><?php echo $guardians_agree_female; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Any Job After Marriage :</td>
									<?php if (!empty ($anyjob_aftermarriage)) { ?>
									<td class="day_value"><?php echo $anyjob_aftermarriage;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Studies After Marriage :</td>
									<?php if (!empty ($studies_aftermarriage)) { ?>
									<td class="day_value"><?php echo $studies_aftermarriage;?></td>
									<?php } ?>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Agree Marriage Student :</td>
									<?php if (!empty ($agree_marriage_student)) { ?>
									<td class="day_value"><?php echo $agree_marriage_student; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Profile By :</td>
									<?php if (!empty ($profileby_female)) { ?>
									<td class="day_value closed"><span><?php echo $profileby_female;?></span></td>
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
--  Female Marriage related Info / sb-biodata-7  --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->














<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--        Religion Details / sb-biodata-8        --
--                                               --
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
//Biodata 8
if($row){
	$religion=$row['religion'];
	}
	if($row){
	$yourreligion_condition=$row['yourreligion_condition'];
	}
}
?>

                    <div class="basic_1">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Religion Details</h3>
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Religion :</td>
									<?php if (!empty ($religion)) { ?>
									<td class="day_value"><?php echo $religion; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Your Religion Condition :</td>
									<?php if (!empty ($yourreligion_condition)) { ?>
									<td class="day_value"><?php echo $yourreligion_condition;?></td>
									<?php } ?>
								</tr>

						    </tbody>
				            </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				</div>                                  				<!-- here 1/0 </div> -->
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--        Religion Details / sb-biodata-8        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->


















<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--        Family Details  / sb-biodata-5         --
--                                               --
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
//Biodata 5
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
				    <div class="basic_3">
				    	<div class="basic_1 basic_2">
				    	<div class="col-md-6 basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Family Details</h3>
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Father Alive :</td>
									<?php if (!empty ($father_alive)) { ?>
									<td class="day_value"><?php echo $father_alive;?></td>
									<?php } ?>
								</tr>

				        		<tr class="opened">
									<td class="day_label">Father Occupation :</td>
									<?php if (!empty ($fatheroccupation)) { ?>
									<td class="day_value"><?php echo $fatheroccupation;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Mother Alive :</td>
									<?php if (!empty ($mother_alive)) { ?>
									<td class="day_value closed"><span><?php echo $mother_alive;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Mother Occupation :</td>
									<?php if (!empty ($motheroccupation)) { ?>
									<td class="day_value closed"><span><?php echo $motheroccupation;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Bro Sis Number :</td>
									<?php if (!empty ($brosis_number)) { ?>
									<td class="day_value closed"><span><?php echo $brosis_number;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Bro Sis Info :</td>
									<?php if (!empty ($brosis_info)) { ?>
									<td class="day_value closed"><span><?php echo $brosis_info;?></span></td>
									<?php } ?>
								</tr>

								
								<tr class="opened">
									<td class="day_label">Uncle Profession :</td>
									<?php if (!empty ($uncle_profession)) { ?>
									<td class="day_value closed"><span><?php echo $uncle_profession;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Family Class :</td>
									<?php if (!empty ($family_class)) { ?>
									<td class="day_value closed"><span><?php echo $family_class;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Financial Condition :</td>
									<?php if (!empty ($financial_condition)) { ?>
									<td class="day_value closed"><span><?php echo $financial_condition;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Family Religious :</td>
									<?php if (!empty ($family_religious)) { ?>
									<td class="day_value closed"><span><?php echo $family_religious;?></span></td>
									<?php } ?>
								</tr>

							</tbody>
				            </table>
				        </div>
				        </div>
				    </div>
				</div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--        Family Details  / sb-biodata-5         --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

















<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Expected Life Partner / sb-biodata-9      --
--                                               --
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
//Biodata 9

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
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	    <table class="table_working_hours">
							<h3>Expected Partner</h3>
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Partner Religius   :</td>
									<?php if (!empty ($partner_religius)) { ?>
									<td class="day_value"><?php echo $partner_religius;?></td>
									<?php } ?>
								</tr>

				        		<tr class="opened">
									<td class="day_label">Partner District :</td>
									<?php if (!empty ($partner_district)) { ?>
									<td class="day_value"><?php echo $partner_district;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Partner Maritial Status :</td>
									<?php if (!empty ($partner_maritialstatus)) { ?>
									<td class="day_value closed"><span><?php echo $partner_maritialstatus;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Partner Age :</td>
									<?php if (!empty ($partner_age)) { ?>
									<td class="day_value closed"><span><?php echo $partner_age;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Partner Skin Tones:</td>
									<?php if (!empty ($partner_skintones)) { ?>
									<td class="day_value closed"><span><?php echo $partner_skintones;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Partner Height :</td>
									<?php if (!empty ($partner_height)) { ?>
									<td class="day_value closed"><span><?php echo $partner_height;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Partner Education :</td>
									<?php if (!empty ($partner_education)) { ?>
									<td class="day_value closed"><span><?php echo $partner_education;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Partner Profession :</td>
									<?php if (!empty ($partner_profession)) { ?>
									<td class="day_value closed"><span><?php echo $partner_profession;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Partner Financial :</td>
									<?php if (!empty ($partner_financial)) { ?>
									<td class="day_value closed"><span><?php echo $partner_financial;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Partner Attributes :</td>
									<?php if (!empty ($partner_attributes)) { ?>
									<td class="day_value closed"><span><?php echo $partner_attributes;?></span></td>
									<?php } ?>
								</tr>
								
							</tbody>
				            </table>

				        </div>
				    </div>
				</div>





		        </div>   				<!-- here 4/5 <div> -->
		    </div>
	    </div>
   	</div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--     Expected Life Partner / sb-biodata-9      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->














     <div class="col-md-4 profile_right">
     <!-- 	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div> -->
        <div class="view_profile view_profile2">
        	<h2>View Recent Profiles</h2>
    <?php
     $sql="SELECT * FROM 1bd_personal_physical  ORDER BY profilecreationdate ASC";
      $result=mysqlexec($sql);
      $count=1;
      while($row=mysqli_fetch_assoc($result)){
            $profid=$row['user_id'];
          //getting photo
          $sql="SELECT * FROM photos WHERE user_id=$profid";
          $result2=mysqlexec($sql);
          $photo=mysqli_fetch_assoc($result2);
          $pic=$photo['pic1'];
          echo "<ul class=\"profile_item\">";
            echo"<a href=\"view_profile.php?id={$profid}\">";
              echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
               echo "<li class=\"profile_item-desc\">";
                  echo "<h3>" . "Biodata No : " . $row['user_id'] ."</h3>";
				  echo "<h5>" . "Biodata Type : " . $row['biodatagender'] . "</h5>";
                  echo "<h5>" . "Birth : " . $row['dateofbirth']. "  |  Skin : " . $row['Skin_tones'] . "</h5>";
				  echo "<h5>" . "Height : " . $row['height']. "  |  Weight : " . $row['weight'] . "</h5>";
                  echo "<h6>" . "View Full Profile" . "</h6>";
               echo "</li>";
      echo "</a>";
      echo "</ul>";
      $count++;
      }
     ?>       
    </div>
    </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>           <!-- here 3/8 <div> -->








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
