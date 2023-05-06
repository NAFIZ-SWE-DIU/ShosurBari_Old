<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Search - ShosurBari</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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






<div class="flex-container-shosurbaribio">


<script>
let label = document.querySelector('.toggle-next');
let checkbox = document.querySelector('#Lorems');

label.addEventListener('click', () => {
  if (checkbox.style.display === 'none') {
    checkbox.style.display = 'block';
  } else {
    checkbox.style.display = 'none';
  }
});
  </script>



<!-- Biodata Profile count -->






















<div id="search-bar">
                                  <div class="sb_mobilesearch">

<div class="sb_singlebio_mobilesearch">
<div class="search-title">
<h4> Find Single Profile </h4>
</div>

<input type="text"  id="profid" name="profid" placeholder="Enter Biodata Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
<button type="submit" onclick="viewprofile();"  value="search">Search Biodata</button>
          <script type="text/javascript">
            function viewprofile(){
              var profid=document.getElementById("profid").value;
              window.location.href="viewpro.php?id="+profid;
            }
          </script>
</div>

<div id="search-button">
  Search Filter
</div>

                                         </div>

<div id="filters">
<div class="sbbiodata-search-mobile">

<form action="" method="post">

<div id="close-button">
  Close
</div>

<div class="search-title">
<h4> Find Multiple Profile</h4>
</div>


<div class="wrapper">
<div class="gender-radio-select">
<label class="ellipsis" for="Looking">Looking :</label>
  <div class="gender-option">
      <input type="radio" name="biodatagender" id="male_mob" value="Male" required/>
      <label for="male_mob"><i class="fa fa-male"></i> Groom</label>
  </div>
  
  <div class="gender-option">
      <input type="radio" name="biodatagender" id="female_mob" value="Female"/>
      <label for="female_mob"><i class="fa fa-female"></i> Bride</label><br>
</div>
</div>
<div id="gender-error-mob" class="error-message" style="display: none; margin-top: 10px; text-align:center;">Please Select Biodatas gender.</div>
</div>








<div class="wrapper">
<label class="form-control toggle-next ellipsis">Religion  <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="religion" value="Any Religion" class="SelectBox all" checked />
      <span>Any Religion</span>
    </label><br>

    <label>
      <input type="checkbox" name="religion" value="Muslim" class="SelectBox val" />
      <span>Muslim</span>
    </label><br>

    <label>
      <input type="checkbox" name="religion" value="Hindu" class="SelectBox val" />
      <span>Hindu</span>
    </label><br>

    <label>
      <input type="checkbox" name="religion" value="Christian" class="SelectBox val" />
      <span>Christian</span>
    </label><br>

    <label>
      <input type="checkbox" name="religion" value="Budhism" class="SelectBox val" />
      <span>Budhism</span>
    </label><br> 
    
    <label>
      <input type="checkbox" name="religion" value="Others" class="SelectBox val" />
      <span>Others</span>
    </label>
    
  </div>
</div>
</div>



<div class="wrapper">
<label class="form-control toggle-next ellipsis">Marital Status <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="maritalstatus" value="Any Marital Status" class="SelectBox all" checked />
      <span>Any Marital Status</span>
    </label><br>

    <label>
      <input type="checkbox" name="maritalstatus" value="Unmarried" class="SelectBox val" />
      <span>Unmarried </span>
    </label><br>

    <label>
      <input type="checkbox" name="maritalstatus" value="Divorced" class="SelectBox val" />
      <span>Divorced</span>
    </label><br>

    <label>
      <input type="checkbox" name="maritalstatus" value="Widow" class="SelectBox val" />
      <span>Widow</span>
    </label><br>

    <label>
      <input type="checkbox" name="maritalstatus" value="Widower" class="SelectBox val" />
      <span>Widower</span>
    </label><br>

    <label>
      <input type="checkbox" name="maritalstatus" value="Married" class="SelectBox val" />
      <span>Married</span>
    </label>
    
  </div>
</div>
</div>




<div class="wrapper">
<label class="form-control toggle-next ellipsis">Skin Tones <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="Skin_tones" value="Any Skin Tones" class="SelectBox all" checked />
      <span>Any Skin Tones</span>
    </label><br>

    <label>
      <input type="checkbox" name="Skin_tones" value="Light" class="SelectBox val" />
      <span>Light</span>
    </label><br>

    <label>
      <input type="checkbox" name="Skin_tones" value="Fair" class="SelectBox val" />
      <span>Fair</span>
    </label><br>

    <label>
      <input type="checkbox" name="Skin_tones" value="Medium" class="SelectBox val" />
      <span>Medium</span>
    </label><br>

    <label>
      <input type="checkbox" name="Skin_tones" value="Dark" class="SelectBox val" />
      <span>Dark</span>
    </label>
    
  </div>
</div>
</div>


<div class="wrapper">
<label class="form-control toggle-next ellipsis">Rasidencial Country <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="rasidencial_country" value="Any Country" class="SelectBox all" checked />
      <span>Any Country</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="Bangladesh" class="SelectBox val" />
      <span>Bangladesh</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="Middleast Country" class="SelectBox val" />
      <span>Middleast</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="Asia Any Country" class="SelectBox val" />
      <span>Asia Any Country</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="Europ Country" class="SelectBox val" />
      <span>Europ</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="North America Country" class="SelectBox val" />
      <span>North America</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="South America Country" class="SelectBox val" />
      <span>South America</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="Africa Country" class="SelectBox val" />
      <span>Africa</span>
    </label><br>

    <label>
      <input type="checkbox" name="rasidencial_country" value="Osania Country" class="SelectBox val" />
      <span>Osania</span>
    </label>
    
  </div>
</div>
</div>



