

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
//calling photo uploader function
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ uploadphoto($id); }
?>
<!DOCTYPE HTML>
<html>


<head>
<title>Update Account - ShosurBari</title>
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

<!-- Country Code with Flag for Number input field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
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
                    <li class="current-page"><h4>Update Account</h4></li>
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
                    if($row){
                        $pnumber=$row['number'];
                        }
                    if($row){
                        $id=$row['id'];
                    }
                    }
                ?>
                <?php echo "Welcome: $username"; ?>
            </div>
         </div>
    </div>


    <style>
            .update-image img {
            height: 145px;
            width: 175px;
            padding: 2px;
            background: #f5f2f2;
            box-shadow: 0px 2px 7px 6px rgb(0 0 0 / 20%);
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 0px;
            border-radius: 4px;
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


    <style>
    .btn_1{
        background: #06b6d4;
        border-radius: 6px;
        width: 100%;
        padding: 5.5px;
        display: inline-block;
        color: #fff;
        text-transform: uppercase;
        outline: none;
        border: none;
        margin: 0px;
        font-size: 0.60em;
        transition: background-color 0.3s, color 0.3s;
    }

    .shosurbari-user-account .form-actions {
        width: 100%;
        margin-bottom: 0px;
        margin-top: 0px;
        text-align: center;
        font-size: 30px;
    }
    .update-image-input form{
        width: 100px;
        margin-left: 0;
    }

    input[type=submit] {
        cursor: pointer;
        width: 120px;
        height: 35px;
        margin-top: 10px;
        background: #06b6d4;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #fff;
        box-shadow: 1px 1px 4px #888;
    }

    .delete-image {
        order: 3;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .delete-image form {
        width: 100%;
        padding-top: 5px;
    }

    .delete-image form button {
        display: block;
        margin: 0 auto;
        width: 120px;
        background: #ff0080;
        color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .delete-image button:hover{
        background: #0aa4ca;
        color: #fff;
    }

    .delete-image p{
        margin-top: 15px;
        font-size: 15px;
        line-height: 24px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 100%;
        background: #fff;
    }

    input[type=file] {
        width: 200px;
    }

    .shosurbari-user-account{
        border: 1px solid #ccc;
        border-radius: 6px;
        width: 400px;
        gap: 1.5rem;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
        margin-top: 20px;
        background: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .shosurbari-user-account form{
        background: white;
    }

    .uploaded-photo {
        margin-bottom: 20px;
    }

    .uploaded-photo span {
        display: block;
        margin-bottom: 10px;
    }

    .update-image-button{

        gap: 10px;
        margin-bottom: 0px;
        font-size: 14px;
        white-space: nowrap;
        width: 100%;
    }

    .update-image {
        order: 2;
    }

    .update-image-input {
        order: 1;
        margin-top: 0px;
        width: 40%;
    }

    .form-file {
        margin-bottom: 10px;
    }

    .popup-message {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #c5ffc5;
        border: 2px solid green;
        border-radius: 4px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    .popup-message h3 {
        margin-top: 0;
        margin-bottom: 10px;
        text-align: center;
        color: #04aa6d;
        font-size: 24px;
    }

    .popup-message p {
        margin: 0;
        font-size: 18px;
        text-align: center;
        color: #000;
    }

    .popup-message button.close-button {
        display: block;
        margin-top: 10px;
        margin-left: auto;
        margin-right: auto;
        padding: 5px 10px;
        background-color: #06b6d4;
        color: #fff;
        border: none;
        border-radius: 2px;
        cursor: pointer;
    }

    .popup-message button.close-button:hover {
        background-color: #0aa4ca;
        color: #fff;
    }

    .update-image .fa{
        font-size: 30px;
        color: #06b6d4;
        box-shadow: 0px 5px 10px 0px #aaa;
        background: #fff;
        padding: 8px;
        border-radius: 50%;
        transition: background-color 0.5s, color 0.5s;

    }

    .update-image .fa:hover{
        color: #fff;
        background: #0aa4ca;
        transition: background-color 0.5s, color 0.5s;
    }

    .update-image .fa::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 1px;
        background: #0aa4ca;
        z-index: -1;
    }

    .update-image {
        position: relative;
    }

    .image-wrapper{
        width: 175px;
        margin: 20px auto;
    }

    .update-image .image-wrapper img {
        max-width: 100%;
        max-height: 100%;
    }

    .update-image .camera-wrapper {
        position: relative;
        justify-content: center;
        align-items: center;
        width: 50%;
    }

    .update-image .camera-wrapper i {
        position: absolute;
        font-size: 30px;
        color: #06b6d4;
        box-shadow: 0px 5px 10px 0px #aaa;
        background: #fff;
        padding: 8px;
        border-radius: 50%;
    }


    #file-input-wrapper {
        display: none;
    }
    </style>




    <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                S  T  A  R  T                  --
    -- SHOSURBARI USER ACCOUNT PHOTO DELETE & UPLOAD --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
    <script>
        function showFileInput() {
            var cameraIcon = document.querySelector('.camera-wrapper i');
            var fileInputWrapper = document.querySelector('#file-input-wrapper');
            var deleteImageSection = document.querySelector('.delete-image');

            cameraIcon.style.display = 'none';
            fileInputWrapper.style.display = 'block';
            deleteImageSection.style.display = 'none';
        }

        // Check if image exists on page load
        window.addEventListener('DOMContentLoaded', function () {
            var imageWrapper = document.querySelector('.image-wrapper');
            var cameraIcon = document.querySelector('.camera-wrapper i');
            var deleteImageSection = document.querySelector('.delete-image');

            if (imageWrapper) {
                deleteImageSection.style.display = 'block';
                cameraIcon.style.display = 'none';
            } else {
                deleteImageSection.style.display = 'none';
                cameraIcon.style.display = 'block';
            }
        });
    </script>




    <div class="shosurbari-user-account">

        <div class="sb-biodata-field">
            <h2>Upadate Your Photo</h2>
        </div>

        <div class="shosurbari-user-img">
            <?php
                // Retrieve the user's uploaded photo from the database
                $sql = "SELECT pic1 FROM photos WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $uploadedPhoto = $row['pic1'];

                if (!empty($uploadedPhoto)) {
                    echo "<img src='profile/$profileid/$uploadedPhoto' />";
                }
            ?>
        </div>

        <div class="uploaded-photo">
            <?php if (!empty($uploadedPhoto)): ?>
                <img src="profile/<?php echo $profileid; ?>/<?php echo $uploadedPhoto; ?>" />
            <?php endif; ?>
        </div>

        <div class="update-image-button">
            <div class="update-image">
                <?php if (!empty($pic1)): ?>

                    <div class="image-wrapper">
                        <img src="profile/<?php echo $profileid; ?>/<?php echo $pic1; ?>" />
                    </div>

                <?php else: ?>

                    <div class="camera-wrapper" onclick="showFileInput()">
                        <i class="fa fa-camera"></i>
                        <img src="images/shosurbari-male-icon.jpg" />
                    </div>

                <?php endif; ?>
            </div>


            <div class="delete-image">
                <form action="" method="POST" enctype="multipart/form-data">

                    <?php if (!empty($pic1)): ?>
                        <button type="submit" name="delete_photo" value="Delete" class="delete_photo-btn delete-button">Delete Photo</button>
                        <p>আপনি যদি আপনার বর্তমান ছবি পরিবর্তন বা <br>আপডেট করতে চান, প্রথমে আপনার প্রোফাইল <br>থেকে বর্তমান ছবি ডিলিট করুন। তারপর <br>নতুন ছবি আপলোড করুন।</p>
                    <?php endif; ?>

                    <?php
                        if (isset($_POST['delete_photo'])) {
                        // Delete photo from profile folder
                        $dir = 'profile/' . $user_id . '/';
                        unlink($dir . $pic1);

                        // Delete photo from database
                        $sql = "UPDATE photos SET pic1 = NULL WHERE user_id = '$user_id'";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                        // Show green message
                        echo "<div style='color:green;'>Photo deleted successfully! Please refresh the page.</div>";
                        }
                        }
                    ?>

                </form>
            </div>


            <div class="update-image-input" id="file-input-wrapper">

                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="file-upload" class="file-upload-btn upload-button">Choose Photo</label>
                    <input type="file" id="file-upload" name="pic1" class="form-file required" />
                    <input type="submit" id="edit-submit" name="update_photo" value="Upload" class="update_photo-btn submit-button" />
                </form>

            </div>
        </div>
    </div>


    <div class="popup-message" style="display: none;">
        <h3></h3>
        <p></p>
    </div>


    <script>
        <?php
        if (isset($_POST['update_photo'])) {
            // Your existing code for updating the photo

            // JavaScript code to show the success popup message
            echo 'showSuccessMessage();';
        }
        ?>

        function showSuccessMessage() {
            // Show the popup message
            var popup = document.querySelector('.popup-message');
            popup.style.display = 'block';

            // Set the message text
            popup.querySelector('h3').innerHTML = 'Success!';
            popup.querySelector('p').innerHTML = 'Your photo has been uploaded successfully.';

            // Add a close button to the popup message
            var closeButton = document.createElement('button');
            closeButton.innerHTML = 'Close';
            closeButton.classList.add('close-button');
            popup.appendChild(closeButton);

            // Hide the popup when the close button is clicked
            closeButton.addEventListener('click', function() {
                popup.style.display = 'none';
            });
        }
    </script>

    <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                  --
    -- SHOSURBARI USER ACCOUNT PHOTO DELETE & UPLOAD --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->








    <!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                S  T  A  R  T                  --
    --    SHOSURBARI USER ACCOUNT PASSWORD UPDATE    --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->


    <div class="shosurbari-user-account">
        <form action="" method="POST" name="myForm" onsubmit="return validateForm()">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="uname" style="background: #ecfeff" class="form-text" value="<?php echo $username; ?>" disabled />
            </div>


            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="email" style="background: #ecfeff" class="form-text" value="<?php echo $email; ?>" disabled />
            </div>
            

            <div class="form-group">
                <label>Phone Number</label><br>
                <input type="text" id="pnumber" name="pnumber" style="background: #ecfeff" value="<?php echo $pnumber; ?>" size="60" minlength="10" maxlength="15" class="form-text" disabled>
            </div>


            <div class="form-group">
                <label for="edit-name">Current Password</label>
                <input type="text" id="edit-pass" name="current_password" style="background: #ecfeff" value="<?php echo $password; ?>" class="form-text" disabled/>
                <span class="show-password" style="display: none; color: #0aa4ca; font-size: 18px; top: 24px;"><i style="color: black; font-size: 18px;" class="fa fa-eye-slash"></i></span> 
            </div>

            <div class="form-group">
                <label>Change Password</label>
                <input type="password" id="pass_1" name="pass_1" class="form-text" />
                <span class="show-password" style="color:#0aa4ca;  font-size:18px; top:24px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
                <span  id="pass_1_error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
            </div>


            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" id="pass_2" name="pass_2" class="form-text" />
                <span class="show-password" style="color:#0aa4ca;  font-size:18px; top:24px;"><i style="color:black;  font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></span> 
                <span  id="pass_2_error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
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
	



            <div class="form-actions">
                <?php if (isset($_SESSION['id'])) { ?>
                    <input type="hidden" id="edit-remember" name="remember" value="1">
                <?php } else { ?>

                <div class="form-group">
                    <label><input type="checkbox" id="edit-remember" name="remember" value="1" <?php if(isset($_COOKIE['remember']) && $_COOKIE['remember'] == 1) { echo 'checked'; } ?>> Remember me</label>
                </div>

                <?php } ?>

                <button type="submit" name="update_account" value="Update Account" class="btn_1 submit">
                    <span>Update Password</span>
                </button>
            </div>

        </form>
    </div>




    <script>
        function validateForm(){

        var pass_1 = document.forms["myForm"]["pass_1"].value;
        var pass_2 = document.forms["myForm"]["pass_2"].value;


        
        //New Password validation
        if (pass_1 == "") {
            document.getElementById('pass_1').style.borderColor = "red";
            document.getElementById('pass_1').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            });

            var errorDiv = document.getElementById('pass_1_error');
            errorDiv.innerHTML = "Please Enter Your New Password !";
            errorDiv.style.display = 'block';
            errorDiv.classList.add('fade-in');

            // Change color multiple times
            var colors = ['green', 'blue', 'red'];
            var colorIndex = 0;
            setInterval(function() {
            errorDiv.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
            }, 500);

            return false;
        }else{
            document.getElementById('pass_1').style.borderColor = "green";
            document.getElementById('pass_1').style.backgroundColor = "#ecfeff";
            document.getElementById('pass_1_error').innerHTML = "";
        }

        


        //Confirm Password validation
        if (pass_2 == "") {
            document.getElementById('pass_2').style.borderColor = "red";
            document.getElementById('pass_2').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            });

            var errorDiv = document.getElementById('pass_2_error');
            errorDiv.innerHTML = "Please Enter Your Confirm Password !";
            errorDiv.style.display = 'block';
            errorDiv.classList.add('fade-in');

            // Change color multiple times
            var colors = ['green', 'blue', 'red'];
            var colorIndex = 0;
            setInterval(function() {
            errorDiv.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
            }, 500);

            return false;
        }else if(pass_2 != pass_1){
            document.getElementById('pass_2').style.borderColor = "red";
            document.getElementById('pass_2').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            });

            var errorDiv = document.getElementById('pass_2_error');
            errorDiv.innerHTML = "Your Password Do Not Match !";
            errorDiv.style.display = 'block';
            errorDiv.classList.add('fade-in');

            // Change color multiple times
            var colors = ['green', 'blue', 'red'];
            var colorIndex = 0;
            setInterval(function() {
            errorDiv.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
            }, 500);

            return false;
        }else{
            document.getElementById('pass_2').style.borderColor = "green";
            document.getElementById('pass_2').style.backgroundColor = "#ecfeff";
            document.getElementById('pass_2_error').innerHTML = "";
        }
        }
    </script>





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

