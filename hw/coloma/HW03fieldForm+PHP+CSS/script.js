 function computePerformance() {
      const name = document.getElementById("compName").value;
      const processor = parseInt(document.getElementById("processor").value);
      const ram = parseInt(document.getElementById("ram").value);
      const storage = parseInt(document.getElementById("storage").value);
      const gpu = parseInt(document.getElementById("gpu").value);
      const screen = parseFloat(document.getElementById("screen").value);
      const battery = parseFloat(document.getElementById("battery").value);

      const result = document.getElementById("result");

      if ([processor, ram, storage, gpu, screen, battery].some(isNaN)) {
        result.innerHTML = "<span style='color:red;'>⚠️ Please fill all fields correctly.</span>";
        return false;
      }

      // Score formula
      const score = (processor * 20) + (ram * 2) + (storage * 0.1) +
                    (gpu * 15) + (screen * 1.5) + (battery * 2);

      result.innerHTML = `
        <strong>✅ ${name}'s Estimated Performance Score:</strong> <br>
        <h3 style="color:#2E7D32;">${score.toFixed(1)}</h3>
        <code>
          Score = (Processor × 20) + (RAM × 2) + (Storage × 0.1) +<br>
                  (GPU × 15) + (Screen × 1.5) + (Battery × 2)<br><br>

          = (${processor}×20) + (${ram}×2) + (${storage}×0.1) +<br>
            (${gpu}×15) + (${screen}×1.5) + (${battery}×2)
        </code>
      `;
      return false; // prevent form submit
    }