<div class="wrapper">
<label class="form-control toggle-next ellipsis">District <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="permanent_address" value="Any District" class="SelectBox all" checked />
      <span>Any District</span>
    </label><br>

       <!-- B A R I S H A L-->
       <label> Barishal Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Barguna" class="SelectBox val" />
      <span>Barguna</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Barishal" class="SelectBox val" />
      <span>Barishal</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Bhola" class="SelectBox val" />
      <span>Bhola</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Jhalokati" class="SelectBox val" />
      <span>Jhalokati</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Patuakhali" class="SelectBox val" />
      <span>Patuakhali</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Pirojpur" class="SelectBox val" />
      <span>Pirojpur</span>
    </label><br>


                 <!-- C H A T T O G R A M-->
                 <label> Chattagram Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Bandarban" class="SelectBox val" />
      <span>Bandarban</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Brahmanbaria" class="SelectBox val" />
      <span>Brahmanbaria</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Chandpur" class="SelectBox val" />
      <span>Chandpur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Chattogram" class="SelectBox val" />
      <span>Chattogram</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Cumilla" class="SelectBox val" />
      <span>Cumilla</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Coxbazar" class="SelectBox val" />
      <span>Cox's Bazar</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Feni" class="SelectBox val" />
      <span>Feni</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Khagrachhari" class="SelectBox val" />
      <span>Khagrachhari</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Lakshmipur" class="SelectBox val" />
      <span>Lakshmipur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Noakhali" class="SelectBox val" />
      <span>Noakhali</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Rangamati" class="SelectBox val" />
      <span>Rangamati</span>
    </label><br>



       <!--  D H A K A-->
       <label> Dhaka Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Dhaka" class="SelectBox val" />
      <span>Dhaka</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Faridpur" class="SelectBox val" />
      <span>Faridpur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Gazipur" class="SelectBox val" />
      <span>Gazipur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Gopalganj" class="SelectBox val" />
      <span>Gopalganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Kishoreganj" class="SelectBox val" />
      <span>Kishoreganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Madaripur" class="SelectBox val" />
      <span>Madaripur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Manikganj" class="SelectBox val" />
      <span>Manikganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Munshiganj" class="SelectBox val" />
      <span>Munshiganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Narayanganj" class="SelectBox val" />
      <span>Narayanganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Narsingdi" class="SelectBox val" />
      <span>Narsingdi</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Rajbari" class="SelectBox val" />
      <span>Rajbari</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Shariatpur" class="SelectBox val" />
      <span>Shariatpur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Tangail" class="SelectBox val" />
      <span>Tangail</span>
    </label><br>



                 <!-- K H U L N A-->
                 <label> Khulna Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Bagerhat" class="SelectBox val" />
      <span>Bagerhat</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Chuadanga" class="SelectBox val" />
      <span>Chuadanga</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Jashore" class="SelectBox val" />
      <span>Jashore</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Jhenaidah" class="SelectBox val" />
      <span>Jhenaidah</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Khulna" class="SelectBox val" />
      <span>Khulna</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Kushtia" class="SelectBox val" />
      <span>Kushtia</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Magura" class="SelectBox val" />
      <span>Magura</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Meherpur" class="SelectBox val" />
      <span>Meherpur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Narail" class="SelectBox val" />
      <span>Narail</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Satkhira" class="SelectBox val" />
      <span>Satkhira</span>
    </label><br>



    <!-- M Y M E N S I N G H-->
    <label> Mymensingh Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Jamalpur" class="SelectBox val" />
      <span>Jamalpur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Mymensingh" class="SelectBox val" />
      <span>Mymensingh</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Netrokona" class="SelectBox val" />
      <span>Netrokona</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Sherpur" class="SelectBox val" />
      <span>Sherpur</span>
    </label><br>


              <!--  R A J S H A H I-->
              <label> Rajshahi Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Bogura" class="SelectBox val" />
      <span>Bogura</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="ChapaiNawabganj" class="SelectBox val" />
      <span>Chapai Nawabganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Joypurhat" class="SelectBox val" />
      <span>Joypurhat</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Naogaon" class="SelectBox val" />
      <span>Naogaon</span>
    </label><br>

    <label>
    <input type="checkbox" name="permanent_address" value="Natore" class="SelectBox val" />
      <span>Natore</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Pabna" class="SelectBox val" />
      <span>Pabna</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Rajshahi" class="SelectBox val" />
      <span>Rajshahi</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Sirajganj" class="SelectBox val" />
      <span>Sirajganj</span>
    </label><br>


    <!--  R A N G P U R-->
    <label> Rangpur Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Dinajpur" class="SelectBox val" />
      <span>Dinajpur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Gaibandha" class="SelectBox val" />
      <span>Gaibandha</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Kurigram" class="SelectBox val" />
      <span>Kurigram</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Lalmonirhat" class="SelectBox val" />
      <span>Lalmonirhat</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Nilphamari" class="SelectBox val" />
      <span>Nilphamari</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Panchagarh" class="SelectBox val" />
      <span>Panchagarh</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Rangpur" class="SelectBox val" />
      <span>Rangpur</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Thakurgaon" class="SelectBox val" />
      <span>Thakurgaon</span>
    </label><br>


              <!-- S Y L H E T-->
              <label> Sylhet Division</label> <br>
    <label>
      <input type="checkbox" name="permanent_address" value="Habiganj" class="SelectBox val" />
      <span>Habiganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Moulvibazar" class="SelectBox val" />
      <span>Moulvibazar</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Sunamganj" class="SelectBox val" />
      <span>Sunamganj</span>
    </label><br>

    <label>
      <input type="checkbox" name="permanent_address" value="Sylhet" class="SelectBox val" />
      <span>Sylhet</span>
    </label>
    
  </div>
</div>
</div>





<div class="wrapper">
<label class="form-control toggle-next ellipsis">Family Condition <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="family_class" value="Any Family Condition" class="SelectBox all" checked />
      <span>Any Family Condition</span>
    </label><br>

    <label>
      <input type="checkbox" name="family_class" value="Higher Class" class="SelectBox val" />
      <span>Higher Class</span>
    </label><br>

    <label>
      <input type="checkbox" name="family_class" value="Higher Middle Class" class="SelectBox val" />
      <span>Higher Middle Class</span>
    </label><br>

    <label>
      <input type="checkbox" name="family_class" value="Middle Class" class="SelectBox val" />
      <span>Middle Class</span>
    </label><br>

    <label>
      <input type="checkbox" name="family_class" value="Lower Middle Class" class="SelectBox val" />
      <span>Lower Middle Class</span>
    </label><br> 
    
    <label>
      <input type="checkbox" name="family_class" value="Lower Class" class="SelectBox val" />
      <span>Lower Class</span>
    </label>
    
  </div>
</div>
</div>







<div class="wrapper">
<label class="form-control toggle-next ellipsis">Occupation <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="occupation" value="Any District" class="SelectBox all" checked />
      <span>Any Occupation</span>
    </label><br>

       <!-- Students Sector-->
       <label> Students Sector</label> <br>


<!-- SSC -->
<label>School</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Kawmi Madrasa Student" class="SelectBox val" />
      <span>Kawmi Madrasa Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Dakhil Student" class="SelectBox val" />
      <span>Dakhil Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="High School Student" class="SelectBox val" />
      <span>High School Student</span>
    </label><br>


<!-- HSC -->
<label>College</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="College Student" class="SelectBox val" />
      <span>College Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Alim Student" class="SelectBox val" />
      <span>Alim Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Politechnical Student" class="SelectBox val" />
      <span>Politechnical Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Nursing Student" class="SelectBox val" />
      <span>Nursing Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Midwifary Student" class="SelectBox val" />
      <span>Midwifary Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Peramedical Student" class="SelectBox val" />
      <span>Peramedical Student</span>
    </label><br>


