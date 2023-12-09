//Ground
const ground = BABYLON.MeshBuilder.CreateBox("box", {height: 0.1, width: 44, depth: 150 });

    var materialGround = new BABYLON.StandardMaterial("Texture", scene);
    materialGround.diffuseTexture = new BABYLON.Texture("Textures/Wood_Floor_006_COLOR.jpg", scene);
    
    materialGround.diffuseTexture.uScale = 60;
    materialGround.diffuseTexture.vScale = 20;    
    
    ground.material = materialGround; 

ground.position.y = -1   

//ground.isVisible = false
//ground.receiveShadows = true;
        
ground.physicsImpostor = new BABYLON.PhysicsImpostor(ground, BABYLON.PhysicsImpostor.BoxImpostor, { mass: 0, restitution: 0 }, scene);              