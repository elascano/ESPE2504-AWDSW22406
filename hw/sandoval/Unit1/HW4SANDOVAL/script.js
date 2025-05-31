document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('rentalForm');
  const typeSelect = document.getElementById('type');
  const hoursInput = document.getElementById('hours');
  const quantityInput = document.getElementById('quantity');
  const extraHoursInput = document.getElementById('extra_hours');
  const totalPriceEl = document.getElementById('totalPrice');

  const EXTRA_RATE = 5;

  function calculatePrice() {
    const selectedOption = typeSelect.options[typeSelect.selectedIndex];
    const projectorRate = Number(selectedOption.dataset.rate) || 0;
    const hours = Math.max(Number(hoursInput.value), 0);
    const quantity = Math.max(Number(quantityInput.value), 0);
    const extraHours = Math.max(Number(extraHoursInput.value), 0);

    const projectorCost = projectorRate * hours * quantity;
    const extraCost = EXTRA_RATE * extraHours;

    const total = projectorCost + extraCost;

    totalPriceEl.textContent = `Total estimated price: $${total.toFixed(2)}`;
  }

  // Calculate on any change
  [typeSelect, hoursInput, quantityInput, extraHoursInput].forEach(el =>
    el.addEventListener('input', calculatePrice)
  );

  // Initial calculation
  calculatePrice();
});
