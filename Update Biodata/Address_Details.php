


<!DOCTYPE HTML>
<html>
<head>
<title>Address Details - ShosurBari</title>
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
	                    <select name="permanent_division" class="selectsearch" >
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
						<select name="permanent_address" class="selectsearch" >

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
	<input type="text" id="edit-name" name="present_address" value="<?php echo $present_address; ?>" size="100" maxlength="100" class="form-text required" >
</div>

<div class="shosurbari-biodata-field">
	<label for="edit-name">Where did you grow up?<span class="form-required" title="This field is required.">*</span></label>
	<input type="text" id="edit-name" name="childhood" value="<?php echo $childhood; ?>" size="100" maxlength="100" class="form-text required" >
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
