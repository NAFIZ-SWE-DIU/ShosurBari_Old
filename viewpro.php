<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
error_reporting(0);
 // if(isloggedin()){ 
 //do nothing stay here
// } else{
 //  header("location:login.php");
//}
//Checking start
/*
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $url = "BiodataNumber=".$id;
    header('Location: '.$url);
    exit();
} */
//Checking end

$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;


//getting profile details from db
$sql = "SELECT * FROM 1bd_personal_physical  WHERE user_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);
//end of getting profile detils


	$pic1="";

//getting image filenames from db
$sql2="SELECT * FROM photos WHERE user_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	if($row2){
	$pic1=$row2['pic1'];
	}
}
}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}
?>







<!DOCTYPE HTML>
<html>
<head>
<title>View Profile - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
                <li class="current-page"><h4>View Profile</h4></li>
            </ul>
        </div>
    </div>
</div>






<div class="UserProfile">  <!-- 1 UserProfile div -->


  <div class="profile-header">  <!-- a profile-header div -->

        <div class="profile-img">
			<img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
		</div>


    <div class="profile-nav-info">

		<?php if (!empty($profileid)) { ?>
			<h3>Biodata No : <span><?php echo $profileid;?></span></h3>
		<?php } ?>


        <?php
 $id=$_GET['id'];
 $profileid=$id;
 
 //getting profile details from db
$sql = "SELECT * FROM 4bd_address_details  WHERE user_id = $id";
$result = mysqlexec($sql);
$row=mysqli_fetch_assoc($result);

//Biodata 4
if($row){
$present_address=$row['present_address'];
}
?>
      <div class="address">
      <?php if (!empty ($present_address)) { ?>
		<td class="day_value closed"> Present Address : <?php echo $present_address;?> </td>
		<?php } ?>
      </div>
    </div>


  </div> <!-- a profile-header div -->




  <div class="main-bd">  <!-- 2 main-bd div -->

    <div class="left-side">
      <div class="profile-side">



<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--               S  T  A  R  T                   --
--   Heading Font Section  / SB Short Biodata    --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--   SB Short Biodata / 1bd_personal_physical    --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<div class="user-bio">

<?php

 $id=$_GET['id'];
 $profileid=$id;
 
 //getting profile details from db
$sql = "SELECT * FROM 1bd_personal_physical  WHERE user_id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);

//Biodata 1
if($row){
$biodatagender=$row['biodatagender'];
}
if($row){
$dob=$row['dateofbirth'];
}
if($row){
$Skin_tones = $row['Skin_tones'];
}
if($row){
$height=$row['height'];
}
if($row){
$weight=$row['weight'];	
}
}
?>

<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--   SB Short Biodata / 2bd_personal_lifestyle   --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<?php
 $id=$_GET['id'];
 $profileid=$id;
 
//getting profile details from db
$sql = "SELECT * FROM 2bd_personal_lifestyle  WHERE user_id = $id";
$result = mysqlexec($sql);
$row=mysqli_fetch_assoc($result);

//Biodata 2
if($row){
$maritalstatus=$row['maritalstatus'];
}
if($row){
$occupation = $row['occupation'];
}
?>

<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--     SB Short Biodata / 4bd_address_details    --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<?php
 $id=$_GET['id'];
 $profileid=$id;
 
 //getting profile details from db
$sql = "SELECT * FROM 4bd_address_details  WHERE user_id = $id";
$result = mysqlexec($sql);
$row=mysqli_fetch_assoc($result);

//Biodata 4
if($row){
$permanent_address=$row['permanent_address'];
}
?>

<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--    SB Short Biodata / 8bd_religion_details    --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<?php
 $id=$_GET['id'];
 $profileid=$id;
 
 //getting profile details from db
$sql = "SELECT * FROM 8bd_religion_details  WHERE user_id = $id";
$result = mysqlexec($sql);
$row=mysqli_fetch_assoc($result);

