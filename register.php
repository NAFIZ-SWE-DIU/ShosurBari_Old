<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php register(); 
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Register - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" /><!-- eye icon password show -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
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
        <li class="current-page"><h4>Register</h4></li>
     </ul>
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
<form action="" method="POST" name="myForm" onsubmit="return validateForm()">
		<div class="flex-container">
    <div class="sb-biodata">

		<div class="sb-biodata-field">
		    <h2>Create New <span>Account</span></h2>
        </div>

		<div class="form-group">
		      <label for="edit-name">Full Name<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="fname" placeholder="Enter Your Full Name" name="fname" value="" size="60" maxlength="60" class="form-text required">
			  <span id="fname_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		      <label for="edit-name">Username<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="uname" placeholder="Enter Valid Username" name="uname" value="" size="60" maxlength="60" class="form-text required">
			  <span id="uname_error" style="color:red;  font-size:13px;"></span>
			</div>

			    <div class="form-group">
				<label for="sex">Gender<span class="form-required" title="This field is required.">*</span></label>
				<select name="gender">
					<option value=""></option>
		            <option value="Male">Male</option>
		            <option value="Female">Female</option>
	            </select>
	            </div>

			<div class="form-group">
		      <label for="edit-name">Emails<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="email" placeholder="Enter Your Email" name="email" value="" size="60" maxlength="60" class="form-text required">
			  <span id="email_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		      <label for="edit-name">Phone Number<span class="form-required" title="This field is required.">*</span></label>
		      <input type="number" id="pnumber" placeholder="Enter Your Phone Number" name="pnumber" value="" size="60" minlength="10" maxlength="15" class="form-text required">
			  <span id="pnumber_error" style="color:red; font-size:13px;"></span>
			</div>

		    <div class="form-group">
		      <label for="edit-pass">Password<span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="pass_1" placeholder="Enter New Password" name="pass_1" size="60" maxlength="128" class="form-text required">
			  <span  id="pass_1_error" class="show-password" style="color:red; font-size:13px;"><i style="color:black;  font-size:18px;" class="fa fa-eye"></i></span>
			</div>

			<div class="form-group">
		      <label for="edit-pass">Confirm Password<span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="pass_2" placeholder="Enter Confirm Password" name="pass_2" size="60" maxlength="128" class="form-text required">
			  <span  id="pass_2_error" class="show-password" style="color:red;  font-size:13px;"><i style="color:black;  font-size:18px;" class="fa fa-eye"></i></span>
			</div>

	<script>
        let showPass = document.querySelectorAll('.show-password');
        showPass.forEach(function(el) {
            el.addEventListener('click', function(){
                let input = this.previousElementSibling;
                if (input.type === "password") {
                    input.type = "text";
                    this.innerHTML = "<i class='fa fa-eye-slash'></i>";
                } else {
                    input.type = "password";
                    this.innerHTML = "<i class='fa fa-eye'></i>";
                }
            });
        });
    </script>


			<div class="form-actions">
			<button  type="submit" id="edit-submit" name="op" class="btn_4 submit"> <span> </span> Create Account</button>
			</div>

			<div class="or">
		    <p><span class="sb-or">OR</span></p>
        </div>

	  	<div class="form-actions">
			<p>Do you have an account?</p>
			<a class="btn_3 submit" href="login.php"> <span> </span> Login Your Account</a>
	    </div>
    </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--        Religion Details / sb-biodata-8        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

    </div>
	</form>
    </div>


<?php include_once("footer.php");?>

</body>
</html>	
