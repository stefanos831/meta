<?php session_start(); ?>

<?php

include("connection.php");	

/*
* Write your logic to manage the data
* like storing data in database
*/
$loginId = $_SESSION['id'];


    error_reporting(E_ALL);
    
 //$data = $_POST['book'];   
//$result = mysqli_query($mysqli, "INSERT INTO LibraryNewData(book, login_id) VALUES('$data', '$loginId')");    

  
    
    $data = $_POST['book']; // the key we sent was "something"
    $result = mysqli_query($mysqli, "INSERT INTO LibraryNewData(book, login_id) VALUES('$data', '$loginId')");  
    $f = fopen("UserBookMarks/User".$loginId."-Bookmark.xml", 'w+');
    //$f = fopen("UserBookMarks/User".$loginId."-Bookmark.xml", 'a+');
    fwrite($f, $data);
    fclose($f);

?>


