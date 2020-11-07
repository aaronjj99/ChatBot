<?php

require_once 'database.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `chatms` WHERE `chatms`.`id` = '$id'");

header('Location: http://dev.ufs-grup.com/function.php');

?>