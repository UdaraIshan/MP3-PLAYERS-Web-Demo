
<?php
	$host = "feenix-mariadb.swin.edu.au";
	$user = "s104983781"; // your user name
	$pwd = '210403'; // your password (date of birth ddmmyy unless changed)
	$sql_db = "s104983781_db"; // your database

	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>


	