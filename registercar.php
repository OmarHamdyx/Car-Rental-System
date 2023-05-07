<html>
	<body>
	<head>
        <title>Car Rental System</title>
			<link href="ostyles.css" rel="stylesheet" type="text/css" />
	</head>
		<?php
			$database_host = "localhost";
			$database_user = "root";
			$database_pass = "";
			$database_name = "car_rental";
			$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
			if(mysqli_connect_errno()){
				die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
		$License_no = $_POST["lno"];
		$CarName = $_POST["carName"];
		$Year = $_POST["year"];
		$OfficeCity = $_POST["officeCity"];
		$CarType = $_POST["Cartype"];
		$PlateId = $_POST["plateId"];
		$CarStatus = $_POST["Carstatus"];
		$DailyRate = $_POST["dailyRate"];
			$result = "INSERT INTO car(License_no, Car_name, Year, Office_location, Car_type, Plate_id, Status, Daily_rate) VALUES ('$License_no', '$CarName', '$Year', '$OfficeCity', '$CarType', '$PlateId', '$CarStatus', '$DailyRate')";
			mysqli_query($connection,$result) or die(mysqli_error($connection));
			echo "<h3>New car has been successfully added!</h3>";
		?>
		<?php
			$res = "SELECT Plate_id from CAR where License_no = '$License_no'";
			$result2 = mysqli_query($connection, $res);
			while($row1 = mysqli_fetch_assoc($result2)) {
			echo "<h3>Plate ID is: </h3>".$row1["Plate_id"];
			$Plate_id = $row1["Plate_id"];	
			}			
		?>
	</body>
</html>
