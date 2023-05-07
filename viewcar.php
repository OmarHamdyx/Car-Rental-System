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
		    $CarType = $_POST["Ctype"];
			$res = "SELECT Plate_id, License_no, Car_name, Year, Daily_rate, Status, Office_location FROM car 
			        WHERE Car_type = '$CarType'";
			$result = mysqli_query($connection, $res);
			echo "<h1><center>".$CarType."&nbsp;Cars</h1><br><br>";
		?>
		<center>
		<table border='1'>
		<tr>
		<th>Plate ID</th>
		<th>License No</th>
		<th>Car Name</th>
		<th>Year</th>
		<th>Daily Rate</th>
		<th>Status</th>
		<th>Office_location</th>
		</tr>
		<?php
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
		echo "<tr>";
		echo "<td>" . $row["Plate_id"] . "</td>";
		echo "<td>" . $row["License_no"] . "</td>";
		echo "<td>" . $row["Car_name"] . "</td>";
		echo "<td>" . $row["Year"] . "</td>";
		echo "<td>" . $row["Daily_rate"] . "</td>";
		echo "<td>" . $row["Status"] . "</td>";
		echo "<td>" . $row["Office_location"] . "</td>";
		echo "</tr>";
		}
		}
		?>
		</table>
	</body>
</html>


