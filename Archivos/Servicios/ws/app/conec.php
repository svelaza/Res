<?php
function Conectarse()
{
$servername = "localhost";
$username = "";
$password = "";
$database = "";

	$conn = null;
	try {
		$conn = new PDO("mysql:host=$servername; dbname=$database; charset=UTF8", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
		}
	catch(PDOException $e)
		{
		//echo "Connection failed: " . $e->getMessage();
		}
		return $conn;
}
?>

