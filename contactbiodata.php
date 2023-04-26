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

        
        <button type="button" class="next-btn">Make Payment</button>

      </div>



<script>
  $('.next-btn').click(function(){
    $('.payment-form').css('display', 'block');
    $('html, body').animate({
        scrollTop: $(".payment-form").offset().top - ($(window).height()/3)
    }, 500);
});
  </script>


<div class="payment-form" style="display: none;">
<div class="sb-biodata-field" style="background: #00bbff !important;">
          <h2>Payment <span>Getway</span></h2>
        </div>
<div class="shosurbari-biodata-field">
            <label for="edit-name">How many Biodatas do you want to contact?</label> <br>
                <select name="biodata_options" id="biodata_options" required>
                <option value="" disabled selected>Biodata Quantities</option>
                    <option value="1">1 Biodata</option>
                    <option value="2">2 Biodata</option>
                    <option value="3">3 Biodata</option>
                    <option value="4">4 Biodata</option>
                    <option value="5">5 Biodata</option>
                </select>
                <div id="payment-message" class="form-group" style="display: none; color: #ff0080;">Please pay <span id="payment-amount">70</span> tk to continue.</div>
            </div>
            
            <div class="shosurbari-biodata-field">
                <label for="edit-name">Choose your preferred payment method.</label>  <br>
                <select name="payment_method" id="payment_method" required>
                <option value=""  disabled selected>Payment Method</option>
                    <option value="bkash">Bkash</option>
                    <option value="nagad">Nagad</option>
                    <option  value="roket">Roket</option>
                </select>
            </div>

            <div class="payment-method bkash">
                <div class="shosurbari-biodata-field">
                <p style="color: #e2136e;"> please send money to personal Bkash number 01737-226404</p> <br>
                  <label style="color: #e2136e;">Your Bkash Number</label>
                  <input type="text" id="bkash_number" name="bkash_number" placeholder="Enter Number" class="form-text required" />
                  <span id="bkashnumber-error" style="color:red; font-size:13px;"></span>
                </div>
                <div class="shosurbari-biodata-field">
                    <label style="color: #e2136e;">Bkash Transaction ID</label>
                    <input type="text" id="bkash_trxid" name="bkash_transaction_id" placeholder="Enter TrxID" class="form-text required"/>
                    <span id="bkash-error" style="color:red; font-size:13px;"></span>
                </div>
            </div>
            
          <div class="payment-method nagad">
            <div class="shosurbari-biodata-field">
            <p style="color: #f24f41;"> please send money to personal Nagad number 01737-226404</p> <br>
                    <label style="color:#f24f41;">Your Nagad Number</label>
                    <input type="text" id="nagad_number" name="nagad_number" placeholder="Enter Number" class="form-text required"/>
                    <span id="nagadnumber-error" style="color:red; font-size:13px;"></span>
                </div>
                <div class="shosurbari-biodata-field">
                    <label style="color:#f24f41;">Nagad Transaction ID</label>
                    <input type="text" id="nagad_trxid" name="nagad_transaction_id" placeholder="Enter TxnID" class="form-text required"/>
                    <span id="nagad-error" style="color:red; font-size:13px;"></span>
                </div>
          </div>
          
            
            
          <div class="payment-method roket">
              <div class="shosurbari-biodata-field">
              <p style="color: #d80dd8;"> please send money to personal Roket number 01737-2264044</p> <br>
                    <label style="color: #d80dd8;">Your Roket Number</label>
                    <input type="text" id="roket_number" name="roket_number" placeholder="Enter Number" class="form-text required"/>
                    <span id="roketnumber-error" style="color:red; font-size:13px;"></span>
              </div>
              <div class="shosurbari-biodata-field">
                    <label style="color: #d80dd8;">Roket Transaction ID</label>
                    <input type="text" id="roket_trxid" name="roket_transaction_id" placeholder="Enter TxnID" class="form-text required"/>
                    <span id="roket-error" style="color:red; font-size:13px;"></span>
                </div>
          </div>



<div class="form-actions">
  <button type="submit" id="edit-submit" name="op" class="btn_4 submit">Submit</button>
</div>

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
  
  </script>









    <script>
        let paymentOptions = {
            '1': 70,
            '2': 130,
            '3': 190,
            '4': 245,
            '5': 295
        }
        let paymentMethodElements = document.querySelectorAll('.payment-method');
        let paymentMessageElement = document.querySelector('#payment-message');
        let paymentAmountElement = document.querySelector('#payment-amount');
        let biodataOptionsElement = document.querySelector('#biodata_options');
        let paymentMethodElement = document.querySelector('#payment_method');

        biodataOptionsElement.addEventListener('change', function() {
            let paymentAmount = paymentOptions[this.value];
            paymentAmountElement.innerText = paymentAmount;
            paymentMessageElement.style.display = 'block';
        });

        paymentMethodElement.addEventListener('change', function() {
            let selectedMethod = this.value;
            paymentMethodElements.forEach(function(methodElement) {
                if (methodElement.classList.contains(selectedMethod)) {
                    methodElement.style.display = 'block';
                } else {
                    methodElement.style.display = 'none';
                }
            });
        });
    </script>





