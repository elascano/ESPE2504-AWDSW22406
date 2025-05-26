document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registers');
    const numberOfKeys = document.getElementById('ComputeNumber1');
    const keycapPrice = document.getElementById('ComputeNumber2');
    const keyboardPrice = document.getElementById('ComputeNumber3');
    const discount = document.getElementById('discount');
    const subtotal = document.getElementById('subtotal');
    const discountAmount = document.getElementById('discountAmount');
    const totalPrice = document.getElementById('totalPrice');

    function calculate() {
        const keys = parseInt(numberOfKeys.value) || 0;
        const keycap = parseFloat(keycapPrice.value) || 0;
        const keyboard = parseFloat(keyboardPrice.value) || 0;
        const disc = parseFloat(discount.value) || 0;

        const sub = (keys * keycap) + keyboard;
        const discAmount = sub * (disc / 100);
        const total = sub - discAmount;

        subtotal.value = sub.toFixed(2);
        discountAmount.value = discAmount.toFixed(2);
        totalPrice.textContent = total.toFixed(2);
    }

    form.addEventListener('input', calculate);
    calculate();
});