
<style>

/* ===== Scrollbar CSS ===== */
  /* Firefox */
  * {
    scrollbar-width: thin;
    scrollbar-color: #C67C66 rgba(39, 36, 36, 0.9);
  }

  /* Chrome, Edge, and Safari */
  *::-webkit-scrollbar {
    width: 16px;
  }

  *::-webkit-scrollbar-track {
    background: rgba(39, 36, 36, 0.9);
  }

  *::-webkit-scrollbar-thumb {
    background-color: #C67C66;
    border-radius: 10px;
    border: 3px solid rgba(39, 36, 36, 0.9);
  }


.wrapper {
position: absolute;    
background-color: transparent;
height: 100vh;
width: 100vw;
top: 0%;
left: 0%;
  
}

.container {
position: absolute;    
top: 10%;
left: 10%;
    width: 80%;
    height: 80%;
    border: 1px solid #C67C66;
    box-shadow: 2px 1px 5px black;
    border-radius: 15px;
    backdrop-filter: blur(5px);
    background-color: rgba(39, 36, 36, 0.9);
    color: #C67C66;
    transition: all 1s ease;
 overflow: hidden;
  
}

.container:hover {
    background-color: rgba(39, 36, 36, 0.7);
    transition: all 1s ease;
    text-shadow: 2px 1px 5px black;
}


li, ul {
  margin:0;
  padding:0;
  list-style: none;
}
.tab-list {
	width: 20%;
	float: left;
	position:absolute;
	height: 100%;
	overflow-y: scroll!important;
	overflow-x: hidden!important;
 
}
.tab-list ul {
	border-right: 1px solid #ccc;
	display: table;
	height: 100%;
	width: 100%;
	
}
.tab-list li {
	padding: 15px 0px; /* 15px 20px */
	text-transform: uppercase;
	color: white;
	font-weight: 700;
	font-size: 14px;
	text-align: center;
	cursor: pointer;
	transition: all 0.3s;
}
.tab-list li.active {
	background-color: transparent;
	color: #C67C66;
}
.tab-body {
	width:80%;
  height:100%;
	float: left;	 
  margin-left:20%;
	overflow-y: scroll!important;
	overflow-x: hidden!important; 
  
}
.tab-body h1 {
  font-size: 18px;
  color: white!important;
}
.tab-body p {
  color: #444;
  font-size:15px;
}
.tab-body .tab-body-content {
	display: none;
  padding:20px 40px;
  
  border-left:0;  
}
.tab-body .tab-body-content.active {
	display: block;
}
.tab-body ul {
	height: 100%;
	width: 100%;
	display: table;
	border-bottom: 1px solid #ccc;
	padding: 25px 0px;
}
.tab-body ul:first-child {
	padding-top: 0;
}
.tab-body ul:last-child {
	border-bottom: 0px solid #ccc;
}

td {
color: white;    
}

#searchScreen {
display: none;   
}

a {
color: white!important;    
}

/* responsive grid for ebooks */

.item, img {
  width:100%;
  height:auto;
}

.item {
  width:25%;
  float:left;
  padding:.5em;
  
  /*background-color:#fff;*/
}

.item p {
  min-height:3em;
  /*background-color:#fed;*/
  margin:.5em 0 0 0;
  font-size:.9em;
  text-align:center;
}

@media screen and (max-width:1000px) {
  
/*   body {
    background-color:#ddf;
  } */
  
  .item {
    width:33.3%;
  }

}


@media screen and (max-width:800px) {
  
/*   body {
    background-color:#cdd;
  } */
  
  .item {
    width:50%;
  }
  
  .item p {
  font-size:.8em;
  }

}

@media screen and (max-width:400px) {
  
/*   body {
    background-color:#ded;
  } */
  
  .item {
    width:100%;
  }

}



@media (orientation: portrait) { 
    
.container {
position: absolute;    
bottom: 0%;
left: 0%;
    width: 100%;
    height: 80%;
    border: 1px solid #C67C66;
    box-shadow: 2px 1px 5px black;
    border-radius: 15px;
    backdrop-filter: blur(5px);
    background-color: rgba(39, 36, 36, 0.9);
    color: #C67C66;
    transition: all 1s ease;
 overflow: hidden;
  
} 
 
.tab-list {
	width: 50%;
	float: left;
	position:absolute;
	height: 100%;
	overflow-y: scroll!important;
	overflow-x: hidden!important;
 
} 

.tab-body {
	width:50%;
  height:100%;
	float: left;	 
  margin-left:50%;
 
  
}
 
    
}    


