<?php
// including the database connection file
include_once("../connection.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	//$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$category = mysqli_real_escape_string($mysqli, $_POST['category']);
	$pdf_name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$image_name = mysqli_real_escape_string($mysqli, $_POST['Image']);

//$pdf_name   = $_FILES['name']['name'];
//$name        = $_FILES['name']['tmp_name'];
//$locationpdf     = "../Uploads/Ebook/".$pdf_name;
//move_uploaded_file($name, $locationpdf);

//$image_name   = $_FILES['Image']['name'];
//$image        = $_FILES['Image']['tmp_name'];
//$location     = "../Uploads/Images/".$image_name;
//move_uploaded_file($image, $location);

	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE LibraryNewBooks SET name='$pdf_name', Image='$image_name', category='$category' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		echo '<script> window.location.href = "index.php";    </script>';

}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewBooks WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$Image = $res['Image'];
	$category = $res['category'];

}
?>
<html>
<head>	
	<title>Edit Books</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="EditBooks.php" enctype="multipart/form-data">
		<table border="0">
			<tr style="display: none!important;"> 
				<td>name</td>
				<!-- <td><textarea type="text" name="name">  <?php //echo $name;?> </textarea></td> -->
				<td> <input type="text" name="name" value="<?php echo $name;?>" /> </td>
			</tr>

			<tr> 
				<td>Image</td>
				<td> <input type="text" name="Image" value="<?php echo $Image;?>" style="display: none!important;" /> <br> <img src='../Uploads/Images/<?php echo $Image;?>' style='height: 200px; width: 150px'> </td>
			</tr>

			<tr> 
				<td>category</td>

        <style>

    

.select {
  position: relative;
  margin-bottom: 15px;
  width: 250px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-top: 1rem;
}
.select .selectBtn {

  width: 240px;
    height: 20px;
  
    margin-top: 1%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
    border-radius: 5px;
    box-shadow: 0 2px 20px hsla(0, 0%, 58%, 0.31);
    background-color: #f5f7fa;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
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
  width: 240px;
    height: 10px;
  
    margin-top: 1%;
    padding: 10px;
    
    font-size: 20px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
    border-radius: 5px;
    box-shadow: 0 2px 20px hsla(0, 0%, 58%, 0.31);
    background-color: #f5f7fa;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
}

.select .selectDropdown.toggle {
  visibility: visible;
  -webkit-transform: scale(1, 1);
          transform: scale(1, 1);
}

.btn {
    display: inline-block;
    margin-bottom: 0;
    font-family: 'Open Sans',Helvetica,Arial,sans-serif;
    font-weight: 700;
    text-align: center;
    vertical-align: middle;
    text-transform: uppercase;
    cursor: pointer;
    background-image: none;
    border: 0;
    border-color: rgba(0,0,0,0.07) rgba(0,0,0,0.1) rgba(0,0,0,0.18);
    white-space: nowrap;
    padding: 18px 15px;
    font-size: 12px;
    border-radius: 3px;
    color: #fff;
    letter-spacing: .02em;
    transition: 1s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background: #02ecbd;
    position: relative;
    color: black;
}

            
        </style> 
			
				<td>  
<!--
				<select name="category">
<option value="<?php //echo $category;?>"> <?php //echo $category;?></option>
</select>
-->

<input type="text" name="category" id="scaleFinal" value="<?php echo $category;?>" style="display: none!important;" /> 
<div id="scaleValue" style="display: none!important;"></div>             
    
<div class="select">
	<div class="selectBtn" data-type="firstOption">Change your category</div>
	<div class="selectDropdown">
		<div class="option" data-type="firstOption"> <div id="ScaleBTN1">Arts</div> </div>
		<div class="option" data-type="secondOption"> <div id="ScaleBTN2">Biology</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN3">Business</div> </div>
		
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN4">Education</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN5">Environment</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN6">General Reference</div> </div>

		<div class="option" data-type="thirdOption"> <div id="ScaleBTN7">History</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN8">Information and Publishing</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN9">Law</div> </div>

		<div class="option" data-type="thirdOption"> <div id="ScaleBTN10">Library Science</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN11">Medicine</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN12">Multicultural Studies</div> </div>

		<div class="option" data-type="thirdOption"> <div id="ScaleBTN13">Nation and World</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN14">Religion</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN15">Science</div> </div>

		<div class="option" data-type="thirdOption"> <div id="ScaleBTN16">Social Science</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN17">Technology</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN18">Travel</div> </div>

	</div>
