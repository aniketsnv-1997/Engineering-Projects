
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
mysqli_query($con,"INSERT INTO contact_us VALUES('$name','$phone','$email','$topic','$help')");
?>
<H1>success</H1><?php
}
?> 

</body>
</html>
