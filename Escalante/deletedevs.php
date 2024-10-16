<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Developer Profile</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this profile?</h1>
	<?php $getDevById = getDevByID($pdo, $_GET['dev_id']); ?>
	<form action="core/handleForms.php?dev_id=<?php echo $_GET['dev_id']; ?>" method="POST">

		<div class="devContainer" style="border-style: solid; font-family: 'Arial';">
			<p>First Name: <?php echo $getDevById['first_name']; ?></p>
			<p>Last Name: <?php echo $getDevById['last_name']; ?></p>
			<p>Gender: <?php echo $getDevById['gender']; ?></p>
			<p>Age: <?php echo $getDevById['age']; ?></p>
			<p>Email: <?php echo $getDevById['email']; ?></p>
			<p>Nationality: <?php echo $getDevById['nationality']; ?></p>
			<p>Tech Stack: <?php echo $getDevById['tech_stack']; ?></p>
			<p>Work Experience: <?php echo $getDevById['work_experience']; ?></p>
			<p>Web Portfolio: <?php echo $getDevById['web_portfolio']; ?></p>
			<input type="submit" name="deleteDevBtn" value="Delete">
		</div>
	</form>
</body>
</html>
