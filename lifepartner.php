
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partner Prefernce</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-12 profile_left">   	 	
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Partner Preference</a></li>
			   </ul>
			   <form action="" method="post" name="partner">
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>My Ideal Partner would be</h1>
				    	<p><textarea name="descr" rows="5" cols="150"><?php echo $descr;?></textarea></p>
				    </div>
				    <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value">
									<input type="text" name="agemin" value="<?php echo $agemin; ?>">to <input type="text" name ="agemax" value="<?php echo $agemax; ?>"> 
									</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<div class="select-block1">
										<select name="maritalstatus">
						                    <option value="<?php if($marital_status="Single"){echo "Single";} elseif ($marital_status="Married") {echo "Married";} else{echo "Divorced";}?>"><?php echo $marital_status;?></option>

						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						                </div>
									</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="colour">
						                    <option value="">Black</option>
						                    <option value="">Fair</option> 
						               		<option value="">Normal</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height</td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="height" value="<?php echo $height;?>" size="60" maxlength="60" class="form-text">cm</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><div class="select-block1">
					                <select name="diet">
					                    <option value="Veg">Veg</option>
					                    <option value="Non Veg">Non Veg</option> 
					                </select>
							    	</div>
							    	</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span>
									<div class="select-block1">
					                    <select name="religion">
						                    <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    <option value="Jain">Jain</option>
						                    <option value="Sikh">Sikh</option>
						                    
					                    </select>
	                 				</div></span>
	                  			</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed">
									<div class="select-block1">
	                    				<select name="caste">
			                   				<option value="Roman Cathaolic">Roman Cathaolic</option>
						                    <option value="Latin Catholic">Latin Catholic</option>
						                    <option value="Penthecost">Penthecost</option>
						                    <option value="Mappila">Mappila</option>
						                    <option value="Thiyya">Thiyya</option>  
					                    </select>
		                 			</div></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="mothertounge">
						                    <option value="">Malayalam</option>
						                    <option value="">Hindi</option> 
						               		<option value="">English</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><div class="select-block1">
						                <select name="education">
						                    <option value="Primary">Primary</option>
						                    <option value="Tenth level">Tenth level</option> 
						               		<option value="+2">+2</option> 
						               		<option value="Degree">Degree</option> 
						               		<option value="PG">PG</option> 
						               		<option value="Doctorate">Doctorate</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value="<?php echo $occupation;?>" class="form-text"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed">
										<div class="select-block1">
						                    <select name="country">
							                    <option value="Not Applicable">Country</option>
							                    <option value="Hindu">India</option>
							                    <option value="Christian">China</option>
							                    <option value="Muslim">UAE</option>
						                    </select>
						                 </div>
						            </td>
								</tr>
							 </tbody>
				          </table>
				        </div>
				  
				  </div>
				 <input type="submit" value="Update Preferences">
		     </div>
		     </form>
		  </div>
	   </div>
   	 </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>


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
