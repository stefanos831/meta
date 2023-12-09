
<?php
include("../connection.php");
//$link = mysqli_connect("rdbms.strato.de", "dbu902191", "ES4oblivion", "dbs1905274");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sqlEducation = "SELECT * FROM LibraryNewBooks WHERE category='Education'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlEducation)){
    if(mysqli_num_rows($result) > 0){
        echo "<div>";

        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact' id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "</div>";                
                
                
        }
        echo "</div>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlEducation. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

