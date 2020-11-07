<?php

    require_once 'database.php';

    $live_id = $_GET['id'];
    $live = mysqli_query($connect, "SELECT * FROM `chatms` WHERE `id` = '$live_id'");
    $live = mysqli_fetch_assoc($live);

?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/style-admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

<div class="container">
<div class="admin-block2">
<h3>Change your Line</h3>
<form action="upload.php" method="post">
    <input type="hidden" name="id" value="<?= $live['id']?>">
    <p style="margin-top: 10px;">Answer</p>
    <div class="typing-field">
            <div class="input-data">
                <input type="text" placeholder="Type something here" name="quest" value="<?= $live['quest']?>">
            </div>
        </div>
    <p style="margin-top: 20px;">Question</p>
    <div class="typing-field">
            <div class="input-data input-data-h">
            <textarea name="answer"><?= $live['answer']?></textarea>
            </div>
        </div>

        <button class="button-update" type="submit">Update</button>

</form>
</div>
</div>


</body>
</html>