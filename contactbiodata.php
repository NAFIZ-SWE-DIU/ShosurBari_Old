<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php register(); 
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact Biodata - ShosurBari</title>
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

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add icon library end -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <li class="current-page"><h4>Contact Biodata</h4></li>
     </ul>
   </div>
</div>
</div>


<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--   SHOSURBARI BIODATA FORM FIELD ALL SECTION   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<div class="shosurbari-biodata">
  <form action="" method="POST" name="myForm" onsubmit="return validateForm()">
    <div class="flex-container">
      <div class="sb-register-login">
        <div class="sb-biodata-field" style="background: #00bbff !important;">
          <h2>Contact <span>Biodata</span></h2>
        </div>

        <div class="shosurbari-biodata-field">
          <input type="text" id="cust_name" placeholder="Your Full Name" name="cust_name" value="" size="60" maxlength="60" class="form-text required">
          <span id="name-error" style="color:red; font-size:13px;"></span>
        </div>

        <div class="shosurbari-biodata-field">
          <input type="email" id="cust_email" placeholder="Your Email" name="cust_email" value="" size="60" maxlength="60" class="form-text">
          <span id="email-error" style="color:red; font-size:13px;"></span>
        </div>

        <div class="shosurbari-biodata-field">
          <input type="tel" id="pnumber" placeholder="Your Phone Number" name="cust_number" value="" size="60" minlength="10" maxlength="15" class="form-text required">
          <span id="phone-error" style="color:red; font-size:13px;"></span>
        </div>

  <script>
    $(document).ready(function() {
      var input = document.querySelector("#pnumber");
      window.intlTelInput(input, {
        separateDialCode: true,
        preferredCountries: ["bd"]
      });
    });
  </script>


        <div class="shosurbari-biodata-field">
          <input type="text" id="permanent_address" name="permanent_address" placeholder="Your Permanent Address" value="" size="100" maxlength="100" class="form-text required">
          <span id="address-error" style="color:red; font-size:13px;"></span>
        </div>

        <div class="shosurbari-biodata-field">
          <textarea rows="4" id="contact_biodatas_number" name="contact_biodatas_number" placeholder="Biodatas Number. EX: 0000, 982..." class="form-text required"></textarea>
          <span id="biodata-error" style="color:red; font-size:13px;"></span>
        </div>

        <div class="form-actions">
          <button type="submit" id="edit-submit" name="op" class="btn_4 submit">Submit</button>
        </div>

        <!-- Add this code after the form element in your existing code -->

<!-- Popup message -->
<div class="popup-message">
  <h3></h3>
  <p></p>
</div>

<!-- Overlay -->
<div class="overlay"></div>



      </div>
    </div>
  </form>
</div>

