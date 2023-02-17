<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php
error_reporting(0);
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	processprofile_form($id);
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
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Edit Your Biodata</li>
     </ul>
     <?php
			If(isset($_SESSION['username'])) {
Echo "Welcome : " . $_SESSION ['username'];
} else {
Echo "<a href=\”/login.php\”>Login</a>";
}
?>
   </div>
  </div>
</div>



















<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--   SHOSURBARI BIODATA FORM FIELD ALL SECTION   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
    <div class="shosurbari-biodata">
		<div class="shosurbari-biodata-edit">
            <h1>Edit <span>Biodata</span></h1>
        </div>

	    <form action="editbiodata.php" method="POST">
		<div class="flex-container">









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
            <div class="sb-biodata">

                <div class="sb-biodata-field">
		            <h2>Personal & <span>Physical</span></h2>
                </div>

			  <div class="sb-biodata-option">

		        <div class="shosurbari-biodata-field">
		            <label for="edit-name">Biodata Type<span class="form-required" title="This field is required.">*</span></label>
	                <select name="biodatagender" required>
					    <option><?php echo $biodatagender; ?></option>
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
	                </select>
			    </div>


	                <div class="shosurbari-biodata-field">
					<label for="edit-pass">DOB-Date<span class="form-required" title="This field is required.">*</span></label>
					    <select name="day" required>
		                    <option></option>
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
		                    <option></option>
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
		                    <option></option>
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
	                    </select>
	                </div>


					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Height<span class="form-required" title="This field is required.">*</span></label>
			            <input type="text" id="edit-name" name="height" value="<?php echo $height; ?>" size="100" maxlength="100" class="form-text" required>
                    </div>

					
					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Weight <span class="form-required" title="This field is required.">*</span></label>
			            <input type="text" id="edit-name" name="weight" value="<?php echo $weight; ?>" size="100" maxlength="100" class="form-text" required>
		            </div>

					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
	                    <select name="physicalstatus" required>
							<option><?php echo $physicalstatus; ?></option>
	                        <option value="No Problem">No Problem</option>
	                        <option value="Blind">Blind</option> 
	               		    <option value="Deaf">Deaf</option> 
	                    </select>
			        </div>

					<div class="shosurbari-biodata-field">
					        <label for="edit-name">Skin Tones<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="Skin_tones" required>
							<option><?php echo $Skin_tones; ?></option>
	                        <option value="Light">Light</option>
	                        <option value="Fair">Fair</option> 
	               		    <option value="Medium">Medium</option>
							<option value="Dark">Dark</option>
	                    </select>
			        </div>

					<div class="shosurbari-biodata-field">
					<label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="bloodgroup" required>
							<option><?php echo $bloodgroup; ?></option>
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

