<?php
// including the database connection file
include_once("../connection.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$classNumber = mysqli_real_escape_string($mysqli, $_POST['classNumber']);
	
	
	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE LibraryNewLogin SET name='$name',classNumber='$classNumber' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
	//	header("Location: index.php");
	echo '<script> window.location.href = "index.php";    </script>';

}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewLogin WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$classNumber = $res['classNumber'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><textarea type="text" name="name"><?php echo $name;?></textarea></td>
			</tr>

			<tr> 
				<td>Class</td>
				<td><textarea type="text" name="classNumber"><?php echo $classNumber;?></textarea></td>
			</tr>


			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>