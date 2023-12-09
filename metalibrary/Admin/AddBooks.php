<html>
<head>
	<title>Add Books</title>
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
$locationpdf     = "../Uploads/Ebook/".$pdf_name;
move_uploaded_file($name, $locationpdf);


$image_name   = $_FILES['Image']['name'];
$image        = $_FILES['Image']['tmp_name'];
$location     = "../Uploads/Images/".$image_name;
move_uploaded_file($image, $location);		

			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO LibraryNewBooks(name,Image,category) VALUES('$pdf_name','$image_name','$category')");
		
		//Redirect
echo '<script> window.location.href = "index.php";    </script>';

}
?>

	<a href="index.php">Home</a>
	<br/><br/>

	<form action="AddBooks.php" method="post" enctype="multipart/form-data">
		<table width="25%" border="0">

			<tr> 
				<td>PDF</td>
				<!-- <td><textarea type="text" name="name">   </textarea></td> -->
				<td> <input type="file" name="name" /> </td>
			</tr>

			<tr> 
				<td>Image</td>
				<td> <input type="file" name="Image" /> </td>
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