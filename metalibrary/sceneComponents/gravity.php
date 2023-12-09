
    
  //Set gravity for the scene (G force like, on Y-axis)
            scene.gravity = new BABYLON.Vector3(0, -0.9, 0);
        
            // Enable Collisions
            scene.collisionsEnabled = true;
        
            //Then apply collisions and gravity to the active camera
            camera.checkCollisions = true;
            camera.applyGravity = true;
        
            //Set the ellipsoid around the camera (e.g. your player's size)
            camera.ellipsoid = new BABYLON.Vector3(1.5, 1, 1.5);
        
            //finally, say which mesh will be collisionable
            ground.checkCollisions = true;
           // box.checkCollisions = true;    
    
    
    