document.addEventListener("DOMContentLoaded", function () {
    const backendUrl = "./Backend/index.php";

    const tableBody = document.querySelector("#buildingTable tbody");
    const totalCostCell = document.getElementById("totalCost");

    function loadBuildings(data) {
        tableBody.innerHTML = "";
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
            tableBody.appendChild(row);
            total += parseFloat(building.cost) || 0;
        });

        totalCostCell.textContent = `$${total.toFixed(2)}`;
    }

    function fetchBuildings() {
        fetch(backendUrl)
            .then(res => res.json())
            .then(data => loadBuildings(data))
            .catch(err => console.error("Fetch error:", err));
    }

    document.getElementById("addForm").addEventListener("submit", function (e) {
        e.preventDefault();
        const building = {
            name: document.getElementById("name").value,
            cost: document.getElementById("cost").value,
            meters: document.getElementById("meters").value,
            owner: document.getElementById("owner").value,
            address: document.getElementById("address").value
        };

        fetch(backendUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(building)
        })
        .then(res => res.json())
        .then(data => {
            alert("Building added!");
            fetchBuildings();
        })
        .catch(err => console.error("Add error:", err));
    });

    document.getElementById("searchForm").addEventListener("submit", function (e) {
        e.preventDefault();
        const id = document.getElementById("searchId").value;
        fetch(`${backendUrl}?id=${id}`)
            .then(res => res.json())
            .then(data => loadBuildings(data))
            .catch(err => console.error("Search error:", err));
    });

    fetchBuildings(); // Load all on start
});
