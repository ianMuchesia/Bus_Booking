</main>
<script>
function generateRadioButtons() {
  const radioOptionsDiv = document.getElementById("radioOptions");
  radioOptionsDiv.innerHTML = ""; // Clear previous options if any

  const today = new Date();
  const days = ["Today", "Tomorrow"];
  for (let i = 0; i <= 4; i++) {
    const nextDay = new Date(today);
    nextDay.setDate(today.getDate() + i);
    const formattedDate = nextDay.toISOString().split('T')[0]; // Convert date to "YYYY-MM-DD" format

    const radioLabel = document.createElement("label");
    radioLabel.innerHTML = `<input type="radio" name="selected_day" value="${formattedDate}"> ${formattedDate} <br>`;
    radioOptionsDiv.appendChild(radioLabel);
  }
}

generateRadioButtons()
</script>
</body>
</html>