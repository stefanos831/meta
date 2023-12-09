<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Iframe 3D</title>

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
                width: 100%;
                height: 100%;
                touch-action: none;
            }
            
            #canvasZone {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
<body>
    <div id="canvasZone"><canvas id="renderCanvas"></canvas></div>
    <script>
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
        var youtubeFocused = false
        
        var createScene = function () {
        
            var scene = new BABYLON.Scene(engine);
        
            // Needs to be transparent for Youtube video to be seen
            scene.clearColor = new BABYLON.Color4(0,0,0,0);
            
            var camera = new BABYLON.FreeCamera("camera1", new BABYLON.Vector3(0, 5, -10), scene);
            camera.setTarget(BABYLON.Vector3.Zero());
            camera.attachControl(canvas, true);
        
            var light = new BABYLON.HemisphericLight("light", new BABYLON.Vector3(0, 1, 0), scene);
            light.intensity = 0.7;
        
        
// model
 BABYLON.SceneLoader.ImportMesh("", "", "animated_book.glb", scene, function (newMeshes, particleSystems, skeletons) {
        var Shelf = newMeshes[0];
        
        
        

var PI = Math.PI / 2;
        //dude.rotation.y = Math.PI / 2;
        Shelf.rotation = new BABYLON.Vector3(0, PI, -1.6);

        Shelf.position = new BABYLON.Vector3(-1, 0.5, 0.7);
        Shelf.scaling = new BABYLON.Vector3(2, 2, 2);
  
  var bookPage1 = scene.getMeshByName("Object_10");
   
 const Anim1 = scene.getAnimationGroupByName("Action");
Anim1.stop();  

function openbook(){
    
Anim1.start(true, 1.0, Anim1.from, Anim1.to, false); 
setTimeout(function(){ 
    Anim1.pause(); 
    
}, 1500)
    
}


function closebook(){
    
Anim1.start(true, 1.0, Anim1.from, Anim1.to, false); 
setTimeout(function(){ 
    Anim1.stop(); 
    
}, 1000)    
    
}


var runState = "on";

 	bookPage1.actionManager = new BABYLON.ActionManager(scene);
	bookPage1.actionManager.registerAction(new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickUpTrigger, function () {
		console.log('object clicked')

		
if (runState == "on") {
    
    runState = "off"
console.log("ON")
openbook()

  } else {
      
    runState = "on"
console.log("OFF")
//closebook()

  }

// end function	
	}));	         

       
       //newMeshes[1].checkCollisions = true;
        //scene.beginAnimation(skeletons[0], 0, 100, true, 1.0);


//mirror.material.reflectionTexture.renderList.push( newMeshes[1] );





//Anim1.start(true, 1.0, Anim1.from, Anim1.to, false); 

setTimeout(function(){ 
   // Anim1.stop(); 
    
}, 1500)



    });

        
            // Some random shapes

    var box = BABYLON.MeshBuilder.CreateSphere("plane",{diameter:200}, scene);
    box.position.y = 0;

	var gradientMaterial = new BABYLON.GradientMaterial("grad", scene);
    gradientMaterial.topColor = BABYLON.Color3.FromHexString("#6f92a9");
    gradientMaterial.bottomColor = BABYLON.Color3.FromHexString("#7ea5bc");
    gradientMaterial.offset = 0.5;
    gradientMaterial.smoothness = 1;
    gradientMaterial.scale = 0.1
    gradientMaterial.backFaceCulling=false
    box.material = gradientMaterial;

        
            // The CSS object will follow this mesh
            var plane = BABYLON.MeshBuilder.CreatePlane("youtube", {width: 1, height: 1}, scene);
            //var plane = BABYLON.MeshBuilder.CreateBox("youtube", { height: 1, depth: 1, width: 1 });
            plane.scaling.x = 5
            plane.scaling.y = 7
            var PI = Math.PI / 2
            plane.position = new BABYLON.Vector3(0, 0.5, 0);
            plane.rotation = new BABYLON.Vector3(0, 0, 0);
            //plane.checkCollisions = true
            //plane.isVisible = false
        
            //Setup the CSS renderer and Youtube object
            let renderer = setupRenderer();
            createCSSobject(plane, scene, 'qgKbpe4qvno', renderer);
            createMaskingScreen(plane, scene, renderer)
        
            // New bit that toggles on/off pointer events to body
            var listener = function(evt) {
                let pick = scene.pick(Math.round(evt.offsetX), Math.round(evt.offsetY));
                if (pick.hit) {
                    if (pick.pickedMesh.name === "youtube") {
                        if (!youtubeFocused) {
                            youtubeFocused = true
                            console.log("YOUTUBE")
                            document.getElementsByTagName('body')[0].style.pointerEvents = 'none'
                        }
                    }
                }
            }
        
            window.addEventListener('pointermove', listener);
            window.addEventListener('pointerdown', listener);
            window.addEventListener('pointerup', listener);
       
       