//Biodata 8
if($row){
$religion=$row['religion'];
}
?>



		<div class="biodatanumber_head">
			<table class="short_biodata_value">
		        	
                <tbody>

		        		<tr class="opened">
							<td class="day_label">Biodata Type</td>
							<?php if (!empty($biodatagender)) { ?>
							<td class="day_value"><?php echo $biodatagender;?></td>
						    <?php } ?>
						</tr>
							
						<tr class="opened">
							<td class="day_label">DOB</td>
							<?php if (!empty($dob)) { ?>
							<td class="day_value"><?php echo $dob; ?></td>
							<?php } ?>
						</tr>

					  	<tr class="opened">
							<td class="day_label">Religion</td>
							<?php if (!empty($religion)) { ?>
							<td class="day_value"><?php echo $religion;?></td>
							<?php } ?>
						</tr>

					    <tr class="opened">
							<td class="day_label">Marital Status</td>
							<?php if (!empty($maritalstatus)) { ?>
							<td class="day_value"><?php echo $maritalstatus;?></td>
							<?php } ?>
						</tr>

					    <tr class="opened">
							<td class="day_label">Skin Tones</td>
							<?php if (!empty($Skin_tones)) { ?>
							<td class="day_value"><?php echo $Skin_tones;?></td>
							<?php } ?>
						</tr>

					    <tr class="closed">
							<td class="day_label">Height</td>
							<?php if (!empty ($height)) { ?>
							<td class="day_value closed"><?php echo $height;?></td>
							<?php } ?>

						</tr>

					    <tr class="closed">
							<td class="day_label">Weight</td>
							<?php if (!empty ($weight)) { ?>
							<td class="day_value closed"><?php echo $weight;?></td>
							<?php } ?>
						</tr>

						<tr class="closed">
							<td class="day_label">Occupation</td>
							<?php if (!empty ($occupation)) { ?>
							<td class="day_value closed"><?php echo $occupation;?></td>
							<?php } ?>
						</tr>

						<tr class="closed">
							<td class="day_label">Permanent Address</td>
							<?php if (!empty ($permanent_address)) { ?>
							<td class="day_value closed"><?php echo $permanent_address;?></td>
							<?php } ?>
						</tr>

				</tbody>
			</table>
		</div>

 </div>
<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--   Heading Font Section  / SB Short Biodata    --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->





        <div class="profile-btn">
                <a href="contactbiodata.php" target="_blank"> <button class="chatbtn" id="chatBtn"><i class="fa fa-phone"></i> Contact</button></a>
                <button class="createbtn clipboard" id="Create-post"><i class="fa fa-copy"></i>Copy Link</button>
        </div>

<script>
var $temp = $("<input>");
var $url = $(location).attr('href');
$('.clipboard').on('click', function() {
  $("body").append($temp);
  $temp.val($url).select();
  document.execCommand("copy");
  $temp.remove();
  $("p").text("Successfully Copied!");
})
</script>


</div>
</div>















    <div class="right-side"> <!-- 3 right-side div -->



      <div class="nav">
        <ul>
          <li onclick="tabs(0)" class="user-post active">Posts</li>
          <li onclick="tabs(1)" class="user-review">Reviews</li>
          <li onclick="tabs(2)" class="user-setting"> Settings</li>
        </ul>
      </div>


      <div class="profile-body"> <!-- 4 profile-body div -->

        <div class="profile-posts tab">
          <h1>Your Post</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quia sunt itaque ut libero cupiditate ullam qui velit laborum placeat doloribus, non tempore nisi ratione error rem minima ducimus. Accusamus adipisci quasi at itaque repellat sed
            magni eius magnam repellendus. Quidem inventore repudiandae sunt odit. Aliquid facilis fugiat earum ex officia eveniet, nisi, similique ad ullam repudiandae molestias aspernatur qui autem, nam? Cupiditate ut quasi iste, eos perspiciatis maiores
            molestiae.</p>
        </div>

        <div class="profile-reviews tab">
          <h1>User reviews</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam pariatur officia, aperiam quidem quasi, tenetur molestiae. Architecto mollitia laborum possimus iste esse. Perferendis tempora consectetur, quae qui nihil voluptas. Maiores debitis
            repellendus excepturi quisquam temporibus quam nobis voluptatem, reiciendis distinctio deserunt vitae! Maxime provident, distinctio animi commodi nemo, eveniet fugit porro quos nesciunt quidem a, corporis nisi dolorum minus sit eaque error
            sequi ullam. Quidem ut fugiat, praesentium velit aliquam!</p>
        </div>

        <div class="profile-settings tab">
          <div class="account-setting">
            <h1>Acount Setting</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit omnis eaque, expedita nostrum, facere libero provident laudantium. Quis, hic doloribus! Laboriosam nemo tempora praesentium. Culpa quo velit omnis, debitis maxime, sequi
              animi dolores commodi odio placeat, magnam, cupiditate facilis impedit veniam? Soluta aliquam excepturi illum natus adipisci ipsum quo, voluptatem, nemo, commodi, molestiae doloribus magni et. Cum, saepe enim quam voluptatum vel debitis
              nihil, recusandae, omnis officiis tenetur, ullam rerum.</p>
          </div>
        </div>

      </div> <!-- 4 profile-body div -->
    </div> <!-- 3 right-side div -->


  </div> <!-- 2 main-bd div -->
