
<html>
<head>
	<title></title>
</head>
<body>

<?php
//retrieve values
$name=$_POST['u_name1'];
$phone=$_POST['u_phone1'];
$email=$_POST['u_mail1'];
$topic=$_POST['u_topic'];
$help=$_POST['u_help'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_us";



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
<H1>Your room has been booked</H1><?php
}
?> 

</body>
</html>
