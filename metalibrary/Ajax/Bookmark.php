
<?php

//including the database connection file
include_once("../connection.php");

//fetching data in descending order (lastest entry first)
$resultBookmarks = mysqli_query($mysqli, "SELECT * FROM LibraryNewData WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");


?>

	<table width='100%' border=0>
		<tr bgcolor='#C67C66'>
			<td>PDF</td>
			<td>Image</td>
		
		</tr>
		<?php
		while($resBookmarks = mysqli_fetch_array($resultBookmarks)) {		
			echo "<tr>";
			echo "<td>".$resBookmarks['book']."</td>";
            echo "</tr>";
		}
		?>
	</table>

