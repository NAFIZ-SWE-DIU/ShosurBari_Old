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
//Checking start
/*
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $url = "BiodataNumber=".$id;
    header('Location: '.$url);
    exit();
} */
//Checking end

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



<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index.php"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;<|>&nbsp;</span>
                <li class="current-page"><h4>View Profile</h4></li>
            </ul>
        </div>
    </div>
</div>






<div class="UserProfile">  <!-- 1 UserProfile div -->


  <div class="profile-header">  <!-- a profile-header div -->

        <div class="profile-img">
			    <img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
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
?>
      <div class="address">
      <?php if (!empty ($present_address)) { ?>
		<td class="day_value closed"> Present Address : <?php echo $present_address;?> </td>
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



  </div> <!-- a profile-header div -->




  <div class="main-bd">  <!-- 2 main-bd div -->

    <div class="left-side">
      <div class="profile-side">



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
<div class="user-bio">

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



		<div class="biodatanumber_head">
			<table class="short_biodata_value">
		        	
                <tbody>

		        		<tr class="opened">
							<td class="day_label">Biodata Type</td>
							<?php if (!empty($biodatagender)) { ?>
							<td class="day_value"><?php echo $biodatagender;?></td>
						    <?php } ?>
						</tr>
							
						<tr class="opened">
							<td class="day_label">DOB</td>
							<?php if (!empty($dob)) { ?>
							<td class="day_value"><?php echo $dob; ?></td>
							<?php } ?>
						</tr>

					  	<tr class="opened">
							<td class="day_label">Religion</td>
							<?php if (!empty($religion)) { ?>
							<td class="day_value"><?php echo $religion;?></td>
							<?php } ?>
						</tr>

					    <tr class="opened">
							<td class="day_label">Marital Status</td>
							<?php if (!empty($maritalstatus)) { ?>
							<td class="day_value"><?php echo $maritalstatus;?></td>
							<?php } ?>
						</tr>

					    <tr class="opened">
							<td class="day_label">Skin Tones</td>
							<?php if (!empty($Skin_tones)) { ?>
							<td class="day_value"><?php echo $Skin_tones;?></td>
							<?php } ?>
						</tr>

					    <tr class="closed">
							<td class="day_label">Height</td>
							<?php if (!empty ($height)) { ?>
							<td class="day_value closed"><?php echo $height;?></td>
							<?php } ?>

						</tr>

					    <tr class="closed">
							<td class="day_label">Weight</td>
							<?php if (!empty ($weight)) { ?>
							<td class="day_value closed"><?php echo $weight;?></td>
							<?php } ?>
						</tr>

						<tr class="closed">
							<td class="day_label">Occupation</td>
							<?php if (!empty ($occupation)) { ?>
							<td class="day_value closed"><?php echo $occupation;?></td>
							<?php } ?>
						</tr>

						<tr class="closed">
							<td class="day_label">Permanent Address</td>
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
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





        <div class="profile-btn">
                <a href="contactbiodata.php" target="_blank"> <button class="chatbtn" id="chatBtn"><i class="fa fa-phone"></i> Contact</button></a>
                <button class="createbtn clipboard" id="Create-post"><i class="fa fa-copy"></i>Copy Link</button>
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





<div class="sbbiodata_profile_recentview">
        <h3>Profiles Recent View</h3>

        <?php
        $sql="SELECT * FROM 1bd_personal_physical  ORDER BY profilecreationdate ASC";
            $result=mysqlexec($sql);
            $count=1;
            while($row=mysqli_fetch_assoc($result)){
            $profid=$row['user_id'];
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
	  


            //getting photo
            $sql="SELECT * FROM photos WHERE user_id=$profid";
            $result2=mysqlexec($sql);
            $photo=mysqli_fetch_assoc($result2);
            $pic=$photo['pic1'];

		   echo "<div class=\"biodatarecent_viewlist\">";
		   echo "<div class=\"sbbio_header_recent_view\">";
		   echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\"> <img  class=\"img-responsive\" src=\"profile/{$profid}\/{$pic1}\"/></a>";
		   echo "<div class=\"sbbio_number_recentview\"><span class=\"sb_biodatanumber_recentview\"> {$profid} <br> Biodata Number </span> </div>";
		   echo "</div>";

		   echo "<div class=\"sb_user_recentview\">
		   <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Skin Tones </span>  <span class=\"sb_data_recentview\">{$Skin_tones}</span></span>
		   <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Height </span>  <span class=\"sb_data_recentview\">{$height}</span></span>
		   <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Occupation </span>      <span class=\"sb_data_recentview\"> {$occupation}</span></span>
		   <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Address </span>      <span class=\"sb_data_recentview\"> {$permanent_address}</span></span>
		   <span class=\"sb_single_data_recentview\"> <span class=\"sb_value_recentview\"> Birth Year</span>        <span class=\"sb_data_recentview\"> {$dateofbirth}</span></span>
		   <a href=\"view_profile.php?id={$profid}\" target=\"_blank\"><button class=\"view_sb_profile_recentview\"> View Full Profile</button> </a>
		   </div></div>";
           $count++;
		
        }
        ?>
		
    </div>


</div>



















    <div class="right-side"> <!-- 3 right-side div -->


    <div class="separate_biodata_sector">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">


               <!-- no close 2 up 3<div> -->
               <div id="myTabContent" class="tab-content">

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

		<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
			<div class="shosurbari_user_biodata">
				<div class="biodatavalue_list">
				  <table class="biodata_value_data">
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

				    <div class="shosurbari_user_biodata">
				    	<div class="biodatavalue_list">
				    	    <table class="biodata_value_data">
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

				    	<div class="biodatavalue_list">
				    	    <table class="biodata_value_data">
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

				    <div class="shosurbari_user_biodata">
				    	<div class="biodatavalue_list">
				    	    <table class="biodata_value_data">
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

				    <div class="shosurbari_user_biodata">
				    	<div class="biodatavalue_list">
				    	    <table class="biodata_value_data">
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

                    <div class="shosurbari_user_biodata">
				    	<div class="biodatavalue_list">
				    	    <table class="biodata_value_data">
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

            <div class="shosurbari_user_biodata">
				<div class="biodatavalue_list">
				    <table class="biodata_value_data">
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
		</div>
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
				<div class="shosurbari_user_biodata">
				    <div class="biodatavalue_list">
				    	<table class="biodata_value_data">
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
				<div class="shosurbari_user_biodata">
                    <div class="biodatavalue_list">
				    	<table class="biodata_value_data">
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

          
        </div>
      </div>
      </div>





    </div> <!-- 3 right-side div -->
  </div> <!-- 2 main-bd div -->
</div> <!-- 1 UserProfile div -->










<style>
@import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");
@import url("https://fonts.googleapis.com/css?family=Bree+Serif&display=swap");

.UserProfile{
    width: 100%;
    margin-left: 0px;
    margin-right: 0px;
}

.profile-header {
  background: #fff;
  width: 100%;
  display: flex;
  height: 140px;
  position: relative;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.2);
  margin-top: -25px;
  border: 1px solid #ccc;
}








