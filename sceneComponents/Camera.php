// Need a free camera for collisions

var camera = new BABYLON.FreeCamera("FreeCamera", new BABYLON.Vector3(0, 3, -5), scene); //-27, -5, -37
camera.attachControl(canvas, true);
        
    camera.inertia = 0.5; // 0.2
    camera.keysUp = [87, 38];
    camera.keysDown = [83, 40];
    camera.keysLeft = [65, 37];
    camera.keysRight = [68, 39]; 

    
//camera.target = new BABYLON.Vector3(40, 0, -40);    
  
  

  
  
  

    
    