<!-- Honours -->
<label>University Undergraduate</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Medical Student" class="SelectBox val" />
      <span>Medical Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Pharmacy Student" class="SelectBox val" />
      <span>Pharmacy Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="B.Sc. Engineering Student" class="SelectBox val" />
      <span>B.Sc. Engineering Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="B.Sc. Student" class="SelectBox val" />
      <span>B.Sc. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="B.A. Student" class="SelectBox val" />
      <span>B.A. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="B.Com. Student" class="SelectBox val" />
      <span>B.Com. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Fazil Student" class="SelectBox val" />
      <span>Fazil Student</span>
    </label><br>

    <label>University Postgraduate</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="M.Sc. Student" class="SelectBox val" />
      <span>M.Sc. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="M.A. Student" class="SelectBox val" />
      <span>M.A. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="M.Com. Student" class="SelectBox val" />
      <span>M.Com. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Kamil Student" class="SelectBox val" />
      <span>Kamil Student</span>
    </label><br>


<!-- Medical & Health Sector -->
    <label> Medical & Health Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="MBBS Doctor" class="SelectBox val" />
      <span>MBBS Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Internship Doctor" class="SelectBox val" />
      <span>Internship Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Specialist Doctor" class="SelectBox val" />
      <span>Specialist Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Pharmacist" class="SelectBox val" />
      <span>Pharmacist</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Diploma Doctor" class="SelectBox val" />
      <span>Diploma Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Nurse" class="SelectBox val" />
      <span>Nurse</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Midwife" class="SelectBox val" />
      <span>Midwife</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Village Doctor" class="SelectBox val" />
      <span>Village Doctor</span>
    </label><br>



<!--  Engineers Sector-->
    <label> Engineer Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Aerospace Engineer" class="SelectBox val" />
      <span>Aerospace Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Agricultural Engineer" class="SelectBox val" />
      <span>Agricultural Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Architectural Engineer" class="SelectBox val" />
      <span>Architectural Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Biomedical Engineer" class="SelectBox val" />
      <span>Biomedical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Chemical Engineer" class="SelectBox val" />
      <span>Chemical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Civil Engineer" class="SelectBox val" />
      <span>Civil Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Electrical Engineer" class="SelectBox val" />
      <span>Electrical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Marine Engineer" class="SelectBox val" />
      <span>Marine Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Mechanical Engineer" class="SelectBox val" />
      <span>Mechanical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Network Engineer" class="SelectBox val" />
      <span>Network Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Robotics Engineer" class="SelectBox val" />
      <span>Robotics Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Software Engineer" class="SelectBox val" />
      <span>Software Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Textile Engineer" class="SelectBox val" />
      <span>Textile Engineer</span>
    </label><br>



 <!-- Teachers Profession -->
    <label>Teacher Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Kawmi Madrasa Teacher" class="SelectBox val" />
      <span>Kawmi Madrasa Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Aliya Madrasa Teacher" class="SelectBox val" />
      <span>Aliya Madrasa Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Primary School Teacher" class="SelectBox val" />
      <span>Primary School Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="High School Teacher" class="SelectBox val" />
      <span>High School Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="College Professor" class="SelectBox val" />
      <span>College Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Public University Professor" class="SelectBox val" />
      <span>Public University Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Private University Professor" class="SelectBox val" />
      <span>Private University Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="National University Professor" class="SelectBox val" />
      <span>National University Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Degree Professor" class="SelectBox val" />
      <span>Degree Professor</span>
    </label><br>



    <!-- Defense Profession-->
    <label>Defense Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Army" class="SelectBox val" />
      <span>Army</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Air Force" class="SelectBox val" />
      <span>Air Force</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Navy" class="SelectBox val" />
      <span>Navy</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Police" class="SelectBox val" />
      <span>Police</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Ansar" class="SelectBox val" />
      <span>Ansar</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Fire Service" class="SelectBox val" />
      <span>Fire Service</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="RAB" class="SelectBox val" />
      <span>RAB</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="DB" class="SelectBox val" />
      <span>DB</span>
    </label> <br>



 <!-- Working Forign Sector-->
    <label>Foreign Work/ Job /Business </label> <br>
    <label>
      <input type="checkbox" name="working_forign" value="Middleast Work/ Job /Business" class="SelectBox val" />
      <span>Middleast Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Europ Work/ Job /Business" class="SelectBox val" />
      <span>Europ Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="America Work/ Job /Business" class="SelectBox val" />
      <span>America Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Asia Work/ Job /Business" class="SelectBox val" />
      <span>Asia Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Africa Work/ Job /Business" class="SelectBox val" />
      <span>Africa Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Oceania Work/ Job /Business" class="SelectBox val" />
      <span>Oceania Work/ Job /Business</span>
    </label><br>


    <!-- Garments Sector-->
    <label> Garments Sector </label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Garments Worker" class="SelectBox val" />
      <span>Garments Worker</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Garments Manager" class="SelectBox val" />
      <span>Garments Manager</span>
    </label><br>


<!--  Driver Profession -->
      <label> Driver Profession </label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Bus Driver" class="SelectBox val" />
      <span>Bus Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Micro Driver" class="SelectBox val" />
      <span>Micro Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Car Driver" class="SelectBox val" />
      <span>Car Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Truck Driver" class="SelectBox val" />
      <span>Truck Driver</span>
    </label><br>

    <label>
    <input type="checkbox" name="occupation" value="CNG Driver" class="SelectBox val" />
      <span>CNG Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Auto Driver" class="SelectBox val" />
      <span>Auto Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="UbarPathao Rider" class="SelectBox val" />
      <span>Ubar/Pathao Rider</span>
    </label><br>


    
<!-- Common Profession-->
<label>Common Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Banker" class="SelectBox val" />
      <span>Banker</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Lawyer" class="SelectBox val" />
      <span>Lawyer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Business" class="SelectBox val" />
      <span>Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Entrepreneur" class="SelectBox val" />
      <span>Entrepreneur</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Frelancer" class="SelectBox val" />
      <span>Frelancer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Graphics Desigener" class="SelectBox val" />
      <span>Graphics Desigener</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Sales & Marketing (SR)" class="SelectBox val" />
      <span>Sales & Marketing (SR)</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="No Profession" class="SelectBox val" />
      <span>No Profession</span>
    </label> <br>
    
  </div>
</div>
</div>




<div class="wrapper">
<label class="form-control toggle-next ellipsis">Education Method <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="education_method" value="Any Education Method" class="SelectBox all" checked />
      <span>Any Education Method</span>
    </label><br>

    <label>
      <input type="checkbox" name="education_method" value="Genaral" class="SelectBox val" />
      <span>Genaral</span>
    </label><br>

    <label>
      <input type="checkbox" name="education_method" value="Dakhil" class="SelectBox val" />
      <span>Dakhil</span>
    </label><br>

    <label>
      <input type="checkbox" name="education_method" value="Technical" class="SelectBox val" />
      <span>Technical</span>
    </label><br>

    <label>
      <input type="checkbox" name="education_method" value="Qawmi Madrasa" class="SelectBox val" />
      <span>Qawmi Madrasa</span>
    </label><br>
    
    <label>
      <input type="checkbox" name="education_method" value="Other" class="SelectBox val" />
      <span>Other</span>
    </label><br> 
    
    <label>
      <input type="checkbox" name="education_method" value="None" class="SelectBox val" />
      <span>None</span>
    </label>
    
  </div>
