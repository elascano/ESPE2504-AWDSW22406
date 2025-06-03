function calculateAverage() {
    const grade1 = parseFloat(document.getElementById('grade1').value);
    const grade2 = parseFloat(document.getElementById('grade2').value);
    const grade3 = parseFloat(document.getElementById('grade3').value);

    if (isNaN(grade1) || isNaN(grade2) || isNaN(grade3)) {
        document.getElementById('result').textContent = "Please enter all grades.";
        return;
    }

    const average = (grade1 + grade2 + grade3) / 3;
    document.getElementById('result').textContent = "Average: " + average.toFixed(2);
}
