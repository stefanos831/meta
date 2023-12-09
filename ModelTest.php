<?php

include("connection.php");

//$link = mysqli_connect("localhost", "goldqqze_wp713", "nLHMH0Pp1lci", "goldqqze_newlibrary");
 
 //Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$model1 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object1' ORDER BY id DESC LIMIT 1");
$scale1 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object1' ORDER BY id DESC LIMIT 1");
$posY1 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object1' ORDER BY id DESC LIMIT 1");
$posX1 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object1' ORDER BY id DESC LIMIT 1");
$posZ1 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object1' ORDER BY id DESC LIMIT 1");
$rotY1 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object1' ORDER BY id DESC LIMIT 1");
$video1 = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object1' ORDER BY id DESC LIMIT 1");
$video1F = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object1' ORDER BY id DESC LIMIT 1");

$model2 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object2' ORDER BY id DESC LIMIT 1");
$scale2 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object2' ORDER BY id DESC LIMIT 1");
$posY2 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object2' ORDER BY id DESC LIMIT 1");
$posX2 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object2' ORDER BY id DESC LIMIT 1");
$posZ2 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object2' ORDER BY id DESC LIMIT 1");
$rotY2 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object2' ORDER BY id DESC LIMIT 1");
$video2 = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object2' ORDER BY id DESC LIMIT 1");
$video2F = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object2' ORDER BY id DESC LIMIT 1");

$model3 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object3' ORDER BY id DESC LIMIT 1");
$scale3 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object3' ORDER BY id DESC LIMIT 1");
$posY3 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object3' ORDER BY id DESC LIMIT 1");
$posX3 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object3' ORDER BY id DESC LIMIT 1");
$posZ3 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object3' ORDER BY id DESC LIMIT 1");
$rotY3 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object3' ORDER BY id DESC LIMIT 1");
$video3 = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object3' ORDER BY id DESC LIMIT 1");
$video3F = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object3' ORDER BY id DESC LIMIT 1");

$model4 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$scale4 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posY4 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posX4 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posZ4 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$rotY4 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$video4 = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object4' ORDER BY id DESC LIMIT 1");
$video4F = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object4' ORDER BY id DESC LIMIT 1");

$model5 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$scale5 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posY5 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posX5 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posZ5 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$rotY5 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$video5 = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object4' ORDER BY id DESC LIMIT 1");
$video5F = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object4' ORDER BY id DESC LIMIT 1");

$model6 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$scale6 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posY6 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posX6 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$posZ6 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$rotY6 = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE object='object4' ORDER BY id DESC LIMIT 1");
$video6 = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object4' ORDER BY id DESC LIMIT 1");
$video6F = mysqli_query($mysqli,"SELECT * FROM LibraryNewVideo WHERE object='object4' ORDER BY id DESC LIMIT 1");


?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Model Test</title>

        <!-- Babylon.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.2/dat.gui.min.js"></script>
        <script src="https://assets.babylonjs.com/generated/Assets.js"></script>
        <script src="https://cdn.babylonjs.com/ammo.js"></script>
        <script src="https://cdn.babylonjs.com/havok/HavokPhysics_umd.js"></script>
        <script src="https://cdn.babylonjs.com/cannon.js"></script>
        <script src="https://cdn.babylonjs.com/Oimo.js"></script>
        <script src="https://cdn.babylonjs.com/earcut.min.js"></script>
        <script src="https://cdn.babylonjs.com/babylon.js"></script>
        <script src="https://cdn.babylonjs.com/materialsLibrary/babylonjs.materials.min.js"></script>
        <script src="https://cdn.babylonjs.com/proceduralTexturesLibrary/babylonjs.proceduralTextures.min.js"></script>
        <script src="https://cdn.babylonjs.com/postProcessesLibrary/babylonjs.postProcess.min.js"></script>
        <script src="https://cdn.babylonjs.com/loaders/babylonjs.loaders.js"></script>
        <script src="https://cdn.babylonjs.com/serializers/babylonjs.serializers.min.js"></script>
        <script src="https://cdn.babylonjs.com/gui/babylon.gui.min.js"></script>
        <script src="https://cdn.babylonjs.com/inspector/babylon.inspector.bundle.js"></script>

        <style>
            html, body {
                overflow: hidden;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }

            #renderCanvas {
                position: absolute;
                top: 0%;
                left: 0%;
                width: 100%;
                height: 100%;
                touch-action: none; 
            }
  
 
    
#inspector-host {
position: absolute!important; 
right: 50px!important;
top: 0px!important; 
z-index: 9999999999999999!important;
}  

#scene-explorer-host{
 position: absolute!important; 
left: 0px!important; 
top: 0px!important; 
z-index: 99999999999999999!important;
}
            
/* Controls */            
            
 
#controller-forward {
	position: absolute;
	bottom: 80px;
	right: 60px;
	font-size: 40px;
	color: white;
}

#controller-right {
	position: absolute;
	bottom: 42px;
	right: 20px;
	font-size: 40px;
	color: white;
}

#controller-back {
	position: absolute;
	right: 60px;
	bottom: 2px;
	font-size: 40px;
	color: white;
}

#controller-left {
	position: absolute;
	bottom: 42px;
	right: 100px;
	font-size: 40px;
	color: white;
}

#controller-forward2 {
	position: absolute;
	bottom: 80px;
	right: 60px;
	font-size: 40px;
	color: white;
}

#controller-right2 {
	position: absolute;
	bottom: 42px;
	right: 20px;
	font-size: 40px;
	color: white;
}

#controller-back2 {
	position: absolute;
	right: 60px;
	bottom: 2px;
	font-size: 40px;
	color: white;
}

#controller-left2 {
	position: absolute;
	bottom: 42px;
	right: 100px;
	font-size: 40px;
	color: white;
}

.controls {
    position: absolute!important;
    bottom: 20px;
    left: 0px!important;
    z-index: 9999!important;
    height: 200px;
    width: 200px;
}  

.controls2 {
    position: absolute!important;
    bottom: 0px;
    right: 0px!important;
    z-index: 9999!important;
    height: 200px;
    width: 200px;
    display: none!important;
}  

.controller {
background-color: transparent;
border: 0px solid black;
height: 50px;
width: 50px;
} 

@media (orientation: landscape) {

.controls {

}

.controls2 {
display: none!important;
}

}

#videoScreen {
position: absolute!important;
top: 0px;
left: 0px;
height: 100vh;
width: 100vw;
z-index: 99999999999999999!important;
background-color: white; 
display: none;
}

#videoScreen video {
position: absolute;
height: 80%;
width: 100%;
left: 0px;
top: 5%;
}

#movementControls {
z-index: 10!important;    
}
             
            
        </style>
    </head>
<body>
 
 
<div id="videoScreen" style="display: none!important;">
        <button class="closePDF" onclick="document.getElementById('videoScreen').style.display='none';">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"></path>
</svg>    
   </button>

<div id="InnerVideoScreen"> </div>

</div>
    
    <canvas id="renderCanvas"></canvas>
    
<div class="controls" id="movementControls">
			            
            <button id="controller-forward" class="controller">
 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-up-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5A.5.5 0 0 0 4 11z"/>
</svg>                
            </button>
            
            <button id="controller-right" class="controller">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-right-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
</svg>                 
            </button>
            
            <button id="controller-back" class="controller">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
</svg>      
            </button>
            
            <button id="controller-left" class="controller">
 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
</svg>              
            </button>


        
            
        </div>

 <div class="controls2">
			            
            <button id="controller-forward2" class="controller">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-up-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5A.5.5 0 0 0 4 11z"/>
</svg>                
            </button>
            
            <button id="controller-right2" class="controller">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-right-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
</svg>                
            </button>
            
            <button id="controller-back2" class="controller">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
</svg>   
            </button>
            
            <button id="controller-left2" class="controller">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
</svg>                
            </button>
            
        </div>
    
    <script>
    
  

	 
	 
var  DBscale1 = <?php  

$row = mysqli_fetch_array($scale1, MYSQLI_ASSOC);
	
	if(empty($row['scale'])){
	 echo ('1.5');   
	}else if(isset($row['scale'])){
	 echo ($row['scale']); 
	}

	?> 	 
	 

var DBposY1 = <?php  

$row = mysqli_fetch_array($posY1, MYSQLI_ASSOC);
	
	if(empty($row['posY'])){
	 echo ('-8');   
	}else if(isset($row['posY'])){
	 echo ($row['posY']); 
	}

	 ?> 

var DBposX1 = <?php  

$row = mysqli_fetch_array($posX1, MYSQLI_ASSOC);
	
	if(empty($row['posX'])){
	 echo ('-15');   
	}else if(isset($row['posX'])){
	 echo ($row['posX']); 
	}

	 ?>


var DBposZ1 = <?php  

$row = mysqli_fetch_array($posZ1, MYSQLI_ASSOC);
	
	if(empty($row['posZ'])){
	 echo ('10');   
	}else if(isset($row['posZ'])){
	 echo ($row['posZ']); 
	}

	 ?> 


var DBrotY1 = <?php  

$row = mysqli_fetch_array($rotY1, MYSQLI_ASSOC);
	
	if(empty($row['rotY'])){
	 echo ('0.1');   
	}else if(isset($row['rotY'])){
	 echo ($row['rotY']); 
	}

	 ?> 


var DBmodel1 = <?php  

$row = mysqli_fetch_array($model1, MYSQLI_ASSOC);
	
	if(empty($row['model'])){
	 echo json_encode('Uploads/Models/AppleFallback.glb');  
	}else if(isset($row['model'])){
	 //echo ($row['model']); 
	 echo json_encode('Uploads/Models/'.$row['model']); 
	}

	 ?> 	 
// SECOND -----------------------------------------------------------------------------
  
var  DBscale2 = <?php  

$row = mysqli_fetch_array($scale2, MYSQLI_ASSOC);
	
	if(empty($row['scale'])){
	 echo ('1.5');   
	}else if(isset($row['scale'])){
	 echo ($row['scale']); 
	}

	 ?> 	 
	 

var DBposY2 = <?php  

$row = mysqli_fetch_array($posY2, MYSQLI_ASSOC);
	
	if(empty($row['posY'])){
	 echo ('-8');   
	}else if(isset($row['posY'])){
	 echo ($row['posY']); 
	}

	 ?> 

