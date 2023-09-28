<?php
// Include necessary files and initialize the session
include_once("includes/basic_includes.php");
include_once("functions.php");
require_once("includes/dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Address Details</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can create a CSS file for styling -->
</head>
<body>
    <h1>Edit User Address Details</h1>

    <?php
// Establish a database connection (update these values with your database credentials)
require_once("includes/dbconn.php");

// Fetch user data from the database
$sql = "SELECT * FROM 4bd_address_details";
$result = mysqli_query($conn, $sql);

echo '<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 2px solid #00c292;
        margin-bottom: 20px;
    }
    
    th, td {
        border: 2px solid #00c292;
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #00c292;
        color: white;
    }

    #search-form {
        margin-bottom: 20px;
    }
</style>';

echo '<div id="search-form">
    <form method="POST">
        <label for="search-user-id">Search by User ID:</label>
        <input type="text" id="search-user-id" name="search-user-id">
        <input type="submit" name="search" value="Search">
        <input type="submit" name="clear" value="Clear Search" style="margin-left: 10px;">
    </form>
</div>';

if (isset($_POST['search'])) {
    $searchUserId = mysqli_real_escape_string($conn, $_POST['search-user-id']);
    $sql = "SELECT * FROM 4bd_address_details WHERE user_id = $searchUserId";
    $result = mysqli_query($conn, $sql);
}

if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr>
        <th>User ID</th>
        <th>Permanent Division</th>
        <th>Barishal</th>
        <th>Chattogram</th>
        <th>Dhaka</th>
        <th>Khulna</th>
        <th>Mymensingh</th>
        <th>Rajshahi</th>
        <th>Rangpur</th>
        <th>Sylhet</th>
        <th>Present Country</th>
        <th>Present Address</th>
        <th>Childhood</th>
        <th>Data Upload</th>
        <th>Action</th>
    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['user_id'] . '</td>';
        echo '<td>' . $row['permanent_division'] . '</td>';
        echo '<td>' . $row['home_district_under_barishal'] . '</td>';
        echo '<td>' . $row['home_district_under_chattogram'] . '</td>';
        echo '<td>' . $row['home_district_under_dhaka'] . '</td>';
        echo '<td>' . $row['home_district_under_khulna'] . '</td>';
        echo '<td>' . $row['home_district_under_mymensingh'] . '</td>';
        echo '<td>' . $row['home_district_under_rajshahi'] . '</td>';
        echo '<td>' . $row['home_district_under_rangpur'] . '</td>';
        echo '<td>' . $row['home_district_under_sylhet'] . '</td>';
        echo '<td>' . $row['country_present_address'] . '</td>';
        echo '<td>' . $row['present_address_location'] . '</td>';
        echo '<td>' . $row['childhood'] . '</td>';
        echo '<td>' . $row['profilecreationdate'] . '</td>';
        echo '<td><a href="edit_user.php?id=' . $row['id'] . '">Edit</a></td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No users found.';
}

mysqli_close($conn);
?>

</body>
</html>
