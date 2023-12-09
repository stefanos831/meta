<html>
<head>
	<title>Add Audio</title>
</head>

<body>

<?php
//including the database connection file
include_once("../connection.php");

if(isset($_POST['Submit'])) {	


//$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$category = mysqli_real_escape_string($mysqli, $_POST['category']);


$pdf_name   = $_FILES['name']['name'];
$name        = $_FILES['name']['tmp_name'];
$locationmp3     = "../Uploads/Audio/".$pdf_name;
move_uploaded_file($name, $locationmp3);
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO librarynewaudio(name,category) VALUES('$pdf_name','$category')");
		
		//Redirect
echo '<script> window.location.href = "index.php";    </script>';

}
?>

	<a href="index.php">Home</a>
	<br/><br/>

	<form action="AddAudio.php" method="post" enctype="multipart/form-data">
		<table width="25%" border="0">

			<tr> 
				<td>Audio</td>
				<!-- <td><textarea type="text" name="name">   </textarea></td> -->
				<td> <input type="file" name="name" multiple/> </td>
			</tr>

			<tr> 
				<td>category</td>
				<!-- <td><textarea type="text" name="category">  </textarea></td> -->
				<td>  
				<select name="category">
<option value="Arts">Arts</option>
<option value="Biology">Biology</option>
<option value="Business">Business</option>
<option value="Education">Education</option>
<option value="Environment">Environment</option>
<option value="General Reference">General Reference</option>
<option value="History">History</option>
<option value="Information and Publishing">Information and Publishing</option>
<option value="Law">Law</option>
<option value="Library Science">Library Science</option>
<option value="Medicine">Medicine</option>
<option value="Multicultural Studies">Multicultural Studies</option>
<option value="Nation and World">Nation and World</option>
<option value="Science">Science</option>
<option value="Social Science">Social Science</option>
<option value="Technology">Technology</option>
<option value="Fiction">Fiction</option>
<option value="Non Fiction">Non Fiction</option>

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