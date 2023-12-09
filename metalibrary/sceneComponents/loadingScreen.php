        BABYLON.DefaultLoadingScreen.prototype.displayLoadingUI = function () {
            if (document.getElementById("customLoadingScreenDiv")) {
                // Do not add a loading screen if there is already one
                document.getElementById("customLoadingScreenDiv").style.display = "initial";
                return;
            }
            this._loadingDiv = document.createElement("div");
            this._loadingDiv.id = "customLoadingScreenDiv";
            this._loadingDiv.innerHTML = "<div style='color: black;'> scene is currently loading... </div>"; // + '<p id="div0">100<p>'
            var customLoadingScreenCss = document.createElement('style');
            customLoadingScreenCss.type = 'text/css';
            customLoadingScreenCss.innerHTML = `
            #customLoadingScreenDiv{
                background-color: #333;
                color: white;
                font-size:50px;
                text-align:center;
            }
             #customLoadingScreenDiv p{
                background-color: black;
                color: white;
                font-size:50px;
                text-align:center;
            }
            `;
            document.getElementsByTagName('head')[0].appendChild(customLoadingScreenCss);
            this._resizeLoadingUI();
            window.addEventListener("resize", this._resizeLoadingUI);
            document.body.appendChild(this._loadingDiv);
        };
        
        BABYLON.DefaultLoadingScreen.prototype.hideLoadingUI = function(){
            document.getElementById("customLoadingScreenDiv").style.display = "none";
            console.log("scene is now loaded");
        }        
        