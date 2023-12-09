<?php
// including the database connection file
include_once("../connection.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	//$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$object = mysqli_real_escape_string($mysqli, $_POST['object']);
	$scale = mysqli_real_escape_string($mysqli, $_POST['scale']);
	$posY = mysqli_real_escape_string($mysqli, $_POST['posY']);
	$posX = mysqli_real_escape_string($mysqli, $_POST['posX']);
	$posZ = mysqli_real_escape_string($mysqli, $_POST['posZ']);
	$rotY = mysqli_real_escape_string($mysqli, $_POST['rotY']);

//$video_name   = $_FILES['video']['name'];
//$video        = $_FILES['video']['tmp_name'];
//$locationvideo     = "../Uploads/Video/".$video_name;
//move_uploaded_file($video, $locationvideo);

//$model_name   = $_FILES['model']['name'];
//$model        = $_FILES['model']['tmp_name'];
//$locationmodel     = "../Uploads/Models/".$model_name;
//move_uploaded_file($model, $locationmodel);

$model = mysqli_real_escape_string($mysqli, $_POST["model"]);

	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE LibraryNewModels SET model='$model',object='$object',scale='$scale',rotY='$rotY',posY='$posY',posX='$posX',posZ='$posZ' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		echo '<script> window.location.href = "index.php";    </script>';

}
?>


<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM LibraryNewModels WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

	$model = $res['model'];
	$object = $res['object'];
	$scale = $res['scale'];
	$posY = $res['posY'];
	$posX = $res['posX'];
	$posZ = $res['posZ'];
	$rotY = $res['rotY'];

}


?>

<?php 

include("../connection.php");

//getting id from url
$id = $_GET['id'];

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$DBscale = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE id=$id");
$DBposY = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE id=$id");
$DBposX = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE id=$id");
$DBposZ = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE id=$id");
$DBrotY = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE id=$id");
$DBobject = mysqli_query($mysqli,"SELECT * FROM LibraryNewModels WHERE id=$id");
//$DBposY = mysqli_query($mysqli, "SELECT * FROM SandboxData WHERE id=$id");

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
                width: 50vw;
                height: 50vh;
                touch-action: none;
            }
            
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

.pedestralBTN {
border: 1px solid black;
background-color: #333;
color: white;
}
 
.pedestralBTN:hover {
border: 1px solid black;
background-color: white;
color: black;
}            
        </style>


<html>
<head>	
	<title>Edit Model</title>
	
        <!-- Babylon.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.2/dat.gui.min.js"></script>
        <script src="https://assets.babylonjs.com/generated/Assets.js"></script>
        <script src="https://preview.babylonjs.com/ammo.js"></script>
        <script src="https://preview.babylonjs.com/cannon.js"></script>
        <script src="https://preview.babylonjs.com/Oimo.js"></script>
        <script src="https://preview.babylonjs.com/earcut.min.js"></script>
        <script src="https://preview.babylonjs.com/babylon.js"></script>
        <script src="https://preview.babylonjs.com/materialsLibrary/babylonjs.materials.min.js"></script>
        <script src="https://preview.babylonjs.com/proceduralTexturesLibrary/babylonjs.proceduralTextures.min.js"></script>
        <script src="https://preview.babylonjs.com/postProcessesLibrary/babylonjs.postProcess.min.js"></script>
        <script src="https://preview.babylonjs.com/loaders/babylonjs.loaders.js"></script>
        <script src="https://preview.babylonjs.com/serializers/babylonjs.serializers.min.js"></script>
        <script src="https://preview.babylonjs.com/gui/babylon.gui.min.js"></script>
        <script src="https://preview.babylonjs.com/inspector/babylon.inspector.bundle.js"></script>		

  <script src='https://assets.codepen.io/16327/gsap-latest-beta.min.js'></script>
