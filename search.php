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
    width: 100%;
    padding: 10px;
    margin-left: 0px;
    background: #fdfcfc;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 15px;
  }
  .sbbiodata-search{
    width: 18%;
    position: fixed;
    margin-top: 100px;
    margin-left: 25px;
    z-index: 1;
  }

  .form_radios {
    color: #000;
    font-size: 13px;
    padding: 0px;
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
    width: 100%;
    color: black;
    font-size: 13px;
}

.control-lable1 {
    padding: 0;
    font-size: 13px;
    color: #000;
    margin-top: 4px;
}

.form_but1 {
    margin-bottom: 2px;
}

input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
    width: 100%;
}
.sb_biodata_profile{
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 280px;
    padding: 20px;
    }

    .heart-divider {
    height: 100%;
    width: 100%;
    margin: 100px;
    text-align: center;
}
  </style>

       	<div class="heart-divider">
            <h1>Find your perfect <span>Partner</span></h1>
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>


        <div class="sbbiodata-search">
<form action="" method="post">	


  <div class="form_but1">
  <label class="col-sm-5 control-lable1" for="Looking">Looking : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1" name="biodatagender" value="Male" /> Groom &nbsp;&nbsp; <br>
		<input type="radio" class="radio_1" name="biodatagender" value="Female"/> Bride
  </div>
  </div>

  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="Marital Status">Marital Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="checkbox" class="radio_1" name="maritalstatus" value="Unmarried" /> Unmarried &nbsp;&nbsp;  <br>
		<input type="checkbox" class="radio_1" name="maritalstatus" value="Divorced" /> Divorced &nbsp;&nbsp;  <br>
		<input type="checkbox" class="radio_1" name="maritalstatus" value="Widow" /> Widow &nbsp;&nbsp;  <br>
		<input type="checkbox" class="radio_1" name="maritalstatus" value="Widower"/> Widower &nbsp;&nbsp;  <br>
    <input type="checkbox" class="radio_1" name="maritalstatus" value="Married"/> Married &nbsp;&nbsp;  <br>
		<input type="checkbox" class="radio_1" name="maritalstatus" value="any" /> Any
	</div>
  </div>


  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="permanent_address">Permanent Address : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
      <select name="permanent_address">

<option>Select District</option>
  <optgroup label="Barishal Division">
              <option value="Barguna">Barguna</option>
              <option value="Barishal">Barishal</option> 
             <option value="Bhola">Bhola</option>
  <option value="Jhalokati">Jhalokati</option>
              <option value="Patuakhali">Patuakhali</option> 
             <option value="Pirojpur">Pirojpur</option>
            </optgroup>

<optgroup label="Chattagram Division">
  <option value="Bandarban">Bandarban</option>
              <option value="Brahmanbaria">Brahmanbaria</option> 
             <option value="Chandpur">Chandpur</option>
  <option value="Chattogram">Chattogram</option>
              <option value="Cumilla">Cumilla</option>
  <option value="Coxbazar">Cox's Bazar</option>  
             <option value="Feni">Feni</option>
  <option value="Khagrachhari">Khagrachhari</option>
  <option value="Lakshmipur">Lakshmipur</option>
  <option value="Noakhali">Noakhali</option>
              <option value="Rangamati">Rangamati</option>
            </optgroup>

<optgroup label="Dhaka Division">
             <option value="Dhaka">Dhaka</option>
  <option value="Faridpur">Faridpur</option>
              <option value="Gazipur">Gazipur</option> 
             <option value="Gopalganj">Gopalganj</option>
  <option value="Kishoreganj">Kishoreganj</option>
  <option value="Madaripur">Madaripur</option>
              <option value="Manikganj">Manikganj</option> 
             <option value="Munshiganj">Munshiganj</option>
  <option value="Narayanganj">Narayanganj</option>
              <option value="Narsingdi">Narsingdi</option> 
             <option value="Rajbari">Rajbari</option>
  <option value="Shariatpur">Shariatpur</option>
              <option value="Tangail">Tangail</option>
            </optgroup>

