<?php

include_once("../connection.php");

$resultBooks = mysqli_query($mysqli, "SELECT * FROM LibraryNewBooks ORDER BY id DESC LIMIT 100"); 
$resultUsers = mysqli_query($mysqli, "SELECT * FROM LibraryNewLogin ORDER BY id DESC LIMIT 100"); 
$resultAudio = mysqli_query($mysqli, "SELECT * FROM librarynewaudio ORDER BY id DESC LIMIT 100"); 
$resultVideos = mysqli_query($mysqli, "SELECT * FROM LibraryNewVideo ORDER BY id DESC LIMIT 100"); 
$resultModels = mysqli_query($mysqli, "SELECT * FROM LibraryNewModels ORDER BY id DESC LIMIT 100");

?>


<!DOCTYPE html>
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta charset="UTF-8">
  <title>Admin panel</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<script src="https://preview.babylonjs.com/viewer/babylon.viewer.js"></script> 
</head>
<body>
<!-- partial:index.partial.html -->
<div class="admin-panel">
  
    <div class="slidebar">
        <ul>
            <li><a href="" name="tab1"><i class="fa fa-tachometer"></i>General</a></li>
            <li><a href="" name="tab2"><i class="fa fa-picture-o"></i>E-books</a></li>
            <li><a href="" name="tab3"><i class="fa fa-file-video-o"></i>Videos</a></li>
            <li><a href="" name="tab5"><i class="fa fa-cube"></i>Models</a></li>
			<li><a href="" name="tab6"><i class="fa fa-file-audio-o"></i>Audio</a></li>
            <li><a href="" name="tab4"><i class="fa fa-user"></i>Users</a></li>
        </ul>
    </div>
  
    <div class="main">
         <div id="tab1"><h2 class="header">Dashboard</h2> 
         
<table width='80%' border=1>
<tr bgcolor='#333'>
<th> Total Books </th> 
<th> Total Videos </th>
<th> Total Models </th>
<th> Total Audio </th>
</tr>    
    
<tr>
  
<td>

									<?php 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id FROM LibraryNewBooks ORDER BY id";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }

//mysqli_close($con);  
                                    ?>     
    
</td>    

<td> 
									<?php 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id FROM LibraryNewVideo ORDER BY id";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }

                                    ?> 
</td>
<td> 
									<?php 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id FROM LibraryNewModels ORDER BY id";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
 
                                    ?> 
</td>  
<td> 
									<?php 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id FROM librarynewaudio ORDER BY id";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);  
                                    ?> 
</td>  
<!-- <td> 
									<?php 
// Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// $sql="SELECT id FROM librarynewaudio ORDER BY id";

// if ($result=mysqli_query($con,$sql))
//   {
//   // Return the number of rows in result set
//   $rowcount=mysqli_num_rows($result);
//   echo $rowcount;
//   // Free result set
//   mysqli_free_result($result);
//   }

// mysqli_close($con);  
                                    ?> 
</td>   -->
    
</tr>    
    
</table>

         
         </div>
         
         
         <div id="tab2"><h2 class="header">E-books</h2>
  
<a href="AddBooks.php">New Book
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
</a>
  
<br>

	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Image</td>
			<td>Category</td>
			<td>Actions</td>
		</tr>
		<?php
		while($res2 = mysqli_fetch_array($resultBooks)) {		
			echo "<tr>";
			echo "<td>" . "<a href=../Uploads/Ebook/". $res2['name'] ." target=blank>". $res2['name'] ."</a>" . "</td>";  
		    echo "<td> <img src='../Uploads/Images/".$res2['Image']."' height='150' width='150'  /> </td>";	
		    echo "<td> <b> ".$res2['category']." </b> </td>";	
			echo "<td>
			  <button class='tab__btn'> <a href=\"EditBooks.php?id=$res2[id]\">Edit</a>   </button>
		  <button class='tab__btn3'>	<a href=\"DeleteBooks.php?id=$res2[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>  </button> 
			</td> </tr>";		
		}
		?>
	</table>         
         
         </div>
         
         
         <div id="tab3"><h2 class="header">Videos</h2>
    
