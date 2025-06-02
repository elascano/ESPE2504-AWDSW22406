window.onload = function () {
  const form = document.querySelector('form');

  form.onsubmit = function (e) {
    e.preventDefault();

    const name = document.getElementById('productname').value;

    const categorySelect = form.select;
    const categoryText =
      categorySelect.options[categorySelect.selectedIndex].text;

    const description = document.getElementById('quantity').value;

    const price = document.getElementById('price').value;
    const expiration = document.getElementById('expiration').value;

    const info = `
        <h3>Submitted Data:</h3>
        <p><strong>Product Name:</strong> ${name}</p>
        <p><strong>Category:</strong> ${categoryText}</p>
        <p><strong>Description:</strong> ${description}</p>
        <p><strong>Price:</strong> $${parseFloat(price).toFixed(2)}</p>
        <p><strong>Expiration Date:</strong> ${expiration}</p>
    `;

    document.getElementById('showResult').innerHTML = info;

    // Clean form
    form.reset();
  };
};
