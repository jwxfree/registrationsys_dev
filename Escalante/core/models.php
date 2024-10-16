<?php 

require_once 'dbConfig.php';

function insertIntoDevRecords($pdo, $first_name, $last_name, $gender, $age, $email, $nationality, $tech_stack, $work_experience, $web_portfolio) {

    $sql = "INSERT INTO software_eng (first_name, last_name, gender, age, email, nationality, tech_stack, work_experience, web_portfolio) 
            VALUES (?,?,?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $age, $email, $nationality, $tech_stack, $work_experience, $web_portfolio]);

    if ($executeQuery) {
        return true;    
    }
}

function seeAllDevRecords($pdo) {
    $sql = "SELECT * FROM software_eng";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getDevByID($pdo, $dev_id) {
    $sql = "SELECT * FROM software_eng WHERE dev_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$dev_id])) {
        return $stmt->fetch();
    }
}

function updateDevProfile($pdo, $dev_id, $first_name, $last_name, $gender, $age, $email, $nationality, $tech_stack, $work_experience, $web_portfolio) {

    $sql = "UPDATE software_eng 
            SET first_name = ?, 
                last_name = ?, 
                gender = ?, 
                age = ?, 
                email = ?, 
                nationality = ?, 
                tech_stack = ?, 
                work_experience = ?, 
                web_portfolio = ? 
            WHERE dev_id = ?";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $age, $email, $nationality, $tech_stack, $work_experience, $web_portfolio, $dev_id]);

    if ($executeQuery) {
        return true;
    }
}

function deleteDevProfile($pdo, $dev_id) {

    $sql = "DELETE FROM software_eng WHERE dev_id = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$dev_id]);

    if ($executeQuery) {
        return true;
    }
}

?>
