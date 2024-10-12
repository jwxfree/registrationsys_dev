<?php

require_once 'dbConfig.php';

function submitDevProfile($pdo, $first_name, $last_name, $gender, $age, $email, $nationality, $tech_stack, $work_experience, $web_porfolio, $date_added){

    $sql = "INSERT INTO Escalante (first_name, last_name, gender, age, email, nationality, tech_stack, work_experience, web_porfolio, date_added) VALUES (?,?,?,?,?,?,?,?,?)"
}


?>