</div>
</div>


<div class="form_but1">
<div class="clearfix"> </div>
<input type="submit" name="search" value="Search Biodatas" onclick="return validateForm();"/>
</div>

</form>
</div>
</div>
</div>




























































<div class="heart-divider">
      <h1>Find your perfect <span>Partner</span></h1>
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>



  <script>
document.addEventListener("DOMContentLoaded", function() {
  var countDisplay = document.querySelector(".count-display");
  if(countDisplay) {
    countDisplay.innerHTML = "Found " + count + " profiles";
  }
});
</script>
<div class="count-display">Found <span> <script>document.write(count)</script></span> profiles</div>


</div>



<div class="sbbiodata-search">

<div class="sb_singlebio_search">
<div class="search-title">
<h4> Find Single Profile</h4>
</div>

<input type="text"  id="sbprofid" name="sbprofid" placeholder="Enter Biodata Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
<button type="submit" onclick="viewprofile2();"  value="search">Search Biodata</button>
          <script type="text/javascript">
            function viewprofile2(){
              var sbprofid=document.getElementById("sbprofid").value;
              window.location.href="viewpro.php?id="+sbprofid;
            }
          </script>
</div>

<form action="" method="post">
<div class="search-title">
<h4>Find Multiple Profile</h4>
</div>

<div class="wrapper">
<div class="gender-radio-select">
<label class="ellipsis" for="Looking">Looking :</label>
        <div class="gender-option">
            <input type="radio" name="biodatagender" id="male" value="Male" required/>
            <label for="male"><i class="fa fa-male"></i> Groom</label>
        </div>

        <div class="gender-option">
            <input type="radio" name="biodatagender" id="female" value="Female"/>
            <label for="female"><i class="fa fa-female"></i> Bride</label><br>
		</div>
    </div>
    <div id="gender-error-laptop" class="error-message" style="display: none; margin-top: 10px; text-align:center;">Please Select Biodatas gender.</div>
</div>


<script>
    function validateForm() {
        var biodataGender = document.querySelector('input[name="biodatagender"]:checked');
        if (!biodataGender) {
            var errorDiv;
            if (window.innerWidth <= 768) {
                errorDiv = document.getElementById('gender-error-mob');
            } else {
                errorDiv = document.getElementById('gender-error-laptop');
            }
            errorDiv.style.display = 'block';
            errorDiv.classList.add('fade-in');

            // Change color multiple times
            var colors = ['green', 'blue', 'red'];
            var colorIndex = 0;
            setInterval(function() {
                errorDiv.style.color = colors[colorIndex];
                colorIndex = (colorIndex + 1) % colors.length;
            }, 500);

            // Scroll the error message to the center of the window
            var windowHeight = window.innerHeight;
            var errorDivHeight = errorDiv.offsetHeight;
            var scrollPosition = errorDiv.offsetTop - (windowHeight - errorDivHeight) / 2;
            window.scrollTo({ top: scrollPosition, behavior: 'smooth' });

            return false;
        }
        return true;
    }
</script>

<div class="wrapper">
  <label class="form-control toggle-next ellipsis">Religion  <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
      <div class="checkboxes" id="Lorems">
        
        <div class="inner-wrap">
          
          <label>
            <input type="checkbox" name="religion" value="Any Religion" class="SelectBox all" checked />
            <span>Any Religion</span>
          </label><br>

          <label>
            <input type="checkbox" name="religion" value="Muslim" class="SelectBox val" />
            <span>Muslim</span>
          </label><br>

          <label>
            <input type="checkbox" name="religion" value="Hindu" class="SelectBox val" />
            <span>Hindu</span>
          </label><br>

          <label>
            <input type="checkbox" name="religion" value="Christian" class="SelectBox val" />
            <span>Christian</span>
          </label><br>

          <label>
            <input type="checkbox" name="religion" value="Budhism" class="SelectBox val" />
            <span>Budhism</span>
          </label><br> 
          
          <label>
            <input type="checkbox" name="religion" value="Others" class="SelectBox val" />
            <span>Others</span>
          </label>
          
        </div>
      </div>
    </div>



  <div class="wrapper">
  <label class="form-control toggle-next ellipsis">Marital Status <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
      <div class="checkboxes" id="Lorems">
        
        <div class="inner-wrap">
          
          <label>
            <input type="checkbox" name="maritalstatus" value="Any Marital Status" class="SelectBox all" checked />
            <span>Any Marital Status</span>
          </label><br>

          <label>
            <input type="checkbox" name="maritalstatus" value="Unmarried" class="SelectBox val" />
            <span>Unmarried </span>
          </label><br>

          <label>
            <input type="checkbox" name="maritalstatus" value="Divorced" class="SelectBox val" />
            <span>Divorced</span>
          </label><br>

          <label>
            <input type="checkbox" name="maritalstatus" value="Widow" class="SelectBox val" />
            <span>Widow</span>
          </label><br>

          <label>
            <input type="checkbox" name="maritalstatus" value="Widower" class="SelectBox val" />
            <span>Widower</span>
          </label><br>

          <label>
            <input type="checkbox" name="maritalstatus" value="Married" class="SelectBox val" />
            <span>Married</span>
          </label>
          
        </div>
      </div>
    </div>


  <script>
  $(function() {
  
  setCheckboxSelectLabels();
  
  $('.toggle-next').click(function() {
    $(this).next('.checkboxes').slideToggle(400);
  });
  
  $('.SelectBox').change(function() {
    toggleCheckedAll(this);
    setCheckboxSelectLabels(); 
  });
  
});
  
function setCheckboxSelectLabels(elem) {
  var wrappers = $('.wrapper'); 
  $.each( wrappers, function( key, wrapper ) {
    var checkboxes = $(wrapper).find('.SelectBox');
    var label = $(wrapper).find('.checkboxes').attr('id');
    var prevText = '';
    $.each( checkboxes, function( i, checkbox ) {
      var button = $(wrapper).find('button');
      if( $(checkbox).prop('checked') == true) {
        var text = $(checkbox).next().html();
        var btnText = prevText + text;
        var numberOfChecked = $(wrapper).find('input.val:checkbox:checked').length;
        if(numberOfChecked >= 4) {
           btnText = numberOfChecked +' '+ label + ' selected';
        }
        $(button).text(btnText); 
        prevText = btnText + ', ';
      }
    });
  });
}

function toggleCheckedAll(checkbox) {
  var apply = $(checkbox).closest('.wrapper').find('.apply-selection');
  apply.fadeIn('slow'); 
  
  var val = $(checkbox).closest('.checkboxes').find('.val');
  var all = $(checkbox).closest('.checkboxes').find('.all');
  var SelectBox = $(checkbox).closest('.checkboxes').find('.SelectBox');

  if(!$(SelectBox).is(':checked')) {
    $(all).prop('checked', true);
    return;
  }

  if( $(checkbox).hasClass('all') ) {
    $(val).prop('checked', false);
  } else {
    $(all).prop('checked', false);
  }
}
</script>