</div> <!-- 1 UserProfile div -->










<style>
@import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");
@import url("https://fonts.googleapis.com/css?family=Bree+Serif&display=swap");

.UserProfile{
    width: 100%;
    padding-left: 5px;
    padding-right: 5px;
}

.profile-header {
  background: #fff;
  width: 100%;
  display: flex;
  height: 190px;
  position: relative;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.2);
  margin-top: -25px;
}

.profile-img {
  float: left;
  width: 340px;
  height: 200px;
}

.profile-img img {
  border-radius: 4%;
  height: 175px;
  width: 175px;
  border: 5px solid #fff;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  position: absolute;
  left: 70px;
  top: 15px;
  z-index: 5;
  background: #fff;
}

.profile-nav-info {
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-top: 60px;
}

.profile-nav-info h3 {
  font-variant: small-caps;
  font-size: 2rem;
  font-family: sans-serif;
  font-weight: bold;
}

.profile-nav-info .address {
  display: flex;
  font-weight: bold;
  color: #777;
}

.profile-nav-info .address p {
  margin-right: 5px;
}

.profile-option {
  width: 40px;
  height: 40px;
  position: absolute;
  right: 50px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
  outline: none;
  background: #e40046;
}

.profile-option:hover {
  background: #fff;
  border: 1px solid #e40046;
}
.profile-option:hover .notification i {
  color: #e40046;
}

.profile-option:hover span {
  background: #e40046;
}

.profile-option .notification i {
  color: #fff;
  font-size: 1.2rem;
  transition: all 0.5s ease-in-out;
}

.profile-option .notification .alert-message {
  position: absolute;
  top: -5px;
  right: -5px;
  background: #fff;
  color: #e40046;
  border: 1px solid #e40046;
  padding: 5px;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 0.8rem;
  font-weight: bold;
}

.main-bd {
  width: 100%;
  display: flex;
  padding-right: 15px;
}

.profile-side {
  width: 300px;
  background: #fff;
  box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  padding: 40px 10px 10px;
  font-family: "Bree Serif", serif;
  margin-left: 0px;
  z-index: 99;
}

.profile-side p {
  margin-bottom: 7px;
  color: #333;
  font-size: 14px;
}

.profile-side p i {
  color: #e40046;
  margin-right: 10px;
}

.mobile-no i {
  transform: rotateY(180deg);
  color: #e40046;
}






    .clipboard {
        border: 0;
        padding: 6px;
        border-radius: 2px;
        background: white;
        cursor: pointer;
        color: #ff0080;
        font-size: 13px;
        position: relative;
        top: 0px;
        left: 0px;
        transition: all .2s ease;
        white-space: nowrap;
    }


.profile-btn {
  display: flex;
  white-space: nowrap;
  width: 100%;
  margin-left: 0px;
}


button.chatbtn,
button.createbtn {
  border: 0;
  padding: 10px;
  width: auto;
  border-radius: 3px;
  background: #e40046;
  color: #fff;
  font-family: "Bree Serif";
  font-size: 1rem;
  margin: 2px 15px;
  cursor: pointer;
  outline: none;
  margin-top: 20px;
  margin-bottom: 10px;
  transition:  0.3s ease-in-out;
  box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.3);
}

