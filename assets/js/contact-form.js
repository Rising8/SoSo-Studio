document.addEventListener('DOMContentLoaded', () => {
    // Selects the contact modal
    const modal = document.querySelector('#contactModal');
    if (!modal) return; // If the modal doesn't exist, it will exit

    // Disables CF7 HTML5 in-built validation
    modal.querySelectorAll('.wpcf7-form').forEach(form => {
        form.setAttribute('novalidate', 'novalidate');
    });

    // Validators for each field (name and email)
    const validators = {
        'contact-form-name': value => value.trim() !== '' && /^[A-Za-z\s]+$/.test(value),
        'contact-form-email': value => value.trim() !== '' && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)
    };

    // Tracks if user has interacted with field
    const touched = {};

    // Validates individual fields
    const validateField = input => {
        const val = input.value.trim();
        const id = input.id;
        const isValid = validators[id] ? validators[id](val) : true;
        const feedback = input.closest('.mb-3')?.querySelector('.invalid-feedback');
        
        // Skips styling if not touched yet
        if (!touched[id]) return true; 

        if (!isValid) {
            // Field is invalid: add red border styling and remove green border styling, shows feedback
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');
            if (feedback) feedback.style.display = 'block';
        } else {
            // Field is valid: add green border styling and remove red border styling, hides feedback
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            if (feedback) feedback.style.display = 'none';
        }
        return isValid;
    };

    // Initialize fields
    modal.querySelectorAll('#contact-form-name, #contact-form-email').forEach(input => {
        // Initially the fields are not touched
        touched[input.id] = false;

        // Tracks user interaction
        input.addEventListener('input', () => {
            // If user touches, mark as touch
            touched[input.id] = true;
            validateField(input);
        });

        // Also validate when the field loses focus
        input.addEventListener('blur', () => validateField(input));
    });

    // Handles form submission
    modal.querySelectorAll('.wpcf7-form').forEach(form => {
        form.addEventListener('submit', e => {
            let hasError = false;

            // Validate each required field
            ['contact-form-name', 'contact-form-email'].forEach(id => {
                const field = form.querySelector(`#${id}`);
                if (field) {
                    // Marks fields as touched on submission
                    touched[id] = true; 
                    // Stops submission if invalid fields
                    if (!validateField(field)) hasError = true;
                }
            });
            // Prevents form submission if there are any errors
            if (hasError) e.preventDefault(); 
        });
    });
});