<optgroup label="Khulna Division">
             <option value="Bagerhat">Bagerhat</option>
  <option value="Chuadanga">Chuadanga</option>
              <option value="Jashore">Jashore</option>
  <option value="Jhenaidah">Jhenaidah</option>  
             <option value="Khulna">Khulna</option>
  <option value="Kushtia">Kushtia</option>
  <option value="Magura">Magura</option>
  <option value="Meherpur">Meherpur</option>
              <option value="Narail">Narail</option> 
             <option value="Satkhira">Satkhira</option>
            </optgroup>

<optgroup label="Mymensingh Division">
  <option value="Jamalpur">Jamalpur</option>
              <option value="Mymensingh">Mymensingh</option> 
             <option value="Netrokona">Netrokona</option>
  <option value="Sherpur">Sherpur</option>
            </optgroup>

<optgroup label="Rajshahi Division">
  <option value="Bogura">Bogura</option>
  <option value="Chapai Nawabganj">Chapai Nawabganj</option> 
              <option value="Joypurhat">Joypurhat</option> 
             <option value="Naogaon">Naogaon</option>
  <option value="Natore">Natore</option>
             <option value="Pabna">Pabna</option>
  <option value="Rajshahi">Rajshahi</option>
              <option value="Sirajganj">Sirajganj</option>
            </optgroup>

<optgroup label="Rangpur Division">
             <option value="Dinajpur">Dinajpur</option>
  <option value="Gaibandha">Gaibandha</option>
              <option value="Kurigram">Kurigram</option>
  <option value="Lalmonirhat">Lalmonirhat</option>  
             <option value="Nilphamari">Nilphamari</option>
  <option value="Panchagarh">Panchagarh</option>
  <option value="Rangpur">Rangpur</option>
  <option value="Thakurgaon">Thakurgaon</option>
            </optgroup>

<optgroup label="Sylhet Division">
              <option value="Habiganj">Habiganj</option> 
             <option value="Moulvibazar">Moulvibazar</option>
  <option value="Sunamganj">Sunamganj</option>
              <option value="Sylhet">Sylhet</option>
            </optgroup>

          </select>
      </div>
    </div>
  </div>


  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Occupation">Occupation : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
      <select name="occupation">

<optgroup label="Students Sector">
<option  hidden selected>Select Occupation</option>
<option value="Students of Kawmi Madrasa">Students of Kawmi Madrasa</option> 
<option value="Students of High School">Students of High School</option>
<option value="Students of Doploma">Students of Doploma</option> 
             <option value="Students of College">Students of College</option>
              <option value="Students of B.Sc. Engineering">Students of B.Sc. Engineering</option> 
             <option value="Students of Medical Sector">Students of Medical Sector</option>
              <option value="Students of B.Sc.">Students of B.Sc.</option>
              <option value="Students of M.Sc.">Students of M.Sc.</option>
<option value="Students of B.A.">Students of B.A.</option> 
             <option value="Students of M.A.">Students of M.A.</option>
<option value="Students of B.Com.">Students of B.Com.</option> 
             <option value="Students of M.Com.">Students of M.Com.</option>
                </optgroup>

 <optgroup label="Medical & Health Sector">
              <option value="MBBS Doctor">MBBS Doctor</option>
              <option value="Internship Doctor">Internship Doctor</option> 
<option value="FCPS Doctor">FCPS Doctor</option>
<option value="Pharmacist">Pharmacist</option>
<option value="Diploma Doctor">Diploma Doctor</option>
<option value="Peramedical">Peramedical</option> 
             <option value="Nursing">Nursing</option>
<option value="Midwifary">Midwifary</option>
                </optgroup>

<optgroup label="Engineers Sector">
<option value="Aerospace Engineer">Aerospace Engineer</option>
<option value="Agricultural Engineer">Agricultural Engineer</option>
<option value="Architectural Engineer">Architectural Engineer</option>
<option value="Biomedical Engineer">Biomedical Engineer</option>
<option value="Chemical Engineer">Chemical Engineer</option>
<option value="Civil Engineer">Civil Engineer</option>
<option value="Electrical Engineer">Electrical Engineer</option>
<option value="Marine Engineer">Marine Engineer</option> 
<option value="Mechanical Engineer">Mechanical Engineer</option>
<option value="Network Engineer">Network Engineer</option> 
<option value="Robotics Engineer">Robotics Engineer</option>
              <option value="Software Engineer">Software Engineer</option> 
             <option value="Textile Engineer">Textile Engineer</option>
                </optgroup>