<script src='https://assets.codepen.io/16327/ScrollTrigger.min.js'></script>        
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="EditModels.php" enctype="multipart/form-data" >
		<table border="0">


			<tr> 
				<td></td>
				<td style="display: none!important;"> <input type="text" name="model"  value="<?php echo $model;?>" /> </td>
			</tr>

			<tr style="display: none!important;"> 
				<td>Position Y</td>
				<td > <input type="text" name="posY" id="posYFinal"  value="<?php echo $posY;?>" /> <div id="posYValue" style="display: none!important;"></div> </td>
			</tr>

			<tr style="display: none!important;"> 
				<td>Position Z</td>
				<td > <input type="text" name="posZ" id="posZFinal"  value="<?php echo $posZ;?>" /> <div id="posZValue" style="display: none!important;"></div> </td>
			</tr>
			
			<tr style="display: none!important;"> 
				<td>Position X</td>
				<td > <input type="text" name="posX" id="posXFinal"  value="<?php echo $posX;?>" /> <div id="posXValue" style="display: none!important;"></div> </td>
			</tr>			

			<tr style="display: none!important;"> 
				<td>Rotation Y</td>
				<td > <input type="text" name="rotY" id="rotYFinal"  value="<?php echo $rotY;?>" /> <div id="rotYValue" style="display: none!important;"></div> </td>
			</tr>

<tr>
<td></td>
<td>  <input type="text" name="scale" id="scaleFinal" value="<?php echo $scale;?>" style="display: none!important;" /> 
<br>  <div id="scaleValue" style="display: none!important;"></div> 
<br>

<div>
<input type="text" name="object" id="objectFinal" value="<?php echo $object;?>"  />
<div id="objectValue" style="display: none!important;"></div>
</div>


<div id="Pedestral1" class="pedestralBTN">Table 1</div>
<div id="Pedestral2" class="pedestralBTN">Table 2</div>
<div id="Pedestral3" class="pedestralBTN">Table 3</div>
<div id="Pedestral4" class="pedestralBTN">Table 4</div>
<div id="Pedestral5" class="pedestralBTN">Table 5</div>
<div id="Pedestral6" class="pedestralBTN">Table 6</div>


<div class="select">
	<div class="selectBtn" data-type="firstOption">Choose your pedestral</div>
	<div class="selectDropdown">
		<div class="option" data-type="firstOption"> <div id="ScaleBTN1">Object1</div> </div>
		<div class="option" data-type="secondOption"> <div id="ScaleBTN2">Object2</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN3">Object3</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN4">Object4</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN5">Object5</div> </div>
		<div class="option" data-type="thirdOption"> <div id="ScaleBTN6">Object6</div> </div>

	</div>
</div>

<br>

   <canvas id="renderCanvas"></canvas>

  </td>

 
 
    
</td>

</tr>



			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" id="saveData" value="Update"></td>
			</tr>
		</table>
	</form>


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
 
    
var  DBmodel = <?php echo json_encode('../Uploads/Models/'.$model); ?> 
var  DBscale = <?php  

$row = mysqli_fetch_array($DBscale, MYSQLI_ASSOC);
	
	if(empty($row['scale'])){
	 echo ('1');   
	}else if(isset($row['scale'])){
	 echo ($row['scale']); 
	}

	 ?>     
 
var DBposY1 = <?php  

$row = mysqli_fetch_array($DBposY, MYSQLI_ASSOC);
	
	if(empty($row['posY'])){
	 echo ('1');   
	}else if(isset($row['posY'])){
	 echo ($row['posY']); 
	}

	 ?> 


var DBposX1 = <?php  

$row = mysqli_fetch_array($DBposX, MYSQLI_ASSOC);
	
	if(empty($row['posX'])){
	 echo ('1');   
	}else if(isset($row['posX'])){
	 echo ($row['posX']); 
	}

	 ?>


var DBposZ1 = <?php  

$row = mysqli_fetch_array($DBposZ, MYSQLI_ASSOC);
	
	if(empty($row['posZ'])){
	 echo ('1');   
	}else if(isset($row['posZ'])){
	 echo ($row['posZ']); 
	}

	 ?> 


var DBrotY1 = <?php  

$row = mysqli_fetch_array($DBrotY, MYSQLI_ASSOC);
	
	if(empty($row['rotY'])){
	 echo ('0.1');   
	}else if(isset($row['rotY'])){
	 echo ($row['rotY']); 
	}

	 ?> 
 
  
var pedestral = <?php  