var DBposX2 = <?php  

$row = mysqli_fetch_array($posX2, MYSQLI_ASSOC);
	
	if(empty($row['posX'])){
	 echo ('0.2623422145843506');   
	}else if(isset($row['posX'])){
	 echo ($row['posX']); 
	}

	 ?>


var DBposZ2 = <?php  

$row = mysqli_fetch_array($posZ2, MYSQLI_ASSOC);
	
	if(empty($row['posZ'])){
	 echo ('10');   
	}else if(isset($row['posZ'])){
	 echo ($row['posZ']); 
	}

	 ?> 


var DBrotY2 = <?php  

$row = mysqli_fetch_array($rotY2, MYSQLI_ASSOC);
	
	if(empty($row['rotY'])){
	 echo ('0.1');   
	}else if(isset($row['rotY'])){
	 echo ($row['rotY']); 
	}

	 ?> 


var DBmodel2 = <?php  

$row = mysqli_fetch_array($model2, MYSQLI_ASSOC);
	
	if(empty($row['model'])){
	 echo json_encode('Uploads/Models/AppleFallback.glb');  
	}else if(isset($row['model'])){
	 //echo ($row['model']); 
	 echo json_encode('Uploads/Models/'.$row['model']); 
	}

	 ?> 	 
	 
// THIRD -----------------------------------------------------------------------------
  
var  DBscale3 = <?php  

$row = mysqli_fetch_array($scale3, MYSQLI_ASSOC);
	
	if(empty($row['scale'])){
	 echo ('1.5');   
	}else if(isset($row['scale'])){
	 echo ($row['scale']); 
	}

	 ?> 	 
	 

var DBposY3 = <?php  

$row = mysqli_fetch_array($posY3, MYSQLI_ASSOC);
	
	if(empty($row['posY'])){
	 echo ('-8');   
	}else if(isset($row['posY'])){
	 echo ($row['posY']); 
	}

	 ?> 

var DBposX3 = <?php  

$row = mysqli_fetch_array($posX3, MYSQLI_ASSOC);
	
	if(empty($row['posX'])){
	 echo ('14.068336486816406');   
	}else if(isset($row['posX'])){
	 echo ($row['posX']); 
	}

	 ?>


var DBposZ3 = <?php  

$row = mysqli_fetch_array($posZ3, MYSQLI_ASSOC);
	
	if(empty($row['posZ'])){
	 echo ('10');   
	}else if(isset($row['posZ'])){
	 echo ($row['posZ']); 
	}

	 ?> 


var DBrotY3 = <?php  

$row = mysqli_fetch_array($rotY3, MYSQLI_ASSOC);
	
	if(empty($row['rotY'])){
	 echo ('0.1');   
	}else if(isset($row['rotY'])){
	 echo ($row['rotY']); 
	}

	 ?> 


var DBmodel3 = <?php  

$row = mysqli_fetch_array($model3, MYSQLI_ASSOC);
	
	if(empty($row['model'])){
	 echo json_encode('Uploads/Models/AppleFallback.glb');  
	}else if(isset($row['model'])){
	 //echo ($row['model']); 
	 echo json_encode('Uploads/Models/'.$row['model']); 
	}

	 ?> 	 	 

// FOURTH -----------------------------------------------------------------------------
  
var  DBscale4 = <?php  

$row = mysqli_fetch_array($scale4, MYSQLI_ASSOC);
	
	if(empty($row['scale'])){
	 echo ('1.5');   
	}else if(isset($row['scale'])){
	 echo ($row['scale']); 
	}

	 ?> 	 
	 

var DBposY4 = <?php  

$row = mysqli_fetch_array($posY4, MYSQLI_ASSOC);
	
	if(empty($row['posY'])){
	 echo ('-8');   
	}else if(isset($row['posY'])){
	 echo ($row['posY']); 
	}

	 ?> 

var DBposX4 = <?php  

$row = mysqli_fetch_array($posX4, MYSQLI_ASSOC);
	
	if(empty($row['posX'])){
	 echo ('-13.595808982849121');   
	}else if(isset($row['posX'])){
	 echo ($row['posX']); 
	}

	 ?>


var DBposZ4 = <?php  

$row = mysqli_fetch_array($posZ4, MYSQLI_ASSOC);
	
	if(empty($row['posZ'])){
	 echo ('-10');   
	}else if(isset($row['posZ'])){
	 echo ($row['posZ']); 
	}

	 ?> 


var DBrotY4 = <?php  

$row = mysqli_fetch_array($rotY4, MYSQLI_ASSOC);
	
	if(empty($row['rotY'])){
	 echo ('0.1');   
	}else if(isset($row['rotY'])){
	 echo ($row['rotY']); 
	}

	 ?> 


var DBmodel4 = <?php  

$row = mysqli_fetch_array($model4, MYSQLI_ASSOC);
	
	if(empty($row['model'])){
	 echo json_encode('Uploads/Models/AppleFallback.glb');  
	}else if(isset($row['model'])){
	 //echo ($row['model']); 
	 echo json_encode('Uploads/Models/'.$row['model']); 
	}

	 ?> 	 



// FIFTH -----------------------------------------------------------------------------
  
var  DBscale5 = <?php  

$row = mysqli_fetch_array($scale5, MYSQLI_ASSOC);
	
	if(empty($row['scale'])){
	 echo ('1.5');   
	}else if(isset($row['scale'])){
	 echo ($row['scale']); 
	}

	 ?> 	 
	 

var DBposY5 = <?php  

$row = mysqli_fetch_array($posY5, MYSQLI_ASSOC);
	
	if(empty($row['posY'])){
	 echo ('-8');   
	}else if(isset($row['posY'])){
	 echo ($row['posY']); 
	}

	 ?> 

var DBposX5 = <?php  

$row = mysqli_fetch_array($posX5, MYSQLI_ASSOC);
	
	if(empty($row['posX'])){
	 echo ('0.20464769005775452');   
	}else if(isset($row['posX'])){
	 echo ($row['posX']); 
	}

	 ?>


var DBposZ5 = <?php  

$row = mysqli_fetch_array($posZ5, MYSQLI_ASSOC);
	
	if(empty($row['posZ'])){
	 echo ('-10');   
	}else if(isset($row['posZ'])){
	 echo ($row['posZ']); 
	}

	 ?> 


var DBrotY5 = <?php  

$row = mysqli_fetch_array($rotY5, MYSQLI_ASSOC);
	
	if(empty($row['rotY'])){
	 echo ('0.1');   
	}else if(isset($row['rotY'])){
	 echo ($row['rotY']); 
	}

	 ?> 


var DBmodel5 = <?php  

$row = mysqli_fetch_array($model5, MYSQLI_ASSOC);
	
	if(empty($row['model'])){
	 echo json_encode('Uploads/Models/AppleFallback.glb');  
	}else if(isset($row['model'])){
	 //echo ($row['model']); 
	 echo json_encode('Uploads/Models/'.$row['model']); 
	}

	 ?> 


// SIXTH -----------------------------------------------------------------------------
  
var  DBscale6 = <?php  

$row = mysqli_fetch_array($scale6, MYSQLI_ASSOC);
	
	if(empty($row['scale'])){
	 echo ('1.5');   
	}else if(isset($row['scale'])){
	 echo ($row['scale']); 
	}

	 ?> 	 
	 

var DBposY6 = <?php  

$row = mysqli_fetch_array($posY6, MYSQLI_ASSOC);
	
	if(empty($row['posY'])){
	 echo ('-8');   
	}else if(isset($row['posY'])){
	 echo ($row['posY']); 
	}

	 ?> 

var DBposX6 = <?php  

$row = mysqli_fetch_array($posX6, MYSQLI_ASSOC);
	
	if(empty($row['posX'])){
	 echo ('14.360766410827637');   
	}else if(isset($row['posX'])){
	 echo ($row['posX']); 
	}

	 ?>


var DBposZ6 = <?php  

$row = mysqli_fetch_array($posZ6, MYSQLI_ASSOC);
	
	if(empty($row['posZ'])){
	 echo ('-10');   
	}else if(isset($row['posZ'])){
	 echo ($row['posZ']); 
	}

	 ?> 


var DBrotY6 = <?php  

$row = mysqli_fetch_array($rotY6, MYSQLI_ASSOC);
	
	if(empty($row['rotY'])){
	 echo ('0.1');   
	}else if(isset($row['rotY'])){
	 echo ($row['rotY']); 
	}

	 ?> 


var DBmodel6 = <?php  

