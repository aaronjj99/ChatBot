<?php

 // databe connect
    require_once 'database.php';
    
 // user message   
    $getMesg = mysqli_real_escape_string($connect, $_POST['text']);

// add data
    $new_massage = ['Как дела ?', '2', '3'];

// check data
    $check_data = "SELECT answer FROM chatms WHERE quest LIKE '%$getMesg%'";
    $run_query = mysqli_query($connect, $check_data) or die("Error");

    $check_data2 = "SELECT answer FROM chatms WHERE id LIKE '2'";
    $run_query2 = mysqli_query($connect, $check_data2) or die("Error");


// shield
    if(mysqli_num_rows($run_query) > 0) {
       
        $fetch_data = mysqli_fetch_assoc($run_query);
        $replay = $fetch_data['answer'];
        echo $replay;

    }else {

        echo "Попробуйте еще раз!";
        
        
    }


?>