<a href="AddVideos.php">New Video
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16">
  <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
  <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
  <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
</a>
  
<br>    
    
    
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Video</td>
			<td>Pedestral</td>
			<td>Actions</td>
		</tr>
		<?php
		while($res3 = mysqli_fetch_array($resultVideos)) {		
			echo "<tr>";
			echo "<td>" . "<a href=../Uploads/Ebook/". $res3['name'] ." target=blank>". $res3['name'] ."</a>" . "</td>";  
		    echo "<td> <video width='320' height='240' controls> <source src='../Uploads/Video/".$res3['video']."' type='video/mp4'> Your browser does not support the video tag. </video> </td> ";
		    echo "<td>".$res3['object']."</td>";
			echo "<td>
			  <button class='tab__btn'> <a href=\"EditVideos.php?id=$res3[id]\">Edit</a>   </button>
		  <button class='tab__btn3'>	<a href=\"DeleteVideos.php?id=$res3[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>  </button> 
			</td> </tr>";		
		}
		?>
	</table>     
         
         </div>
         
         
         <div id="tab4"><h2 class="header">Users</h2>
 
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Username</td>
			<td>Name</td>
			<td>Class Number</td>
			<td>Password</td>
			<td>Actions</td>
		</tr>
		<?php
		while($res4 = mysqli_fetch_array($resultUsers)) {		
			echo "<tr>";
			echo "<td>".$res4['username']."</td>";
			echo "<td>".$res4['name']."</td>";
			echo "<td>".$res4['classnumber']."</td>";
		    echo "<td>".$res4['password']."</td>";
			echo "<td>
			  <button class='tab__btn'> <a href=\"edit.php?id=$res4[id]\">Edit</a>   </button>
		  <button class='tab__btn3'>	<a href=\"delete.php?id=$res4[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>  </button> 
			</td> </tr>";		
		}
		?>
	</table>          
         
         </div>

		<div id="tab6"><h2 class="header">Audio</h2>
		<a href="AddAudio.php">New Audio
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-volume-up-fill" viewBox="0 0 16 16">
			<path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
			<path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
			<path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06z"/>
			</svg>
		</a>

		<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Category</td>
			<td>Actions</td>
		</tr>
		<?php
		while($res6 = mysqli_fetch_array($resultAudio)) {		
			echo "<tr>";
			echo "<td>".$res6['name']."</td>";
			echo "<td> <b> ".$res6['category']." </b> </td>";
			echo "<td>
			  <button class='tab__btn'> <a href=\"edit.php?id=$res6[id]\">Edit</a>   </button>
		  <button class='tab__btn3'>	<a href=\"delete.php?id=$res6[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>  </button> 
			</td> </tr>";		
		}
		?>
	</table>          
         
         </div>
         
         
         <div id="tab5"><h2 class="header">Models</h2>
         
<a href="AddModels.php">New Model
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
</svg>
</a>
  
<br>    
    
    
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Model</td>
			<td>Pedestral</td>
			<td>Actions</td>
		</tr>
		<?php
		while($res5 = mysqli_fetch_array($resultModels)) {		
			echo "<tr>";
		    echo "<td> <b> ".$res5['model']." </b>      <babylon style='height: 400px; width: 400px;' model='../Uploads/Models/".$res5['model']."' templates.main.params.fill-screen='false'></babylon> </td>";	
            echo "<td>".$res5['object']."</td>";
			echo "<td>
			  <button class='tab__btn'> <a href=\"EditModels.php?id=$res5[id]\">Edit</a>   </button>
		  <button class='tab__btn3'>	<a href=\"DeleteModels.php?id=$res5[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>  </button> 
			</td> </tr>";		
		}
		?>
	</table>  
   
         
         </div>    
    </div>
  
 
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
