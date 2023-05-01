<?php
  $id = $_GET['id'];
  $conn = mysqli_connect("localhost", "root", "", "matrimony");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "UPDATE users SET active=0 WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    echo "User Deactivated Successfully";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
