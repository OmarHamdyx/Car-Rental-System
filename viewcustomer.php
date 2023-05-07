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
				$res = "SELECT * FROM car_rental.customer";
				$result = mysqli_query($connection, $res);
				echo "<h1><center>Customers</h1><br><br>";
			?>
			<center>
			<table border='1'>
			<tr>
			<th>FName</th>
			<th>Lname</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Driving License No.</th>
			<th>Plate Id</th>
			</tr>
			<?php
			if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row["Fname"] . "</td>";
			echo "<td>" . $row["Lname"] . "</td>";
			echo "<td>" . $row["Email"] . "</td>";
			echo "<td>" . $row["Mobile_no"] . "</td>";
			echo "<td>" . $row["Driving_license_no"] . "</td>";
			echo "<td>" . $row["Plate_id"] . "</td>";
			echo "</tr>";
			}
			}
			?>
			</table>
		</body>
</html>


