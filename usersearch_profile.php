<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>User Search - ShosurBari</title>
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
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;<|>&nbsp;</span>
        <li class="current-page"><h4>User Home</h4></li>
     </ul>
   </div>
  </div>
</div>








<div class="flex-container-shosurbaribio">
       	<div class="heart-divider">
            <h1>Find your perfect <span>Partner</span></h1>
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
      <div class="sb_biodata_profile">
		
        <?php
        	$sql="SELECT * FROM 1bd_personal_physical";
        	$result=mysqlexec($sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$profid=$row['user_id'];
        			$biodatagender=$row['biodatagender'];
                    $Skin_tones=$row['Skin_tones'];
                    $height=$row['height'];
                    $dateofbirth=$row['dateofbirth'];


					$sql3="SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";		
					$result3=mysqlexec($sql3);
					if($result3)
						while($row3=mysqli_fetch_assoc($result3))
						$occupation=$row3['occupation'];
				
						

						/*	$sql4="SELECT * FROM 4bd_address_details WHERE user_id=$profid";
							$result4=mysqlexec($sql4);
							if($result4)
								while($row4=mysqli_fetch_assoc($result4))
								$permanent_address=$row4['permanent_address'];
							    */

						/*		$sql5="SELECT * FROM 8bd_religion_details WHERE user_id=$profid";
								$result5=mysqlexec($sql5);
								if($result5)
									while($row5=mysqli_fetch_assoc($result5))
									$religion=$row5['religion'];
                                    */
								
				

        				//getting profilepic
        				$pic1='';
						$sql2="SELECT * FROM photos WHERE user_id=$profid";
						$result2 = mysqlexec($sql2);
						if($result2){
							$row2=mysqli_fetch_array($result2);
							$pic1=$row2['pic1'];
						}
						//got profilepic
						//
					//Printing the html
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
                    <button class=\"view_profile\"><a href=\"view_profile.php?id={$profid}\" target=\"_blank\"> View Full Profile </a></button>
                    </div></div>";
        	}
		}


        ?>
    </div>
</div>



<!--Footer Secton -->
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



<style>
.flex-container-shosurbaribio {
    display: flex;
    flex-wrap: wrap;
    margin-top: -50px;
}
.sb_biodata_profile{
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-right: 150px;
    margin-left: 150px;
    padding: 20px;
    }

.biodatalist{
    border: 1px solid #ff0080;
    border-radius: 6px;
    width: 30%;
    gap: 1.5rem;
    padding: 0px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    margin-top: 20px;
    background: white;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
}
.biodatalist:hover{
    background: #02a7e624;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
}


.sb_bio_header{
background: #ff0080;
/* background: #02a7e6; */
margin: 0px;
padding-top: 20px;
border: 1px solid #02a7e6;
border-radius: 5px 5px 0px 0px;
}

.biodatalist img{
    width: 110px;
    height: 110px;
    border-radius: 50%;
    padding: 2px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    margin-top: 0px;
    border: 2px solid white;
}


.sb_bio_number{
    text-align: center;
 /*   border-bottom: 2px solid #02a7e6; */
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    background: #ff0080;
 /*   background: #02a7e6; */
}
.sb_biodatanumber{
    font-size: 24px;
    color: yellow;
    font-weight: 500;
}

.sb_user{
    text-align: center;
    padding: 20px 20px 20px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

.sb_single_data{
    display: flex;
    flex-wrap: wrap;
    padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
}
.sb_user .sb_single_data{
    display: flex;
    flex-wrap: wrap;
    padding-top: 0px;
    padding-bottom: 0px;
}

.sb_user .sb_value{
    color: black;
    padding: 6px;
    font-size: 15px;
    font-weight: 400;
    border: 1px solid #d5d5d5;
    border-style: groove;
    width: 35%;
    position: inherit;
}

.sb_user .sb_data{
    color: black;
    padding: 6px;
    font-size: 15px;
    font-weight: 400;
    border: 1px solid #d5d5d5;
  /*  border: 1px #02a7e6; */
    border-style: groove;
    width: 65%;
    position: inherit;
}

.view_profile{
    text-align: center;
    border: 1px solid #d5d5d5;
    padding: 5px;
    margin-top: 20px;
    margin-bottom: 0px;
    border-radius: 5px;
    background: #ff0080;
    color: white;
    width:50%;
}
.view_profile:hover{
  background:#02a7e6;
  color: yellow;
}
.view_profile a{
  color: white;
}
</style>	
