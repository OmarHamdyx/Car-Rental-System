<html>
    <head>
        <title>Car Rental System</title>
        <link href="hstyles.css" rel="stylesheet" type="text/css" />
    </head>
	
    <body> 
	
<?php
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "car_rental";
$email = $_POST["email"];
$pass = $_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Fname, Lname, Email, Password FROM CUSTOMER WHERE Email = '$email' AND Password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
} else {
	   echo '<script>alert("You are not Registered (or incorrect Password), please SignUp to Register!")</script>';
       header("Refresh: 0.001; url=http://localhost/Car/"); // will redirect after 0.001 seconds
}

$conn->close();
?>
	
			  <div id="container"> 
				<br class="clearfloat"/>
			  <div id="header">
		  <div class="logoBackground">
			<div class="logo">CAR RENTAL SYSTEM</div>
		  </div>
		  <div class="menu">
			<ul>
				<li id="active"><a href="">Home</a></li>
				<li><a href="book.html">Book Car</a></li>
				<li><a href="return.html">Return Car</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		  </div>
		  </div>
			<br class="clearfloat" />
		  <div id="footer">
			</div>
		  </div>
		</div>
	</body>
</html>
