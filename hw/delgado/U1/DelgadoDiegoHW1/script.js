function submitDevice() {
  const type = document.getElementById("deviceType").value;
  const serial = document.getElementById("identifier").value;
  const os = document.getElementById("os").value;
  const memory = document.getElementById("memory").value;
  const year = document.getElementById("year").value;
  const notes = document.getElementById("notes").value;

  const accessoryList = [];
  document.querySelectorAll(".accessories input[type=checkbox]").forEach(item => {
    if (item.checked) accessoryList.push(item.value);
  });

  if (!type || !serial || !os || !memory || !year) {
    alert("All mandatory fields must be completed.");
    return;
  }

  const accessoriesHTML = accessoryList.length
    ? `<p><strong>Accessories:</strong> ${accessoryList.join(", ")}</p>`
    : '';

  const resultHTML = `
    <div class="summary-card">
      <h2>Device Recorded</h2>
      <ul>
        <li><strong>Type:</strong> ${type}</li>
        <li><strong>Serial Number:</strong> ${serial}</li>
        <li><strong>OS:</strong> ${os}</li>
        <li><strong>Memory:</strong> ${memory} GB</li>
        <li><strong>Purchase Year:</strong> ${year}</li>
      </ul>
      ${accessoriesHTML}
      <p><strong>Notes:</strong> ${notes || "None"}</p>
    </div>
  `;

  document.getElementById("summaryDisplay").innerHTML = resultHTML;
}
