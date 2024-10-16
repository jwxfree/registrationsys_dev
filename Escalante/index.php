<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Management System</title>
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
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h3>Welcome to the Developer Management System. Input your details here to register</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="first_name">First Name</label> <input type="text" name="first_name"></p>
        <p><label for="last_name">Last Name</label> <input type="text" name="last_name"></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender"></p>
        <p><label for="age">Age</label> <input type="number" name="age"></p>
        <p><label for="email">Email</label> <input type="email" name="email"></p>
        <p><label for="nationality">Nationality</label> <input type="text" name="nationality"></p>
        <p><label for="tech_stack">Tech Stack</label> <input type="text" name="tech_stack"></p>
        <p><label for="work_experience">Work Experience</label> <input type="text" name="work_experience"></p>
        <p><label for="web_portfolio">Web Portfolio</label> <input type="url" name="web_portfolio"></p>
        <p><input type="submit" name="insertNewDevBtn" value="Register"></p>
    </form>

    <table style="width:90%; margin-top: 50px;">
        <tr>
            <th>Dev ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>Nationality</th>
            <th>Tech Stack</th>
            <th>Work Experience</th>
            <th>Web Portfolio</th>
            <th>Date Added</th>
            <th>Action</th>
        </tr>

        <?php $seeAllDevRecords = seeAllDevRecords($pdo); ?>
        <?php foreach ($seeAllDevRecords as $row) { ?>
        <tr>
            <td><?php echo $row['dev_id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['nationality']; ?></td>
            <td><?php echo $row['tech_stack']; ?></td>
            <td><?php echo $row['work_experience']; ?></td>
            <td><a href="<?php echo $row['web_portfolio']; ?>" target="_blank">Portfolio</a></td>
            <td><?php echo $row['date_added']; ?></td>
            <td>
                <a href="editdevs.php?dev_id=<?php echo $row['dev_id']; ?>">Edit</a>
                <a href="deletedevs.php?dev_id=<?php echo $row['dev_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
