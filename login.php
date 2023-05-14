<?php include_once("functions.php");?>
<?php require_once('auth/auth.php');?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login - ShosurBari</title>
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
        <li class="current-page"><h4>Login</h4></li>
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
	
    <form action="auth/auth.php?user=1" method="post" name="SbLogForm" onsubmit="return SbLogineForm()">
		<div class="flex-container">
    <div class="sb-register-login">

		  <div class="sb-biodata-field">
		    <h2>Login Your <span>Account</span></h2>
      </div>

			<div class="form-group">
      <!--  <label for="edit-name">Email or Username <span class="form-required" title="This field is required.">*</span></label> -->
      <input type="text" id="username_email" placeholder="Your Email or Username" name="username" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" size="60" maxlength="60" class="form-text required">
      <span id="uname_email_error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
      </div>


			<div class="form-group">
       <!-- <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label> -->
       <input type="password" id="sb_log_pass" placeholder="Your Password" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" size="60" maxlength="128" class="form-text required">
        <span class="show-password" style="color:#0aa4ca;  font-size:18px; top: 0px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
        <span id="password_error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>

      </div>

			<div class="remember-forgot">
      <label><input type="checkbox" id="edit-remember" name="remember" value="1" <?php if(isset($_COOKIE['username'])) { echo "checked"; } ?>> Remember me</label>
        <a href="forgot_password.php">Forgot password?</a>
     </div>





     <script>
  		// Form Input field when error the show border red and scroll up start
      function SbLogineForm(){
      var username_email = document.forms["SbLogForm"]["username_email"].value;
      var sb_log_pass = document.forms["SbLogForm"]["sb_log_pass"].value;


    
      //Full Name validation
      if (username_email == "") {
        document.getElementById('username_email').style.borderColor = "red";
        document.getElementById('username_email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('uname_email_error');
        errorDiv.innerHTML = "Please Enter Your Username or Email !";
        errorDiv.style.display = 'block';
        errorDiv.classList.add('fade-in');

        // Change color multiple times
        var colors = ['green', 'blue', 'red'];
        var colorIndex = 0;
        setInterval(function() {
          errorDiv.style.color = colors[colorIndex];
          colorIndex = (colorIndex + 1) % colors.length;
        }, 500);

        return false;
      }else{
        document.getElementById('username_email').style.borderColor = "green";
        document.getElementById('uname_email_error').innerHTML = "";
      }
      




            //Password validation
            if (sb_log_pass == "") {
        document.getElementById('sb_log_pass').style.borderColor = "red";
        document.getElementById('sb_log_pass').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('password_error');
        errorDiv.innerHTML = "Please Enter Your Password !";
        errorDiv.style.display = 'block';
        errorDiv.classList.add('fade-in');

        // Change color multiple times
        var colors = ['green', 'blue', 'red'];
        var colorIndex = 0;
        setInterval(function() {
          errorDiv.style.color = colors[colorIndex];
          colorIndex = (colorIndex + 1) % colors.length;
        }, 500);

        return false;
      }else{
        document.getElementById('sb_log_pass').style.borderColor = "green";
        document.getElementById('password_error').innerHTML = "";
      }


    }
    </script>



      <style>
        
.remember-forgot{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
  margin-top: -10px;
}

.remember-forgot label {
  margin-right: 10px;
  white-space: nowrap;
  font-weight: 500;
}

.remember-forgot a {
  font-size: 14px;
  white-space: nowrap;
  color: #0aa4ca;
}
  </style>

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
      <button  type="submit" id="edit-submit" name="op"  class="btn_2 submit"  > <span> </span> Login Your Account</button>
    </div>






		<div class="or">
		    <p><span class="sb-or">OR</span></p>
        </div>

	  	<div class="form-actions">
			<p>Don't have an account?</p>
			<a class="btn_5 submit" href="register.php">Create New Account</a>
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
