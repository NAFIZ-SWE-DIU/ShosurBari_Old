<?php
    function mysqlexec($sql){
          $host="localhost"; // Host name
          $username="root"; // Mysql username
          $password=""; // Mysql password
          $db_name="matrimony"; // Database name

        //  $host="sql211.infinityfree.com"; // Host name 
        //  $username="if0_34380678"; // Mysql username 
        //  $password="AJFC2H7KllI"; // Mysql password 
        //  $db_name="if0_34380678_matrimony"; // Database name 

        error_reporting(0);

    // Connect to server and select databse.
        $conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

        mysqli_select_db($conn,"$db_name")or die("cannot select DB");
        mysqli_set_charset($conn, "utf8mb4"); //Bangla font show from database.


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
            $Skin_tones = isset($_POST['Skin_tones']) ? $_POST['Skin_tones'] : [];
            $religions = isset($_POST['religion']) ? $_POST['religion'] : [];
            $maritalStatus = isset($_POST['maritalstatus']) ? $_POST['maritalstatus'] : [];
            $family_class = isset($_POST['family_class']) ? $_POST['family_class'] : [];
            $country_present_address = isset($_POST['country_present_address']) ? $_POST['country_present_address'] : [];
            $scndry_edu_method = isset($_POST['scndry_edu_method']) ? $_POST['scndry_edu_method'] : [];
    
            // $allOccupations = isset($_POST['occupation_sector']) && in_array('Any Occupation', $_POST['occupation_sector']);
            $allOccupations = isset($_POST['occupation_sector']) ? $_POST['occupation_sector'] : [];
            $student_occupation_level = isset($_POST['student_occupation_level']) ? $_POST['student_occupation_level'] : [];
            $health_occupation_level = isset($_POST['health_occupation_level']) ? $_POST['health_occupation_level'] : [];
            $engineer_occupation_level = isset($_POST['engineer_occupation_level']) ? $_POST['engineer_occupation_level'] : [];
            $teacher_occupation_level = isset($_POST['teacher_occupation_level']) ? $_POST['teacher_occupation_level'] : [];
            $defense_occupation_level = isset($_POST['defense_occupation_level']) ? $_POST['defense_occupation_level'] : [];
            $foreigner_occupation_level = isset($_POST['foreigner_occupation_level']) ? $_POST['foreigner_occupation_level'] : [];
            $garments_occupation_level = isset($_POST['garments_occupation_level']) ? $_POST['garments_occupation_level'] : [];
            $driver_occupation_level = isset($_POST['driver_occupation_level']) ? $_POST['driver_occupation_level'] : [];
            $service_common_occupation_level = isset($_POST['service_common_occupation_level']) ? $_POST['service_common_occupation_level'] : [];
            $mistri_occupation_level = isset($_POST['mistri_occupation_level']) ? $_POST['mistri_occupation_level'] : [];

            $allDistrict = isset($_POST['permanent_division']) ? $_POST['permanent_division'] : [];
            $home_district_under_barishal = isset($_POST['home_district_under_barishal']) ? $_POST['home_district_under_barishal'] : [];
            $home_district_under_chattogram = isset($_POST['home_district_under_chattogram']) ? $_POST['home_district_under_chattogram'] : [];
            $home_district_under_dhaka = isset($_POST['home_district_under_dhaka']) ? $_POST['home_district_under_dhaka'] : [];
            $home_district_under_khulna = isset($_POST['home_district_under_khulna']) ? $_POST['home_district_under_khulna'] : [];
            $home_district_under_mymensingh = isset($_POST['home_district_under_mymensingh']) ? $_POST['home_district_under_mymensingh'] : [];
            $home_district_under_rajshahi = isset($_POST['home_district_under_rajshahi']) ? $_POST['home_district_under_rajshahi'] : [];
            $home_district_under_rangpur = isset($_POST['home_district_under_rangpur']) ? $_POST['home_district_under_rangpur'] : [];
            $home_district_under_sylhet = isset($_POST['home_district_under_sylhet']) ? $_POST['home_district_under_sylhet'] : [];


            // Remove the "Any Skin Tones" value from the array if present
            $Skin_tones = array_diff($Skin_tones, ["Any Skin Tones"]);
            // Remove the "Any Religion" value from the array if present
            $religions = array_diff($religions, ["Any Religion"]);
            // Remove the "Any Marital Status" value from the array if present
            $maritalStatus = array_diff($maritalStatus, ["Any Marital Status"]);
            // Remove the "Any Marital Status" value from the array if present
            $family_class = array_diff($family_class, ["Any Family Class"]);
            $country_present_address = array_diff($country_present_address, ["Any Country"]);
            $scndry_edu_method = array_diff($scndry_edu_method, ["Any Education Method"]);
            //$allOccupations = array_diff($allOccupations, ["Any Occupation"]);
        // Remove the "Any Occupation" value from the array if present
        if (($key = array_search("Any Occupation", $allOccupations)) !== false) {
            unset($allOccupations[$key]);
        }
        // Remove the "Any District" value from the array if present
         if (($key = array_search("Any District", $allDistrict)) !== false) {
            unset($allDistrict[$key]);
        }


            // Check if any option is not selected
            if (empty($biodatagender) && empty($Skin_tones) && empty($religions) && empty($maritalStatus) && empty($family_class) && empty($country_present_address) && empty($scndry_edu_method) 
            && empty($allOccupations) 
            && empty($student_occupation_level) && empty($health_occupation_level)
            && empty($engineer_occupation_level) && empty($teacher_occupation_level) && empty($defense_occupation_level)
            && empty($foreigner_occupation_level) && empty($garments_occupation_level) && empty($driver_occupation_level)
            && empty($service_common_occupation_level) && empty($mistri_occupation_level) 
            && empty($allDistrict) 
            && empty($home_district_under_barishal) && empty($home_district_under_chattogram) && empty($home_district_under_dhaka)
            && empty($home_district_under_khulna) && empty($home_district_under_mymensingh) && empty($home_district_under_rajshahi)
            && empty($home_district_under_rangpur) && empty($home_district_under_sylhet)) {
            //If no option is selected, return the page
                return;
            }
    
            // $sql = "SELECT * FROM 1bd_personal_physical WHERE 1=1";
            $sql = "SELECT * FROM 1bd_personal_physical AS pp
            LEFT JOIN 2bd_personal_lifestyle AS pl ON pp.user_id = pl.user_id
            LEFT JOIN 3bd_secondaryedu_method AS sm ON pp.user_id = sm.user_id
            LEFT JOIN 4bd_address_details AS ad ON pp.user_id = ad.user_id
            LEFT JOIN 5bd_family_information AS fi ON pp.user_id = fi.user_id
            LEFT JOIN 6bd_7bd_marital_status AS ms ON pp.user_id = ms.user_id
            LEFT JOIN 8bd_religion_details AS rd ON pp.user_id = rd.user_id
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
                $skinTonesCondition = implode("','", $Skin_tones);
                $sql .= " AND Skin_tones IN ('$skinTonesCondition')";
            }
    
            if (!empty($religions)) {
                $religionsCondition = implode("','", $religions);
                $sql .= " AND religion IN ('$religionsCondition')";
            }
    
            if (!empty($maritalStatus)) {
                $maritalStatusCondition = implode("','", $maritalStatus);
                $sql .= " AND maritalstatus IN ('$maritalStatusCondition')";
            }

            if (!empty($family_class)) {
                $familyClassCondition = implode("','", $family_class);
                $sql .= " AND family_class IN ('$familyClassCondition')";
            }

            if (!empty($country_present_address)) {
            $countryAddressCondition = implode("','", $country_present_address);
            $sql .= " AND country_present_address IN ('$countryAddressCondition')";
            }
    
            if (!empty($scndry_edu_method)) {
                $edumethodCondition = implode("','", $scndry_edu_method);
                $sql .= " AND scndry_edu_method IN ('$edumethodCondition')";
            }
               

                // Check if "Any Occupation" is selected
                if ($allOccupations) {
                    // If "Any Occupation" is selected, return all columns for occupation
                    $sql .= " AND (student_occupation_level IS NOT NULL OR health_occupation_level IS NOT NULL OR engineer_occupation_level IS NOT NULL OR teacher_occupation_level IS NOT NULL OR teacher_occupation_level IS NOT NULL OR defense_occupation_level IS NOT NULL OR foreigner_occupation_level IS NOT NULL OR garments_occupation_level IS NOT NULL OR driver_occupation_level IS NOT NULL OR service_common_occupation_level IS NOT NULL OR mistri_occupation_level IS NOT NULL)";
                } else {
                    // If specific occupation options are selected, include them in the query
                    if (!empty($student_occupation_level)) {
                        $studentOccupationsCondition = implode("','", $student_occupation_level);
                        $sql .= " AND student_occupation_level IN ('$studentOccupationsCondition')";
                    }
                    if (!empty($health_occupation_level)) {
                        $healthOccupationsCondition = implode("','", $health_occupation_level);
                        $sql .= " AND health_occupation_level IN ('$healthOccupationsCondition')";
                    }
                    if (!empty($engineer_occupation_level)) {
                        $engineerOccupationsCondition = implode("','", $engineer_occupation_level);
                        $sql .= " AND engineer_occupation_level IN ('$engineerOccupationsCondition')";
                    }
                    if (!empty($teacher_occupation_level)) {
                        $teacherOccupationsCondition = implode("','", $teacher_occupation_level);
                        $sql .= " AND teacher_occupation_level IN ('$teacherOccupationsCondition')";
                    }
                    if (!empty($defense_occupation_level)) {
                        $defenseOccupationsCondition = implode("','", $defense_occupation_level);
                        $sql .= " AND defense_occupation_level IN ('$defenseOccupationsCondition')";
                    }
                    if (!empty($foreigner_occupation_level)) {
                        $foreignerOccupationsCondition = implode("','", $foreigner_occupation_level);
                        $sql .= " AND foreigner_occupation_level IN ('$foreignerOccupationsCondition')";
                    }
                    if (!empty($garments_occupation_level)) {
                        $garmentsOccupationsCondition = implode("','", $garments_occupation_level);
                        $sql .= " AND garments_occupation_level IN ('$garmentsOccupationsCondition')";
                    }
                    if (!empty($driver_occupation_level)) {
                        $driverOccupationsCondition = implode("','", $driver_occupation_level);
                        $sql .= " AND driver_occupation_level IN ('$driverOccupationsCondition')";
                    }
                    if (!empty($service_common_occupation_level)) {
                        $serviceOccupationsCondition = implode("','", $service_common_occupation_level);
                        $sql .= " AND service_common_occupation_level IN ('$serviceOccupationsCondition')";
                    }
                    if (!empty($mistri_occupation_level)) {
                        $mistriOccupationsCondition = implode("','", $mistri_occupation_level);
                        $sql .= " AND mistri_occupation_level IN ('$mistriOccupationsCondition')";
                    }
                }

                // Check if "Any District" is selected
                if ($allDistrict) {
                    // If "Any District" is selected, return all columns for occupation
                    $sql .= " AND (home_district_under_barishal IS NOT NULL OR home_district_under_chattogram IS NOT NULL OR home_district_under_dhaka IS NOT NULL OR home_district_under_khulna IS NOT NULL OR home_district_under_mymensingh IS NOT NULL OR home_district_under_rajshahi IS NOT NULL OR home_district_under_rangpur IS NOT NULL OR home_district_under_sylhet IS NOT NULL)";
                } else {
                    // If specific occupation options are selected, include them in the query
                    if (!empty($home_district_under_barishal)) {
                        $barishalDivisionCondition = implode("','", $home_district_under_barishal);
                        $sql .= " AND home_district_under_barishal IN ('$barishalDivisionCondition')";
                    }
                    if (!empty($home_district_under_chattogram)) {
                        $chattogramDivisionCondition = implode("','", $home_district_under_chattogram);
                        $sql .= " AND home_district_under_chattogram IN ('$chattogramDivisionCondition')";
                    }
                    if (!empty($home_district_under_dhaka)) {
                        $dhakaDivisionCondition = implode("','", $home_district_under_dhaka);
                        $sql .= " AND home_district_under_dhaka IN ('$dhakaDivisionCondition')";
                    }
                    if (!empty($home_district_under_khulna)) {
                        $khulnaDivisionCondition = implode("','", $home_district_under_khulna);
                        $sql .= " AND home_district_under_khulna IN ('$khulnaDivisionCondition')";
                    }
                    if (!empty($home_district_under_mymensingh)) {
                        $mymensinghDivisionCondition = implode("','", $home_district_under_mymensingh);
                        $sql .= " AND home_district_under_mymensingh IN ('$mymensinghDivisionCondition')";
                    }
                    if (!empty($home_district_under_rajshahi)) {
                        $rajshahiDivisionCondition = implode("','", $home_district_under_rajshahi);
                        $sql .= " AND home_district_under_rajshahi IN ('$rajshahiDivisionCondition')";
                    }
                    if (!empty($home_district_under_rangpur)) {
                        $rangpurDivisionCondition = implode("','", $home_district_under_rangpur);
                        $sql .= " AND home_district_under_rangpur IN ('$rangpurDivisionCondition')";
                    }
                    if (!empty($home_district_under_sylhet)) {
                        $sylhetDivisionCondition = implode("','", $home_district_under_sylhet);
                        $sql .= " AND home_district_under_sylhet IN ('$sylhetDivisionCondition')";
                    }
                }


            $result = mysqlexec($sql);
    
            // Check if no matching data found for biodatagender, Skin_tones, religion, and marital status
            if (empty($result) && !is_array($biodatagender) && empty($Skin_tones) && empty($religions) && empty($maritalStatus) && empty($family_class) && empty($country_present_address) && empty($scndry_edu_method) && empty($allOccupations) && empty($student_occupation_level) && empty($health_occupation_level) && empty($engineer_occupation_level) && empty($teacher_occupation_level) && empty($defense_occupation_level) && empty($foreigner_occupation_level) && empty($garments_occupation_level) && empty($driver_occupation_level) && empty($service_common_occupation_level) && empty($mistri_occupation_level) && empty($allDistrict) 
            && empty($home_district_under_barishal) && empty($home_district_under_chattogram) && empty($home_district_under_dhaka)
            && empty($home_district_under_khulna) && empty($home_district_under_mymensingh) && empty($home_district_under_rajshahi)
            && empty($home_district_under_rangpur) && empty($home_district_under_sylhet)) {
                // If no matching data found for biodatagender, Skin_tones, religion, and marital status, return the page
                return;
            } elseif (empty($result) && is_array($biodatagender) && empty($Skin_tones) && empty($religions) && empty($maritalStatus) && empty($family_class) && empty($country_present_address) && empty($scndry_edu_method) && empty($allOccupations) && empty($student_occupation_level) && empty($health_occupation_level) && empty($engineer_occupation_level) && empty($teacher_occupation_level) && empty($defense_occupation_level) && empty($foreigner_occupation_level) && empty($garments_occupation_level) && empty($driver_occupation_level) && empty($service_common_occupation_level) && empty($mistri_occupation_level) && empty($allDistrict) 
            && empty($home_district_under_barishal) && empty($home_district_under_chattogram) && empty($home_district_under_dhaka)
            && empty($home_district_under_khulna) && empty($home_district_under_mymensingh) && empty($home_district_under_rajshahi)
            && empty($home_district_under_rangpur) && empty($home_district_under_sylhet)) {
                // If no matching data found for any of the biodatagender options, Skin_tones, religion, and marital status, return the page
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
    $groom_bride__email=$_POST['groom_bride__email'];		
	$groom_bride__number=$_POST['groom_bride__number'];		
	$parent_number=$_POST['parent_number'];		
	$groombride_relational_number=$_POST['groombride_relational_number'];		
		


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
	(user_id, smoke, occupation_sector, other_occupation_sector, business_occupation_level, student_occupation_level, health_occupation_level, engineer_occupation_level, teacher_occupation_level, defense_occupation_level, foreigner_occupation_level, garments_occupation_level, driver_occupation_level, service_andcommon_occupation_level, mistri_occupation_level, occupation_describe, dress_code, aboutme, grrom_bride_email, grrom_bride_number, grrom_bride_family_number, family_number_relation, profilecreationdate  ) 
	VALUES
	('$id', '$smoke', '$occupation_sector', '$other_occupation_sector', '$business_occupation_level', '$student_occupation_level', '$health_occupation_level', '$engineer_occupation_level', '$teacher_occupation_level', '$defense_occupation_level', '$foreigner_occupation_level', '$garments_occupation_level', '$driver_occupation_level', '$service_andcommon_occupation_level', '$mistri_occupation_level', '$occupation_describe', '$dress_code', '$aboutme', '$groom_bride__email', '$groom_bride__number', '$parent_number', '$groombride_relational_number', DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
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
    --                 S  T  A  R  T                 --
    --             1bd_personal_physical             --
    --   Male Marriage related Info / sb-biodata-6   --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

    function physical_marital_update($id){

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
        require_once("includes/dbconn.php");

    

        $sql="SELECT user_id FROM 1bd_personal_physical WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 1bd_personal_physical SET 
            biodatagender = '$biodatagender',
            dateofbirth = '$dob',
            height = '$height',
            weight = '$weight',
            physicalstatus = '$physicalstatus',
            Skin_tones = '$Skin_tones',
            bloodgroup = '$bloodgroup',
            profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
        WHERE user_id = '$id'";

        $result=mysqlexec($sql);
        if ($result)
        {    echo "";}
        }


        $sql="SELECT user_id FROM 6bd_7bd_marital_status WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 6bd_7bd_marital_status SET 
            maritalstatus = '$maritalstatus',
            divorce_reason = '$divorce_reason',
            how_widow = '$how_widow',
            how_widower = '$how_widower',
            get_wife_permission = '$get_wife_permission',
            get_family_permission = '$get_family_permission',
            why_again_married = '$why_again_married',
            how_many_son = '$how_many_son',
            son_details = '$son_details',
            profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
        WHERE user_id = '$id'";

        $result=mysqlexec($sql);
        if ($result)
        {    echo "";}
        }


        $sql="SELECT user_id FROM 6bd_marriage_related_qs_male WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 6bd_marriage_related_qs_male SET 
            guardians_agree = '$guardians_agree',
            allowstudy_aftermarriage = '$allowstudy_aftermarriage',
            allowjob_aftermarriage = '$allowjob_aftermarriage',
            livewife_aftermarriage = '$livewife_aftermarriage',
            profileby = '$profileby',
            profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
        WHERE user_id = '$id'";

        $result=mysqlexec($sql);
        if ($result)
        {    echo "";}
        }


        $sql="SELECT user_id FROM 7bd_marriage_related_qs_female WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 7bd_marriage_related_qs_female SET 
            guardians_agree = '$guardians_agree',
            studies_aftermarriage = '$studies_aftermarriage',
            anyjob_aftermarriage = '$anyjob_aftermarriage',
            agree_marriage_student = '$agree_marriage_student',
            profileby = '$profileby',
            profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
        WHERE user_id = '$id'";

        $result=mysqlexec($sql);
        if ($result)
        {    echo "Thanks! Successfully Uploaded New Biodata!";
            header("Location: view_profile.php?id={$id}");}
        }
        }
    }
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --             1bd_personal_physical             --
    --   Male Marriage related Info / sb-biodata-6   --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/






    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                  S  T  A  R  T                --
    --             2bd_personal_lifestyle            --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/
    function personal_info_update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Call the function to update the personal info
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
    
        require_once("includes/dbconn.php");
        $sql="SELECT user_id FROM 2bd_personal_lifestyle WHERE user_id=$id";
        $result=mysqlexec($sql);

        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 2bd_personal_lifestyle SET 
                    smoke = '$smoke',
                    occupation_sector = '$occupation_sector',
                    other_occupation_sector = '$other_occupation_sector',
                    business_occupation_level = '$business_occupation_level',
                    student_occupation_level = '$student_occupation_level',
                    health_occupation_level = '$health_occupation_level',
                    engineer_occupation_level = '$engineer_occupation_level',
                    teacher_occupation_level = '$teacher_occupation_level',
                    defense_occupation_level = '$defense_occupation_level',
                    foreigner_occupation_level = '$foreigner_occupation_level',
                    garments_occupation_level = '$garments_occupation_level',
                    driver_occupation_level = '$driver_occupation_level',
                    service_andcommon_occupation_level = '$service_andcommon_occupation_level',
                    mistri_occupation_level = '$mistri_occupation_level',
                    occupation_describe = '$occupation_describe',
                    dress_code = '$dress_code',
                    aboutme = '$aboutme',
                    profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                WHERE user_id = '$id'";

                $result=mysqlexec($sql);
                if ($result)
                {    echo "Thanks! Successfully Uploaded New Biodata!";
                    header("Location: view_profile.php?id={$id}");}
                }
}
}
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --             2bd_personal_lifestyle            --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/





    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                  S  T  A  R  T                --
    --  Educational Qualifications  / sb-biodata-3   --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

    function education_update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       	//Biodata 3
        $qawmi_madrasa_hafez=$_POST['qawmi_madrasa_hafez'];
        $qawmimadrasa_dawrapass=$_POST['qawmimadrasa_dawrapass'];
        $kowmi_dawrapas_year=$_POST['kowmi_dawrapas_year'];
        $kowmi_current_edu_level=$_POST['kowmi_current_edu_level'];

        $scndry_edu_method=$_POST['scndry_edu_method'];
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
        $maxedu_qulfctn=$_POST['maxedu_qulfctn'];

        require_once("includes/dbconn.php");


        $sql="SELECT user_id FROM 3bd_secondaryedu_method WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 3bd_secondaryedu_method SET 
                    scndry_edu_method = '$scndry_edu_method',
                    maxedu_qulfctn = '$maxedu_qulfctn',
                    gnrl_mdrs_secondary_pass = '$gnrl_mdrs_secondary_pass',
                    gnrl_mdrs_secondary_pass_year = '$gnrl_mdrs_secondary_pass_year',
                    gnrl_mdrs_secondary_end_year = '$gnrl_mdrs_secondary_end_year',
                    gnrlmdrs_secondary_running_std = '$gnrlmdrs_secondary_running_std',
                    profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                WHERE user_id = '$id'";

            $result=mysqlexec($sql);
            if ($result)
            {  echo "";}
            }


            $sql="SELECT user_id FROM 3bd_kowmi_madrasaedu_method WHERE user_id=$id";
            $result=mysqlexec($sql);
            // Update query
            if(mysqli_num_rows($result)>=1){
            $sql = "UPDATE 3bd_kowmi_madrasaedu_method SET 
                        qawmi_madrasa_hafez = '$qawmi_madrasa_hafez',
                        qawmimadrasa_dawrapass = '$qawmimadrasa_dawrapass',
                        kowmi_dawrapas_year = '$kowmi_dawrapas_year',
                        kowmi_current_edu_level = '$kowmi_current_edu_level',
                        profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                    WHERE user_id = '$id'";
    
                $result=mysqlexec($sql);
                if ($result)
                {   echo "";}
                }


                $sql="SELECT user_id FROM 3bd_higher_secondaryedu_method WHERE user_id=$id";
                $result=mysqlexec($sql);
                // Update query
                if(mysqli_num_rows($result)>=1){
                $sql = "UPDATE 3bd_higher_secondaryedu_method SET 
                            higher_secondary_edu_method = '$higher_secondary_edu_method',
                            gnrlmdrs_hrsecondary_pass = '$gnrlmdrs_hrsecondary_pass',
                            gnrlmdrs_hrsecondary_pass_year = '$gnrlmdrs_hrsecondary_pass_year',
                            gnrlmdrs_hrsecondary_exam_year = '$gnrlmdrs_hrsecondary_exam_year',
                            gnrlmdrs_hrsecondary_group = '$gnrlmdrs_hrsecondary_group',
                            gnrlmdrs_hrsecondary_rningstd = '$gnrlmdrs_hrsecondary_rningstd',
                            diploma_hrsecondary_pass = '$diploma_hrsecondary_pass',
                            diploma_hrsecondary_pass_year = '$diploma_hrsecondary_pass_year',
                            diploma_hrsecondary_sub = '$diploma_hrsecondary_sub',
                            diploma_hrsecondary_endingyear = '$diploma_hrsecondary_endingyear',
                            profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                        WHERE user_id = '$id'";
        
                    $result=mysqlexec($sql);
                    if ($result)
                    {    echo "";}
                    }


                    $sql="SELECT user_id FROM 3bd_universityedu_method WHERE user_id=$id";
                    $result=mysqlexec($sql);
                    // Update query
                    if(mysqli_num_rows($result)>=1){
                    $sql = "UPDATE 3bd_universityedu_method SET 
                                scndry_edu_method = '$scndry_edu_method',
                                higher_secondary_edu_method = '$higher_secondary_edu_method',
                                varsity_edu_method = '$varsity_edu_method',
                                uvarsity_pass = '$uvarsity_pass',
                                varsity_passing_year = '$varsity_passing_year',
                                university_subject = '$university_subject',
                                varsity_ending_year = '$varsity_ending_year',
                                uvarsity_name = '$uvarsity_name',
                                others_edu_qualification = '$others_edu_qualification',
                                profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                            WHERE user_id = '$id'";
            
                        $result=mysqlexec($sql);
                        if ($result)
                        {    echo "Thanks! Successfully Uploaded New Biodata!";
                            header("Location: view_profile.php?id={$id}");}
                        }
}
}
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --  Educational Qualifications  / sb-biodata-3   --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/




    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                  S  T  A  R  T                --
    --               4bd_address_details             --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

    function address_update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        
    

        require_once("includes/dbconn.php");
        $sql="SELECT user_id FROM 4bd_address_details WHERE user_id=$id";
        $result=mysqlexec($sql);


        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 4bd_address_details SET 
                    permanent_division = '$permanent_division',
                    home_district_under_barishal = '$home_district_under_barishal',
                    home_district_under_chattogram = '$home_district_under_chattogram',
                    home_district_under_dhaka = '$home_district_under_dhaka',
                    home_district_under_khulna = '$home_district_under_khulna',
                    home_district_under_mymensingh = '$home_district_under_mymensingh',
                    home_district_under_rajshahi = '$home_district_under_rajshahi',
                    home_district_under_rangpur = '$home_district_under_rangpur',
                    home_district_under_sylhet = '$home_district_under_sylhet',
                    country_present_address = '$country_present_address',
                    present_address_location = '$present_address_location',
                    childhood = '$childhood',
                    profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                WHERE user_id = '$id'";

                $result=mysqlexec($sql);
                if ($result)
                {    echo "Thanks! Successfully Uploaded New Biodata!";
                    header("Location: view_profile.php?id={$id}");}
                }
}
}
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --              4bd_address_details              --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/




    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                  S  T  A  R  T                --
    --             5bd_family_information            --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

    function family_update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
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
    
        require_once("includes/dbconn.php");


        $sql="SELECT user_id FROM 5bd_family_information WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 5bd_family_information SET 
                    father_alive = '$father_alive',
                    fatheroccupation = '$fatheroccupation',
                    mother_alive = '$mother_alive',
                    motheroccupation = '$motheroccupation',
                    brosis_number = '$brosis_number',
                    brosis_info = '$brosis_info',
                    uncle_profession = '$uncle_profession',
                    family_class = '$family_class',
                    financial_condition = '$financial_condition',
                    family_religious_condition = '$family_religious_condition',
                    profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                WHERE user_id = '$id'";

                $result=mysqlexec($sql);
                if ($result)
                {    echo "Thanks! Successfully Uploaded New Biodata!";
                    header("Location: view_profile.php?id={$id}");}
                }
}
}
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --             5bd_family_information            --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/




    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                  S  T  A  R  T                --
    --              8bd_religion_details            --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

    function religion_update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        //Biodata 8
        $religion=$_POST['religion'];
        $yourreligion_condition=$_POST['yourreligion_condition'];
       
        require_once("includes/dbconn.php");


        $sql="SELECT user_id FROM 8bd_religion_details WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 8bd_religion_details SET 
                    religion = '$religion',
                    yourreligion_condition = '$yourreligion_condition',
                    profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                WHERE user_id = '$id'";

                $result=mysqlexec($sql);
                if ($result)
                {    echo "Thanks! Successfully Uploaded New Biodata!";
                    header("Location: view_profile.php?id={$id}");}
                }
}
}
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --              8bd_religion_details             --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/




    
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                  S  T  A  R  T                --
    --           9bd_expected_life_partner           --
    --       User Bio Data Update to Database        --
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -*/

    function partner_update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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


        $sql="SELECT user_id FROM 9bd_expected_life_partner WHERE user_id=$id";
        $result=mysqlexec($sql);
        // Update query
        if(mysqli_num_rows($result)>=1){
        $sql = "UPDATE 9bd_expected_life_partner SET 
                    partner_religius = '$partner_religius',
                    partner_district = '$partner_district',
                    partner_maritialstatus = '$partner_maritialstatus',
                    partner_age = '$partner_age',
                    partner_skintones = '$partner_skintones',
                    partner_height = '$partner_height',
                    partner_education = '$partner_education',
                    partner_profession = '$partner_profession',
                    partner_financial = '$partner_financial',
                    partner_attributes = '$partner_attributes',
                    profilecreationdate = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p')
                WHERE user_id = '$id'";

                $result=mysqlexec($sql);
                if ($result)
                {    echo "Thanks! Successfully Uploaded New Biodata!";
                    header("Location: view_profile.php?id={$id}");}
                }
}
}









function account_details($id){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //Biodata 9
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $profileby=$_POST['profileby'];

    require_once("includes/dbconn.php");


    $sql="SELECT id FROM users WHERE id=$id";
    $result=mysqlexec($sql);
    // Update query
    if(mysqli_num_rows($result)>=1){
    $sql = "UPDATE users SET 
                fullname = '$fullname',
                gender = '$gender',
            WHERE user_id = '$id'";

            $result=mysqlexec($sql);
            if ($result)
            {    echo "Thanks! Successfully Uploaded New Biodata!";
            }
            }


            $sql="SELECT id FROM 7bd_marriage_related_qs_female WHERE id=$id";
            $result=mysqlexec($sql);
            // Update query
            if(mysqli_num_rows($result)>=1){
            $sql = "UPDATE 7bd_marriage_related_qs_female SET 
                        profileby = '$profileby',
                    WHERE user_id = '$id'";
        
                    $result=mysqlexec($sql);
                    if ($result)
                    {    echo "Thanks! Successfully";
                    }
                    }

}
}
    /*-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
    -- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
    --                   E   N   D                   --
    --           9bd_expected_life_partner           --
    --       User Bio Data Update to Database        --
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
