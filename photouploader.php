<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

//calling photo uploader function
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ uploadphoto($id); }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Upload Photos - ShosurBari</title>
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
        <span class="divider">&nbsp;<|>&nbsp;</span>
        <li class="current-page"><h4>Photo Upload</h4></li>
     </ul>
   </div>
   
   


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
    <div class="col-sm-4 row_22">
    <ul class="slides2">
		<img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
	</ul>
    </div>







   <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form action="" method="post" enctype="multipart/form-data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Upload Your one Photo, Use 300 x 250 dimensions. <span class="form-required" title="This field is required.">*</span></label>
	      <input type="file" id="edit-name" name="pic1" value="<?php
if(isset($_POST['submit'])){
    $user_id = $_POST['user_id'];

    if(isset($_FILES['pic1'])){
        //get file details
        $file_name = $_FILES['pic1']['name'];

        //show file name
        echo "File Name: ".$file_name;
    }
}
?>     " class="form-file required">
	    </div>

	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Upload" class="btn_1 submit">
	    </div>


	   </form>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

<?php include_once("footer.php");?>

</body>
</html>	



