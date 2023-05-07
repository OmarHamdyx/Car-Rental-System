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
		$Nodays = $_POST["Days"];
		$PlateId = $_POST["Plateid"];
		  $res = "select Daily_rate from car where Plate_id = '$PlateId'";
          $result = mysqli_query($connection, $res);	
          $Daily_rate = mysqli_fetch_assoc($result);  
		  $TotalCost = $Daily_rate["Daily_rate"] * $Nodays;
		?>
		<?php
		try {
		if ($PlateId != null) {
			$res = "INSERT into RESERVATION (Customer_id, Plate_id, PickUp_date, Return_date, Payment_Date, Number_days, Reservation_date, Cost) values ('$Customerid', '$PlateId', '$PickUpDate', '$ReturnDate', '$PaymentDate', '$Nodays', CURDATE(), '$TotalCost')";
            mysqli_query($connection, $res) or die(mysqli_error($connection));
			echo "Reservation has been added!";
				}
		}
		catch (EXCEPTION $e) {
			echo "This Car is already reserved before!";
	}
		?>
	</body>
</html>
