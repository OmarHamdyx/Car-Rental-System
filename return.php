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
			$Rid = $_POST["rid"];
			$res = "select Cost FROM RESERVATION where RESERVATION.Reservation_id = '$Rid'";
			$result = mysqli_query($connection, $res);
			echo "<h1><center>Payment Amount</h1><br><br>";
			$row = mysqli_fetch_assoc($result);
			echo "<h1>$".$row["Cost"]."</h1>";
			$sql = "DELETE FROM RESERVATION WHERE Reservation_id = '$Rid'";
			if ($connection->query($sql) === TRUE) {
                  echo "<h1><center>Car has returned successfully!</h1>";
            } else {
                  echo "<h1><center>Error deleting car: </h1>" . $conn->error;}
		?>
	</body>
</html>