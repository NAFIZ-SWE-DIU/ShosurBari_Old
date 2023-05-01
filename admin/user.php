
<html>
<head>
	<title>Matrimony - User Management</title>

</head>
<body>
	<h2>User Management</h2>
	<h3>Users Table</h3>

    

    <style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    border: 1px solid #ccc;
  }

  th {
    background-color: #4CAF50;
    color: white;
  }

  tr.active {
    background-color: #fff;
    color: #000;
  }

  tr.inactive {
    background-color: red;
    color: #fff;
  }
</style>

<table>
  <tr>
    <th>User ID</th>
    <th>Full Name</th>
    <th>UserName</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Edit</th>
    <th>Delete</th>
    <th>Deactivate/Activate</th>
  </tr>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "matrimony");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $class = $row['active'] == 1 ? "active" : "inactive";
        echo "<tr class='".$class."'><td>".$row['id']."</td><td>".$row['fullname']."</td><td>".$row['username']."</td><td>".$row['gender']."</td><td>".$row['email']."</td><td>".$row['number']."</td><td><a href='edit_user.php?id=$id'>Edit</a></td><td><a href='#' onclick='confirmDelete($id)'>Delete</a></td><td>";
        
        if($row['active']==1) {
          echo "<a href='#' onclick='confirmDeactivate($id)'>Deactivate</a>";
        } else {
          echo "<a href='#' onclick='confirmActivate($id)'>Activate</a>";
        }
        echo "</td></tr>";
      }
    }
    mysqli_close($conn);
  ?>
</table>

<script>
  function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this user?")) {
      window.location.href = "delete_user.php?id=" + id;
    }
  }

  function confirmDeactivate(id) {
    if (confirm("Are you sure you want to deactivate this user?")) {
      window.location.href = "deactivate_user.php?id=" + id;
    }
  }

  function confirmActivate(id) {
    if (confirm("Are you sure you want to activate this user?")) {
      window.location.href = "activate_user.php?id=" + id;
    }
  }  
</script>

</body>


</html>