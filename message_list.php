<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>


<!DOCTYPE html>
<html>
<head>
  <title>Message List</title>
  <style>
    .message-list {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .profile-img {
      margin-right: 10px;
    }

    .profile-img img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .message-content {
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div id="message-list-container">
    <?php

      // Create a MySQLi connection
      require_once("includes/dbconn.php");


      // Retrieve all message lists from the database
      $sql = "SELECT * FROM messages";
      $result = mysqli_query($conn, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        // Loop through each message list
        while ($row = mysqli_fetch_assoc($result)) {
          $senderId = $row['outgoing_msg_user_id'];
          $receiverId = $row['incoming_msg_user_id'];

          // Retrieve the sender's profile details
          $senderResult = mysqli_query($conn, "SELECT * FROM users WHERE user_id = $senderId");

          if ($senderResult && mysqli_num_rows($senderResult) > 0) {
            $senderRow = mysqli_fetch_assoc($senderResult);
            $senderPic = "";

            // Retrieve the sender's profile picture from the database
            $senderPicSql = "SELECT * FROM photos WHERE user_id = $senderId";
            $senderPicResult = mysqli_query($conn, $senderPicSql);

            if ($senderPicResult && mysqli_num_rows($senderPicResult) > 0) {
              $senderPicRow = mysqli_fetch_assoc($senderPicResult);
              if ($senderPicRow) {
                $senderPic = $senderPicRow['pic1'];
              }
            }
          }
    ?>
          <div class="message-list">
            <div class="profile-img">
              <?php if (!empty($senderPic)) { ?>
                <img src="profile/<?php echo $senderId; ?>/<?php echo $senderPic; ?>" />
              <?php } else { ?>
                <img src="images/shosurbari-male-icon.jpg" />
              <?php } ?>
            </div>
            <div class="message-content">
              <p>Sender ID: <?php echo $senderId; ?></p>
              <p>Receiver ID: <?php echo $receiverId; ?></p>
            </div>
          </div>
    <?php
        }
      } else {
        echo "<script>alert(\"No message lists found\")</script>";
      }

      // Close the MySQLi connection
      mysqli_close($conn);
    ?>
  </div>
</body>
</html>