</style>


<?php
//including the database connection file
include("connection.php");

//fetching data in descending order (lastest entry first)
//$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewBooks ORDER BY id DESC LIMIT 10"); 

//$result = "SELECT * FROM LibraryNewBooks WHERE category='Education' ORDER BY id DESC LIMIT 10";


//$link = mysqli_connect("rdbms.strato.de", "dbu902191", "ES4oblivion", "dbs1905274");
 
 //Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



?>

<div class='wrapper' id="searchScreen">
<div class="container" >


				<div class="tab-list">

<style>

#searchp {
position: fixed;
right: 20px;
}  

.bookmarkIcon {
position: relative;
height: 32px;
width: 32px;
border: 1px solid transparent;
}

.bookmarkIcon img {
position: relative;
height: 32px;
width: 32px;    
}


..bookmarkIcon:hover {
filter: invert(100%)!important; 
border: 1px solid beige!important;

}
    
</style>
				    
<input type='text' placeholder="Search..." id='searchp'/>				    
				    
  					<ul>
	<li class="active" data-tab="1">Arts</li>
    <li data-tab="2">Biology</li>
    <li data-tab="3">Business</li>
    <li data-tab="4">Education</li>
    <li data-tab="5">Environment</li>
    <li data-tab="6">General Reference</li>
    <li data-tab="7">History</li>
    <li data-tab="8">Information and Publishing</li>
    <li data-tab="9">Law</li>
    <li data-tab="10">Library Science</li>
    <li data-tab="11">Medicine</li>
    <li data-tab="12">Multicultural Studies</li>
    <li data-tab="13">Nation and World</li>
    <li data-tab="14">Religion</li>
    <li data-tab="15">Science</li>
    <li data-tab="16">Social Science</li>
    <li data-tab="17">Technology</li>
    <li data-tab="18">Travel</li>
					  </ul>
				</div>
        
				<div class="tab-body">

<div class="tab-body-content active" data-tabcontent="1">
 <h1>Arts</h1>

<div id="ajaxArt">
    
        <form action="index.php" method="post">
        <textarea style="position: absolute; height: 250px; width: 500px; left: -10000;"  name="book" id="content" >  
    
        </textarea> <br>
        
        <input type="hidden" name="submit_check" value="1">
        </form>     

 
</div>

<div id="bookShelf1Menu"> 
<?php

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sqlArts = "SELECT * FROM LibraryNewBooks WHERE category='Arts'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlArts)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";  

               
                
        }
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
</div>



					</div>



<div class="tab-body-content" data-tabcontent="2">
<h1>Biology </h1>

<div id="ajaxBiology"></div>


<?php

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sqlBiology = "SELECT * FROM LibraryNewBooks WHERE category='Biology'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlBiology)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";    
            
                
                
        }
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


						</div>

<div class="tab-body-content" data-tabcontent="3">
            <h1>Business</h1>


<div id="ajaxBusiness"></div>

<?php

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sqlBusiness = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlBusiness)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>"; 
                
        }

        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlBusiness. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>



						</div>
 
  <div class="tab-body-content" data-tabcontent="4">
              <h1>Education</h1>
              

<div id="ajaxEducation"></div>



<?php
include("connection.php");
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
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";               
                
                
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

            
              
						</div>
						
						
<div class="tab-body-content" data-tabcontent="5">
            <h1>Environment</h1>


<div id="ajaxEnvironment"></div>

<?php

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sqlEnvironment = "SELECT * FROM LibraryNewBooks WHERE category='Environment'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlEnvironment)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                 
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlEnvironment. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>



</div>						


<div class="tab-body-content" data-tabcontent="6">
            <h1>General Reference</h1>


<div id="ajaxGeneralReference"></div>

<?php

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sqlGeneralReference = "SELECT * FROM LibraryNewBooks WHERE category='General Reference'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlGeneralReference)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlGeneralReference. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>



</div>


<div class="tab-body-content" data-tabcontent="7">
            <h1>History</h1>

