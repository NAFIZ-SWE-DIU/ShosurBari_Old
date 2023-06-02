<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	physical_marital_update($id);
	//processprofile_form
}
?>

<?php
// $id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
?>

<!DOCTYPE HTML>
<html>



<head>
<title>Edit Biodata - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/optionsearch.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
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
					<li class="current-page"><h4>Edit Biodata</h4></li>
				</ul>

				<?php
					include("includes/dbconn.php");
					//getting profile details from db
					$sql="SELECT * FROM users WHERE id = $id";
					$result = mysqlexec($sql);

					if($result){
					$row=mysqli_fetch_assoc($result);
					if($row){
					$username=$row['username'];
					}
					}
				?>


				<div class="shosurbari-userhome-status">
					<h3><?php echo "Welcome: $username"; ?></h3>
					<!-- Display the account status -->
					<h4 >Account Status:
					<?php if ($deactivated == 0) {
						echo '<span style="color: green;">Active</span>';
						} else {
							echo '<span style="color: red;">Deactivated</span> <br>';
							echo '<span style="color: #0aa4ca; font-size: 14px;">Please Active your account, Go back UserHome page !</span>';
						} ?>
					</h4>
				</div>

			</div>
		</div>
	</div>





	<div class="shosurbari-biodata">
		<!-- multistep form -->
		<form action="" method="POST" id="biodataForm">
            			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active" id="personalPhysical">শারীরিক</li>
				<li id="MarriageInfo">বিবাহ-সম্পর্কিত</li>
			</ul>

	
			<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
			-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
			--                S  T  A  R  T                  --
			--      Personal & Physical  / sb-biodata-1      --
			--                                               --
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
			<?php
				include("includes/dbconn.php");

				//getting profile details from db
				$sql="SELECT * FROM 1bd_personal_physical WHERE user_id = $id";
				$result = mysqlexec($sql);

				if($result){
				$row=mysqli_fetch_assoc($result);
				if($row){
					$biodatagender=$row['biodatagender'];
				}
				if($row){
					$day=$row['dateofbirth'];
				}
				if($row){
					$month=$row['dateofbirth'];
				}
				if($row){
					$year=$row['dateofbirth'];
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

			<!-- Start Fieldset -->
			<fieldset>
				<div class="sb-biodata" id="personalPhysical">
					<div class="sb-biodata-field">
						<h2>শারীরিক তথ্য</h2>
					</div>

					<div class="sb-biodata-option">
						<div class="shosurbari-biodata-field">
							<label for="edit-name">বায়োডাটার ধরণ<span class="form-required" title="This field is required.">*</span></label>
							<select name="biodatagender" required onchange="toggleGenderSections(this.value)">
								<option hidden selected><?php echo $biodatagender; ?></option>
								<option value="পাত্রের বায়োডাটা">পাত্রের বায়োডাটা</option>
								<option value="পাত্রীর বায়োডাটা">পাত্রীর বায়োডাটা</option> 
							</select>
						</div>

						<div class="shosurbari-biodata-field">
							<label for="edit-pass">জন্ম তারিখ<span class="form-required" title="This field is required.">*</span></label>
							<select name="day" required>
								<option hidden selected></option>
								<option value="০১">০১</option>
								<option value="০২">০২</option>
								<option value="০৩">০৩</option>
								<option value="০৪">০৪</option>
								<option value="০৫">০৫</option>
								<option value="০৬">০৬</option>
								<option value="০৭">০৭</option>
								<option value="০৮">০৮</option>
								<option value="০৯">০৯</option>
								<option value="১০">১০</option>
								<option value="১১">১১</option>
								<option value="১২">১২</option>
								<option value="১৩">১৩</option>
								<option value="১৪">১৪</option>
								<option value="১৫">১৫</option>
								<option value="১৬">১৬</option>
								<option value="১৭">১৭</option>
								<option value="১৮">১৮</option>
								<option value="১৯">১৯</option>
								<option value="২০">২০</option>
								<option value="২১">২১</option>
								<option value="২২">২২</option>
								<option value="২৩">২৩</option>
								<option value="২৪">২৪</option>
								<option value="২৫">২৫</option>
								<option value="২৬">২৬</option>
								<option value="২৭">২৭</option>
								<option value="২৮">২৮</option>
								<option value="২৯">২৯</option>
								<option value="৩০">৩০</option>
								<option value="৩১">৩১</option>
							</select>
						</div>

						<div class="shosurbari-biodata-field">
							<label for="edit-pass">জন্ম তারিখ<span class="form-required" title="This field is required.">*</span></label>
							<select name="month" required>
								<option hidden selected></option>
								<option value="জানুয়ারি">জানুয়ারি</option>
								<option value="ফেব্রুয়ারি">ফেব্রুয়ারি</option>
								<option value="মার্চ">মার্চ</option>
								<option value="এপ্রিল">এপ্রিল</option>
								<option value="মে">মে</option>
								<option value="জুন">জুন</option>
								<option value="জুলাই">জুলাই</option>
								<option value="আগস্ট">আগস্ট</option>
								<option value="সেপ্টেম্বর">সেপ্টেম্বর</option>
								<option value="অক্টোবর">অক্টোবর</option>
								<option value="নভেম্বর">নভেম্বর</option>
								<option value="ডিসেম্বর">ডিসেম্বর</option>
							</select>
						</div>

						<div class="shosurbari-biodata-field">
							<label for="edit-pass">জন্ম তারিখ<span class="form-required" title="This field is required.">*</span></label>
							<select name="year" required>
								<option hidden selected></option>
								<option value="২০১৫">২০১৫</option>
								<option value="২০১৪">২০১৪</option>
								<option value="২০১৩">২০১৩</option>
								<option value="২০১২">২০১২</option>
								<option value="২০১১">২০১১</option>
								<option value="২০১০">২০১০</option>
								<option value="২০০৯">২০০৯</option>
								<option value="২০০৮">২০০৮</option>
								<option value="২০০৭">২০০৭</option>
								<option value="২০০৬">২০০৬</option>
								<option value="২০০৫">২০০৫</option>
								<option value="২০০৪">২০০৪</option>
								<option value="২০০৩">২০০৩</option>
								<option value="২০০২">২০০২</option>
								<option value="২০০১">২০০১</option>
								<option value="২০০০">২০০০</option>
								<option value="১৯৯৯">১৯৯৯</option>
								<option value="১৯৯৮">১৯৯৮</option>
								<option value="১৯৯৭">১৯৯৭</option>
								<option value="১৯৯৬">১৯৯৬</option>
								<option value="১৯৯৫">১৯৯৫</option>
								<option value="১৯৯৪">১৯৯৪</option>
								<option value="১৯৯৩">১৯৯৩</option>
								<option value="১৯৯২">১৯৯২</option>
								<option value="১৯৯১">১৯৯১</option>
								<option value="১৯৯০">১৯৯০</option>
								<option value="১৯৮৯">১৯৮৯</option>
								<option value="১৯৮৮">১৯৮৮</option>
								<option value="১৯৮৭">১৯৮৭</option>
								<option value="১৯৮৬">১৯৮৬</option>
								<option value="১৯৮৫">১৯৮৫</option>
								<option value="১৯৮৪">১৯৮৪</option>
								<option value="১৯৮৩">১৯৮৩</option>
								<option value="১৯৮২">১৯৮২</option>
								<option value="১৯৮১">১৯৮১</option>
								<option value="১৯৮০">১৯৮০</option>
								<option value="১৯৭৯">১৯৭৯</option>
								<option value="১৯৭৮">১৯৭৮</option>
								<option value="১৯৭৭">১৯৭৭</option>
								<option value="১৯৭৬">১৯৭৬</option>
								<option value="১৯৭৫">১৯৭৫</option>
							</select>
						</div>


						<div class="shosurbari-biodata-field">
							<label for="edit-name">উচ্চতা<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="height" value="<?php echo $height; ?>" size="100" maxlength="100" class="form-text" placeholder="Please enter your height" required>
						</div>

						<!-- <script>
							function checkInput(input) {
								let value = input.value;
								// Allow only numbers and spaces
								let regex = /^[A-Za-z0-9-.'" ]+$/;
								if (!regex.test(value)) {
									document.getElementById('height-error-message').innerHTML = "Please follow the instruction. Ex: 5 ft 7 in.";
									input.value = '';
								} else {
									document.getElementById('height-error-message').innerHTML = '';
								}
							}
						</script> -->
					
						<div class="shosurbari-biodata-field">
							<label for="edit-name">ওজন <span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="weight" value="<?php echo $weight; ?>" size="100" maxlength="100" class="form-text" required>
						</div>

						<div class="shosurbari-biodata-field">
							<label for="edit-name">শারীরিক সমস্যা আছে কি?<span class="form-required" title="This field is required.">*</span></label>
							<select name="physicalstatus" required>
								<option hidden selected><?php echo $physicalstatus; ?></option>
								<option value="সমস্যা নেই">সমস্যা নেই</option>
								<option value="অন্ধ">অন্ধ</option> 
								<option value="বধির">বধির</option> 
								<option value="বোবা">বোবা</option>
								<option value="ন্যাংড়া">ন্যাংড়া</option>
								<option value="হাত ভাঙ্গা">হাত ভাঙ্গা</option> 
								<option value="হাত কাটা">হাত কাটা</option>  
								<option value="পা ভাঙ্গা">পা ভাঙ্গা</option> 
								<option value="পা কাটা">পা কাটা</option> 
 
							</select>
						</div>

						<div class="shosurbari-biodata-field">
							<label for="edit-name">শারীরিক বর্ণ<span class="form-required" title="This field is required.">*</span></label>
							<select name="Skin_tones" required>
								<option hidden selected><?php echo $Skin_tones; ?></option>
								<option value="উজ্জ্বল ফর্সা">উজ্জ্বল ফর্সা</option>
								<option value="ফর্সা">ফর্সা</option> 
								<option value="উজ্জ্বল শ্যামবর্ণ">উজ্জ্বল শ্যামবর্ণ</option>
								<option value="শ্যামবর্ণ">শ্যামবর্ণ</option>
								<option value="কালো">কালো</option>
							</select>
						</div>

						<div class="shosurbari-biodata-field">
							<label for="edit-name">রক্তের গ্রুপ<span class="form-required" title="This field is required.">*</span></label>
							<select name="bloodgroup" required>
								<option hidden selected><?php echo $bloodgroup; ?></option>
								<option value="A+">A+</option>
								<option value="B+">B+</option> 
								<option value="AB+">AB+</option>
								<option value="O+">O+</option>
								<option value="A-">A-</option>
								<option value="B-">B-</option> 
								<option value="AB-">AB-</option>
								<option value="O-">O-</option>
							</select>
						</div>
					</div>
				</div>

				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<!--Fieldsets end -->
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
			--   Male Marriage related Info / sb-biodata-6   --
			--  Female Marriage related Info / sb-biodata-7  --
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
			<?php
				include("includes/dbconn.php");

				//bd_marriage_related_qs_male_6;
				//getting profile details from db
				$sql="SELECT * FROM 6bd_marriage_related_qs_male WHERE user_id = $id";
				$result = mysqlexec($sql);
				if($result){
					$row=mysqli_fetch_assoc($result);
					if($row){
						$guardians_agree=$row['guardians_agree'];
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

				//bd_marriage_related_qs_female_7;
				//getting profile details from db
				$sql="SELECT * FROM 7bd_marriage_related_qs_female WHERE user_id = $id";
				$result = mysqlexec($sql);
				if($result){
					$row=mysqli_fetch_assoc($result);
					if($row){
						$guardians_agree=$row['guardians_agree'];
					}
					if($row){
						$studies_aftermarriage=$row['studies_aftermarriage'];
					}
					if($row){
						$anyjob_aftermarriage=$row['anyjob_aftermarriage'];
					}
					if($row){
						$agree_marriage_student=$row['agree_marriage_student'];
					}
					if($row){
						$profileby=$row['profileby'];
					}
				}

				//6bd_7bd_marital_status;
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
						$how_widow=$row['how_widow'];
					}


					if($row){
						$how_widower=$row['how_widower'];
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
						$how_many_son=$row['how_many_son'];
					}
					if($row){
						$son_details=$row['son_details'];
					}
					if($row){
						$profilecreationdate=$row['profilecreationdate'];
					}
				}
			?>


			<!--Fieldsets start-->
			<fieldset>
				<div class="sb-biodata" id="maleMarriageInfo">
					<div class="sb-biodata-field">
						<h2>বিবাহ সম্পর্কিত তথ্য</h2>
					</div>

					<div class="sb-biodata-option">
						<div class="shosurbari-biodata-field">
							<label for="edit-name">বৈবাহিক অবস্থা<span class="form-required" title="This field is required.">*</span></label>
							<select name="maritalstatus" required onchange="toggleMaritalStatus(this.value)">
								<option hidden selected><?php echo $maritalstatus; ?></option>
								<option value="অবিবাহিত">অবিবাহিত</option>
								<option value="ডিভোর্স">ডিভোর্স</option>
								<option value="বিধবা">বিধবা</option>
								<option value="বিপত্নীক">বিপত্নীক</option>
								<option value="বিবাহিত">বিবাহিত</option>
							</select>
						</div>

						<!-- Gurdians Aggress Without Married Sections -->
						<div class="shosurbari-biodata-field" id="gurdian-aggress-section" style="display: none;">
							<div class="shosurbari-biodata-field">
								<label for="edit-name">পরিবারের অনুমতি নিয়ে বায়োডাটা পোস্ট করতেছেন?<span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-name" name="guardians_agree"  value="<?php echo $guardians_agree; ?>"  size="100" maxlength="100" class="form-text">
							</div>
						</div>

						<!-- Divorce Section Start -->
						<div class="shosurbari-biodata-field" id="divorce-section" style="display: none;">
							<div class="shosurbari-biodata-field">
								<label for="edit-name">ডিভোর্সের কারণ বর্ণনা করুন এবং কতদিন সংসার করেছেন?<span class="form-required" title="This field is required.">*</span></label>
								<textarea rows="5" name="divorce_reason" value="<?php echo $divorce_reason; ?>" placeholder="Describe Your Divorce Reason" class="form-text-describe"></textarea>
							</div>
						</div>
						<!-- Divorce Section End -->


						<!-- Widow Section Start-->
						<div class="shosurbari-biodata-field" id="widow-section" style="display: none;">
							<div class="shosurbari-biodata-field">
								<label for="edit-name">স্বামী যেভাবে মারা গেছেন এবং কতদিন সংসার করেছেন?<span class="form-required" title="This field is required.">*</span></label>
								<textarea rows="5" name="how_widow" value="<?php echo $how_widow; ?>" placeholder="Describe How You Became a Widow" class="form-text-describe"></textarea>
							</div>
						</div>
						<!-- Widow Section End-->


						<!-- Widower Section Start-->
						<div class="shosurbari-biodata-field" id="widower-section" style="display: none;">
							<div class="shosurbari-biodata-field">
								<label for="edit-name">স্ত্রী যেভাবে মারা গেছেন এবং কতদিন সংসার করেছেন?<span class="form-required" title="This field is required.">*</span></label>
								<textarea rows="5" name="how_widower" value="<?php echo $how_widower; ?>" placeholder="Describe How You Became a Widower" class="form-text-describe"></textarea>
							</div>
						</div>
						<!-- Widower Section End-->


						<!-- Married Section Start-->
						<div class="shosurbari-biodata-field" id="married-section" style="display: none;">
							<div class="shosurbari-biodata-field">
								<label for="edit-name">বর্তমান স্ত্রীর অনুমতি নিয়েছেন?<span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-name" name="get_wife_permission"  value="<?php echo $get_wife_permission; ?>"  size="100" maxlength="100" class="form-text">
							</div>

							<div class="shosurbari-biodata-field">
								<label for="edit-name">আপনার ও বর্তমান স্ত্রীর পরিবার থেকে অনুমতি নিয়েছেন?<span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-name" name="get_family_permission"  value="<?php echo $get_family_permission; ?>"  size="100" maxlength="100" class="form-text">
							</div>

							<div class="shosurbari-biodata-field">
								<label for="edit-name">আবার বিয়ে করার কারণ<span class="form-required" title="This field is required.">*</span></label>
								<textarea rows="5" name="why_again_married" value="<?php echo $why_again_married; ?>" placeholder="Describe How You Became a Widower" class="form-text-describe"></textarea>
							</div>
						</div>
						<!-- Married Section End-->


						<div class="shosurbari-biodata-field" id="son-section" style="display: none;">
							<div class="shosurbari-biodata-field">
								<label for="edit-name">কয়টি সন্তান আছে<span class="form-required" title="This field is required.">*</span></label>
								<select name="how_many_son" onchange="toggleSonDetails(this.value)">
									<option hidden selected><?php echo $how_many_son; ?></option>
									<option></option>
									<option value="কোনো সন্তান নেই">কোনো সন্তান নেই</option>
									<option value="১টি সন্তান">১টি সন্তান</option>
									<option value="২টি সন্তান">২টি সন্তান</option>
									<option value="৩টি সন্তান">৩টি সন্তান</option>
									<option value="৪টি সন্তান">৪টি সন্তান</option>
									<option value="৫টি সন্তান">৫টি সন্তান</option>
									<option value="৬টি সন্তান">৬টি সন্তান</option>
									<option value="৭টি সন্তান">৭টি সন্তান</option>
									<option value="৮টি সন্তান">৮টি সন্তান</option>
									<option value="৯টি সন্তান">৯টি সন্তান</option>
									<option value="১০টি সন্তান">১০টি সন্তান</option>
								</select>
							</div>

							<div class="shosurbari-biodata-field" id="son-details" style="display: none;">
								<label for="edit-name">সন্তান সম্পর্কিত তথ্য<span class="form-required" title="This field is required.">*</span></label>
								<textarea rows="5" name="son_details"  value="<?php echo $son_details; ?>" placeholder="Describe Your Son Details" class="form-text-describe"></textarea>
							</div>
						</div>


						<!-- Bellow Two Sections For Male or Female -->
						<div class="shosurbari-biodata-field" id="male-allow-wife-job">
							<label for="edit-name">স্ত্রীকে চাকরি করতে দিতে ইচ্ছুক?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="allowjob_aftermarriage"  value="<?php echo $allowjob_aftermarriage; ?>"  size="100" maxlength="100" class="form-text">
						</div>
						<!--Top Male | OR | Bellow Female-->
						<div class="shosurbari-biodata-field" id="female-job-after-marriage">
							<label for="edit-name">বিয়ের পর চাকরি করতে চান?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="anyjob_aftermarriage" value="<?php echo $anyjob_aftermarriage; ?>" size="100" maxlength="100" class="form-text">
						</div>

						<div class="shosurbari-biodata-field" id="male-allow-wife-study">
							<label for="edit-name">স্ত্রীকে প্রাতিষ্ঠানিক পড়ালেখা করতে দিতে ইচ্ছুক?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="allowstudy_aftermarriage" value="<?php echo $allowstudy_aftermarriage; ?>" size="100" maxlength="100" class="form-text">
						</div>
						<!--Top Male | OR | Bellow Female-->
						<div class="shosurbari-biodata-field" id="female-study-after-marriage">
							<label for="edit-name">বিয়ের পর পড়াশোনা চালিয়ে যেতে চান?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="studies_aftermarriage"   value="<?php echo $studies_aftermarriage; ?>"  size="200" maxlength="200" class="form-text">
						</div>
						
						<div class="shosurbari-biodata-field" id="male-live-with-wife">
							<label for="edit-name">বিয়ের পর স্ত্রীকে নিয়ে কোথায় থাকবেন?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="livewife_aftermarriage"  value="<?php echo $livewife_aftermarriage; ?>"  size="100" maxlength="100" class="form-text">
						</div>
						<!--Top Male | OR | Bellow Female-->
						<div class="shosurbari-biodata-field" id="female-agree-marriage-student">
							<label for="edit-name">শিক্ষার্থী বিয়ে করতে রাজি আছেন?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="agree_marriage_student"   value="<?php echo $agree_marriage_student; ?>"size="200" maxlength="200" class="form-text">
						</div>

						<div class="shosurbari-biodata-field">
							<label for="edit-name">বায়োডাটা টি যার জন্য পোস্ট করতেছেন, তার আপনি কে হন?<span class="form-required" title="This field is required.">*</span></label>
							<select name="profileby" required>
								<option hidden selected><?php echo $profileby; ?></option>
								<option value="নিজের জন্য">নিজের জন্য</option>
								<option value="বাবা হই">বাবা হই</option>
								<option value="মা হই">মা হই</option>
								<option value="ভাই হই">ভাই হই</option>
								<option value="বোন হই">বোন হই</option>
								<option value="চাচা/মামা হই">চাচা/মামা হই</option> 
								<option value="চাচী/মামী হই">চাচী/মামী হই</option>
								<option value="নানা/দাদা হই">নানা/দাদা হই</option> 
								<option value="নানী/দাদী হই">নানী/দাদী হই</option> 
								<option value="অন্যান্য">অন্যান্য</option> 
							</select>
						</div>
					</div>    
				</div>

				<input type="button" name="previous" class="previous action-button" value="Previous" />
			    <input type="submit"  name="op" class="action-button" id="edit-submit" value="Submit Biodata">
				<script>
	function toggleGenderSections(selectedGender) {
		var maleallowJobwife = document.getElementById('male-allow-wife-job');
		var femaleJobSection = document.getElementById('female-job-after-marriage');
		var maleallowStudywife = document.getElementById('male-allow-wife-study');
		var femaleStudySection = document.getElementById('female-study-after-marriage');
		var maleliveWithwife = document.getElementById('male-live-with-wife');
		var femaleagreeMarriagestudent = document.getElementById('female-agree-marriage-student');

		if (selectedGender === 'পাত্রের বায়োডাটা') {
			maleallowJobwife.style.display = 'block';
			femaleJobSection.style.display = 'none';

			maleallowStudywife.style.display = 'block';
			femaleStudySection.style.display = 'none';

			maleliveWithwife.style.display = 'block';
			femaleagreeMarriagestudent.style.display = 'none';

			// Hide বিধবা option
			var maritalStatusSelect = document.getElementsByName('maritalstatus')[0];
			var optionWidow = maritalStatusSelect.querySelector('option[value="বিধবা"]');
			optionWidow.style.display = 'none';
		} else if (selectedGender === 'পাত্রীর বায়োডাটা') {
			maleallowJobwife.style.display = 'none';
			femaleJobSection.style.display = 'block';

			maleallowStudywife.style.display = 'none';
			femaleStudySection.style.display = 'block';

			maleliveWithwife.style.display = 'none';
			femaleagreeMarriagestudent.style.display = 'block';

			// Hide বিপত্নীক option
			var maritalStatusSelect = document.getElementsByName('maritalstatus')[0];
			var optionWidower = maritalStatusSelect.querySelector('option[value="বিপত্নীক"]');
			optionWidower.style.display = 'none';
		} else {
			maleallowJobwife.style.display = 'none';
			femaleJobSection.style.display = 'none';

			maleallowStudywife.style.display = 'none';
			femaleStudySection.style.display = 'none';

			maleliveWithwife.style.display = 'none';
			femaleagreeMarriagestudent.style.display = 'none';

			// Show all options
			var maritalStatusSelect = document.getElementsByName('maritalstatus')[0];
			var options = maritalStatusSelect.querySelectorAll('option');
			options.forEach(function(option) {
				option.style.display = 'block';
			});
		}
	}

	function toggleMaritalStatus(selectedStatus) {
		var gurdianAggressSection = document.getElementById('gurdian-aggress-section');
		var sonDetailsSection = document.getElementById('son-section');
		var divorceSection = document.getElementById('divorce-section');
		var widowSection = document.getElementById('widow-section');
		var widowerSection = document.getElementById('widower-section');
		var marriedSection = document.getElementById('married-section');

		// Hide all sections initially
		gurdianAggressSection.style.display = 'none';
		sonDetailsSection.style.display = 'none';
		divorceSection.style.display = 'none';
		widowSection.style.display = 'none';
		widowerSection.style.display = 'none';
		marriedSection.style.display = 'none';

		if (selectedStatus === 'অবিবাহিত') {
			gurdianAggressSection.style.display = 'block';
			sonDetailsSection.style.display = 'none';
		} else if (selectedStatus === 'ডিভোর্স') {
			divorceSection.style.display = 'block';
			gurdianAggressSection.style.display = 'block';
			sonDetailsSection.style.display = 'block';
		} else if (selectedStatus === 'বিধবা') {
			widowSection.style.display = 'block';
			sonDetailsSection.style.display = 'block';
			gurdianAggressSection.style.display = 'block';
		} else if (selectedStatus === 'বিপত্নীক') {
			widowerSection.style.display = 'block';
			gurdianAggressSection.style.display = 'block';
			sonDetailsSection.style.display = 'block';
		} else if (selectedStatus === 'বিবাহিত') {
			marriedSection.style.display = 'block';
			sonDetailsSection.style.display = 'block';
		}
	}

	function toggleSonDetails(selectedSonCount) {
		var sonAboutSection = document.getElementById('son-details');

		if (selectedSonCount !== 'কোনো সন্তান নেই') {
				sonAboutSection.style.display = 'block';
			} else {
				sonAboutSection.style.display = 'none';
			}
		}
</script>

			</fieldset>
			<!--Fieldsets end-->
			<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
			-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
			--                   E   N   D                   --
			--   Male Marriage related Info / sb-biodata-6   --
			--  Female Marriage related Info / sb-biodata-7  --
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->




		</form>


		
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--       Update & Store the data to Database     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--       Update & Store the data to Database     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->


	</div>


	<?php include_once("footer.php");?>

</body>
</html>

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>







<style>
	#height-error-message {
	color: red;
	font-size: 12px;
}

/*form styles*/
.sb-biodata{
    border: 1px solid #ccc;
    border-radius: 6px;
    width: 85%;
    gap: 1.5rem;
    padding: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 40px;
    margin-top: 20px;
    background: white;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#biodataForm {
    width: 80%;
    margin: 0px auto;
    text-align: center;
}

#biodataForm fieldset {
    background: white;
    border: 0 none;
    border-radius: 3px;
    padding: 10px;
    box-sizing: border-box;
    width: 550px;
    margin: auto;
}

/*Hide all except first fieldset*/
#biodataForm fieldset:not(:first-of-type) {
    display: none;
}

