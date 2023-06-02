<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	family_update($id);
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

		<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
			-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
			--                S  T  A  R  T                  --
			--     Family Information  / sb-biodata-5        --
			--                                               --
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
			-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
			<?php
				include("includes/dbconn.php");

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
				$family_religious_condition=$row['family_religious_condition'];
				}
				}
			?>

			<!--Fieldsets start-->
			<fieldset>
				<div class="sb-biodata" id="familyInfo">
					<div class="sb-biodata-field">
						<h2>পারিবারিক ও সামাজিক তথ্য</h2>
					</div>

					<div class="sb-biodata-option">
						<div class="shosurbari-biodata-field">
							<label>বাবা বেঁচে আছেন?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text"  name="father_alive" value="<?php echo $father_alive; ?>" size="100" maxlength="100" class="form-text" required>
						</div>

						<div class="shosurbari-biodata-field">
							<label>বাবার পেশা<span class="form-required" title="This field is required.">*</span></label>
							<input type="text"  name="fatheroccupation" value="<?php echo $fatheroccupation; ?>" size="200" maxlength="200" class="form-text" required>
						</div>

						<div class="shosurbari-biodata-field">
							<label>মা বেঁচে আছেন?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text"  name="mother_alive"  value="<?php echo $mother_alive; ?>"  size="100" maxlength="100" class="form-text" required>
						</div>

						<div class="shosurbari-biodata-field">
							<label>মায়ের পেশা<span class="form-required" title="This field is required.">*</span></label>
							<input type="text"  name="motheroccupation"  value="<?php echo $motheroccupation; ?>"  size="200" maxlength="200" class="form-text" required>
						</div>

						<div class="shosurbari-biodata-field">
							<label>ভাইবোন কয়জন<span class="form-required" title="This field is required.">*</span></label>
							<input type="text"  name="brosis_number"  value="<?php echo $brosis_number; ?>"  size="100" maxlength="100" class="form-text" required>
						</div>

						<div class="shosurbari-biodata-field">
							<label>ভাইবোন সম্পর্কিত তথ্য<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" name="brosis_info"   placeholder="Discribe Your Sisters & Brothers information" class="form-text-describe" required><?php echo $brosis_info; ?></textarea>
						</div>

						<div class="shosurbari-biodata-field">
							<label>মামা/চাচাদের পেশা<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="8" name="uncle_profession"  placeholder="Describe Profession of Your Uncles" class="form-text-describe" required><?php echo $uncle_profession; ?></textarea>
						</div>

						<div class="shosurbari-biodata-field">
							<label>পারিবারিক শ্রেণী<span class="form-required" title="This field is required.">*</span></label>
							<select name="family_class" required>
								<option hidden selected><?php echo $family_class; ?></option>
								<option value="উচ্চ শ্রেণী">উচ্চ শ্রেণী</option>
								<option value="উচ্চ মধ্যম শ্রেণী">উচ্চ মধ্যম শ্রেণী</option> 
								<option value="মধ্যম শ্রেণী">মধ্যম শ্রেণী</option>
								<option value="নিম্নমধ্যম শ্রেণী">নিম্নমধ্যম শ্রেণী</option>
								<option value="নিম্ন শ্রেণী">নিম্ন শ্রেণী</option>  
							</select>
						</div>

						<div class="shosurbari-biodata-field">
							<label>পরিবারের অর্থনৈতিক অবস্থা কেমন?<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="5" name="financial_condition" placeholder="Describe Your Financial Condition" class="form-text-describe" required><?php echo $financial_condition; ?></textarea>
						</div>

						<div class="shosurbari-biodata-field">
							<label>পারিবারিক ধর্মীয় ও সামাজিক অবস্থা কেমন?<span class="form-required" title="This field is required.">*</span></label>
							<textarea rows="5" name="family_religious_condition"  placeholder="Describe Your Family's Religious Condition" class="form-text-describe" required><?php echo $family_religious_condition; ?></textarea>
						</div>
					</div>
				</div>

			    <input type="submit"  name="op" class="action-button" id="edit-submit" value="Submit Biodata">
			</fieldset>
			<!--Fieldsets end-->
			<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
			-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
			--                   E   N   D                   --
			--     Family Information  / sb-biodata-5        --
			--                                               --
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