<div class="wrapper">
  <label class="form-control toggle-next ellipsis">Skin Tones <span style="color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
      <div class="checkboxes" id="Lorems">
        
        <div class="inner-wrap">
          
          <label>
            <input type="checkbox" name="Skin_tones" value="Any Skin Tones" class="SelectBox all" checked />
            <span>Any Skin Tones</span>
          </label><br>

          <label>
            <input type="checkbox" name="Skin_tones" value="Light" class="SelectBox val" />
            <span>Light</span>
          </label><br>

          <label>
            <input type="checkbox" name="Skin_tones" value="Fair" class="SelectBox val" />
            <span>Fair</span>
          </label><br>

          <label>
            <input type="checkbox" name="Skin_tones" value="Medium" class="SelectBox val" />
            <span>Medium</span>
          </label><br>

          <label>
            <input type="checkbox" name="Skin_tones" value="Dark" class="SelectBox val" />
            <span>Dark</span>
          </label>
          
        </div>
      </div>
    </div>


    <div class="wrapper">
  <label class="form-control toggle-next ellipsis">Rasidencial Country <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
      <div class="checkboxes" id="Lorems">
        
        <div class="inner-wrap">
          
          <label>
            <input type="checkbox" name="rasidencial_country" value="Any Country" class="SelectBox all" checked />
            <span>Any Country</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="Bangladesh" class="SelectBox val" />
            <span>Bangladesh</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="Middleast Country" class="SelectBox val" />
            <span>Middleast</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="Asia Any Country" class="SelectBox val" />
            <span>Asia Any Country</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="Europ Country" class="SelectBox val" />
            <span>Europ</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="North America Country" class="SelectBox val" />
            <span>North America</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="South America Country" class="SelectBox val" />
            <span>South America</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="Africa Country" class="SelectBox val" />
            <span>Africa</span>
          </label><br>

          <label>
            <input type="checkbox" name="rasidencial_country" value="Osania Country" class="SelectBox val" />
            <span>Osania</span>
          </label>
          
        </div>
      </div>
    </div>



    <div class="wrapper">
  <label class="form-control toggle-next ellipsis">District <span style="color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
      <div class="checkboxes" id="Lorems">
        
        <div class="inner-wrap">
          
          <label>
            <input type="checkbox" name="permanent_address" value="Any District" class="SelectBox all" checked />
            <span>Any District</span>
          </label><br>

             <!-- B A R I S H A L-->
             <label> Barishal Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Barguna" class="SelectBox val" />
            <span>Barguna</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Barishal" class="SelectBox val" />
            <span>Barishal</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Bhola" class="SelectBox val" />
            <span>Bhola</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Jhalokati" class="SelectBox val" />
            <span>Jhalokati</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Patuakhali" class="SelectBox val" />
            <span>Patuakhali</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Pirojpur" class="SelectBox val" />
            <span>Pirojpur</span>
          </label><br>


                       <!-- C H A T T O G R A M-->
                       <label> Chattagram Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Bandarban" class="SelectBox val" />
            <span>Bandarban</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Brahmanbaria" class="SelectBox val" />
            <span>Brahmanbaria</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Chandpur" class="SelectBox val" />
            <span>Chandpur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Chattogram" class="SelectBox val" />
            <span>Chattogram</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Cumilla" class="SelectBox val" />
            <span>Cumilla</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Coxbazar" class="SelectBox val" />
            <span>Cox's Bazar</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Feni" class="SelectBox val" />
            <span>Feni</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Khagrachhari" class="SelectBox val" />
            <span>Khagrachhari</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Lakshmipur" class="SelectBox val" />
            <span>Lakshmipur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Noakhali" class="SelectBox val" />
            <span>Noakhali</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Rangamati" class="SelectBox val" />
            <span>Rangamati</span>
          </label><br>



             <!--  D H A K A-->
             <label> Dhaka Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Dhaka" class="SelectBox val" />
            <span>Dhaka</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Faridpur" class="SelectBox val" />
            <span>Faridpur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Gazipur" class="SelectBox val" />
            <span>Gazipur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Gopalganj" class="SelectBox val" />
            <span>Gopalganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Kishoreganj" class="SelectBox val" />
            <span>Kishoreganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Madaripur" class="SelectBox val" />
            <span>Madaripur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Manikganj" class="SelectBox val" />
            <span>Manikganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Munshiganj" class="SelectBox val" />
            <span>Munshiganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Narayanganj" class="SelectBox val" />
            <span>Narayanganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Narsingdi" class="SelectBox val" />
            <span>Narsingdi</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Rajbari" class="SelectBox val" />
            <span>Rajbari</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Shariatpur" class="SelectBox val" />
            <span>Shariatpur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Tangail" class="SelectBox val" />
            <span>Tangail</span>
          </label><br>



                       <!-- K H U L N A-->
                       <label> Khulna Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Bagerhat" class="SelectBox val" />
            <span>Bagerhat</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Chuadanga" class="SelectBox val" />
            <span>Chuadanga</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Jashore" class="SelectBox val" />
            <span>Jashore</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Jhenaidah" class="SelectBox val" />
            <span>Jhenaidah</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Khulna" class="SelectBox val" />
            <span>Khulna</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Kushtia" class="SelectBox val" />
            <span>Kushtia</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Magura" class="SelectBox val" />
            <span>Magura</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Meherpur" class="SelectBox val" />
            <span>Meherpur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Narail" class="SelectBox val" />
            <span>Narail</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Satkhira" class="SelectBox val" />
            <span>Satkhira</span>
          </label><br>



          <!-- M Y M E N S I N G H-->
          <label> Mymensingh Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Jamalpur" class="SelectBox val" />
            <span>Jamalpur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Mymensingh" class="SelectBox val" />
            <span>Mymensingh</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Netrokona" class="SelectBox val" />
            <span>Netrokona</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Sherpur" class="SelectBox val" />
            <span>Sherpur</span>
          </label><br>


                    <!--  R A J S H A H I-->
                    <label> Rajshahi Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Bogura" class="SelectBox val" />
            <span>Bogura</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="ChapaiNawabganj" class="SelectBox val" />
            <span>Chapai Nawabganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Joypurhat" class="SelectBox val" />
            <span>Joypurhat</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Naogaon" class="SelectBox val" />
            <span>Naogaon</span>
          </label><br>

          <label>
          <input type="checkbox" name="permanent_address" value="Natore" class="SelectBox val" />
            <span>Natore</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Pabna" class="SelectBox val" />
            <span>Pabna</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Rajshahi" class="SelectBox val" />
            <span>Rajshahi</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Sirajganj" class="SelectBox val" />
            <span>Sirajganj</span>
          </label><br>


          <!--  R A N G P U R-->
          <label> Rangpur Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Dinajpur" class="SelectBox val" />
            <span>Dinajpur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Gaibandha" class="SelectBox val" />
            <span>Gaibandha</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Kurigram" class="SelectBox val" />
            <span>Kurigram</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Lalmonirhat" class="SelectBox val" />
            <span>Lalmonirhat</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Nilphamari" class="SelectBox val" />
            <span>Nilphamari</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Panchagarh" class="SelectBox val" />
            <span>Panchagarh</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Rangpur" class="SelectBox val" />
            <span>Rangpur</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Thakurgaon" class="SelectBox val" />
            <span>Thakurgaon</span>
          </label><br>


                    <!-- S Y L H E T-->
                    <label> Sylhet Division</label> <br>
          <label>
            <input type="checkbox" name="permanent_address" value="Habiganj" class="SelectBox val" />
            <span>Habiganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Moulvibazar" class="SelectBox val" />
            <span>Moulvibazar</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Sunamganj" class="SelectBox val" />
            <span>Sunamganj</span>
          </label><br>

          <label>
            <input type="checkbox" name="permanent_address" value="Sylhet" class="SelectBox val" />
            <span>Sylhet</span>
          </label>
          
        </div>
      </div>
    </div>

  



    <div class="wrapper">
  <label class="form-control toggle-next ellipsis">Family Condition <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
      <div class="checkboxes" id="Lorems">
        
        <div class="inner-wrap">
          
          <label>
            <input type="checkbox" name="family_class" value="Any Family Condition" class="SelectBox all" checked />
            <span>Any Family Condition</span>
          </label><br>

          <label>
            <input type="checkbox" name="family_class" value="Higher Class" class="SelectBox val" />
            <span>Higher Class</span>
          </label><br>

          <label>
            <input type="checkbox" name="family_class" value="Higher Middle Class" class="SelectBox val" />
            <span>Higher Middle Class</span>
          </label><br>

          <label>
            <input type="checkbox" name="family_class" value="Middle Class" class="SelectBox val" />
            <span>Middle Class</span>
          </label><br>

          <label>
            <input type="checkbox" name="family_class" value="Lower Middle Class" class="SelectBox val" />
            <span>Lower Middle Class</span>
          </label><br> 
          
          <label>
            <input type="checkbox" name="family_class" value="Lower Class" class="SelectBox val" />
            <span>Lower Class</span>
          </label>
          
        </div>
      </div>
    </div>







    <div class="wrapper">
