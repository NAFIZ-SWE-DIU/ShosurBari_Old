<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
require_once("functions.php");
?>



<?php
require_once("includes/dbconn.php");
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
<form id="biodataForm">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active" id="personalPhysical">Physical</li>
    <li id="personalLife">LifeStyle</li>
    <li id="educationalQualifications">Education</li>
    <li id="addressDetails">Address</li>
    <li id="familyInfo">Family</li>
    <li id="MarriageInfo">MarriageInfo</li>
    <li id="religionDetails">Religion</li>
    <li id="expectedPartner">LifePartner</li>
</ul>






<!--1 fieldsets start-->
<?php
include("includes/dbconn.php");

//$id=$_GET['user_id'];
//bd_personal_physical_1($id);


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
	//echo $biodatagender.' '.$dob.' '.$height.' '.	$weight.' '.$physicalstatus.' '.$Skin_tones.' '.$bloodgroup;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--      Personal & Physical  / sb-biodata-1      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<fieldset>

            <div class="sb-biodata" id="personalPhysical">

                <div class="sb-biodata-field">
		            <h2>Personal & Physical</h2>
                </div>

			  <div class="sb-biodata-option">

		        <div class="shosurbari-biodata-field">
		            <label for="edit-name">Biodata Type<span class="form-required" title="This field is required.">*</span></label>
					<select name="biodatagender" required onchange="toggleGenderSections(this.value)">
					    <option hidden selected></option>
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
	                </select>
			    </div>


	                <div class="shosurbari-biodata-field">
					<label for="edit-pass">DOB-Date<span class="form-required" title="This field is required.">*</span></label>
					    <select name="day" required>
		                    <option hidden selected></option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                    </select>
	                </div>

					<div class="shosurbari-biodata-field">
			            <label for="edit-pass">DOB-Month<span class="form-required" title="This field is required.">*</span></label>
						<select name="month" required>
		                    <option hidden selected></option>
		                    <option value="January">January</option>
		                    <option value="February">February</option>
		                    <option value="March">March</option>
		                    <option value="April">April</option>
		                    <option value="May">May</option>
		                    <option value="June">June</option>
		                    <option value="July">July</option>
		                    <option value="August">August</option>
		                    <option value="September">September</option>
		                    <option value="October">October</option>
		                    <option value="November">November</option>
		                    <option value="December">December</option>
	                    </select>
	                </div>

	                <div class="shosurbari-biodata-field">
					<label for="edit-pass">DOB-Year<span class="form-required" title="This field is required.">*</span></label>
	                    <select name="year" required>
		                    <option hidden selected></option>
		                    <option value="1980">1980</option>
		                    <option value="1981">1981</option>
		                    <option value="1981">1981</option>
		                    <option value="1983">1983</option>
		                    <option value="1984">1984</option>
		                    <option value="1985">1985</option>
		                    <option value="1986">1986</option>
		                    <option value="1987">1987</option>
		                    <option value="1988">1988</option>
		                    <option value="1989">1989</option>
		                    <option value="1990">1990</option>
		                    <option value="1991">1991</option>
		                    <option value="1992">1992</option>
		                    <option value="1993">1993</option>
		                    <option value="1994">1994</option>
		                    <option value="1995">1995</option>
		                    <option value="1996">1996</option>
		                    <option value="1997">1997</option>
		                    <option value="1998">1998</option>
		                    <option value="1999">1999</option>
		                    <option value="2000">2000</option>
		                    <option value="2001">2001</option>
		                    <option value="2002">2002</option>
		                    <option value="2003">2003</option>
		                    <option value="2004">2004</option>
		                    <option value="2005">2005</option>
		                    <option value="2006">2006</option>
							<option value="2007">2007</option>
		                    <option value="2008">2008</option>
		                    <option value="2009">2009</option>
		                    <option value="2010">2010</option>
		                    <option value="2011">2011</option>
		                    <option value="2012">2012</option>
		                    <option value="2013">2013</option>
							<option value="2014">2014</option>
		                    <option value="2015">2015</option>
	                    </select>
	                </div>

<style>
#height-error-message {
    color: red;
    font-size: 12px;
}
	</style>
					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Height<span class="form-required" title="This field is required.">*</span></label>
			            <input type="text" id="edit-name" name="height" value="<?php echo $height; ?>" size="100" maxlength="100"
						 class="form-text" placeholder="Please enter your height" oninput="checkInput(this)" required>
						 <span style="color: red; font-size: 13px;" class="error-message" id="height-error-message"></span>
					</div>
					<script>
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
	</script>



					
					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Weight <span class="form-required" title="This field is required.">*</span></label>
			            <input type="text" id="edit-name" name="weight" value="<?php echo $weight; ?>" size="100" maxlength="100" class="form-text" required>
					</div>

					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
	                    <select name="physicalstatus" required>
					    <option hidden selected></option>
	                        <option value="No Problem">No Problem</option>
	                        <option value="Blind">Blind</option> 
	               		    <option value="Deaf">Deaf</option> 
	                    </select>
			        </div>

					<div class="shosurbari-biodata-field">
					        <label for="edit-name">Skin Tones<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="Skin_tones" required>
							<option hidden selected></option>
	                        <option value="Light">Light</option>
	                        <option value="Fair">Fair</option> 
	               		    <option value="Medium">Medium</option>
							<option value="Dark">Dark</option>
	                    </select>
			        </div>

					<div class="shosurbari-biodata-field">
					<label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="bloodgroup" required>
							<option hidden selected></option>
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
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--       Personal & Physical  / sb-biodata-1     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<!--1 fieldsets end -->















<!-- 2fieldsets start-->
<fieldset>


<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
//bd_personal_lifestyle_2($id);



//getting profile details from db
$sql="SELECT * FROM 2bd_personal_lifestyle WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
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

