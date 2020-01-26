<?php
$firstname;
$lastname;
$age;

	if(!empty($_GET)){
		if (isset($_GET['firstname'])) {
			$firstname = $_GET['firstname'];
		}
		if (isset($_GET['lastname'])) {
			$lastname = $_GET['lastname'];
		}
		if (isset($_GET['age'])) {
			$age = $_GET['age'];
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 2 Homework</title>
</head>
<body>
	<form method="GET" action="index.php">
		<div>
			<label>First Name</label><br>
			<input type="text" name="firstname">
		</div>
		<div>
			<label>Last Name</label><br>
			<input type="text" name="lastname">
		</div>	
		<div>
			<label>Age</label><br>
			<input type="text" name="age">
		</div>	
		<input type="submit" value="Submit">
	</form>

	<?php if (isset($firstname) && isset($lastname) && isset($age)) { ?>
		<section>
			<h1><?php echo "Hello, my name is {$firstname} {$lastname}."; ?></h1>
			<?php if ($age >= 18) { ?>
				<h1><?php echo "I am old enough to vote in the United States."; ?></h1>
			<?php } else { ?>
				<h1><?php echo "I am not old enough to vote in the United States."; ?></h1>
			<?php } ?>
		</section>
	<?php } ?>
</body>
</html>
