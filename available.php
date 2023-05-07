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
			
		$Customerid = $_POST["cbid"];
		$PickUpDate = $_POST["PickUpDate"];
	    $PaymentDate = $_POST["PaymentDate"];
	    $ReturnDate = $_POST["ReturnDate"];	
        $CarName = $_POST["carName"]; 		
		$Ctype = $_POST["Ctype"];
		$Nodays = $_POST["Days"];
		$Plate_id = $_POST["Plateid"];
		?>
		<table border='1'><tr><th>Plate ID</th></tr>
		<?php
		$res = "select Plate_id from car where Car_type = '$Ctype' AND Car_name = '$CarName' and Plate_id not in 
		(SELECT Plate_id FROM RESERVATION WHERE RESERVATION.Plate_id = '$Plate_id')";			
		$result = mysqli_query($connection, $res);
					
			if ((mysqli_num_rows($result) > 0) || (strtotime($ReturnDate) > strtotime($PickUpDate))) {
				echo "<br><h2>Congrats Vehicle is available</h2><br>";
				echo "<h3>List of Available vehicles</h3><br>";
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>"; echo "<td>" . $row["Plate_id"] . "</td>";
					echo "</tr>";
				}
			}
			else
				echo "Car is not available";
		?>
		</table>
		<?php

		if($Plate_id != null) {
			$res = "INSERT into RESERVATION(Customer_id, Plate_id, PickUp_date, Return_date, Payment_Date, Number_days) values ('$Customerid', '$Plate_id', ,'$PickUpDate', '$ReturnDate', '$PaymentDate', '$Nodays')";
			$result = mysqli_query($connection, $res);
			echo "Reservation has been added";
		}
		?>

		<?php
		$res2 = "SELECT Reservation_id, Customer_id, Plate_id, Cost, Number_days, Reservation_date, PickUp_date, Return_date, Payment_Date  FROM RESERVATION";
		$result2 = mysqli_query($connection, $res2);
		echo "<h1><center>Active & Scheduled Rentals</h1><br><br>";
		?>
		<center>
		<table border='1'>
		<tr>
		<th>Reservation ID</th>
		<th>Customer ID</th>
		<th>Plate id</th>
		<th>Cost</th>
		<th>Number of Days</th>
		<th>Resrvation Date</th>
		<th>PickUp Date</th>
		<th>Return Date</th>
		<th>Payment Date</th>
		</tr>
		<?php
		if (mysqli_num_rows($result2) > 0) {
		while($row2 = mysqli_fetch_assoc($result2))
		{
		echo "<tr>";
		echo "<td>" . $row2["Reservation_id"] . "</td>";
		echo "<td>" . $row2["Customer_id"] . "</td>";
		echo "<td>" . $row2["Plate_id"] . "</td>";
		echo "<td>" . $row2["Cost"] . "</td>";
		echo "<td>" . $row2["Number_days"] . "</td>";
		echo "<td>" . $row2["Reservation_date"] . "</td>";
		echo "<td>" . $row2["PickUp_date"] . "</td>";
		echo "<td>" . $row2["Return_date"] . "</td>";
		echo "<td>" . $row2["Payment_Date"] . "</td>";
		echo "</tr>";
		}
		}
		?>
		</table>
	</body>
</html>