$row = mysqli_fetch_array($model6, MYSQLI_ASSOC);
	
	if(empty($row['model'])){
	 echo json_encode('Uploads/Models/AppleFallback.glb');  
	}else if(isset($row['model'])){
	 //echo ($row['model']); 
	 echo json_encode('Uploads/Models/'.$row['model']); 
	}

	 ?> 

	 
    
        var canvas = document.getElementById("renderCanvas");

        var startRenderLoop = function (engine, canvas) {
            engine.runRenderLoop(function () {
                if (sceneToRender && sceneToRender.activeCamera) {
                    sceneToRender.render();
                }
            });
        }

        var engine = null;
        var scene = null;
        var sceneToRender = null;
        var createDefaultEngine = function() { return new BABYLON.Engine(canvas, true, { preserveDrawingBuffer: true, stencil: true,  disableWebGL2Support: false}); };
        
        // script importation
        var url = "Babylonx.ShaderBuilder.js";
        var s = document.createElement("script"); s.type = "text/javascript"; s.src = url;document.head.appendChild(s);
        window.eval('var time = 0;');
        time = 0;
        var camera;
        var renderTarget,renderTarget2;        
        
        
        const createScene =  () => {
        const scene = new BABYLON.Scene(engine);

 scene.enablePhysics(new BABYLON.Vector3(0,-20,0), new BABYLON.CannonJSPlugin())


    // initialize plugin
    //var hk = new BABYLON.HavokPlugin();
    // enable physics in the scene with a gravity
   // scene.enablePhysics(new BABYLON.Vector3(0, -9.8, 0), hk);

    //const camera = new BABYLON.ArcRotateCamera("camera", -Math.PI / 2, Math.PI / 2.5, 3, new BABYLON.Vector3(0, 0, 0));
    //camera.attachControl(canvas, true);

            var camera = new BABYLON.UniversalCamera("UniversalCamera", new BABYLON.Vector3(0, 1, -5), scene);
        
            // Targets the camera to a particular position. In this case the scene origin
            camera.setTarget(BABYLON.Vector3.Zero());
        
            // Attach the camera to the canvas
            //camera.applyGravity = true;
            //camera.ellipsoid = new BABYLON.Vector3(.4, .8, .4);
            //camera.checkCollisions = true;
            camera.attachControl(canvas, true); 

camera.inertia = 0.9; // 0.5
  camera.angularSensibilityX = 10;
  camera.angularSensibilityY = 10;    
    
camera.speed = 0.7  

    //const light = new BABYLON.HemisphericLight("light", new BABYLON.Vector3(0, 1, 0));
  //const light2 = new BABYLON.HemisphericLight("light", new BABYLON.Vector3(0, 10, 0));
    //light2.intensity = 0.5;
    
  //  scene.debugLayer.show()

    // This creates a light, aiming 0,1,0 - to the sky (non-mesh)
    var light = new BABYLON.HemisphericLight("light", new BABYLON.Vector3(1, 1, 0), scene);

    // Default intensity is 1. Let's dim the light a small amount
    light.intensity = 1;

    var dirLight = new BABYLON.DirectionalLight("dirLight", new BABYLON.Vector3(-9, -4, 0), scene); //5,-5,10
    dirLight.position = new BABYLON.Vector3(0, 20, 0);
    dirLight.intensity = 0.1;
    dirLight.shadowMinZ = 1;
    dirLight.shadowMaxZ = 2500; 
    
    // var shadowGenerator = new BABYLON.ShadowGenerator(1024, dirLight);  
    // //shadowGenerator.useBlurExponentialShadowMap = true;
    // //shadowGenerator.useExponentialShadowMap = true;
    // shadowGenerator.useContactHardeningShadow = true;
    // shadowGenerator.filteringQuality = BABYLON.ShadowGenerator.QUALITY_HIGH;
    //shadowGenerator.bias = 0.01;
     //new BABYLON.HemisphericLight('light', new BABYLON.Vector3(1, 1, 0))
    
const myGround = BABYLON.MeshBuilder.CreateBox("box", {height: 1, width: 100, depth: 100 });

myGround.position.z = 0;
myGround.position.y = -10;
myGround.position.x = 0;

myGround.checkCollisions= true;
myGround.physicsImpostor = new BABYLON.PhysicsImpostor(myGround, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);    

//var groundAggregate = new BABYLON.PhysicsAggregate(myGround, BABYLON.PhysicsShapeType.BOX, { mass: 0 }, scene);

myGround.isVisible = false

function postProcess(){
    
 var defaultPipeline = new BABYLON.DefaultRenderingPipeline(
        "DefaultRenderingPipeline",
        true, // is HDR?
        scene,
        //scene.cameras
        [camera]
    );

    if (defaultPipeline.isSupported) {

        /* imageProcessing */
        defaultPipeline.imageProcessingEnabled = true; //true by default
       if (defaultPipeline.imageProcessingEnabled) {

            defaultPipeline.imageProcessing.contrast = 1; // 1 by default
            defaultPipeline.imageProcessing.exposure = 1; // 1 by default
            // color grading
            defaultPipeline.imageProcessing.colorGradingEnabled = false; // false by default
            if (defaultPipeline.imageProcessing.colorGradingEnabled) {
                // using .3dl (best) :
                defaultPipeline.imageProcessing.colorGradingTexture = new BABYLON.ColorGradingTexture("Textures/LateSunset.3dl", scene);
            }
        }    

        /* chromatic abberation */
        defaultPipeline.chromaticAberrationEnabled = false; // false by default
        if (defaultPipeline.chromaticAberrationEnabled) {
            defaultPipeline.chromaticAberration.aberrationAmount = 3; // 30 by default
            defaultPipeline.chromaticAberration.radialIntensity = 0.5; // 30 by default
            defaultPipeline.chromaticAberration.adaptScaleToCurrentViewport = false; // false by default
            defaultPipeline.chromaticAberration.alphaMode = 0; // 0 by default
            defaultPipeline.chromaticAberration.alwaysForcePOT = false; // false by default
            defaultPipeline.chromaticAberration.enablePixelPerfectMode = false; // false by default
            defaultPipeline.chromaticAberration.forceFullscreenViewport = true; // true by default
        }
        
        /* DOF */
        defaultPipeline.depthOfFieldEnabled = true // false by default
        if (defaultPipeline.depthOfFieldEnabled && defaultPipeline.depthOfField.isSupported) {
            defaultPipeline.depthOfFieldBlurLevel = 0; // 0 by default
            defaultPipeline.depthOfField.fStop = 4; // 1.4 by default
            defaultPipeline.depthOfField.focalLength = 50; // 50 by default, mm
            defaultPipeline.depthOfField.focusDistance = 2000; // 2000 by default, mm
            defaultPipeline.depthOfField.lensSize = 50; // 50 by default
        }
        /* FXAA */
        defaultPipeline.fxaaEnabled = true; // false by default
        if (defaultPipeline.fxaaEnabled) {
            defaultPipeline.fxaa.samples = 1; // 1 by default
            defaultPipeline.fxaa.adaptScaleToCurrentViewport = false; // false by default
        }
        /* glowLayer */
        defaultPipeline.glowLayerEnabled = false;
        if (defaultPipeline.glowLayerEnabled) {
            defaultPipeline.glowLayer.blurKernelSize = 13; // 16 by default
            defaultPipeline.glowLayer.intensity = 1; // 1 by default
        }
        /* grain */
        defaultPipeline.grainEnabled = false;
        if (defaultPipeline.grainEnabled) {
            defaultPipeline.grain.adaptScaleToCurrentViewport = false; // false by default
            defaultPipeline.grain.animated = true; // false by default
            defaultPipeline.grain.intensity = 10; // 30 by default
        }
        /* MSAA */
        defaultPipeline.samples = 16; // 1 by default
        defaultPipeline.sharpenEnabled = true;
        if (defaultPipeline.sharpenEnabled) {
            defaultPipeline.sharpen.adaptScaleToCurrentViewport = true; // false by default
            defaultPipeline.sharpen.edgeAmount = 1; // 0.3 by default
            defaultPipeline.sharpen.colorAmount = 1; // 1 by default
        }
    }  
 
 
	// Skybox
	var skybox = BABYLON.MeshBuilder.CreateBox("skyBox", {size:10000.0}, scene);
	var skyboxMaterial = new BABYLON.StandardMaterial("skyBox", scene);
	skyboxMaterial.backFaceCulling = false;
    //skyboxMaterial.reflectionTexture = new BABYLON.CubeTexture("Skybox/bkg1", scene);
    skyboxMaterial.reflectionTexture = new BABYLON.CubeTexture("Skybox/TropicalSunnyDay", scene);
	skyboxMaterial.reflectionTexture.coordinatesMode = BABYLON.Texture.SKYBOX_MODE;
	skyboxMaterial.diffuseColor = new BABYLON.Color3(0, 0, 0);
	skyboxMaterial.specularColor = new BABYLON.Color3(0, 0, 0);
	skybox.material = skyboxMaterial; 

    scene.fogEnabled = true;
    scene.fogMode = BABYLON.Scene.FOGMODE_EXP2;
	scene.fogDensity = 0.015; //0.001
    scene.fogColor = new BABYLON.Color3(0, 0, 0); //0.8, 0.9, 1.0
    scene.clearColor = scene.fogColor;
    scene.clearColor = new BABYLON.Color4(0, 0, 0, 0);

    
}





const ground = BABYLON.MeshBuilder.CreateBox("box", {height: 0.1, width: 25, depth: 75 });

    var materialGround = new BABYLON.StandardMaterial("Texture", scene);
    materialGround.diffuseTexture = new BABYLON.Texture("Textures/Wood_Floor_006_COLOR.jpg", scene);
    
    materialGround.diffuseTexture.uScale = 30;
    materialGround.diffuseTexture.vScale = 10;    
    
    ground.material = materialGround; 

ground.position.y = -1
ground.isVisible = false




// Textures Replacement

    var material1 = new BABYLON.StandardMaterial("Texture", scene);
    material1.diffuseTexture = new BABYLON.Texture("Textures/Marble_Gray_002_basecolor.jpg", scene);

    var material2 = new BABYLON.StandardMaterial("Texture", scene);
    material2.diffuseTexture = new BABYLON.Texture("Textures/Wall_Siding_002_COLOR.jpg", scene);
    
    material2.diffuseTexture.uScale = 10;
    material2.diffuseTexture.vScale = 10;

    var material2_2 = new BABYLON.StandardMaterial("Texture", scene);
    material2_2.diffuseTexture = new BABYLON.Texture("Textures/Wall_Siding_003_COLOR.jpg", scene);
    
    material2_2.diffuseTexture.uScale = 20;
    material2_2.diffuseTexture.vScale = 20;

    var material3 = new BABYLON.StandardMaterial("Texture", scene);
    material3.diffuseTexture = new BABYLON.Texture("Textures/Wall_Siding_003_COLOR.jpg", scene);
    
    material3.diffuseTexture.uScale = 2;
    material3.diffuseTexture.vScale = 2;

    var material4 = new BABYLON.StandardMaterial("Texture", scene);
    material4.diffuseTexture = new BABYLON.Texture("Textures/Coin_Stack_002_roughness.jpg", scene);
    
    material4.diffuseTexture.uScale = 2;
    material4.diffuseTexture.vScale = 2;


// Physics Setup

// Physics Array

function physicsArray(){

var UNITS = 3

// Array to 3D map
var UNITWIDTH = UNITS;                 // Width of a cubes in the maze
var UNITHEIGHT = UNITS;                // Height of the cubes in the maze

var mapSize;

let arrayMap = [[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,0,1,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,1,0,0,1,0,0,1,0,0,1,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0],
                [0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]];

  
      // Keep cubes within boundry walls
    var widthOffset = UNITWIDTH / 2;
    // Put the bottom of the cube at y = 0
    var heightOffset = UNITHEIGHT / 2.6;

    // See how wide the map is by seeing how long the first array is
    var totalCubesWide = arrayMap[0].length;

    // Place walls where 1`s are
    for (var i = 0; i < totalCubesWide; i++) {
        for (var j = 0; j < arrayMap[i].length; j++) {
            // If a 1 is found, add a cube at the corresponding position
//            if (map[i][j]) {
switch ( arrayMap[i][j] ) {
                
            case 1: //  Start

createcube1()

                break;  
 
            case 2: //  Start

createcube2()

                break;   
 
            case 3: //  Start

createcube3()

                break;   
                
               
        } 

//            }
        }
    }
    // Create the ground based on the map size the matrix/cube size produced
    mapSize = totalCubesWide * UNITWIDTH;


function createcube1(){
                
const cube = BABYLON.MeshBuilder.CreateBox("box", { height: UNITS, width: UNITS, depth: 5 });
cube.position.z = (i - totalCubesWide / 2) * UNITWIDTH + widthOffset;
cube.position.y = -10 //heightOffset;
cube.position.x = (j - totalCubesWide / 2) * UNITWIDTH + widthOffset;
cube.physicsImpostor = new BABYLON.PhysicsImpostor(cube, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);
cube.isVisible = false

}

function createcube2(){
                
const cube = BABYLON.MeshBuilder.CreateBox("box", { height: UNITS, width: UNITS, depth: 2 });
cube.position.z = (i - totalCubesWide / 2) * UNITWIDTH + widthOffset;
cube.position.y = heightOffset;
cube.position.x = (j - totalCubesWide / 2) * UNITWIDTH + widthOffset;
cube.physicsImpostor = new BABYLON.PhysicsImpostor(cube, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);
cube.isVisible = false

}

function createcube3(){
                
const cube = BABYLON.MeshBuilder.CreateBox("box", { height: UNITS, width: UNITS, depth: 2 });
cube.position.z = (i - totalCubesWide / 2) * UNITWIDTH  - 1;
cube.position.y = heightOffset;
cube.position.x = (j - totalCubesWide / 2) * UNITWIDTH + widthOffset;
cube.physicsImpostor = new BABYLON.PhysicsImpostor(cube, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);
cube.isVisible = false

} 
 
    
}
physicsArray()




scene.useRightHandedSystem = true

engine.setHardwareScalingLevel(1/window.devicePixelRatio)
engine.setHardwareScalingLevel(.5) //.5 //1



// Glowing effect on diffuse materials
var gl = new BABYLON.GlowLayer("glow", scene, { mainTextureSamples: 1 });  
            gl.intensity = 0.1;
            const envTex = BABYLON.CubeTexture.CreateFromPrefilteredData("environment.env", scene)
            // scene.environmentTexture = BABYLON.CubeTexture.CreateFromPrefilteredData("environment.env", scene);
            scene.environmentIntensity = 0.1

/*
        var helper = scene.createDefaultEnvironment({
            enableGroundMirror: false,
            groundShadowLevel: 0.6,
            createSkybox: false,
        }); 
        helper.ground.dispose();
*/

// VIDEO screen

var InnerVideoScreen = document.getElementById('InnerVideoScreen');

var videoScreen = document.getElementById('videoScreen');
videoScreen.style.display =  "none";






<?php 
	while($resVideo = mysqli_fetch_array($video1)) { 

echo "\r\n";
echo "function Openlesson".$resVideo['id']."(){";
echo "\r\n";
echo "InnerVideoScreen.innerHTML = 	` <video controls> <source src='Uploads/Video/".$resVideo['video']."' type='video/mp4'> Your browser does not support the video tag. </video>  `;";
echo "\r\n";
echo "videoScreen.style.display =  'block';";
echo "\r\n";
echo "}";
echo "\r\n";
	}
?>	

<?php 
	while($resVideo2 = mysqli_fetch_array($video2)) { 

echo "\r\n";
echo "function Openlesson".$resVideo2['id']."(){";
echo "\r\n";
echo "InnerVideoScreen.innerHTML = 	`  <video controls> <source src='Uploads/Video/".$resVideo2['video']."' type='video/mp4'> Your browser does not support the video tag. </video> `;";
echo "\r\n";
echo "videoScreen.style.display =  'block';";
echo "\r\n";
echo "}";
echo "\r\n";
	}
?>	


<?php 
	while($resVideo3 = mysqli_fetch_array($video3)) { 

echo "\r\n";
echo "function Openlesson".$resVideo3['id']."(){";
echo "\r\n";
echo "InnerVideoScreen.innerHTML = 	`  <video controls> <source src='Uploads/Video/".$resVideo3['video']."' type='video/mp4'> Your browser does not support the video tag. </video> `;";
echo "\r\n";
echo "videoScreen.style.display =  'block';";
echo "\r\n";
echo "}";
echo "\r\n";
	}
?>	


<?php 
	while($resVideo4 = mysqli_fetch_array($video4)) { 

echo "\r\n";
echo "function Openlesson".$resVideo4['id']."(){";
echo "\r\n";
echo "InnerVideoScreen.innerHTML = 	`  <video controls> <source src='Uploads/Video/".$resVideo4['video']."' type='video/mp4'> Your browser does not support the video tag. </video> `;";
echo "\r\n";
echo "videoScreen.style.display =  'block';";
echo "\r\n";
echo "}";
echo "\r\n";
	}
?>



var hl = new BABYLON.HighlightLayer("hl1", scene); 
// Load the models
// signs
 BABYLON.SceneLoader.ImportMesh("", "", "Models/LibrarySigns1.glb", scene, function (newMeshes, skeletons) {
     
var DBscale = 2
     
        var model = newMeshes[0];
var PI = Math.PI / -1;
        model.rotation = new BABYLON.Vector3(0, PI, 0);
        model.position = new BABYLON.Vector3(0, -10, 0);
        model.scaling  = new BABYLON.Vector3(DBscale, DBscale, DBscale);

// end model
    });


 BABYLON.SceneLoader.ImportMesh("", "", "Models/LibraryBasic1.glb", scene, function (newMeshes, skeletons) {
     
var DBscale = 2
     
        var model = newMeshes[0];
var PI = Math.PI / -1;
        model.rotation = new BABYLON.Vector3(0, PI, 0);
        model.position = new BABYLON.Vector3(0, -10, 0);
        model.scaling = new BABYLON.Vector3(DBscale, DBscale, DBscale);


//build in ground
var finalGround = scene.getMeshByName("SM_LevelMesh_Floor1");
finalGround.receiveShadows = true;
   
   


//physics
//SM_LevelMesh_Wall3

var table1 = scene.getMeshByName("SM_TableWooden_100x200_LOD0_3");
table1.setParent(null);
table1.physicsImpostor = new BABYLON.PhysicsImpostor(table1, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);  

var table2 = scene.getMeshByName("SM_TableWooden_100x200_LOD0_1");
table2.setParent(null);
table2.physicsImpostor = new BABYLON.PhysicsImpostor(table2, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);  

var table3 = scene.getMeshByName("SM_TableWooden_100x200_LOD0_4");
table3.setParent(null);
table3.physicsImpostor = new BABYLON.PhysicsImpostor(table3, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);  

var table4 = scene.getMeshByName("SM_TableWooden_100x200_LOD0_2");
table4.setParent(null);
table4.physicsImpostor = new BABYLON.PhysicsImpostor(table4, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);  

var table5 = scene.getMeshByName("SM_TableWooden_100x200_LOD0");
table5.setParent(null);
table5.physicsImpostor = new BABYLON.PhysicsImpostor(table5, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);  

var table6 = scene.getMeshByName("SM_TableWooden_100x200_LOD0_5");
table6.setParent(null);
table6.physicsImpostor = new BABYLON.PhysicsImpostor(table6, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);  

// book screens
var bookShelf1Menu = document.getElementById("bookShelf1Menu"); 
bookShelf1Menu.style.display = "none";    

var bookShelf2Menu = document.getElementById("bookShelf2Menu"); 
bookShelf2Menu.style.display = "none"; 

var bookShelf3Menu = document.getElementById("bookShelf3Menu"); 
bookShelf3Menu.style.display = "none"; 

var bookShelf4Menu = document.getElementById("bookShelf4Menu"); 
bookShelf4Menu.style.display = "none"; 

var bookShelf5Menu = document.getElementById("bookShelf5Menu"); 
bookShelf5Menu.style.display = "none"; 

var bookShelf6Menu = document.getElementById("bookShelf6Menu"); 
bookShelf6Menu.style.display = "none"; 

var bookShelf7Menu = document.getElementById("bookShelf7Menu"); 
bookShelf7Menu.style.display = "none"; 

var bookShelf8Menu = document.getElementById("bookShelf8Menu"); 
bookShelf8Menu.style.display = "none"; 

var bookShelf9Menu = document.getElementById("bookShelf9Menu"); 
bookShelf9Menu.style.display = "none"; 

var bookShelf10Menu = document.getElementById("bookShelf10Menu"); 
bookShelf10Menu.style.display = "none"; 

var bookShelf11Menu = document.getElementById("bookShelf11Menu"); 
bookShelf11Menu.style.display = "none"; 

var bookShelf12Menu = document.getElementById("bookShelf12Menu"); 
bookShelf12Menu.style.display = "none"; 

var bookShelf13Menu = document.getElementById("bookShelf13Menu"); 
bookShelf13Menu.style.display = "none"; 

var bookShelf14Menu = document.getElementById("bookShelf14Menu"); 
bookShelf14Menu.style.display = "none"; 

var bookShelf15Menu = document.getElementById("bookShelf15Menu"); 
bookShelf15Menu.style.display = "none"; 

var bookShelf16Menu = document.getElementById("bookShelf16Menu"); 
bookShelf16Menu.style.display = "none"; 

var bookShelf17Menu = document.getElementById("bookShelf17Menu"); 
bookShelf17Menu.style.display = "none"; 

var bookShelf18Menu = document.getElementById("bookShelf18Menu"); 
bookShelf18Menu.style.display = "none"; 





// keypress close action
   document.addEventListener('keydown', function(event)
    {
      var code = event.keyCode || event.which;
      if (code === 27) { 
console.log("escape")
bookShelf1Menu.style.display = "none"; 
bookShelf2Menu.style.display = "none"; 
bookShelf3Menu.style.display = "none"; 
bookShelf4Menu.style.display = "none"; 
bookShelf5Menu.style.display = "none"; 
bookShelf6Menu.style.display = "none"; 
bookShelf7Menu.style.display = "none"; 
bookShelf8Menu.style.display = "none"; 
bookShelf9Menu.style.display = "none"; 
bookShelf10Menu.style.display = "none"; 
bookShelf11Menu.style.display = "none"; 
bookShelf12Menu.style.display = "none"; 
bookShelf13Menu.style.display = "none"; 
bookShelf14Menu.style.display = "none"; 
bookShelf15Menu.style.display = "none"; 
bookShelf16Menu.style.display = "none"; 
bookShelf17Menu.style.display = "none"; 
bookShelf18Menu.style.display = "none"; 

      }
    else { 
  
    }  
        
    }); 




// click functions - 18 bookshelfs
var material_stairs = new BABYLON.StandardMaterial('stairsmat', scene);
	material_stairs.diffuseColor = new BABYLON.Color3(0.71, 0.7, 0.7);
	material_stairs.alpha = 0.0001;

// row 1
	
const bookshelfCube1 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube1.position = new BABYLON.Vector3(-22, -8, 20);
bookshelfCube1.material = material_stairs
bookshelfCube1.physicsImpostor = new BABYLON.PhysicsImpostor(bookshelfCube1, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene); 

	bookshelfCube1.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube1.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf1Menu.style.display = "block";
	}));