<label class="form-control toggle-next ellipsis">Occupation <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
<div class="checkboxes" id="Lorems">
  
  <div class="inner-wrap">
    
    <label>
      <input type="checkbox" name="occupation" value="Any District" class="SelectBox all" checked />
      <span>Any Occupation</span>
    </label><br>

       <!-- Students Sector-->
       <label> Students Sector</label> <br>


<!-- SSC -->
<label>School</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Kawmi Madrasa Student" class="SelectBox val" />
      <span>Kawmi Madrasa Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Dakhil Student" class="SelectBox val" />
      <span>Dakhil Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="High School Student" class="SelectBox val" />
      <span>High School Student</span>
    </label><br>


<!-- HSC -->
<label>College</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="College Student" class="SelectBox val" />
      <span>College Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Alim Student" class="SelectBox val" />
      <span>Alim Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Politechnical Student" class="SelectBox val" />
      <span>Politechnical Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Nursing Student" class="SelectBox val" />
      <span>Nursing Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Midwifary Student" class="SelectBox val" />
      <span>Midwifary Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Peramedical Student" class="SelectBox val" />
      <span>Peramedical Student</span>
    </label><br>


<!-- Honours -->
<label>University Undergraduate</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Medical Student" class="SelectBox val" />
      <span>Medical Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Pharmacy Student" class="SelectBox val" />
      <span>Pharmacy Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="B.Sc. Engineering Student" class="SelectBox val" />
      <span>B.Sc. Engineering Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="B.Sc. Student" class="SelectBox val" />
      <span>B.Sc. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="B.A. Student" class="SelectBox val" />
      <span>B.A. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="B.Com. Student" class="SelectBox val" />
      <span>B.Com. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Fazil Student" class="SelectBox val" />
      <span>Fazil Student</span>
    </label><br>

    <label>University Postgraduate</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="M.Sc. Student" class="SelectBox val" />
      <span>M.Sc. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="M.A. Student" class="SelectBox val" />
      <span>M.A. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="M.Com. Student" class="SelectBox val" />
      <span>M.Com. Student</span>
    </label><br>
    <label>
      <input type="checkbox" name="occupation" value="Kamil Student" class="SelectBox val" />
      <span>Kamil Student</span>
    </label><br>


<!-- Medical & Health Sector -->
    <label> Medical & Health Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="MBBS Doctor" class="SelectBox val" />
      <span>MBBS Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Internship Doctor" class="SelectBox val" />
      <span>Internship Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Specialist Doctor" class="SelectBox val" />
      <span>Specialist Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Pharmacist" class="SelectBox val" />
      <span>Pharmacist</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Diploma Doctor" class="SelectBox val" />
      <span>Diploma Doctor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Nurse" class="SelectBox val" />
      <span>Nurse</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Midwife" class="SelectBox val" />
      <span>Midwife</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Village Doctor" class="SelectBox val" />
      <span>Village Doctor</span>
    </label><br>



