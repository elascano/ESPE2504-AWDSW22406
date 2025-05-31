function registerComputer() {
  const brand = document.getElementById("brand").value;
  const model = document.getElementById("model").value;
  const processor = document.getElementById("processor").value;
  const ram = document.getElementById("ram").value;
  const storage = document.getElementById("storage").value;
  const condition = document.getElementById("condition").value;
  const otherFeatures = document.getElementById("otherFeatures").value;

  const selectedTags = [];
  const tagCheckboxes = document.querySelectorAll(".tag-checkbox");
  tagCheckboxes.forEach(checkbox => {
    if (checkbox.checked) {
      selectedTags.push(checkbox.value);
    }
  });

  if (!brand || !model || !processor || !ram || !storage || !condition) {
    alert("Please fill in all required fields.");
    return;
  }

  const tagHTML = selectedTags.map(tag => `<span class="tag">${tag}</span>`).join("");

  const summary = `
    <h3>Computer Registered:</h3>
    <ul>
      <li><strong>Brand:</strong> ${brand}</li>
      <li><strong>Model:</strong> ${model}</li>
      <li><strong>Processor:</strong> ${processor}</li>
      <li><strong>RAM:</strong> ${ram} GB</li>
      <li><strong>Storage:</strong> ${storage} GB</li>
      <li><strong>Condition:</strong> ${condition}</li>
      <li><strong>Other Features:</strong> ${otherFeatures || 'N/A'}</li>
    </ul>
    ${selectedTags.length > 0 ? `<h4>Tags:</h4><div>${tagHTML}</div>` : ''}
  `;

  document.getElementById("result").innerHTML = summary;
}
