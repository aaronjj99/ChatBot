<?php 

require_once 'database.php';

$id = $_POST['id'];
$question = $_POST['quest'];
$allanswer = $_POST['answer'];

mysqli_query($connect, "UPDATE `chatms` SET `quest` = '$question', `answer` = '$allanswer' WHERE `chatms`.`id` = '$id'");

header('Location: http://dev.ufs-grup.com/function.php');