<!--  Engineers Sector-->
    <label> Engineer Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Aerospace Engineer" class="SelectBox val" />
      <span>Aerospace Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Agricultural Engineer" class="SelectBox val" />
      <span>Agricultural Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Architectural Engineer" class="SelectBox val" />
      <span>Architectural Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Biomedical Engineer" class="SelectBox val" />
      <span>Biomedical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Chemical Engineer" class="SelectBox val" />
      <span>Chemical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Civil Engineer" class="SelectBox val" />
      <span>Civil Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Electrical Engineer" class="SelectBox val" />
      <span>Electrical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Marine Engineer" class="SelectBox val" />
      <span>Marine Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Mechanical Engineer" class="SelectBox val" />
      <span>Mechanical Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Network Engineer" class="SelectBox val" />
      <span>Network Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Robotics Engineer" class="SelectBox val" />
      <span>Robotics Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Software Engineer" class="SelectBox val" />
      <span>Software Engineer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Textile Engineer" class="SelectBox val" />
      <span>Textile Engineer</span>
    </label><br>



 <!-- Teachers Profession -->
    <label>Teacher Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Kawmi Madrasa Teacher" class="SelectBox val" />
      <span>Kawmi Madrasa Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Aliya Madrasa Teacher" class="SelectBox val" />
      <span>Aliya Madrasa Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Primary School Teacher" class="SelectBox val" />
      <span>Primary School Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="High School Teacher" class="SelectBox val" />
      <span>High School Teacher</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="College Professor" class="SelectBox val" />
      <span>College Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Public University Professor" class="SelectBox val" />
      <span>Public University Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Private University Professor" class="SelectBox val" />
      <span>Private University Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="National University Professor" class="SelectBox val" />
      <span>National University Professor</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Degree Professor" class="SelectBox val" />
      <span>Degree Professor</span>
    </label><br>



    <!-- Defense Profession-->
    <label>Defense Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Army" class="SelectBox val" />
      <span>Army</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Air Force" class="SelectBox val" />
      <span>Air Force</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Navy" class="SelectBox val" />
      <span>Navy</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Police" class="SelectBox val" />
      <span>Police</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Ansar" class="SelectBox val" />
      <span>Ansar</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Fire Service" class="SelectBox val" />
      <span>Fire Service</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="RAB" class="SelectBox val" />
      <span>RAB</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="DB" class="SelectBox val" />
      <span>DB</span>
    </label> <br>



 <!-- Working Forign Sector-->
    <label>Foreign Work/ Job /Business </label> <br>
    <label>
      <input type="checkbox" name="working_forign" value="Middleast Work/ Job /Business" class="SelectBox val" />
      <span>Middleast Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Europ Work/ Job /Business" class="SelectBox val" />
      <span>Europ Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="America Work/ Job /Business" class="SelectBox val" />
      <span>America Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Asia Work/ Job /Business" class="SelectBox val" />
      <span>Asia Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Africa Work/ Job /Business" class="SelectBox val" />
      <span>Africa Work/ Job /Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Oceania Work/ Job /Business" class="SelectBox val" />
      <span>Oceania Work/ Job /Business</span>
    </label><br>


    <!-- Garments Sector-->
    <label> Garments Sector </label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Garments Worker" class="SelectBox val" />
      <span>Garments Worker</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Garments Manager" class="SelectBox val" />
      <span>Garments Manager</span>
    </label><br>


<!--  Driver Profession -->
      <label> Driver Profession </label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Bus Driver" class="SelectBox val" />
      <span>Bus Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Micro Driver" class="SelectBox val" />
      <span>Micro Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Car Driver" class="SelectBox val" />
      <span>Car Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Truck Driver" class="SelectBox val" />
      <span>Truck Driver</span>
    </label><br>

    <label>
    <input type="checkbox" name="occupation" value="CNG Driver" class="SelectBox val" />
      <span>CNG Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Auto Driver" class="SelectBox val" />
      <span>Auto Driver</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="UbarPathao Rider" class="SelectBox val" />
      <span>Ubar/Pathao Rider</span>
    </label><br>


    
<!-- Common Profession-->
<label>Common Profession</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Banker" class="SelectBox val" />
      <span>Banker</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Lawyer" class="SelectBox val" />
      <span>Lawyer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Business" class="SelectBox val" />
      <span>Business</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Entrepreneur" class="SelectBox val" />
      <span>Entrepreneur</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Frelancer" class="SelectBox val" />
      <span>Frelancer</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Graphics Desigener" class="SelectBox val" />
      <span>Graphics Desigener</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Sales & Marketing (SR)" class="SelectBox val" />
      <span>Sales & Marketing (SR)</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="No Profession" class="SelectBox val" />
      <span>No Profession</span>
    </label> <br>
    
  </div>
</div>
</div>




    <div class="wrapper">
  <label class="form-control toggle-next ellipsis">Education Method <span style=" color:#ff0080;">   <i class="fa fa-chevron-down"></i></span></label>
      <div class="checkboxes" id="Lorems">
        
        <div class="inner-wrap">
          
          <label>
            <input type="checkbox" name="education_method" value="Any Education Method" class="SelectBox all" checked />
            <span>Any Education Method</span>
          </label><br>

          <label>
            <input type="checkbox" name="education_method" value="Genaral" class="SelectBox val" />
            <span>Genaral</span>
          </label><br>

          <label>
            <input type="checkbox" name="education_method" value="Dakhil" class="SelectBox val" />
            <span>Dakhil</span>
          </label><br>

          <label>
            <input type="checkbox" name="education_method" value="Technical" class="SelectBox val" />
            <span>Technical</span>
          </label><br>

          <label>
            <input type="checkbox" name="education_method" value="Qawmi Madrasa" class="SelectBox val" />
            <span>Qawmi Madrasa</span>
          </label><br>
          
          <label>
            <input type="checkbox" name="education_method" value="Other" class="SelectBox val" />
            <span>Other</span>
          </label><br> 
          
          <label>
            <input type="checkbox" name="education_method" value="None" class="SelectBox val" />
            <span>None</span>
          </label>
          
        </div>
      </div>
    </div>


  <div class="form_but1">
	  <div class="clearfix"> </div>
    <input type="submit" name="search" value="Search Biodatas" onclick="return validateForm();"/>
  </div>

 </form>
</div>







      <div class="sb_biodata_profile">
<!-- main profile -->
<?php

$c_count = 0; //initialize counter to 0

if(isset($_POST['search'])){
  while ($row = mysqli_fetch_assoc($result))
  {
      $profid=$row['user_id'];
      $biodatagender=$row['biodatagender'];
      $Skin_tones=$row['Skin_tones'];
      $height=$row['height'];
      $dateofbirth=$row['dateofbirth'];
      $religion=$row5['religion'];


      $sql2="SELECT * FROM photos WHERE user_id=$profid";
      $result2 = mysqlexec($sql2);
      if($result2)
        $row2=mysqli_fetch_array($result2);
        $pic1=$row2['pic1'];
      

      $sql3="SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";		
      $result3=mysqlexec($sql3);
      if($result3)
        while($row3=mysqli_fetch_assoc($result3))
        $occupation=$row3['occupation'];

                      
        $sql7="SELECT * FROM 3bd_educational_qualifications WHERE user_id=$profid";		
        $result7=mysqlexec($sql7);
        if($result7)
          while($row7=mysqli_fetch_assoc($result7))
          $education_method=$row5['education_method'];


        $sql4="SELECT * FROM 4bd_address_details WHERE user_id=$profid";		
        $result4=mysqlexec($sql4);
        if($result4)
          while($row4=mysqli_fetch_assoc($result4))
          $permanent_address=$row4['permanent_address'];


          $sql6="SELECT * FROM 5bd_family_information WHERE user_id=$profid";		
          $result6=mysqlexec($sql6);
          if($result6)
            while($row6=mysqli_fetch_assoc($result6))
            $family_class=$row6['family_class'];
          


          $sql5="SELECT * FROM 8bd_religion_details WHERE user_id=$profid";		
          $result5=mysqlexec($sql5);
          if($result5)
            while($row5=mysqli_fetch_assoc($result5))
            $religion=$row5['religion'];


 
            echo "<div class=\"biodatalist\">";
                    echo "<div class=\"sb_bio_header\">";
                    echo "<a href=\"view_profile.php?id={$profid}\" target=\"_blank\"> <img  class=\"img-responsive\" src=\"profile/{$profid}\/{$pic1}\"/></a>";
                    echo "<div class=\"sb_bio_number\"><span class=\"sb_biodatanumber\"> {$profid} <br> Biodata Number </span> </div>";
                    echo "</div>";

                    echo "<div class=\"sb_user\">
					<span class=\"sb_single_data\"> <span class=\"sb_value\"> Gender </span>          <span class=\"sb_data\"> {$biodatagender}</span></span>
                    <span class=\"sb_single_data\"> <span class=\"sb_value\"> Skin Tones </span>  <span class=\"sb_data\">{$Skin_tones}</span></span>
                    <span class=\"sb_single_data\"> <span class=\"sb_value\"> Height </span>  <span class=\"sb_data\">{$height}</span></span>
					<span class=\"sb_single_data\"> <span class=\"sb_value\"> Occupation </span>      <span class=\"sb_data\"> {$occupation}</span></span>
					<span class=\"sb_single_data\"> <span class=\"sb_value\"> Birth Year</span>        <span class=\"sb_data\"> {$dateofbirth}</span></span>
          <a href=\"viewpro.php?id={$profid}\" target=\"_blank\"> <button class=\"view_sb_profile\"> View Full Profile</button></a>
                    </div></div>";
                    $c_count++;

        	}
        }
        echo '<script> var count = ' . $c_count . '; </script>';

        ?>

