
        // pointer
            var pointer = BABYLON.Mesh.CreateSphere("Sphere", 16.0, 1, scene, false, BABYLON.Mesh.DOUBLESIDE);
            // move the sphere upward 1/2 of its height
            pointer.position.x = 0.0;
            pointer.position.y = 0.0;
            pointer.position.z = 0.0;
            pointer.isPickable = false;
            pointer.isVisible = false;
        
            var moveForward = false;
            var moveBackward = false;
            var moveRight = false;
            var moveLeft = false;
            var jump = false;
            
            var onKeyDown = function (event) {
                switch (event.keyCode) {
                    case 38: // up
                    case 87: // w
                        moveForward = true;
                        break;
        
                    case 37: // left
                    case 65: // a
                        moveLeft = true; 
                        
                        break;
        
                    case 40: // down
                    case 83: // s
                        moveBackward = true;
                        break;
        
                    case 39: // right
                    case 68: // d
                        moveRight = true;
                        break;
        
                    case 32: // space
                    
                    jump = true; 
                    
                        break;
                        
                                       
                }
            };
        
            var onKeyUp = function (event) {
                switch (event.keyCode) {
                    case 38: // up
                    case 87: // w
                        moveForward = false;
                        break;
        
                    case 37: // left
                    case 65: // a
                        moveLeft = false;
                        break;
        
                    case 40: // down
                    case 83: // a
                        moveBackward = false;
                        break;
        
                    case 39: // right
                    case 68: // d
                        moveRight = false;
                        break;
                        
                    case 32: // space
                    
                    jump = false; 
                    
                        break;                        
                        
                }
            };
        
            document.addEventListener('keydown', onKeyDown, false);
            document.addEventListener('keyup', onKeyUp, false);
            
            
            scene.registerBeforeRender(function () {
                  
                camera.position.x = hero.position.x;
                camera.position.y = hero.position.y + 1;
                camera.position.z = hero.position.z;
                pointer.position = camera.getTarget(); 
                
                var forward = camera.getTarget().subtract(camera.position).normalize();
                forward.y = 0;
                var right = BABYLON.Vector3.Cross(forward, camera.upVector).normalize();
                right.y = 0;
                
                var SPEED = 10;
                let f_speed = 0;
                var s_speed = 0;
                var u_speed = 0;			
  
/*
           function isOnGround () {
                const info = scene.pickWithRay(new BABYLON.Ray(hero.position, new BABYLON.Vector3(0, -1, 0)), e => {
                    return !(e === hero)
                })
                return info.hit && (Math.round(info.pickedPoint.y * 1000) / 1000 + 0.1) >= (hero.getBoundingInfo().minimum.y + hero.position.y)
            }   


  
if (isOnGround()) { 
        
                if (jump) {
                   
                    hero.physicsImpostor.applyImpulse(new BABYLON.Vector3(0, 500, 0), hero.getAbsolutePosition())
                    //jump === false
                    console.log("jump")
                }
                
}   
*/

                if (moveForward) {
                    f_speed = SPEED;
                }
                if (moveBackward) {
                    f_speed = -SPEED;
                }
        
                if (moveRight) {
                    s_speed = SPEED;
                }
        
                if (moveLeft) {
                    s_speed = -SPEED;
                }
                
                var move = (forward.scale(f_speed)).subtract((right.scale(s_speed))).subtract(camera.upVector.scale(u_speed));
                
                hero.physicsImpostor.physicsBody.velocity.x = move.x;
                hero.physicsImpostor.physicsBody.velocity.z = move.z;
               // hero.physicsImpostor.physicsBody.velocity.y = move.y;
            

            
                
            });
        
        
        
            //Mouse
            //We start without being locked.
        	
        	
var isLocked = false;
 
    document.addEventListener('keydown', function(event)
    {
      var code = event.keyCode || event.which;
      if (code === 80) {  // P key

		//true/false check if we're locked, faster than checking pointerlock on each single click.
		if (!isLocked) {
			canvas.requestPointerLock = canvas.requestPointerLock || canvas.msRequestPointerLock || canvas.mozRequestPointerLock || canvas.webkitRequestPointerLock || false;
			if (canvas.requestPointerLock) {
				canvas.requestPointerLock();
			}
		}
isLocked = true;
// scene.onPointerDown = e => canvas.requestPointerLock()

      }
    else { 

isLocked = false;
  
    }  
        
    });         	
        	
        	
        	/*
        	// On click event, request pointer lock
        	scene.onPointerDown = function (evt) {
        		
        		//true/false check if we're locked, faster than checking pointerlock on each single click.
        		if (!isLocked) {
        			canvas.requestPointerLock = canvas.requestPointerLock || canvas.msRequestPointerLock || canvas.mozRequestPointerLock || canvas.webkitRequestPointerLock;
        			if (canvas.requestPointerLock) {
        				canvas.requestPointerLock();
        			}
        		}
        		
        		//continue with shooting requests or whatever :P
        		//evt === 1 (mouse wheel click (not scrolling))
        		//evt === 2 (right mouse click)
        	};
        */	
        
        	// Event listener when the pointerlock is updated (or removed by pressing ESC for example).
        	var pointerlockchange = function () {
        		var controlEnabled = document.mozPointerLockElement || document.webkitPointerLockElement || document.msPointerLockElement || document.pointerLockElement || null;
        		
        		// If the user is already locked
        		if (!controlEnabled) {
        			//camera.detachControl(canvas);
        			isLocked = false;
        		} else {
        			//camera.attachControl(canvas);
        			isLocked = true;
        		}
        	};
        	
        	// Attach events to the document
        	document.addEventListener("pointerlockchange", pointerlockchange, false);
        	document.addEventListener("mspointerlockchange", pointerlockchange, false);
        	document.addEventListener("mozpointerlockchange", pointerlockchange, false);
        	document.addEventListener("webkitpointerlockchange", pointerlockchange, false);
            
            