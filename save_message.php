
<?php
// Include necessary files
include_once("includes/basic_includes.php");
include_once("functions.php");
require_once("includes/dbconn.php");

// Start the session
session_start();

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Check if user is logged in
  if (!isset($_SESSION["id"])) {
    http_response_code(401); // Unauthorized
    exit();
  }

  // Get the message data from the AJAX request
  $msg_id = $_POST["msg_id"];
  $incoming_msg_user_id = $_POST["incoming_msg_user_id"];
  $outgoing_msg_user_id = $_POST["outgoing_msg_user_id"];
  $message = $_POST["message"];
  $msg_date = $_POST["msg_date"];

  // Perform any necessary validation on the data here

  // Connect to the database
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare the SQL statement to insert the message data into the "message" table
  $sql = "INSERT INTO message (msg_id, incoming_msg_user_id, outgoing_msg_user_id, message, msg_date)
          VALUES ('$msg_id', '$incoming_msg_user_id', '$outgoing_msg_user_id', '$message', '$msg_date')";

  if ($conn->query($sql) === TRUE) {
    // Message saved successfully
    http_response_code(200);
  } else {
    // Error saving message
    http_response_code(500);
  }

  // Close the database connection
  $conn->close();
} else {
  // Handle non-POST requests (if applicable)
  http_response_code(405);
}
?>

<!-- HTML content for the chat interface -->
<div class="message-container">
  <div class="message-header">
    <h3>Chat Box</h3>
  </div>
  <div class="search-area">
    <input type="text" id="searchInput" placeholder="Find Message">
    <button type="button" onclick="searchMessages()">Search</button>
  </div>

  <div class="message-body" id="messageBody">
    <!-- Messages will be displayed here -->
  </div>

  <div class="emoji-container">
    <button class="emoji-button" onclick="addEmoji('😊')">😊</button>
    <button class="emoji-button" onclick="addEmoji('🥰')">🥰</button>
    <button class="emoji-button" onclick="addEmoji('😍')">😍</button>
    <button class="emoji-button" onclick="addEmoji('❤️')">❤️</button>
    <button class="emoji-button" onclick="addEmoji('😢')">😢</button>
    <button class="emoji-button" onclick="addEmoji('😆')">😆</button>
    <button class="emoji-button" onclick="addEmoji('😡')">😡</button>
    <!-- <button class="emoji-button" onclick="addEmoji('👍')">👍</button> -->
    <button class="emoji-button" onclick="addEmoji('👨‍👩‍👧‍👦')">👨‍👩‍👧‍👦</button>
  </div>

  <div class="message-footer">
  <textarea rows="2" id="messageInput" placeholder="Type your message..." <?php echo isset($_SESSION["id"]) ? "" : "readonly"; ?>></textarea>
  <button type="button" onclick="sendMessage()" id="sendMessageButton" <?php echo isset($_SESSION["id"]) ? "" : "disabled"; ?>><i style="font-size:19px;" class="fa">&#xf1d9;</i></button> <br>
  <?php if (!isset($_SESSION["id"])) { ?>
    <div class="login-alert">
      <p id="loginMessage">মেসেজ করার জন্য অনুগ্রহ করে আপনার একাউন্ট <a href="login.php">লগইন</a> করুন</p>
    </div>
  <?php } ?>
</div>


</div>

<script>
  // Function to enable/disable the send message button based on login status
  function toggleSendMessageButton() {
    const sendMessageButton = document.getElementById('sendMessageButton');
    const messageInput = document.getElementById('messageInput');

    if (isLoggedIn) {
      sendMessageButton.disabled = false;
      messageInput.removeAttribute('readonly');
      messageInput.placeholder = "Type your message...";
    } else {
      sendMessageButton.disabled = true;
      messageInput.setAttribute('readonly', 'readonly');
      messageInput.placeholder = "Please log in to send messages.";
    }
  }


  // Function to show a message to log in if the user is not logged in
  function showLoginMessage() {
    const messageFooter = document.querySelector('.message-footer');
    const loginMessage = document.createElement('p');
    loginMessage.textContent = "Please log in to send messages.";
    messageFooter.appendChild(loginMessage);
  }

  // Call the function initially to set the button state
  toggleSendMessageButton();

  // Function to handle the login status changes
  function handleLoginStatus(isLoggedIn) {
    toggleSendMessageButton();

    // Remove the login message if it exists
    const loginMessage = document.querySelector('.message-footer p');
    if (loginMessage) {
      loginMessage.remove();
    }
    
    // Show login message if user is logged out
    if (!isLoggedIn) {
      showLoginMessage();
    }
  }

  // Event listener to handle login status changes
  window.addEventListener('load', function () {
    handleLoginStatus(isLoggedIn);
  });

  // Sample function to simulate login/logout status change (for testing purposes)
  function simulateLoginStatusChange(loggedIn) {
    isLoggedIn = loggedIn;
    handleLoginStatus(isLoggedIn);
  }