/*buttons*/
#biodataForm .action-button {
    width: 100px;
    background: #27AE60;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 1px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#biodataForm .action-button:hover, #biodataForm .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}

/*progressbar*/
#progressbar {
    background: #fff;
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
    padding: 70px 0px 10px 0px;
}

#progressbar li {
    list-style-type: none;
    color: #000;
    font-size: 15px;
    width: 12%;
    float: left;
    position: relative;
    z-index: 2; /* Ensure the list items appear above the connectors */
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 34px;
    line-height: 31px;
    display: block;
    font-size: 10px;
    color: #fff;
    background: #06b6d4;
    border-radius: 50%;
    margin: -5px 0px 10px 65px;
	font-size: 14px;
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 4px;
    border-radius: 0px;
    background: #06b6d4;
    position: absolute;
    left: -20%;
    top: 9px;
    z-index: -1; /* Ensure the connectors appear behind the list items */
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none; 
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
    background: #27AE60;
    color: white;
}

.error-message-empty{
	color: red;
}
</style>
 

<script>
// jQuery time
var current_fs, next_fs, previous_fs; // fieldsets

$(".next").click(function() {
  current_fs = $(this).closest("fieldset");
  next_fs = current_fs.next("fieldset");

  // Validate fields in the current fieldset
  if (!validateFields(current_fs)) {
    return; // Stop execution if fields are empty
  }

  // Activate next step on progressbar
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  // Show the next fieldset
  next_fs.show();
  // Hide the current fieldset
  current_fs.hide();

  // Smooth scroll to the top of the progress bar
  $('html, body').animate({ scrollTop: $('#progressbar').offset().top }, 800);
});


