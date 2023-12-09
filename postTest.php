<?php
//include("connection.php");

$databaseHost = 'localhost'; // The host , use localhost for xamp
$databaseName = 'library';      // The databasename
$databaseUsername = 'root';   // the user on the host, use root for xamp
$databasePassword = '';   // password if setup a password, normal no pass with xamp


$con=mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	$book=$_POST['book'];
	
	//$sql = "INSERT INTO `LibraryNewData`(`book`) VALUES ('$book')";
	
	$sql = mysqli_query($mysqli, "INSERT INTO LibraryNewData(book) VALUES('$book')");	
	
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);

?>