


<?php
include("../connection.php");
//$link = mysqli_connect("rdbms.strato.de", "dbu902191", "ES4oblivion", "dbs1905274");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sqlBiology = "SELECT * FROM LibraryNewBooks WHERE category='Biology'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlBiology)){
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
    echo "ERROR: Could not able to execute $sqlBiology. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>