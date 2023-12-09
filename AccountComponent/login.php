<?php session_start(); ?>
<html>
<head>
	<title>Login</title>
</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');


* {
    margin: 0;
    padding: 0;
    font-family: Poppins;
}

h3 {
    font-size: 13px;
    margin: 7px 0px;
}

.wrapper {
background: url("Images/library2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pcon {
    width: 370px;
    height: 450px;
    border: 1px solid #C67C66;
    box-shadow: 2px 1px 5px black;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    backdrop-filter: blur(5px);
    background-color: rgba(39, 36, 36, 0.9);
    color: #C67C66;
    transition: all 1s ease;
}

.pcon:hover {
    background-color: rgba(39, 36, 36, 0.7);
    transition: all 1s ease;
    text-shadow: 2px 1px 5px black;
}

.textfield {
    height: 40px;
    width: 270px;
    text-indent: 10px;
    border-radius: 10px;
    border: none;
}

.textfield:focus {
    outline: 2px solid #C67C66;
}

.btn {
    height: 50px;
    width: 274px;
    margin-bottom: 10px;
    border: 2px solid #C67C66;
    border-radius: 10px;
    background-color: #9D3322;
    color: white;
    transition: all 600ms ease-out;
}

.btn:hover {
    background-color: rgba(157, 51, 34, .7);
    cursor: pointer;
}

.btn:active {
    color: black;
    background-color: white;
}

.inputs {
    margin: 35px 0px;
}


.forgot {
    position: relative;
    transform: translate(175px, 0px);
    font-size: 10px;
    text-decoration: underline;
}

.forgot:hover {
    color: white;
    cursor: pointer;
}


.checkbox {
    margin-top: 20px;
    font-size: 13px;
    margin-left: 5px;
    font-weight: bold;
}


</style>

<body>


<?php
include("./connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		//$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewLogin WHERE username='$user' AND password=md5('$pass')")
		$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewLogin WHERE username='$user' AND password=('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='index.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
		
	//	echo "<a href='../index.php'>Go back</a>";
	echo '<script> window.location.href = "./index.php";    </script>';	
		}
	}
} else {
?>



        <div class='wrapper'>
            <div class='pcon'>
                <h2>Login</h2>
                <form name="form1" method="post" action="">
                <div class='inputs'>
                    <h3>Username</h3>
                    <input type="text" name="username" class='textfield' id='un' required></input>
                    
                </div>
                <div class='inputs'>
                    <h3>Password</h3>
                    <input type="password" name="password" class='textfield' id='pw' required></input>

                </div>
                <input type="submit" name="submit" value="Submit"  class='btn'>
            </form>
            </div>
        </div>


	
<?php
}
?>
</body>
</html>
