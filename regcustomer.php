<html>
	<body>
	<head>
        <title>Car Rental System</title>
        <link href="hstyles.css" rel="stylesheet" type="text/css" />
    </head>
		<?php
			$database_host = "localhost";
			$database_user = "root";
			$database_pass = "";
			$database_name = "car_rental";
			$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
			if(mysqli_connect_errno()){
				die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); 
				}
			
		$Fname = $_POST["fname"];
		$Lname = $_POST["lname"];
		$Email = $_POST["email"];
		$Password = $_POST["password"];
		$Mobile = $_POST["mobile"];
		$Dlno = $_POST["dlno"];
		$result = "INSERT INTO customer(Fname, Lname, Email, Password, Mobile_no, Driving_license_no) VALUES('$Fname', '$Lname', '$Email', '$Password', '$Mobile', '$Dlno')";
			mysqli_query($connection,$result) or die(mysqli_error($connection));
			echo "<h3>New customer has been successfully added</h3><br><br>";
		?>
		<?php	
			$result1 = "SELECT Customer_id FROM customer WHERE Driving_license_no = '$Dlno'";
			$result2 = mysqli_query($connection, $result1);
			while($row = mysqli_fetch_assoc($result2)) {
			echo "<h3>Customer ID is: </h3>".$row["Customer_id"];
		}
		?>
		<form action="index.html" method="post">
		<input type="submit" value="Back to Login">
	</form>
	</body>
</html>