.profile-img {
  float: left;
  width: 26%;
  height: 200px;
}

.profile-img img {
  border-radius: 4%;
  height: 175px;
  width: 175px;
  border: 5px solid #fff;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  position: absolute;
  left: 120px;
  top: 35px;
  z-index: 5;
  background: #fff;
}

.profile-nav-info {
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-top: 0px;
  width: 30%;
}
.see_sb_biodata{
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-top: 0px;
  width: 35%;
}

.nav-tabs1 {
        display: inline-block;
        border-bottom: none;
        border-radius: 4px;
        font-size: 15px;
        font-weight: 500;
        background-color:#00bbff;
        width: auto;
        padding: 0px;
        margin: auto;
        white-space: nowrap;
}

.profile-nav-info h3 {
  font-variant: small-caps;
  font-size: 2rem;
  font-family: sans-serif;
  font-weight: bold;
}

.profile-nav-info .address {
  display: flex;
  font-weight: bold;
  color: #777;
}

.profile-nav-info .address p {
  margin-right: 5px;
}

.left-side{
  width: 30%;
}

.right-side{
  width: 65%;
}

.separate_biodata_sector{
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-top: 0px;
  width: 100%;
}

.biodatavalue_list{
  width: 100%;
}
.biodata_value_data{
  width: 100%;
}




.profile-option {
  width: 40px;
  height: 40px;
  position: absolute;
  right: 50px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
  outline: none;
  background: #e40046;
}

.profile-option:hover {
  background: #fff;
  border: 1px solid #e40046;
}
.profile-option:hover .notification i {
  color: #e40046;
}

.profile-option:hover span {
  background: #e40046;
}

.profile-option .notification i {
  color: #fff;
  font-size: 1.2rem;
  transition: all 0.5s ease-in-out;
}

.profile-option .notification .alert-message {
  position: absolute;
  top: -5px;
  right: -5px;
  background: #fff;
  color: #e40046;
  border: 1px solid #e40046;
  padding: 5px;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 0.8rem;
  font-weight: bold;
}

.main-bd {
  width: 100%;
  display: flex;
}

.profile-side {
  width: 300px;
  background: #fff;
  box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  padding: 90px 10px 10px;
  font-family: "Bree Serif", serif;
  margin: auto;
  z-index: 99;
}

.profile-side p {
  margin-bottom: 7px;
  color: #333;
  font-size: 14px;
}

.profile-side p i {
  color: #e40046;
  margin-right: 10px;
}