<?php
// Attempt select query execution
$sqlHistory = "SELECT * FROM LibraryNewBooks WHERE category='History'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlHistory)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlHistory. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div>
  
  
<div class="tab-body-content" data-tabcontent="8">
            <h1>Information and Publishing</h1>

<?php
// Attempt select query execution
$sqlInformation = "SELECT * FROM LibraryNewBooks WHERE category='Information and Publishing'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlInformation)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlInformation. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>


</div>  
 
 
<div class="tab-body-content" data-tabcontent="9">
            <h1>Law</h1>

<?php
// Attempt select query execution
$sqlLaw = "SELECT * FROM LibraryNewBooks WHERE category='Law'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlLaw)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";               
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlLaw. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div>   

<div class="tab-body-content" data-tabcontent="10">
            <h1>Library Science</h1>

<?php
// Attempt select query execution
$sqlLibraryScience = "SELECT * FROM LibraryNewBooks WHERE category='Library Science'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlLibraryScience)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlLibraryScience. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div> 


<div class="tab-body-content" data-tabcontent="11">
            <h1>Medicine</h1>

<?php
// Attempt select query execution
$sqlMedicine = "SELECT * FROM LibraryNewBooks WHERE category='Medicine'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlMedicine)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlMedicine. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div> 


<div class="tab-body-content" data-tabcontent="12">
            <h1>Multicultural Studies</h1>

<?php
// Attempt select query execution
$sqlMulticulturalStudies = "SELECT * FROM LibraryNewBooks WHERE category='Multicultural Studies'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlMulticulturalStudies)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlMulticulturalStudies. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div> 
 
 
<div class="tab-body-content" data-tabcontent="13">
            <h1>Nation and World</h1>

<?php
// Attempt select query execution
$sqlNationWorld = "SELECT * FROM LibraryNewBooks WHERE category='Nation and World'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlNationWorld)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";               
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlNationWorld. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div>     
 
 
<div class="tab-body-content" data-tabcontent="14">
            <h1>Religion</h1>

<?php
// Attempt select query execution
$sqlReligion = "SELECT * FROM LibraryNewBooks WHERE category='Religion'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlReligion)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlReligion. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div>   


<div class="tab-body-content" data-tabcontent="15">
            <h1>Science</h1>

<?php
// Attempt select query execution
$sqlScience = "SELECT * FROM LibraryNewBooks WHERE category='Science'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlScience)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlScience. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div> 


<div class="tab-body-content" data-tabcontent="16">
            <h1>Social Science</h1>

<?php
// Attempt select query execution
$sqlSocialScience = "SELECT * FROM LibraryNewBooks WHERE category='Social Science'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlSocialScience)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";                 
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlSocialScience. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div>    


<div class="tab-body-content" data-tabcontent="17">
            <h1>Technology</h1>

<?php
// Attempt select query execution
$sqlTechnology = "SELECT * FROM LibraryNewBooks WHERE category='Technology'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlTechnology)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";               
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlTechnology. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div>

<div class="tab-body-content" data-tabcontent="18">
            <h1>Travel</h1>

