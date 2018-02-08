<html>
<head>
	<title></title>
</head>
<body>

<?php
//retrieve values
$name=$_POST['u_name'];
$email=$_POST['u_email'];
$no_of_adults=$_POST['u_adults'];
$no_of_childrens=$_POST['u_childrens'];
$street_address=$_POST['u_address'];
$city=$_POST['u_city'];
$state=$_POST['u_state'];
$postal=$_POST['u_postal'];
$country=$_POST['u_country'];
$phone_no=$_POST['u_phone'];
$date_of_arrival=$_POST['u_arrival'];
$date_of_departure=$_POST['u_departure'];
$no_of_rooms=$_POST['u_rooms'];
$free_pickup=$_POST['u_q1'];
$how_are_you_arriving=$_POST['u_arriving'];
$bus_company=$_POST['u_bus1'];
$bus_number=$_POST['u_bus2'];
$flight_number=$_POST['u_flight'];
$car_details=$_POST['u_car'];
$other=$_POST['u_other'];
$details=$_POST['u_details'];
$payment=$_POST['u_payment'];
$special_requests=$_POST['u_specialRequests53'];
  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mumbai_trip";

// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);
if(mysqli_connect_errno())
{
	echo "no connection established";
die("database connection failed" .mysqli_connect_error()."(". mysqli_connect_errno().")");
}
else
{
mysqli_query($con,"INSERT INTO bookingform VALUES('$name','$email','$no_of_adults','$no_of_childrens','$street_address','$city','$state','$postal','$country','$phone_no','$date_of_arrival','$date_of_departure','$no_of_rooms','$free_pickup','$how_are_you_arriving','$bus_company','$bus_number','$flight_number','$car_details','$other','$details','$payment','$special_requests')");
?>
<H1>success</H1><?php
}
?> 

</body>
</html>