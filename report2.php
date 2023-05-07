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
		$res = "select Distinct Office_location, SUM(RESERVATION.Cost) AS Earnings
	            FROM RESERVATION, Car
	            where RESERVATION.Plate_id = CAR.Plate_id
	            group by Office_location";
		$result = mysqli_query($connection, $res);
		echo "<h1><center>Profits according to Office location</h1><br><br>";	
	?>
	<center>
	<table border='1'>
	<tr>
	<th>Office location</th>
	<th>Earnings</th>
	</tr>
	<?php
	if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result))
	{
	echo "<tr>";
	echo "<td>" . $row["Office_location"] . "</td>";
	echo "<td>$" . $row["Earnings"] . "</td>";
	echo "</tr>";
	}
	}
	?>
	</table>
	</body>
</html>