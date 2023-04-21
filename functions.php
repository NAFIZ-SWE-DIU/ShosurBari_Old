<?php
function mysqlexec($sql){
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="matrimony"; // Database name
	error_reporting(0);

// Connect to server and select databse.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

	mysqli_select_db($conn,"$db_name")or die("cannot select DB");

	if($result = mysqli_query($conn, $sql)){
		return $result;
	}
	else{
		echo mysqli_error($conn);
	}

}






/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--    User / Biodata Profile Search Function     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
function searchid(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$profid=$_POST['profid'];
		$sql="SELECT * FROM users WHERE id=$profid";
		$result = mysqlexec($sql);
    	return $result;
	}
}


/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--            Multiple Option Search             --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
function search(){

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	   $biodatagender=$_POST['biodatagender'];
	   $Skin_tones=$_POST['Skin_tones'];

	   $sql="SELECT * FROM 1bd_personal_physical  WHERE  
		biodatagender LIKE '$biodatagender'  
	   AND Skin_tones LIKE '$Skin_tones'  
	   ";
	   $result = mysqlexec($sql);
	   return $result;
	}
}
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--    User / Biodata Profile Search Function     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/










/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--           New User Register Function          --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
function register(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fname=$_POST['fname'];
	$uname=$_POST['uname'];
	$gender=$_POST['gender'];
	$pnumber=$_POST['pnumber'];
	$email=$_POST['email'];
	$pass_1=$_POST['pass_1'];
	$pass_2=$_POST['pass_2'];
	require_once("includes/dbconn.php");


	$sql = "INSERT 
			INTO
			   users
			   ( profilestat, fullname, username, gender, number, email, password, userlevel) 
			VALUES
			   (0, '$fname', '$uname', '$gender', '$pnumber', '$email', '$pass_1', 0)";

	if (mysqli_query($conn,$sql)) {
	  //echo "<a href=\"login.php\">";
	  //echo "</a>";
	  header("location: login.php");

	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
}

function isloggedin(){
	if(!isset($_SESSION['id'])){
	 	return false;
	}
	else{
		return true;
	}
}
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--           New User Register Function          --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/









/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--           New User Register Function          --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
function contact_us(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name_contactus=$_POST['name_contactus'];
	$number_contactus=$_POST['number_contactus'];
	$email_contactus=$_POST['email_contactus'];
	$message_contactus=$_POST['message_contactus'];
	require_once("includes/dbconn.php");


	$sql = "INSERT 
			INTO
			contact_us
			   ( user_id, name_contactus, number_contactus, email_contactus, message_contactus, message_sendingdate) 
			VALUES
			   ('$id', '$name_contactus', '$number_contactus', '$email_contactus', '$message_contactus', CURDATE())";

	if (mysqli_query($conn,$sql)) {

	  header("location: index.php");

	} else {
	  echo "Error";
	}
}
}
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--           New User Register Function          --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/











