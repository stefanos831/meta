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
    

 

// Load the model
 BABYLON.SceneLoader.ImportMesh("", "", "LibraryClean.glb", scene, function (newMeshes, skeletons) {
        var model = newMeshes[0];
        

var DBscale = 2        
var PI = Math.PI / -1;
        model.rotation = new BABYLON.Vector3(0, PI, 0);
        model.position = new BABYLON.Vector3(0, -1, 0);
        model.scaling = new BABYLON.Vector3(DBscale, DBscale, DBscale);

 // Replace materials
let pedestals = scene.getMeshByName("pedestals");
pedestals.material = material1;  

//let bookshelves_left = scene.getMeshByName("bookshelves_left");
//bookshelves_left.material = material2;  

//let bookshelves_right = scene.getMeshByName("bookshelves_right");
//bookshelves_right.material = material2;  

//let bookshelves_top = scene.getMeshByName("bookshelves_top");
//bookshelves_top.material = material2; 

//let columns_bottom = scene.getMeshByName("columns_bottom");
//columns_bottom.material = material3; 

//let columns_top = scene.getMeshByName("columns_top");
//columns_top.material = material3; 

//let middle_pillar = scene.getMeshByName("middle_pillar");
//middle_pillar.material = material3; 

//let ledge = scene.getMeshByName("ledge");
//ledge.material = material3; 

//let baluster_side = scene.getMeshByName("baluster_side");
//baluster_side.material = material3; 

//let baluster_front = scene.getMeshByName("baluster_front");
//baluster_front.material = material3; 

let arch_main = scene.getMeshByName("arch_main");
arch_main.material = material3; 

let arch_side = scene.getMeshByName("arch_side");
arch_side.material = material3; 

let ceiling_main = scene.getMeshByName("ceiling_main");
ceiling_main.material = material3; 

let ceiling_side = scene.getMeshByName("ceiling_side");
ceiling_side.material = material3; 

let building = scene.getMeshByName("building");
building.material = material2_2;
building.material.backFaceCulling = false;

//let Book0 = scene.getMeshByName("Book0.017");
//Book0.material = material4; 


    }); 