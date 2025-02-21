document.getElementById("signupForm").addEventListener("submit", function(event) {
    let valid = true;
    let inputs = document.querySelectorAll("input");

    inputs.forEach(input => {
        let errorSpan = input.nextElementSibling;

        if (!input.checkValidity()) {
            errorSpan.textContent = input.validationMessage;
            errorSpan.style.display = "block";
            input.style.borderColor = "red";
            valid = false;
        } else {
            errorSpan.textContent = "";
            errorSpan.style.display = "none";
            input.style.borderColor = "green";
        }
    });

    if (!valid) event.preventDefault(); // Prevent form submission if invalid
});
