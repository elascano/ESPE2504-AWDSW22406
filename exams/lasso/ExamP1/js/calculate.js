document.addEventListener("DOMContentLoaded", function () {
    fetch('../Backend/index.php')
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector("#buildingTable tbody");
            const totalCostCell = document.getElementById("totalCost");
            let total = 0;

            data.forEach(building => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${building.id}</td>
                    <td>${building.name}</td>
                    <td>${building.cost}</td>
                    <td>${building.meters}</td>
                    <td>${building.owner}</td>
                    <td>${building.address}</td>
                `;
                tbody.appendChild(row);

                total += parseFloat(building.cost) || 0;
            });

            totalCostCell.textContent = `$${total.toFixed(2)}`;
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });
});
