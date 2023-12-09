 <script src='jquery.js'></script>

<?php

//$link = mysqli_connect("localhost", "goldqqze", "nLHMH0Pp1lci", "goldqqze_newlibrary");
include("connection.php"); 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//echo "Number: " . rand(1,100);
// Attempt select query execution
$sqlArts = "SELECT * FROM LibraryNewBooks WHERE category='Arts'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlArts)){
    if(mysqli_num_rows($result) > 0){
        echo "<div>";

        while($row = mysqli_fetch_array($result)){
            echo "<div class=item>";
                //echo "<td>" . $row['id'] . "</td>";
                //echo "<td>" . $row['name'] . "</td>";
                echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
               // echo "<td>" . $row['category'] . "</td>";
                
            echo "</div>";
        }
        echo "</div>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlArts. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>