//echo $maritalstatus.' '.$smoke.' '.$occupation.' '.$occupation_describe.' '.$dress_code.' '.$aboutme;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Personal & Life Style  / sb-biodata-2     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                    <div class="sb-biodata" id="personalLife">

                        <div class="sb-biodata-field">
		                   <h2>Personal & Life Style</h2>
                        </div>

						    <div class="sb-biodata-option">
							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Smoke or Drinks<span style="color: gray; font-size: 14px;" class="form-required" title="This field is required."> (Optional)</span></label>
	                            <select name="smoke">
								<option hidden selected></option>
	                                <option value="No">No</option>
	                                <option value="Yes">Yes</option> 
	               		            <option value="Sometimes">Sometimes</option>
	                            </select>
			                </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Occupation Sector<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_sector" required onchange="showOccupationSector(this.value)">
								<option hidden selected></option>
								<option value="Student">Student Sector</option>
								<option value="Common">Common Profession</option>
								<option value="Health">Health Sector</option>
								<option value="Engineer">Engineer Profession</option>
								<option value="Teacher">Teacher Profession</option>
								<option value="Defense">Defense Sector</option>
								<option value="Foreigner">Foreigner</option>
								<option value="Garments">Garments Sector</option>
								<option value="Driver">Driver Profession</option>
	                            </select>
			                </div>

							<div class="shosurbari-biodata-field section" id="Student" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
									<option value="Kawmi Madrasa Student">Kawmi Madrasa Student</option>
									<option value="Dakhil Student">Dakhil Student</option> 
									<option value="High School Student">High School Student</option>

									<option value="College Student">College Student</option>
									<option value="Alim Student">Alim Student</option> 
									<option value="Politechnical Student">Politechnical Student</option>
									<option value="Nursing Student">Nursing Student</option>
									<option value="Midwifary Student">Midwifary Student</option>
									<option value="Politechnical Student">Peramedical Student</option>

	               		            <option value="Medical Student">Medical Student</option>
	                                <option value="Pharmacy Student">Pharmacy Student</option> 
	               		            <option value="B.Sc. Engineering Student">B.Sc. Engineering Student</option>

	                                <option value="B.Sc. Student.">B.Sc. Student</option>
	                                <option value="B.A. Student">B.A. Student</option>
									<option value="B.Com. Student">B.Com. Student</option> 
									<option value="Fazil Student">Fazil Student</option> 

	               		            <option value="Students of M.A.">M.Sc. Student</option>
									<option value="Students of B.Com.">M.A. Student</option> 
	               		            <option value="Students of M.Com.">M.Com. Student</option>
									<option value="Kamil Student">Kamil Student</option> 
								</select>
							</div>
									

							<div class="shosurbari-biodata-field section" id="Health" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
	                                <option value="MBBS Doctor">MBBS Doctor</option>
	                                <option value="Internship Doctor">Internship Doctor</option> 
									<option value="Specialist Doctor">Specialist Doctor</option>
									<option value="Pharmacist">Pharmacist</option>
									<option value="Diploma Doctor">Diploma Doctor</option>
	               		            <option value="Nurse">Nurse</option>
									<option value="Midwife">Midwife</option>
									<option value="Village Doctor">Village Doctor</option>
								</select>
							</div>


							<div class="shosurbari-biodata-field section" id="Engineer" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
									<option value="Aerospace Engineer">Aerospace Engineer</option>
									<option value="Agricultural Engineer">Agricultural Engineer</option>
									<option value="Architectural Engineer">Architectural Engineer</option>
									<option value="Biomedical Engineer">Biomedical Engineer</option>
									<option value="Chemical Engineer">Chemical Engineer</option>
									<option value="Civil Engineer">Civil Engineer</option>
									<option value="Electrical Engineer">Electrical Engineer</option>
									<option value="Marine Engineer">Marine Engineer</option> 
									<option value="Mechanical Engineer">Mechanical Engineer</option>
									<option value="Network Engineer">Network Engineer</option> 
									<option value="Robotics Engineer">Robotics Engineer</option>
	                                <option value="Software Engineer">Software Engineer</option> 
	               		            <option value="Textile Engineer">Textile Engineer</option>
								</select>
							</div>


							<div class="shosurbari-biodata-field section" id="Teacher" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
									<option value="Kawmi Madrasa Teacher">Kawmi Madrasa Teacher</option>
									<option value="Aliya Madrasa Teacher">Aliya Madrasa Teacher</option>  
	                                <option value="Primary School Teacher">Primary School Teacher</option> 
	               		            <option value="High School Teacher">High School Teacher</option>
									<option value="College Professor">College Professor</option>
									<option value="Public University Professor">Public University Professor</option>
									<option value="Private University Professor">Private University Professor</option>
									<option value="National University Professor">National University Professor</option>
									<option value="Degree Professor">Degree Professor</option>
								</select>
							</div>



							<div class="shosurbari-biodata-field section" id="Defense" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
	                                <option value="Army">Army</option> 
	               		            <option value="Air Force">Air Force</option>
	                                <option value="Navy">Navy</option>
	                                <option value="Police">Police</option>
									<option value="Ansar">Ansar</option>
									<option value="Fire Service">Fire Service</option> 
	               		            <option value="RAB">RAB</option>
	                                <option value="DB">DB</option>
								</select>
							</div>



						<div class="shosurbari-biodata-field section" id="Foreigner" style="display: none;">
		                    <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
							<select name="occupation_level">
								<option hidden selected></option>
								<option value="Job">Job</option>
								<option value="Worker">Worker</option>
								<option value="Business">Business</option>
								<option value="Student">Student</option>
							</select>
						</div>


							<div class="shosurbari-biodata-field section" id="Garments" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
	                                <option value="Garments Worker">Garments Worker</option> 
	               		            <option value="Managers of Garments">Garments Manager</option>
								</select>
							</div>


							<div class="shosurbari-biodata-field section" id="Driver" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
	                                <option value="Bus Driver">Bus Driver</option> 
									<option value="Micro Driver">Micro Bus Driver</option> 
	                                <option value="Car Driver">Car Driver</option> 
	                                <option value="Truck Driver">Truck Driver</option>
									<option value="CNG Driver">CNG Driver</option> 
	                                <option value="Auto Driver">Auto Driver</option>
								</select>
							</div>



							<div class="shosurbari-biodata-field section" id="Common" style="display: none;">
		                        <label for="edit-name">Occupation Level<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation_level">
									<option hidden selected></option>
									<option value="Banker">Banker</option>
									<option value="Lawyer">Lawyer</option> 
									<option value="Business">Business</option> 
									<option value="Entrepreneur">Entrepreneur</option> 
	                                <option value="Frelancer">Frelancer</option>
									<option value="Graphics Desigener">Graphics Desigener</option>
									<option value="Sales & Marketing (SR)">Sales & Marketing (SR)</option>  
	                                <option value="No Profession">No Profession</option>
	                            </select>
							</div>


					<script>
					function showOccupationSector(occupation) {
					// Hide all district sections
					var occupationLevelSections = document.getElementsByClassName("section");
					for (var i = 0; i < occupationLevelSections.length; i++) {
						occupationLevelSections[i].style.display = "none";
					}
					// Show the selected division's district section
					var selectedOccupationSection = document.getElementById(occupation);
					if (selectedOccupationSection) {
						selectedOccupationSection.style.display = "block";
					}
					}
					</script>
							

		                    <div class="shosurbari-biodata-field">
		                        <label for="edit-name">Occupation Describe<span class="form-required" title="This field is required.">*</span></label>
								<textarea rows="5" id="edit-name" name="occupation_describe" placeholder="Describe your Occupation" class="form-text-describe" required><?php echo $occupation_describe; ?></textarea>
		                    </div>

							<div class="shosurbari-biodata-field">
		    	               <label for="about me">Your Dress Code at Home or Out Side<span class="form-required" title="This field is required.">*</span></label>
		    	               <textarea rows="5" name="dress_code" placeholder="Describe your Dress Code" class="form-text-describe" required><?php echo $dress_code; ?></textarea>
		                    </div>

							<div class="shosurbari-biodata-field">
		    	               <label for="about me">Write Something About You<span class="form-required" title="This field is required.">*</span></label>
		    	               <textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text-describe" required><?php echo $aboutme; ?></textarea>
		                    </div>

                            </div>
                        </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--     Personal & Life Style  / sb-biodata-2     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<!-- 2 fieldsets end-->















<!--3 fieldsets start-->
    <fieldset>


    
<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
//bd_educational_qualifications_3($id);



