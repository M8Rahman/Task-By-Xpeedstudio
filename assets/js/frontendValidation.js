// Location: assets/js/frontendValidation.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const amountInput = document.getElementById("amount");
    const buyerInput = document.getElementById("buyer");
    const receiptIdInput = document.getElementById("receipt_id");
    const itemsInput = document.getElementById("items");
    const emailInput = document.getElementById("buyer_email");
    const noteInput = document.getElementById("note");
    const cityInput = document.getElementById("city");
    const phoneInput = document.getElementById("phone");

    form.addEventListener("submit", function (event) {
        let isValid = true;

        resetValidation();

        if (!/^\d+$/.test(amountInput.value)) {
            showError(amountInput, "Amount must be a valid number.");
            isValid = false;
        }

        if (buyerInput.value.length > 255) {
            showError(buyerInput, "Buyer name cannot exceed 255 characters.");
            isValid = false;
        }

        if (receiptIdInput.value.length > 20) {
            showError(receiptIdInput, "Receipt ID cannot exceed 20 characters.");
            isValid = false;
        }

        if (itemsInput.value.length > 255) {
            showError(itemsInput, "Items cannot exceed 255 characters.");
            isValid = false;
        }

        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(emailInput.value)) {
            showError(emailInput, "Please enter a valid email address.");
            isValid = false;
        }

        if (noteInput.value.trim().split(/\s+/).length > 30) {
            showError(noteInput, "Note cannot exceed 30 words.");
            isValid = false;
        }

        if (cityInput.value.length > 20) {
            showError(cityInput, "City cannot exceed 20 characters.");
            isValid = false;
        }

        const phonePattern = /^\d{1,20}$/;
        if (!phonePattern.test(phoneInput.value)) {
            showError(phoneInput, "Phone number must be numeric and up to 20 digits.");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    function showError(input, message) {
        const errorDiv = document.createElement("div");
        errorDiv.className = "error-message";
        errorDiv.style.color = "red";
        errorDiv.innerText = message;
        input.classList.add("error");
        input.parentElement.appendChild(errorDiv);
    }

    function resetValidation() {
        const errors = document.querySelectorAll(".error-message");
        errors.forEach(function (error) {
            error.remove();
        });
        const inputs = document.querySelectorAll("input, textarea");
        inputs.forEach(function (input) {
            input.classList.remove("error");
        });
    }
});