//echo $maritalstatus.' '.$smoke.' '.$occupation.' '.$occupation_describe.' '.$dress_code.' '.$aboutme;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Personal & Life Style  / sb-biodata-2     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                    <div class="sb-biodata">

                        <div class="sb-biodata-field">
		                   <h2>Personal & <span>Life Style</span></h2>
                        </div>

						    <div class="sb-biodata-option">

							<div class="shosurbari-biodata-field">
				                <label for="edit-name">Marital status<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="maritalstatus" required>
					            <option><?php echo $maritalstatus; ?></option>
	                            <option value="Unmarried">Unmarried</option>
	                            <option value="Divorced">Divorced</option>
	                            <option value="Widow">Widow</option>
						        <option value="Widower">Widower</option>
						        <option value="Married">Married</option>
	                            </select>
			                </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Smoke or Drinks<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="smoke" required>
								    <option  ><?php echo $smoke; ?></option>
	                                <option value="No">No</option>
	                                <option value="Yes">Yes</option> 
	               		            <option value="Sometimes">Sometimes</option>
	                            </select>
			                </div>


		                    <div class="shosurbari-biodata-field">
		                        <label for="edit-name">Occupation<span class="form-required" title="This field is required.">*</span></label>
								<select name="occupation" class="selectsearch" required>

								    <optgroup label="Students Sector">
								    <option  ><?php echo $occupation; ?></option>
									<option value="Students of Kawmi Madrasa">Students of Kawmi Madrasa</option> 
									<option value="Students of High School">Students of High School</option>
									<option value="Students of Doploma">Students of Doploma</option> 
	               		            <option value="Students of College">Students of College</option>
	                                <option value="Students of B.Sc. Engineering">Students of B.Sc. Engineering</option> 
	               		            <option value="Students of Medical Sector">Students of Medical Sector</option>
	                                <option value="Students of B.Sc.">Students of B.Sc.</option>
	                                <option value="Students of M.Sc.">Students of M.Sc.</option>
									<option value="Students of B.A.">Students of B.A.</option> 
	               		            <option value="Students of M.A.">Students of M.A.</option>
									<option value="Students of B.Com.">Students of B.Com.</option> 
	               		            <option value="Students of M.Com.">Students of M.Com.</option>
                                    </optgroup>
									
								     <optgroup label="Medical Sector">
	                                <option value="MBBS Doctor">MBBS Doctor</option>
	                                <option value="Internship Doctor">Internship Doctor</option> 
									<option value="FCPS Doctor">FCPS Doctor</option>
									<option value="Pharmacist">Pharmacist</option>
									<option value="Diploma Doctor">Diploma Doctor</option>
									<option value="Peramedical">Peramedical</option> 
	               		            <option value="Nursing">Nursing</option>
									<option value="Midwifary">Midwifary</option>
                                    </optgroup>

									<optgroup label="Engineers Sector">
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
                                    </optgroup>

									<optgroup label="Teachers Sector">
									<option value="Teaches of Kawmi Madrasa">Teaches of Kawmi Madrasa</option> 
	                                <option value="Teaches of Primary School">Teaches of Primary School</option> 
	               		            <option value="Teaches of High School">Teaches of High School</option>
									<option value="Professor of College">Professor of College</option>
									<option value="Professor of Public University">Professor of Public University</option>
									<option value="Professor of Private University">Professor of Private University</option>
									<option value="Professor of National University">Professor of National University</option>
									<option value="Professor of Degree">Professor of Degree</option>
                                    </optgroup>

									<optgroup label="Defense Sector">
	                                <option value="Army">Army</option> 
	               		            <option value="Air Force">Air Force</option>
	                                <option value="Navy">Navy</option>
	                                <option value="Police">Police</option>
									<option value="Fire Service">Fire Service</option> 
	               		            <option value="RAB">RAB</option>
	                                <option value="DB">DB</option>
                                    </optgroup>

									<optgroup label="Garments Sector">
	                                <option value="Worker of Garments">Worker of Garments</option> 
	               		            <option value="Managers of Garments">Managers of Garments</option>
                                    </optgroup>

									<optgroup label="Driver Sector">
	                                <option value="Bus Driver">Bus Driver</option> 
									<option value="Micro Driver">Micro Bus Driver</option> 
	                                <option value="Car Driver">Car Driver</option> 
	                                <option value="Truck Driver">Truck Driver</option>
									<option value="CNG Driver">CNG Driver</option> 
	                                <option value="Auto Driver">Auto Driver</option>
                                    </optgroup>

									<optgroup label="Others Sector">
									<option value="Banker">Banker</option>
									<option value="Business">Business</option> 
									<option value="Entrepreneur">Entrepreneur</option> 
									<option value="Lawyer">Lawyer</option> 
	                                <option value="Frelancer">Frelancer</option>
									<option value="Graphics Desigener">Graphics Desigener</option>
									<option value="Sales & Marketing (SR)">Sales & Marketing (SR)</option>  
	                                <option value="No Job">No Job</option>

	                            </select>
							</div>


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
                    <div class="sb-biodata">

                        <div class="sb-biodata-field">
		                   <h2>Educational <span>Qualifications</span></h2>
                        </div>

						<div class="sb-biodata-option">

						<div class="shosurbari-biodata-field">
						   <label for="edit-name">Your Education Method<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="education_method" required>
							   <option><?php echo $education_method; ?></option>
		                       <option value="Genaral">General</option>
		                       <option value="Dakhil">Dakhil</option>
		                       <option value="Technical">Technical</option>
		                       <option value="Qawmi Madrasa">Qawmi Madrasa</option>
							   <option value="Other">Other</option>
							   <option value="None">None</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field">
						<label for="edit-pass">SSC or Equivalent Passing Year<span class="form-required" title="This field is required.">*</span></label>
						<select name="sscpassyear" required>
		                    <option><?php echo $sscpassyear; ?></option>
							<option value="nonyear">None</option>
		                    <option value="2024">SSC Candidet2024</option>
		                    <option value="2023">2023</option>
		                    <option value="2022">2022</option>
		                    <option value="2021">2021</option>
		                    <option value="2020">2020</option>
		                    <option value="2019">2019</option>
		                    <option value="2018">2018</option>
		                    <option value="2017">2017</option>
		                    <option value="2016">2016</option>
		                    <option value="2015">2015</option>
		                    <option value="2014">2014</option>
		                    <option value="2013">2013</option>
		                    <option value="2014">2014</option>
		                    <option value="2013">2013</option>
		                    <option value="2012">2012</option>
		                    <option value="2011">2011</option>
		                    <option value="2010">2010</option>
		                    <option value="2009">2009</option>
		                    <option value="2008">2008</option>
		                    <option value="2007">2007</option>
		                    <option value="2006">2006</option>
		                    <option value="2005">2005</option>
		                    <option value="2004">2004</option>
		                    <option value="2003">2003</option>
		                    <option value="2002">2002</option>
		                    <option value="2001">2001</option>
							<option value="2000">2000</option>
		                    <option value="1999">1999</option>
		                    <option value="1998">1998</option>
		                    <option value="1997">1997</option>
							<option value="1996">1996</option>
		                    <option value="1995">1995</option>
							<option value="1994">1994</option>
		                    <option value="1993">1993</option>
		                    <option value="1992">1992</option>
		                    <option value="1991">1991</option>
							<option value="1990">1990</option>
	                    </select>
	                </div>

					<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Current Education Position<span class="form-required" title="This field is required.">*</span></label>
		                    <input type="text" id="edit-name" name="current_education" value="<?php echo $current_education; ?>" size="200" maxlength="200" class="form-text required" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Maximum Education Position<span class="form-required" title="This field is required.">*</span></label>
		                    <input type="text" id="edit-name" name="maximum_education" value="<?php echo $maximum_education; ?>" size="200" maxlength="200" class="form-text required" required>
		                </div>
                        </div>
                    </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--  Educational Qualifications  / sb-biodata-3   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->















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
 <div class="sb-biodata">
					
