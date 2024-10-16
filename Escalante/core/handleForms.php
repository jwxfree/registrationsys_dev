<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewDevBtn'])) {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $gender = trim($_POST['gender']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $nationality = trim($_POST['nationality']);
    $tech_stack =  ($_POST['tech_stack']);
    $work_experience = trim($_POST['work_experience']);
    $web_portfolio = trim($_POST['web_portfolio']);
    $date_added = date('Y-m-d H:i:s'); 


    if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($age) && !empty($email) && !empty($nationality) && !empty($tech_stack) && !empty($work_experience) && !empty($web_portfolio)) {
        

        $query = insertIntoDevRecords($pdo, $first_name, $last_name, $gender, $age, $email, $nationality, $tech_stack, $work_experience, $web_portfolio, $date_added);

        if ($query) {
            header("Location: ../index.php");
            echo "Profile added successfully";
        } else {
            echo "Failed to add profile";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editDevProfileBtn'])) {
    $dev_id = $_POST['dev_id'];
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $gender = trim($_POST['gender']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $nationality = trim($_POST['nationality']);
    $tech_stack = trim($_POST['tech_stack']);
    $work_experience = trim($_POST['work_experience']);
    $web_portfolio = trim($_POST['web_portfolio']);

    if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($age) && !empty($email) && !empty($nationality) && !empty($tech_stack) && !empty($work_experience) && !empty($web_portfolio)) {
        
        $query = updateDevProfile($pdo, $dev_id, $first_name, $last_name, $gender, $age, $email, $nationality, $tech_stack, $work_experience, $web_portfolio);

        if ($query) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteDevBtn'])) {
    $query = deleteDevProfile($pdo, $_GET['dev_id']);

    if ($query) {
        header("Location: ../index.php");
        echo "Profile deleted successfully";
    } else {
        echo "Deletion failed";
    }
}

?>