<optgroup label="Teachers Sector">
<option value="Teaches of Kawmi Madrasa">Teaches of Kawmi Madrasa</option> 
              <option value="Teaches of Primary School">Teaches of Primary School</option> 
             <option value="Teaches of High School">Teaches of High School</option>
<option value="Professor of College">Professor of College</option>
<option value="Professor of Public University">Professor of Public University</option>
<option value="Professor of Private University">Professor of Private University</option>
<option value="Professor of National University">Professor of National University</option>
<option value="Professor of Degree">Professor of Degree</option>
                </optgroup>

<optgroup label="Defense Sector">
              <option value="Army">Army</option> 
             <option value="Air Force">Air Force</option>
              <option value="Navy">Navy</option>
              <option value="Police">Police</option>
<option value="Fire Service">Fire Service</option> 
             <option value="RAB">RAB</option>
              <option value="DB">DB</option>
                </optgroup>

<optgroup label="Garments Sector">
              <option value="Worker of Garments">Worker of Garments</option> 
             <option value="Managers of Garments">Managers of Garments</option>
                </optgroup>

<optgroup label="Driver Sector">
              <option value="Bus Driver">Bus Driver</option> 
<option value="Micro Driver">Micro Bus Driver</option> 
              <option value="Car Driver">Car Driver</option> 
              <option value="Truck Driver">Truck Driver</option>
<option value="CNG Driver">CNG Driver</option> 
              <option value="Auto Driver">Auto Driver</option>
                </optgroup>

<optgroup label="Others Sector">
<option value="Banker">Banker</option>
<option value="Business">Business</option> 
<option value="Entrepreneur">Entrepreneur</option> 
<option value="Lawyer">Lawyer</option> 
              <option value="Frelancer">Frelancer</option>
<option value="Graphics Desigener">Graphics Desigener</option>
<option value="Sales & Marketing (SR)">Sales & Marketing (SR)</option>  
              <option value="No Job">No Job</option>

          </select>
      </div>
    </div>
  </div>


  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Religion">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
      <select name="religion">
								<option hidden selected>Select Religion</option>
						        <option value="Muslim">Muslim</option>
		                        <option value="Hindu">Hindu</option>
		                        <option value="Christian">Christian</option>
		                        <option value="Budhism">Budhism</option>
		                        <option value="Others">Others</option>
	                            </select>
      </div>
    </div>
  </div>


  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Family Class">Family Class : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
      <select name="family_class">
							    <option hidden selected>Select Family Condition</option>
	                            <option value="Higher Class">Higher Class</option>
	                            <option value="Higher Middle Class">Higher Middle Class</option> 
	               		        <option value="Middle Class">Middle Class</option>
								<option value="Lower Middle Class">Lower Middle Class</option>
								<option value="Lower Class">Lower Class</option>  
	                        </select>
      </div>
    </div>
  </div>
  

  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Education Method">Education Method : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
	                        <select name="education_method" required>
							   <option hidden selected> Select Education Method </option>
		                       <option value="Genaral">General</option>
		                       <option value="Dakhil">Dakhil</option>
		                       <option value="Technical">Technical</option>
		                       <option value="Qawmi Madrasa">Qawmi Madrasa</option>
							   <option value="Other">Other</option>
							   <option value="None">None</option>
	                        </select>
      </div>
    </div>
  </div>


  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Skin Tones">Skin Tones : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
      <select name="Skin_tones">
							<option hidden selected>Select Skin Tones</option>
	                        <option value="Light">Light</option>
	                        <option value="Fair">Fair</option> 
	               		    <option value="Medium">Medium</option>
							<option value="Dark">Dark</option>
	                    </select>
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
