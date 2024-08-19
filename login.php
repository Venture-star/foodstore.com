<?php
	
	$db_server = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "mysite_data";

	$db_connection = mysqli_connect($db_server, $db_username, $db_pass, $db_name);

	if ($db_connection) {
		//echo("Database connection Sucessful!!!");
	}

	else {
		echo("Database connection Failed!!!").mysqli.error();
	}


	$login_name = $_POST['login_name'];
	$login_pass = $_POST['login_pass'];

	//echo("<br>Welcome"." ". $login_name);

	$db_inquiry = "SELECT * FROM registration_table WHERE (Email = '$login_name') && (Password = '$login_pass')";
	
	$db_query = mysqli_query($db_connection, $db_inquiry);

	$count = mysqli_num_rows($db_query);

	if ($count>=1) {
		// header("Location:index.html");
		echo "<br><h1 style = color:green;>Data is available<br>You are login Sucessfully!!!</h1>";
	}

	else {
			echo '<script>alert("wrong Username and Password")</script>';
		echo("<br><h1 style = color:red;>Data is not available<br> Login again!</h1>");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dash Board</title>
</head>
<body style="background-image: url(images/test4.jpeg); background-repeat: no-repeat; background-size: cover; ">

</body>
</html>