const bookshelfCube2 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube2.position = new BABYLON.Vector3(-13.3, -8, 20);
bookshelfCube2.material = material_stairs

	bookshelfCube2.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube2.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf2Menu.style.display = "block";
	}));



const bookshelfCube3 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube3.position = new BABYLON.Vector3(-4.5, -8, 20);
bookshelfCube3.material = material_stairs

	bookshelfCube3.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube3.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf3Menu.style.display = "block";
	}));


const bookshelfCube4 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube4.position = new BABYLON.Vector3(4.2, -8, 20);
bookshelfCube4.material = material_stairs

	bookshelfCube4.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube4.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf4Menu.style.display = "block";
	}));


const bookshelfCube5 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube5.position = new BABYLON.Vector3(13.5, -8, 20);
bookshelfCube5.material = material_stairs

	bookshelfCube5.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube5.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf5Menu.style.display = "block";
	}));


const bookshelfCube6 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube6.position = new BABYLON.Vector3(22, -8, 20);
bookshelfCube6.material = material_stairs
bookshelfCube6.physicsImpostor = new BABYLON.PhysicsImpostor(bookshelfCube6, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene); 

	bookshelfCube6.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube6.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf6Menu.style.display = "block";
	}));

// row 2

const bookshelfCube7 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube7.position = new BABYLON.Vector3(-22, -8, 0);
bookshelfCube7.material = material_stairs

	bookshelfCube7.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube7.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf7Menu.style.display = "block";
	}));



