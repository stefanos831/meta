var camera = new BABYLON.UniversalCamera("UniversalCamera", new BABYLON.Vector3(0, 2, -25), scene);
        
            // Targets the camera to a particular position. In this case the scene origin
            camera.setTarget(BABYLON.Vector3.Zero());
        
            // Attach the camera to the canvas
            camera.attachControl(canvas, true); 
      
camera.inertia = 0.9; // 0.5
  camera.angularSensibilityX = 10;
  camera.angularSensibilityY = 10;    
    
camera.speed = 0.7  

