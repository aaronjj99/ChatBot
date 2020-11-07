<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
</head>


<?php require_once 'database.php';?>

<body>

    <div class="wrapper">

        <div class="title">
            <img style="width: 30px; height:30px;" src="img/ico.png" alt="">
            Chat</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user-astronaut"></i>
                </div>
                <div class="msg-header">
                    <p>Здравствуйте, какая сегодня дата ?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
        <form onsubmit="return sendMessage();">
            <div class="input-data">
                <input id="message" type="text" placeholder="Type something here" autocomplete="off">
                <button type="submit" id="send-btn">Send</button>
            </div>
        </form>
        </div>

    </div>   

    <div class="autor-line"><p>x-electronics.</p></div>

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
        html += "<li id='message-" + snapshot.key + "'>";
        // show delete button if message is sent by me
        html += snapshot.val().sender + ": " + snapshot.val().message;
        html += "</li>";

        document.getElementById("messages").innerHTML += html;
    });



        $(document).ready(
            
            function(){
                
            $("#send-btn").on("click", function(){
                $value = $("#message").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $('.form').append($msg);
                $('#data').val('');    

                // ajax
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-biohazard"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $('.form').append($replay);
                        // drop bar
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                })
            });

        });
    </script>

</body>

</html>