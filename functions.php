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
function searchid(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$profid=$_POST['profid'];
		$sql="SELECT * FROM customer WHERE id=$profid";
		$result = mysqlexec($sql);
    	return $result;
	}
}

function search(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if($row){
    $agemin=$_POST['agemin'];
	}
	if($row){
    $agemax=$_POST['agemax'];
	}
	if($row){
    $maritalstatus=$_POST['maritalstatus'];
	}
	if($row){
    $country=$_POST['country'];
	}
	if($row){
    $state=$_POST['state'];
	}
	if($row){
    $religion=$_POST['religion'];
	}
	if($row){
    $mothertounge=$_POST['mothertounge'];
	}
	if($row){
    $sex = $_POST['sex'];
	}

    $sql="SELECT * FROM customer WHERE 
    sex='$sex' 
    AND age>='$agemin'
    AND age<='$agemax'
    AND maritalstatus = '$maritalstatus'
    AND country = '$country'
    AND state = '$state'
    AND religion = '$religion'
    AND mothertounge = '$mothertounge'
    ";

    $result = mysqlexec($sql);
    return $result;

  }
}


function writepartnerprefs($id){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if($row){
		$agemin=$_POST['agemin'];
		}
		if($row){
		$agemax=$_POST['agemax'];
		}
		if($row){
		$maritalstatus=$_POST['maritalstatus'];
		}
		if($row){
		$complexion=$_POST['colour'];
		}
		if($row){
		$height=$_POST['height'];
		}
		if($row){
		$diet=$_POST['diet'];
		}
		if($row){
		$religion=$_POST['religion'];
		}
		if($row){
		$caste=$_POST['caste'];
		}
		if($row){
		$mothertounge=$_POST['mothertounge'];
		}
		if($row){
		$education=$_POST['education'];
		}
		if($row){
		$occupation=$_POST['occupation'];
		}
		if($row){
		$country=$_POST['country'];
		}
		if($row){
		$descr=$_POST['descr'];
		}

		$sql = "UPDATE
				   partnerprefs 
				SET
				   agemin = '$agemin',
				   agemax='$agemax',
				   maritalstatus = '$maritalstatus',
				   complexion = '$complexion',
				   height = '$height',
				   diet = '$diet',
				   religion='$religion',
				   caste = '$caste',
				   mothertounge = '$mothertounge',
				   education='$education',
				   descr = '$descr',
				   occupation = '$occupation',
				   country = '$country' 
				WHERE
				   user_id = '$id'";

		$result = mysqlexec($sql);
		if ($result) {
			echo "<script>alert(\"Successfully updated Partner Preference\")</script>";
			echo "<script> window.location=\"userhome.php?id=$id\"</script>";

		}
		else{
			echo "Error";
		}
	}
}




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
	  echo "<a href=\"login.php\">";
	  echo "</a>";
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
--                S  T  A  R  T                  --
--     SHOSURBARI BIODATA FIELD ALL SECTION      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/



























/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--      Personal & Physical  / sb-biodata-1      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

