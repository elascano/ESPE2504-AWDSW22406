function calculateFood() {
  const petName = document.getElementById("petName").value;
  const petType = document.getElementById("petType").value;
  const weight = parseFloat(document.getElementById("weight").value);

  let factor;
  switch (petType) {
    case "dog": factor = 30; break;
    case "cat": factor = 25; break;
    case "rabbit": factor = 15; break;
    default: factor = 0;
  }

  const foodGrams = weight * factor;
  document.getElementById("result").textContent =
    `${petName} needs approximately ${foodGrams.toFixed(1)}g of food per day.`;
}