const bookshelfCube8 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube8.position = new BABYLON.Vector3(-13.3, -8, 0);
bookshelfCube8.material = material_stairs

	bookshelfCube8.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube8.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf8Menu.style.display = "block";
	}));



const bookshelfCube9 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube9.position = new BABYLON.Vector3(-4.5, -8, 0);
bookshelfCube9.material = material_stairs

	bookshelfCube9.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube9.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf9Menu.style.display = "block";
	}));


const bookshelfCube10 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube10.position = new BABYLON.Vector3(4.2, -8, 0);
bookshelfCube10.material = material_stairs

	bookshelfCube10.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube10.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf10Menu.style.display = "block";
	}));


const bookshelfCube11 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube11.position = new BABYLON.Vector3(13.5, -8, 0);
bookshelfCube11.material = material_stairs

	bookshelfCube11.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube11.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf11Menu.style.display = "block";
	}));


const bookshelfCube12 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube12.position = new BABYLON.Vector3(22, -8, 0);
bookshelfCube12.material = material_stairs

	bookshelfCube12.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube12.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf12Menu.style.display = "block";
	}));


// row 3

const bookshelfCube13 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube13.position = new BABYLON.Vector3(-22, -8, -20);
bookshelfCube13.material = material_stairs

	bookshelfCube13.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube13.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf13Menu.style.display = "block";
	}));



const bookshelfCube14 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube14.position = new BABYLON.Vector3(-13.3, -8, -20);
bookshelfCube14.material = material_stairs

	bookshelfCube14.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube14.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf14Menu.style.display = "block";
	}));



const bookshelfCube15 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube15.position = new BABYLON.Vector3(-4.5, -8, -20);
bookshelfCube15.material = material_stairs

	bookshelfCube15.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube15.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf15Menu.style.display = "block";
	}));


const bookshelfCube16 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube16.position = new BABYLON.Vector3(4.2, -8, -20);
bookshelfCube16.material = material_stairs

	bookshelfCube16.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube16.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf16Menu.style.display = "block";
	}));


const bookshelfCube17 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube17.position = new BABYLON.Vector3(13.5, -8, -20);
bookshelfCube17.material = material_stairs

	bookshelfCube17.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube17.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf17Menu.style.display = "block";
	}));


const bookshelfCube18 = BABYLON.MeshBuilder.CreateBox("box", {height: 8, width: 3, depth: 8 });	
bookshelfCube18.position = new BABYLON.Vector3(22, -8, -20);
bookshelfCube18.material = material_stairs

	bookshelfCube18.actionManager = new BABYLON.ActionManager(scene);
	bookshelfCube18.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf18Menu.style.display = "block";
	}));



//row 1
//SM_Bookshelf_02_LOD0_15
//SM_Bookshelf_02_LOD0_12
//SM_Bookshelf_02_LOD0_13
//SM_Bookshelf_02_LOD0_16
//SM_Bookshelf_02_LOD0_14
//SM_Bookshelf_02_LOD0_17

//row 2
//SM_Bookshelf_02_LOD0_9
//SM_Bookshelf_02_LOD0_6
//SM_Bookshelf_02_LOD0_7
//SM_Bookshelf_02_LOD0_10
//SM_Bookshelf_02_LOD0_8
//SM_Bookshelf_02_LOD0_11

//row 3
//SM_Bookshelf_02_LOD0_5
//SM_Bookshelf_02_LOD0_2
//SM_Bookshelf_02_LOD0_4
//SM_Bookshelf_02_LOD0_1
//SM_Bookshelf_02_LOD0
//SM_Bookshelf_02_LOD0_3
/*
var bookShelf1 = scene.getMeshByName("SM_Bookshelf_02_LOD0_15");
bookShelf1.setParent(null);
bookShelf1.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf1, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene); 

	bookShelf1.actionManager = new BABYLON.ActionManager(scene);
	bookShelf1.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf1Menu.style.display = "block";
	}));


var bookShelf2= scene.getMeshByName("SM_Bookshelf_02_LOD0_12");
bookShelf2.setParent(null);
bookShelf2.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf2, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf2.actionManager = new BABYLON.ActionManager(scene);
	bookShelf2.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf2Menu.style.display = "block";
	}));


var bookShelf3 = scene.getMeshByName("SM_Bookshelf_02_LOD0_13");
bookShelf3.setParent(null);
bookShelf3.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf3, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf3.actionManager = new BABYLON.ActionManager(scene);
	bookShelf3.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf3Menu.style.display = "block";
	}));


var bookShelf4 = scene.getMeshByName("SM_Bookshelf_02_LOD0_16");
bookShelf4.setParent(null);
bookShelf4.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf4, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf4.actionManager = new BABYLON.ActionManager(scene);
	bookShelf4.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf4Menu.style.display = "block";
	}));


var bookShelf5 = scene.getMeshByName("SM_Bookshelf_02_LOD0_14");
bookShelf5.setParent(null);
bookShelf5.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf5, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf5.actionManager = new BABYLON.ActionManager(scene);
	bookShelf5.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf5Menu.style.display = "block";
	}));


var bookShelf6 = scene.getMeshByName("SM_Bookshelf_02_LOD0_17");
bookShelf6.setParent(null);
bookShelf6.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf6, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf6.actionManager = new BABYLON.ActionManager(scene);
	bookShelf6.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf6Menu.style.display = "block";
	}));


// second row

var bookShelf7 = scene.getMeshByName("SM_Bookshelf_02_LOD0_9");
bookShelf7.setParent(null);
bookShelf7.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf7, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf7.actionManager = new BABYLON.ActionManager(scene);
	bookShelf7.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf7Menu.style.display = "block";
	}));



var bookShelf8 = scene.getMeshByName("SM_Bookshelf_02_LOD0_6");
bookShelf8.setParent(null);
bookShelf8.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf8, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf8.actionManager = new BABYLON.ActionManager(scene);
	bookShelf8.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf8Menu.style.display = "block";
	}));


var bookShelf9 = scene.getMeshByName("SM_Bookshelf_02_LOD0_7");
bookShelf9.setParent(null);
bookShelf9.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf9, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf9.actionManager = new BABYLON.ActionManager(scene);
	bookShelf9.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf9Menu.style.display = "block";
	}));


var bookShelf10 = scene.getMeshByName("SM_Bookshelf_02_LOD0_10");
bookShelf10.setParent(null);
bookShelf10.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf10, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf10.actionManager = new BABYLON.ActionManager(scene);
	bookShelf10.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf10Menu.style.display = "block";
	}));


var bookShelf11 = scene.getMeshByName("SM_Bookshelf_02_LOD0_8");
bookShelf11.setParent(null);
bookShelf11.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf11, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);


	bookShelf11.actionManager = new BABYLON.ActionManager(scene);
	bookShelf11.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf11Menu.style.display = "block";
	}));


var bookShelf12 = scene.getMeshByName("SM_Bookshelf_02_LOD0_11");
bookShelf12.setParent(null);
bookShelf12.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf12, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf12.actionManager = new BABYLON.ActionManager(scene);
	bookShelf12.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf12Menu.style.display = "block";
	}));


// third row

var bookShelf13 = scene.getMeshByName("SM_Bookshelf_02_LOD0_5");
bookShelf13.setParent(null);
bookShelf13.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf13, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);


	bookShelf13.actionManager = new BABYLON.ActionManager(scene);
	bookShelf13.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf13Menu.style.display = "block";
	}));


var bookShelf14 = scene.getMeshByName("SM_Bookshelf_02_LOD0_2");
bookShelf14.setParent(null);
bookShelf14.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf14, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);


	bookShelf14.actionManager = new BABYLON.ActionManager(scene);
	bookShelf14.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf14Menu.style.display = "block";
	}));


var bookShelf15 = scene.getMeshByName("SM_Bookshelf_02_LOD0_4");
bookShelf15.setParent(null);
bookShelf15.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf15, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf15.actionManager = new BABYLON.ActionManager(scene);
	bookShelf15.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf15Menu.style.display = "block";
	}));


var bookShelf16 = scene.getMeshByName("SM_Bookshelf_02_LOD0_1");
bookShelf16.setParent(null);
bookShelf16.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf16, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);

	bookShelf16.actionManager = new BABYLON.ActionManager(scene);
	bookShelf16.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf16Menu.style.display = "block";
	}));



var bookShelf17 = scene.getMeshByName("SM_Bookshelf_02_LOD0");
bookShelf17.setParent(null);
bookShelf17.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf17, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);


	bookShelf17.actionManager = new BABYLON.ActionManager(scene);
	bookShelf17.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf17Menu.style.display = "block";
	}));



var bookShelf18 = scene.getMeshByName("SM_Bookshelf_02_LOD0_3");
bookShelf18.setParent(null);
bookShelf18.physicsImpostor = new BABYLON.PhysicsImpostor(bookShelf18, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);


	bookShelf18.actionManager = new BABYLON.ActionManager(scene);
	bookShelf18.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		bookShelf18Menu.style.display = "block";
	}));
*/
//var text1 = scene.getMeshByName("Text.031");
//text1.setParent(null);
//text1.renderOutline = false;


 if(window.innerWidth <= 991){
  // load mobile script
 
 // model loop
for (let i = 0; i < newMeshes.length; i++) {

//shadowGenerator.getShadowMap().renderList.push(newMeshes[i]);

   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.5;

} 
  
  
 }else{ 
  // load desktop script
  
// model loop
for (let i = 0; i < newMeshes.length; i++) {

shadowGenerator.getShadowMap().renderList.push(newMeshes[i]);

   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.5;

}   
  

} 



