            // Lights
            var light0 = new BABYLON.DirectionalLight("Omni", new BABYLON.Vector3(0, 40, 30), scene);
            var light1 = new BABYLON.PointLight("Omni", new BABYLON.Vector3(0, 20, 0), scene);
            light1.position = new BABYLON.Vector3(10, 3, 0);
            light1.intensity = 1;             
            
            var light2 = new BABYLON.HemisphericLight("light1", new BABYLON.Vector3(1, 1, 0), scene);
            light2.intensity = 1;  
     
	var lightSphere = BABYLON.Mesh.CreateSphere("sphere", 0.01, 0.01, scene);
	lightSphere.position = light1.position;
	lightSphere.material = new BABYLON.StandardMaterial("light", scene);
	lightSphere.material.emissiveColor = new BABYLON.Color3(1, 1, 0);   