<?php
// Attempt select query execution
$sqlTravel = "SELECT * FROM LibraryNewBooks WHERE category='Travel'";
//$sql = "SELECT * FROM LibraryNewBooks WHERE category='Business'";
if($result = mysqli_query($link, $sqlTravel)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                //echo "<div class='item contact'>";
                //echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
                //echo "<p>" . "<a href=Uploads/Ebook/". $row['name'] ." target=blank>". $row['name'] ."</a>" . "</p>";
                //echo "</div>";
            echo "<div class='item contact'>";  
            echo "<a class='bookmarkIcon' id='bookmarkID". $row['id'] ."' style='cursor: pointer;'> <img src='bookmark-plus-fill.svg'  />  </a>";
            echo "<div  id='embedView0". $row['id'] ."'>";
            echo "" . "<img src=Uploads/Images/".$row['Image']." />" . "";
            echo "<div style='display: none;'> ". $row['name'] ." </div>";
            echo "</div> </div>";               
                
                
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlTravel. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>

</div>
					
<!-- end -->  
</div>

</div>

</div>



<script>
setTimeout(function(){ 

     console.log('bookmark loaded')
<?php

$resultBooks1 = mysqli_query($mysqli, "SELECT * FROM LibraryNewBooks ORDER BY id DESC" ) ;

while($resBook1 = mysqli_fetch_array($resultBooks1)) { 

echo "\r\n";
echo "var bookmarkID". $resBook1['id'] ."Btn = document.getElementById('bookmarkID". $resBook1['id'] ."');"; 
echo "\r\n";
echo "bookmarkID". $resBook1['id'] ."Btn.addEventListener('click', createBookmarkID". $resBook1['id'] ."Btn, false);";
echo "\r\n";
echo "function createBookmarkID". $resBook1['id'] ."Btn(){ ";
echo "\r\n";
echo "var x = document.getElementById('content');";
echo "\r\n";
echo "console.log('bookmark clicked')";
echo "\r\n";

echo "x.innerHTML = `".$resBook1['name']."`;";

//echo "&lt;books&gt;";
//echo "\r\n";
//echo "&lt;book&gt;";
//echo "\r\n";
//echo "&lt;title&gt; bookID". $resBook1['id'] ." &lt;/title&gt;";
//echo "\r\n";
//echo "&lt;url&gt; Uploads/Ebook/". $resBook1['name'] ." &lt;/url&gt;";
//echo "\r\n";
//echo "&lt;/book&gt;";
//echo "\r\n";
//echo "&lt;/books&gt; ";
//echo "\r\n";
//echo "`;";

echo "\r\n";
echo "var text = x.value;";
echo "\r\n";
echo "console.log(text);";
echo "\r\n";
//echo "$(document).on('click', '.runCode', function(event) {";
echo "\r\n";
//echo "event.preventDefault();";
echo "\r\n";
echo "$.ajax({";
echo "\r\n";
echo "type: 'POST',";
echo "\r\n";
echo "url: 'addBookmark.php',";
echo "\r\n";
echo "data: {book: text},";
echo "\r\n";
echo "success: function(result) {";
echo "\r\n";
echo "console.log('the data was successfully sent to the server');";
echo "\r\n";
echo "}";
echo "\r\n";
echo "});";
echo "\r\n";
echo "setTimeout(function(){ window.location.reload(); }, 2000)  ";
echo "\r\n";
//echo "}); ";
echo "\r\n";
echo "\r\n";
echo "}";
echo "\r\n";
                
}
?>    


  }, 2000)       


 </script>


<script>
/*runs each time a new character is entered*/
$('#searchp').keyup(function() {
/*takes inpt from input box*/
var seterm = $('#searchp').val();
/*scans through each element*/
for (var i = 0; i < $('.contact').length; i++) {
/*Makes all elements visible*/
$('.contact:eq(' + i + ')').css('display', 'inline-block');
/*If it doesn't match the input it is hidden*/
if ($('.contact:eq(' + i + ')').text().toLowerCase().indexOf(seterm) < 0) {
$('.contact:eq(' + i + ')').css('display', 'none');
} 
}
});    
</script>


  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
$('.tab-list ul li').click(function() {
  $('.tab-list ul li').removeClass('active');
  $(this).addClass('active');
  $('.tab-body .tab-body-content').hide();
  var tab = $(this).data('tab');
  $('.tab-body .tab-body-content[data-tabcontent=' + tab + ']').show();
});
</script>


<script>
    
var searchScreen = document.getElementById('searchScreen');
var profileScreen = document.getElementById('profileScreen');

//searchScreen.style.display = 'none';
document.getElementById("searchScreen").style.zIndex = "90";   

//var bookmarkBTN = document.getElementById('bookmarkBTN');


    
 var State1 = "on";    
 var State2 = "on";  
    
function showSearchScreen(){
 

if (State1 == "on") {
    State1 = "off"
searchScreen.style.display = 'block';
document.getElementById("bookmarkBTN").style.backgroundColor = "#C67C66"; 

profileScreen.style.display = 'none';
document.getElementById("profileBTN").style.backgroundColor = "transparent";


  } else {
    State1 = "on"
searchScreen.style.display = 'none';
document.getElementById("bookmarkBTN").style.backgroundColor = "transparent";


  }   
// end function

}
  
  
function showProfileScreen(){
 

if (State2 == "on") {
    State2 = "off"
profileScreen.style.display = 'block';
document.getElementById("profileBTN").style.backgroundColor = "#C67C66"; 

searchScreen.style.display = 'none';
document.getElementById("bookmarkBTN").style.backgroundColor = "transparent";

  } else {
    State2 = "on"
profileScreen.style.display = 'none';
document.getElementById("profileBTN").style.backgroundColor = "transparent";


  }   
// end function

}  
  
    
</script>


<style>
 
#pdfViewer {
position: absolute!important;
top: 0px;
left: 0px;
height: 100vh;
width: 100vw;
z-index: 99999999999999999!important;
background-color: white; 
} 
    