button.chatbtn:hover,
button.createbtn:hover {
  background: rgba(288, 0, 70, 0.9);
}

button.chatbtn i,
button.createbtn i {
  margin-right: 5px;
}









.user-rating {
  display: flex;
}

.user-rating h3 {
  font-size: 2.5rem;
  font-weight: 200;
  margin-right: 5px;
  letter-spacing: 1px;
  color: #666;
}

.user-rating .no-of-user-rate {
  font-size: 0.9rem;
}

.rate {
  padding-top: 6px;
}

.rate i {
  font-size: 0.9rem;
  color: rgba(228, 0, 70, 1);
}

.nav {
  width: 100%;
  z-index: -1;
}



.profile-body {
  width: 100%;
  z-index: -1;
}

.tab {
  display: none;
}

.tab {
  padding: 20px;
  width: 100%;
  text-align: center;
}

@media (max-width: 1100px) {
  .profile-side {
    width: 250px;
    padding: 90px 15px 20px;
  }

  .profile-img img {
    height: 200px;
    width: 200px;
    left: 50px;
    top: 50px;
  }
}

@media (max-width: 900px) {

  .profile-header {
    display: flex;
    height: 100%;
    flex-direction: column;
    text-align: center;
    padding-bottom: 20px;
  }

  .profile-img {
    float: left;
    width: 100%;
    height: 200px;
  }

  .profile-img img {
    position: relative;
    height: 200px;
    width: 200px;
    left: 0px;
  }

  .profile-nav-info {
    text-align: center;
  }

  .profile-option {
    right: 20px;
    top: 75%;
    transform: translateY(50%);
  }

  .main-bd {
    flex-direction: column;
    padding-right: 0;
  }

  .profile-side {
    width: 100%;
    text-align: center;
    padding: 20px;
    margin: 5px 0;
  }

  .profile-nav-info .address {
    justify-content: center;
  }

  .user-rating {
    justify-content: center;
  }
}

@media (max-width: 400px) {

  .profile-header h3 {
  }

  .profile-option {
    width: 30px;
    height: 30px;
    position: absolute;
    right: 15px;
    top: 83%;
  }

  .profile-option .notification .alert-message {
    top: -3px;
    right: -4px;
    padding: 4px;
    height: 15px;
    width: 15px;
    font-size: 0.7rem;
  }

  .profile-nav-info h3 {
    font-size: 1.9rem;
  }

  .profile-nav-info .address p,
  .profile-nav-info .address span {
    font-size: 0.7rem;
  }
}
#see-more-bio,
#see-less-bio {
  color: blue;
  cursor: pointer;
  text-transform: lowercase;
}
.tab h1 {
  font-family: "Bree Serif", sans-serif;
  display: flex;
  justify-content: center;
  margin: 20px auto;
}
</style>








<script>
    $(".nav ul li").click(function() {
  $(this)
    .addClass("active")
    .siblings()
    .removeClass("active");
});

const tabBtn = document.querySelectorAll(".nav ul li");
const tab = document.querySelectorAll(".tab");

function tabs(panelIndex) {
  tab.forEach(function(node) {
    node.style.display = "none";
  });
  tab[panelIndex].style.display = "block";
}
tabs(0);

let bio = document.querySelector(".bio");
const bioMore = document.querySelector("#see-more-bio");
const bioLength = bio.innerText.length;

function bioText() {
  bio.oldText = bio.innerText;

  bio.innerText = bio.innerText.substring(0, 100) + "...";
  bio.innerHTML += `<span onclick='addLength()' id='see-more-bio'>See More</span>`;
}
//        console.log(bio.innerText)

bioText();

function addLength() {
  bio.innerText = bio.oldText;
  bio.innerHTML +=
    "&nbsp;" + `<span onclick='bioText()' id='see-less-bio'>See Less</span>`;
  document.getElementById("see-less-bio").addEventListener("click", () => {
    document.getElementById("see-less-bio").style.display = "none";
  });
}
if (document.querySelector(".alert-message").innerText > 9) {
  document.querySelector(".alert-message").style.fontSize = ".7rem";
}

    </script>





<?php include_once("footer.php");?>
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
