function calculate() {
    const quantity = parseInt(document.getElementById('quantity').value);
    const price = parseFloat(document.getElementById('price').value);
  
    if (!isNaN(quantity) && !isNaN(price)) {
      const subtotal = quantity * price;
      const total = subtotal * 1.12;
  
      document.getElementById('subtotal').value = subtotal.toFixed(2);
      document.getElementById('total').value = total.toFixed(2);
    }
  }
  