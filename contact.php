<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php contact_us(); 
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us - ShosurBari</title>
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

<!-- Country Code with Flag for Number input field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />

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
					<li class="current-page"><h4>Contact</h4></li>
				</ul>
			</div>
		</div>
	</div>



  <div class="shosurbari-about-contact">
		<div class="shosurbari-details">
			<h1>How to Contact ShosurBari? </h1>
			<p> Vestibulum ante ipsum primis in faucibus orci luctus et trices posuere cubilia 
				Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magnandrerit 
				sit amet tincidunt ac viverra sed nulla. Donec porta diam eu massa. Quisque diam lorem interdum
				vapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentum. Donec in velit
				vel ipsum auctorulvinar. Proin ullamcorper urna et tibulum iaculis lacinia est.
			</p>
		</div>
	</div>



  <div class="shosurbari-biodata">
    <form action="" method="POST" name="myForm" onsubmit="return validateForm()">
      <div class="flex-container">
        <div class="sb-register-login">
          <div class="sb-biodata-field" style="background: #06b6d4 !important;">
            <h2>Contact <span>Us</span></h2>
          </div>

          <div class="form-group">
            <input type="text" id="name_contactus" placeholder="Your Full Name" name="name_contactus" value="" size="60" maxlength="60" class="form-text required">
            <span id="name-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
          </div>

          <div class="form-group">
            <input type="email" id="email_contactus" placeholder="Your Email" name="email_contactus" value="" size="60" maxlength="60" class="form-text">
            <span id="email-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
          </div>

          <div class="form-group">
            <input type="tel" id="number_contactus" placeholder="Your Phone Number" name="number_contactus" value="" size="60" minlength="10" maxlength="15" class="form-text required">
            <span id="phone-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
          </div>

          <script>
            $(document).ready(function() {
              var input = document.querySelector("#number_contactus");
              window.intlTelInput(input, {
                separateDialCode: true,
                preferredCountries: ["bd"]
              });
            });
          </script>


          <div class="form-group">
            <textarea rows="4" id="message_contactus" name="message_contactus" placeholder="Type Your Message..." class="form-text-describe required" maxlength="1000"></textarea>
            <span id="message-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
          </div>

          <div class="form-actions">
            <button type="submit" id="edit-submit" name="op" class="btn_4 submit">Submit</button>
          </div>

          <!-- Popup message -->
          <div class="popup-message">
            <h3></h3>
            <p></p>
          </div>

          <div class="overlay"></div>
        </div>
      </div>
    </form>
  </div>

<script>
  function validateForm() {
  var name = document.getElementById("name_contactus").value.trim();
  var email = document.getElementById("email_contactus").value.trim();
  var phone = document.getElementById("number_contactus").value.trim();

  var messageInput = document.getElementById("message_contactus");
  var message = messageInput.value.trim();


  var nameError = document.getElementById("name-error");
  var emailError = document.getElementById("email-error");
  var phoneError = document.getElementById("phone-error");
  var messageError = document.getElementById("message-error");
  var valid = true;

  // Validate name



//Full Name validation
        if (name == "") {
        document.getElementById('name_contactus').style.borderColor = "red";
        document.getElementById('name_contactus').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('name-error');
        errorDiv.innerHTML = "Please enter your Full Name !";
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
        document.getElementById('name_contactus').style.borderColor = "green";
        document.getElementById('name-error').innerHTML = "";
      }


            //Email validation
            if (email == "") {
        document.getElementById('email_contactus').style.borderColor = "red";
        document.getElementById('email_contactus').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('email-error');
        errorDiv.innerHTML = "Please enter your Email !";
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
      }else if(! /^[a-zA-Z0-9._-]+@(gmail|outlook|hotmail|yahoo).com$/.test(email)){
        document.getElementById('email_contactus').style.borderColor = "red";
        document.getElementById('email_contactus').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('email-error');
        errorDiv.innerHTML = "Please Enter a Valid Email. Only Used: (@gmail or @outlook or @hotmail or @yahoo).com";
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
        document.getElementById('email_contactus').style.borderColor = "green";
        document.getElementById('email-error').innerHTML = "";
      }




  //Phone number validation
var phoneInput = document.getElementById("number_contactus");
var phone = phoneInput.value.replace(/[^\d]/g, ''); // Remove any non-digit characters from the input

if (phone.length === 0) {
  phoneInput.style.borderColor = "red";
  phoneInput.scrollIntoView({
    behavior: 'smooth',
    block: 'center',
  });

  var errorDiv = document.getElementById('phone-error');
  errorDiv.innerHTML = "Please enter your phone number!";
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
} else if (phone.length < 10 || phone.length > 15) {
  phoneInput.style.borderColor = "red";
  phoneInput.scrollIntoView({
    behavior: 'smooth',
    block: 'center',
  });

  var errorDiv = document.getElementById('phone-error');
  errorDiv.innerHTML = "Phone number must be between 10 and 15 digits, Remove any non-digit characters & space from the input.";
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
} else {
  phoneInput.style.borderColor = "green";
  document.getElementById('phone-error').innerHTML = "";
}






// Validate Message
if (message === "") {
  messageInput.style.borderColor = "red";
  messageInput.scrollIntoView({
    behavior: 'smooth',
    block: 'center',
  });



  var errorDiv = document.getElementById('message-error');
        errorDiv.innerHTML = "Please type your message !";
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
} else {
  messageInput.style.borderColor = "green";
  document.getElementById('message-error').innerHTML = "";
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
  popup.querySelector('p').innerHTML = 'Your data has been saved to the database.';

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




<?php include_once("footer.php");?>

</body>
</html>	
