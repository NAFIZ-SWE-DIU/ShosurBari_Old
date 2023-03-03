<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home - ShosurBari</title>
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








<div class="sb_profile">
      <div class="sb_biodata_profile">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
		
        <?php
        	$sql="SELECT * FROM 1bd_personal_physical";
        	$result=mysqlexec($sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$profid=$row['user_id'];
        			$biodatagender=$row['biodatagender'];
				


					$sql3="SELECT * FROM 2bd_personal_lifestyle WHERE user_id=$profid";		
					$result3=mysqlexec($sql3);
					if($result3)
						while($row3=mysqli_fetch_assoc($result3))
						$occupation=$row3['occupation'];
				
						

							$sql4="SELECT * FROM 4bd_address_details WHERE user_id=$profid";
							$result4=mysqlexec($sql4);
							if($result4)
								while($row4=mysqli_fetch_assoc($result4))
								$permanent_address=$row4['permanent_address'];
							    

								$sql5="SELECT * FROM 8bd_religion_details WHERE user_id=$profid";
								$result5=mysqlexec($sql5);
								if($result5)
									while($row5=mysqli_fetch_assoc($result5))
									$religion=$row5['religion'];
								
				

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
					echo "<div class=\"biodatalist\"><a href=\"view_profile.php?id={$profid}\">";
					echo "<img src=\"profile/{$profid}\/{$pic1}\"/>";
                    echo "<div class=\"sb_user\"><span class=\"sb_biodatanumber\"> Biodata Number <br> {$profid}</span> </div>";
					echo "<div class=\"sb_user\">
                    <span class=\"sb_single_data\"> <span class=\"sb_value\"> Biodata Number </span>  <span class=\"sb_data\">{$profid}</span></span><br>
					<span class=\"sb_single_data\"> <span class=\"sb_value\"> Gender </span>          <span class=\"sb_data\"> {$biodatagender}</span></span><br>
					<span class=\"sb_single_data\"> <span class=\"sb_value\"> Occupation </span>      <span class=\"sb_data\"> {$occupation}</span></span><br>
					<span class=\"sb_single_data\"> <span class=\"sb_value\"> Religion </span>        <span class=\"sb_data\"> {$religion}</span></span> <br>
					<span class=\"sb_single_data\"> <span class=\"sb_value\"> Address </span>         <span class=\"sb_data\"> {$permanent_address}</span></span>
                    </div></a></div>";
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

.sb_biodatanumber{
    font-size: 22px;
    color: #ff0080;
}
    .sb_biodata_profile{
    display: flex;
    flex-wrap: wrap;
    width: 100%
    margin: 20px;
    padding: 20px;
    }
.biodatalist {
    width: 33.333%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 0px;
    font-weight: 400;
}
.biodatalist img{
    
    width: 170px;
    height: 170px;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 0px;
    margin-left: 100px;
    border-radius: 100px;
}
.sb_user{
    border: 1px solid #d5d5d5;
    padding: 5px;
    width: 100%;
    margin-top: 0px;
    margin-bottom: 30px;
    text-align: center;
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
    flex: 0 0 50%;
    text-align: center;
    padding: 7px;
    color: #434343;
    border: 2px solid #d5d5d5;
}

.sb_user .sb_data{
    flex: 0 0 50%;
    text-align: center;
    padding: 7px;
    color: #434343;
    border: 2px solid #d5d5d5;
}


</style>	
