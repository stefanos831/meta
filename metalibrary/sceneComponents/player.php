var hero = BABYLON.Mesh.CreateBox('hero', 4, scene, false, BABYLON.Mesh.FRONTSIDE);
hero.position.y = 5.0;
hero.isVisible = false
hero.physicsImpostor = new BABYLON.PhysicsImpostor(hero, BABYLON.PhysicsImpostor.SphereImpostor, { mass: 50, friction: 0 }, scene);		
hero.physicsImpostor.physicsBody.fixedRotation = true;
hero.physicsImpostor.physicsBody.updateMassProperties();
hero.physicsImpostor.physicsBody.angularDamping = 0 // 1
hero.physicsImpostor.physicsBody.linearDamping = 0 // 0.5 



            