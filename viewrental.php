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
			
		?>
		<?php
		$res2 = "SELECT Reservation_id, Customer_id, Plate_id, Reservation_date, PickUp_date, Return_date, Payment_Date, Number_days, Cost FROM RESERVATION";
		$result2 = mysqli_query($connection,$res2);
		echo "<h1><center>Active & Scheduled Rentals</h1><br><br>";
		?>
		<center>
		<table border='1'>
		<tr>
		<th>Reservation ID</th>
		<th>Customer ID</th>
		<th>Plate id</th>
		<th>Reservation Date</th>
	    <th>PickUp Date</th>
		<th>Return Date</th>
		<th>Payment Date</th>
		<th>No of days</th>
		<th>Cost</th>
		</tr>
		<?php
		if (mysqli_num_rows($result2) > 0) {
		while($row2 = mysqli_fetch_assoc($result2)) {
		echo "<tr>";
		echo "<td>" . $row2["Reservation_id"] . "</td>";
		echo "<td>" . $row2["Customer_id"] . "</td>";
		echo "<td>" . $row2["Plate_id"] . "</td>";
		echo "<td>" . $row2["Reservation_date"] . "</td>";
		echo "<td>" . $row2["PickUp_date"] . "</td>";
		echo "<td>" . $row2["Return_date"] . "</td>";
		echo "<td>" . $row2["Payment_Date"] . "</td>";
		echo "<td>" . $row2["Number_days"] . "</td>";
		echo "<td>$" . $row2["Cost"] . "</td>";		
		echo "</tr>";
		}
		}
		?>
		</table>
	</body>
</html>