<div class="pagination">
<span id="profiles-show-info" style="color:#00bbff;"></span>
  <a href="#" id="prev-page-btn" style="display:none">&laquo; Previous</a>
  <span id="page-numbers"></span>
  <a href="#" id="next-page-btn">Next &raquo;</a>
  <span id="profiles-info" style="color:#ff0080;"></span>
</div>

<script>
  // number of profiles per page
  const profilesPerPage = 3;
  // total number of profiles found
  const totalProfiles = <?php echo $c_count ?>;
  // calculate the total number of pages
  const totalPages = Math.ceil(totalProfiles / profilesPerPage);

  // initialize the current page to the first page
  let currentPage = 1;

  // function to generate page numbers
  function generatePageNumbers() {
    // clear the page numbers
    document.getElementById("page-numbers").innerHTML = "";

    // loop through all pages and generate page numbers
    for (let i = 1; i <= totalPages; i++) {
      // create a page number element
      const pageNumberElem = document.createElement("a");
      pageNumberElem.href = "#";
      pageNumberElem.innerText = i;

      // add an active class to the current page
      if (i === currentPage) {
        pageNumberElem.classList.add("active");
      }

      // add a click event listener to switch pages
      pageNumberElem.addEventListener("click", () => {
        currentPage = i;
        showProfiles();
      });

      // append the page number element to the page numbers container
      document.getElementById("page-numbers").appendChild(pageNumberElem);
    }
  }

  // function to show profiles for the current page
  function showProfiles() {
    // calculate the starting index and ending index of the profiles to show
    const startIndex = (currentPage - 1) * profilesPerPage;
    const endIndex = Math.min(startIndex + profilesPerPage, totalProfiles);

    // loop through the profiles and show only the profiles for the current page
    for (let i = 0; i < totalProfiles; i++) {
      const profileElem = document.getElementsByClassName("biodatalist")[i];
      if (i >= startIndex && i < endIndex) {
        profileElem.style.display = "block";
      } else {
        profileElem.style.display = "none";
      }

    }

    // update the page numbers
    generatePageNumbers();

    // hide previous button if current page is the first page
    if (currentPage === 1) {
      document.getElementById("prev-page-btn").style.display = "none";
    } else {
      document.getElementById("prev-page-btn").style.display = "inline-block";
    }

    // hide next button if current page is the last page
    if (currentPage === totalPages) {
      document.getElementById("next-page-btn").style.display = "none";
    } else {
      document.getElementById("next-page-btn").style.display = "inline-block";
    }

    // update the text in the profiles-info span
// update the text in the profiles-info span
const profilesLeft = totalProfiles - endIndex;
if (totalProfiles > 0) {
  document.getElementById("profiles-info").textContent = `(${profilesLeft} profiles left)`;
} else {
  document.getElementById("profiles-info").style.display = "none";
}


let profilesshow;
if (totalProfiles === 0) {
  document.getElementById("prev-page-btn").style.display = "none";
  document.getElementById("next-page-btn").style.display = "none";
} else {
  profilesshow = `(Showing ${startIndex + 1} to ${Math.min(endIndex, totalProfiles)} Profiles)`;
  if (startIndex === 0) {
    document.getElementById("prev-page-btn").style.display = "none";
  } else {
    document.getElementById("prev-page-btn").style.display = "inline";
  }
  if (endIndex >= totalProfiles) {
    document.getElementById("next-page-btn").style.display = "none";
  } else {
    document.getElementById("next-page-btn").style.display = "inline";
  }
}
document.getElementById("profiles-show-info").textContent = profilesshow;

  }
  
  // show the profiles for the first page
  showProfiles();

  // add click event listeners to the previous page and next page buttons
  document.getElementById("prev-page-btn").addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      showProfiles();
    }
  });

  document.getElementById("next-page-btn").addEventListener("click", () => {
    if (currentPage < totalPages) {
      currentPage++;
      showProfiles();
    }

    
  });

</script>
  </div>
</div>



<style>
    .count-display {
    font-size: 1.2em;
    font-weight: 400;
    color: #000000;
    margin-top: 10px;
  }
  
  .sb-find-biodata{
    font-size: 20px;
    margin-top: 15px;
  }
  .pagination {
  width: 90%;
  margin: 50px auto 0px auto;
  padding: 0px;
  text-align: center;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.pagination a {
  transition: background-color 0.3s ease;
  color: #000;
  padding: 8px 12px;
  text-decoration: none;
  font-size: 14px;
  background: #eee;
  border-radius: 50%;
  margin: 8px 3px;
  border: 1px solid #ccc;
}
  #prev-page-btn{
    margin-bottom: 15px;
    margin-top: 0px;
  }
  #profiles-show-info{
    margin-bottom: 10px;
  }

  #next-page-btn{
    margin-bottom: 0px;
    margin-top: 15px;
  }
  #profiles-info{
    margin-top: 10px;
  }

.pagination a:hover {
  background: #00bbff;
  color: #fff;
}

.pagination .active {
  background: #ff0080;
  color: #fff;
  border: 1px solid #ddd;
}
 </style>



    <script>
      var searchButton = document.getElementById('search-button');
      var closeButton = document.getElementById('close-button');
      var filters = document.getElementById('filters');
      searchButton.addEventListener('click', function(){
        if(filters.style.display == 'block') {
          filters.style.display = 'none';
          closeButton.style.display = 'none';
        }
        else {
          filters.style.display = 'block';
          closeButton.style.display = 'block';
        }
      });
      closeButton.addEventListener('click', function(){
        filters.style.display = 'none';
        closeButton.style.display = 'none';
      });
    </script>






<?php include_once("footer.php");?>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	
