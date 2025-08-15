document.addEventListener('DOMContentLoaded', () => {
    // Validation on blur
    // Selects all input, select, and textarea elements inside #contactModal
    document.querySelectorAll('#contactModal input, #contactModal select, #contactModal textarea').forEach(input => {
        // Adds an event listener to each element for when it loses its focus
        input.addEventListener('blur', () => {
            // Checks if the current input is valid using built-in HTML5 validation
            if (!input.checkValidity()) {
                // If invalid, add 'is-invalid' class to highlight the field with error styles (red colour)
                input.classList.add('is-invalid');
            } else {
                // If valid, remove the 'is-invalid' class to clear any error styles (green colour)
                input.classList.remove('is-invalid');
            }
        });
    });
});