#embeddedView {
position: relative!important;
top: 5%;
left: 0px;
height: 95%;
width: 100%;
z-index: 9999!important;


}    
  
.closePDF {
position: absolute;
right: 50%;
top: 0px;
background-color: transparent;
border: 0px solid white;
z-index: 9999999999999999999!important;
}  
    
</style>

<div id="pdfViewer">
        <button class="closePDF" onclick="document.getElementById('pdfViewer').style.display='none';">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"></path>
</svg>    
   </button>
 <div id="embeddedView"></div>
</div> 
 
<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<!-- partial -->
  <script>
  
var pdfViewer = document.getElementById('pdfViewer');  

 
setTimeout(function(){ 
pdfViewer.style.display = "none";  
}, 200)	 
  
function openPDF(){
pdfViewer.style.display = "";     
}  
  
//var embeddedView = document.getElementById('embeddedView');  
//embeddedView.style.display = "none";    
  
const pPDFEmbedAPIWrapper = {
      displayPDF: function (urlToPDF) {
        fetch(urlToPDF)
          .then(pPDFEmbedAPIWrapper.errorHandler)
          .then((response) => response.blob())
          .then((blob) => {
            pPDFEmbedAPIWrapper.embedView(blob, urlToPDF);
          })
          .catch((error) => {
            console.log(error);
          });
      },

      embedView: function (blob, urlToPDF) {
        if (window.adobeDCView) {
          window.adobeDCView = null;
        }
        window.adobeDCView = new AdobeDC.View({
          clientId: pPDFEmbedAPIWrapper.clientId,
          divId: pPDFEmbedAPIWrapper.divId
        });
        window.adobeFilePreview = adobeDCView.previewFile(
          {
            content: { promise: blob.arrayBuffer() },
            metaData: { fileName: urlToPDF.split("/").slice(-1)[0] }
          },
          pPDFEmbedAPIWrapper.viewerOptions
        );
      },

      errorHandler: function (response) {
        if (!response.ok) {
          if (typeof badResponse === "function") {
            badResponse(response); // modify the DOM here
          }
          throw Error("Fetch Response Status: " + response.status + " - " + response.statusText);
        }
        if (response.headers.get("Content-Type") != "application/pdf") {
          if (typeof notPDF === "function") {
            notPDF(response); // modify the DOM here
          }
          throw Error("The content at the requested URL is not a PDF file. Content-Type: " + response.headers.get("Content-Type"));
        }
        return response;
      },

    }

    pPDFEmbedAPIWrapper.clientId = "04294797e1fb42a7805432d8b3129839"; // This clientId can be used for any CodePen example;
    pPDFEmbedAPIWrapper.viewerOptions = {
      embedMode: "FULL_WINDOW", //FULL_WINDOW , SIZED_CONTAINER
      defaultViewMode: "FIT_PAGE", //FIT_WIDTH , FIT_PAGE
      showDownloadPDF: false,
      showPrintPDF: false,
      showLeftHandPanel: false,
      showAnnotationTools: false
    };
    pPDFEmbedAPIWrapper.divId = "embeddedView";





