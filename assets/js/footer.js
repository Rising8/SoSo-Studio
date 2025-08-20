document.addEventListener('DOMContentLoaded', () => {
    // Selects the newsletter form in the footer
    const forms = document.querySelectorAll('.newsletter-form');

    forms.forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault();

            // Selects the email input and the success message element
            const input = form.querySelector('input');
            const successMsg = form.querySelector('.valid-feedback');
            // Gets the trimmed value of the input (removes spaces if user puts any in accidentally)
            const email = input.value.trim();
            // Simple regex to validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Checks if the email is valid
            if (!emailRegex.test(email)) {
                // If invalid, remove success styling and add error styling
                input.classList.remove('is-valid');
                input.classList.add('is-invalid');
                // hide success if invalid
                successMsg.style.display = 'none';
            } else {
                // If valid, remove error styling and add success styling
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
                // show success message
                successMsg.style.display = 'block'; 
                // clear the input value after success
                input.value = '';

                // hide success after 3 seconds
                setTimeout(() => {
                    input.classList.remove('is-valid');
                    successMsg.style.display = 'none';
                }, 3000);
            }
        });
    });
});