//getting profile details from db
$sql="SELECT * FROM 3bd_educational_qualifications WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
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

	//echo $education_method.' '.$sscpassyear.' '.$current_education.' '.$maximum_education;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Educational Qualifications  / sb-biodata-3   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

                <div class="sb-biodata" id="educationalQualifications">

                    <div class="sb-biodata-field">
		                <h2>Educational Qualifications</h2>
                    </div>

					<div class="sb-biodata-option">

						<div class="shosurbari-biodata-field">
						<label for="edu-method">মাধ্যমিক/ সমমান কোন মাদ্ধমে পড়েছেন?<span class="form-required" title="This field is required.">*</span></label>
  						<select name="secondary_edu_method" id="secondary_edu_method" required>
								<option hidden selected></option>
		                       <option value="জেনারেল">জেনারেল</option>
		                       <option value="আলিয়া মাদ্রাসা">আলিয়া মাদ্রাসা</option>
		                       <option value="ভোকেশনাল">ভোকেশনাল</option>
		                       <option value="কাওমী মাদ্রাসা">কাওমী মাদ্রাসা</option>
							   <option value="মাধ্যমিক পড়িনাই">মাধ্যমিক পড়িনাই</option>
							   <option value="অন্যান্য">অন্যান্য</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field"  id="maxedu_qualification">
						<label for="highest_qualification">আপনার সর্বোচ্চ শিক্ষাগত যোগ্যতা?<span class="form-required" title="This field is required.">*</span></label>
						<input type="text" id="maxedu_qualification" name="maxedu_qualification" size="250" maxlength="250" class="form-text required">
	                    </div>

						<!-- For Kowmi Madrasa -->
						<div class="shosurbari-biodata-field" id="hafez_field">
  <label for="hafez">আপনি কি হাফেজ?<span class="form-required" title="This field is required.">*</span></label>
  <select name="qawmi_madrasa_hafez" id="hafez">
							<option hidden selected></option>
		                       <option value="হ্যাঁ">হ্যাঁ</option>
		                       <option value="না">না</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="hafeza_field">
  <label for="hafeza">আপনি কি হাফেজা?<span class="form-required" title="This field is required.">*</span></label>
  <select name="qawmi_madrasa_hafeza" id="hafeza">
							<option hidden selected></option>
		                       <option value="হ্যাঁ">হ্যাঁ</option>
		                       <option value="না">না</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="dawra_pass_field">
  <label for="dawra_pass">দাওরায়ে হাদিস পাস করেছেন?<span class="form-required" title="This field is required.">*</span></label>
  <select name="qawmimadrasa_dawrapass" id="dawra_pass">
							<option hidden selected></option>
		                       <option value="হ্যাঁ">হ্যাঁ</option>
		                       <option value="না, অধ্যায়নরত আছি">না, অধ্যায়নরত আছি </option>
							   <option value="না, বাদ দিয়েছি">না, বাদ দিয়েছি</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="dawra_passing_year_field">
  <label for="dawra_passing_year">দাওরায়ে হাদিস কত সালে পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
  <select name="qawmimadrasa_dawrapassing_year" id="dawra_passing_year">
							<option hidden selected></option>
							   <option value="2023">2023</option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
		                    <option value="2019">2019</option>
		                    <option value="2018">2018</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="current_edu_level_field">
  <label for="current_edu_level">বর্তমানে কোন জামাতে অধ্যায়নরত আছেন?<span class="form-required" title="This field is required.">*</span></label>
  <select name="qawmimadrasa_current_edu_level" id="current_edu_level">
							<option hidden selected></option>
								<option value="জামাতে তাইসীর">জামাতে তাইসীর</option>
								<option value="জামাতে মীযান">জামাতে মীযান</option>
								<option value="জামাতে নাহবে মীর">জামাতে নাহবে মীর</option>
								<option value="জামাতে হেদায়াতুন্নাহূ">জামাতে হেদায়াতুন্নাহূ</option>
								<option value="জামাতে কাফিয়া">জামাতে কাফিয়া</option>
								<option value="জামাতে শরহে জামী">জামাতে শরহে জামী</option>
								<option value="জামাতে জালালাইন">জামাতে জালালাইন</option>
								<option value="জামাতে মেশকাত">জামাতে মেশকাত</option>
								<option value="দাওরায়ে হাদীস পরীক্ষার্থী">দাওরায়ে হাদীস পরীক্ষার্থী</option>
	                        </select>
	                    </div>

						<!-- Madrasa ending -->
	







						<!-- Maddhomik Start -->
						<div class="shosurbari-biodata-field" id="gnrl_mdrs_scnd_pass">
						   <label for="secondary_pass">মাধ্যমিক/সমমান পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
						   <select name="general_madrasa_secondary_pass" id="secondary_pass">
						   <option hidden selected></option>
		                       <option value="হ্যাঁ">হ্যাঁ</option>
							   <option value="না, পরীক্ষার্থী">না, পরীক্ষার্থী</option>
		                       <option value="না, অধ্যায়নরত আছি">না, অধ্যায়নরত আছি </option>
							   <option value="অধ্যায়ন বাদ দিয়েছি">অধ্যায়ন বাদ দিয়েছি</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="gnrl_mdrs_scnd_pass_year">
							<label for="gnrl_mdrs_scnd_pass_year">কত সালে মাধ্যমিক/সমমান পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
							<select name="generalmadrasa_secondary_passing_year" id="gnrl_mdrs_scnd_pass_year">
							<option hidden selected></option>
								<option value="nonyear">None</option>
								<option value="2024">SSC Candidet2024</option>
								<option value="2023">2023</option>
								<option value="2022">2022</option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
	                    	</select>
	                	</div>

						<div class="shosurbari-biodata-field" id="gnrl_mdrs_scnd_exam_year">
							<label for="gnrl_mdrs_scnd_exam_year">কত সালে মাধ্যমিক/সমমান পরীক্ষা দেবেন?<span class="form-required" title="This field is required.">*</span></label>
							<select name="generalmadrasa_secondary_exam_year" id="gnrl_mdrs_scnd_exam_year">
							<option hidden selected></option>
							<option value="nonyear">None</option>
		                    <option value="2024">SSC Candidet2024</option>
		                    <option value="2023">2023</option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
	                    	</select>
	                	</div>

						<div class="shosurbari-biodata-field" id="gnrl_mdrs_running_stdn">
		                    <label for="gnrl_mdrs_running_stdn">oddhyayon roto achi<span class="form-required" title="This field is required.">*</span></label>
		                    <input type="text" id="gnrl_mdrs_running_stdn" name="university_name" value="" size="250" maxlength="250" class="form-text required">
		                </div>

						<div class="shosurbari-biodata-field" id="higher_seconday_edumethod">
						   <label for="higherscndry_edumethod">উচ্চমাধ্যমিক/ সমমান কোন মাদ্ধমে পড়েছেন?<span class="form-required" title="This field is required.">*</span></label>
						   <select name="higher_secondary_edu_method" id="higherscndry_edumethod">
						   <option hidden selected></option>
		                       <option value="জেনারেল">জেনারেল</option>
		                       <option value="আলিয়া মাদ্রাসা">আলিয়া মাদ্রাসা</option>
		                       <option value="ডিপ্লোমা">ডিপ্লোমা</option>
		                       <option value="কাওমী মাদ্রাসা">কাওমী মাদ্রাসা</option>
							   <option value="অধ্যায়ন বাদ দিয়েছি">অধ্যায়ন বাদ দিয়েছি</option>
							   <option value="অন্যান্য">অন্যান্য</option>
	                        </select>
	                    </div>
						<!-- Maddhomik End -->



						<!-- Ucchomaddhomik start -->
						<div class="shosurbari-biodata-field" id="gnrl_mdrs_hrscnd_pass">
						   <label for="hrsecondary_pass">উচ্চমাধ্যমিক/সমমান পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="general_madrasa_highersecondary_pass" id="hrsecondary_pass">
							<option hidden selected></option>
		                       <option value="হ্যাঁ">হ্যাঁ</option>
							   <option value="না, পরীক্ষার্থী">না, পরীক্ষার্থী</option>
		                       <option value="না, এখনো অধ্যায়নরত">না, এখনো অধ্যায়নরত</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="gnrl_mdrs_hrscnd_pass_year">
							<label for="edu-method">কত সালে উচ্চমাধ্যমিক/সমমান পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
							<select name="generalmadrasa_highersecondary_passing_year">
							<option hidden selected></option>
							<option value="nonyear">None</option>
		                    <option value="2024">SSC Candidet2024</option>
		                    <option value="2023">2023</option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
	                    	</select>
	                	</div>

						<div class="shosurbari-biodata-field" id="gnrl_mdrs_hrscnd_exam_year">
							<label for="edu-method">কত সালে উচ্চমাধ্যমিক/সমমান পরীক্ষা দেবেন?<span class="form-required" title="This field is required.">*</span></label>
							<select name="generalmadrasa_highersecondary_exam_year">
							<option hidden selected></option>
							<option value="nonyear">None</option>
		                    <option value="2024">SSC Candidet2024</option>
		                    <option value="2023">2023</option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
	                    	</select>
	                	</div>

						<div class="shosurbari-biodata-field" id="higher_seconday_group">
							<label for="edu-method">উচ্চমাধ্যমিক/সমমানে আপনার গ্রুপ?<span class="form-required" title="This field is required.">*</span></label>
							<select name="generalmadrasa_highersecondary_group">
							<option hidden selected></option>
							<option value="বিজ্ঞান">বিজ্ঞান শাখা</option>
		                    <option value="মানবিক শাখা">মানবিক শাখা</option>
		                    <option value="ব্যবসা ও বাণিজ্য শাখা">ব্যবসা ও বাণিজ্য শাখা</option>
	                    	</select>
	                	</div>

						<div class="shosurbari-biodata-field" id="hrgnrl_mdrs_running_stdn">
		                    <label for="hrgnrl_mdrs_running_stdn">Uccho maddhomik oddhyayon roto achi<span class="form-required" title="This field is required.">*</span></label>
		                    <input type="text" id="hrgnrl_mdrs_running_stdn" name="university_name" value="" size="250" maxlength="250" class="form-text required">
		                </div>
						<!--HSC  generale & dakhil end -->


						<!--Diploma Start -->
						<div class="shosurbari-biodata-field" id="doploma_hrscnd_pass">
						   <label for="doploma_hrscdmethod">ডিপ্লোমা পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="diploma_secondary_pass" id="doploma_hrscdmethod">
							<option hidden selected></option>
							   <option value="হ্যাঁ">হ্যাঁ</option>
		                       <option value="না, অধ্যায়নরত আছি">না, অধ্যায়নরত আছি </option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="doploma_hrscnd_pass_year">
						   <label for="doploma_hrscnd_pass_year">কত সালে ডিপ্লোমা পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="diploma_secondary_passing_year">
							<option hidden selected></option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="doploma_hrscnd_subject">
						   <label for="edu-method">ডিপ্লোমায় আপনার সাবজেক্ট কোনটি?<span class="form-required" title="This field is required.">*</span></label>
						   <input type="text" id="diploma_secondary_subject" name="diploma_secondary_subject"  size="250" maxlength="250" class="form-text required">
	                    </div>

						<div class="shosurbari-biodata-field" id="doploma_hrscnd_exam_year">
						   <label for="edu-method">ডিপ্লোমা অধ্যায়ন কত সালে সম্পূর্ণ হবে?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="diploma_secondary_studycomplete_year">
							<option hidden selected></option>
							<option value="2023">2023</option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="varsity_edumethod">
						   <label for="university_edumethod">স্নাতক/সমমান কোন মাদ্ধমে পড়েছেন?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="varsity_edu_method" id="university_edumethod">
							<option hidden selected></option>
		                       <option value="জেনারেল">জেনারেল</option>
		                       <option value="আলিয়া মাদ্রাসা">আলিয়া মাদ্রাসা</option>
		                       <option value="ডিপ্লোমা">ডিপ্লোমা</option>
							   <option value="অধ্যায়ন বাদ দিয়েছি">অধ্যায়ন বাদ দিয়েছি</option>
							   <option value="অন্যান্য">অন্যান্য</option>
	                        </select>
	                    </div>
						<!--Diploma end -->




						<!-- Esnatok Start -->
						<div class="shosurbari-biodata-field" id="varsity_pass">
						   <label for="university_pass">স্নাতক/সমমান পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="university_pass" id="university_pass">
							<option hidden selected></option>
							   <option value="হ্যাঁ">হ্যাঁ</option>
		                       <option value="না, অধ্যায়নরত আছি">না, অধ্যায়নরত আছি </option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="varsity_pass_year">
						   <label for="edu-method">কত সালে স্নাতক/সমমান পাশ করেছেন?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="varsity_passing_year">
							<option hidden selected></option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="varsity_subject">
		                    <label for="edu-method">স্নাতক/সমমানে আপনার সাবজেক্ট কোনটি?<span class="form-required" title="This field is required.">*</span></label>
		                    <input type="text" id="varsity_subject" name="varsity_subject" value="" size="250" maxlength="250" class="form-text required">
		                </div>

						<div class="shosurbari-biodata-field" id="varsity_exam_year">
						   <label for="edu-method">স্নাতক/সমমান অধ্যায়ন কত সালে সম্পূর্ণ হবে?<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="varsity_studycomplete_year">
							<option hidden selected></option>
							<option value="2023">2023</option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field" id="varsity_name">
		                    <label for="edu-method">স্নাতক/সমমানে আপনার প্রতিষ্ঠান?<span class="form-required" title="This field is required.">*</span></label>
		                    <input type="text" id="university_name" name="university_name" value="" size="250" maxlength="250" class="form-text required">
		                </div>
						<!-- Esnatok End -->

						<div class="shosurbari-biodata-field">
		                    <label for="edu-method">অন্যান্য শিক্ষাগত যোগ্যতা<span style="color: gray; font-size:14px;" class="form-required" title="This field is required."> (Optional)</span></label>
							<textarea rows="4" id="others_edu_qualification" name="others_edu_qualification"  placeholder="Describe your others education qualifications" class="form-text-describe"></textarea>
		                </div>
                    </div>
                </div>

				
