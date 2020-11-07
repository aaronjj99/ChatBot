<?php

$link = mysqli_connect ('localhost', 'root', '', 'bot_quest');

if (mysqli_connect_errno ())
{
    echo 'ERROR ('.mysqli_connect_errno().'):'.mysqli_connect_error();
    exit();
}