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
			$Drate = $_POST["udrate"];
			$Ctype = $_POST["Ctype"];
			if (isset($_POST["udrate"])) {
					$res = "UPDATE CAR SET Daily_rate = $Drate WHERE Car_type = '$Ctype'"; 
			}
			$result=mysqli_query($connection,$res);
			echo "<h1><center>".$Ctype."&nbsp;Rates updated</h1><br><br>";
		?>

		</table>
	</body>
</html>