$row = mysqli_fetch_array($DBobject, MYSQLI_ASSOC);
	
	if(empty($row['object'])){
	   echo json_encode('none'); 
	}else if(isset($row['object'])){
	 echo json_encode($row['object']); 
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
        const createScene =  () => {
    const scene = new BABYLON.Scene(engine);

      var camera = new BABYLON.ArcRotateCamera("camera", Math.PI / -2, Math.PI / 2.5, 1, new BABYLON.Vector3(0, 0, 0)); // -Math.PI / 2, Math.PI / 2.5, 3

    // This targets the camera to scene origin
    camera.setTarget(BABYLON.Vector3.Zero());
    camera.attachControl(canvas, true);

    camera.lowerRadiusLimit = 1;
    camera.upperRadiusLimit = 1; 

camera.inputs.removeByType("ArcRotateCameraMouseWheelInput"); 

        const player = BABYLON.MeshBuilder.CreateBox("Player", {
          height: 1,
          width: 1,
          depth: 1,
        });
        //player.parent = root
        player.isVisible = false;

        player.position = new BABYLON.Vector3(0, -5, -6);
        //player.rotation.y = Math.PI/2
        
        camera.parent = player;

scene.useRightHandedSystem = true 

    const light = new BABYLON.HemisphericLight("light", new BABYLON.Vector3(0, 1, 0));
    light.intensity = 0.5;

        var helper = scene.createDefaultEnvironment({
            enableGroundMirror: false,
            groundShadowLevel: 0.6,
            createSkybox: false,
            groundYBias: 0.01,
        });
        helper.ground.dispose();
        

           // Skybox
            var skybox = BABYLON.Mesh.CreateBox("skyBox", 200, scene);
            var skyboxMaterial = new BABYLON.StandardMaterial("skyBox", scene);
            skyboxMaterial.backFaceCulling = false;
            skyboxMaterial.reflectionTexture = new BABYLON.CubeTexture("../Skybox/TropicalSunnyDay", scene);
            skyboxMaterial.reflectionTexture.coordinatesMode = BABYLON.Texture.SKYBOX_MODE;
            skyboxMaterial.diffuseColor = new BABYLON.Color3(0, 0, 0);
            skyboxMaterial.specularColor = new BABYLON.Color3(0, 0, 0);
            skyboxMaterial.disableLighting = true;
            skybox.material = skyboxMaterial;

  const lampLight = new BABYLON.SpotLight("lampLight", BABYLON.Vector3.Zero(), new BABYLON.Vector3(0, -1, 0), Math.PI, 1, scene);
    lampLight.diffuse = BABYLON.Color3.Green();
    lampLight.intensity = 2
    const bulb = BABYLON.MeshBuilder.CreateSphere("bulb", {diameterX: 1.5, diameterZ: 0.8});
    bulb.isVisible = false
    lampLight.parent = bulb;    

if(pedestral === "object1"){
bulb.position = new BABYLON.Vector3(6, 1, 1);   
}
if(pedestral === "object2"){
bulb.position = new BABYLON.Vector3(-6, 1, 1);    
}
if(pedestral === "object3"){
bulb.position = new BABYLON.Vector3(6, 1, 10);    
}
if(pedestral === "object4"){
bulb.position = new BABYLON.Vector3(-6, 1, 10);     
}

var ground = BABYLON.Mesh.CreateGround("ground1", 25, 42, 2, scene);
ground.position = new BABYLON.Vector3(0, -1, 20);
ground.isVisible = false

const modelBox = BABYLON.MeshBuilder.CreateBox("box", { height: 1, width: 1, depth: 1 });  

modelBox.position = new BABYLON.Vector3(DBposX1, DBposY1, DBposZ1);
modelBox.rotation = new BABYLON.Vector3(0, DBrotY1, 0);
//modelBox.position = new BABYLON.Vector3(5.5, 1.8, 0.7);
modelBox.isVisible = false  


// camera movements

//Pedestral1

var Pedestral1Btn = document.getElementById("Pedestral1");
Pedestral1Btn.addEventListener("click", createPedestral1Btn, false);

function createPedestral1Btn(){ 
          gsap.to(player.position, {duration: 4.3,delay: 0,z: 10,ease: "power3.inOut",repeat: 0,});
          gsap.to(player.position, {duration: 4.3,delay: 0,x: -18,ease: "power3.inOut",repeat: 0,});         
          gsap.to(player.position, {duration: 4.3,delay: 0,y: -3,ease: "power3.inOut",repeat: 0,});            

           gsap.to(player.rotation, {duration: 4.3,delay: 0,x:  0,ease: "power3.inOut",repeat: 0,}); 
           gsap.to(player.rotation, {duration: 4.3,delay: 0,y:  1.5,ease: "power3.inOut",repeat: 0,});   
           gsap.to(player.rotation, {duration: 4.3,delay: 0,z:  0, ease: "power3.inOut",repeat: 0,}); 
           
           modelBox.position = new BABYLON.Vector3(-15, -7.5, 10);
           
}  


var Pedestral2Btn = document.getElementById("Pedestral2");
Pedestral2Btn.addEventListener("click", createPedestral2Btn, false);

function createPedestral2Btn(){ 
          gsap.to(player.position, {duration: 4.3,delay: 0,z: 10,ease: "power3.inOut",repeat: 0,});
          gsap.to(player.position, {duration: 4.3,delay: 0,x: 0.2623422145843506,ease: "power3.inOut",repeat: 0,});         
          gsap.to(player.position, {duration: 4.3,delay: 0,y: -3,ease: "power3.inOut",repeat: 0,});            

           gsap.to(player.rotation, {duration: 4.3,delay: 0,x:  0,ease: "power3.inOut",repeat: 0,}); 
           gsap.to(player.rotation, {duration: 4.3,delay: 0,y:  -1.5,ease: "power3.inOut",repeat: 0,});   
           gsap.to(player.rotation, {duration: 4.3,delay: 0,z:  0, ease: "power3.inOut",repeat: 0,});  
           
           modelBox.position = new BABYLON.Vector3(0.2623422145843506, -7.5, 10);
}  


var Pedestral3Btn = document.getElementById("Pedestral3");
Pedestral3Btn.addEventListener("click", createPedestral3Btn, false);

function createPedestral3Btn(){ 
          gsap.to(player.position, {duration: 4.3,delay: 0,z: 10,ease: "power3.inOut",repeat: 0,});
          gsap.to(player.position, {duration: 4.3,delay: 0,x: 14.068336486816406,ease: "power3.inOut",repeat: 0,});         
          gsap.to(player.position, {duration: 4.3,delay: 0,y: -3,ease: "power3.inOut",repeat: 0,});            

           gsap.to(player.rotation, {duration: 4.3,delay: 0,x:  0,ease: "power3.inOut",repeat: 0,}); 
           gsap.to(player.rotation, {duration: 4.3,delay: 0,y:  1.5,ease: "power3.inOut",repeat: 0,});   
           gsap.to(player.rotation, {duration: 4.3,delay: 0,z:  0, ease: "power3.inOut",repeat: 0,});  
           
           modelBox.position = new BABYLON.Vector3(14.068336486816406, -7.5, 10);
           
}  


var Pedestral4Btn = document.getElementById("Pedestral4");
Pedestral4Btn.addEventListener("click", createPedestral4Btn, false);

function createPedestral4Btn(){ 
          gsap.to(player.position, {duration: 4.3,delay: 0,z: -10,ease: "power3.inOut",repeat: 0,});
          gsap.to(player.position, {duration: 4.3,delay: 0,x: -13.595808982849121,ease: "power3.inOut",repeat: 0,});         
          gsap.to(player.position, {duration: 4.3,delay: 0,y: -3,ease: "power3.inOut",repeat: 0,});            

           gsap.to(player.rotation, {duration: 4.3,delay: 0,x:  0,ease: "power3.inOut",repeat: 0,}); 
           gsap.to(player.rotation, {duration: 4.3,delay: 0,y:  -1.5,ease: "power3.inOut",repeat: 0,});   
           gsap.to(player.rotation, {duration: 4.3,delay: 0,z:  0, ease: "power3.inOut",repeat: 0,});  
           
           modelBox.position = new BABYLON.Vector3(-13.595808982849121, -7.5, -10);
           
} 

var Pedestral5Btn = document.getElementById("Pedestral5");
Pedestral5Btn.addEventListener("click", createPedestral5Btn, false);

function createPedestral5Btn(){ 
          gsap.to(player.position, {duration: 4.3,delay: 0,z: -10,ease: "power3.inOut",repeat: 0,});
          gsap.to(player.position, {duration: 4.3,delay: 0,x: 0.20464769005775452,ease: "power3.inOut",repeat: 0,});         
          gsap.to(player.position, {duration: 4.3,delay: 0,y: -3,ease: "power3.inOut",repeat: 0,});            

           gsap.to(player.rotation, {duration: 4.3,delay: 0,x:  0,ease: "power3.inOut",repeat: 0,}); 
           gsap.to(player.rotation, {duration: 4.3,delay: 0,y:  -1.5,ease: "power3.inOut",repeat: 0,});   
           gsap.to(player.rotation, {duration: 4.3,delay: 0,z:  0, ease: "power3.inOut",repeat: 0,});  
           
           modelBox.position = new BABYLON.Vector3(0.20464769005775452, -7.5, -10);
           
} 

var Pedestral6Btn = document.getElementById("Pedestral6");
Pedestral6Btn.addEventListener("click", createPedestral6Btn, false);

function createPedestral6Btn(){ 
          gsap.to(player.position, {duration: 4.3,delay: 0,z: -10,ease: "power3.inOut",repeat: 0,});
          gsap.to(player.position, {duration: 4.3,delay: 0,x: 14.360766410827637,ease: "power3.inOut",repeat: 0,});         
          gsap.to(player.position, {duration: 4.3,delay: 0,y: -3,ease: "power3.inOut",repeat: 0,});            

           gsap.to(player.rotation, {duration: 4.3,delay: 0,x:  0,ease: "power3.inOut",repeat: 0,}); 
           gsap.to(player.rotation, {duration: 4.3,delay: 0,y:  -1.5,ease: "power3.inOut",repeat: 0,});   
           gsap.to(player.rotation, {duration: 4.3,delay: 0,z:  0, ease: "power3.inOut",repeat: 0,});  
           
           modelBox.position = new BABYLON.Vector3(14.360766410827637, -7.5, -10);
           
} 


    // Create utility layer the gizmo will be rendered on
    var utilLayer = new BABYLON.UtilityLayerRenderer(scene);
    // Create the gizmo and attach to the sphere
    var gizmo = new BABYLON.PositionGizmo(utilLayer);
    gizmo.attachedMesh = modelBox;

    // Keep the gizmo fixed to world rotation
    gizmo.updateGizmoRotationToMatchAttachedMesh = false;
    gizmo.updateGizmoPositionToMatchAttachedMesh = true;
  
  
    // Create the gizmo and attach to the box
    var gizmo2 = new BABYLON.PlaneRotationGizmo(new BABYLON.Vector3(0,1,0), BABYLON.Color3.FromHexString("#00b894"), utilLayer);
    gizmo2.attachedMesh = modelBox;

    // Updating using local rotation
    gizmo2.updateGizmoRotationToMatchAttachedMesh = true;
    gizmo2.updateGizmoPositionToMatchAttachedMesh = true;  
  
  
function addY(){
    document.getElementById("posYValue").innerHTML = modelBox.position.y;
 var info = document.getElementById("posYValue").innerHTML;
    document.getElementById("posYFinal").value = info;    
}  


function addX(){
    document.getElementById("posXValue").innerHTML = modelBox.position.x;
 var info = document.getElementById("posXValue").innerHTML;
    document.getElementById("posXFinal").value = info;    
} 


function addZ(){
    document.getElementById("posZValue").innerHTML = modelBox.position.z;
 var info = document.getElementById("posZValue").innerHTML;
    document.getElementById("posZFinal").value = info;    
} 

function addRotY(){
    document.getElementById("rotYValue").innerHTML = modelBox.rotation.y;
 var info = document.getElementById("rotYValue").innerHTML;
    document.getElementById("rotYFinal").value = info;    
} 


   document.addEventListener('keydown', function(event)
    {
      var code = event.keyCode || event.which;
      if (code === 68) { 
console.log("Y = " + modelBox.position.y)
console.log("X = " + modelBox.position.x)
console.log("Z = " + modelBox.position.z)
console.log("----------------")

addY()
addX()
addZ()
addRotY()

      }
    else { 
  
    }  
        
    });     
  
  
var saveDataBtn = document.getElementById("saveData");
saveDataBtn.addEventListener("click", createsaveDataBtn, false);

function createsaveDataBtn(){ 
addY()
addX()
addZ()
addRotY() 
}   
  
    
// Load the model
 BABYLON.SceneLoader.ImportMesh("", "", DBmodel, scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
var PI = Math.PI / -2;
        model.rotation = new BABYLON.Vector3(0, 0, 0);
        model.position = new BABYLON.Vector3(0, 0, 0);
        model.scaling = new BABYLON.Vector3(DBscale, DBscale, DBscale);
        model.parent = modelBox;
    
    }); 

var PedestralScale = 2

 BABYLON.SceneLoader.ImportMesh("", "", "../Models/LibraryFinal.glb", scene, function (newMeshes, skeletons) {
     
var DBscale = 2
     
        var model = newMeshes[0];
var PI = Math.PI / -1;
        model.rotation = new BABYLON.Vector3(0, PI, 0);
        model.position = new BABYLON.Vector3(0, -10, 0);
        model.scaling = new BABYLON.Vector3(DBscale, DBscale, DBscale);
        
        
    });

//ScaleBTN

    // GUI
    var advancedTexture = BABYLON.GUI.AdvancedDynamicTexture.CreateFullscreenUI("UI");
    
    // Height Input
    var heightInput = new BABYLON.GUI.InputText("heightInput");
    heightInput.width = "75px";
    heightInput.maxWidth = 0.2;
    heightInput.height = "35px";
    //heightInput.text = "1";
    heightInput.text = DBscale;
    heightInput.color = "white";
    heightInput.background = "green";
    heightInput.horizontalAlignment = BABYLON.GUI.Control.HORIZONTAL_ALIGNMENT_LEFT
    heightInput.onBeforeKeyAddObservable.add((input) => {
        let key = input.currentKey;
       // if (key < "0" || key > "9") { intput.addKey = false; }
    });

    heightInput.onTextChangedObservable.add(e => {
        //var sInput = parseInt(e.text);
        var sInput = parseFloat(e.text);
        modelBox.scaling.setAll(sInput);
        
 document.getElementById("scaleValue").innerHTML = sInput;
        
 var info = document.getElementById("scaleValue").innerHTML;
    document.getElementById("scaleFinal").value = info;        
        
    });
    

    advancedTexture.addControl(heightInput);

    
    
var Animation1Btn = document.getElementById("ScaleBTN1");
Animation1Btn.addEventListener("click", createAnimation1Btn, false);

function createAnimation1Btn(){ 

    document.getElementById("objectValue").innerHTML = `object1`;

 var info = document.getElementById("objectValue").innerHTML;
    document.getElementById("objectFinal").value = info;

}  

var Animation2Btn = document.getElementById("ScaleBTN2");
Animation2Btn.addEventListener("click", createAnimation2Btn, false);

function createAnimation2Btn(){ 

    document.getElementById("objectValue").innerHTML = `object2`;

 var info = document.getElementById("objectValue").innerHTML;
    document.getElementById("objectFinal").value = info;

}    


var Animation3Btn = document.getElementById("ScaleBTN3");
Animation3Btn.addEventListener("click", createAnimation3Btn, false);

function createAnimation3Btn(){ 

    document.getElementById("objectValue").innerHTML = `object3`;

 var info = document.getElementById("objectValue").innerHTML;
    document.getElementById("objectFinal").value = info;

}  

var Animation4Btn = document.getElementById("ScaleBTN4");
Animation4Btn.addEventListener("click", createAnimation4Btn, false);

function createAnimation4Btn(){ 

    document.getElementById("objectValue").innerHTML = `object4`;

 var info = document.getElementById("objectValue").innerHTML;
    document.getElementById("objectFinal").value = info;

} 

    return scene;
}
                window.initFunction = async function() {
                    
                    
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