</script>




<script>
    var messages = [];
    var replyContainer = null;

    function sendMessage() {
	  var messageInput = document.getElementById("messageInput");
      var message = messageInput.value;


      // Clear the input field
      messageInput.value = "";

      // Get the current date and time
      var currentDate = new Date();
      var sentTime = currentDate.toLocaleTimeString([], {
        hour: "2-digit",
        minute: "2-digit",
      });
      var sentDate = currentDate.toLocaleDateString([], {
        day: "numeric",
        month: "short",
        year: "numeric",
      });
      var sentDay = currentDate.toLocaleDateString([], {
        weekday: "short",
      });


	  var emojis = message.match(/([\uD800-\uDBFF][\uDC00-\uDFFF])/g) || []; // Extract emojis from the message

// Create the message object with the content and sent details
var newMessage = {
  content: message,
  sentTime: sentTime,
  sentDate: sentDate,
  sentDay: sentDay,
  replyTo: null,
  reactions: [],
  emojis: emojis, // Add the extracted emojis to the message object
};

  // Add the message to the messages array
  messages.push(newMessage);

  // Display the message
  displayMessage(newMessage);

  // Save the message to the database
  saveMessageToDatabase(newMessage);
}

    function displayMessage(message) {
      var messageBody = document.getElementById("messageBody");

      var newMessage = document.createElement("div");
      newMessage.classList.add("message", "message-sent");
      newMessage.dataset.messageId = generateMessageId();

      var messageContent = document.createElement("div");
      messageContent.classList.add("message-content");
      messageContent.innerText = message.content;

      var messageDetails = document.createElement("div");
      messageDetails.classList.add("message-details");
      messageDetails.innerText =
        message.sentTime + " | " + message.sentDate + " (" + message.sentDay + ")";

      var messageOptions = document.createElement("div");
      messageOptions.classList.add("message-options");

      var replyButton = document.createElement("button");
      replyButton.innerText = "Reply";
      replyButton.addEventListener("click", function () {
        displayReplyMessage(newMessage, message.content);
      });

      var removeButton = document.createElement("button");
      removeButton.innerText = "Remove";
      removeButton.addEventListener("click", function () {
        removeMessage(newMessage);
      });

      var reactionButtons = document.createElement("div");
      reactionButtons.classList.add("reaction-buttons");

      var reactionEmojis = ["❤️", "😃", "👍", "👎"]; // Add your desired reaction emojis here

      reactionEmojis.forEach(function (emoji) {
        var reactionButton = document.createElement("button");
        reactionButton.innerText = emoji;
        reactionButton.addEventListener("click", function () {
          addReaction(newMessage, emoji);
        });
        reactionButtons.appendChild(reactionButton);
      });

      messageOptions.appendChild(replyButton);
      messageOptions.appendChild(removeButton);
      messageOptions.appendChild(reactionButtons);

      // Restore reactions for the message if they exist
      if (message.reactions.length > 0) {
        message.reactions.forEach(function (emoji) {
          addReaction(newMessage, emoji);
        });
      }

      newMessage.appendChild(messageContent);
      newMessage.appendChild(messageDetails);
      newMessage.appendChild(messageOptions);

      // Check if there's a reply container and insert the new message after it
      var replyContainers = document.getElementsByClassName("reply-container");
      if (replyContainers.length > 0) {
        var lastReplyContainer = replyContainers[replyContainers.length - 1];
        lastReplyContainer.parentNode.insertBefore(
          newMessage,
          lastReplyContainer.nextSibling
        );
        message.replyTo = lastReplyContainer.dataset.messageId; // Set the replied-to message ID
      } else {
        messageBody.appendChild(newMessage);
      }
      // Scroll to the last message
      messageBody.scrollTop = messageBody.scrollHeight;
    }

    function addReaction(messageElement, emoji) {
      // Check if the message already has a reaction from the user
      var existingReaction = messageElement.querySelector(".reaction");
      if (existingReaction) {
        // If the same emoji is clicked again, remove the reaction
        if (existingReaction.innerText === emoji) {
          existingReaction.remove();
          removeReactionFromMessage(messageElement.dataset.messageId, emoji);
          saveMessages(); // Save the updated messages to local storage
          return;
        } else {
          // If a different emoji is clicked, replace the existing reaction
          existingReaction.innerText = emoji;
          updateReactionInMessage(messageElement.dataset.messageId, emoji);
          saveMessages(); // Save the updated messages to local storage
          return;
        }
      }

      var reaction = document.createElement("span");
      reaction.classList.add("reaction");
      reaction.innerText = emoji;

      messageElement.appendChild(reaction);
      addReactionToMessage(messageElement.dataset.messageId, emoji);
      saveMessages(); // Save the updated messages to local storage
    }

    function addReactionToMessage(messageId, emoji) {
      var message = messages.find(function (message) {
        return message.dataset.messageId === messageId;
      });

      if (message) {
        message.reactions.push(emoji);
      }
    }

    function updateReactionInMessage(messageId, emoji) {
      var message = messages.find(function (message) {
        return message.dataset.messageId === messageId;
      });

      if (message) {
        var reactionIndex = message.reactions.findIndex(function (reaction) {
          return reaction === emoji;
        });

        if (reactionIndex !== -1) {
          message.reactions[reactionIndex] = emoji;
        }
      }
    }

    function removeReactionFromMessage(messageId, emoji) {
      var message = messages.find(function (message) {
        return message.dataset.messageId === messageId;
      });

      if (message) {
        var reactionIndex = message.reactions.findIndex(function (reaction) {
          return reaction === emoji;
        });

        if (reactionIndex !== -1) {
          message.reactions.splice(reactionIndex, 1);
        }
      }
    }


	function saveMessageToDatabase(message) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "save_message.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log("Message saved to database successfully!");
        } else {
          console.error("Failed to save message to database!");
        }
      }
    };

    // Construct the message data to send to the server
    var formData = new FormData();
    formData.append("msg_id", generateMessageId());
    formData.append("incoming_msg_user_id", "<?php echo $receiver_user_id; ?>"); // Replace with the recipient's user ID
    formData.append("outgoing_msg_user_id", "<?php echo $sender_user_id; ?>"); // Replace with the sender's user ID
    formData.append("message", message.content);
    formData.append("msg_date", new Date().toISOString());

    xhr.send(formData);
  }


    function loadMessages() {
      // Load the messages array from local storage
      var storedMessages = localStorage.getItem("messages");

      if (storedMessages) {
        messages = JSON.parse(storedMessages);
        messages.forEach(function (message) {
          displayMessage(message);
        });
      }
    }

    function displayReplyMessage(parentMessage, parentContent) {
      // Remove any existing reply container
      removeReplyContainer();

      var messageBody = document.getElementById("messageBody");

      replyContainer = document.createElement("div");
      replyContainer.classList.add("reply-container");
      replyContainer.dataset.messageId = generateMessageId(); // Set a unique ID for the reply container

      var replyMessage = document.createElement("div");
      replyMessage.classList.add("reply-message");
      replyMessage.innerText = "Replying to: " + parentContent;

      var cancelReplyLink = document.createElement("a");
      cancelReplyLink.innerText = "Cancel";
      cancelReplyLink.style.textDecoration = "underline";
      cancelReplyLink.style.color = "red";
      cancelReplyLink.addEventListener("click", function () {
        removeReplyContainer(replyContainer.dataset.messageId);
      });

      replyContainer.appendChild(replyMessage);
      replyContainer.appendChild(cancelReplyLink);

      // Set the background color of the reply container
      replyContainer.style.backgroundColor = "#ddd";

      // Insert the reply container below the message box area
      messageBody.appendChild(replyContainer);

      // Save the messages array back to local storage
      saveMessages();
    }

    function removeReplyContainer(replyToMessageId) {
      if (replyContainer && replyContainer.dataset.messageId === replyToMessageId) {
        var messageBody = document.getElementById("messageBody");
        messageBody.removeChild(replyContainer);
        replyContainer = null;

        // Save the messages array back to local storage
        saveMessages();
      }
    }

    function removeMessage(messageElement) {
      var messageBody = document.getElementById("messageBody");
      messageBody.removeChild(messageElement);

      // Remove the message from the messages array
      var messageId = messageElement.dataset.messageId;
      var index = messages.findIndex(function (message) {
        return message.dataset.messageId === messageId;
      });

      if (index !== -1) {
        messages.splice(index, 1);
      }

      // Save the messages array back to local storage
      saveMessages();
    }

    function addEmoji(emoji) {
      var messageInput = document.getElementById("messageInput");
      messageInput.value += emoji;
    }

    function searchMessages() {
      var searchInput = document.getElementById("searchInput");
      var searchText = searchInput.value.toLowerCase();

      // Clear the input field
      searchInput.value = "";

      var searchResults = messages.filter(function (message) {
        return message.content.toLowerCase().includes(searchText);
      });

      displaySearchResults(searchResults);
    }

    function displaySearchResults(results) {
      var messageBody = document.getElementById("messageBody");
      messageBody.innerHTML = "";

      results.forEach(function (message) {
        displayMessage(message);
      });
    }

    function generateMessageId() {
      return Math.random().toString(36).substr(2, 9);
    }

    // Load the messages from local storage when the page is loaded
    loadMessages();
  </script>
