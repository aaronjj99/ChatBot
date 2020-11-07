<?php 

     require_once 'database.php';

     $answer = mysqli_query($connect, "SELECT * FROM `chatms`");
     $answer = mysqli_fetch_all($answer); 
     foreach ($answer as $answers) {
         echo ' 
         
         <div class="container">
         <div class="admin-block">
             <div class="blocks-way">
             <div class="titles"><p> - answer</p></div>
             <div class="ask-block"><p>' . $answers[1] . '</p></div>
             </div>
             <div class="blocks-way">
             <div class="titles"><p>- question</p></div>
             <div class="ask-block-2"><p>' . $answers[2] . '</p></div>
             </div>
             <div class="update"> <a href="update.php?id='. $answers[0] .'">Update</a> </div>
             <div class="update2"> <a href="delete.php?id='. $answers[0] .'">Deleted</a> </div>
         </div>
         </div>
         
         ';
     } /// ' . $answers[1] . ' 

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style-admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

<div class="container">
<div class="admin-block2">
<h3>Add New Lines</h3>
<form action="build.php" method="post">
    <p style="margin-top: 10px;">Question</p>
    <div class="typing-field">
            <div class="input-data">
                <input type="text" placeholder="Type something here" name="answer">
            </div>
        </div>
    <p style="margin-top: 20px;">Answer</p>
    <div class="typing-field">
            <div class="input-data">
            <textarea name="quest"></textarea>
            </div>
        </div>

        <button type="submit">Add New</button>

</form>
</div>
</div>


</body>
</html>