<script>
	// Function to show or hide sections based on the selected value
	function toggleSections() {
		var selectedValue = document.getElementById("secondary_edu_method").value;

		document.getElementById("dawra_pass_field").style.display = "none";
		document.getElementById("dawra_passing_year_field").style.display = "none";
		document.getElementById("current_edu_level_field").style.display = "none";

		// Hide all sections by default
		document.getElementById("hafez_field").style.display = "none";
		document.getElementById("hafeza_field").style.display = "none";
		document.getElementById("maxedu_qualification").style.display = "none";

		document.getElementById("maxedu_qualification").style.display = "none";
		document.getElementById("gnrl_mdrs_scnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_scnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_scnd_exam_year").style.display = "none";  
		document.getElementById("gnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("higher_seconday_edumethod").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "none";

		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";

		// Show or hide sections based on the selected value
		if (selectedValue === "কাওমী মাদ্রাসা") {
			document.getElementById("hafez_field").style.display = "block";
			document.getElementById("hafeza_field").style.display = "block";
			document.getElementById("dawra_pass_field").style.display = "block";
			document.getElementById("dawra_passing_year_field").style.display = "none";
			document.getElementById("current_edu_level_field").style.display = "none";
		}

		// Show or hide sections based on the selected value
		if (selectedValue === "অন্যান্য") {
			document.getElementById("maxedu_qualification").style.display = "block";
		}

		// Show or hide sections based on the selected value
		if (selectedValue === "জেনারেল" || selectedValue === "আলিয়া মাদ্রাসা" || selectedValue === "ভোকেশনাল") {
			document.getElementById("gnrl_mdrs_scnd_pass").style.display = "block";
		}

    	// Show or hide sections based on the selected value
		if (selectedValue === "মাধ্যমিক পড়িনাই") {
    		document.getElementById("maxedu_qualification").style.display = "block";
  		}
	}

	// Function to show or hide fields based on the selected value of dawra_pass_field
	function toggleDawraFields() {
		var selectedValue = document.getElementById("dawra_pass").value;

		var dawraPassingYearField = document.getElementById("dawra_passing_year_field");
		var currentEduLevelField = document.getElementById("current_edu_level_field");

		// Show or hide fields based on the selected value
		if (selectedValue === "হ্যাঁ") {
			dawraPassingYearField.style.display = "block";
			currentEduLevelField.style.display = "none"; // Hide the current_edu_level_field
		}
		
		else if (selectedValue === "না, অধ্যায়নরত আছি") {
			dawraPassingYearField.style.display = "none";
			currentEduLevelField.style.display = "block";
		}

		else if (selectedValue === "না, বাদ দিয়েছি") {
			dawraPassingYearField.style.display = "none";
			currentEduLevelField.style.display = "none";
		}
	}


		// Function to show or hide fields based on the selected value of dawra_pass_field
		function toggleSecondaryFields() {
		var selectValue = document.getElementById("secondary_pass").value;

		document.getElementById("gnrl_mdrs_scnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_scnd_exam_year").style.display = "none";
		document.getElementById("gnrl_mdrs_running_stdn").style.display = "none";
		document.getElementById("higher_seconday_edumethod").style.display = "none";

		// Show or hide fields based on the selected value
		if (selectValue === "হ্যাঁ") {
			document.getElementById("gnrl_mdrs_scnd_pass_year").style.display = "block";
		document.getElementById("gnrl_mdrs_scnd_exam_year").style.display = "none";
		document.getElementById("gnrl_mdrs_running_stdn").style.display = "none";
			document.getElementById("higher_seconday_edumethod").style.display = "block";
		}
		
		else if (selectValue === "না, পরীক্ষার্থী") {


		document.getElementById("gnrl_mdrs_scnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_scnd_exam_year").style.display = "block";
		document.getElementById("gnrl_mdrs_running_stdn").style.display = "none";
		document.getElementById("higher_seconday_edumethod").style.display = "none";

		document.getElementById("higher_seconday_edumethod").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "none";

		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selectValue === "না, অধ্যায়নরত আছি") {
			document.getElementById("gnrl_mdrs_scnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_scnd_exam_year").style.display = "none";
		document.getElementById("gnrl_mdrs_running_stdn").style.display = "block";
			document.getElementById("higher_seconday_edumethod").style.display = "none";


		document.getElementById("higher_seconday_edumethod").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "none";

		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selectValue === "অধ্যায়ন বাদ দিয়েছি") {
		document.getElementById("gnrl_mdrs_scnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_scnd_exam_year").style.display = "none";
		document.getElementById("gnrl_mdrs_running_stdn").style.display = "none";
		document.getElementById("higher_seconday_edumethod").style.display = "none";


		document.getElementById("higher_seconday_edumethod").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "none";

		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}
	}



		// Function to show or hide fields based on the selected value of dawra_pass_field
		function toggleHrsecondaryFields() {
		var selecteValue = document.getElementById("higherscndry_edumethod").value;

		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";


		// Show or hide fields based on the selected value
		if (selecteValue === "জেনারেল" || selecteValue === "আলিয়া মাদ্রাসা") {
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "block";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";
		
		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selecteValue === "ডিপ্লোমা") {
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "block";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";

		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selecteValue === "কাওমী মাদ্রাসা") {
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";

		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selecteValue === "অধ্যায়ন বাদ দিয়েছি") {
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";

		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selecteValue === "অন্যান্য") {
		document.getElementById("gnrl_mdrs_hrscnd_pass").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("doploma_hrscnd_pass").style.display = "none";
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";

		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}
	}


		// Function to show or hide fields based on the selected value of dawra_pass_field
		function toggleHrgnrmdrsFields() {
		var selecteValue = document.getElementById("hrsecondary_pass").value;

		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "none";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "none";

		// Show or hide fields based on the selected value
		if (selecteValue === "হ্যাঁ") {
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "block";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "block";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "block";
		}

		else if (selecteValue === "না, পরীক্ষার্থী") {
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "block";
		document.getElementById("higher_seconday_group").style.display = "block";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "none";

		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selecteValue === "না, এখনো অধ্যায়নরত") {
		document.getElementById("gnrl_mdrs_hrscnd_pass_year").style.display = "none";
		document.getElementById("gnrl_mdrs_hrscnd_exam_year").style.display = "none";
		document.getElementById("higher_seconday_group").style.display = "block";
		document.getElementById("hrgnrl_mdrs_running_stdn").style.display = "block";

		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}
	}



		// Function to show or hide fields based on the selected value of dawra_pass_field
		function toggleDiplomaFields() {
		var selecteValue = document.getElementById("doploma_hrscdmethod").value;

		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "none";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "none";


		// Show or hide fields based on the selected value
		if (selecteValue === "হ্যাঁ") {
		document.getElementById("doploma_hrscnd_pass_year").style.display = "block";
		document.getElementById("doploma_hrscnd_subject").style.display = "block";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "none";
		document.getElementById("varsity_edumethod").style.display = "block";
		}

		else if (selecteValue === "না, অধ্যায়নরত আছি") {
		document.getElementById("doploma_hrscnd_pass_year").style.display = "none";
		document.getElementById("doploma_hrscnd_subject").style.display = "block";
		document.getElementById("doploma_hrscnd_exam_year").style.display = "block";
		document.getElementById("varsity_edumethod").style.display = "none";

		document.getElementById("varsity_edumethod").style.display = "none";
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}
	}





		// Function to show or hide fields based on the selected value of dawra_pass_field
		function toggleVarsityFields() {
		var selecteValue = document.getElementById("university_edumethod").value;

		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";


		// Show or hide fields based on the selected value
		if (selecteValue === "জেনারেল" || "আলিয়া মাদ্রাসা" || "ডিপ্লোমা") {
		document.getElementById("varsity_pass").style.display = "block";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selecteValue === "অধ্যায়ন বাদ দিয়েছি") {
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}

		else if (selecteValue === "অন্যান্য") {
		document.getElementById("varsity_pass").style.display = "none";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";
		}
	}




		// Function to show or hide fields based on the selected value of dawra_pass_field
		function toggleVarsityPassFields() {
		var selecteValue = document.getElementById("university_pass").value;

		document.getElementById("varsity_pass").style.display = "none";

		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "none";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "none";


		// Show or hide fields based on the selected value
		if (selecteValue === "হ্যাঁ") {
			document.getElementById("varsity_pass").style.display = "block";
		document.getElementById("varsity_pass_year").style.display = "block";
		document.getElementById("varsity_subject").style.display = "block";
		document.getElementById("varsity_exam_year").style.display = "none";
		document.getElementById("varsity_name").style.display = "block";
		}

		else if (selecteValue === "না, অধ্যায়নরত আছি") {
		document.getElementById("varsity_pass").style.display = "block";
		document.getElementById("varsity_pass_year").style.display = "none";
		document.getElementById("varsity_subject").style.display = "block";
		document.getElementById("varsity_exam_year").style.display = "block";
		document.getElementById("varsity_name").style.display = "block";
		}
	}


// Attach the functions to the onchange events of the dropdowns
document.getElementById("secondary_edu_method").onchange = toggleSections;
document.getElementById("dawra_pass").onchange = toggleDawraFields;
document.getElementById("gnrl_mdrs_scnd_pass").onchange = toggleSecondaryFields;
document.getElementById("higher_seconday_edumethod").onchange = toggleHrsecondaryFields; // Update the event assignment to toggleHrsecondaryFields
document.getElementById("gnrl_mdrs_hrscnd_pass").onchange = toggleHrgnrmdrsFields; // Update the event assignment to toggleHrsecondaryFields
document.getElementById("doploma_hrscnd_pass").onchange = toggleDiplomaFields; // Update the event assignment to toggleHrsecondaryFields
document.getElementById("varsity_edumethod").onchange = toggleVarsityFields; // Update the event assignment to toggleHrsecondaryFields
document.getElementById("varsity_pass").onchange = toggleVarsityPassFields; // Update the event assignment to toggleHrsecondaryFields


	// Trigger the functions initially to set the initial state
	toggleSections();
	toggleDawraFields();
	toggleSecondaryFields();
	toggleHrsecondaryFields();
	toggleHrgnrmdrsFields();
	toggleDiplomaFields();
	toggleVarsityFields();
	toggleVarsityPassFields();
</script>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--  Educational Qualifications  / sb-biodata-3   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
<!--3 fieldsets end-->











<!--4 fieldsets start-->
<fieldset>

    

<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
//bd_address_details_4($id);



//getting profile details from db
$sql="SELECT * FROM 4bd_address_details WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
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
	//echo $country.' '.$present_address.' '.$permanent_address.' '.$childhood;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--       Address Details  /  sb-biodata-4        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
 <div class="sb-biodata" id="addressDetails">
					
<div class="sb-biodata-field">
   <h2>Address Details</h2>
</div>

<div class="sb-biodata-option">


					<!-- Add onchange event to the select element -->
					<div class="shosurbari-biodata-field">
					<label>Division of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
					<select name="permanent_division" required onchange="showSection(this.value)">
					<option hidden selected></option>
						<option value="barishal">Barishal</option>
						<option value="chattogram">Chattogram</option>
						<option value="dhaka">Dhaka</option>
						<option value="khulna">Khulna</option>
						<option value="mymensingh">Mymensingh</option>
						<option value="rajshahi">Rajshahi</option>
						<option value="rangpur">Rangpur</option>
						<option value="sylhet">Sylhet</option>
					</select>
					</div>

					
						<div class="shosurbari-biodata-field section" id="barishal" style="display: none;">
						<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
						<select name="permanent_address">
					    <option hidden selected></option>
	                        <option value="Barguna">Barguna</option>
	                        <option value="Barishal">Barishal</option> 
	               		    <option value="Bhola">Bhola</option>
							<option value="Jhalokati">Jhalokati</option>
	                        <option value="Patuakhali">Patuakhali</option> 
	               		    <option value="Pirojpur">Pirojpur</option>
						</select>
					</div>


					<div class="shosurbari-biodata-field section" id="chattogram" style="display: none;">
						<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
						<select name="permanent_address">
							<option hidden selected></option>
							<option value="Bandarban">Bandarban</option>
	                        <option value="Brahmanbaria">Brahmanbaria</option> 
	               		    <option value="Chandpur">Chandpur</option>
							<option value="Chattogram">Chattogram</option>
	                        <option value="Cumilla">Cumilla</option>
							<option value="Coxbazar">Cox's Bazar</option>  
	               		    <option value="Feni">Feni</option>
							<option value="Khagrachhari">Khagrachhari</option>
							<option value="Lakshmipur">Lakshmipur</option>
							<option value="Noakhali">Noakhali</option>
	                        <option value="Rangamati">Rangamati</option>
						</select>
					</div>


					<div class="shosurbari-biodata-field section" id="dhaka" style="display: none;">
					<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
					<select name="permanent_address">
					<option hidden selected></option>
	               		    <option value="Dhaka">Dhaka</option>
							<option value="Faridpur">Faridpur</option>
	                        <option value="Gazipur">Gazipur</option> 
	               		    <option value="Gopalganj">Gopalganj</option>
							<option value="Kishoreganj">Kishoreganj</option>
							<option value="Madaripur">Madaripur</option>
	                        <option value="Manikganj">Manikganj</option> 
	               		    <option value="Munshiganj">Munshiganj</option>
							<option value="Narayanganj">Narayanganj</option>
	                        <option value="Narsingdi">Narsingdi</option> 
	               		    <option value="Rajbari">Rajbari</option>
							<option value="Shariatpur">Shariatpur</option>
	                        <option value="Tangail">Tangail</option>
						</select>
					</div>

					<div class="shosurbari-biodata-field section" id="khulna" style="display: none;">
					<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
					<select name="permanent_address">
					<option hidden selected></option>
	               		    <option value="Bagerhat">Bagerhat</option>
							<option value="Chuadanga">Chuadanga</option>
	                        <option value="Jashore">Jashore</option>
							<option value="Jhenaidah">Jhenaidah</option>  
	               		    <option value="Khulna">Khulna</option>
							<option value="Kushtia">Kushtia</option>
							<option value="Magura">Magura</option>
							<option value="Meherpur">Meherpur</option>
	                        <option value="Narail">Narail</option> 
	               		    <option value="Satkhira">Satkhira</option>
						</select>
                    </div>

					<div class="shosurbari-biodata-field section" id="mymensingh" style="display: none;">
					<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
					<select name="permanent_address">
					<option hidden selected></option>
							<option value="Jamalpur">Jamalpur</option>
	                        <option value="Mymensingh">Mymensingh</option> 
	               		    <option value="Netrokona">Netrokona</option>
							<option value="Sherpur">Sherpur</option>
							</select>
                        </div>

						<div class="shosurbari-biodata-field section" id="rajshahi" style="display: none;">
					<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
					<select name="permanent_address">
					<option hidden selected></option>
							<option value="Bogura">Bogura</option>
							<option value="Chapai Nawabganj">Chapai Nawabganj</option> 
	                        <option value="Joypurhat">Joypurhat</option> 
	               		    <option value="Naogaon">Naogaon</option>
							<option value="Natore">Natore</option>
	               		    <option value="Pabna">Pabna</option>
							<option value="Rajshahi">Rajshahi</option>
	                        <option value="Sirajganj">Sirajganj</option>
						</select>
                        </div>

						<div class="shosurbari-biodata-field section" id="rangpur" style="display: none;">
					<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
					<select name="permanent_address">
					<option hidden selected></option>
	               		    <option value="Dinajpur">Dinajpur</option>
							<option value="Gaibandha">Gaibandha</option>
	                        <option value="Kurigram">Kurigram</option>
							<option value="Lalmonirhat">Lalmonirhat</option>  
	               		    <option value="Nilphamari">Nilphamari</option>
							<option value="Panchagarh">Panchagarh</option>
							<option value="Rangpur">Rangpur</option>
							<option value="Thakurgaon">Thakurgaon</option>
						</select>
                    </div>

					<div class="shosurbari-biodata-field section" id="sylhet" style="display: none;">
					<label>District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
					<select name="permanent_address">
					<option hidden selected></option>
	                        <option value="Habiganj">Habiganj</option> 
	               		    <option value="Moulvibazar">Moulvibazar</option>
							<option value="Sunamganj">Sunamganj</option>
	                        <option value="Sylhet">Sylhet</option>
	                    </select>
					</div>


					<script>
					function showSection(division) {
					// Hide all district sections
					var districtSections = document.getElementsByClassName("section");
					for (var i = 0; i < districtSections.length; i++) {
						districtSections[i].style.display = "none";
					}
					// Show the selected division's district section
					var selectedDivisionSection = document.getElementById(division);
					if (selectedDivisionSection) {
						selectedDivisionSection.style.display = "block";
					}
					}
					</script>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Present Address<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="present_address" required class="selectsearch">
							<option hidden selected>Search Country</option>
							<option value="Afghanistan">Afghanistan</option>
	                            <option value="Argentina">Argentina</option>
	                            <option value="Armenia">Armenia</option> 
	               		        <option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Bahrain">Bahrain</option> 
								<option value="Bangladesh">Bangladesh</option> 
								<option value="Belgium">Belgium</option>
	                            <option value="Bhutan">Bhutan</option> 
	               		        <option value="Brazil">Brazil</option>
								<option value="Canada">Canada</option>
	                            <option value="China">China</option> 
	               		        <option value="Colombia">Colombia</option>
								<option value="Denmark">Denmark</option> 
								<option value="Egypt">Egypt</option>
	                            <option value="Finland">Finland</option> 
	               		        <option value="France">France</option>
								<option value="Germany">Germany</option> 
								<option value="Greece">Greece</option>
	                            <option value="Hungary">Hungary</option> 
	               		        <option value="India">India</option>
								<option value="Indonesia">Indonesia</option> 
								<option value="Iran">Iran</option>
	                            <option value="Iraq">Iraq</option> 
	               		        <option value="Ireland">Ireland</option>
								<option value="Italy">Italy</option> 
								<option value="Japan">Japan</option>
	                            <option value="Jordan">Jordan</option> 
								<option value="Kazakhstan">Kazakhstan</option> 
								<option value="Korea, North">Korea, North</option>
	                            <option value="Korea, South">Korea, South</option> 
	               		        <option value="Kuwait">Kuwait</option>
								<option value="Libya">Libya</option> 
								<option value="Luxembourg">Luxembourg</option>
	                            <option value="Malaysia">Malaysia</option> 
								<option value="Maldives">Maldives</option> 
								<option value="Mexico">Mexico</option>
	                            <option value="Morocco">Morocco</option>
								<option value="Myanmar">Myanmar</option>  
	               		        <option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option> 
								<option value="New Zealand	">New Zealand</option>
	                            <option value="Norway">Norway</option> 
								<option value="Oman">Oman</option> 
								<option value="Pakistan">Pakistan</option>
								<option value="Palestine">Palestine</option>
								<option value="Paraguay">Paraguay</option>
	                            <option value="Philippines">Philippines</option>
								<option value="Poland">Poland</option>   
	               		        <option value="Portugal">Portugal</option> 
								<option value="Qatar">Qatar</option> 
								<option value="Russia">Russia</option> 
								<option value="Saudi Arabia">Saudi Arabia</option>
	                            <option value="Singapore">Singapore</option>
								<option value="South Africa">South Africa</option>  
	               		        <option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option> 
								<option value="Sweden">Sweden</option>
	                            <option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option> 
								<option value="Taiwan">Taiwan</option>  
								<option value="Tajikistan">Tajikistan</option>   
								<option value="Thailand">Thailand</option> 
								<option value="Turkey">Turkey</option>
	                            <option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>  
	               		        <option value="United Kingdom">United Kingdom</option>
								<option value="United States of America">United States of America</option> 
								<option value="Uruguay">Uruguay</option>
								<option value="Vietnam">Vietnam</option>
	                            <option value="Yemen">Yemen</option>
								<option value="Portugal">Others</option> 
	                        </select>
			            </div>

					<script>
						jQuery('.selectsearch').chosen();
					</script>


<div class="shosurbari-biodata-field">
	<label for="edit-name">Present Location<span class="form-required" title="This field is required.">*</span></label>
	<input type="text" id="edit-name" name="present_address" value="<?php echo $present_address; ?>" size="100" maxlength="100" class="form-text required" required>
</div>

<div class="shosurbari-biodata-field">
	<label for="edit-name">Where did you grow up?<span class="form-required" title="This field is required.">*</span></label>
	<input type="text" id="edit-name" name="childhood" value="<?php echo $childhood; ?>" size="100" maxlength="100" class="form-text required" required>
</div>
</div>
</div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--       Address Details  /  sb-biodata-4        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
<!--4 fieldsets end-->









<!--5 fieldsets start-->
    <fieldset>

    
<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
//bd_family_information_5($id);



//getting profile details from db
$sql="SELECT * FROM 5bd_family_information WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
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
	//echo $father_alive.' '.$fatheroccupation.' '.$mother_alive.' '.	$motheroccupation.' '.$brosis_number.' '.$brosis_info.' '.$uncle_profession.' '.$family_class.' '.$financial_condition.' '.$family_religious;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Family Information  / sb-biodata-5        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                   <div class="sb-biodata" id="familyInfo">

                        <div class="sb-biodata-field">
		                   <h2>Family Information</h2>
                        </div>

						<div class="sb-biodata-option">

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Is your Father alive?<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="father_alive" value="<?php echo $father_alive; ?>" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		    		        <label for="edit-name">Fathers Occupation<span class="form-required" title="This field is required.">*</span></label>
			  		        <input type="text" id="edit-name" name="fatheroccupation" value="<?php echo $fatheroccupation; ?>" size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Is your Mother alive?<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="mother_alive"  value="<?php echo $mother_alive; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Mothers Occupation<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="motheroccupation"  value="<?php echo $motheroccupation; ?>"  size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">How many Sisters & Brothers do you have?<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="brosis_number"  value="<?php echo $brosis_number; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Sisters & Brothers information<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" id="edit-name" name="brosis_info"   placeholder="Discribe Your Sisters & Brothers information" class="form-text-describe" required><?php echo $brosis_info; ?></textarea>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Profession of uncles<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" id="edit-name" name="uncle_profession"  placeholder="Describe Profession of Your Uncles" class="form-text-describe" required><?php echo $uncle_profession; ?></textarea>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Family financial status<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="family_class" required>
							<option hidden selected></option>
	                            <option value="Higher Class">Higher Class</option>
	                            <option value="Higher Middle Class">Higher Middle Class</option> 
	               		        <option value="Middle Class">Middle Class</option>
								<option value="Lower Middle Class">Lower Middle Class</option>
								<option value="Lower Class">Lower Class</option>  
	                        </select>
			            </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Describe of financial condition<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="5" id="edit-name" name="financial_condition" placeholder="Describe Your Financial Condition" class="form-text-describe" required><?php echo $financial_condition; ?></textarea>
		                </div>

						<div class="shosurbari-biodata-field">
		    	            <label for="about me">How is your family's religious condition?<span class="form-required" title="This field is required.">*</span></label>
		    	            <textarea rows="5" name="family_religious"  placeholder="Describe Your Family's Religious Condition" class="form-text-describe" required><?php echo $family_religious; ?></textarea>
		                </div>
                    </div>
		        </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--     Family Information  / sb-biodata-5        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
<!--5 fieldsets end-->









<!--6 fieldsets start-->
<?php
include("includes/dbconn.php");

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


<fieldset>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Male / Female Marriage Info / sb-biodata-6   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                        <div class="sb-biodata" id="maleMarriageInfo">


                            <div class="sb-biodata-field">
		                        <h2>Marriage related Information</h2>
                            </div>

							<div class="sb-biodata-option">
    <div class="shosurbari-biodata-field">
        <label for="edit-name">Marital status<span class="form-required" title="This field is required.">*</span></label>
        <select name="maritalstatus" required onchange="toggleMaritalStatus(this.value)">
		<option hidden selected></option>
            <option value="Unmarried">Unmarried</option>
            <option value="Divorced">Divorced</option>
            <option value="Widow">Widow</option>
            <option value="Widower">Widower</option>
            <option value="Married">Married</option>
        </select>
    </div>

	<!-- Unmarried Sections -->
	<div class="shosurbari-biodata-field" id="unmarried-section" style="display: none;">
		<div class="shosurbari-biodata-field">
			<label for="edit-name">Do your guardians agree to your marriage?<span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="guardians_agree_male"  value="<?php echo $guardians_agree_male; ?>"  size="100" maxlength="100" class="form-text" required>
		</div>
	</div>

    <!-- Divorce Section -->
    <div class="shosurbari-biodata-field" id="divorce-section" style="display: none;">
        <div class="shosurbari-biodata-field">
            <label for="edit-name">Reason of Divorce?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="divorce_reason" placeholder="Describe Your Divorce Reason" class="form-text-describe"></textarea>
        </div>

        <div class="shosurbari-biodata-field">
            <label for="edit-name">How many sons?<span class="form-required" title="This field is required.">*</span></label>
            <select name="divorce_how_many_son" onchange="toggleDivorceSonDetails(this.value)">
			<option hidden selected></option>
                <option value="No Son">No Son</option>
                <option value="1 Son">1 Son</option>
                <option value="2 Son">2 Son</option>
                <option value="3 Son">3 Son</option>
                <option value="4 Son">4 Son</option>
                <option value="5 Son">5 Son</option>
                <option value="6 Son">6 Son</option>
                <option value="7 Son">7 Son</option>
                <option value="8 Son">8 Son</option>
            </select>
        </div>

        <div class="shosurbari-biodata-field" id="divorce-son-details" style="display: none;">
            <label for="edit-name">Son Details?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="divorce_son_details" placeholder="Describe Your Son Details" class="form-text-describe"></textarea>
        </div>

		<div class="shosurbari-biodata-field">
		    <label for="edit-name">Do your guardians agree to your marriage?<span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="guardians_agree_male"  value="<?php echo $guardians_agree_male; ?>"  size="100" maxlength="100" class="form-text" required>
		</div>
    </div>

    <!-- Widow Section -->
    <div class="shosurbari-biodata-field" id="widow-section" style="display: none;">
        <div class="shosurbari-biodata-field">
            <label for="edit-name">How to Widow?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="how_widow" placeholder="Describe How You Became a Widow" class="form-text-describe"></textarea>
        </div>

        <div class="shosurbari-biodata-field">
            <label for="edit-name">How many sons?<span class="form-required" title="This field is required.">*</span></label>
            <select name="widow_how_many_son" onchange="toggleWidowSonDetails(this.value)">
			<option hidden selected></option>
                <option value="No Son">No Son</option>
                <option value="1 Son">1 Son</option>
                <option value="2 Son">2 Son</option>
                <option value="3 Son">3 Son</option>
                <option value="4 Son">4 Son</option>
                <option value="5 Son">5 Son</option>
                <option value="6 Son">6 Son</option>
                <option value="7 Son">7 Son</option>
                <option value="8 Son">8 Son</option>
            </select>
        </div>

        <div class="shosurbari-biodata-field" id="widow-son-details" style="display: none;">
            <label for="edit-name">Son Details?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="widow_son_details" placeholder="Describe Your Son Details" class="form-text-describe"></textarea>
        </div>

		<div class="shosurbari-biodata-field">
		    <label for="edit-name">Do your guardians agree to your marriage?<span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="guardians_agree_male"  value="<?php echo $guardians_agree_male; ?>"  size="100" maxlength="100" class="form-text" required>
		</div>
    </div>

    <!-- Widower Section -->
    <div class="shosurbari-biodata-field" id="widower-section" style="display: none;">
        <div class="shosurbari-biodata-field">
            <label for="edit-name">How to Widower?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="how_widower" placeholder="Describe How You Became a Widower" class="form-text-describe"></textarea>
        </div>

        <div class="shosurbari-biodata-field">
            <label for="edit-name">How many sons?<span class="form-required" title="This field is required.">*</span></label>
            <select name="widower_how_many_son" onchange="toggleWidowerSonDetails(this.value)">
			<option hidden selected></option>
                <option value="No Son">No Son</option>
                <option value="1 Son">1 Son</option>
                <option value="2 Son">2 Son</option>
                <option value="3 Son">3 Son</option>
                <option value="4 Son">4 Son</option>
                <option value="5 Son">5 Son</option>
                <option value="6 Son">6 Son</option>
                <option value="7 Son">7 Son</option>
                <option value="8 Son">8 Son</option>
            </select>
        </div>

        <div class="shosurbari-biodata-field" id="widower-son-details" style="display: none;">
            <label for="edit-name">Son Details?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="widower_son_details" placeholder="Describe Your Son Details" class="form-text-describe"></textarea>
        </div>

		<div class="shosurbari-biodata-field">
		    <label for="edit-name">Do your guardians agree to your marriage?<span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="guardians_agree_male"  value="<?php echo $guardians_agree_male; ?>"  size="100" maxlength="100" class="form-text" required>
		</div>
    </div>

    <!-- Married Section -->
    <div class="shosurbari-biodata-field" id="married-section" style="display: none;">
		<div class="shosurbari-biodata-field">
            <label for="edit-name">Get permission from your present Wife?<span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="get_wife_permission"  value="<?php echo $get_wife_permission; ?>"  size="100" maxlength="100" class="form-text">
        </div>

		<div class="shosurbari-biodata-field">
            <label for="edit-name">Get permission from your Family & Wife's Family?<span class="form-required" title="This field is required.">*</span></label>
			<input type="text" id="edit-name" name="get_family_permission"  value="<?php echo $get_family_permission; ?>"  size="100" maxlength="100" class="form-text">
        </div>

		<div class="shosurbari-biodata-field">
            <label for="edit-name">Why again Married?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="why_again_married" placeholder="Describe How You Became a Widower" class="form-text-describe"></textarea>
        </div>

        <div class="shosurbari-biodata-field">
            <label for="edit-name">How many sons?<span class="form-required" title="This field is required.">*</span></label>
			<select name="married_how_many_son" onchange="toggleMarriedSonDetails(this.value)">
			<option hidden selected></option>
                <option value="No Son">No Son</option>
                <option value="1 Son">1 Son</option>
                <option value="2 Son">2 Son</option>
                <option value="3 Son">3 Son</option>
                <option value="4 Son">4 Son</option>
                <option value="5 Son">5 Son</option>
                <option value="6 Son">6 Son</option>
                <option value="7 Son">7 Son</option>
                <option value="8 Son">8 Son</option>
            </select>
        </div>
        <div class="shosurbari-biodata-field" id="married-son-details" style="display: none;">
            <label for="edit-name">Son Details?<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="5" name="married_son_details" placeholder="Describe Your Son Details" class="form-text-describe"></textarea>
        </div>
    </div>










							<div class="shosurbari-biodata-field" id="male-allow-wife-job">
		                        <label for="edit-name">Would you like to allow your wife to do any job after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="allowjob_aftermarriage"  value="<?php echo $allowjob_aftermarriage; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>
							<!--Top Male | OR | Bellow Female-->
							<div class="shosurbari-biodata-field" id="female-job-after-marriage">
								<label for="edit-name">Are you willing to do any job after marriage?<span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-name" name="anyjob_aftermarriage" value="<?php echo $anyjob_aftermarriage; ?>" size="100" maxlength="100" class="form-text" required>
							</div>




							<div class="shosurbari-biodata-field" id="male-allow-wife-study">
								<label for="edit-name">Would you like to allow your wife to study after marriage?<span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-name" name="allowstudy_aftermarriage" value="<?php echo $allowstudy_aftermarriage; ?>" size="100" maxlength="100" class="form-text" required>
							</div>
							<!--Top Male | OR | Bellow Female-->
							<div class="shosurbari-biodata-field" id="female-study-after-marriage">
		                        <label for="edit-name">Would you like to continue your studies after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="studies_aftermarriage"   value="<?php echo $studies_aftermarriage; ?>"  size="200" maxlength="200" class="form-text" required>
		                    </div>

							
							<div class="shosurbari-biodata-field" id="male-live-with-wife">
		                        <label for="edit-name">Where will you live with your wife after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="livewife_aftermarriage"  value="<?php echo $livewife_aftermarriage; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>
							<!--Top Male | OR | Bellow Female-->
							<div class="shosurbari-biodata-field" id="female-agree-marriage-student">
		                        <label for="edit-name">Are you agree Marriage to student?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="agree_marriage_student"   value="<?php echo $agree_marriage_student; ?>"size="200" maxlength="200" class="form-text" required>
		                    </div>


							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Profile Created by<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="profileby" required>
								<option hidden selected></option>
	                            <option value="Self">Self</option>
								<option value="Father">Father</option>
	                            <option value="Mother">Mother</option>
	                            <option value="Brother">Brother</option>
	                            <option value="Sister">Sister</option>
								<option value="Uncle">Uncle</option> 
	                            <option value="Aunty">Aunty</option>
								<option value="Grandfather">Grandfather</option> 
	                            <option value="Grandmother">Grandmother</option> 
	               		        <option value="Other">Other</option> 
	                            </select>
			                </div>
                        </div>    
                    </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--  Male / Female Marriage Info / sb-biodata-6   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />



<script>
	function toggleGenderSections(selectedGender) {
    var maleallowJobwife = document.getElementById('male-allow-wife-job');
    var femaleJobSection = document.getElementById('female-job-after-marriage');
	
							
	var maleallowStudywife = document.getElementById('male-allow-wife-study');
    var femaleStudySection = document.getElementById('female-study-after-marriage');

	var maleliveWithwife = document.getElementById('male-live-with-wife');
    var femaleagreeMarriagestudent = document.getElementById('female-agree-marriage-student');
							

    if (selectedGender === 'Male') {
        maleallowJobwife.style.display = 'block';
        femaleJobSection.style.display = 'none';

		maleallowStudywife.style.display = 'block';
        femaleStudySection.style.display = 'none';

		maleliveWithwife.style.display = 'block';
        femaleagreeMarriagestudent.style.display = 'none';

    } else if (selectedGender === 'Female') {
        maleallowJobwife.style.display = 'none';
        femaleJobSection.style.display = 'block';

		maleallowStudywife.style.display = 'none';
        femaleStudySection.style.display = 'block';

		maleliveWithwife.style.display = 'none';
        femaleagreeMarriagestudent.style.display = 'block';
    } else {
        maleallowJobwife.style.display = 'none';
        femaleJobSection.style.display = 'none';

		maleallowStudywife.style.display = 'none';
        femaleStudySection.style.display = 'none';

		maleliveWithwife.style.display = 'none';
        femaleagreeMarriagestudent.style.display = 'none';
    }
}






function toggleMaritalStatus(selectedStatus) {
	var unmarriedSection = document.getElementById('unmarried-section');
    var divorceSection = document.getElementById('divorce-section');
    var widowSection = document.getElementById('widow-section');
    var widowerSection = document.getElementById('widower-section');
    var marriedSection = document.getElementById('married-section');

    // Hide all sections initially
	unmarriedSection.style.display = 'none';
    divorceSection.style.display = 'none';
    widowSection.style.display = 'none';
    widowerSection.style.display = 'none';
    marriedSection.style.display = 'none';

    if (selectedStatus === 'Unmarried') {
        unmarriedSection.style.display = 'block';
    } else if (selectedStatus === 'Divorced') {
        divorceSection.style.display = 'block';
    } else if (selectedStatus === 'Widow') {
        widowSection.style.display = 'block';
    } else if (selectedStatus === 'Widower') {
        widowerSection.style.display = 'block';
    } else if (selectedStatus === 'Married') {
        marriedSection.style.display = 'block';
    }
}

function toggleDivorceSonDetails(selectedDivorceSonCount) {
    var divorceSonDetailsSection = document.getElementById('divorce-son-details');

    if (selectedDivorceSonCount !== 'No Son') {
        divorceSonDetailsSection.style.display = 'block';
    } else {
        divorceSonDetailsSection.style.display = 'none';
    }
}

function toggleWidowSonDetails(selectedWidowSonCount) {
    var widowSonDetailsSection = document.getElementById('widow-son-details');

    if (selectedWidowSonCount !== 'No Son') {
        widowSonDetailsSection.style.display = 'block';
    } else {
        widowSonDetailsSection.style.display = 'none';
    }
}

function toggleWidowerSonDetails(selectedWidowerSonCount) {
    var widowerSonDetailsSection = document.getElementById('widower-son-details');

    if (selectedWidowerSonCount !== 'No Son') {
        widowerSonDetailsSection.style.display = 'block';
    } else {
        widowerSonDetailsSection.style.display = 'none';
    }
}

function toggleMarriedSonDetails(selectedMarriedSonCount) {
    var marriedSonDetailsSection = document.getElementById('married-son-details');

    if (selectedMarriedSonCount !== 'No Son') {
        marriedSonDetailsSection.style.display = 'block';
    } else {
        marriedSonDetailsSection.style.display = 'none';
    }
}

</script>
<!--6 fieldsets end-->
</fieldset>










<!--7 fieldsets start-->
<fieldset>

<?php
include("includes/dbconn.php");


//getting profile details from db
$sql="SELECT * FROM 8bd_religion_details WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
if($row){
$religion=$row['religion'];
}
if($row){
$yourreligion_condition=$row['yourreligion_condition'];
}
}
	//echo $religion.' '.$yourreligion_condition;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--        Religion Details / sb-biodata-7        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                        <div class="sb-biodata" id="religionDetails">

                            <div class="sb-biodata-field">
		                        <h2>Religion Details</h2>
                            </div>

							<div class="sb-biodata-option">

							
					        <div class="shosurbari-biodata-field">
			                    <label for="edit-pass">Religion<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="religion" required>
								<option hidden selected></option>
						        <option value="Muslim">Muslim</option>
		                        <option value="Hindu">Hindu</option>
		                        <option value="Christian">Christian</option>
		                        <option value="Budhism">Budhism</option>
		                        <option value="Others">Others</option>
	                            </select>
	                        </div>

					        <div class="shosurbari-biodata-field">
		    	               <label for="about me">How is your religious condition?<span class="form-required" title="This field is required.">*</span></label>
		    	               <textarea rows="5" name="yourreligion_condition" placeholder="Describe Your Religious Condition" class="form-text-describe" required><?php echo $yourreligion_condition; ?></textarea>
		                    </div>
                            </div>
                        </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--        Religion Details / sb-biodata-7        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
