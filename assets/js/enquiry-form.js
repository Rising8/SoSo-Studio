document.addEventListener('DOMContentLoaded', () => {
    // Get the rug enquiry modal element
    const rugModal = document.getElementById('rugEnquireModal');
    // Get the enquiry form inside the modal
    const form = document.querySelector('.rug-enquire-form');

    if (rugModal) {
        // When the modal is about to be shown
        rugModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget; // Button that triggered the modal

            // Get rug information from button data attributes
            const rugName = button.getAttribute('data-rug-name');
            const sourcePage = button.getAttribute('data-source-page');

            // Set the rug name input field
            rugModal.querySelector('#rug-name').value = rugName || '';
            // Set the hidden source page input field
            rugModal.querySelector('#source-page').value = sourcePage || '';
        });
    }

    if (form) {
        // Add blur-based validation for all input and textarea fields
        form.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('blur', () => {
                if (!input.checkValidity()) {
                    // Add 'is-invalid' class if field is invalid
                    input.classList.add('is-invalid');
                } else {
                    // Remove 'is-invalid' class if field is valid
                    input.classList.remove('is-invalid');
                }
            });
        });

        // Prevent form submission if required fields are invalid
        form.addEventListener('submit', e => {
            if (!form.checkValidity()) {
                e.preventDefault(); // Stop form submission
                e.stopPropagation(); // Stop event propagation

                // Mark all invalid fields with 'is-invalid'
                form.querySelectorAll('input, textarea').forEach(input => {
                    if (!input.checkValidity()) input.classList.add('is-invalid');
                });
            }
        });
    }
});

