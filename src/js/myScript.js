
function enableButton() {
    const checkbox = document.getElementById('privacyCheckbox');
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.disabled = !checkbox.checked;
}
