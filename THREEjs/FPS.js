// FPS Meter Component

function createFPS() {


  let previousTime = Date.now();
  let frames = 0;
  let refreshRate = 1000;

  let fpsMeter = document.createElement("div");
  fpsMeter.id = "fpsMeter";
  document.body.appendChild(fpsMeter);

  requestAnimationFrame(function loop() {
    const TIME = Date.now();
    frames++;
    if (TIME > previousTime + refreshRate) {
      let fps = Math.round((frames * refreshRate) / (TIME - previousTime));
      previousTime = TIME;
      frames = 0;
      fpsMeter.innerHTML = "FPS: " + fps * (1000 / refreshRate);
    }
    requestAnimationFrame(loop);
  });

  fpsMeter.style.position = "fixed";
  fpsMeter.style.top = "25px";
  fpsMeter.style.right = "25px";
  fpsMeter.style.background = "rgba(0, 0, 0, 0.5)";
  fpsMeter.style.padding = "10px";
  fpsMeter.style.color = "rgba(255, 255, 255, 0.75)";
  fpsMeter.style.fontFamily = "Monospace";
  fpsMeter.style.fontSize = "24px";
  fpsMeter.style.zIndex = "10000";


}

export { createFPS };