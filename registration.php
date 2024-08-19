<?php
	
	$DB_Server = "localhost";
	$DB_Username = "root";
	$DB_Password = "";
	$DB_Name = "mysite_data";

	$DB_Connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_Name);
	if ($DB_Connection) {
		//echo "Data Base_Connection Sucessful!!!";
	}
	else{
		echo("Data Base_Connection Failed!!!").mysqli.error();
	}


		$names = $_POST['names'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$re_pass = $_POST['re_pass'];
		$gender = $_POST['gender'];

		$DB_Query = "INSERT INTO registration_table VALUES('', '$names', '$email', '$pass', '$re_pass', '$gender')";

		$adding_data = mysqli_query($DB_Connection, $DB_Query);
		if ($adding_data) {
			// echo "Data is entered!!!";
			//echo '<script>alert("Registration Sucessfully!")</script>';
			header("Location:login.html");

		}
		else{
			echo("Data is not entered Sucessfully!!!");
		}
		
		

	#mysqli_close($DB_Connection);
?>