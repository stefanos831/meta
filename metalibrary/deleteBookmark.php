<?php session_start(); ?>


<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id = $_GET['id'];


//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM LibraryNewData WHERE id=$id");

//redirecting to the display page (index.php in our case)
echo '<script> window.location.href = "index.php";    </script>';


?>