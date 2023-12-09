<?php session_start(); ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Library</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	

	
</head>

<body>

<!--  Show all the times     -->

<?php include("navbar.php"); ?>
	
	
	
<!--  end     -->	

<!--  When logged in    -->
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
		
<br> <br> <br>
<style>

.searchBTN {
display: block;       
}

.profileBTN {
display: block;       
}

.bookmarkBTN {
display: block;     
}
    
iframe {
                position: absolute;
                top: 0%;
                left: 0%;
                width: 100%;
                height: 100%;
                touch-action: none;    
}  



    
</style>		
		
				
Welcome <?php echo $_SESSION['name'] ?> 

<?php include("profile.php"); ?> 
<?php include("search.php"); ?>
<?php include("ModelTest.php"); ?>





<!--  When not logged in     -->
	<?php	
	} else {
		echo "
		<style> 

.searchBTN {
display: none;    
}

.profileBTN {
display: none;   
}

.bookmarkBTN {
display: none;     
}

.logoutBTN{
display: none;   
}



		</style>
		
		";
		include("AccountComponent/login.php");
		//include("profile.php");
		//include("search.php");
		//include("ModelTest.php");

	
	}
	?>

</body>
</html>