// end model
    });


const modelBox = BABYLON.MeshBuilder.CreateBox("box", { height: 1, width: 1, depth: 1 });  
modelBox.position = new BABYLON.Vector3(DBposX1, DBposY1, DBposZ1);
modelBox.rotation = new BABYLON.Vector3(0, DBrotY1, 0);
modelBox.isVisible = false    
    
 BABYLON.SceneLoader.ImportMesh("", "", DBmodel1, scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
var PI = Math.PI / -2;
        model.rotation = new BABYLON.Vector3(0, 0, 0);
        model.position = new BABYLON.Vector3(0, 0, 0);
        model.scaling = new BABYLON.Vector3(DBscale1, DBscale1, DBscale1);
        model.parent = modelBox
        
for (let i = 0; i < newMeshes.length; i++) {
 
   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.05; 
  
	newMeshes[i].actionManager = new BABYLON.ActionManager(scene);
    newMeshes[i].actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		console.log('clicked')
		
<?php 
	while($resVideoF = mysqli_fetch_array($video1F)) { 

echo "\r\n";
echo "Openlesson".$resVideoF['id']."()";
echo "\r\n";
	}
?>		
		
	})); 
}        
        

    });    

const modelBox2 = BABYLON.MeshBuilder.CreateBox("box", { height: 1, width: 1, depth: 1 });  
modelBox2.position = new BABYLON.Vector3(DBposX2, DBposY2, DBposZ2);
modelBox2.rotation = new BABYLON.Vector3(0, DBrotY2, 0);
modelBox2.isVisible = false  

 BABYLON.SceneLoader.ImportMesh("", "", DBmodel2, scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
var PI = Math.PI / 2;
        model.rotation = new BABYLON.Vector3(0, 0, 0);
        model.position = new BABYLON.Vector3(0, 0, 0);
        model.scaling = new BABYLON.Vector3(DBscale2, DBscale2, DBscale2);
        model.parent = modelBox2

for (let i = 0; i < newMeshes.length; i++) {
  
   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.05;  
  
	newMeshes[i].actionManager = new BABYLON.ActionManager(scene);
    newMeshes[i].actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		console.log('clicked')
<?php 
	while($resVideo2F = mysqli_fetch_array($video2F)) { 

echo "\r\n";
echo "Openlesson".$resVideo2F['id']."()";
echo "\r\n";
	}
?>		
		
	})); 
}

    });       
   
 
const modelBox3 = BABYLON.MeshBuilder.CreateBox("box", { height: 1, width: 1, depth: 1 });  
modelBox3.position = new BABYLON.Vector3(DBposX3, DBposY3, DBposZ3);
modelBox3.rotation = new BABYLON.Vector3(0, DBrotY3, 0);

modelBox3.isVisible = false  

 BABYLON.SceneLoader.ImportMesh("", "", DBmodel3, scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
var PI = Math.PI / 2;
        model.rotation = new BABYLON.Vector3(0, 0, 0);
        model.position = new BABYLON.Vector3(0, 0, 0);
        model.scaling = new BABYLON.Vector3(DBscale3, DBscale3, DBscale3);
        model.parent = modelBox3

for (let i = 0; i < newMeshes.length; i++) {
  
   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.1;  
  
	newMeshes[i].actionManager = new BABYLON.ActionManager(scene);
    newMeshes[i].actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		console.log('clicked')
<?php 
	while($resVideo3F = mysqli_fetch_array($video3F)) { 

echo "\r\n";
echo "Openlesson".$resVideo3F['id']."()";
echo "\r\n";
	}
?>		
		
	})); 
}

    });     
 
 
   
const modelBox4 = BABYLON.MeshBuilder.CreateBox("box", { height: 1, width: 1, depth: 1 });  
modelBox4.position = new BABYLON.Vector3(DBposX4, DBposY4, DBposZ4);
modelBox4.rotation = new BABYLON.Vector3(0, DBrotY4, 0);

modelBox4.isVisible = false  

 BABYLON.SceneLoader.ImportMesh("", "", DBmodel4, scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
var PI = Math.PI / 2;
        model.rotation = new BABYLON.Vector3(0, 0, 0);
        model.position = new BABYLON.Vector3(0, 0, 0);
        model.scaling = new BABYLON.Vector3(DBscale4, DBscale4, DBscale4);
        model.parent = modelBox4

for (let i = 0; i < newMeshes.length; i++) {
  
   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.1;   
  
	newMeshes[i].actionManager = new BABYLON.ActionManager(scene);
    newMeshes[i].actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		console.log('clicked')
<?php 
	while($resVideo4F = mysqli_fetch_array($video4F)) { 

echo "\r\n";
echo "Openlesson".$resVideo4F['id']."()";
echo "\r\n";
	}
?>
		
	})); 
}

    });      
    
    
    
const modelBox5 = BABYLON.MeshBuilder.CreateBox("box", { height: 1, width: 1, depth: 1 });  
modelBox5.position = new BABYLON.Vector3(DBposX5, DBposY5, DBposZ5);
modelBox5.rotation = new BABYLON.Vector3(0, DBrotY5, 0);

modelBox5.isVisible = false  

 BABYLON.SceneLoader.ImportMesh("", "", DBmodel5, scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
var PI = Math.PI / 2;
        model.rotation = new BABYLON.Vector3(0, 0, 0);
        model.position = new BABYLON.Vector3(0, 0, 0);
        model.scaling = new BABYLON.Vector3(DBscale5, DBscale5, DBscale5);
        model.parent = modelBox5

for (let i = 0; i < newMeshes.length; i++) {
  
   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.1;   
  
	newMeshes[i].actionManager = new BABYLON.ActionManager(scene);
    newMeshes[i].actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		console.log('clicked')
<?php 
	while($resVideo4F = mysqli_fetch_array($video4F)) { 

echo "\r\n";
echo "Openlesson".$resVideo4F['id']."()";
echo "\r\n";
	}
?>
		
	})); 
}

    });       
    
  
  
const modelBox6 = BABYLON.MeshBuilder.CreateBox("box", { height: 1, width: 1, depth: 1 });  
modelBox6.position = new BABYLON.Vector3(DBposX6, DBposY6, DBposZ6);
modelBox6.rotation = new BABYLON.Vector3(0, DBrotY6, 0);

modelBox6.isVisible = false  

 BABYLON.SceneLoader.ImportMesh("", "", DBmodel6, scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
var PI = Math.PI / 2;
        model.rotation = new BABYLON.Vector3(0, 0, 0);
        model.position = new BABYLON.Vector3(0, 0, 0);
        model.scaling = new BABYLON.Vector3(DBscale6, DBscale6, DBscale6);
        model.parent = modelBox6

for (let i = 0; i < newMeshes.length; i++) {
  
   newMeshes[i].renderOutline = true;
   newMeshes[i].outlineColor = new BABYLON.Color3(0, 0, 0);
   newMeshes[i].outlineWidth = 0.1;   
  
	newMeshes[i].actionManager = new BABYLON.ActionManager(scene);
    newMeshes[i].actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		console.log('clicked')
<?php 
	while($resVideo4F = mysqli_fetch_array($video4F)) { 

echo "\r\n";
echo "Openlesson".$resVideo4F['id']."()";
echo "\r\n";
	}
?>
		
	})); 
}

    });   
    
    
    
