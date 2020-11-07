<!-- 


     require_once 'database.php';

     $candidat = mysqli_query($connect, "SELECT * FROM `candidat`");
     $candidat = mysqli_fetch_all($candidat); 
     foreach ($candidat as $candidats) {
         echo ' 
         
         <div class="container">
         <div class="admin-block">
             <div class="blocks-way">
             <div class="titles"><p>Date</p></div>
             <div class="ask-block"><p>' . $candidats[1] . '</p></div>
             </div>
             <div class="blocks-way">
             <div class="titles"><p>Name</p></div>
             <div class="ask-block-2"><p>' . $candidats[2] . '</p></div>
             </div>
             <div class="blocks-way">
             <div class="titles"><p>Phone</p></div>
             <div class="ask-block-2"><p>' . $candidats[3] . '</p></div>
             </div>
             <div class="blocks-way">
             <div class="titles"><p>Email</p></div>
             <div class="ask-block-2"><p>' . $candidats[4] . '</p></div>
             </div>
             <div class="blocks-way">
             <div class="titles"><p>Vacant</p></div>
             <div class="ask-block-2"><p>' . $candidats[5] . '</p></div>
             </div>
             <div class="blocks-way">
             <div class="titles"><p>Resume</p></div>
             <div class="ask-block-2"><p>' . $candidats[6] . '</p></div>
             </div>
             <div class="blocks-way">
             <div class="titles"><p>Recrut</p></div>
             <div class="ask-block-2"><p>' . $candidats[7] . '</p></div>
             </div>
         </div>
         </div>
         
         ';
     } /// ' . $answers[1] . ' 



-->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="css/style-admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>


<?php require_once 'bot2.php';?>

<body>

<div class="container">
<div class="admin-block2">



<!--
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
-->

</div>
</div>


</body>
</html>