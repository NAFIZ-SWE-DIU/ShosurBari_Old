


<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
		session_start();
	error_reporting(0);
	require_once("../includes/dbconn.php");
	$userlevel=$_GET['user'];

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($conn->connect_error) {
		$error = "Connection failed: " . $conn->connect_error;
		echo $error;
	}
	
	$sql = "SELECT id FROM users WHERE (username = '$username' OR email = '$username') AND password = '$password'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$id = $row['id'];
		session_start();
		$_SESSION['id'] = $id;
		header("location:../userhome.php?id={$row['id']}");
	} 
	else {
		echo "Invalid username or password";
	}
	$conn->close();
}
?>