<!--7 fieldsets end-->







<!--8 fieldsets start-->
<fieldset>

<?php
include("includes/dbconn.php");

//getting profile details from db
$sql="SELECT * FROM 9bd_expected_life_partner WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
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
//echo $partner_religius.' '.$partner_district.' '.$partner_maritialstatus.' '.$partner_age.' '.$partner_skintones.' '.$partner_height.' '.$partner_education.' '.$partner_profession.' '.$partner_financial.' '.$partner_attributes;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Expected Life Partner / sb-biodata-8      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                    <div class="sb-biodata" id="expectedPartner">

                        <div class="sb-biodata-field">
		                   <h2>Expected Life Partner</h2>
                        </div>

						<div class="sb-biodata-option">

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Religius Status<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_religius"  value="<?php echo $partner_religius; ?>"  size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">District<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_district" value="<?php echo $partner_district; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Marital Status<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_maritialstatus"  value="<?php echo $partner_maritialstatus; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_age" value="<?php echo $partner_age; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		    		        <label for="edit-name">Skin Tones<span class="form-required" title="This field is required.">*</span></label>
			  		        <input type="text" id="edit-name" name="partner_skintones"  value="<?php echo $partner_skintones; ?>" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Height<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_height"  value="<?php echo $partner_height; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Educational Qualification<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_education"  value="<?php echo $partner_education; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Profession<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_profession"  value="<?php echo $partner_profession; ?>"  size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Financial condition<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="partner_financial"  value="<?php echo $partner_financial; ?>"  size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Expected qualities or attributes of your life partner<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" id="edit-name" name="partner_attributes" placeholder="Describe Expected Qualities or Attributes of Your Life Partner" class="form-text-describe" required><?php echo $partner_attributes; ?></textarea>
		                </div>
                    </div>
		        </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--     Expected Life Partner / sb-biodata-8      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->



        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Calculate" />
    </fieldset>
