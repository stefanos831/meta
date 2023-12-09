
<style>
    
#profileScreen {
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
 overflow-x: hidden;
display: none; 
z-index: 9999999999999!important;
text-align: center;
}


#profileScreen:hover {
    background-color: rgba(39, 36, 36, 0.7);
    transition: all 1s ease;
    text-shadow: 2px 1px 5px black;
}    
    
</style>

<?php session_start(); ?> 

<div id="profileScreen">
    
<h1>Profile</h1>   
 
Welcome <?php echo $_SESSION['name'] ?>  
<br>
<!-- Test id ( <?php //echo $_SESSION['id'] ?> ) -->
<br>

 

 
<div id="ajaxBookmark">

<?php

// Attempt select query execution
$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewData WHERE login_id=".$_SESSION['id']." ORDER BY id DESC LIMIT 5");

?>


<!--
	<table width='80%' border=0>
		<tr bgcolor='#C67C66'>
			<td>Name</td>
			<td>Action</td>

		</tr>
		</table>
-->

<style>

.openBookMarkBTN {
background-color: #C67C66!important;  
float: left!important;
text-decoration: none!important;
margin-left: 0px!important;
}    
    
.deleteBookMarkBTN {
background-color: #C67C66!important;  
float: right!important;   
margin-right: 0px!important;
}

.bookMarkItem {
border: 1px solid #C67C66!important;
}
    
</style>

		<?php
		while($res00 = mysqli_fetch_array($result)) {		
			//echo "<tr>";
			//echo "<td>".$res00['book']."</td>";
			//echo "<td> <a href=\"deleteBookmark.php?id=$res00[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>  <a id='embedViewMark0". $res00['id'] ."'>Open</a>  </td>";
            //echo "</tr>";
	
	        echo "<div class='item bookMarkItem'>"; 
	        echo "<h2> ". $res00['book'] ." </h2>";
	        echo "" . "<img src=Uploads/open-book.png  />" . "";
	        echo "<a class='openBookMarkBTN' id='embedViewMark0". $res00['id'] ."'>Open</a>";
	        echo "<a class='deleteBookMarkBTN' href=\"deleteBookmark.php?id=$res00[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
	        echo "</div> "; 
	        
	
	
		}
		
		?>
	

<!--
XML File

<books>

    <book>    
    <title> book1 </title>
    <url> Uploads/Ebook/JavaScript.pdf </url>  
    </book>


</books>


-->

<style>
    
.bookMarked {
position: relative;
height: 500px;
width: 500px;
}    
    
</style>







<!--
        <form action="index.php" method="post" >
        <textarea style="position: relative; height: 250px; width: 500px; "  name="book" id="content" >  
    
        </textarea> <br>
        
        <input type="hidden" name="submit_check" value="1">
        </form> 
        <input class="runCode" type="submit" name="submit" value="Run-Code">
-->

<br> <br>
<div id="embedViewBookMark" style="display: none!important;"> Open your bookmark</div>



 </div>
    
</div>


