  document.getElementById("phoneForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const price = parseFloat(document.getElementById("price").value);
    const quantity = parseInt(document.getElementById("quantity").value);
    const discount = parseFloat(document.getElementById("discount").value);

    if (isNaN(price) || isNaN(quantity) || isNaN(discount)) {
      alert("Please fill out the numeric fields correctly.");
      return;
    }

    const subtotal = price * quantity;
    const totalDiscount = subtotal * (discount / 100);
    const finalTotal = subtotal - totalDiscount;

    const result = document.getElementById("result");
    result.classList.remove("d-none");
    result.innerHTML = `
      <strong>Total Amount:</strong> $${finalTotal.toFixed(2)} <br/>
      (Subtotal: $${subtotal.toFixed(2)} − Discount: $${totalDiscount.toFixed(2)})
    `;
  });