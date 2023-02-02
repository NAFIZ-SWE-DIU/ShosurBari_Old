<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
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
--     SHOSURBARI BIODATA FIELD ALL SECTION      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
    <div class="shosurbari-biodata">
		<div class="shosurbari-biodata-edit">
            <h1>Edit <span>Biodata</span></h1>
        </div>

	    <form action="" method="POST">
		<div class="flex-container">





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
	                <select name="sex" required>
					    <option value=""></option>
	                    <option value="Male">Male's</option>
	                    <option value="Female">Female's</option> 
	                </select>
			    </div>




	                <div class="shosurbari-biodata-field">
					<label for="edit-pass">DOB-Date<span class="form-required" title="This field is required.">*</span></label>
					    <select name="day" required>
		                    <option value=""></option>
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
		                    <option value=""></option>
		                    <option value="01">January</option>
		                    <option value="02">February</option>
		                    <option value="03">March</option>
		                    <option value="04">April</option>
		                    <option value="05">May</option>
		                    <option value="06">June</option>
		                    <option value="07">July</option>
		                    <option value="08">August</option>
		                    <option value="09">September</option>
		                    <option value="10">October</option>
		                    <option value="11">November</option>
		                    <option value="12">December</option>
	                    </select>
	                </div>

	                <div class="shosurbari-biodata-field">
					<label for="edit-pass">DOB-Year<span class="form-required" title="This field is required.">*</span></label>
	                    <select name="year" required>
		                    <option value=""></option>
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
							<option value="2000">2007</option>
		                    <option value="2001">2008</option>
		                    <option value="2002">2009</option>
		                    <option value="2003">2010</option>
		                    <option value="2004">2011</option>
		                    <option value="2005">2012</option>
		                    <option value="2006">2013</option>
	                    </select>
	                </div>

					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Height<span class="form-required" title="This field is required.">*</span></label>
			            <input type="text" id="edit-name" name="height" value="" size="100" maxlength="100" class="form-text" required>
                    </div>

					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Weight <span class="form-required" title="This field is required.">*</span></label>
			            <input type="text" id="edit-name" name="weight" value="" size="100" maxlength="100" class="form-text" required>
		            </div>

					<div class="shosurbari-biodata-field">
		                <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
	                    <select name="physicalstatus" required>
							<option value=""></option>
	                        <option value="No Problem">No Problem</option>
	                        <option value="Blind">Blind</option> 
	               		    <option value="Deaf">Deaf</option> 
	                    </select>
			        </div>

					<div class="shosurbari-biodata-field">
					        <label for="edit-name">Skin Tones<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="colour" required>
							<option value=""></option>
	                        <option value="Light">Light</option>
	                        <option value="Fair">Fair</option> 
	               		    <option value="Medium">Medium</option>
							<option value="Dark">Dark</option>
							<option value="Normal">Normal</option> 
	                    </select>
			        </div>

					<div class="shosurbari-biodata-field">
					<label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="bloodgroup" required>
							<option value=""></option>
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

					<div class="shosurbari-biodata-field">
					<label for="edit-pass">Nationality<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="country" required>
						    <option value=""></option>
	                        <option value="Bangladesh">Bangladesh</option>
	                        <option value="India">India</option> 
	               		    <option value="Pakistan">Pakistan</option>
							<option value="America">America</option>
	                        <option value="Australia">Australia</option> 
	               		    <option value="Canada">Canada</option>
							<option value="China">China</option>
	                        <option value="England">England</option> 
	               		    <option value="France">France</option>
							<option value="Germany">Germany</option>
	                        <option value="Hongkong">Hongkong</option>
							<option value="Italy">Italy</option>  
	               		    <option value="Iraq">Iraq</option>
							<option value="Iran">Iran</option>
							<option value="Japan">Japan</option>
							<option value="Korea">Korea</option>
	                        <option value="Mayanmar">Mayanmar</option> 
	               		    <option value="Qatar">Qatar</option>
							<option value="Rusia">Rusia</option>
	                        <option value="Saudi-Arabia">Saudi-Arabia</option> 
	               		    <option value="Vietnam">Vietnam</option>
							<option value="other">Other</option>
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
					            <option value=""></option>
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
								    <option value=""></option>
	                                <option value="No">No</option>
	                                <option value="Yes">Yes</option> 
	               		            <option value="Sometimes">Sometimes</option>
	                            </select>
			                </div>

		                    <div class="shosurbari-biodata-field">
		                        <label for="edit-name">Occupation<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="occupation" value="" size="200" maxlength="200" class="form-text" required>
		                    </div>

		                    <div class="shosurbari-biodata-field">
		                        <label for="edit-name">Occupation Describe<span class="form-required" title="This field is required.">*</span></label>
								<textarea rows="5" id="edit-name" name="occupation" placeholder="Write about you" class="form-text-describe" required></textarea>
		                    </div>

							<div class="shosurbari-biodata-field">
		    	               <label for="about me">Your Dress Code at Home or Out Side<span class="form-required" title="This field is required.">*</span></label>
		    	               <textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text-describe" required></textarea>
		                    </div>

							<div class="shosurbari-biodata-field">
		    	               <label for="about me">Write Something About You<span class="form-required" title="This field is required.">*</span></label>
		    	               <textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text-describe" required></textarea>
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
	                        <select name="education" required>
							   <option value=""></option>
		                       <option value="Genaral">General</option>
		                       <option value="Dakhil">Dakhil</option>
		                       <option value="Technical">Technical</option>
		                       <option value="Qawmimadrasa">Qawmi Madrasa</option>
							   <option value="Other">Other</option>
							   <option value="None">None</option>
	                        </select>
	                    </div>

						<div class="shosurbari-biodata-field">
						<label for="edit-pass">SSC or Equivalent Passing Year<span class="form-required" title="This field is required.">*</span></label>
						<select name="year" required>
		                    <option value=""></option>
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
		                    <input type="text" id="edit-name" name="fname" value="" size="200" maxlength="200" class="form-text required" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Maximum Education Position<span class="form-required" title="This field is required.">*</span></label>
		                    <input type="text" id="edit-name" name="fname" value="" size="200" maxlength="200" class="form-text required" required>
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