<div class="sb-biodata-field">
   <h2>Address <span>Details</span></h2>
</div>

<div class="sb-biodata-option">

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
					<div class="shosurbari-biodata-field">
					    <label for="edit-pass">Division of Permanent Address<span class="form-required" title="This field is required.">*</span></label>
	                    <select name="permanent_division" class="selectsearch" required>
						    <option><?php echo $permanent_division; ?></option>
	                        <option value="Barishal	">Barishal</option>
	                        <option value="Chattogram">Chattogram</option> 
	               		    <option value="Dhaka">Dhaka</option>
							<option value="Khulna">Khulna</option>
	                        <option value="Mymensingh">Mymensingh</option> 
	               		    <option value="Rajshahi">Rajshahi</option>
							<option value="Rangpur">Rangpur</option>
	                        <option value="Sylhet">Sylhet</option> 
	                    </select>
                    </div>

					<div class="shosurbari-biodata-field">
					    <label for="edit-pass">District of Permanent Address<span class="form-required" title="This field is required.">*</span></label>  
						<select name="permanent_address" class="selectsearch" required>

						<option><?php echo $permanent_address; ?></option>
							<optgroup label="Barishal Division">
	                        <option value="Barguna">Barguna</option>
	                        <option value="Barishal">Barishal</option> 
	               		    <option value="Bhola">Bhola</option>
							<option value="Jhalokati">Jhalokati</option>
	                        <option value="Patuakhali">Patuakhali</option> 
	               		    <option value="Pirojpur">Pirojpur</option>
                        </optgroup>

						<optgroup label="Chattagram Division">
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
                        </optgroup>

						<optgroup label="Dhaka Division">
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
                        </optgroup>

						<optgroup label="Khulna Division">
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
                        </optgroup>

						<optgroup label="Mymensingh Division">
							<option value="Jamalpur">Jamalpur</option>
	                        <option value="Mymensingh">Mymensingh</option> 
	               		    <option value="Netrokona">Netrokona</option>
							<option value="Sherpur">Sherpur</option>
                        </optgroup>

						<optgroup label="Rajshahi Division">
							<option value="Bogura">Bogura</option>
							<option value="Chapai Nawabganj">Chapai Nawabganj</option> 
	                        <option value="Joypurhat">Joypurhat</option> 
	               		    <option value="Naogaon">Naogaon</option>
							<option value="Natore">Natore</option>
	               		    <option value="Pabna">Pabna</option>
							<option value="Rajshahi">Rajshahi</option>
	                        <option value="Sirajganj">Sirajganj</option>
                        </optgroup>

						<optgroup label="Rangpur Division">
	               		    <option value="Dinajpur">Dinajpur</option>
							<option value="Gaibandha">Gaibandha</option>
	                        <option value="Kurigram">Kurigram</option>
							<option value="Lalmonirhat">Lalmonirhat</option>  
	               		    <option value="Nilphamari">Nilphamari</option>
							<option value="Panchagarh">Panchagarh</option>
							<option value="Rangpur">Rangpur</option>
							<option value="Thakurgaon">Thakurgaon</option>
                        </optgroup>

						<optgroup label="Sylhet Division">
	                        <option value="Habiganj">Habiganj</option> 
	               		    <option value="Moulvibazar">Moulvibazar</option>
							<option value="Sunamganj">Sunamganj</option>
	                        <option value="Sylhet">Sylhet</option>
                        </optgroup>

	                    </select>
                    </div>
					<script>
						jQuery('.selectsearch').chosen();
					</script>