// Update from demo --------------------------------------------------------------------------------------------------
/*
      	s.onload = function (params) { 
        	
        		// Initialize BABYLONX.ShaderBuilder with BABYLON Methods 
        		BABYLONX.ShaderBuilder.InitializeEngine();
        		
        		window.eval('var mesh = {};'); // make global variable 
        
                var mat = function(){
                    return new BABYLONX.ShaderBuilder()
                    .Solid()
                    .InLine('result.xyz = vec3('+BABYLONX.Normals.Flat+')*0.5+0.5;')
                    .BuildMaterial(scene);
        
                }
                
                
       var pps1 = new BABYLONX.ShaderBuilder() 
                       	.InLine('float fl = 0.00071;')
        				.Map({ index: 'current' ,
                        uv:'vec2(vuv+fl*vec2(0.,0.))' })
                        .InLine('vec3 res = result.xyz;float v1 = length(result.xyz/1.5)  ;')
                        .Map({ index: 'current' ,
                        uv:'vec2(vuv+fl*vec2(0.,1.))' })
                        .InLine(' float v2  = v1- length(result.xyz/1.5);')
                         .Map({ index: 'current' ,
                        uv:'vec2(vuv+fl*vec2(1.,0.))' })
                        .InLine(' float v3  = v1- length(result.xyz/1.5);')
                         .Map({ index: 'current' ,
                        uv:'vec2(vuv+fl*vec2(0.,-1.))' })
                        .InLine(' float v4  = v1- length(result.xyz/1.5);')
                         .Map({ index: 'current' ,
                        uv:'vec2(vuv+fl*vec2(-1.,0.))' })
                        .InLine(' float v5  = v1- length(result.xyz/1.5);')
                        
                        
                       .InLine(`
                        float fl1 = (pow(max(v3,max(v3,max(v4,v5))),4.)*1.);
                        result.xyz =   (fl1 <0.00001 ? 1.:0. )*vec3(1.);
                       `)
                     

                       
                        .BuildPostProcess(camera, scene, 1., {
        				 onApply: function (ef) {
        					 
        				}
        				});



        		 
        		scene.registerBeforeRender(function () {
        			time++; 
        			
        			// initialize Shader requirment per frame
        			new BABYLONX
        			.ShaderMaterialHelper()
        			.SetUniforms(
        				scene.meshes, 
        				camera.position,
        				camera.target,
        				{ x: 0, y: 0 },
        				{ x: 100, y: 100 },
        				time
        			);
        		});
        	
        	} // s.onload                 
                
*/

// player

var hero = BABYLON.Mesh.CreateBox('hero', 3, scene, false, BABYLON.Mesh.FRONTSIDE);

hero.isVisible = false
hero.physicsImpostor = new BABYLON.PhysicsImpostor(hero, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 50, friction: 0 }, scene);		
hero.physicsImpostor.physicsBody.fixedRotation = true;
hero.physicsImpostor.physicsBody.updateMassProperties();
hero.physicsImpostor.physicsBody.angularDamping = 0 // 1
hero.physicsImpostor.physicsBody.linearDamping = 0 // 0.5 
        //var boxAggregate = new BABYLON.PhysicsAggregate(hero, BABYLON.PhysicsShapeType.SPHERE, { mass: 100, Restitution: 0 }, scene);
        //boxAggregate.body.setMotionType(BABYLON.PhysicsMotionType.DYNAMIC);


hero.position.y = -8
hero.position.x = -26
hero.position.z = 10
camera.target = new BABYLON.Vector3(200, 0, 0);


<?php  //include("LevelComponents/controls.php"); ?>

var movementControls = document.getElementById('movementControls');
movementControls.style.display = 'none';


// if viewportWidth width <= 991
if(window.innerWidth <= 1200){
  // load tablet script

movementControls.style.display = '';

     let adt = BABYLON.GUI.AdvancedDynamicTexture.CreateFullscreenUI("UI");
            let xAddPos = 0;
            let yAddPos = 0;
            let xAddRot = 0;
            let yAddRot = 0;
            let sideJoystickOffset = 50; // 150
            let bottomJoystickOffset = -50; // -50
            let translateTransform;    
        
        

        
           let rightThumbContainer = makeThumbArea("rightThumb", 2, "white", null);
               rightThumbContainer.height = "100px"; // 200px
               rightThumbContainer.width = "100px";
               rightThumbContainer.isPointerBlocker = true;
               rightThumbContainer.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_RIGHT;
               rightThumbContainer.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_BOTTOM;
               rightThumbContainer.alpha = 1;
               rightThumbContainer.left = -sideJoystickOffset;
               rightThumbContainer.top = bottomJoystickOffset;
        
           let rightInnerThumbContainer = makeThumbArea("rightInnterThumb", 4, "white", null);
               rightInnerThumbContainer.height = "0px"; // 80px
               rightInnerThumbContainer.width = "0px";
               rightInnerThumbContainer.isPointerBlocker = true;
               rightInnerThumbContainer.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_CENTER;
               rightInnerThumbContainer.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_CENTER;
        
           let rightPuck = makeThumbArea("rightPuck",0, "white", "white");
                   rightPuck.height = "40px"; // 60 px
                   rightPuck.width = "40px";
                   rightPuck.isPointerBlocker = true;
                   rightPuck.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_CENTER;
                   rightPuck.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_CENTER;
        
        
               rightThumbContainer.onPointerDownObservable.add(function(coordinates) {
                   rightPuck.isVisible = true;
                   rightPuck.floatLeft = adt._canvas.width - coordinates.x-(rightThumbContainer._currentMeasure.width*.5)-sideJoystickOffset;
                   rightPuck.left = rightPuck.floatLeft*-1;
                   rightPuck.floatTop = adt._canvas.height - coordinates.y-(rightThumbContainer._currentMeasure.height*.5)+bottomJoystickOffset;
                   rightPuck.top = rightPuck.floatTop*-1;
                   rightPuck.isDown = true;
                   rightThumbContainer.alpha = 0.9;
               });
        
               rightThumbContainer.onPointerUpObservable.add(function(coordinates) {
                   xAddRot = 0;
                   yAddRot = 0;
                   rightPuck.isDown = false;
                   rightPuck.isVisible = false;
                   rightThumbContainer.alpha = 0.4;
               });
        
        
               rightThumbContainer.onPointerMoveObservable.add(function(coordinates) {
                   if (rightPuck.isDown) {
                       xAddRot = adt._canvas.width - coordinates.x-(rightThumbContainer._currentMeasure.width*.5)-sideJoystickOffset;
                       yAddRot = adt._canvas.height - coordinates.y-(rightThumbContainer._currentMeasure.height*.5)+bottomJoystickOffset;
                       rightPuck.floatLeft = xAddRot*-1;
                       rightPuck.floatTop = yAddRot*-1;
                       rightPuck.left = rightPuck.floatLeft;
                       rightPuck.top = rightPuck.floatTop;
                       }
               });
        
            //leftThumbContainer.left = 50;
            adt.addControl(rightThumbContainer);
            rightThumbContainer.addControl(rightInnerThumbContainer);
            rightThumbContainer.addControl(rightPuck);
            rightPuck.isVisible = false;
        
          //rightThumbContainer.right = "-100px";
          //leftThumbContainer.left = "0px";
        
              camera.attachControl(canvas, true);
        
            scene.registerBeforeRender(function(){
                      translateTransform = BABYLON.Vector3.TransformCoordinates(new BABYLON.Vector3(xAddPos/-3000, 0, yAddPos/3000), BABYLON.Matrix.RotationY(camera.rotation.y)); // xAddPos/3000, 0, yAddPos/3000
                      camera.cameraDirection.addInPlace(translateTransform);
                      camera.cameraRotation.y += xAddRot/-20000*-1; // 15000*-1;
                      camera.cameraRotation.x += yAddRot/20000*-1; //15000*-1;
                }); 
        
        function makeThumbArea(name, thickness, color, background, curves){
           let rect = new BABYLON.GUI.Ellipse();
               rect.name = name;
               rect.thickness = thickness;
               rect.color = color;
               rect.background = background;
              
               rect.paddingLeft = "0px";
               rect.paddingRight = "0px";
               rect.paddingTop = "0px";
               rect.paddingBottom = "0px";
        
           return rect;
        } 


}


if(window.innerWidth <= 991){
  // load mobile script

movementControls.style.display = '';

     let adt = BABYLON.GUI.AdvancedDynamicTexture.CreateFullscreenUI("UI");
            let xAddPos = 0;
            let yAddPos = 0;
            let xAddRot = 0;
            let yAddRot = 0;
            let sideJoystickOffset = 50; // 150
            let bottomJoystickOffset = -50; // -50
            let translateTransform;    
        
        

        
           let rightThumbContainer = makeThumbArea("rightThumb", 2, "white", null);
               rightThumbContainer.height = "100px"; // 200px
               rightThumbContainer.width = "100px";
               rightThumbContainer.isPointerBlocker = true;
               rightThumbContainer.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_RIGHT;
               rightThumbContainer.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_BOTTOM;
               rightThumbContainer.alpha = 1;
               rightThumbContainer.left = -sideJoystickOffset;
               rightThumbContainer.top = bottomJoystickOffset;
        
           let rightInnerThumbContainer = makeThumbArea("rightInnterThumb", 4, "white", null);
               rightInnerThumbContainer.height = "0px"; // 80px
               rightInnerThumbContainer.width = "0px";
               rightInnerThumbContainer.isPointerBlocker = true;
               rightInnerThumbContainer.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_CENTER;
               rightInnerThumbContainer.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_CENTER;
        
        
           let rightPuck = makeThumbArea("rightPuck",0, "white", "white");
                   rightPuck.height = "40px"; // 60 px
                   rightPuck.width = "40px";
                   rightPuck.isPointerBlocker = true;
                   rightPuck.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_CENTER;
                   rightPuck.verticalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_CENTER;
        
        
               rightThumbContainer.onPointerDownObservable.add(function(coordinates) {
                   rightPuck.isVisible = true;
                   rightPuck.floatLeft = adt._canvas.width - coordinates.x-(rightThumbContainer._currentMeasure.width*.5)-sideJoystickOffset;
                   rightPuck.left = rightPuck.floatLeft*-1;
                   rightPuck.floatTop = adt._canvas.height - coordinates.y-(rightThumbContainer._currentMeasure.height*.5)+bottomJoystickOffset;
                   rightPuck.top = rightPuck.floatTop*-1;
                   rightPuck.isDown = true;
                   rightThumbContainer.alpha = 0.9;
               });
        
               rightThumbContainer.onPointerUpObservable.add(function(coordinates) {
                   xAddRot = 0;
                   yAddRot = 0;
                   rightPuck.isDown = false;
                   rightPuck.isVisible = false;
                   rightThumbContainer.alpha = 0.4;
               });
        
        
               rightThumbContainer.onPointerMoveObservable.add(function(coordinates) {
                   if (rightPuck.isDown) {
                       xAddRot = adt._canvas.width - coordinates.x-(rightThumbContainer._currentMeasure.width*.5)-sideJoystickOffset;
                       yAddRot = adt._canvas.height - coordinates.y-(rightThumbContainer._currentMeasure.height*.5)+bottomJoystickOffset;
                       rightPuck.floatLeft = xAddRot*-1;
                       rightPuck.floatTop = yAddRot*-1;
                       rightPuck.left = rightPuck.floatLeft;
                       rightPuck.top = rightPuck.floatTop;
                       }
               });
        
            //leftThumbContainer.left = 50;
            adt.addControl(rightThumbContainer);
            rightThumbContainer.addControl(rightInnerThumbContainer);
            rightThumbContainer.addControl(rightPuck);
            rightPuck.isVisible = false;
        
          //rightThumbContainer.right = "-100px";
          //leftThumbContainer.left = "0px";
        
              camera.attachControl(canvas, true);
        
            scene.registerBeforeRender(function(){
                      translateTransform = BABYLON.Vector3.TransformCoordinates(new BABYLON.Vector3(xAddPos/-3000, 0, yAddPos/3000), BABYLON.Matrix.RotationY(camera.rotation.y)); // xAddPos/3000, 0, yAddPos/3000
                      camera.cameraDirection.addInPlace(translateTransform);
                      camera.cameraRotation.y += xAddRot/-20000*-1; // 15000*-1;
                      camera.cameraRotation.x += yAddRot/20000*-1; //15000*-1;
                }); 
        
        function makeThumbArea(name, thickness, color, background, curves){
           let rect = new BABYLON.GUI.Ellipse();
               rect.name = name;
               rect.thickness = thickness;
               rect.color = color;
               rect.background = background;
              
               rect.paddingLeft = "0px";
               rect.paddingRight = "0px";
               rect.paddingTop = "0px";
               rect.paddingBottom = "0px";
        
        
        
        
           return rect;
        } 


}
else{ // viewportWidth width > 991
  // load desktop script

}
     


    
        
            // pointer
            var pointer = BABYLON.Mesh.CreateSphere("Sphere", 16.0, 1, scene, false, BABYLON.Mesh.DOUBLESIDE);
            // move the sphere upward 1/2 of its height
            pointer.position.x = 0.0;
            pointer.position.y = 0.0;
            pointer.position.z = 0.0;
            pointer.isPickable = false;
            pointer.isVisible = false;
        
            var moveForward = false;
            var moveBackward = false;
            var moveRight = false;
            var moveLeft = false;
            var jump = false;
            
            
            
