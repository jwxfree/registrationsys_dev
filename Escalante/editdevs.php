<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Profile Edit</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 300px;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
    
    $getDevById = getDevById($pdo, $_GET['dev_id']); 
    ?>
    <form action="core/handleForms.php" method="POST">
        <p>
            <label for="first_name">First Name</label> 
            <input type="text" name="first_name" value="<?php echo $getDevById['first_name']; ?>">
        </p>
        <p>
            <label for="last_name">Last Name</label> 
            <input type="text" name="last_name" value="<?php echo $getDevById['last_name']; ?>">
        </p>
        <p>
            <label for="gender">Gender</label>
            <input type="text" name="gender" value="<?php echo $getDevById['gender']; ?>">
        </p>
        <p>
            <label for="age">Age</label>
            <input type="number" name="age" value="<?php echo $getDevById['age']; ?>">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $getDevById['email']; ?>">
        </p>
        <p>
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" value="<?php echo $getDevById['nationality']; ?>">
        </p>
        <p>
            <label for="tech_stack">Tech Stack</label>
            <input type="text" name="tech_stack" value="<?php echo $getDevById['tech_stack']; ?>">
        </p>
        <p>
            <label for="work_experience">Work Experience</label>
            <input type="text" name="work_experience" value="<?php echo $getDevById['work_experience']; ?>">
        </p>
        <p>
            <label for="web_portfolio">Web Portfolio</label>
            <input type="url" name="web_portfolio" value="<?php echo $getDevById['web_portfolio']; ?>">
        </p>
        <p>
            <input type="hidden" name="dev_id" value="<?php echo $getDevById['dev_id']; ?>">
            <input type="submit" name="editDevProfileBtn" value="Update Profile">
        </p>
    </form>
</body>
</html>