function processprofile_form($id){
//Biodata 1 change  
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

	//Biodata 2 change
	$maritalstatus=$_POST['maritalstatus'];
	$smoke=$_POST['smoke'];
	$occupation=$_POST['occupation'];
	$occupation_describe=$_POST['occupation_describe'];
	$dress_code=$_POST['dress_code'];
	$aboutme=$_POST['aboutme'];	

	//Biodata 3 change
	$education_method=$_POST['education_method'];
	$sscpassyear=$_POST['sscpassyear'];
	$current_education=$_POST['current_education'];
	$maximum_education=$_POST['maximum_education'];

	//Biodata 4 change
	$country=$_POST['country'];
	$present_address=$_POST['present_address'];
	$permanent_address=$_POST['permanent_address'];
	$childhood=$_POST['childhood'];

	//Biodata 5 change
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

	//Biodata 6 change
	$guardians_agree_male=$_POST['guardians_agree_male'];
	$allowstudy_aftermarriage=$_POST['allowstudy_aftermarriage'];
	$allowjob_aftermarriage=$_POST['allowjob_aftermarriage'];
	$livewife_aftermarriage=$_POST['livewife_aftermarriage'];
	$profileby_male=$_POST['profileby_male'];
 
	//Biodata 7 change
	$guardians_agree_female=$_POST['guardians_agree_female'];
	$anyjob_aftermarriage=$_POST['anyjob_aftermarriage'];
	$studies_aftermarriage=$_POST['studies_aftermarriage'];
	$agree_marriage_student=$_POST['agree_marriage_student'];
	$profileby_female=$_POST['profileby_female'];

	//Biodata 8 change
	$religion=$_POST['religion'];
	$yourreligion_condition=$_POST['yourreligion_condition'];

	//Biodata 9 change
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

//Section 1 change
	require_once("includes/dbconn.php");

	

	//there is already a profile in this table for loggedin customer
	//update the data
 
	//Biodata 1 change
$sql = "INSERT 
				INTO
				1bd_personal_physical
				   (user_id, biodatagender, dateofbirth, height, weight, physicalstatus, Skin_tones, bloodgroup, profilecreationdate  ) 
				VALUES
				   ('$id', '$biodatagender', '$dob', '$height', '$weight', '$physicalstatus', '$Skin_tones', '$bloodgroup', CURDATE())
			";
$sql = "UPDATE 1bd_personal_physical SET biodatagender = '$biodatagender', dateofbirth = '$dob', height = '$height', weight = '$weight', physicalstatus = '$physicalstatus', Skin_tones = '$Skin_tones', bloodgroup = '$bloodgroup' WHERE user_id = '$id'";
$result = mysqlexec($sql);



//Biodata 2 change
$sql = "INSERT INTO 2bd_personal_lifestyle
		(user_id, maritalstatus, smoke, occupation, occupation_describe, dress_code, aboutme, profilecreationdate  ) 
	 VALUES
		('$id', '$maritalstatus', '$smoke', '$occupation', '$occupation_describe', '$dress_code', '$aboutme', CURDATE())";
$sql="UPDATE 2bd_personal_lifestyle SET maritalstatus = '$maritalstatus', smoke = '$smoke', occupation = '$occupation', occupation_describe = '$occupation_describe', dress_code = '$dress_code', aboutme = '$aboutme' WHERE user_id = '$id'";
$result = mysqlexec($sql);




//Biodata 3 change  
$sql = "INSERT INTO 3bd_educational_qualifications
		(user_id, education_method, sscpassyear, current_education, maximum_education, profilecreationdate  ) 
	 VALUES
		('$id', '$education_method', '$sscpassyear', '$current_education', '$maximum_education', CURDATE())
 ";
$sql="UPDATE 3bd_educational_qualifications SET education_method = '$education_method', sscpassyear = '$sscpassyear', current_education = '$current_education', maximum_education = '$maximum_education' WHERE user_id = '$id'";
$result = mysqlexec($sql);



//Biodata 4 change
$sql = "INSERT INTO 4bd_address_details
	(user_id, country, present_address, permanent_address, childhood, profilecreationdate  ) 
 VALUES
	('$id', '$country', '$present_address', '$permanent_address', '$childhood', CURDATE())
";
$sql="UPDATE 4bd_address_details SET country = '$country', present_address = '$present_address',permanent_address = '$permanent_address', childhood = '$childhood' WHERE user_id = '$id'";
$result = mysqlexec($sql);


//Biodata 5 change 
$sql = "INSERT INTO 5bd_family_information
	(user_id, father_alive, fatheroccupation, mother_alive, motheroccupation, brosis_number, brosis_info, uncle_profession, family_class, financial_condition, family_religious, profilecreationdate  ) 
 VALUES
	('$id', '$father_alive', '$fatheroccupation', '$mother_alive', '$motheroccupation', '$brosis_number', '$brosis_info', '$uncle_profession', '$family_class', '$financial_condition', '$family_religious', CURDATE())
";
$sql="UPDATE 5bd_family_information SET father_alive = '$father_alive', fatheroccupation = '$fatheroccupation', mother_alive = '$mother_alive', motheroccupation = '$motheroccupation', brosis_number = '$brosis_number', brosis_info = '$brosis_info', uncle_profession = '$uncle_profession', family_class = '$family_class', financial_condition = '$financial_condition', family_religious = '$family_religious' WHERE user_id = '$id'";
$result = mysqlexec($sql);



//Biodata 6 change 
$sql = "INSERT INTO 6bd_marriage_related_qs_male
	(user_id, guardians_agree_male, allowstudy_aftermarriage, allowjob_aftermarriage, livewife_aftermarriage, profileby_male, profilecreationdate  ) 
 VALUES
	('$id', '$guardians_agree_male', '$allowstudy_aftermarriage', '$allowjob_aftermarriage', '$livewife_aftermarriage', '$profileby_male', CURDATE())
";
$sql="UPDATE 6bd_marriage_related_qs_male SET guardians_agree_male = '$guardians_agree_male', allowstudy_aftermarriage = '$allowstudy_aftermarriage', allowjob_aftermarriage = '$allowjob_aftermarriage', livewife_aftermarriage = '$livewife_aftermarriage', profileby_male = '$profileby_male' WHERE user_id = '$id'";
$result = mysqlexec($sql);


//Biodata 7 change
$sql = "INSERT INTO 7bd_marriage_related_qs_female
	(user_id, guardians_agree_female, anyjob_aftermarriage, studies_aftermarriage, agree_marriage_student, profileby_female, profilecreationdate  ) 
 VALUES
	('$id', '$guardians_agree_female', '$anyjob_aftermarriage', '$studies_aftermarriage', '$agree_marriage_student', '$profileby_female', CURDATE())
";
$sql="UPDATE 7bd_marriage_related_qs_female SET guardians_agree_female = '$guardians_agree_female', anyjob_aftermarriage = '$anyjob_aftermarriage', studies_aftermarriage = '$studies_aftermarriage', agree_marriage_student = '$agree_marriage_student', profileby_female = '$profileby_female' WHERE user_id = '$id'";
$result = mysqlexec($sql);



//Biodata 8 change 
$sql = "INSERT INTO 8bd_religion_details
(user_id, religion, yourreligion_condition, profilecreationdate  ) 
VALUES
('$id', '$religion', '$yourreligion_condition', CURDATE())
";
$sql="UPDATE 8bd_religion_details SET religion = '$religion', yourreligion_condition = '$yourreligion_condition' WHERE user_id = '$id'";
$result = mysqlexec($sql);




//Biodata 9 change 
$sql = "INSERT INTO 9bd_expected_life_partner
(user_id, partner_religius, partner_district, partner_maritialstatus, partner_age, partner_skintones, partner_height, partner_education, partner_profession, partner_financial, partner_attributes, profilecreationdate  ) 
VALUES
('$id', '$partner_religius', '$partner_district', '$partner_maritialstatus', '$partner_age', '$partner_skintones', '$partner_height', '$partner_education', '$partner_profession', '$partner_financial', '$partner_attributes', CURDATE())
";
$sql="UPDATE 9bd_expected_life_partner SET partner_religius = '$partner_religius', partner_district = '$partner_district', partner_maritialstatus = '$partner_maritialstatus', partner_age = '$partner_age', partner_skintones = '$partner_skintones', partner_height = '$partner_height', partner_education = '$partner_education', partner_profession = '$partner_profession', partner_financial = '$partner_financial', partner_attributes = '$partner_attributes' WHERE user_id = '$id'";
$result = mysqlexec($sql);


if (mysqli_query($conn,$sql)) {
	echo "Successfully Updated Your Profile!";
	echo "<a href=\"view_profile.php?id={$id}\">";
	echo "Back to home";
	echo "</a>";
}
}

