<?php
// including the database connection file
include_once("../connection.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	//$name = mysqli_real_escape_string($mysqli, $_POST['name']);


//$video_name   = $_FILES['video']['name'];
//$video        = $_FILES['video']['tmp_name'];
//$locationvideo     = "../Uploads/Video/".$video_name;
//move_uploaded_file($video, $locationvideo);



$video = mysqli_real_escape_string($mysqli, $_POST["video"]);
$object = mysqli_real_escape_string($mysqli, $_POST["object"]);
	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE LibraryNewVideo SET object='$object',video='$video' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		echo '<script> window.location.href = "index.php";    </script>';

}
?>


<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewVideo WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

	$video = $res['video'];
	$object = $res['object'];

}
?>

        <style>
            html, body {
               
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                font-size: 20px!important;
            }

            #renderCanvas {
                width: 500px;
                height: 500px;
                touch-action: none;
            }
            
#ScaleBTN1 {
background-color: silver;
box-shadow: 2px 2px 2px black;
border: grey;
text-align: center;
} 

#ScaleBTN2 {
background-color: silver;
box-shadow: 2px 2px 2px black;
border: grey;
text-align: center;
} 

#ScaleBTN3 {
background-color: silver;
box-shadow: 2px 2px 2px black;
border: grey;
text-align: center;
}

#ScaleBTN4 {
background-color: silver;
box-shadow: 2px 2px 2px black;
border: grey;
text-align: center;
}

#ScaleBTN5 {
background-color: silver;
box-shadow: 2px 2px 2px black;
border: grey;
text-align: center;
}

#ScaleBTN6 {
background-color: silver;
box-shadow: 2px 2px 2px black;
border: grey;
text-align: center;
}

.select {
  position: relative;
  margin-bottom: 15px;
  width: 250px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.select .selectBtn {
  background: var(--bg1);
  padding: 10px;
  box-sizing: border-box;
  border-radius: 3px;
  width: 100%;
  cursor: pointer;
  position: relative;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background: #fff;
}
.select .selectBtn:after {
  content: "";
  position: absolute;
  top: 45%;
  right: 15px;
  width: 6px;
  height: 6px;
  -webkit-transform: translateY(-50%) rotate(45deg);
          transform: translateY(-50%) rotate(45deg);
  border-right: 2px solid #666;
  border-bottom: 2px solid #666;
  transition: 0.2s ease;
}
.select .selectBtn.toggle {
  border-radius: 3px 3px 0 0;
}
.select .selectBtn.toggle:after {
  -webkit-transform: translateY(-50%) rotate(-135deg);
          transform: translateY(-50%) rotate(-135deg);
}
.select .selectDropdown {
  position: absolute;
  top: 100%;
  width: 100%;
  border-radius: 0 0 3px 3px;
  overflow: hidden;
  background: var(--bg1);
  border-top: 1px solid #eee;
  z-index: 1;
  background: #fff;
  -webkit-transform: scale(1, 0);
          transform: scale(1, 0);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  visibility: hidden;
  transition: 0.2s ease;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
}
.select .selectDropdown .option {
  padding: 10px;
  box-sizing: border-box;
  cursor: pointer;
}
.select .selectDropdown .option:hover {
  background: #f8f8f8;
}
.select .selectDropdown.toggle {
  visibility: visible;
  -webkit-transform: scale(1, 1);
          transform: scale(1, 1);
}


            
        </style>


<html>
<head>	
	<title>Edit Video</title>
	
	
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="EditVideos.php" enctype="multipart/form-data" >
		<table border="0">


			<tr> 
				<td></td>
				<td > <input style="display: none!important;" type="text" name="video"  value="<?php echo $video;?>" /> 
				<br> 
				 <video width='320' height='240' controls> <source src='../Uploads/Video/<?php echo $video;?>' type='video/mp4'> Your browser does not support the video tag. </video>
				</td>
			</tr>

			

<tr>
<td></td>
<td><input type="text" name="object" id="scaleFinal" value="<?php echo $object;?>"  /> 
<br>  <div id="scaleValue" style="display: none!important;"></div> 
<br>

<div class="select">
	<div class="selectBtn" data-type="firstOption">Choose your table</div>
	<div class="selectDropdown">
		<div class="option" data-type="firstOption"> <div id="ScaleBTN1">table 1</div> </div>
		<div class="option" data-type="secondOption"> <div id="ScaleBTN2">table 2</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN3">table 3</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN4">table 4</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN5">table 5</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN6">table 6</div> </div>

	</div>
</div>

<br>


  </td>

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    <script>
 
const select = document.querySelectorAll('.selectBtn');
const option = document.querySelectorAll('.option');
let index = 1;

select.forEach(a => {
	a.addEventListener('click', b => {
		const next = b.target.nextElementSibling;
		next.classList.toggle('toggle');
		next.style.zIndex = index++;
	})
})
option.forEach(a => {
	a.addEventListener('click', b => {
		b.target.parentElement.classList.remove('toggle');
		
		const parent = b.target.closest('.select').children[0];
		parent.setAttribute('data-type', b.target.getAttribute('data-type'));
		parent.innerText = b.target.innerText;
	})
})
 
    
var Animation1Btn = document.getElementById("ScaleBTN1");
Animation1Btn.addEventListener("click", createAnimation1Btn, false);

function createAnimation1Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Object1`;

 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}  

var Animation2Btn = document.getElementById("ScaleBTN2");
Animation2Btn.addEventListener("click", createAnimation2Btn, false);

function createAnimation2Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Object2`;

 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}    


var Animation3Btn = document.getElementById("ScaleBTN3");
Animation3Btn.addEventListener("click", createAnimation3Btn, false);

function createAnimation3Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Object3`;

 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 



var Animation4Btn = document.getElementById("ScaleBTN4");
Animation4Btn.addEventListener("click", createAnimation4Btn, false);

function createAnimation4Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Object4`;

 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 


var Animation5Btn = document.getElementById("ScaleBTN5");
Animation5Btn.addEventListener("click", createAnimation5Btn, false);

function createAnimation5Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Object5`;

 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 

var Animation6Btn = document.getElementById("ScaleBTN6");
Animation6Btn.addEventListener("click", createAnimation6Btn, false);

function createAnimation6Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Object6`;

 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 

</script>
    
</td>

</tr>



			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>


</body>
</html>