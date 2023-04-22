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
   <div class="grid_5">
      <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient. montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
    </div>
   </div>
</div>




<style>


.shosurbari-user-statistic{
    margin-top: 100px;
    margin-bottom: 50px;
    text-align: center;
  }
	
h1, h2, h3 {
  font-weight: 600;
  color: hsl(234, 12%, 34%);
  text-align: center;
}

p { color: hsl(229, 6%, 66%); }

.cards-container {
  /* List Styling Clean-Up */
  list-style: none;
  padding: 0; margin: 0;
  margin: auto;
  margin-bottom: 50px;
}
.total-grmbrd{
  margin-top:  -10px;
}
.total-grmbrd-feature-card img{
    height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}
.total-groom{
  margin-top:  -10px;
}
.total-groom-feature-card img{
  height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}.total-bride{
  margin-top:  -10px;
}
.total-bride-feature-card img{
  height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}
.total-success{
  margin-top:  -10px;
}
.total-success-feature-card img{
  height: 80px;
    width: 80px;
    border: 5px solid #fff;
    position: relative;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 50%;
    box-shadow: 0px 2px 7px 6px rgba(0, 0, 0, 0.2);
    margin-left:  auto;
    margin-right:  auto;
    margin-top:  0px;
    margin-bottom:  20px;
    display: block;
}

@media (min-width: 788px) {
  .cards-container { 
    width: 728px;
  }
  /* Clear Fix */
  .cards-container::after {
    content: "";
    clear: both;
    display: table;
  }
}

@media (min-width: 1166px) {
  .cards-container {
    width: 1106px;
  }
}


[class$='feature-card'] {
  /* Positioning and Sizing */
  position: relative;
  box-sizing: border-box;
  width: 350px; height: 250px;
  margin: 0;
  padding: 32px;

  /* Box Details */
  border-radius: 10px;
  border-top: solid 5px black;
  box-shadow: 2px 5px 20px rgb(0,0,0,0.1);
}


[class$='feature-card'] h2, [class$='feature-card'] p { margin: 0; }


/*
 * ### Top Border Colors Rules
 */

.total-grmbrd-feature-card{
  border-color: #193f4c;
}
.total-groom-feature-card{
  border-color: #00bbff;
}
.total-bride-feature-card{
  border-color: #ff0080;
}
.total-success-feature-card{
  border-color: #15ab15;
}

@media (min-width: 788px) {
  [class$='feature-card'] {
    float: left;
  }

  @media (min-width: 1166px) {
    
    [class$='feature-card']:first-child {
      margin: 140px 0;
    }
   
    [class$='feature-card']:nth-child(2),
    [class$='feature-card']:nth-child(3) {
      margin: 0 22px;
    }

    [class$='feature-card']:last-child {
      margin-top: -110px;
    }

    [class$='feature-card']:nth-child(3) {
      margin-top: 30px;
    }
  }

  @media (max-width: 1165px) {

    [class$='feature-card']:nth-child(3),
    [class$='feature-card']:nth-child(4) {
      margin-top: 30px;
    }

    [class$='feature-card']:nth-child(2),
    [class$='feature-card']:nth-child(4) {
      margin-left: 28px;
    }
  }
}

@media (max-width: 787px) {

  [class$='feature-card'] {
    width: 300px; height: 220px;
    margin: auto;
  }

  [class$='feature-card']:not(:first-child) {
    margin-top: 22px;
  }
}
.cards-container p{
text-align: center;
}
	</style>

<div class="shosurbari-user-statistic">
<h1>Contact Us</h1>
  </div>

  <ul class="cards-container">
    <li class="total-grmbrd-feature-card">
  <div class="total-grmbrd">
    <img src="images/shosurbari-male.jpg" alt="team builder feature icon" />
  </div>
      <a href="mailto: info@shosurbari.com"><h3>info@shosurbari.com</h3></a>
      <p>Send Email</p>
    </li>

    
    
    <li class="total-groom-feature-card">
    <div class="total-groom">
    <img src="images/shosurbari-male.jpg" alt="team builder feature icon" />
    </div>
      <a href="tel: +880 1401 426 404"><h3>+880 1401 426 404</h3></a>
      <p>Call any time</p>
    </li>

    
    
    <li class="total-bride-feature-card">
    <div class="total-bride">
    <img src="images/ShosurBari-female.png" alt="karma feature icon" />
    </div>
      <a href="tel: +880 1568 879 478"><h3>+880 1568 879 478</h3></a>
      <p>Connect with WhatsApp</p>
    </li>

    
    
    <li class="total-success-feature-card">
    <div class="total-success">
    <img src="images/ShosurBari-female.png" alt="karma feature icon" />
    </div>
    <a href="map: Bonpara"><h3>Bonpara, Natore, Rajshahi, Bangladesh</h3></a>
      <p>Our Address</p>
    </li>
  </ul>










<div class="about_middle">
<div class="container">
  <div class="shosurbari-biodata">

    <form action="" method="POST">
	  <div class="flex-container">
    <div class="sb-register-login">

		  <div class="sb-biodata-field" style="background: #00bbff !important;">
		    <h2>Contact <span>Form</span></h2>
      </div>

      <div class="shosurbari-biodata-field">
		    <input type="text" id="name_contactus" placeholder="Your Full Name*" name="name_contactus" value="" size="60" maxlength="60" class="form-text required" required>
		  </div>

      <div class="shosurbari-biodata-field">
		    <input type="number_contactus" id="number_contactus" placeholder="Your Number*" name="number_contactus" value="" size="60" maxlength="60" class="form-text required" required>
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


      <div class="shosurbari-biodata-field">
	      <input type="text" id="email_contactus" name="email_contactus" placeholder="Email (Optional)" value="" size="100" maxlength="100" class="form-text required">
      </div>

      <div class="shosurbari-biodata-field">
				<textarea rows="4" id="message_contactus" name="message_contactus"  placeholder="Write Message*..." class="form-text-describe" required></textarea>
		  </div>

			<div class="form-actions">
			  <button  type="submit" id="submit" name="submit" class="btn_4 submit">Submit</button>
			</div>

    </div>
    </div>
	  </form>

  </div>
</div>
</div>



<?php include_once("footer.php");?>

</body>
</html>	