.mobile-no i {
  transform: rotateY(180deg);
  color: #e40046;
}






    .clipboard {
        border: 0;
        padding: 6px;
        border-radius: 2px;
        background: white;
        cursor: pointer;
        color: #ff0080;
        font-size: 13px;
        position: relative;
        top: 0px;
        left: 0px;
        transition: all .2s ease;
        white-space: nowrap;
    }


.profile-btn {
  display: flex;
  white-space: nowrap;
  width: 100%;
  margin-left: 0px;
}


button.chatbtn,
button.createbtn {
  border: 0;
  padding: 10px;
  width: auto;
  border-radius: 3px;
  background: #e40046;
  color: #fff;
  font-family: "Bree Serif";
  font-size: 1rem;
  margin: 2px 15px;
  cursor: pointer;
  outline: none;
  margin-top: 20px;
  margin-bottom: 10px;
  transition:  0.3s ease-in-out;
  box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.3);
}

button.chatbtn:hover,
button.createbtn:hover {
  background: rgba(288, 0, 70, 0.9);
}

button.chatbtn i,
button.createbtn i {
  margin-right: 5px;
}









.user-rating {
  display: flex;
}

.user-rating h3 {
  font-size: 2.5rem;
  font-weight: 200;
  margin-right: 5px;
  letter-spacing: 1px;
  color: #666;
}

.user-rating .no-of-user-rate {
  font-size: 0.9rem;
}

.rate {
  padding-top: 6px;
}

.rate i {
  font-size: 0.9rem;
  color: rgba(228, 0, 70, 1);
}

.nav {
  width: 100%;
  z-index: -1;
}



.profile-body {
  width: 100%;
  z-index: -1;
}

.tab {
  display: none;
}

.tab {
  padding: 20px;
  width: 100%;
  text-align: center;
}

@media (max-width: 1100px) {
  .profile-side {
    width: 250px;
    padding: 90px 15px 20px;
  }

  .profile-img img {
    height: 200px;
    width: 200px;
    left: 50px;
    top: 50px;
  }
}

@media (max-width: 900px) {

  .profile-header {
    display: flex;
    height: 100%;
    flex-direction: column;
    text-align: center;
    padding-bottom: 20px;
  }

  .profile-img {
    float: left;
    width: 100%;
    height: 200px;
  }

  .profile-img img {
    position: relative;
    height: 200px;
    width: 200px;
    left: 0px;
  }

  .profile-nav-info {
    text-align: center;
  }

  .profile-option {
    right: 20px;
    top: 75%;
    transform: translateY(50%);
  }

  .main-bd {
    flex-direction: column;
    padding-right: 0;
  }

  .profile-side {
    width: 100%;
    text-align: center;
    padding: 20px;
    margin: 5px 0;
  }

  .profile-nav-info .address {
    justify-content: center;
  }

  .user-rating {
    justify-content: center;
  }
}

@media (max-width: 400px) {

  .profile-header h3 {
  }

  .profile-option {
    width: 30px;
    height: 30px;
    position: absolute;
    right: 15px;
    top: 83%;
  }

  .profile-option .notification .alert-message {
    top: -3px;
    right: -4px;
    padding: 4px;
    height: 15px;
    width: 15px;
    font-size: 0.7rem;
  }

  .profile-nav-info h3 {
    font-size: 1.9rem;
  }

  .profile-nav-info .address p,
  .profile-nav-info .address span {
    font-size: 0.7rem;
  }
}
#see-more-bio,
#see-less-bio {
  color: blue;
  cursor: pointer;
  text-transform: lowercase;
}
.tab h1 {
  font-family: "Bree Serif", sans-serif;
  display: flex;
  justify-content: center;
  margin: 20px auto;
}

</style>









<script>
    $(".nav ul li").click(function() {
  $(this)
    .addClass("active")
    .siblings()
    .removeClass("active");
});

const tabBtn = document.querySelectorAll(".nav ul li");
const tab = document.querySelectorAll(".tab");

function tabs(panelIndex) {
  tab.forEach(function(node) {
    node.style.display = "none";
  });
  tab[panelIndex].style.display = "block";
}
tabs(0);

let bio = document.querySelector(".bio");
const bioMore = document.querySelector("#see-more-bio");
const bioLength = bio.innerText.length;

function bioText() {
  bio.oldText = bio.innerText;

  bio.innerText = bio.innerText.substring(0, 100) + "...";
  bio.innerHTML += `<span onclick='addLength()' id='see-more-bio'>See More</span>`;
}
//        console.log(bio.innerText)

bioText();

function addLength() {
  bio.innerText = bio.oldText;
  bio.innerHTML +=
    "&nbsp;" + `<span onclick='bioText()' id='see-less-bio'>See Less</span>`;
  document.getElementById("see-less-bio").addEventListener("click", () => {
    document.getElementById("see-less-bio").style.display = "none";
  });
}
if (document.querySelector(".alert-message").innerText > 9) {
  document.querySelector(".alert-message").style.fontSize = ".7rem";
}

    </script>





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