/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--       Update & Store the data to Database     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
function processprofile_form($id){
    //Biodata 1 
	$biodatagender=$_POST['biodatagender'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$dob=$day ."-" . $month . "-" .$year ;
	$height=$_POST['height'];
	$weight=$_POST['weight'];	
	$physicalstatus=$_POST['physicalstatus'];
	$Skin_tones = $_POST['Skin_tones'];
	$bloodgroup=$_POST['bloodgroup'];

	//Biodata 2
	$maritalstatus=$_POST['maritalstatus'];
	$smoke=$_POST['smoke'];
	$occupation=$_POST['occupation'];
	$occupation_describe=$_POST['occupation_describe'];
	$dress_code=$_POST['dress_code'];
	$aboutme=$_POST['aboutme'];	

	//Biodata 3
	$education_method=$_POST['education_method'];
	$sscpassyear=$_POST['sscpassyear'];
	$current_education=$_POST['current_education'];
	$maximum_education=$_POST['maximum_education'];

	//Biodata 4
	$permanent_division=$_POST['permanent_division'];
	$present_address=$_POST['present_address'];
	$permanent_address=$_POST['permanent_address'];
	$childhood=$_POST['childhood'];

	//Biodata 5
	$father_alive=$_POST['father_alive'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$mother_alive=$_POST['mother_alive'];
	$motheroccupation=$_POST['motheroccupation'];
	$brosis_number=$_POST['brosis_number'];
	$brosis_info=$_POST['brosis_info'];
	$uncle_profession=$_POST['uncle_profession'];
	$family_class=$_POST['family_class'];
	$financial_condition=$_POST['financial_condition'];
	$family_religious=$_POST['family_religious'];

	//Biodata 6
	$guardians_agree_male=$_POST['guardians_agree_male'];
	$allowstudy_aftermarriage=$_POST['allowstudy_aftermarriage'];
	$allowjob_aftermarriage=$_POST['allowjob_aftermarriage'];
	$livewife_aftermarriage=$_POST['livewife_aftermarriage'];
	$profileby_male=$_POST['profileby_male'];
 
	//Biodata 7
	$guardians_agree_female=$_POST['guardians_agree_female'];
	$anyjob_aftermarriage=$_POST['anyjob_aftermarriage'];
	$studies_aftermarriage=$_POST['studies_aftermarriage'];
	$agree_marriage_student=$_POST['agree_marriage_student'];
	$profileby_female=$_POST['profileby_female'];

	//Biodata 8
	$religion=$_POST['religion'];
	$yourreligion_condition=$_POST['yourreligion_condition'];

	//Biodata 9
	$partner_religius=$_POST['partner_religius'];
	$partner_district=$_POST['partner_district'];
	$partner_maritialstatus=$_POST['partner_maritialstatus'];
	$partner_age=$_POST['partner_age'];
	$partner_skintones=$_POST['partner_skintones'];
	$partner_height=$_POST['partner_height'];
	$partner_education=$_POST['partner_education'];
	$partner_profession=$_POST['partner_profession'];
	$partner_financial=$_POST['partner_financial'];
	$partner_attributes=$_POST['partner_attributes'];




//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--      Personal & Physical  / sb-biodata-1      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
	$sql="SELECT user_id FROM 1bd_personal_physical WHERE user_id=$id";
	$result=mysqlexec($sql);

	if(mysqli_num_rows($result)>=1){
	$sql = "UPDATE 1bd_personal_physical SET biodatagender = '$biodatagender', dateofbirth = '$dob', height = '$height', weight = '$weight', physicalstatus = '$physicalstatus', Skin_tones = '$Skin_tones', bloodgroup = '$bloodgroup' WHERE user_id = '$id'";
	$result=mysqlexec($sql);
	//if ($result)
	//{echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT 
	INTO
	1bd_personal_physical
	(user_id, biodatagender, dateofbirth, height, weight, physicalstatus, Skin_tones, bloodgroup, profilecreationdate  ) 
	VALUES
	('$id', '$biodatagender', '$dob', '$height', '$weight', '$physicalstatus', '$Skin_tones', '$bloodgroup', CURDATE())";
    if (mysqli_query($conn,$sql))
    { echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Personal & Life Style  / sb-biodata-2     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 2bd_personal_lifestyle WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 2bd_personal_lifestyle SET maritalstatus = '$maritalstatus', smoke = '$smoke', occupation = '$occupation', occupation_describe = '$occupation_describe', dress_code = '$dress_code', aboutme = '$aboutme' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    //if ($result)
	//{ echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT INTO 2bd_personal_lifestyle
	(user_id, maritalstatus, smoke, occupation, occupation_describe, dress_code, aboutme, profilecreationdate  ) 
	VALUES
	('$id', '$maritalstatus', '$smoke', '$occupation', '$occupation_describe', '$dress_code', '$aboutme', CURDATE())";
    if (mysqli_query($conn,$sql))
	{echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Educational Qualifications  / sb-biodata-3   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 3bd_educational_qualifications WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 3bd_educational_qualifications SET education_method = '$education_method', sscpassyear = '$sscpassyear', current_education = '$current_education', maximum_education = '$maximum_education' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    //if ($result)
	//{ echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT INTO 3bd_educational_qualifications
	(user_id, education_method, sscpassyear, current_education, maximum_education, profilecreationdate  ) 
	VALUES
	('$id', '$education_method', '$sscpassyear', '$current_education', '$maximum_education', CURDATE())";
    if (mysqli_query($conn,$sql))
	{echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--       Address Details  /  sb-biodata-4        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 4bd_address_details WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 4bd_address_details SET permanent_division = '$permanent_division', present_address = '$present_address',permanent_address = '$permanent_address', childhood = '$childhood' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    //if ($result)
	//{echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT INTO 4bd_address_details
    (user_id, permanent_division, present_address, permanent_address, childhood, profilecreationdate  ) 
    VALUES
	('$id', '$permanent_division', '$present_address', '$permanent_address', '$childhood', CURDATE())";
    if (mysqli_query($conn,$sql))
	{echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Family Information  / sb-biodata-5        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 5bd_family_information WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 5bd_family_information SET father_alive = '$father_alive', fatheroccupation = '$fatheroccupation', mother_alive = '$mother_alive', motheroccupation = '$motheroccupation', brosis_number = '$brosis_number', brosis_info = '$brosis_info', uncle_profession = '$uncle_profession', family_class = '$family_class', financial_condition = '$financial_condition', family_religious = '$family_religious' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    //if ($result)
	//{ echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT INTO 5bd_family_information
	(user_id, father_alive, fatheroccupation, mother_alive, motheroccupation, brosis_number, brosis_info, uncle_profession, family_class, financial_condition, family_religious, profilecreationdate  ) 
    VALUES
	('$id', '$father_alive', '$fatheroccupation', '$mother_alive', '$motheroccupation', '$brosis_number', '$brosis_info', '$uncle_profession', '$family_class', '$financial_condition', '$family_religious', CURDATE())";
    if (mysqli_query($conn,$sql))
	{echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--   Male Marriage related Info / sb-biodata-6   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 6bd_marriage_related_qs_male WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 6bd_marriage_related_qs_male SET guardians_agree_male = '$guardians_agree_male', allowstudy_aftermarriage = '$allowstudy_aftermarriage', allowjob_aftermarriage = '$allowjob_aftermarriage', livewife_aftermarriage = '$livewife_aftermarriage', profileby_male = '$profileby_male' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    //if ($result)
	//{echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT INTO 6bd_marriage_related_qs_male
	(user_id, guardians_agree_male, allowstudy_aftermarriage, allowjob_aftermarriage, livewife_aftermarriage, profileby_male, profilecreationdate  ) 
    VALUES
	('$id', '$guardians_agree_male', '$allowstudy_aftermarriage', '$allowjob_aftermarriage', '$livewife_aftermarriage', '$profileby_male', CURDATE())";
    if (mysqli_query($conn,$sql))
	{ echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Female Marriage related Info / sb-biodata-7  --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 7bd_marriage_related_qs_female WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 7bd_marriage_related_qs_female SET guardians_agree_female = '$guardians_agree_female', anyjob_aftermarriage = '$anyjob_aftermarriage', studies_aftermarriage = '$studies_aftermarriage', agree_marriage_student = '$agree_marriage_student', profileby_female = '$profileby_female' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    //if ($result)
	//{echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT INTO 7bd_marriage_related_qs_female
    (user_id, guardians_agree_female, anyjob_aftermarriage, studies_aftermarriage, agree_marriage_student, profileby_female, profilecreationdate  ) 
    VALUES
	('$id', '$guardians_agree_female', '$anyjob_aftermarriage', '$studies_aftermarriage', '$agree_marriage_student', '$profileby_female', CURDATE())";
    if (mysqli_query($conn,$sql))
	{echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--        Religion Details / sb-biodata-8        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 8bd_religion_details WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 8bd_religion_details SET religion = '$religion', yourreligion_condition = '$yourreligion_condition' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    //if ($result)
	//{echo "Successfully Updated Biodata";}

    }else{

    $sql = "INSERT INTO 8bd_religion_details
    (user_id, religion, yourreligion_condition, profilecreationdate  ) 
    VALUES
    ('$id', '$religion', '$yourreligion_condition', CURDATE())";
    if (mysqli_query($conn,$sql))
	{echo " ";}
}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Expected Life Partner / sb-biodata-9      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
require_once("includes/dbconn.php");
    $sql="SELECT user_id FROM 9bd_expected_life_partner WHERE user_id=$id";
    $result=mysqlexec($sql);

    if(mysqli_num_rows($result)>=1){
    $sql="UPDATE 9bd_expected_life_partner SET partner_religius = '$partner_religius', partner_district = '$partner_district', partner_maritialstatus = '$partner_maritialstatus', partner_age = '$partner_age', partner_skintones = '$partner_skintones', partner_height = '$partner_height', partner_education = '$partner_education', partner_profession = '$partner_profession', partner_financial = '$partner_financial', partner_attributes = '$partner_attributes' WHERE user_id = '$id'";
    $result = mysqlexec($sql);
    if ($result)
	{
	    echo "Successfully Biodata Updated!";
	    echo "<a href=\"view_profile.php?id={$id}\">";
    }

    }else{

    $sql = "INSERT INTO 9bd_expected_life_partner
    (user_id, partner_religius, partner_district, partner_maritialstatus, partner_age, partner_skintones, partner_height, partner_education, partner_profession, partner_financial, partner_attributes, profilecreationdate  ) 
    VALUES
    ('$id', '$partner_religius', '$partner_district', '$partner_maritialstatus', '$partner_age', '$partner_skintones', '$partner_height', '$partner_education', '$partner_profession', '$partner_financial', '$partner_attributes', CURDATE())";
    if (mysqli_query($conn,$sql))
	{
	    echo "Thanks! Successfully Uploaded New Biodata!";
	    echo "<a href=\"view_profile.php?id={$id}\">";
    }
}



}
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--       Update & Store the data to Database     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/










/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--           Function For Upload Photo           --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
function uploadphoto($id){
	$target = "profile/". $id ."/";
if (!file_exists($target)) {
    mkdir($target, 0777, true);
}
//specifying target for each file
$target1 = $target . basename( $_FILES['pic1']['name']);


// This gets all the other information from the form
$pic1=($_FILES['pic1']['name']);

$sql="SELECT id FROM photos WHERE user_id = '$id'";
$result = mysqlexec($sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		$sql="INSERT INTO photos (id, user_id, pic1) VALUES ('', '$id', '$pic1')";
		// Writes the information to the database
		mysqlexec($sql);

		
} else {
    // There is a photo for customer so up
     $sql="UPDATE photos SET pic1 = '$pic1' WHERE user_id=$id";
		// Writes the information to the database
	mysqlexec($sql);
}

// Writes the photo to the server
if(move_uploaded_file($_FILES['pic1']['tmp_name'], $target1))
{

// Tells you if its all ok
echo "Thanlks! Successfull Uploaded Your Profile Photo.";
}
else {

// Gives and error if its not
echo "Sorry, there was a problem uploading your photo.";
}

}
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--           Function For Upload Photo           --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/


?>