//debug
   document.addEventListener('keydown', function(event)
    {
      var code = event.keyCode || event.which;
      if (code === 13) { 
scene.debugLayer.show();
      }
    else { 
  
    }  
        
    });        
        
            return scene;
        };
        
        var setupRenderer = function() {
            let container = document.createElement('div')
            container.id = 'css-container'
            container.style.position = 'absolute'
            container.style.width = '100%'
            container.style.height = '100%'
            container.style.zIndex = '-1'
        
            let canvasZone = document.getElementById('canvasZone')
            canvasZone.insertBefore(container, canvasZone.firstChild)
        
            let renderer = new CSS3DRenderer()
            container.appendChild(renderer.domElement)
            renderer.setSize(canvasZone.offsetWidth, canvasZone.offsetHeight)
        
            window.addEventListener('resize', e => {
                renderer.setSize(canvasZone.offsetWidth, canvasZone.offsetHeight)
            })
            return renderer
        }
        
        var createCSSobject = function(mesh, scene, videoID, renderer) {
            let width = 480
            let height = 360
            scene.onBeforeRenderObservable.add(() => {
                renderer.render(scene, scene.activeCamera)
            })
            var div = document.createElement( 'div' )
            div.style.width = width + 'px'
            div.style.height = height + 'px'
            div.style.backgroundColor = '#000'
            div.style.zIndex = '1'
            var CSSobject = new CSS3DObject(div, scene)
            CSSobject.position.copyFrom(mesh.getAbsolutePosition())
            CSSobject.rotation.y = -mesh.rotation.y
            CSSobject.scaling.copyFrom(mesh.scaling)
        
            var iframe = document.createElement( 'iframe' )
            iframe.id = 'video-' + videoID
            iframe.style.width = width + 'px'
            iframe.style.height = height + 'px'
            iframe.style.border = '0px'
            iframe.allow = 'autoplay'
            iframe.src = [ 'https://babylonjs-academy.com/Customers/GoldenLeafWorld/newLibrary/3Dbook/book1.html' ].join( '' )  //https://playground.babylonjs.com/#LPTLZM
            div.appendChild(iframe)    
        
            // Another new bit that toggles on/off pointer events to body
            div.addEventListener('mouseout', () => {
                youtubeFocused = false
                console.log("CANVAS")
                document.getElementsByTagName('body')[0].style.pointerEvents = 'auto'
            })
        }
        
        function createMaskingScreen(maskMesh, scene) {
            let depthMask = new BABYLON.StandardMaterial('matDepthMask', scene)
            depthMask.backFaceCulling = false
        
            maskMesh.material = depthMask
            maskMesh.onBeforeRenderObservable.add(() => engine.setColorWrite(false))
            maskMesh.onAfterRenderObservable.add(() => engine.setColorWrite(true))
        
            // swap meshes to put mask first
            var mask_index = scene.meshes.indexOf(maskMesh)
            scene.meshes[mask_index] = scene.meshes[0]
            scene.meshes[0] = maskMesh
        }
        
        class CSS3DObject extends BABYLON.Mesh {
            constructor(element, scene) {
                super()
                this.element = element
        		this.element.style.position = 'absolute'
        		this.element.style.pointerEvents = 'auto'
            }
        }
        
        class CSS3DRenderer {
            constructor() {
        		var matrix = new BABYLON.Matrix()
        
        		this.cache = {
        			camera: { fov: 0, style: '' },
        			objects: new WeakMap()
        		}
        
        		var domElement = document.createElement( 'div' )
        		domElement.style.overflow = 'hidden'
        
        		this.domElement = domElement
        		this.cameraElement = document.createElement( 'div' )
        		this.isIE = (!!document['documentMode'] || /Edge/.test(navigator.userAgent) || /Edg/.test(navigator.userAgent))
        
        		if (!this.isIE) {
        			this.cameraElement.style.webkitTransformStyle = 'preserve-3d'
        			this.cameraElement.style.transformStyle = 'preserve-3d'
        		}
        		this.cameraElement.style.pointerEvents = 'none'
        
        		domElement.appendChild(this.cameraElement)
            }
        
            getSize() {
        		return {
        			width: this.width,
        			height: this.height
        		}
            }
        
        	setSize(width, height) {
        		this.width = width
        		this.height = height
        		this.widthHalf = this.width / 2
        		this.heightHalf = this.height / 2
        
        		this.domElement.style.width = width + 'px'
        		this.domElement.style.height = height + 'px'
        
        		this.cameraElement.style.width = width + 'px'
        		this.cameraElement.style.height = height + 'px'
        	}    
        
        	epsilon(value) {
        		return Math.abs(value) < 1e-10 ? 0 : value
        	}
        
        	getCameraCSSMatrix(matrix) {
        		var elements = matrix.m
        
        		return 'matrix3d(' +
        			this.epsilon( elements[ 0 ] ) + ',' +
        			this.epsilon( - elements[ 1 ] ) + ',' +
        			this.epsilon( elements[ 2 ] ) + ',' +
        			this.epsilon( elements[ 3 ] ) + ',' +
        			this.epsilon( elements[ 4 ] ) + ',' +
        			this.epsilon( - elements[ 5 ] ) + ',' +
        			this.epsilon( elements[ 6 ] ) + ',' +
        			this.epsilon( elements[ 7 ] ) + ',' +
        			this.epsilon( elements[ 8 ] ) + ',' +
        			this.epsilon( - elements[ 9 ] ) + ',' +
        			this.epsilon( elements[ 10 ] ) + ',' +
        			this.epsilon( elements[ 11 ] ) + ',' +
        			this.epsilon( elements[ 12 ] ) + ',' +
        			this.epsilon( - elements[ 13 ] ) + ',' +
        			this.epsilon( elements[ 14 ] ) + ',' +
        			this.epsilon( elements[ 15 ] ) +
        		')'
        	}    
        
        	getObjectCSSMatrix(matrix, cameraCSSMatrix) {
        		var elements = matrix.m;
        		var matrix3d = 'matrix3d(' +
        			this.epsilon( elements[ 0 ] ) + ',' +
        			this.epsilon( elements[ 1 ] ) + ',' +
        			this.epsilon( elements[ 2 ] ) + ',' +
        			this.epsilon( elements[ 3 ] ) + ',' +
        			this.epsilon( - elements[ 4 ] ) + ',' +
        			this.epsilon( - elements[ 5 ] ) + ',' +
        			this.epsilon( - elements[ 6 ] ) + ',' +
        			this.epsilon( - elements[ 7 ] ) + ',' +
        			this.epsilon( elements[ 8 ] ) + ',' +
        			this.epsilon( elements[ 9 ] ) + ',' +
        			this.epsilon( elements[ 10 ] ) + ',' +
        			this.epsilon( elements[ 11 ] ) + ',' +
        			this.epsilon( elements[ 12 ] ) + ',' +
        			this.epsilon( elements[ 13 ] ) + ',' +
        			this.epsilon( elements[ 14 ] ) + ',' +
        			this.epsilon( elements[ 15 ] ) +
        		')'
        
        		if (this.isIE) {
        			return 'translate(-50%,-50%)' +
        				'translate(' + this.widthHalf + 'px,' + this.heightHalf + 'px)' +
        				cameraCSSMatrix +
        				matrix3d;
        		}
        		return 'translate(-50%,-50%)' + matrix3d
        	}    
        
        	renderObject(object, scene, camera, cameraCSSMatrix ) {
                if (object instanceof CSS3DObject) {
                    var style
        			var objectMatrixWorld = object.getWorldMatrix().clone()
        			var camMatrix = camera.getWorldMatrix()
        			var innerMatrix = objectMatrixWorld.m
        
        			// Set scaling
        			const youtubeVideoWidth = 4.8
        			const youtubeVideoHeight = 3.6
        
        			innerMatrix[0] *= 0.01 / youtubeVideoWidth
        			innerMatrix[2] *= 0.01 / youtubeVideoWidth
        			innerMatrix[5] *= 0.01 / youtubeVideoHeight
        
        			// Set position from camera
        			innerMatrix[12] = -camMatrix.m[12] + object.position.x
        			innerMatrix[13] = -camMatrix.m[13] + object.position.y
        			innerMatrix[14] = camMatrix.m[14] - object.position.z
        			innerMatrix[15] = camMatrix.m[15] * 0.00001
        
        			objectMatrixWorld = BABYLON.Matrix.FromArray(innerMatrix)
                    objectMatrixWorld = objectMatrixWorld.scale(100)
        			style = this.getObjectCSSMatrix( objectMatrixWorld, cameraCSSMatrix)
                    var element = object.element
                    var cachedObject = this.cache.objects.get( object )
        
                    if ( cachedObject === undefined || cachedObject.style !== style ) {
        
                        element.style.webkitTransform = style
                        element.style.transform = style
        
                        var objectData = { style: style }
        
                        this.cache.objects.set( object, objectData )
                    }
                    if ( element.parentNode !== this.cameraElement ) {
                        this.cameraElement.appendChild( element )
                    }
        
                } else if ( object instanceof BABYLON.Scene ) {
                    for ( var i = 0, l = object.meshes.length; i < l; i ++ ) {
                        this.renderObject( object.meshes[ i ], scene, camera, cameraCSSMatrix )
                    }
                }
        	}    
        
        	render(scene, camera) {
                var projectionMatrix = camera.getProjectionMatrix()
        		var fov = projectionMatrix.m[5] * this.heightHalf
        
        		if (this.cache.camera.fov !== fov) {
        
        			if (camera.mode == BABYLON.Camera.PERSPECTIVE_CAMERA ) {
        				this.domElement.style.webkitPerspective = fov + 'px'
        				this.domElement.style.perspective = fov + 'px'
        			} else {
        				this.domElement.style.webkitPerspective = ''
        				this.domElement.style.perspective = ''
        			}
        			this.cache.camera.fov = fov
        		}
        
        		if ( camera.parent === null ) camera.computeWorldMatrix()
        
        		var matrixWorld = camera.getWorldMatrix().clone()
        		var rotation = matrixWorld.clone().getRotationMatrix().transpose()
        		var innerMatrix = matrixWorld.m
        
        		innerMatrix[1] = rotation.m[1]
        		innerMatrix[2] = -rotation.m[2]
        		innerMatrix[4] = -rotation.m[4]
        		innerMatrix[6] = -rotation.m[6]
        		innerMatrix[8] = -rotation.m[8]
        		innerMatrix[9] = -rotation.m[9]
        
        		matrixWorld = BABYLON.Matrix.FromArray(innerMatrix)
        
        		var cameraCSSMatrix = 'translateZ(' + fov + 'px)' + this.getCameraCSSMatrix( matrixWorld )
        
        		var style = cameraCSSMatrix + 'translate(' + this.widthHalf + 'px,' + this.heightHalf + 'px)'
        
        		if (this.cache.camera.style !== style && !this.isIE ) {
        			this.cameraElement.style.webkitTransform = style
        			this.cameraElement.style.transform = style
        			this.cache.camera.style = style
        		}
        
                this.renderObject(scene, scene, camera, cameraCSSMatrix )
        	}    
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
