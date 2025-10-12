document.addEventListener('DOMContentLoaded', () => {
    // Selects the form with the class -> commission-form
    const form = document.querySelector('.commission-form');

    // Validation when a field loses its focus (blur)
    form.querySelectorAll('input, select, textarea').forEach(input => {
        input.addEventListener('blur', () => {
            // Mark field as touched for styling
            input.classList.add('was-validated'); 
            if (!input.checkValidity()) {
                // If the field is invalid, show a red border for an error
                input.classList.add('is-invalid');
            } else {
                // If the field is valid, show green border for success
                input.classList.remove('is-invalid');
            }
        });
    });

    // Validation on submit
    form.addEventListener('submit', (e) => {
        let isFormValid = true;

        form.querySelectorAll('input, select, textarea').forEach(input => {
            // Mark all fields as touched for styling
            input.classList.add('was-validated');
            if (!input.checkValidity()) {
                // Show invalid styling
                input.classList.add('is-invalid');
                // Flags the form as invalid
                isFormValid = false;
            } else {
                // If it is valid, then remove invalid styling
                input.classList.remove('is-invalid');
            }
        });

        // If any field is invalid, prevent form submission
        if (!isFormValid) {
            e.preventDefault();
            e.stopPropagation();
        }
    });
});

// ? link (for texture) automatically updates when a user selects a new texture 
// It will automatically go to that section in the case of multiple gallery categories 
document.addEventListener('DOMContentLoaded', function() {
    // Gets texture select element
    const textureSelect = document.getElementById('texture');
    // Gets texture help icon link "?"
    const helpLink = document.getElementById('texture-help-link');

    if (!textureSelect || !helpLink) return;

    // Listens for changes on texture dropdown
    textureSelect.addEventListener('change', function() {
        // When texture is selected
        if (this.value) {
            // Update link to go directly to the selected category section on the gallery page
            helpLink.href = commissionFormData.galleryUrl + "#" + this.value;
        } else {
            // If no texture selected, go to the top of the gallery categories section
            helpLink.href = commissionFormData.galleryUrl + "#gallery-categories-section";
        }
    });
});