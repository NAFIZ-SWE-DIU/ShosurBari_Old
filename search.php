<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Search :: Make My Love
</title>
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





<style>
  .sbbiodata-search form{
    width: 90%;
    padding: 10px;
    margin-left: auto;
    background: #fdfcfc;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 15px;
  }

  .sbbiodata-search{
    width: 18%;
    position: inherit;
    margin-top: -50px;
    margin-left: 5px;
    z-index: 1;
  }

  .form_radios {
    color: #000;
    font-size: 13px;
    padding: 0px;
    margin-top: 15px;
    margin-bottom: 15px;
}

.select-block1 select {
    box-shadow: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: 0;
    background: #ffffff;
    height: 30px;
    line-height: 14px;
    padding: 5px 15px;
    width: 150%;
    color: black;
    font-size: 13px;
    margin-left: 15px
}

.control-lable1 {
    padding: 0;
    font-size: 14px;
    color: #ff0080;
    margin-top: 4px;
    margin-bottom: 4px;
    margin-right: -15px;
}

.form_but1 {
    margin-bottom: 10px;
}

input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
}

    .heart-divider {
    height: 100%;
    width: 100%;
    margin: 100px;
    text-align: center;
}
.total_biodata{
  margin-top: 10px;
}


.toggle-next{
  border-radius: 0;
}
  
label {
  cursor: pointer;
}
  
.ellipsis {
  text-overflow: ellipsis;
  width: 100%;
  white-space: nowrap;
  overflow: hidden;
  color: #ff0080;
  border-radius: 4px;
}

.apply-selection{
  display: none;
  width: 100%;
  margin: 0;
  padding: 5px 10px;
  border-bottom: 1px solid #ccc;
}
  
  .ajax-link {
    display: none;
  }
    
.checkboxes{
  margin: 0;
  display: none;
  border: 1px solid #ccc;
  border-top: 0;
}

  .inner-wrap{
    padding: 5px 10px;
    max-height: 160px;
    overflow: auto;
  }

  .wrapper{
   /* margin-top: 10px;
    margin-bottom: 10px; */
    position: relative;

  display: flex;
  flex-direction: column;
  width: 100%;
  height: auto;
  margin: 10px auto;
  padding: 7px;
  background-color: #f1f1f1;
  box-shadow: 1px 1px 4px #888;
  border-radius: 4px;
  }

  label span {
    color: black;
    font-size: 13px;
    font-weight: 500;
}

label{
  color: #02a7e6;
  font-size: 14px;
}

.search-title{
  margin: auto;
  padding: 10px;
  color: black;
}

.search-title h4{
  font-size: 17px;
  font-weight: 600;
}

.fa-female:before {
    font-size: 15px;
}
.fa-male:before {
    font-size: 15px;
}
  .gender-radio-select{
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 11px;
        padding-right: 0px;
        display: flex;
		    align-items: center;
		    border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        background: #fff;
   }

    .gender-radio-select .gender-option{
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 3px;
        margin-right: 3px;

    }
    .gender-radio-select .gender-option input[type="radio"]{
		display: none;
    }
    .gender-radio-select .gender-option label{
        display: inline-block;
        padding: 2px;
        font-size: 13px;
        transition: all 0.3s;
		font-weight: 500;
    cursor: pointer;
		margin-top: 4px;
    margin-bottom: 4px;
		border: 1px solid #ccc;
		border-radius: 3px

    }
    .gender-radio-select .gender-option label i{
        font-size: 17px;
    }
    .gender-radio-select .gender-option input[type="radio"]:checked + label{
        background: #02a7e6;
        border: 1px solid #ccc;
        color: #fff;
		border-radius: 3px
    }


    .wrapper .toggle-next .fa {
position: absolute; 
right: 20px;
top: 20px;
}

.toggle-next span i {
    transition: all 0.2s ease;
}
.toggle-next:hover span i {
    transform: rotate(180deg);

}

  </style>

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




<script>
window.onload = countBiodata;
function countBiodata() {
    var sb_biodatanumber = document.getElementsByClassName("sb_biodatanumber");
    var total = document.getElementsByClassName("total")[0];
    total.innerHTML = sb_biodatanumber.length;
}

</script>





















<div id="search-bar">

<div id="search-button">
  Search
</div>

<div id="close-button">
  Close
</div>

<div id="filters">

<div class="sbbiodata-search-mobile">
<form action="" method="post">
<div class="search-title">
<h4> Find your perfect Partner </h4>
</div>


<div class="gender-radio-select">
<label class="col-sm-5 control-lable1" for="Looking">Looking : </label>
  <div class="gender-option">
      <input type="radio" name="biodatagender" id="male_mob" value="Male" />
      <label for="male_mob"><i class="fa fa-male"></i> Groom</label>
  </div>
  
  <div class="gender-option">
      <input type="radio" name="biodatagender" id="female_mob" value="Female"/>
      <label for="female_mob"><i class="fa fa-female"></i> Bride</label><br>
