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
    function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $biodatagender = isset($_POST['biodatagender']) ? $_POST['biodatagender'] : '';
            $Skin_tones = isset($_POST['Skin_tones']) ? $_POST['Skin_tones'] : '';
            $maritalstatus = isset($_POST['maritalstatus']) ? $_POST['maritalstatus'] : '';
            $scndry_edu_method = isset($_POST['scndry_edu_method']) ? $_POST['scndry_edu_method'] : '';

            // Check if any option is not selected
            if (empty($biodatagender) || empty($Skin_tones) || empty($maritalstatus) || empty($scndry_edu_method)) {
                // If any option is not selected, return the page
                return;
            }

            $sql = "SELECT * FROM 1bd_personal_physical 
            LEFT JOIN 6bd_7bd_marital_status ON 1bd_personal_physical.user_id = 6bd_7bd_marital_status.user_id
            LEFT JOIN 3bd_secondaryedu_method ON 1bd_personal_physical.user_id = 3bd_secondaryedu_method.user_id
            WHERE 1=1";

            if (!empty($biodatagender)) {
                if (!is_array($biodatagender)) {
                    $sql .= " AND biodatagender = '$biodatagender'";
                } else {
                    $sql .= " AND (";
                    $conditions = [];
                    foreach ($biodatagender as $gender) {
                        $conditions[] = "biodatagender = '$gender'";
                    }
                    $sql .= implode(" OR ", $conditions);
                    $sql .= ")";
                }
            }

            if (!empty($Skin_tones)) {
                if (!is_array($Skin_tones)) {
                    $skinTonesArray = explode(',', $Skin_tones);
                    $skinTonesCondition = implode("','", $skinTonesArray);
                    $sql .= " AND Skin_tones IN ('$skinTonesCondition')";
                }
            }

            if (!empty($maritalstatus)) {
                if (!is_array($maritalstatus)) {
                    $maritalStatusArray = explode(',', $maritalstatus);
                    $maritalStatusCondition = implode("','", $maritalStatusArray);
                    $sql .= " AND maritalstatus IN ('$maritalStatusCondition')";
                }
            }

            if (!empty($scndry_edu_method)) {
                if (!is_array($scndry_edu_method)) {
                    $educationMethodArray = explode(',', $scndry_edu_method);
                    $educationMethodCondition = implode("','", $educationMethodArray);
                    $sql .= " AND scndry_edu_method IN ('$educationMethodCondition')";
                }
            }

            $result = mysqlexec($sql);

            // Check if no matching data found for biodatagender
            if (empty($result) && !is_array($biodatagender)) {
                // If no matching data found for biodatagender, return the page
                return;
            } elseif (empty($result) && is_array($biodatagender)) {
                // If no matching data found for any of the biodatagender options, return the page
                return;
            }

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
        global $conn;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fname=$_POST['fname'];
            $uname=$_POST['uname'];
            $gender=$_POST['gender'];
            $pnumber = $_POST['pnumber'];
            $email = $_POST['email'];
            $pass_1 = $_POST['pass_1'];
            $pass_2 = $_POST['pass_2'];
            require_once("includes/dbconn.php");

            $sql = "INSERT INTO users 
            ( fullname, username, gender, number, email, password, active, register_date) 
            VALUES ('$fname', '$uname', '$gender', '$pnumber', '$email', '$pass_1', 1, DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";

        


            if (mysqli_query($conn,$sql)) {
                // Get the ID of the newly registered user
                $id = mysqli_insert_id($conn);
                
                // Set a session variable to store the user ID
                $_SESSION['id'] = $id;
                
                // Create a record for the user in the deactivate table
                $deactivate_sql = "INSERT INTO deactivate (user_id, status) VALUES ($id, 0)";
                mysqli_query($conn, $deactivate_sql);

                // Save login information in cookie
                setcookie('username', $uname, time() + (86400 * 365), "/");
                setcookie('email', $email, time() + (86400 * 365), "/");
                setcookie('password', $pass_1, time() + (86400 * 365), "/");
                
                // Redirect the user to the userhome.php page with the user ID as a parameter in the URL
                header("location: userhome.php?id=$id");

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




    // Password updated From User Account
    function updatePassword($userId, $newPassword) {
        require_once("includes/dbconn.php");
        
        // Update the password in the database
        $update_query = "UPDATE users SET password = '$newPassword' WHERE id = $userId";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            return true; // Password updated successfully
        } else {
            return false; // Error updating password
        }
    }


    if (isset($_POST['update_account'])) {
        // Update user account
        $userId = $_SESSION['id'];
        $newPassword = $_POST['pass_1'];
        $confirmPassword = $_POST['pass_2'];

        // Check if new passwords match
        if ($newPassword != $confirmPassword) {
            echo 'New passwords do not match';
        } else {
            // Check if current password matches the one in the database
            $query = "SELECT password FROM users WHERE id = $userId";

            
                // Update the password
                $passwordUpdated = updatePassword($userId, $newPassword);

                if ($passwordUpdated) {
                    echo 'Password updated successfully';
                } else {
                    echo 'Error updating password';
                }
        }
    }



    //Update Password save info to cookie.
    if (isset($_POST['update_account'])) {
        // Retrieve the change and confirm password values
        $newPassword = $_POST['pass_1'];
        $confirmPassword = $_POST['pass_2'];

        // Check two password match
        if ($newPassword === $confirmPassword) {
            // Save the change password value in the cookie
            setcookie('password', $newPassword, time() + (86400 * 365), "/");
        } else {
            // Display an error message if the passwords don't match
            echo "Change and confirm passwords do not match.";
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
    --            Biodata Contact / Request          --
    --                                               --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
    function biodata_sale_customer(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cust_name=$_POST['cust_name'];
            $cust_email=$_POST['cust_email'];
            $cust_number=$_POST['cust_number'];
            $cust_permanent_address=$_POST['cust_permanent_address'];
            $request_biodata_number=$_POST['request_biodata_number'];
            $biodata_quantities=$_POST['biodata_quantities'];

            $payment_method=$_POST['payment_method'];
            $bkash_number=$_POST['bkash_number'];
            $bkash_transaction_id=$_POST['bkash_transaction_id'];
            $nagad_number=$_POST['nagad_number'];
            $nagad_transaction_id=$_POST['nagad_transaction_id'];
            $roket_number=$_POST['roket_number'];
            $roket_transaction_id=$_POST['roket_transaction_id'];


            require_once("includes/dbconn.php");


            $sql = "INSERT 
                INTO
                customer(cust_name, cust_email, cust_number, cust_permanent_address, request_biodata_number, biodata_quantities, payment_method, bkash_number, bkash_transaction_id, nagad_number, nagad_transaction_id, roket_number, roket_transaction_id, request_date) 
                VALUES
                ('$cust_name', '$cust_email', '$cust_number', '$cust_permanent_address', '$request_biodata_number', '$biodata_quantities', '$payment_method', '$bkash_number', '$bkash_transaction_id', '$nagad_number', '$nagad_transaction_id', '$roket_number', '$roket_transaction_id', CURDATE())";

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
    --            Biodata Contact / Request          --
    --                                               --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/










    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                S  T  A  R  T                  --
    --            User Contact Us Function           --
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
    --            User Contact Us Function           --
    --                                               --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/










    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                  S  T  A  R  T                --
    --        User Bio Data Save to Database         --
    --                                               --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

    function post_biodata($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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
	$smoke=$_POST['smoke'];
	$occupation_sector=$_POST['occupation_sector'];
	$other_occupation_sector=$_POST['other_occupation_sector'];
	$business_occupation_level=$_POST['business_occupation_level'];
	$student_occupation_level=$_POST['student_occupation_level'];
    $health_occupation_level=$_POST['health_occupation_level'];
	$engineer_occupation_level=$_POST['engineer_occupation_level'];
	$teacher_occupation_level=$_POST['teacher_occupation_level'];
	$defense_occupation_level=$_POST['defense_occupation_level'];
	$foreigner_occupation_level=$_POST['foreigner_occupation_level'];
	$garments_occupation_level=$_POST['garments_occupation_level'];
	$driver_occupation_level=$_POST['driver_occupation_level'];
	$service_andcommon_occupation_level=$_POST['service_andcommon_occupation_level'];
	$mistri_occupation_level=$_POST['mistri_occupation_level'];
	$occupation_describe=$_POST['occupation_describe'];
	$dress_code=$_POST['dress_code'];
	$aboutme=$_POST['aboutme'];		


	//Biodata 3
	$scndry_edu_method=$_POST['scndry_edu_method'];
	$maxedu_qulfctn=$_POST['maxedu_qulfctn'];

	$qawmi_madrasa_hafez=$_POST['qawmi_madrasa_hafez'];
	$qawmimadrasa_dawrapass=$_POST['qawmimadrasa_dawrapass'];
	$kowmi_dawrapas_year=$_POST['kowmi_dawrapas_year'];
	$kowmi_current_edu_level=$_POST['kowmi_current_edu_level'];

	$gnrl_mdrs_secondary_pass=$_POST['gnrl_mdrs_secondary_pass'];
	$gnrl_mdrs_secondary_pass_year=$_POST['gnrl_mdrs_secondary_pass_year'];
	$gnrl_mdrs_secondary_end_year=$_POST['gnrl_mdrs_secondary_end_year'];
	$gnrlmdrs_secondary_running_std=$_POST['gnrlmdrs_secondary_running_std'];

	$higher_secondary_edu_method=$_POST['higher_secondary_edu_method'];
	$gnrlmdrs_hrsecondary_pass=$_POST['gnrlmdrs_hrsecondary_pass'];
	$gnrlmdrs_hrsecondary_pass_year=$_POST['gnrlmdrs_hrsecondary_pass_year'];
	$gnrlmdrs_hrsecondary_exam_year=$_POST['gnrlmdrs_hrsecondary_exam_year'];
	$gnrlmdrs_hrsecondary_group=$_POST['gnrlmdrs_hrsecondary_group'];
	$gnrlmdrs_hrsecondary_rningstd=$_POST['gnrlmdrs_hrsecondary_rningstd'];
	$diploma_hrsecondary_pass=$_POST['diploma_hrsecondary_pass'];
	$diploma_hrsecondary_pass_year=$_POST['diploma_hrsecondary_pass_year'];
	$diploma_hrsecondary_sub=$_POST['diploma_hrsecondary_sub'];
	$diploma_hrsecondary_endingyear=$_POST['diploma_hrsecondary_endingyear'];

	$varsity_edu_method=$_POST['varsity_edu_method'];
	$uvarsity_pass=$_POST['uvarsity_pass'];
	$varsity_passing_year=$_POST['varsity_passing_year'];
	$university_subject=$_POST['university_subject'];
	$varsity_ending_year=$_POST['varsity_ending_year'];
	$uvarsity_name=$_POST['uvarsity_name'];
	$others_edu_qualification=$_POST['others_edu_qualification'];


	//Biodata 4
	$permanent_division=$_POST['permanent_division'];
	$home_district_under_barishal=$_POST['home_district_under_barishal'];
    $home_district_under_chattogram=$_POST['home_district_under_chattogram'];
	$home_district_under_dhaka=$_POST['home_district_under_dhaka'];
	$home_district_under_khulna=$_POST['home_district_under_khulna'];
	$home_district_under_mymensingh=$_POST['home_district_under_mymensingh'];
	$home_district_under_rajshahi=$_POST['home_district_under_rajshahi'];
	$home_district_under_rangpur=$_POST['home_district_under_rangpur'];
	$home_district_under_sylhet=$_POST['home_district_under_sylhet'];

	$country_present_address=$_POST['country_present_address'];
	$present_address_location=$_POST['present_address_location'];
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
	$family_religious_condition=$_POST['family_religious_condition'];

	// Marital Status - Biodata 6 & 7
	$maritalstatus=$_POST['maritalstatus'];
	// Divorce
	$divorce_reason=$_POST['divorce_reason'];
	// Widow
	$how_widow=$_POST['how_widow'];
	// Widower
	$how_widower=$_POST['how_widower'];
	// Married
	$get_wife_permission=$_POST['get_wife_permission'];
	$get_family_permission=$_POST['get_family_permission'];
	$why_again_married=$_POST['why_again_married'];

	$how_many_son=$_POST['how_many_son'];
	$son_details=$_POST['son_details'];

	//Biodata 6
	$guardians_agree=$_POST['guardians_agree'];
	$allowstudy_aftermarriage=$_POST['allowstudy_aftermarriage'];
	$allowjob_aftermarriage=$_POST['allowjob_aftermarriage'];
	$livewife_aftermarriage=$_POST['livewife_aftermarriage'];
	$profileby=$_POST['profileby'];
 
	//Biodata 7
	$guardians_agree=$_POST['guardians_agree'];
	$anyjob_aftermarriage=$_POST['anyjob_aftermarriage'];
	$studies_aftermarriage=$_POST['studies_aftermarriage'];
	$agree_marriage_student=$_POST['agree_marriage_student'];
	$profileby=$_POST['profileby'];

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

    require_once("includes/dbconn.php");

//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--      Personal & Physical  / sb-biodata-1      --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
    $sql = "INSERT 
	INTO
	1bd_personal_physical
	(user_id, biodatagender, dateofbirth, height, weight, physicalstatus, Skin_tones, bloodgroup, profilecreationdate) 
	VALUES
	('$id', '$biodatagender', '$dob', '$height', '$weight', '$physicalstatus', '$Skin_tones', '$bloodgroup', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
    if (mysqli_query($conn,$sql))
    { echo " ";}



//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--     Personal & Life Style  / sb-biodata-2     --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
    $sql = "INSERT INTO 2bd_personal_lifestyle
	(user_id, smoke, occupation_sector, other_occupation_sector, business_occupation_level, student_occupation_level, health_occupation_level, engineer_occupation_level, teacher_occupation_level, defense_occupation_level, foreigner_occupation_level, garments_occupation_level, driver_occupation_level, service_andcommon_occupation_level, mistri_occupation_level, occupation_describe, dress_code, aboutme, profilecreationdate  ) 
	VALUES
	('$id', '$smoke', '$occupation_sector', '$other_occupation_sector', '$business_occupation_level', '$student_occupation_level', '$health_occupation_level', '$engineer_occupation_level', '$teacher_occupation_level', '$defense_occupation_level', '$foreigner_occupation_level', '$garments_occupation_level', '$driver_occupation_level', '$service_andcommon_occupation_level', '$mistri_occupation_level', '$occupation_describe', '$dress_code', '$aboutme', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
    if (mysqli_query($conn,$sql))
	{echo " ";}





//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--  Educational Qualifications  / sb-biodata-3   --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --*/
$sql = "INSERT INTO 3bd_secondaryedu_method
(user_id, scndry_edu_method, maxedu_qulfctn, gnrl_mdrs_secondary_pass, gnrl_mdrs_secondary_pass_year, gnrl_mdrs_secondary_end_year, gnrlmdrs_secondary_running_std, profilecreationdate  ) 
VALUES
('$id', '$scndry_edu_method', '$maxedu_qulfctn', '$gnrl_mdrs_secondary_pass', '$gnrl_mdrs_secondary_pass_year', '$gnrl_mdrs_secondary_end_year', '$gnrlmdrs_secondary_running_std', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}


//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--  Educational Qualifications  / sb-biodata-3   --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --*/
$sql = "INSERT INTO 3bd_kowmi_madrasaedu_method
(user_id, qawmi_madrasa_hafez, qawmimadrasa_dawrapass, kowmi_dawrapas_year, kowmi_current_edu_level, profilecreationdate  ) 
VALUES
('$id', '$qawmi_madrasa_hafez', '$qawmimadrasa_dawrapass', '$kowmi_dawrapas_year', '$kowmi_current_edu_level', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}




//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--  Educational Qualifications  / sb-biodata-3   --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --*/
$sql = "INSERT INTO 3bd_higher_secondaryedu_method
(user_id, higher_secondary_edu_method, gnrlmdrs_hrsecondary_pass, gnrlmdrs_hrsecondary_pass_year, gnrlmdrs_hrsecondary_exam_year, gnrlmdrs_hrsecondary_group, gnrlmdrs_hrsecondary_rningstd, diploma_hrsecondary_pass, diploma_hrsecondary_pass_year, diploma_hrsecondary_sub, diploma_hrsecondary_endingyear, profilecreationdate  ) 
VALUES
('$id', '$higher_secondary_edu_method', '$gnrlmdrs_hrsecondary_pass', '$gnrlmdrs_hrsecondary_pass_year', '$gnrlmdrs_hrsecondary_exam_year', '$gnrlmdrs_hrsecondary_group', '$gnrlmdrs_hrsecondary_rningstd', '$diploma_hrsecondary_pass', '$diploma_hrsecondary_pass_year', '$diploma_hrsecondary_sub', '$diploma_hrsecondary_endingyear', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}



//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--  Educational Qualifications  / sb-biodata-3   --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --*/
$sql = "INSERT INTO 3bd_universityedu_method
(user_id, scndry_edu_method, higher_secondary_edu_method, varsity_edu_method, uvarsity_pass, varsity_passing_year, university_subject, varsity_ending_year, uvarsity_name, others_edu_qualification, profilecreationdate ) 
VALUES
('$id', '$scndry_edu_method', '$higher_secondary_edu_method', '$varsity_edu_method', '$uvarsity_pass', '$varsity_passing_year', '$university_subject', '$varsity_ending_year', '$uvarsity_name', '$others_edu_qualification', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}




//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--       Address Details  /  sb-biodata-4        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
$sql = "INSERT INTO 4bd_address_details
(user_id, permanent_division, home_district_under_barishal, home_district_under_chattogram, home_district_under_dhaka, home_district_under_khulna, home_district_under_mymensingh, home_district_under_rajshahi, home_district_under_rangpur, home_district_under_sylhet, country_present_address, present_address_location, childhood, profilecreationdate  ) 
VALUES
('$id', '$permanent_division', '$home_district_under_barishal', '$home_district_under_chattogram', '$home_district_under_dhaka', '$home_district_under_khulna', '$home_district_under_mymensingh', '$home_district_under_rajshahi', '$home_district_under_rangpur', '$home_district_under_sylhet', '$country_present_address', '$present_address_location', '$childhood', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}



//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Family Information  / sb-biodata-5        --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
$sql = "INSERT INTO 5bd_family_information
(user_id, father_alive, fatheroccupation, mother_alive, motheroccupation, brosis_number, brosis_info, uncle_profession, family_class, financial_condition, family_religious_condition, profilecreationdate  ) 
VALUES
('$id', '$father_alive', '$fatheroccupation', '$mother_alive', '$motheroccupation', '$brosis_number', '$brosis_info', '$uncle_profession', '$family_class', '$financial_condition', '$family_religious_condition', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}




//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--  Marriage related Info /Marital Status 6 & 7  --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
$sql = "INSERT INTO 6bd_7bd_marital_status
(user_id, maritalstatus, divorce_reason, how_widow, how_widower, get_wife_permission, get_family_permission, why_again_married, how_many_son, son_details, profilecreationdate  ) 
VALUES
('$id', '$maritalstatus', '$divorce_reason', '$how_widow', '$how_widower', '$get_wife_permission', '$get_family_permission', '$why_again_married', '$how_many_son', '$son_details',  DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}




//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--   Male Marriage related Info / sb-biodata-6   --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
$sql = "INSERT INTO 6bd_marriage_related_qs_male
(user_id, guardians_agree, allowstudy_aftermarriage, allowjob_aftermarriage, livewife_aftermarriage, profileby, profilecreationdate  ) 
VALUES
('$id', '$guardians_agree', '$allowstudy_aftermarriage', '$allowjob_aftermarriage', '$livewife_aftermarriage', '$profileby',  DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{ echo " ";}




//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--  Female Marriage related Info / sb-biodata-7  --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
$sql = "INSERT INTO 7bd_marriage_related_qs_female
(user_id, guardians_agree, anyjob_aftermarriage, studies_aftermarriage, agree_marriage_student, profileby, profilecreationdate  ) 
VALUES
('$id', '$guardians_agree', '$anyjob_aftermarriage', '$studies_aftermarriage', '$agree_marriage_student', '$profileby', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}




//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
--        Religion Details / sb-biodata-8        --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
$sql = "INSERT INTO 8bd_religion_details
(user_id, religion, yourreligion_condition, profilecreationdate  ) 
VALUES
('$id', '$religion', '$yourreligion_condition', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
if (mysqli_query($conn,$sql))
{echo " ";}



    
//Update & Store the data to Database
/*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--     Expected Life Partner / sb-biodata-9      --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

$sql = "INSERT INTO 9bd_expected_life_partner
(user_id, partner_religius, partner_district, partner_maritialstatus, partner_age, partner_skintones, partner_height, partner_education, partner_profession, partner_financial, partner_attributes, profilecreationdate  ) 
VALUES
('$id', '$partner_religius', '$partner_district', '$partner_maritialstatus', '$partner_age', '$partner_skintones', '$partner_height', '$partner_education', '$partner_profession', '$partner_financial', '$partner_attributes', CURDATE())";
if (mysqli_query($conn,$sql))
{
    echo "Thanks! Successfully Uploaded New Biodata!";
    header("Location: view_profile.php?id={$id}");
}
}
    }
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --        User Bio Data Save to Database         --
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

        //Specifying target for each file
        $target1 = $target . basename( $_FILES['pic1']['name']);


        // This gets all the other information from the form
        $pic1=($_FILES['pic1']['name']);

        $sql="SELECT id FROM photos WHERE user_id = '$id'";
        $result = mysqlexec($sql);

        //code part to check weather a photo already exists
        if(mysqli_num_rows($result) == 0) {
            // no photo for curret user, do stuff
            $sql="INSERT INTO photos (id, user_id, pic1) VALUES ('', '$id', '$pic1')";
            // Writes the information to the database
            mysqlexec($sql);     
        } 
        
        else {
            // There is a photo for customer so up
            $sql="UPDATE photos SET pic1 = '$pic1' WHERE user_id=$id";
                // Writes the information to the database
            mysqlexec($sql);
        }

        // Writes the photo to the server
        if(move_uploaded_file($_FILES['pic1']['tmp_name'], $target1)){
            // Tells you if its all ok
            //Thanlks! Successfull Uploaded Your Profile Photo - Showing JavaScript.
            echo "";
        }

        else {
            // Gives and error if its not
            //Sorry, there was a problem uploading your photo.
            echo "";
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