<div class="shosurbari-biodata-field">
	<label for="edit-name">Present Address<span class="form-required" title="This field is required.">*</span></label>
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
                   <div class="sb-biodata">

                        <div class="sb-biodata-field">
		                   <h2>Family <span>Information</span></h2>
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
							    <option ><?php echo $family_class; ?></option>
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















<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
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
$profileby_male=$row['profileby_male'];
}
}

	//echo $guardians_agree_male.' '.$allowstudy_aftermarriage.' '.$allowjob_aftermarriage.' '.$livewife_aftermarriage.' '.$profileby_male;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--   Male Marriage related Info / sb-biodata-6   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                        <div class="sb-biodata">

                            <div class="sb-biodata-field">
		                        <h2>Marriage related <span>Information</span></h2>
                            </div>

							<div class="sb-biodata-option">

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Do your guardians agree to your marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="guardians_agree_male"  value="<?php echo $guardians_agree_male; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Would you like to allow your wife to study after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="allowstudy_aftermarriage"  value="<?php echo $allowstudy_aftermarriage; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Would you like to allow your wife to do any job after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="allowjob_aftermarriage"  value="<?php echo $allowjob_aftermarriage; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Where will you live with your wife after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="livewife_aftermarriage"  value="<?php echo $livewife_aftermarriage; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Profile Created by<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="profileby_male" required>
								<option><?php echo $profileby_male; ?></option>
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
--   Male Marriage related Info / sb-biodata-6   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->















<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
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
$profileby_female=$row['profileby_female'];
}
}
	//echo $guardians_agree_female.' '.$anyjob_aftermarriage.' '.$studies_aftermarriage.' '.$agree_marriage_student.' '.$profileby_female;
?>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Female Marriage related Info / sb-biodata-7  --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                        <div class="sb-biodata">

                            <div class="sb-biodata-field">
		                        <h2>Marriage related <span>Information</span></h2>
                            </div>

							<div class="sb-biodata-option">

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Do your guardians agree to your marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="guardians_agree_female"   value="<?php echo $guardians_agree_female; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Are you willing to do any job after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="anyjob_aftermarriage"   value="<?php echo $anyjob_aftermarriage; ?>"  size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Would you like to continue your studies after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="studies_aftermarriage"   value="<?php echo $studies_aftermarriage; ?>"  size="200" maxlength="200" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Are you agree Marriage to student?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="agree_marriage_student"   value="<?php echo $agree_marriage_student; ?>"size="200" maxlength="200" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Profile Created by<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="profileby_female" required>
								<option><?php echo $profileby_female; ?></option>
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
--  Female Marriage related Info / sb-biodata-7  --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
















<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
//bd_religion_details_8($id);



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
--        Religion Details / sb-biodata-8        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                        <div class="sb-biodata">

                            <div class="sb-biodata-field">
		                        <h2>Religion <span>Details</span></h2>
                            </div>

							<div class="sb-biodata-option">

							
					        <div class="shosurbari-biodata-field">
			                    <label for="edit-pass">Religion<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="religion" required>
								<option ><?php echo $religion; ?></option>
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
--        Religion Details / sb-biodata-8        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->















<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
//bd_expected_life_partner_9($id);

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
--     Expected Life Partner / sb-biodata-9      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
                    <div class="sb-biodata">

                        <div class="sb-biodata-field">
		                   <h2>Expected Life <span>Partner</span></h2>
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
--     Expected Life Partner / sb-biodata-9      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





		            <div class="form-actions">
			          <input type="submit" id="edit-submit" name="op" value="Submit Biodata" class="btn_1 submit">
			        </div>
        </div>
	    </form>
    </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--     SHOSURBARI BIODATA FIELD ALL SECTION      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

<?php include_once("footer.php");?>

</body>
</html>
