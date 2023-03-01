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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Country Code with Flag for Number input field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />

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
		    <!--  <label for="edit-name">Full Name<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="text" id="fname" placeholder="Full Name" name="fname" value="" size="60" maxlength="60" class="form-text required">
			  <span id="fname_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		      <!-- <label for="edit-name">Username<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="text" id="uname" placeholder="Username" name="uname" value="" size="60" maxlength="60" class="form-text required">
			  <span id="uname_error" style="color:red;  font-size:13px;"></span>
			</div>


			<div class="form-group">
		      <!-- <label for="edit-name">Emails<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="text" id="email" placeholder="Email" name="email" value="" size="60" maxlength="60" class="form-text required">
			  <span id="email_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		     <!--  <label for="edit-name">Phone Number<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="number" id="pnumber" placeholder="Phone Number" name="pnumber" value="" size="60" minlength="10" maxlength="15" class="form-text required">
			  <br><span id="pnumber_error" style="color:red; font-size:13px;"></span>
			</div>

			<script>
    $(document).ready(function() {
      var input = document.querySelector("#pnumber");
      window.intlTelInput(input, {
        separateDialCode: true,
        preferredCountries: ["bd"]
      });
    });
  </script>
		    <div class="form-group">
		      <!-- <label for="edit-pass">Password<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="password" id="pass_1" placeholder="New Password" name="pass_1" size="60" maxlength="128" class="form-text required">
			  <span class="show-password" style="color:#02a7e6;  font-size:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
			  <span  id="pass_1_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		      <!-- <label for="edit-pass">Confirm Password<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="password" id="pass_2" placeholder="Confirm Password" name="pass_2" size="60" maxlength="128" class="form-text required">
			  <span class="show-password" style="color:#02a7e6;  font-size:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
			  <span  id="pass_2_error" style="color:red;  font-size:13px;"></span>
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





    
	<style type="text/css">
    .gender-radio-select{
        padding: 00px 10px;
        display: flex;
		align-items: center;
		border: 2px solid #ccc;
        border-radius: 4px;
        -webkit-border-radius: 4px;    }

    .gender-radio-select .gender-option{
        margin: 10px;
    }
    .gender-radio-select .gender-option input[type="radio"]{
		display: none;
    }
    .gender-radio-select .gender-option label{
        display: inline-block;
        padding: 5px;
        font-size: 14px;
        transition: all 0.3s;
		font-weight: 500;
        cursor: pointer;
		margin-top: 4px;
		border: 1px solid gray;
		border-radius: 3px

    }
    .gender-radio-select .gender-option label i{
        font-size: 17px;
    }
    .gender-radio-select .gender-option input[type="radio"]:checked + label{
        background: #02a7e6;
        border: 1px solid #ccc;
        color: #fff;
		border-radius: 3px
    }
</style>
<div class="gender-radio-select">
<label for="sex">Whos Biodata?<span class="form-required" title="This field is required.">*</span></label>
        <div class="gender-option">
            <input type="radio" name="gender" id="male" value="Male" onclick="genderSelected(this);"/>
            <label for="male"><i class="fa fa-male"></i> Male</label>
			<p id="error_msg" style="color:red; font-size:13px; marging-bottom:100px;"></p>
        </div>
        <div class="gender-option">
            <input type="radio" name="gender" id="female" value="Female" onclick="genderSelected(this);"/>
            <label for="female"><i class="fa fa-female"></i> Female</label><br>
		</div>
    </div>
	<div class="gender-error">
		<span style="display:none;" id="gender-error" class="error"></span>
    </div>
	<style>
		.gender-error{
	display: block;
    margin-top: -15px;
    margin-bottom: 25px;
		}
    .error {
    border: 1px solid red;
	text-align:center;
	margin-top: 13px;
    border-radius: 4px;
    color: red;
    font-size: 13px;    }
    .success {
      border: 1px solid green;
    }
  </style>
	<script>
    const form = document.querySelector('form');
    const maleRadio = document.querySelector('#male');
    const femaleRadio = document.querySelector('#female');
    const genderError = document.querySelector('#gender-error');

    form.addEventListener('submit', (e) => {
      let errors = 0;

      if (!maleRadio.checked && !femaleRadio.checked) {
        genderError.innerHTML = 'Please select Gender Whos Biodata!';
        genderError.style.display = 'block';
        document.querySelectorAll('input[name=gender]').forEach(r => {
          r.classList.add('error');
        });

        errors++;
      }

      if (maleRadio.checked || femaleRadio.checked) {
        genderError.innerHTML = '';
        genderError.style.display = 'none';
        document.querySelectorAll('input[name=gender]').forEach(r => {
          r.classList.remove('error');
        });
      }

      if (errors > 0) {
        e.preventDefault();
        window.scrollTo(0, 0);
      }
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
