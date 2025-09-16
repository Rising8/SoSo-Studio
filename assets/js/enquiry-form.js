document.addEventListener('DOMContentLoaded', () => {
    // Gets the rug enquiry form
    const rugModal = document.getElementById('rugEnquireModal');
    const form = document.querySelector('.rug-enquire-form');

    // Pre-fill rug name and source page when the modal opens
    if (rugModal) {
        rugModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const rugName = button.getAttribute('data-rug-name');
            const sourcePage = button.getAttribute('data-source-page');

            // Sets the values in the modal form 
            rugModal.querySelector('#rug-name').value = rugName || '';
            rugModal.querySelector('#source-page').value = sourcePage || '';
        });
    }

    // Stops executing if the form is not present
    if (!form) return;

    // Disables HTML5 built-in validation
    form.setAttribute('novalidate', 'novalidate');

    // Validation rules
    const validators = {
        // Name: Only letters and spaces allowed
        'enquiry-form-name': value => /^[A-Za-z\s]+$/.test(value.trim()),
        // Email: Standard email format
        'enquiry-form-email': value => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim()),
        // Phone: Optional but validated upon entering input
        'enquiry-form-phone': value => {
            const v = value.trim();
            if (v === '') return true;
            // Allows + at start, digits, spaces, dashes, parentheses, minimum 7 characters, maximum 15
            return /^\+?[\d\s\-()]{7,15}$/.test(v);
        }
    };

    // List of fields that require validation
    const fieldsToValidate = ['enquiry-form-name', 'enquiry-form-email', 'enquiry-form-phone'];

    // Function to validate a single field
    const validateField = input => {
        const id = input.id;
        const val = input.value.trim();
        const feedback = input.closest('.mb-3')?.querySelector('.invalid-feedback');

        // Skips validation for non-tracked fields
        if (!fieldsToValidate.includes(id)) return true;

        const isValid = validators[id](val);

        if (!isValid) {
            // Field is invalid: Shows red border and feedback
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');
            if (feedback) feedback.style.display = 'block';
        } else if (val !== '') { 
            // Field is valid and the user typed something: Show green border
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            if (feedback) feedback.style.display = 'none';
        } else {
            // Empty field: Remove all validation styling
            input.classList.remove('is-invalid');
            input.classList.remove('is-valid');
            if (feedback) feedback.style.display = 'none';
        }

        return isValid;
    };

    // Initialize input fields 
    fieldsToValidate.forEach(id => {
        const input = form.querySelector(`#${id}`);
        if (!input) return;

        // Validate on input and blur events for instant feedback
        input.addEventListener('input', () => validateField(input));
        input.addEventListener('blur', () => validateField(input));
    });

    // Form submission
    form.addEventListener('submit', e => {
        let hasError = false;
        // Validate all required fields before submission
        fieldsToValidate.forEach(id => {
            const field = form.querySelector(`#${id}`);
            if (field && !validateField(field)) hasError = true;
        });
        // Prevents submission if any field is invalid
        if (hasError) e.preventDefault();
    });
});
