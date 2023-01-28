<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;

//getting profile details from db
$sql="SELECT * FROM customer WHERE cust_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);
if($row){
	$fname=$row['firstname'];
}
if($row){
	$lname=$row['lastname'];
}
if($row){
	$sex=$row['sex'];
}
if($row){
	$email=$row['email'];
}
if($row){
	$dob=$row['dateofbirth'];
}
if($row){
	$religion=$row['religion'];
}
if($row){
	$caste = $row['caste'];
}
if($row){
	$subcaste=$row['subcaste'];
}
if($row){
	$country = $row['country'];
}
if($row){
	$state=$row['state'];
}
if($row){
	$district=$row['district'];
}
if($row){
	$age=$row['age'];
}
if($row){
	$maritalstatus=$row['maritalstatus'];
}
if($row){
	$profileby=$row['profilecreatedby'];
}
if($row){
	$education=$row['education'];
}
if($row){
	$edudescr=$row['education_sub'];
}
if($row){
	$bodytype=$row['body_type'];
}
if($row){
	$physicalstatus=$row['physical_status'];
}
if($row){
	$drink=$row['drink'];
}
if($row){
	$smoke=$row['smoke'];
}
if($row){
	$mothertounge=$row['mothertounge'];
}
if($row){
	$bloodgroup=$row['blood_group'];
}
if($row){
	$weight=$row['weight'];
}
if($row){
	$height=$row['height'];
}
if($row){
	$colour=$row['colour'];
}
if($row){
	$diet=$row['diet'];
}
if($row){
	$occupation=$row['occupation'];
}
if($row){
	$occupationdescr=$row['occupation_descr'];
}
if($row){
	$fatheroccupation=$row['fathers_occupation'];
}
if($row){
	$motheroccupation=$row['mothers_occupation'];
}
if($row){
	$income=$row['annual_income'];
}
if($row){
	$bros=$row['no_bro'];
}
if($row){
	$sis=$row['no_sis'];
}
if($row){
	$aboutme=$row['aboutme'];
}

//end of getting profile detils



	$pic1="";
	$pic2="";