<!--8 fieldsets end-->
</div>
</form>





</div>

<?php include_once("footer.php");?>

</body>
</html>



<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

<style>
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

$(".submit").click(function() {
  return false;
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

<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--       Update & Store the data to Database     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //Biodata 1 
	$biodatagender=$_POST['biodatagender'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$dob=$day ."-" . $month . "-" .$year ;
	$height=$_POST['height'];
	$weight=$_POST['weight'];	
	$physicalstatus=$_POST['physicalstatus'];
	$Skin_tones = $_POST['Skin_tones'];
	$bloodgroup=$_POST['bloodgroup'];

	//Biodata 2
	$smoke=$_POST['smoke'];
	$occupation=$_POST['occupation'];
	$occupation_describe=$_POST['occupation_describe'];
	$dress_code=$_POST['dress_code'];
	$aboutme=$_POST['aboutme'];	

	//Biodata 3
	$education_method=$_POST['education_method'];
	$sscpassyear=$_POST['sscpassyear'];
	$current_education=$_POST['current_education'];
	$maximum_education=$_POST['maximum_education'];

	//Biodata 4
	$permanent_division=$_POST['permanent_division'];
	$present_address=$_POST['present_address'];
	$permanent_address=$_POST['permanent_address'];
	$childhood=$_POST['childhood'];

	//Biodata 5
	$father_alive=$_POST['father_alive'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$mother_alive=$_POST['mother_alive'];
	$motheroccupation=$_POST['motheroccupation'];
	$brosis_number=$_POST['brosis_number'];
	$brosis_info=$_POST['brosis_info'];
	$uncle_profession=$_POST['uncle_profession'];
	$family_class=$_POST['family_class'];
	$financial_condition=$_POST['financial_condition'];
	$family_religious=$_POST['family_religious'];

	// Marital Status 6 & 7
	$maritalstatus=$_POST['maritalstatus'];
	// Divorce
	$divorce_reason=$_POST['divorce_reason'];
	$divorce_how_many_son=$_POST['divorce_how_many_son'];
	$divorce_son_details=$_POST['divorce_son_details'];
	// Widow
	$how_widow=$_POST['how_widow'];
	$widow_how_many_son=$_POST['widow_how_many_son'];
	$widow_son_details=$_POST['widow_son_details'];
	// Widower
	$how_widower=$_POST['how_widower'];
	$widower_how_many_son=$_POST['widower_how_many_son'];
	$widower_son_details=$_POST['widower_son_details'];
	// Married
	$get_wife_permission=$_POST['get_wife_permission'];
	$get_family_permission=$_POST['get_family_permission'];
	$why_again_married=$_POST['why_again_married'];
	$married_how_many_son=$_POST['married_how_many_son'];
	$married_son_details=$_POST['married_son_details'];

	//Biodata 6
	$guardians_agree_male=$_POST['guardians_agree_male'];
	$allowstudy_aftermarriage=$_POST['allowstudy_aftermarriage'];
	$allowjob_aftermarriage=$_POST['allowjob_aftermarriage'];
	$livewife_aftermarriage=$_POST['livewife_aftermarriage'];
	$profileby=$_POST['profileby'];
 
	//Biodata 7
	$guardians_agree_female=$_POST['guardians_agree_female'];
	$anyjob_aftermarriage=$_POST['anyjob_aftermarriage'];
	$studies_aftermarriage=$_POST['studies_aftermarriage'];
	$agree_marriage_student=$_POST['agree_marriage_student'];
	$profileby=$_POST['profileby'];

	//Biodata 8
	$religion=$_POST['religion'];
	$yourreligion_condition=$_POST['yourreligion_condition'];

	//Biodata 9
	$partner_religius=$_POST['partner_religius'];
	$partner_district=$_POST['partner_district'];
	$partner_maritialstatus=$_POST['partner_maritialstatus'];
	$partner_age=$_POST['partner_age'];
	$partner_skintones=$_POST['partner_skintones'];
	$partner_height=$_POST['partner_height'];
	$partner_education=$_POST['partner_education'];
	$partner_profession=$_POST['partner_profession'];
	$partner_financial=$_POST['partner_financial'];
	$partner_attributes=$_POST['partner_attributes'];



	// Set the default time zone to Bangladesh
	date_default_timezone_set('Asia/Dhaka');
	// Get the current date and time
	$currentDate = date('j F Y, h:i:s A');


    //Biodata 1 
    insertData("1bd_personal_physical", [
        'user_id' => $id,
        'biodatagender' => $biodatagender,
        'dateofbirth' => $dob,
        'height' => $height,
        'weight' => $weight,
        'physicalstatus' => $physicalstatus,
        'Skin_tones' => $Skin_tones,
        'bloodgroup' => $bloodgroup,
		'profilecreationdate' => $currentDate

    ]);



	//Biodata 2
    insertData("2bd_personal_lifestyle", [
        'user_id' => $id,
        'smoke' => $smoke,
        'occupation' => $occupation,
        'occupation_describe' => $occupation_describe,
        'dress_code' => $dress_code,
        'aboutme' => $aboutme
    ]);


    

	//Biodata 3
    insertData("3bd_educational_qualifications", [
        'user_id' => $id,
        'education_method' => $education_method,
        'sscpassyear' => $sscpassyear,
        'current_education' => $current_education,
        'maximum_education' => $maximum_education
    ]);



	//Biodata 4
    insertData("4bd_address_details", [
        'user_id' => $id,
        'permanent_division' => $permanent_division,
        'present_address' => $present_address,
        'permanent_address' => $permanent_address,
        'childhood' => $childhood
    ]);


	//Biodata 5
    insertData("5bd_family_information", [
        'user_id' => $id,
        'father_alive' => $father_alive,
        'fatheroccupation' => $fatheroccupation,
        'mother_alive' => $mother_alive,
        'motheroccupation' => $motheroccupation,
        'brosis_number' => $brosis_number,
        'brosis_info' => $brosis_info,
        'uncle_profession' => $uncle_profession,
        'family_class' => $family_class,
        'financial_condition' => $financial_condition,
        'family_religious' => $family_religious
    ]);


	// Marital Status 6 & 7
	insertData("6bd_7bd_marital_status", [
			'user_id' => $id,
			'maritalstatus' => $maritalstatus,

			'divorce_reason' => $divorce_reason,
			'divorce_how_many_son' => $divorce_how_many_son,
			'divorce_son_details' => $divorce_son_details,

			'how_widow' => $how_widow,
			'widow_how_many_son' => $widow_how_many_son,
			'widow_son_details' => $widow_son_details,
		
			'how_widower' => $how_widower,
			'widower_how_many_son' => $widower_how_many_son,
			'widower_son_details' => $widower_son_details,

			'get_wife_permission' => $get_wife_permission,
			'get_family_permission' => $get_family_permission,
			'why_again_married' => $why_again_married,			'how_widower' => $how_widower,
			'married_how_many_son' => $married_how_many_son,
			'married_son_details' => $married_son_details,
			'profilecreationdate' => $profilecreationdate,
		]);


	//Biodata 6
    insertData("6bd_marriage_related_qs_male", [
        'user_id' => $id,
        'guardians_agree_male' => $guardians_agree_male,
        'allowstudy_aftermarriage' => $allowstudy_aftermarriage,
        'allowjob_aftermarriage' => $allowjob_aftermarriage,
        'livewife_aftermarriage' => $livewife_aftermarriage,
        'profileby' => $profileby
    ]);


	//Biodata 7
    insertData("7bd_marriage_related_qs_female", [
        'user_id' => $id,
        'guardians_agree_female' => $guardians_agree_female,
        'anyjob_aftermarriage' => $anyjob_aftermarriage,
        'studies_aftermarriage' => $studies_aftermarriage,
        'agree_marriage_student' => $agree_marriage_student,
        'profileby' => $profileby
    ]);


	//Biodata 8
    insertData("8bd_religion_details", [
        'user_id' => $id,
        'religion' => $religion,
        'yourreligion_condition' => $yourreligion_condition
    ]);


	//Biodata 9
    insertData("9bd_expected_life_partner", [
        'user_id' => $id,
        'partner_religius' => $partner_religius,
        'partner_district' => $partner_district,
        'partner_maritialstatus' => $partner_maritialstatus,
        'partner_age' => $partner_age,
        'partner_skintones' => $partner_skintones,
        'partner_height' => $partner_height,
        'partner_education' => $partner_education,
        'partner_profession' => $partner_profession,
        'partner_financial' => $partner_financial,
        'partner_attributes' => $partner_attributes
    ]);

        // Redirect to the desired page after inserting data
        header("Location: view_profile.php?id={$id}");
        exit();
}
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--       Update & Store the data to Database     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
