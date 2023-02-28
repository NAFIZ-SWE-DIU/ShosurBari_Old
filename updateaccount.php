

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
		/*	If(isset($_SESSION['username'])) {
Echo "Welcome : " . $_SESSION ['username'];
} else {
Echo "<a href=\”/login.php\”>Login</a>";
} */
?>

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
if($row){
$password=$row['password'];
}
if($row){
$email=$row['email'];
}
 }
?>
<?php echo "Welcome: $username"; ?>
   </div>
  </div>
</div>


<style>
	.update-image img{
	height: 160px;
    width: 160px;
    padding: 2px;
    background: #f5f2f2;
    box-shadow: 0px 2px 7px 6px rgb(0 0 0 / 20%);
    margin-top: -20px;
    margin-left: 0px;
    margin-right: 2px;
    margin-bottom: 20px;
    border-radius: 4px;
	}
.update-image-button{
        font-size: 14px;
        white-space: nowrap;
		display: flex;
}
.deleteimage{
	padding: 10px;
	margin-top:-10px; 
	margin-left: 10px;
}
	</style>





<?php
 $id=$_GET['id'];
 $profileid=$id;
//getting profile details from db
$sql = "SELECT * FROM photos  WHERE user_id = $id";
$result = mysqlexec($sql);
$row=mysqli_fetch_assoc($result);
if($row){
    $pic1=$row['pic1'];
}
?>


<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--   SHOSURBARI BIODATA FORM FIELD ALL SECTION   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<div class="shosurbari-biodata">
	
<form action="" method="POST" enctype="multipart/form-data">
		<div class="flex-container">
    <div class="sb-biodata">

	    <div class="sb-biodata-field">
		    <h2>Update Your <span>Account</span></h2>
        </div>

		<div class="update-image-button">

	      <div class="update-image">
		  <img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
          </div>


		  <div class="deleteimage">
		  <button style=" margin-top:10px;  margin-bottom:10px; padding: 5px 5%; font-size: 13px; font-weight:bold; background: red;"  type="submit" name="delete_photo" value="Delete" class="btn_1">Delete Photo</button>
		  <?php
if(isset($_POST['delete_photo'])){
  // delete photo from profile folder
  $user_id = // get the user id from the session
  $dir = 'profile/'.$user_id.'/';
  unlink($dir.$pic1);
  
  // delete photo from database
  $sql = "DELETE FROM photos WHERE pic1 = '$pic1'";
  $result = mysqli_query($conn, $sql);

  if($result){
    // show green message
    echo "<div style='color:green;'> Photo deleted successfully! Please Refresh the page.</div>";
  }
}
?>





<input style="margin-top:10px;  margin-bottom:10px; width:60%; background:green; color:white; font-weight:bold;" type="file" id="edit-name" name="pic1" value="<?php
if(isset($_POST['submit'])){
    $user_id = $_POST['user_id'];

    if(isset($_FILES['pic1'])){
        //get file details
        $file_name = $_FILES['pic1']['name'];

        //show file name
        echo "File Name: ".$file_name;
    }
}
?>" class="form-file required">


<input style="margin-top:10px;  margin-bottom:10px; padding: 5px 5%; font-size: 13px; font-weight:bold;" type="submit" id="edit-submit" name="op" value="Photo Upload" class="btn_1 submit">
</div>
</div>









		  <div class="form-group">
            <label for="edit-name">Current Password</label>
			  <input type="password" id="edit-pass" name="password" value="<?php echo $password; ?>" class="form-text" />
			  <span class="show-password" style="color:#02a7e6;  font-size:18px; top:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
		</div>
	

	<div class="form-group">
	<label>Change Password</label>
	<input type="password" name="pass_1" class="form-text" />
    <span class="show-password" style="color:#02a7e6;  font-size:18px; top:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
    </div>


    <div class="form-group">
	<label>Confirm Password</label>
	<input type="password" name="pass_2" class="form-text" />
    <span class="show-password" style="color:#02a7e6;  font-size:18px; top:18px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
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
	
	<label>Email Address</label>
	<input type="text" name="email" class="form-text" value="<?php echo $email; ?>" />

		   <div class="form-actions">
        <button type="submit" name="update_account" value="Update Account" class="btn_1 submit"  > <span> </span> Update Your Account</button>
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