<script>
  function validateForm() {
  var name = document.getElementById("cust_name").value.trim();
  var email = document.getElementById("cust_email").value.trim();
  var phone = document.getElementById("pnumber").value.trim();
  var address = document.getElementById("permanent_address").value.trim();
  var biodata = document.getElementById("contact_biodatas_number").value.trim();

  var bkashnumber = document.getElementById("bkash_number").value.trim();
  var bkash = document.getElementById("bkash_trxid").value.trim();
  var nagadnumber = document.getElementById("nagad_number").value.trim();
  var nagad = document.getElementById("nagad_trxid").value.trim();
  var roketnumber = document.getElementById("roket_number").value.trim();
  var roket = document.getElementById("roket_trxid").value.trim();


  var nameError = document.getElementById("name-error");
  var emailError = document.getElementById("email-error");
  var phoneError = document.getElementById("phone-error");
  var addressError = document.getElementById("address-error");
  var biodataError = document.getElementById("biodata-error");

  var bkashnumberError = document.getElementById("bkashnumber-error");
  var bkashError = document.getElementById("bkash-error");
  var nagadnumberError = document.getElementById("nagadnumber-error");
  var nagadError = document.getElementById("nagad-error");
  var roketnumberError = document.getElementById("roketnumber-error");
  var roketError = document.getElementById("roket-error");

  var selectedOption = document.getElementById("payment_method").value;

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





















      
  if (selectedOption === "bkash") {
    nagadnumberError.style.display = "none";
    nagadError.style.display = "none";
    roketnumberError.style.display = "none";
    roketError.style.display = "none";

// Check if bkash fields are filled in
  // 1 bkash
  if (bkashnumber == "") {
        document.getElementById('bkash_number').style.borderColor = "red";
        document.getElementById('bkash_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('bkashnumber-error').innerHTML = "Please enter your Bkash Number";
        return false;
      }else{
        document.getElementById('bkash_number').style.borderColor = "green";
        document.getElementById('bkashnumber-error').innerHTML = "";
      }

  // 2 bkash trxid
    if (bkash == "") {
        document.getElementById('bkash_trxid').style.borderColor = "red";
        document.getElementById('bkash_trxid').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('bkash-error').innerHTML = "Please enter Bkash TRXID";
        return false;
      }else{
        document.getElementById('bkash_trxid').style.borderColor = "green";
        document.getElementById('bkash-error').innerHTML = "";
      }
  } 
  
  
  
  
  else if (selectedOption === "nagad") {
    bkashnumberError.style.display = "none";
    bkashError.style.display = "none";
    roketnumberError.style.display = "none";
    roketError.style.display = "none";

    
    // Check if nagad fields are filled in
              // 1 nagad
              if (nagadnumber == "") {
        document.getElementById('nagad_number').style.borderColor = "red";
        document.getElementById('nagad_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('nagadnumber-error').innerHTML = "Please enter your Nagad Number";
        return false;
      }else{
        document.getElementById('nagad_number').style.borderColor = "green";
        document.getElementById('nagadnumber-error').innerHTML = "";
      }

        // 2 nagad trxid
      if (nagad == "") {
        document.getElementById('nagad_trxid').style.borderColor = "red";
        document.getElementById('nagad_trxid').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('nagad-error').innerHTML = "Please enter Nagad TRXID";
        return false;
      }else{
        document.getElementById('nagad_trxid').style.borderColor = "green";
        document.getElementById('nagad-error').innerHTML = "";
      }
  } 
  
  


  
  
  else if (selectedOption === "roket") {
    bkashnumberError.style.display = "none";
    bkashError.style.display = "none";
    nagadnumberError.style.display = "none";
    nagadError.style.display = "none";

 // Check if roket fields are filled in
    // 3 roket
  if (roketnumber == "") {
        document.getElementById('roket_number').style.borderColor = "red";
        document.getElementById('roket_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('roketnumber-error').innerHTML = "Please enter your Roket Number";
        return false;
      }else{
        document.getElementById('roket_number').style.borderColor = "green";
        document.getElementById('roketnumber-error').innerHTML = "";
      }

        // 3 roket trxid
      if (roket == "") {
        document.getElementById('roket_trxid').style.borderColor = "red";
        document.getElementById('roket_trxid').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });
        document.getElementById('roket-error').innerHTML = "Please enter Roket TRXID";
        return false;
      }else{
        document.getElementById('roket_trxid').style.borderColor = "green";
        document.getElementById('roket-error').innerHTML = "";
      }
  } 
  
  
  
  else {
    // no option selected
    bkashnumberError.style.display = "none";
    bkashError.style.display = "none";

    nagadnumberError.style.display = "none";
    nagadError.style.display = "none";

    roketnumberError.style.display = "none";
    roketError.style.display = "none";
    valid = false;
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
      url: 'contactbiodata.php', // Replace this with the URL of your server-side script
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


<script>
const nextBtn = document.querySelector('.next-btn');
const paymentForm = document.querySelector('.payment-form');

nextBtn.addEventListener('click', () => {
  paymentForm.style.display = 'block';
});
</script>


<style>
  .next-btn {
  display: block;
  margin: 0 auto;
  margin-top: 20px;
}

  .payment-form {
    margin: auto;
    border: 1px solid #ccc;
    border-radius: 6px;
    width: 400px;
    gap: 1.5rem;
    padding: 20px;
    background: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    height: 2;
        }

        .payment-form .form-group {
            margin-bottom: 10px;
        }

        .payment-form .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .payment-form .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }

        .payment-form .form-group select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }

        .payment-form button {
            display: block;
            width: 100%;
            padding: 10px 15px;
            box-sizing: border-box;
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            border: 0;
            border-radius: 3px;
            cursor: pointer;
        }

        .payment-form .payment-method {
            display: none;
        }
    </style>



    
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
