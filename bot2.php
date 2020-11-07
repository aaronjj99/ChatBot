<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-database.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyD15kOdazI4UPeO1RRKvYFbFyywf6jUNeA",
    authDomain: "chatbot-6e5f8.firebaseapp.com",
    databaseURL: "https://chatbot-6e5f8.firebaseio.com",
    projectId: "chatbot-6e5f8",
    storageBucket: "chatbot-6e5f8.appspot.com",
    messagingSenderId: "98651997795",
    appId: "1:98651997795:web:e6cf1bc4d5c7f6468c9a56",
    measurementId: "G-YXTBGYD1SK"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>



<!--    
    <form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">
    
    <input type="submit">
    </form>
     -->
    <div class="message-table">
        <p>Date</p>
        <p>Name</p>
        <p>Phone</p>
        <p>Email</p>
        <p>Vacant</p>
        <p>Resume</p>
        <p>Recrut</p>
    </div>
    <p id="messages"></p>
     
<script>

    var myName = prompt("Enter your name");

    function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
    }

    // listen for incoming messages
    firebase.database().ref("messages").on("child_added", function (snapshot) {
        var html = "";
        // give each message a unique ID
        html += "<div class='blocks-way2'><div class='ask-block-2'><p id='message-" + snapshot.key + "'>";
        // show delete button if message is sent by me
        html += snapshot.val().sender + ": " + snapshot.val().message;
        html += "</p></div></div>";
 
        document.getElementById("messages").innerHTML += html;
    });

</script>