<div class="shosurbari-biodata-field">
	<label for="edit-name">Present Address<span class="form-required" title="This field is required.">*</span></label>
	<input type="text" id="edit-name" name="fname" value="" size="100" maxlength="100" class="form-text required" required>
</div>

<div class="shosurbari-biodata-field">
	<label for="edit-name">Permanent Address<span class="form-required" title="This field is required.">*</span></label>
	<input type="text" id="edit-name" name="fname" value="" size="100" maxlength="100" class="form-text required" required>
</div>

<div class="shosurbari-biodata-field">
	<label for="edit-name">Where did you grow up?<span class="form-required" title="This field is required.">*</span></label>
	<input type="text" id="edit-name" name="fname" value="" size="100" maxlength="100" class="form-text required" required>
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
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		    		        <label for="edit-name">Fathers Occupation<span class="form-required" title="This field is required.">*</span></label>
			  		        <input type="text" id="edit-name" name="fatheroccupation" value="" size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Is your Mother alive?<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Mothers Occupation<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="motheroccupation" value="" size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">How many Sisters & Brothers do you have?<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Sisters & Brothers information<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" id="edit-name" name="edudescr" placeholder="Write about you" class="form-text-describe" required></textarea>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Profession of uncles<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" id="edit-name" name="edudescr" placeholder="Write about you" class="form-text-describe" required></textarea>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Family financial status<span class="form-required" title="This field is required.">*</span></label>
	                        <select name="bodytype" required>
							    <option value=""></option>
	                            <option value="Slim">Higher Class</option>
	                            <option value="Fat">Higher Middle Class</option> 
	               		        <option value="Average">Middle Class</option>
								<option value="Average">Lower Middle Class</option>
								<option value="Average">Lower Class</option>  
	                        </select>
			            </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Description of financial condition<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="5" id="edit-name" name="edudescr" placeholder="Write about you" class="form-text-describe" required></textarea>
		                </div>

						<div class="shosurbari-biodata-field">
		    	            <label for="about me">How is your family's religious condition?<span class="form-required" title="This field is required.">*</span></label>
		    	            <textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text-describe" required></textarea>
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
			                    <input type="text" id="edit-name" name="income" value="" size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Will you be able to keep your wife in the veil after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="income" value="" size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Would you like to allow your wife to study after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="income" value="" size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Would you like to allow your wife to do any job after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="income" value="" size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Where will you live with your wife after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="income" value="" size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Profile Created by<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="profileby" required>
								<option value=""></option>
	                            <option value="Self">Self</option>
	                            <option value="Son/Daughter">Son/Daughter</option> 
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
			                    <input type="text" id="edit-name" name="income" value="" size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Are you willing to do any job after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="income" value="" size="100" maxlength="100" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Would you like to continue your studies after marriage?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="income" value="" size="200" maxlength="200" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Are you agree Marriage to student?<span class="form-required" title="This field is required.">*</span></label>
			                    <input type="text" id="edit-name" name="income" value="" size="200" maxlength="200" class="form-text" required>
		                    </div>

							<div class="shosurbari-biodata-field">
		                        <label for="edit-name">Profile Created by<span class="form-required" title="This field is required.">*</span></label>
	                            <select name="profileby" required>
								<option value=""></option>
	                            <option value="Self">Self</option>
	                            <option value="Son/Daughter">Son/Daughter</option> 
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
								<option value=""></option>
						        <option value="Muslim">Muslim</option>
		                        <option value="Hindu">Hindu</option>
		                        <option value="Christian">Christian</option>
		                        <option value="Jain">Budhism</option>
		                        <option value="Sikh">Others</option>
	                            </select>
	                        </div>

					        <div class="shosurbari-biodata-field">
		    	               <label for="about me">How is your religious condition?<span class="form-required" title="This field is required.">*</span></label>
		    	               <textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text-describe" required></textarea>
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
			                <input type="text" id="edit-name" name="edudescr" value="" size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">District<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Marital Status<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		    		        <label for="edit-name">Skin Tones<span class="form-required" title="This field is required.">*</span></label>
			  		        <input type="text" id="edit-name" name="fatheroccupation" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Hight<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Educational Qualification<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="motheroccupation" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Profession<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="200" maxlength="200" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Financial condition<span class="form-required" title="This field is required.">*</span></label>
			                <input type="text" id="edit-name" name="edudescr" value="" size="100" maxlength="100" class="form-text" required>
		                </div>

						<div class="shosurbari-biodata-field">
		                    <label for="edit-name">Expected qualities or attributes of your life partner<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" id="edit-name" name="edudescr" placeholder="Write about you" class="form-text-describe" required></textarea>
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