<?php
/*
//$sqlEducationJS = "SELECT * FROM LibraryNewBooks WHERE category='Education'";
//getting id from url
$id = $_GET['id'];

$sqlEducationJS = "SELECT * FROM LibraryNewData WHERE login_id=".$_SESSION['id']." ORDER BY id DESC";

if($result2 = mysqli_query($link, $sqlEducationJS)){
    if(mysqli_num_rows($result2) > 0){
  
        while($row2 = mysqli_fetch_array($result2)){
            //echo "<div class='item contact' id='embedView0". $row2['id'] ."'>";
echo "\r\n";
echo "document.addEventListener('adobe_dc_view_sdk.ready', (event) => {";
echo "\r\n";
echo "document.getElementById('embedViewMark0". $row2['id'] ."').addEventListener('click', function () {";
echo "\r\n";
echo "pPDFEmbedAPIWrapper.displayPDF('Uploads/Ebook/". $row2['book'] ." '); ";
echo "\r\n";
echo "openPDF()      });";
echo "\r\n";
echo "});";
echo "\r\n";
        }
      
        // Close result set
        mysqli_free_result($result2);
    } else{
        //echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlEducationJS. " . mysqli_error($link);
}
*/
?>




<?php
//$sqlEducationJS = "SELECT * FROM LibraryNewBooks WHERE category='Education'";

$sqlEducationJS = "SELECT * FROM LibraryNewBooks ORDER BY id DESC";

if($result2 = mysqli_query($link, $sqlEducationJS)){
    if(mysqli_num_rows($result2) > 0){
  
        while($row2 = mysqli_fetch_array($result2)){
            //echo "<div class='item contact' id='embedView0". $row2['id'] ."'>";
echo "\r\n";
echo "document.addEventListener('adobe_dc_view_sdk.ready', (event) => {";
echo "\r\n";
echo "document.getElementById('embedView0". $row2['id'] ."').addEventListener('click', function () {";
echo "\r\n";
echo "pPDFEmbedAPIWrapper.displayPDF('Uploads/Ebook/". $row2['name'] ." '); ";
echo "\r\n";
echo "openPDF()      });";
echo "\r\n";
echo "});";
echo "\r\n";
        }
      
        // Close result set
        mysqli_free_result($result2);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqlEducationJS. " . mysqli_error($link);
}

?>


/*
    document.addEventListener("adobe_dc_view_sdk.ready", (event) => {
      document.getElementById("embedView01").addEventListener("click", function () {
        pPDFEmbedAPIWrapper.displayPDF("Circuits.pdf")
      });
      document.getElementById("embedView02").addEventListener("click", function () {
        pPDFEmbedAPIWrapper.displayPDF("https://mbytedeveloping.com/Customers/GoldenLeafWorld/Project-Library/Uploads/Ebook/HTML.pdf")
      });
      document.getElementById("embedView03").addEventListener("click", function () {
        pPDFEmbedAPIWrapper.displayPDF("https://mbytedeveloping.com/Customers/GoldenLeafWorld/Project-Library/Uploads/Ebook/JavaScript.pdf")
      });
      //pPDFEmbedAPIWrapper.displayPDF("Circuits.pdf");
    });
*/

    function badResponse(response) {
      var messageElement = document.createElement("div");
      messageElement.classList.add("error-message");
      messageElement.appendChild(document.createTextNode("Fetch Response Status: " + response.status + " - " + response.statusText));
      document.getElementById("embeddedView").clearChildren();
      document.getElementById("embeddedView").appendChild(messageElement);
    }

    function notPDF(response) {
      var messageElement = document.createElement("div");
      messageElement.classList.add("error-message");
      messageElement.appendChild(document.createTextNode("The MIME type of the requested content is " + response.headers.get("Content-Type") + ". The content must be MIME type application/pdf."));
      document.getElementById("embeddedView").clearChildren();
      document.getElementById("embeddedView").appendChild(messageElement);
    }

    // Helper functions
    // Add arrayBuffer if necessary i.e. Safari
    (function () {
      if (Blob.arrayBuffer != "function") {
        Blob.prototype.arrayBuffer = myArrayBuffer;
      }

      function myArrayBuffer() {
        return new Promise((resolve) => {
          let fileReader = new FileReader();
          fileReader.onload = () => {
            resolve(fileReader.result);
          };
          fileReader.readAsArrayBuffer(this);
        });
      }
    })();

    if (typeof Element.prototype.clearChildren === 'undefined') {
      Object.defineProperty(Element.prototype, 'clearChildren', {
        configurable: true,
        enumerable: true, // false
        value: function () {
          while (this.firstChild) this.removeChild(this.lastChild);
        }
      });
    }      
      
      
      
      
  </script> 
 

