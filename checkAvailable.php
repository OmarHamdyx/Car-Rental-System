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
        $CarName = $_POST["carName"]; 		
		$Ctype = $_POST["Ctype"];
		?>
		<table border='1'><tr><th>Plate ID</th></tr>
		<?php
		$res = "select Plate_id from car where Car_type = '$Ctype' AND Car_name = '$CarName' AND Status = 'active' and Plate_id not in 
		(SELECT Plate_id FROM RESERVATION WHERE RESERVATION.Plate_id = car.Plate_id)";			
		$result = mysqli_query($connection, $res);
					
			if (mysqli_num_rows($result) > 0) {
				echo "<br><h2>Congrats Vehicle is available!</h2><br>";
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>"; echo "<td>" . $row["Plate_id"] . "</td>";
					echo "</tr>";
				}
				echo "<br><h2>Please return back to book the car with the below Plate id:</h2><br>";
			}
			else
				echo "Car is not available!";
		?>
		</table>
	</body>
</html>