//getting image filenames from db
$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	$pic1=$row2['pic1'];
	$pic2=$row2['pic2'];
}
}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | View_profile :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
		<?php if (!empty($profileid)) { ?>
   	 	<h2>Profile Id : <?php echo $profileid;?></h2>
			<?php } ?>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">

						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic1;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
							<div class="deletbtn">
							  <button type="submit"  name='delete'>Delete Photo </button>
							  <button class="default" onClick="javascript:window.location.href='?update&id=<?php echo $row['id']; ?>'">update</button>
                              <button class="cancel" onClick="javascript:window.location.href='process.php?id=<?php echo $row['id']; ?>'">delete</button>
		                    </div>
						</li>

						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic2;?>">
							<img id="demo" src="profile/<?php echo $profileid;?>/<?php echo $pic2;?>" />
							<form action='uploadphoto.php' method='POST'>
							<div class="deletbtn">
							  <button type="submit"  name='submit'>Delete Photo </button>
							  <button type="remove_btn" onClick="javascript:window.location.href='profile?id=<?php echo $row['id']; ?>'">Remove</button>
                              <button class="cancel"  onClick="javascript:window.location.href='profile?id=<?php echo $row['id']; ?>'"[>delete</button>
		                    </div>
		                    </form>
						</li>

					 </ul>
				  </div>
			</div>












			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>

		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<?php if (!empty($fname)) { ?>
							<td class="day_value"><?php echo $fname . " " .$lname; ?></td>
						    <?php } ?>
						</tr>
							
						<tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<?php if (!empty($age)) { ?>
							<td class="day_value"><?php echo $age . " Years"; ?>/<?php echo $height . " Cm";?> </td>
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
							<td class="day_label">Country :</td>
							<?php if (!empty($country)) { ?>
							<td class="day_value"><?php echo $country;?></td>
							<?php } ?>
						</tr>

					    <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<?php if (!empty ($profileby)) { ?>
							<td class="day_value closed"><span><?php echo $profileby;?></span></td>
							<?php } ?>

						</tr>

					    <tr class="closed">
							<td class="day_label">Education :</td>
							<?php if (!empty ($education)) { ?>
							<td class="day_value closed"><span><?php echo $education;?></span></td>
							<?php } ?>
						</tr>

				    </tbody>
				</table>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

				    <div class="tab_box">
				    	<h1>About Me.</h1>
						<?php if (!empty ($aboutme)) { ?>
				    	<p><?php echo $aboutme; ?></p>
						<?php } ?>
				    </div>

				    <div class="basic_1">
				    	<h3>Basics &amp; Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<?php if (!empty ($fname)) { ?>
									<td class="day_value"><?php echo $fname . " " .$lname; ?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<?php if (!empty ($maritalstatus)) { ?>
									<td class="day_value"><?php echo $maritalstatus;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<?php if (!empty ($bodytype)) { ?>
									<td class="day_value"><?php echo $bodytype;?></td>
									<?php } ?>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Age / Height :</td>
									<?php if (!empty ($age)) { ?>
									<td class="day_value"><?php echo $age; ?>/<?php echo $height;?> cm</td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<?php if (!empty ($physicalstatus)) { ?>
									<td class="day_value closed"><span><?php echo $physicalstatus;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Profile Created by :</td>
									<?php if (!empty ($profileby)) { ?>
									<td class="day_value closed"><span><?php echo $profileby;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Drink :</td>
									<?php if (!empty ($drink)) { ?>
									<td class="day_value closed"><span><?php echo $drink;?></span></td>
									<?php } ?>
								</tr>

						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<?php if (!empty ($age)) { ?>
									<td class="day_value"><?php echo $age;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<?php if (!empty ($mothertounge)) { ?>
									<td class="day_value"><?php echo $mothertounge;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<?php if (!empty ($colour)) { ?>
									<td class="day_value"><?php echo $colour;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<?php if (!empty ($weight)) { ?>
									<td class="day_value"><?php echo $weight;?> KG</td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<?php if (!empty ($bloodgroup)) { ?>
									<td class="day_value"><?php echo $bloodgroup;?></td>
									<?php } ?>
								</tr>

							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<?php if (!empty ($diet)) { ?>
									<td class="day_value closed"><span><?php echo $diet;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<?php if (!empty ($smoke)) { ?>
									<td class="day_value closed"><span><?php echo $smoke;?></span></td>
									<?php } ?>
								</tr>

						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<?php if (!empty ($caste)) { ?>
									<td class="day_value"><?php echo $caste;?></td>
									<?php } ?>
								</tr>
								
							    <tr class="opened">
									<td class="day_label">of Birth :</td>
									<?php if (!empty ($dob)) { ?>
									<td class="day_value closed"><span><?php echo $dob;?></span></td>
									<?php } ?>
								</tr>

							</tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<?php if (!empty ($religion)) { ?>
									<td class="day_value"><?php echo $religion;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Sub Caste :</td>
									<?php if (!empty ($subcaste)) { ?>
									<td class="day_value"><?php echo $subcaste;?></td>
									<?php } ?>
								</tr>
							    
							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Education   :</td>
									<?php if (!empty ($education)) { ?>
									<td class="day_value"><?php echo $education;?></td>
									<?php } ?>
								</tr>

				        		<tr class="opened">
									<td class="day_label">Education Detail :</td>
									<?php if (!empty ($edudescr)) { ?>
									<td class="day_value"><?php echo $edudescr;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<?php if (!empty ($occupationdescr)) { ?>
									<td class="day_value closed"><span><?php echo $occupationdescr;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<?php if (!empty ($income)) { ?>
									<td class="day_value closed"><span><?php echo $income;?></span></td>
									<?php } ?>
								</tr>

							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Father's Occupation :</td>
									<?php if (!empty ($fatheroccupation)) { ?>
									<td class="day_value"><?php echo $fatheroccupation;?></td>
									<?php } ?>
								</tr>

				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<?php if (!empty ($motheroccupation)) { ?>
									<td class="day_value"><?php echo $motheroccupation;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<?php if (!empty ($bros)) { ?>
									<td class="day_value closed"><span><?php echo $bros;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<?php if (!empty ($sis)) { ?>
									<td class="day_value closed"><span><?php echo $sis;?></span></td>
									<?php } ?>
								</tr>

							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>

<?php
//getting partner prefernce
$sql = "SELECT * FROM partnerprefs WHERE custId = $id";
$result = mysqlexec($sql);
$row= mysqli_fetch_assoc($result);
if($row){
$agemin=$row['agemin'];
}
if($row){
$agemax=$row['agemax'];
}
if($row){
$maritalstatus=$row['maritalstatus'];
}
if($row){
$complexion=$row['complexion'];
}
if($row){
$height=$row['height'];
}
if($row){
$diet=$row['diet'];
}
if($row){
$religion=$row['religion'];
}
if($row){
$caste=$row['caste'];
}
if($row){
$mothertounge=$row['mothertounge'];
}
if($row){
$education=$row['education'];
}
if($row){
$occupation=$row['occupation'];
}
if($row){
$country=$row['country'];
}
if($row){
$descr=$row['descr'];
}



?>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<?php if (!empty ($agemin)) { ?>
									<td class="day_value"><?php echo $agemin . " to " . $agemax;?></td>
									<?php } ?>
								</tr>

				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<?php if (!empty ($maritalstatus)) { ?>
									<td class="day_value"><?php echo $maritalstatus;?></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<?php if (!empty ($bodytype)) { ?>
									<td class="day_value closed"><span><?php echo $bodytype;?></span></td>
									<?php } ?>
								</tr>

							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<?php if (!empty ($colour)) { ?>
									<td class="day_value closed"><span><?php echo $colour;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Height:</td>
									<?php if (!empty ($height)) { ?>
									<td class="day_value closed"><span><?php echo $height;?> Cm</span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Diet :</td>
									<?php if (!empty ($diet)) { ?>
									<td class="day_value closed"><span><?php echo $diet;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Religion :</td>
									<?php if (!empty ($religion)) { ?>
									<td class="day_value closed"><span><?php echo $religion;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Caste :</td>
									<?php if (!empty ($caste)) { ?>
									<td class="day_value closed"><span><?php echo $caste;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<?php if (!empty ($mothertounge)) { ?>
									<td class="day_value closed"><span><?php echo $mothertounge;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Education :</td>
									<?php if (!empty ($education)) { ?>
									<td class="day_value closed"><span><?php echo $education;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<?php if (!empty ($occupation)) { ?>
									<td class="day_value closed"><span><?php echo $occupation;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<?php if (!empty ($country)) { ?>
									<td class="day_value closed"><span><?php echo $country;?></span></td>
									<?php } ?>
								</tr>

								<tr class="opened">
									<td class="day_label">State :</td>
									<?php if (!empty ($state)) { ?>
									<td class="day_value closed"><span><?php echo $state;?></span></td>
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
   	 </div>
     <div class="col-md-4 profile_right">
     <!-- 	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div> -->
        <div class="view_profile view_profile2">
        	<h3>View Recent Profiles</h3>
    <?php
     $sql="SELECT * FROM customer ORDER BY profilecreationdate ASC";
      $result=mysqlexec($sql);
      $count=1;
      while($row=mysqli_fetch_assoc($result)){
            $profid=$row['cust_id'];
          //getting photo
          $sql="SELECT * FROM photos WHERE cust_id=$profid";
          $result2=mysqlexec($sql);
          $photo=mysqli_fetch_assoc($result2);
          $pic=$photo['pic1'];
          echo "<ul class=\"profile_item\">";
            echo"<a href=\"view_profile.php?id={$profid}\">";
              echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
               echo "<li class=\"profile_item-desc\">";
                  echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                  echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
                  echo "<h5>" . "View Full Profile" . "</h5>";
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
</div>

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
