<?php include_once("functions.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login - ShosurBari</title>
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
        <li class="current-page">Login</li>
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
	
    <form action="auth/auth.php?user=1" method="post">
		<div class="flex-container">
    <div class="sb-biodata">

		  <div class="sb-biodata-field">
		    <h2>Login Your <span>Account</span></h2>
      </div>

			<div class="form-group">
        <label for="edit-name">Email or Username <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" placeholder="Enter Your Email or Username" name="username" value="" size="60" maxlength="60" class="form-text required">
	    </div>

			<div class="form-group">
        <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" placeholder="Enter Your Password"  name="password" size="60" maxlength="128" class="form-text required">
	 	  </div>

		  
		   <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">
	    </div>

		<div class="or">
		    <p><span class="sb-or">OR</span></p>
        </div>

	  	<div class="form-actions">
			<p>Don't have an account?</p>
			<a class="btn_2 submit" href="register.php"><span>+ </span> Create New Account</a>
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
