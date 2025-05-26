function calculatePerformance() {
    var cpuCores = document.getElementById("cpu_cores").value;
    var cpuFrecuency = document.getElementById("cpu_frecuency").value;

    if (cpuCores && cpuFrecuency) {
        var performance = cpuCores * cpuFrecuency;
        
        document.getElementById("performance").textContent = performance + " GHz";

        return true;
    } else {
        alert("Por favor, ingrese valores válidos para los núcleos y la frecuencia.");
        return false;
    }
}
