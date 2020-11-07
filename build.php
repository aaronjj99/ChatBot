<?php

require_once 'database.php';

$question = $_POST['quest'];
$allanswer = $_POST['answer'];

mysqli_query($connect, "INSERT INTO `chatms` (`id`, `quest`, `answer`, `image`) VALUES (NULL, '$question', '$allanswer', '')");

header('Location: http://dev.ufs-grup.com/function.php');