</div>  

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
 
    
var  DBpage = <?php echo json_encode($page); ?>     
  
  
var Animation1Btn = document.getElementById("ScaleBTN1");
Animation1Btn.addEventListener("click", createAnimation1Btn, false);

function createAnimation1Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Arts`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}  

var Animation2Btn = document.getElementById("ScaleBTN2");
Animation2Btn.addEventListener("click", createAnimation2Btn, false);

function createAnimation2Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Biology`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}    


var Animation3Btn = document.getElementById("ScaleBTN3");
Animation3Btn.addEventListener("click", createAnimation3Btn, false);

function createAnimation3Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Business`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}   


var Animation4Btn = document.getElementById("ScaleBTN4");
Animation4Btn.addEventListener("click", createAnimation4Btn, false);

function createAnimation4Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Education`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}  


var Animation5Btn = document.getElementById("ScaleBTN5");
Animation5Btn.addEventListener("click", createAnimation5Btn, false);

function createAnimation5Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Environment`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}  
  
var Animation6Btn = document.getElementById("ScaleBTN6");
Animation6Btn.addEventListener("click", createAnimation6Btn, false);

function createAnimation6Btn(){ 

    document.getElementById("scaleValue").innerHTML = `General Reference`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}   
 
 
var Animation7Btn = document.getElementById("ScaleBTN7");
Animation7Btn.addEventListener("click", createAnimation7Btn, false);

function createAnimation7Btn(){ 

    document.getElementById("scaleValue").innerHTML = `History`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 
 

var Animation8Btn = document.getElementById("ScaleBTN8");
Animation8Btn.addEventListener("click", createAnimation8Btn, false);

function createAnimation8Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Information and Publishing`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}  


var Animation9Btn = document.getElementById("ScaleBTN9");
Animation9Btn.addEventListener("click", createAnimation9Btn, false);

function createAnimation9Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Law`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 


var Animation10Btn = document.getElementById("ScaleBTN10");
Animation10Btn.addEventListener("click", createAnimation10Btn, false);

function createAnimation10Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Library Science`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 


var Animation11Btn = document.getElementById("ScaleBTN11");
Animation11Btn.addEventListener("click", createAnimation11Btn, false);

function createAnimation11Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Medicine`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 

var Animation12Btn = document.getElementById("ScaleBTN12");
Animation12Btn.addEventListener("click", createAnimation12Btn, false);

function createAnimation12Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Multicultural Studies`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 


var Animation13Btn = document.getElementById("ScaleBTN13");
Animation13Btn.addEventListener("click", createAnimation13Btn, false);

function createAnimation13Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Nation and World`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 
 
 
var Animation14Btn = document.getElementById("ScaleBTN14");
Animation14Btn.addEventListener("click", createAnimation14Btn, false);

function createAnimation14Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Religion`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}  


var Animation15Btn = document.getElementById("ScaleBTN15");
Animation15Btn.addEventListener("click", createAnimation15Btn, false);

function createAnimation15Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Science`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

} 
 
 
var Animation16Btn = document.getElementById("ScaleBTN16");
Animation16Btn.addEventListener("click", createAnimation16Btn, false);

function createAnimation16Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Social Science`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}  
 
var Animation17Btn = document.getElementById("ScaleBTN17");
Animation17Btn.addEventListener("click", createAnimation17Btn, false);

function createAnimation17Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Technology`;


 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;

}   
 
var Animation18Btn = document.getElementById("ScaleBTN18");
Animation18Btn.addEventListener("click", createAnimation18Btn, false);

function createAnimation18Btn(){ 

    document.getElementById("scaleValue").innerHTML = `Travel`;


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