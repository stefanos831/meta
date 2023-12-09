import * as THREE from "./three.module.js";

import { Reflector } from './Reflector.js';
import { GLTFLoader } from './GLTFLoader.js';
import {
TextureLoader,
} from './three.module.js';

import { EffectComposer } from './EffectComposer.js';
import { RenderPass } from './RenderPass.js';
import { ShaderPass } from './ShaderPass.js';
import { UnrealBloomPass } from './UnrealBloomPass.js';
import { CopyShader } from './CopyShader.js';
import { LuminosityHighPassShader } from './LuminosityHighPassShader.js';

import { FirstPersonControls } from './FirstPersonControls.js';
import { OrbitControls } from './OrbitControls.js';

import { createFPS } from './FPS.js';

var composer, params = {
    exposure: 0.5,
    bloomStrength: 0.2,
    bloomThreshold: 0,
    bloomRadius: 0
  };


			let SCREEN_WIDTH = window.innerWidth;
			let SCREEN_HEIGHT = window.innerHeight;
			const FLOOR = - 250;

			let camera, controls, scene, renderer;
			let container, stats;

			const NEAR = 0.1; // 10
			const FAR = 3000;



			let light;


			const clock = new THREE.Clock();


			init();
			animate();

createFPS()

			function init() {

				container = document.createElement( 'div' );
				document.body.appendChild( container );

				// CAMERA

				camera = new THREE.PerspectiveCamera( 55, SCREEN_WIDTH / SCREEN_HEIGHT, NEAR, FAR );
				camera.position.set( 0, 1, 0 );

				// SCENE

				scene = new THREE.Scene();
				scene.background = new THREE.Color( "black" );
			//	scene.fog = new THREE.Fog( 0x59472b, 1000, FAR );

				// LIGHTS
				
const sun = new THREE.SphereBufferGeometry(10, 200, 200)
const materialsun = new THREE.MeshBasicMaterial({ wireframe: false, opacity: 0, transparent: true  })
const meshsun = new THREE.Mesh(sun, materialsun)

meshsun.scale.set(10, 10, 10)
meshsun.position.y = 1000
meshsun.position.z = -1000
meshsun.position.x = -1000

	
const light2 = new THREE.DirectionalLight( 0xffffff, 0.2, 1000 );	

light2.castShadow = true; // default false

	
//Set up shadow properties for the light
light2.shadow.mapSize.width = 512; // default
light2.shadow.mapSize.height = 512; // default
light2.shadow.camera.near = 1; // default
light2.shadow.camera.far = 5000; // default
light2.shadowCameraLeft = -5000;
light2.shadowCameraRight = 5000;
light2.shadowCameraTop = 5000;
light2.shadowCameraBottom = -5000;	
	
light2.shadow.focus = 1; // default	
light2.shadowCameraVisible = true;
	
light2.position.z = 10
light2.position.x = 10

meshsun.add(light2);
scene.add(meshsun);


  var lightHemisphere = new THREE.HemisphereLight( 0xeeeeff, 0x777788, 0.5 );
  lightHemisphere.position.set( 0, 10, 0 );
 // scene.add( lightHemisphere );

				const ambient = new THREE.AmbientLight( 0x444444, 0.5 );
				scene.add( ambient );

				light = new THREE.SpotLight( 0xffffff, 1, 0, Math.PI / 1, 0.3 );
				light.position.set( 0, 10, 0 );


				scene.add( light );


				// RENDERER

				renderer = new THREE.WebGLRenderer( { antialias: true, powerPreference: "high-performance", alpha: true } );
				renderer.setPixelRatio( window.devicePixelRatio );
				//renderer.setSize( SCREEN_WIDTH, SCREEN_HEIGHT );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

renderer.outputEncoding = THREE.sRGBEncoding;
renderer.gammaInput = true;
renderer.gammaOutput = true;

  renderer.shadowMap.enabled = true;
  renderer.shadowMap.type = THREE.PCFSoftShadowMap; // default THREE.PCFShadowMap	

const renderScene = new RenderPass( scene, camera );

				const bloomPass = new UnrealBloomPass( new THREE.Vector2( window.innerWidth, window.innerHeight ), 1.5, 0.4, 0.85 );
				bloomPass.threshold = params.bloomThreshold;
				bloomPass.strength = params.bloomStrength;
				bloomPass.radius = params.bloomRadius;

				composer = new EffectComposer( renderer );
				composer.addPass( renderScene );
				composer.addPass( bloomPass );

				//

				renderer.shadowMap.enabled = true;
				renderer.shadowMap.type = THREE.PCFShadowMap;

				// CONTROLS

				controls = new FirstPersonControls( camera, renderer.domElement );

				controls.lookSpeed = 0.0825; // 0.0125
				controls.movementSpeed = 0;
				controls.noFly = true;
				//controls.lookVertical = true;
                controls.lookVertical = false;
      
//var cameraRotationProxyX = window.innerWidth, 3.44, -3.44;
                
                controls.heightMax = -2;
                controls.heightMin = 0.2;
                controls.verticalMax = 0.5;
                controls.verticalMin = 0.2;
			//	controls.lookAt( scene.position );




document.addEventListener('keydown', function(event)
    {
      var code = event.keyCode || event.which;
      if (code === 27) { 

    var answer = window.confirm("Disable Looking?");
if (answer) {
    //yes
controls.lookSpeed = 0; // 0.0125
}
else {
    //no
controls.lookSpeed = 0.0525; // 0.0125    
} 
      }

    });


  const controlsOrbit = new OrbitControls(camera, renderer.domElement);

  controlsOrbit.enableDamping = false;
  controlsOrbit.enablePan = false;
  controlsOrbit.enableZoom = false; 
  controlsOrbit.maxDistance = 0.001; // Set our max zoom out distance (mouse scroll)
  controlsOrbit.minDistance = 0; // Set our min zoom in distance (mouse scroll)


	window.addEventListener( 'resize', onWindowResize );

			}

			function onWindowResize() {

				SCREEN_WIDTH = window.innerWidth;
				SCREEN_HEIGHT = window.innerHeight;

				camera.aspect = SCREEN_WIDTH / SCREEN_HEIGHT;
				camera.updateProjectionMatrix();

				renderer.setSize( SCREEN_WIDTH, SCREEN_HEIGHT );


			}







// Second room model

function addMainRoom(){

    const gltfLoader = new GLTFLoader();
    gltfLoader.load('../Models/NewLibraryCartoon.glb', (gltf) => {
      const LaserRifle = gltf.scene;
      
    LaserRifle.scale.set(2, 2, 2);
	LaserRifle.position.y = -5
	LaserRifle.position.z = 10
	LaserRifle.position.x = 0
	
      scene.add( LaserRifle );

});  
    
}
addMainRoom()







			function animate() {

				requestAnimationFrame( animate );

				render();
	

			}

			function render() {

				const delta = clock.getDelta();

				
				controls.update( delta );

		//		renderer.clear();
		//		renderer.render( scene, camera );
composer.render();


			}