


<!DOCTYPE HTML>
<html>
<head>
<title>Expected Life Partner - ShosurBari</title>
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
        <li class="current-page">Update Your Biodata</li>
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
            <h1>Update <span>Biodata</span></h1>
        </div>

	    <form action="editbiodata.php" method="POST">
		<div class="flex-container">











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
