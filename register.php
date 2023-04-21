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


<!-- Country Code with Flag for Number input field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />



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
    <div class="sb-register-login">

		<div class="sb-biodata-field">
		    <h2>Create New <span>Account</span></h2>
        </div>

		<div class="form-group">
		    <!--  <label for="edit-name">Full Name<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="text" id="fname" placeholder="Full Name*" name="fname" value="" size="60" maxlength="60" class="form-text required">
			  <span id="fname_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		      <!-- <label for="edit-name">Username<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="text" id="uname" placeholder="Username*" name="uname" value="" size="60" maxlength="60" class="form-text required">
			  <span id="uname_error" style="color:red;  font-size:13px;"></span>
			</div>


			<div class="form-group">
		      <!-- <label for="edit-name">Emails<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="text" id="email" placeholder="Email*" name="email" value="" size="60" maxlength="60" class="form-text required">
			  <span id="email_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		     <!--  <label for="edit-name">Phone Number<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="pnumber" id="pnumber" placeholder="Phone Number*" name="pnumber" value="" size="60" minlength="10" maxlength="15" class="form-text required">
			  <span id="pnumber_error" style="color:red; font-size:13px;"></span>
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
		      <input type="password" id="pass_1" placeholder="New Password*" name="pass_1" size="60" maxlength="128" class="form-text required">
			  <span class="show-password" style="color:#00bbff;  font-size:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
			  <span  id="pass_1_error" style="color:red; font-size:13px;"></span>
			</div>

			<div class="form-group">
		      <!-- <label for="edit-pass">Confirm Password<span class="form-required" title="This field is required.">*</span></label> -->
		      <input type="password" id="pass_2" placeholder="Confirm Password*" name="pass_2" size="60" maxlength="128" class="form-text required">
			  <span class="show-password" style="color:#00bbff;  font-size:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
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
  .sb-profile-gender{
    text-overflow: ellipsis;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    color: #ff0080;
    border-radius: 4px;
  }
    .gender-select-reg{
        padding: 00px 10px;
        display: flex;
	    	align-items: center;
		    border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        background: #4cafe809;
    }

    .gender-select-reg .gender-option{
        margin-top: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
    margin-right: -50px;
    width: 78%;
}

    .gender-select-reg .gender-option input[type="radio"]{
		display: none;
    }

    .gender-select-reg .gender-option label{
        display: inline-block;
        padding: 3px;
        transition: all 0.3s;
		    font-weight: 500;
        cursor: pointer;
        margin-top: 4px;
        margin-bottom: 4px;
        margin-left: -27px;
        margin-right: 19px;
		    border: 1px solid #ccc;
		    border-radius: 3px;
        background: white;
    }
    
    .gender-select-reg .gender-option label i{
        font-size: 17px;
    }
    .gender-select-reg .gender-option input[type="radio"]:checked + label{
        background: #00bbff;
        border: 1px solid #ccc;
        color: #fff;
		border-radius: 3px
    }
</style>
<div class="gender-select-reg">
<label class="sb-profile-gender" for="sex">Whos Biodata?<span class="form-required" title="This field is required.">*</span></label>
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



<script>
  		// Form Input field when error the show border red and scroll up start
      function validateForm(){
      var fname = document.forms["myForm"]["fname"].value;
      var uname = document.forms["myForm"]["uname"].value;
      var email = document.forms["myForm"]["email"].value;
      var pnumber = document.forms["myForm"]["pnumber"].value;
      var pass_1 = document.forms["myForm"]["pass_1"].value;
      var pass_2 = document.forms["myForm"]["pass_2"].value;


    
      //Full Name validation
      if (fname == "") {
        document.getElementById('fname').style.borderColor = "red";
        document.getElementById('fname').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('fname_error').innerHTML = "Please enter your Full Name";
        return false;
      }else{
        document.getElementById('fname').style.borderColor = "green";
        document.getElementById('fname_error').innerHTML = "";
      }
      

      //Username validation
      if (uname == "") {
        document.getElementById('uname').style.borderColor = "red";
        document.getElementById('uname').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('uname_error').innerHTML = "Please enter your Username";
        return false;
      }else if (! /^[A-Za-z0-9]+$/.test(uname)){
        document.getElementById('uname').style.borderColor = "red";
        document.getElementById('uname_error').innerHTML = "Please enter only Letters and Numbers. Can't used any symbol or space.";
        document.getElementById('uname').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('uname').style.borderColor = "green";
        document.getElementById('uname_error').innerHTML = "";
      }

    
      //Email validation
      if (email == "") {
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('email_error').innerHTML = "Please enter your Email";
        return false;
      }else if(! /^[a-zA-Z0-9._-]+@(gmail|outlook|hotmail|yahoo).com$/.test(email)){
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('email_error').innerHTML = "Please enter a valid Email. Ex: (@gmail / @outlook / @hotmail / @yahoo).com";
        document.getElementById('email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('email').style.borderColor = "green";
        document.getElementById('email_error').innerHTML = "";
      }
      

      //Phone number validation
      if (pnumber == "") {
        document.getElementById('pnumber').style.borderColor = "red";
        document.getElementById('pnumber').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('pnumber_error').innerHTML = "Please enter your Phone Number";
        return false;
      }else if(pnumber.length < 10 || pnumber.length > 14){
        document.getElementById('pnumber').style.borderColor = "red";
        document.getElementById('pnumber_error').innerHTML = "Phone number must be between 10 and 14 characters";
        document.getElementById('pnumber').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('pnumber').style.borderColor = "green";
        document.getElementById('pnumber_error').innerHTML = "";
      }

      
      //Password validation
      if (pass_1 == "") {
        document.getElementById('pass_1').style.borderColor = "red";
        document.getElementById('pass_1').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('pass_1_error').innerHTML = "Please enter your new Password";
        return false;
      }else{
        document.getElementById('pass_1').style.borderColor = "green";
        document.getElementById('pass_1_error').innerHTML = "";
      }

      
      //Confirm Password validation
      if (pass_2 == "") {
        document.getElementById('pass_2').style.borderColor = "red";
        document.getElementById('pass_2').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('pass_2_error').innerHTML = "Please enter your Confirm Password";
        return false;
      }else if(pass_2 != pass_1){
        document.getElementById('pass_2').style.borderColor = "red";
        document.getElementById('pass_2_error').innerHTML = "Password do not match";
        document.getElementById('pass_2').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('pass_2').style.borderColor = "green";
        document.getElementById('pass_2_error').innerHTML = "";
      }

    }
		// Form Input field when error the show border red and scroll up start

  </script>
