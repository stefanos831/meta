<html>
<head>
	<title>Add Video/Model</title>
</head>

<body>

<?php
//including the database connection file
include_once("../connection.php");

if(isset($_POST['Submit'])) {	


	//$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$object = mysqli_real_escape_string($mysqli, $_POST['object']);



$model_name   = $_FILES['model']['name'];
$model        = $_FILES['model']['tmp_name'];
$locationmodel     = "../Uploads/Models/".$model_name;
move_uploaded_file($model, $locationmodel);	

			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO LibraryNewModels(model,object) VALUES('$model_name','$object')");
		
		//Redirect
echo '<script> window.location.href = "index.php";    </script>';

}
?>

	<a href="index.php">Home</a>
	<br/><br/>

	<form action="AddModels.php" method="post" enctype="multipart/form-data">
		<table width="25%" border="0">


			<tr> 
				<td>Model</td>
				<td> <input type="file" name="model" /> </td>
			</tr>

			<tr> 
				<td>category</td>
				<!-- <td><textarea type="text" name="category">  </textarea></td> -->
				
				<td>  
				<select name="object">
<option value="object1">table1</option>
<option value="object2">table2</option>
<option value="object3">table3</option>
<option value="object4">table4</option>
<option value="object5">table5</option>
<option value="object6">table6</option>

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