</div>
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
    <label>
      <input type="checkbox" name="occupation" value="Students of Kawmi Madrasa" class="SelectBox val" />
      <span>Kawmi Madrasa Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of High School" class="SelectBox val" />
      <span>High School Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of College" class="SelectBox val" />
      <span>College Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of Peramedical" class="SelectBox val" />
      <span>Peramedical Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of Nursing" class="SelectBox val" />
      <span>Nursing Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of Midwifary" class="SelectBox val" />
      <span>Midwifary Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of Politechnical" class="SelectBox val" />
      <span>Politechnical Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of B.Sc. Engineering" class="SelectBox val" />
      <span>B.Sc. Engineering Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of Medical" class="SelectBox val" />
      <span>Medical Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of Pharmacy" class="SelectBox val" />
      <span>Pharmacy Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of B.Sc." class="SelectBox val" />
      <span>B.Sc. Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of B.A." class="SelectBox val" />
      <span>B.A. Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of B.Com." class="SelectBox val" />
      <span>B.Com. Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of M.Sc." class="SelectBox val" />
      <span>M.Sc. Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of M.A." class="SelectBox val" />
      <span>M.A. Student</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Students of M.Com." class="SelectBox val" />
      <span>M.Com. Student</span>
    </label><br>



                 <!-- Medical & Health Sector -->
                 <label> Medical & Health</label> <br>
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
      <input type="checkbox" name="occupation" value="Peramedical" class="SelectBox val" />
      <span>Peramedical</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Midwifary" class="SelectBox val" />
      <span>Midwifary</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Nursing" class="SelectBox val" />
      <span>Nursing</span>
    </label><br>



       <!--  Engineers Sector-->
       <label> Engineers Sector</label> <br>
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



                 <!-- Teachers Sector -->
                 <label>Teachers Sector</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Teaches of Kawmi Madrasa" class="SelectBox val" />
      <span>Teaches Kawmi Madrasa</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Teaches of Primary School" class="SelectBox val" />
      <span>Teaches Primary School</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Teaches of High School" class="SelectBox val" />
      <span>Teaches High School</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Professor of College" class="SelectBox val" />
      <span>Professor College</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Professor of Public University" class="SelectBox val" />
      <span>Professor Public University</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Professor of Private University" class="SelectBox val" />
      <span>Professor Private University</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Professor of National University" class="SelectBox val" />
      <span>Professor National University</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Professor of Degree" class="SelectBox val" />
      <span>Professor Degree</span>
    </label><br>


              <!-- Common Sector-->
              <label>Common Sector</label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Banker" class="SelectBox val" />
      <span>Banker</span>
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
      <input type="checkbox" name="occupation" value="Lawyer" class="SelectBox val" />
      <span>Lawyer</span>
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
      <input type="checkbox" name="occupation" value="No Occupation" class="SelectBox val" />
      <span>No Occupation</span>
    </label>

              <!-- Working Forign Sector-->
              <label> Working Forign Sector </label> <br>
    <label>
      <input type="checkbox" name="working_forign" value="Working Middleast" class="SelectBox val" />
      <span>Work / Business Middleast</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Working Europ" class="SelectBox val" />
      <span>Work / Business Europ</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Working America" class="SelectBox val" />
      <span>Work / Business America</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Working Asia" class="SelectBox val" />
      <span>Work / Business Asia</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Working Africa" class="SelectBox val" />
      <span>Work / Business Africa</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Working Osania" class="SelectBox val" />
      <span>Work / Business Osania</span>
    </label><br>


    <!-- Garments Sector-->
    <label> Garments Sector </label> <br>
    <label>
      <input type="checkbox" name="occupation" value="Worker of Garments" class="SelectBox val" />
      <span>Worker Garments</span>
    </label><br>

    <label>
      <input type="checkbox" name="occupation" value="Managers of Garments" class="SelectBox val" />
      <span>Managers Garments</span>
    </label><br>


      <!--  Driver Sector -->
      <label> Driver Sector </label> <br>
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
<input type="submit" name="search" value="Search"/>
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


  <div class="total_biodata">
  <h4>Total Profile Found: 
  <span class="total"></span> </h4>
</div>

</div>






<div class="sbbiodata-search">
<form action="" method="post">
<div class="search-title">
<h4> Find your perfect Partner </h4>
</div>
  
