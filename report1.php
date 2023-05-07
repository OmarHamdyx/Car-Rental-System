<html>
	<head>
        <title>Car Rental System</title>
        <link href="ostyles.css" rel="stylesheet" type="text/css" />
     
    </head>
	<body>
	<?php
		$database_host = "localhost";
		$database_user = "root";
		$database_pass = "";
		$database_name = "car_rental";
		$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
		if(mysqli_connect_errno()){
			die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
		$res = "select Distinct Car_name, SUM(RESERVATION.Cost) AS Earnings
	            FROM RESERVATION, Car
	            where RESERVATION.Plate_id = CAR.Plate_id
	            group by Car_name";
		$result = mysqli_query($connection, $res);
		echo "<h1><center>Profits according to Car name</h1><br><br>";	
	?>
	<center>
	<table border='1'>
	<tr>
	<th>Car name</th>
	<th>Earnings</th>
	</tr>
	<?php
	if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result))
	{
	echo "<tr>";
	echo "<td>" . $row["Car_name"] . "</td>";
	echo "<td>$" . $row["Earnings"] . "</td>";
	echo "</tr>";
	}
	}
	?>
	</table>
	</body>
</html>