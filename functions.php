<?php

function get_quest1() {

    global $link;

    $sql = "SELECT * FROM quest1";

    $result = mysqli_query ($link, $sql);
    
    $quest1 - mysqli_fetch_all ($result, MYSQLI_ASSOC);

    return $quest1;
}

