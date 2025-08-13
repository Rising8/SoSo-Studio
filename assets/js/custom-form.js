document.addEventListener('DOMContentLoaded', () => {
    // Validation on blur
    document.querySelectorAll('#contactModal input, #contactModal select, #contactModal textarea').forEach(input => {
        input.addEventListener('blur', () => {
            if (!input.checkValidity()) {
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });
    });
});