<div class="wrapper">
<div class="gender-radio-select">
<label class="ellipsis" for="Looking">Looking :</label>
        <div class="gender-option">
            <input type="radio" name="biodatagender" id="male" value="Male"/>
            <label for="male"><i class="fa fa-male"></i> Groom</label>
        </div>
        
        <div class="gender-option">
            <input type="radio" name="biodatagender" id="female" value="Female"/>
            <label for="female"><i class="fa fa-female"></i> Bride</label><br>
		</div>
    </div>
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
          <label>
            <input type="checkbox" name="occupation" value="Students of Kawmi Madrasa" class="SelectBox val" />
            <span>Kawmi Madrasa Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of High School" class="SelectBox val" />
            <span>High School Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of College" class="SelectBox val" />
            <span>College Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of Peramedical" class="SelectBox val" />
            <span>Peramedical Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of Nursing" class="SelectBox val" />
            <span>Nursing Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of Midwifary" class="SelectBox val" />
            <span>Midwifary Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of Politechnical" class="SelectBox val" />
            <span>Politechnical Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of B.Sc. Engineering" class="SelectBox val" />
            <span>B.Sc. Engineering Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of Medical" class="SelectBox val" />
            <span>Medical Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of Pharmacy" class="SelectBox val" />
            <span>Pharmacy Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of B.Sc." class="SelectBox val" />
            <span>B.Sc. Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of B.A." class="SelectBox val" />
            <span>B.A. Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of B.Com." class="SelectBox val" />
            <span>B.Com. Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of M.Sc." class="SelectBox val" />
            <span>M.Sc. Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of M.A." class="SelectBox val" />
            <span>M.A. Student</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Students of M.Com." class="SelectBox val" />
            <span>M.Com. Student</span>
          </label><br>



                       <!-- Medical & Health Sector -->
                       <label> Medical & Health</label> <br>
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
            <input type="checkbox" name="occupation" value="Peramedical" class="SelectBox val" />
            <span>Peramedical</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Midwifary" class="SelectBox val" />
            <span>Midwifary</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Nursing" class="SelectBox val" />
            <span>Nursing</span>
          </label><br>



             <!--  Engineers Sector-->
             <label> Engineers Sector</label> <br>
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



                       <!-- Teachers Sector -->
                       <label>Teachers Sector</label> <br>
          <label>
            <input type="checkbox" name="occupation" value="Teaches of Kawmi Madrasa" class="SelectBox val" />
            <span>Teaches Kawmi Madrasa</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Teaches of Primary School" class="SelectBox val" />
            <span>Teaches Primary School</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Teaches of High School" class="SelectBox val" />
            <span>Teaches High School</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Professor of College" class="SelectBox val" />
            <span>Professor College</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Professor of Public University" class="SelectBox val" />
            <span>Professor Public University</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Professor of Private University" class="SelectBox val" />
            <span>Professor Private University</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Professor of National University" class="SelectBox val" />
            <span>Professor National University</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Professor of Degree" class="SelectBox val" />
            <span>Professor Degree</span>
          </label><br>


                    <!-- Common Sector-->
                    <label>Common Sector</label> <br>
          <label>
            <input type="checkbox" name="occupation" value="Banker" class="SelectBox val" />
            <span>Banker</span>
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
            <input type="checkbox" name="occupation" value="Lawyer" class="SelectBox val" />
            <span>Lawyer</span>
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
            <input type="checkbox" name="occupation" value="No Occupation" class="SelectBox val" />
            <span>No Occupation</span>
          </label>

                    <!-- Working Forign Sector-->
                    <label> Working Forign Sector </label> <br>
          <label>
            <input type="checkbox" name="working_forign" value="Working Middleast" class="SelectBox val" />
            <span>Work / Business Middleast</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Working Europ" class="SelectBox val" />
            <span>Work / Business Europ</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Working America" class="SelectBox val" />
            <span>Work / Business America</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Working Asia" class="SelectBox val" />
            <span>Work / Business Asia</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Working Africa" class="SelectBox val" />
            <span>Work / Business Africa</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Working Osania" class="SelectBox val" />
            <span>Work / Business Osania</span>
          </label><br>


          <!-- Garments Sector-->
          <label> Garments Sector </label> <br>
          <label>
            <input type="checkbox" name="occupation" value="Worker of Garments" class="SelectBox val" />
            <span>Worker Garments</span>
          </label><br>

          <label>
            <input type="checkbox" name="occupation" value="Managers of Garments" class="SelectBox val" />
            <span>Managers Garments</span>
          </label><br>


            <!--  Driver Sector -->
            <label> Driver Sector </label> <br>
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
    <input type="submit" name="search" value="Search"/>
  </div>

 </form>
</div>







      <div class="sb_biodata_profile">
<!-- main profile -->
        <?php
if(isset($_POST['search'])){
  $c_count = '1';
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
                    <button class=\"view_sb_profile\"><a href=\"view_profile.php?id={$profid}\" target=\"_blank\"> View Full Profile </a></button>
                    </div></div>";

        	}
		}
  

        ?>
    </div>
</div>






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
