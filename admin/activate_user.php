
<?php
  /*session_start();
  if(!isset($_SESSION['admin_id'])) {
    header("location: admin_login.php");
    exit();
  } */

  $id = $_GET['id'];
  $conn = mysqli_connect("localhost", "root", "", "matrimony");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "UPDATE users SET active=1 WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    echo "User Activated Successfully";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>