$(".previous").click(function() {
  current_fs = $(this).closest("fieldset");
  previous_fs = current_fs.prev("fieldset");

  // Show the previous fieldset
  previous_fs.show();
  // Hide the current fieldset
  current_fs.hide();

  // De-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  // Smooth scroll to the top of the progress bar
  $('html, body').animate({ scrollTop: $('#progressbar').offset().top }, 800);
});






// Validate the fields in the current fieldset
function validateFields(current_fs) {
  var isValid = true;

  // Get all required input fields within the current fieldset
  var inputs = current_fs.find(":input[required]");

  // Remove previous error messages
  current_fs.find(".error-message-empty").remove();

  // Loop through each input field and check if it's empty
  inputs.each(function() {
    if ($(this).val().trim() === "") {
      $(this).addClass("error"); // Add error class to highlight the empty field
      isValid = false;

      // Show error message
      var errorMessage = "<span class='error-message-empty'>This field is required.</span>";
      $(this).after(errorMessage);
    } else {
      $(this).removeClass("error"); // Remove error class if the field is not empty
    }
  });

  // Scroll to the first empty input field
  if (!isValid) {
    var firstEmptyField = current_fs.find(".error").first();
    var windowHeight = $(window).height();
    var fieldTop = firstEmptyField.offset().top;
    var fieldHeight = firstEmptyField.outerHeight();
    var middleOffset = (windowHeight / 2) - (fieldHeight / 2);
    var scrollTo = fieldTop - middleOffset;

    $('html, body').animate({ scrollTop: scrollTo }, 800);
  }

  return isValid;
}
</script>









<!-- Bellow my database code -->
