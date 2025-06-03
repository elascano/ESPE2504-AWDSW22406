document.addEventListener("DOMContentLoaded", () => {
    const table = document.querySelector("table");

    if (table) {
        let totalStockValue = 0;

        // Recorre cada fila (excepto el encabezado)
        for (let i = 1; i < table.rows.length; i++) {
            const row = table.rows[i];
            const priceCell = row.cells[3]; // Columna de precio
            const stockCell = row.cells[4]; // Columna de stock

            if (priceCell && stockCell) {
                const price = parseFloat(priceCell.textContent);
                const stock = parseInt(stockCell.textContent);
                if (!isNaN(price) && !isNaN(stock)) {
                    totalStockValue += price * stock;
                }
            }
        }

        const totalDiv = document.createElement("div");
        totalDiv.textContent = `Valor total del stock disponible: $${totalStockValue.toFixed(2)}`;
        totalDiv.style.marginTop = "10px";
        totalDiv.style.fontWeight = "bold";
        table.parentNode.insertBefore(totalDiv, table.nextSibling);
    }
});