/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                   E   N   D                   --
--       Personal & Physical  / sb-biodata-1     --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/





/*
function processprofile_form($id){
   
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$dob=$year ."-" . $month . "-" .$day ;
	
	$religion=$_POST['religion'];
	$caste = $_POST['caste'];
	$subcaste=$_POST['subcaste'];
	
	$country = $_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$age=$_POST['age'];
	$maritalstatus=$_POST['maritalstatus'];
	$profileby=$_POST['profileby'];
	$education=$_POST['education'];
	$edudescr=$_POST['edudescr'];
	$bodytype=$_POST['bodytype'];
	$physicalstatus=$_POST['physicalstatus'];
	$drink=$_POST['drink'];
	$smoke=$_POST['smoke'];
	$mothertounge=$_POST['mothertounge'];
	$bloodgroup=$_POST['bloodgroup'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$colour=$_POST['colour'];
	$diet=$_POST['diet'];
	$occupation=$_POST['occupation'];
	$occupationdescr=$_POST['occupationdescr'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$motheroccupation=$_POST['motheroccupation'];
	$income=$_POST['income'];
	$bros=$_POST['bros'];
	$sis=$_POST['sis'];
	$aboutme=$_POST['aboutme'];
	


	require_once("includes/dbconn.php");
	$sql="SELECT user_id FROM customer WHERE user_id=$id";
	$result=mysqlexec($sql);

if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	$sql="UPDATE
   			customer 
		SET
		   email = '$email',
		   age = '$age',
		   sex = '$sex',
		   religion = '$religion',
		   caste = '$caste',
		   subcaste = '$subcaste',
		   district = '$district',
		   state = '$state',
		   country = '$country',
		   maritalstatus = '$maritalstatus',
		   profilecreatedby = '$profileby',
		   education  = '$education',
		   education_sub = '$edudescr',
		   firstname = '$fname',
		   lastname = '$lname',
		   body_type = '$bodytype',
		   physical_status = '$physicalstatus',
		   drink =  '$drink',
		   mothertounge = '$mothertounge',
		   colour = '$colour',
		   weight = '$weight',
		   smoke = '$smoke',
		   dateofbirth = '$dob', 
		   occupation = '$occupation', 
		   occupation_descr = '$occupationdescr', 
		   annual_income = '$income', 
		   fathers_occupation = '$fatheroccupation',
		   mothers_occupation = '$motheroccupation',
		   no_bro = '$bros',
		   no_sis = '$sis', 
		   aboutme = '$aboutme'
		WHERE user_id=$id; "
		   ;
   $result=mysqlexec($sql);
   if ($result) {
   	echo "<script>alert(\"Successfully Updated Profile\")</script>";
   	echo "<script> window.location=\"userhome.php?id=$id\"</script>";
   }
}else{
	//Insert the data
	$sql = "INSERT 
				INTO
				   customer
				   (user_id, email, age, sex, religion, caste, subcaste, district, state, country, maritalstatus, profilecreatedby, education, education_sub, firstname, lastname, body_type, physical_status, drink, mothertounge, colour, weight, height, blood_group, diet, smoke,   dateofbirth, occupation, occupation_descr, annual_income, fathers_occupation, mothers_occupation, no_bro, no_sis, aboutme, profilecreationdate  ) 
				VALUES
				   ('$id','$email', '$age', '$sex', '$religion', '$caste', '$subcaste', '$district', '$state', '$country', '$maritalstatus', '$profileby', '$education', '$edudescr', '$fname', '$lname', '$bodytype', '$physicalstatus', '$drink', '$mothertounge', '$colour', '$weight', '$height', '$bloodgroup', '$diet', '$smoke', '$dob', '$occupation', '$occupationdescr', '$income', '$fatheroccupation', '$motheroccupation', '$bros', '$sis', '$aboutme', CURDATE())
			";
	if (mysqli_query($conn,$sql)) {
	  echo "Successfully Created profile";
	  echo "<a href=\"userhome.php?id={$id}\">";
	  echo "Back to home";
	  echo "</a>";
	  //creating a slot for partner prefernce table for prefs details with cust id
	  $sql2="INSERT INTO partnerprefs (id, custId) VALUES('', '$id')";
	  mysqli_query($conn,$sql2);
	  $sql2="UPDATE TABLE users SET profilestat=1 WHERE id=$id";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
}
*/





















//function for upload photo

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
echo "The files has been uploaded, and your information has been added to the directory";
}
else {

// Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}

}//end uploadphoto function

?>
