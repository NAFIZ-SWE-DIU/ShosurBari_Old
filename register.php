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
        <li class="current-page">Register</li>
     </ul>
   </div>






   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">

	  	    <div class="form-group">
		      <label for="edit-name">Full Name<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>

			<div class="form-group">
		      <label for="edit-name">Username<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="uname" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>

			<div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Gender<span class="form-required" title="This field is required.">*</span></label>
                <div class="col-sm-5">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="gender" value="male" required> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="gender" value="female"> Female
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>

			 <div class="form-group">
		      <label for="edit-name">Email<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>

			<div class="form-group">
		      <label for="edit-name">Phone Number<span class="form-required" title="This field is required.">*</span></label>
		      <input type="number" id="edit-number" name="pnumber" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>

		    <div class="form-group">
		      <label for="edit-pass">Password<span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass_1" size="60" maxlength="128" class="form-text required" required>
		    </div>

			<div class="form-group">
		      <label for="edit-pass">Confirm Password<span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass_2" size="60" maxlength="128" class="form-text required" required>
		    </div>
			  
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Creat an account" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	