// Smartphone forward
    const forward = document.getElementById('controller-forward')
    forward.addEventListener("touchstart", function () {
       moveForward = true; 
        
    })
    forward.addEventListener("touchend", function () {
    moveForward = false;
    })
    forward.addEventListener("touchmove", function () {
 
    }) 
    
    
    // Smartphone right
    const right = document.getElementById('controller-right')
    right.addEventListener("touchstart", function () {
        moveLeft = true; 
    })
    right.addEventListener('touchend', function () {
       moveLeft = false;
    })

    // Smartphone left
    const left = document.getElementById('controller-left')
    left.addEventListener("touchstart", function () {
        moveRight = true;
    })
    left.addEventListener('touchend', function () {
        moveRight = false; 
    })

    // Behind the smartphone
    const back = document.getElementById('controller-back')
    back.addEventListener("touchstart", function () {
        moveBackward = true;
    })
    back.addEventListener('touchend', function () {
        moveBackward = false;
    })	    
    
            

 
  
            
            var onKeyDown = function (event) {
                switch (event.keyCode) {
                    case 38: // up
                    case 87: // w
                        moveForward = true;
                        break;
        
                    case 37: // left
                    case 65: // a
                        moveRight = true;
                        
                        break;
        
                    case 40: // down
                    case 83: // s
                        moveBackward = true;
                        break;
        
                    case 39: // right
                    case 68: // d
                      moveLeft = true;   
                        break;
        
                    case 32: // space
                    
                   // jump = true; 
                    
                        break;
                        
                                       
                }
            };
        
            var onKeyUp = function (event) {
                switch (event.keyCode) {
                    case 38: // up
                    case 87: // w
                        moveForward = false;
                        break;
        
                    case 37: // left
                    case 65: // a
                        moveRight = false;
                        break;
        
                    case 40: // down
                    case 83: // a
                        moveBackward = false;
                        break;
        
                    case 39: // right
                    case 68: // d
                        moveLeft = false;
                        break;
                        
                    case 32: // space
                    
                   // jump = false; 
                    
                        break;                        
                        
                }
            };
        
            document.addEventListener('keydown', onKeyDown, false);
            document.addEventListener('keyup', onKeyUp, false);
            
    
const forceMult = 1;    
            
            scene.registerBeforeRender(function () {
                  
                camera.position.x = hero.position.x;
                camera.position.y = hero.position.y + 1;
                camera.position.z = hero.position.z;
                pointer.position = camera.getTarget(); 
                
                var forward = camera.getTarget().subtract(camera.position).normalize();
                forward.y = 0;
                var right = BABYLON.Vector3.Cross(forward, camera.upVector).normalize();
                right.y = 0;
                
                var SPEED = 10;
                let f_speed = 0;
                var s_speed = 0;
                var u_speed = 0;			
  
           function isOnGround () {
                const info = scene.pickWithRay(new BABYLON.Ray(hero.position, new BABYLON.Vector3(0, -1, 0)), e => {
                    return !(e === hero)
                })
                return info.hit && (Math.round(info.pickedPoint.y * 1000) / 1000 + 0.1) >= (hero.getBoundingInfo().minimum.y + hero.position.y)
            }   


//if (isOnGround()) {   

        
                if (jump) {
                   
                 //   hero.physicsImpostor.applyImpulse(new BABYLON.Vector3(0, 500, 0), hero.getAbsolutePosition())
                    //jump === false
                    console.log("jump")
                }
                
  

                if (moveForward) {
                    f_speed = SPEED;
                    //const forward2 = new BABYLON.Vector3(0, 0,-1*forceMult);
                    //boxAggregate.body.applyImpulse(forward2, hero.getAbsolutePosition());
                }
                if (moveBackward) {
                    f_speed = -SPEED;
                   //const forward2 = new BABYLON.Vector3(0, 0, 1*forceMult);             
                   //boxAggregate.body.applyImpulse(forward2, hero.getAbsolutePosition());
                }
        
                if (moveRight) {
                    s_speed = SPEED;
                }
        
                if (moveLeft) {
                    s_speed = -SPEED;
                }
                
                var move = (forward.scale(f_speed)).subtract((right.scale(s_speed))).subtract(camera.upVector.scale(u_speed));
                
                hero.physicsImpostor.physicsBody.velocity.x = move.x;
                hero.physicsImpostor.physicsBody.velocity.z = move.z;
                hero.physicsImpostor.physicsBody.velocity.y = move.y;
               
               //boxAggregate.body.applyImpulse(forward, hero.getAbsolutePosition());
            
            //boxAggregate.body.physicsBody.velocity.x = move.x;
            //boxAggregate.body.physicsBody.velocity.z = move.z;
            //boxAggregate.body.physicsBody.velocity.y = move.y;
            
           // boxAggregate.body.setLinearVelocity(frontVector.scale(decelerationFactor), boxAggregate.transformNode.getAbsolutePosition());
            
                
            });
        
        
        
            //Mouse
            //We start without being locked.
        	
        	
var isLocked = false;
 
    document.addEventListener('keydown', function(event)
    {
      var code = event.keyCode || event.which;
      if (code === 80) {  // P key

		//true/false check if we're locked, faster than checking pointerlock on each single click.
		if (!isLocked) {
			canvas.requestPointerLock = canvas.requestPointerLock || canvas.msRequestPointerLock || canvas.mozRequestPointerLock || canvas.webkitRequestPointerLock || false;
			if (canvas.requestPointerLock) {
				canvas.requestPointerLock();
			}
		}
isLocked = true;
// scene.onPointerDown = e => canvas.requestPointerLock()

      }
    else { 

isLocked = false;
  
    }  
        
    });         	
        	
        	
        	/*
        	// On click event, request pointer lock
        	scene.onPointerDown = function (evt) {
        		
        		//true/false check if we're locked, faster than checking pointerlock on each single click.
        		if (!isLocked) {
        			canvas.requestPointerLock = canvas.requestPointerLock || canvas.msRequestPointerLock || canvas.mozRequestPointerLock || canvas.webkitRequestPointerLock;
        			if (canvas.requestPointerLock) {
        				canvas.requestPointerLock();
        			}
        		}
        		
        		//continue with shooting requests or whatever :P
        		//evt === 1 (mouse wheel click (not scrolling))
        		//evt === 2 (right mouse click)
        	};
        */	
        
        	// Event listener when the pointerlock is updated (or removed by pressing ESC for example).
        	var pointerlockchange = function () {
        		var controlEnabled = document.mozPointerLockElement || document.webkitPointerLockElement || document.msPointerLockElement || document.pointerLockElement || null;
        		
        		// If the user is already locked
        		if (!controlEnabled) {
        			//camera.detachControl(canvas);
        			isLocked = false;
        		} else {
        			//camera.attachControl(canvas);
        			isLocked = true;
        		}
        	};
        	
        	// Attach events to the document
        	document.addEventListener("pointerlockchange", pointerlockchange, false);
        	document.addEventListener("mspointerlockchange", pointerlockchange, false);
        	document.addEventListener("mozpointerlockchange", pointerlockchange, false);
        	document.addEventListener("webkitpointerlockchange", pointerlockchange, false);
            
    
    

// SCENE


 

//debug
   document.addEventListener('keydown', function(event)
    {
      var code = event.keyCode || event.which;
      if (code === 13) { 
//scene.debugLayer.show();
      }
    else { 
  
    }  
        
    }); 





    return scene;
}
                window.initFunction = async function() {
                    //globalThis.HK = await HavokPhysics();
                    
                    
                    var asyncEngineCreation = async function() {
                        try {
                        return createDefaultEngine();
                        } catch(e) {
                        console.log("the available createEngine function failed. Creating the default engine instead");
                        return createDefaultEngine();
                        }
                    }

                    window.engine = await asyncEngineCreation();
        if (!engine) throw 'engine should not be null.';
        startRenderLoop(engine, canvas);
        window.scene = createScene();};
        initFunction().then(() => {sceneToRender = scene                    
        });

        // Resize
        window.addEventListener("resize", function () {
            engine.resize();
        });
    </script>
</body>
</html>