<script>
  function validateForm() {
  var name = document.getElementById("cust_name").value.trim();
  var email = document.getElementById("cust_email").value.trim();
  var phone = document.getElementById("pnumber").value.trim();
  var address = document.getElementById("permanent_address").value.trim();
  var biodata = document.getElementById("contact_biodatas_number").value.trim();
  var nameError = document.getElementById("name-error");
  var emailError = document.getElementById("email-error");
  var phoneError = document.getElementById("phone-error");
  var addressError = document.getElementById("address-error");
  var biodataError = document.getElementById("biodata-error");
  var valid = true;

  // Validate name



//Full Name validation
        if (name == "") {
        document.getElementById('cust_name').style.borderColor = "red";
        document.getElementById('cust_name').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('name-error').innerHTML = "Please enter your Full Name";
        return false;
      }else{
        document.getElementById('cust_name').style.borderColor = "green";
        document.getElementById('name-error').innerHTML = "";
      }


            //Email validation
            if (email == "") {
        document.getElementById('cust_email').style.borderColor = "red";
        document.getElementById('cust_email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('email-error').innerHTML = "Please enter your Email";
        return false;
      }else if(! /^[a-zA-Z0-9._-]+@(gmail|outlook|hotmail|yahoo).com$/.test(email)){
        document.getElementById('cust_email').style.borderColor = "red";
        document.getElementById('email-error').innerHTML = "Please enter a valid Email. Ex: (@gmail / @outlook / @hotmail / @yahoo).com";
        document.getElementById('cust_email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('cust_email').style.borderColor = "green";
        document.getElementById('email-error').innerHTML = "";
      }


  //Phone number validation
            if (phone == "") {
        document.getElementById('pnumber').style.borderColor = "red";
        document.getElementById('pnumber').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('phone-error').innerHTML = "Please enter your Phone Number";
        return false;
      }else if(pnumber.length < 10 || pnumber.length > 14){
        document.getElementById('pnumber').style.borderColor = "red";
        document.getElementById('phone-error').innerHTML = "Phone number must be between 10 and 14 characters";
        document.getElementById('pnumber').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        return false;
      }else{
        document.getElementById('pnumber').style.borderColor = "green";
        document.getElementById('phone-error').innerHTML = "";
      }



  // Validate address
  if (address == "") {
        document.getElementById('permanent_address').style.borderColor = "red";
        document.getElementById('permanent_address').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('address-error').innerHTML = "Please enter your address";
        return false;
      }else{
        document.getElementById('permanent_address').style.borderColor = "green";
        document.getElementById('address-error').innerHTML = "";
      }

  // Validate biodata

  if (biodata == "") {
        document.getElementById('contact_biodatas_number').style.borderColor = "red";
        document.getElementById('contact_biodatas_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('biodata-error').innerHTML = "Please enter Biodata Number";
        return false;
      }else{
        document.getElementById('contact_biodatas_number').style.borderColor = "green";
        document.getElementById('biodata-error').innerHTML = "";
      }

  return valid;
}
  </script>






<script> 
function showSuccessMessage() {
  // Show the overlay
  document.querySelector('.overlay').style.display = 'block';

  // Show the popup message
  var popup = document.querySelector('.popup-message');
  popup.style.display = 'block';

  // Set the message text
  popup.querySelector('h3').innerHTML = 'Thank you!';
  popup.querySelector('p').innerHTML = 'আপনার তথ্য সফলভাবে জমা হয়েছে। আপনার তথ্য যাচাই করার পর- ৪৮ ঘন্টার মধ্যে যোগাযোগের কাঙ্ক্ষিত তথ্য পাঠানো হবে। অনুগ্রহ করে আপনার ফোনের SMS বক্স বা Email বক্স ফলো করুন।';


  // Add a close button to the popup message
  var closeButton = document.createElement('button');
  closeButton.innerHTML = 'Close';
  closeButton.classList.add('close-button');
  popup.appendChild(closeButton);

  // Hide the popup and overlay when the close button is clicked
  closeButton.addEventListener('click', function() {
    popup.style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
  });
}

// Change the form submission code to the following
$('form[name="myForm"]').submit(function(e) {
  e.preventDefault(); // Prevent the default form submission

  if (validateForm()) {
    // Submit the form data using AJAX
    $.ajax({
      url: 'contact.php', // Replace this with the URL of your server-side script
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        // Show the success message
        showSuccessMessage();

        // Clear the form
        $('form[name="myForm"]')[0].reset();
      },
      error: function(jqXHR, textStatus, errorThrown) {
        // Handle errors here
      }
    });
  }
});
</script>


    
<style>/* Popup message styles */
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
}

.popup-message button.close-button {
  display: block;
  margin-top: 10px;
  margin-left: auto;
  margin-right: auto;
  padding: 5px 10px;
  background-color: #00bbff;
  color: #fff;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}

.popup-message button.close-button:hover {
  background-color: #ff0080;
  color: #fff;
}

/* Overlay styles */
.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9998;
}
</style>

<?php include_once("footer.php");?>

</body>
</html>	
