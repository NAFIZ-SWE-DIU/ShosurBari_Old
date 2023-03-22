
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
<?php echo "Welcome: $username"; ?>

   </div>
  </div>
</div>

<div class="navigationpro" style="background-color: #fff;"><!-- Innernavigation starts -->
   	
     <div class="collapse_userprofile navbar-collapseprofile" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="view_profile.php?id=<?php echo $id;?>">View Profile</a></li>
            <li><a href="editbiodata.php?id=<?php echo $id;?>">Post Biodata</a></li>
            <li><a href="updateaccount.php?id=<?php echo $id;?>">Update Account</a></li> 


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="search-id.php">Search Biodata Number</a></li>
              </ul>
            </li>
        </ul>
</div>
</div> <!-- End of inner navigation -->


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
