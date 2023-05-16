<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
error_reporting(0);
require_once("includes/dbconn.php");
if (!isset($_SESSION['id'])) {
  // Redirect the user to the login page or display an error message
  header("location: login.php");
  exit;
}

// Get the user ID from the session
$userId = $_SESSION['id'];

// Retrieve the user's account status from the database
$statusSql = "SELECT deactivated FROM users WHERE id = $userId";
$result = mysqli_query($conn, $statusSql);
$row = mysqli_fetch_assoc($result);
$deactivated = $row['deactivated'];
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
          include("includes/dbconn.php");
          //getting profile details from db
          $sql="SELECT * FROM users WHERE id = $id";
          $result = mysqlexec($sql);

          if($result){
          $row=mysqli_fetch_assoc($result);
          if($row){
          $username=$row['username'];
          }
          }
        ?>

        <div class="shosurbari-userhome-status">
          <h3><?php echo "Welcome: $username"; ?></h3>

          <!-- Display the account status -->
          <h4 >Account Status:
            <?php if ($deactivated == 0) {
              echo '<span style="color: green;">Active</span>';
              } else {
              echo '<span style="color: red;">Deactivated</span>';
              }
            ?>
          </h4>

          <form action="deactivate_account.php" method="post">
            <?php if ($deactivated == 1) { ?>
              <button type="submit" name="action" value="activate">Activate Account</button>
            <?php } else { ?>
              <button type="submit" name="action" value="deactivate">Deactivate Account</button>
            <?php } ?>
          </form>
        </div>

      </div>
    </div>
  </div>


  <div class="navigationpro" style="background-color: #fff;">
    <div class="collapse_userprofile navbar-collapseprofile" id="bs-megadropdown-tabs">
      <ul class="nav navbar-nav nav_1">
        <li><a href="view_profile.php?id=<?php echo $id;?>">View Profile</a></li>
        <li><a href="editbiodata.php?id=<?php echo $id;?>">Post Biodata</a></li>
        <li><a href="updateaccount.php?id=<?php echo $id;?>">Update Account</a></li>
        <li><a href="search.php">Search Biodata</a></li>
      </ul>
    </div>
  </div>


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
