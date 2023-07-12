<style>
#message-list-container{
  margin: auto;
  width: 400px;
  border: 2px solid #06b6d4;
  border-radius: 5px;
}

.message-list {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 10px;
  margin-bottom: 10px;
  padding: 0px;
  background: #00bbff22;
}

.message-list:hover{
  background: #0aa4ca;
  color: #fff;
}

.message-content {
  font-size: 14px;
  font-weight: 600;
  width: 100%;
  margin-top: 2px;
}

.message-content a{
  color: black;
}

.message-content a:hover{
  text-decoration: none;
  color: #fff;
}

.profile-img-message {
  margin-right: 10px;
  float: left;
  width: 100%;
  height: 60px;
  margin-left: 0;
  margin-right: 0;
}

.profile-img-message img {
  height: 50px;
  width: 50px;
  object-fit: cover;
  border: 4px solid #fff;
  position: relative;
  top: 5px;
  z-index: 5;
  background: rgb(245, 242, 242);
  border-radius: 50%;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  margin: auto auto auto 20px;
  display: block;
}
</style>

<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php register(); 
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Message | ShosurBari</title>
<link rel="icon" href="images/shosurbari-icon.png" type="image/png">
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

  



  <div id="message-list-container">
  <?php
  // Create a MySQLi connection
  require_once("includes/dbconn.php");

  // Retrieve the current user's ID
  session_start();
  $currentUserId = $_SESSION['id'];

  // Retrieve all message lists from the database
  $sql = "SELECT * FROM messages WHERE outgoing_msg_user_id = $currentUserId OR incoming_msg_user_id = $currentUserId";
  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    // Loop through each message list
    while ($row = mysqli_fetch_assoc($result)) {
      $senderId = $row['outgoing_msg_user_id'];
      $receiverId = $row['incoming_msg_user_id'];

      // Determine the ID of the other user involved in the conversation
      $otherUserId = ($senderId == $currentUserId) ? $receiverId : $senderId;

      // Retrieve the other user's profile details
      $userResult = mysqli_query($conn, "SELECT * FROM users WHERE user_id = $otherUserId");

      if ($userResult && mysqli_num_rows($userResult) > 0) {
        $userRow = mysqli_fetch_assoc($userResult);
        $userPic = "";

        // Retrieve the other user's profile picture from the database
        $userPicResult = mysqli_query($conn, "SELECT * FROM photos WHERE user_id = $otherUserId");

        if ($userPicResult && mysqli_num_rows($userPicResult) > 0) {
          $userPicRow = mysqli_fetch_assoc($userPicResult);
          if ($userPicRow) {
            $userPic = $userPicRow['pic1'];
          }
        }
      }
      ?>

      
      <div class="message-list">
        <div class="profile-img-message">
          <?php if (!empty($userPic)) { ?>
            <a href="view_profile.php?id=<?php echo $otherUserId; ?>">
              <img src="profile/<?php echo $otherUserId; ?>/<?php echo $userPic; ?>" />
            </a>
          <?php } else { ?>
            <a href="view_profile.php?id=<?php echo $otherUserId; ?>">
              <img src="images/shosurbari-male-icon.jpg" />
            </a>
          <?php } ?>
        </div>

        <div class="message-content">
          <a href="view_profile.php?id=<?php echo $otherUserId; ?>"> <p>বায়োডাটা নং : <?php echo $otherUserId; ?></p>

          <p>জেলা : <?php echo $otherUserId; ?></p> </a>
        </div>


        
      </div>
    <?php
    }
  } else {
    echo "<script>alert(\"No message lists found\")</script>";
  }

  // Close the MySQLi connection
  mysqli_close($conn);
  ?>
</div>















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
