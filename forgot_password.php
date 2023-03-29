<?php include_once("functions.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title>Forgot Password - ShosurBari</title>
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
        <li class="current-page"><h4>Forgot Password </h4></li>
     </ul>
   </div>
</div>
</div>







<div class="shosurbari-biodata">
    <form action="forgot_password.php" method="post">
	<div class="flex-container">
    <div class="sb-biodata">

		    <h2 style="text-align:center; margin-bottom:50px">Reset Password</h2>

	    <div class="form-group">
            <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
	        <input type="text" id="email_or_username" placeholder="Your Email" name="email" value="" size="60" maxlength="60" class="form-text required" required>
        </div>

	    <div class="form-actions">
            <button  type="submit" id="edit-submit" name="op"  class="btn_2 submit"  style="width: 50%;"> <span> </span>Send to Email</button>
        </div>

    </div>
    </div>
	</form>
</div>

<?php include_once("footer.php");?>

</body>
</html>	



<?php
// Include database configuration file
include('includes/dbconn.php');

// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    // Get user's email from form input
    $email = $_POST['email'];
    
    // Prepare SQL statement to fetch user's password
    $sql = "SELECT password FROM users WHERE email = '$email'";
    
    // Execute SQL statement
    $result = mysqli_query($conn, $sql);
    
    // Check if user exists in database
    if(mysqli_num_rows($result) > 0){
        
        // Fetch user's password from database
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];
        
        // Send password to user's email address
        $to = $email;
        $subject = "Your password for Shosurbari.com";
        $message = "Your password is: $password";
        $headers = "From: support@shosurbari.com";
        
        if(mail($to, $subject, $message, $headers)){
            // Password sent successfully
            echo "Your password has been sent to your email address.";
        } else {
            // Error sending email
            echo "There was an error sending your password. Please try again later.";
        }
        
    } else {
        // User not found in database
        echo "We couldn't find a user with that email address.";
    }
}
?>







<?php
/*
// Include database configuration file
require_once 'includes/dbconn.php';

// Function to generate random password
function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = strlen($chars);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $password .= substr($chars, $index, 1);
    }
    return $password;
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get input email
    $email = $_POST['email'];

    // Check if email exists in database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Generate new password
        $new_password = generatePassword();

        // Update user's password in database
        $query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
        mysqli_query($conn, $query);

        // Send new password to user's email
        $to = $email;
        $subject = 'New Password for Your Account';
        $message = 'Your new password is: '.$new_password;
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        // Display success message
        echo "A new password has been sent to your email address.";
    } else {
        // Display error message
        echo "Email address not found.";
    }
}
*/
?>

