

<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
error_reporting(0);
$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>User Home - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" /><!-- eye icon password show -->
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
        <li class="current-page"><h4>User Home</h4></li>
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







	<style type="text/css">
		form {
			width: 500px;
			margin: 0 auto;
			padding: 10px;
			border: 1px solid #ccc;
			background: #f0f0f0;
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 5px;
			margin: 5px 0;
			border: 1px solid #ccc;
			background: #fff;
		}
		input[type="submit"] {
			width: 100%;
			padding: 5px;
			margin: 5px 0;
			background: #2c3e50;
			border: 1px solid #ccc;
			color: #fff;
			cursor: pointer;
		}
	</style>





<?php
include("includes/dbconn.php");

//$id=$_GET['id'];
//bd_religion_details_8($id);



//getting profile details from db
$sql="SELECT * FROM users WHERE id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
if($row){
$username=$row['username'];
}
if($row){
$email=$row['email'];
}
if($row){
    $password=$row['password'];
}
}
	//echo $religion.' '.$yourreligion_condition;
?>
<form action="" method="post" enctype="multipart/form-data">
	<h2>Update Account</h2>

	<label>Login Username</label>
	<input type="text" id="edit-name" name="username" class="form-text" value="<?php echo $username; ?>" />
	
	<label>Current Password</label>
	<input type="password" id="edit-pass" name="password" value="<?php echo $password; ?>" class="form-text" />
    <span class="show-password" style="color:#02a7e6;  font-size:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i> Show Password</span> 

	
	<label>New Password</label>
	<input type="password" name="pass_1" class="form-text" />
    <span class="show-password" style="color:#02a7e6;  font-size:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i> Show Password</span> 

	
	<label>Confirm Password</label>
	<input type="password" name="pass_2" class="form-text" />
    <span class="show-password" style="color:#02a7e6;  font-size:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i> Show Password</span> 

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
	
	<label>Email Address</label>
	<input type="text" name="email" class="form-text" value="<?php echo $email; ?>" />
	
	<label>Profile Photo</label>
	<input type="file" name="profile_photo" value="<?php echo $pic1; ?>" class="form-text" />
	<input type="submit" name="delete_photo" value="Delete Photo" class="form-text" />
	
	<input type="submit" name="update_account" value="Update Account" class="btn_2 submit" />
</form>


<?php 
if(isset($_POST['update_account'])) {
	//update user account
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass_1 = $_POST['pass_1'];
	$pass_2 = $_POST['pass_2'];
	$email = $_POST['email'];
	
	//check if passwords match
	if($new_password != $confirm_password) {
		echo 'Passwords do not match';
	}
	
	//update user details in database
	$query = "UPDATE users SET username = '$username', password = '$pass_1', email = '$email' WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $query);
	if($result) {
		echo 'Account Updated';
	}
	
	//update profile photo in database
	if(isset($_FILES['profile_photo'])) {
		$name = $_FILES['profile_photo']['name'];
		$size = $_FILES['profile_photo']['size'];
		$type = $_FILES['profile_photo']['type'];
		$temp = $_FILES['profile_photo']['tmp_name'];
		$error = $_FILES['profile_photo']['error'];
		
		//check if there is an error
		if($error > 0) {
			echo 'Error uploading photo';
		}
		//check file type
		if($type != 'image/jpeg' && $type != 'image/png') {
			echo 'Invalid file type';
		}
		//check file size
		if($size > 500000) {
			echo 'File size too large';
		}
		
		//upload photo
		$location = 'uploads/';
		move_uploaded_file($temp, $location.$name);
		
		//update photo in database
		$query = "UPDATE photos SET pic1 = '$name' WHERE user_id = '$id'";
		$result = mysqli_query($conn, $query);
		if($result) {
			echo 'Photo Updated';
		}
	}
	
	//delete profile photo from database
	if(isset($_POST['delete_photo'])) {
		$query = "UPDATE photos SET pic1 = '' WHERE user_id = '$id'";
		$result = mysqli_query($conn, $query);
		if($result) {
			echo 'Photo Deleted';
		}
	}
}
?>



















<?php include_once("footer.php")?>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	
