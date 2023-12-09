<html>
<head>
	<title>Add Videos</title>
</head>

<body>

<?php
//including the database connection file
include_once("../connection.php");

if(isset($_POST['Submit'])) {	


	//$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$object = mysqli_real_escape_string($mysqli, $_POST['object']);


$video_name   = $_FILES['video']['name'];
$video        = $_FILES['video']['tmp_name'];
$locationvideo     = "../Uploads/Video/".$video_name;
move_uploaded_file($video, $locationvideo);


		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO LibraryNewVideo(video,object) VALUES('$video_name','$object')");
		
		//Redirect
echo '<script> window.location.href = "index.php";    </script>';

}
?>

	<a href="index.php">Home</a>
	<br/><br/>

	<form action="AddVideos.php" method="post" enctype="multipart/form-data">
		<table width="25%" border="0">

			<tr> 
				<td>Video</td>
				<!-- <td><textarea type="text" name="video">   </textarea></td> 
				<td> <input type="file" name="video" /> </td>
				-->
				
				<td> <input type="file" name="video" /> </td>
			</tr>


			<tr> 
				<td>category</td>
				<!-- <td><textarea type="text" name="category">  </textarea></td> -->
				
				<td>  
				<select name="object">
<option value="object1">object1</option>
<option value="object2">object2</option>
<option value="object3">object3</option>
<option value="object4">object4</option>
<option value="object5">object5</option>
<option value="object6">object6</option>

</select>
				</td>
				
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>


</body>
</html>