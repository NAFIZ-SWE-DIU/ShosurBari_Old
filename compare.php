
<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
error_reporting(0);
?>







<!DOCTYPE HTML>
<html>
<head>
<title>View Profile - ShosurBari</title>
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


<div class="compare_sbbiodatas">


<div class="compare_sbbiodata_Heading">
<table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Personal & Physical</th>
		</tr>
	</tbody>
    </table>


    <table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Personal & Life Style</th>
		</tr>
	</tbody>
    </table>


    <table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Educational Qualifications</th>
		</tr>
	</tbody>
    </table>


    <table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Address Details</th>
		</tr>
	</tbody>
    </table>


    <table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Marriage related Information</th>
		</tr>
	</tbody>
    </table>


    <table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Religion Details</th>
		</tr>
	</tbody>
    </table>


    <table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Family Details</th>
		</tr>
	</tbody>
    </table>


    <table class="compare_table_heading">
	<tbody>
		<tr class="compare_tr">
            <th rowspan="4" scope="row">Expected Partner</th>
		</tr>
	</tbody>
    </table>
<div>








<!-- 1 Personal & Physical -->
<div class="compare_sbbiodata_title">
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">DOB</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Height</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Weight</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Skin Tones</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Blood Group</td>
		</tr>
	</tbody>
</table>

<!-- 2 Personal & Life Style -->
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Marital Status</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Smoke or Drinks</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Occupation</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Occupation Describe</td>
		</tr>
	</tbody>

	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Dress Code</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">About Me</td>
		</tr>
	</tbody>

</table>


<!-- 3 Educational Qualifications -->
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Education Method</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">SSC Passing Year</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Maximum Education</td>
		</tr>
	</tbody>
</table>


<!-- 4 Address Details -->
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Permanent Address Division</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Permanent Address District</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Present Address</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Childhood</td>
		</tr>
	</tbody>
</table>


<!-- 5 Marriage related Information -->
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Allow Study After Marriage</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Allow Job After Marriage</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Live Wife After Marriage</td>
		</tr>
	</tbody>
</table>


<!-- 6 Religion Details -->
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Religion</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Your Religion Condition</td>
		</tr>
	</tbody>
</table>


<!-- 7 Family Details -->
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Father Alive</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Father Occupation</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Mother Alive</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Mother Occupation</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Bro Sis Number</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Bro Sis Info</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Uncle Profession</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Family Class</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Financial Condition</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Family Religious</td>
		</tr>
	</tbody>
</table>


<!-- 8 Expected Partner -->
<table class="compare_table_title">
	<tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Religius</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner District</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Maritial Status</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Age</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Skin Tones</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Height</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Education</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Profession</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Financial</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="ttl">Partner Attributes</td>
		</tr>
	</tbody>
</table>
<div>












<!-- 1 Personal & Physical -->
<div class="compare_sbbiodata_info">
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">DOB</td>
            <td class="info">DOB</td>
		    <td class="info">DOB</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Height</td>
            <td class="info">Height</td>
		    <td class="info">Height</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Weight</td>
            <td class="info">Weight</td>
		    <td class="info">Weight</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Skin Tones</td>
            <td class="info">Skin Tones</td>
		    <td class="info">Skin Tones</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Blood Group</td>
            <td class="info">Blood Group</td>
		    <td class="info">Blood Group</td>
		</tr>
	</tbody>
</table>

<!-- 2 Personal & Life Style -->
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">Marital Status</td>
            <td class="info">Marital Status</td>
		    <td class="info">Marital Status</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Smoke or Drinks</td>
            <td class="info">Smoke or Drinks</td>
            <td class="info">Smoke or Drinks</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Occupation</td>
            <td class="info">Occupation</td>
		    <td class="info">Occupation</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Occupation Describe</td>
            <td class="info">Occupation Describe</td>
		    <td class="info">Occupation Describe</td>
		</tr>
	</tbody>

	<tbody>
		<tr class="compare_tr">
		    <td class="info">Dress Code</td>
            <td class="info">Dress Code</td>
		    <td class="info">Dress Code</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">About Me</td>
            <td class="info">About Me</td>
		    <td class="info">About Me</td>
		</tr>
	</tbody>
</table>


<!-- 3 Educational Qualifications -->
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">Education Method</td>
            <td class="info">Education Method</td>
		    <td class="info">Education Method</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">SSC Passing Year</td>
            <td class="info">SSC Passing Year</td>
		    <td class="info">SSC Passing Year</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Maximum Education</td>
            <td class="info">Maximum Education</td>
		    <td class="info">Maximum Education</td>
		</tr>
	</tbody>
</table>


<!-- 4 Address Details -->
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">Permanent Address Division</td>
            <td class="info">Permanent Address Division</td>
		    <td class="info">Permanent Address Division</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Permanent Address District</td>
            <td class="info">Permanent Address District</td>
		    <td class="info">Permanent Address District</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Present Address</td>
            <td class="info">Present Address</td>
		    <td class="info">Present Address</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Childhood</td>
            <td class="info">Childhood</td>
		    <td class="info">Childhood</td>
		</tr>
	</tbody>
</table>


<!-- 5 Marriage related Information -->
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">Allow Study After Marriage</td>
            <td class="info">Allow Study After Marriage</td>
		    <td class="info">Allow Study After Marriage</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Allow Job After Marriage</td>
            <td class="info">Allow Job After Marriage</td>
		    <td class="info">Allow Job After Marriage</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Live Wife After Marriage</td>
            <td class="info">Live Wife After Marriage</td>
		    <td class="info">Live Wife After Marriage</td>
		</tr>
	</tbody>
</table>


<!-- 6 Religion Details -->
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">Religion</td>
            <td class="info">Religion</td>
		    <td class="info">Religion</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Your Religion Condition</td>
            <td class="info">Your Religion Condition</td>
		    <td class="info">Your Religion Condition</td>
		</tr>
	</tbody>
</table>


<!-- 7 Family Details -->
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">Father Alive</td>
            <td class="info">Father Alive</td>
		    <td class="info">Father Alive</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Father Occupation</td>
            <td class="info">Father Occupation</td>
		    <td class="info">Father Occupation</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Mother Alive</td>
            <td class="info">Mother Alive</td>
		    <td class="info">Mother Alive</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Mother Occupation</td>
            <td class="info">Mother Occupation</td>
		    <td class="info">Mother Occupation</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Bro Sis Number</td>
            <td class="info">Bro Sis Number</td>
		    <td class="info">Bro Sis Number</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Bro Sis Info</td>
            <td class="info">Bro Sis Info</td>
		    <td class="info">Bro Sis Info</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Uncle Profession</td>
            <td class="info">Uncle Profession</td>
		    <td class="info">Uncle Profession</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Family Class</td>
            <td class="info">Family Class</td>
		    <td class="info">Family Class</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Financial Condition</td>
            <td class="info">Financial Condition</td>
		    <td class="info">Financial Condition</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Family Religious</td>
            <td class="info">Family Religious</td>
		    <td class="info">Family Religious</td>
		</tr>
	</tbody>
</table>


<!-- 8 Expected Partner -->
<table class="compare_table_info">
	<tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Religius</td>
            <td class="info">Partner Religius</td>
		    <td class="info">Partner Religius</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner District</td>
            <td class="info">Partner District</td>
		    <td class="info">Partner District</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Maritial Status</td>
            <td class="info">Partner Maritial Status</td>
		    <td class="info">Partner Maritial Status</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Age</td>
            <td class="info">Partner Age</td>
		    <td class="info">Partner Age</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Skin Tones</td>
            <td class="info">Partner Skin Tones</td>
		    <td class="info">Partner Skin Tones</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Height</td>
            <td class="info">Partner Height</td>
		    <td class="info">Partner Height</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Education</td>
            <td class="info">Partner Education</td>
		    <td class="info">Partner Education</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Profession</td>
            <td class="info">Partner Profession</td>
		    <td class="info">Partner Profession</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Financial</td>
            <td class="info">Partner Financial</td>
		    <td class="info">Partner Financial</td>
		</tr>
	</tbody>

    <tbody>
		<tr class="compare_tr">
		    <td class="info">Partner Attributes</td>
            <td class="info">Partner Attributes</td>
		    <td class="info">Partner Attributes</td>
		</tr>
	</tbody>
</table>
<div>

<div>



<style>

.compare_sbbiodatas {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}
		
		.compare_sbbiodata_Heading,
		.compare_sbbiodata_title,
		.compare_sbbiodata_info {
			width: 25%;
		}
		
		.compare_table_heading,
		.compare_table_title,
		.compare_table_info {
			width: 100%;
			border-collapse: collapse;
		}
		
		.compare_table_heading th,
		.compare_table_title td,
		.compare_table_info td {
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}
		
		.compare_table_heading th {
			background-color: lightgray;
		}

    </style>




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
