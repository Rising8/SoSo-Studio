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

// Retrieves from custom page design and shows preview design above the attachment image
document.addEventListener('DOMContentLoaded', () => {
    if (!window.location.href.includes('commission-form')) return;
  
    const savedDesign = sessionStorage.getItem('userDesign');

    if (savedDesign) {
        // Create wrapper for preview and buttons
        const container = document.createElement('div');
        container.className = 'design-preview-container';

        // Create image preview
        const preview = document.createElement('img');
        preview.src = savedDesign;
        preview.alt = "Your Canvas Design";
        preview.className = 'design-preview-image';

        // Create download button
        const downloadBtn = document.createElement('button');
        downloadBtn.textContent = 'Download Your Design';
        downloadBtn.className = 'design-download-btn';

        // On click, download the design and save it as my-canvas-design(n)
        downloadBtn.addEventListener('click', () => {
            const link = document.createElement('a');
            link.href = savedDesign;
            link.download = 'my-canvas-design.png';
            link.click();
        });

        // Create note with subtle edit reminder
        const note = document.createElement('p');
        note.className = 'design-note';
        note.innerHTML = '💡 Please download and confirm your design and attach it below by clicking "Choose File". ';

        const editSpan = document.createElement('span');
        editSpan.className = 'design-edit-reminder';
        editSpan.textContent = 'If it doesn’t look right, go back to the other tab to edit and redo your design.';
        note.appendChild(editSpan);

        // Append elements to container
        container.appendChild(preview);
        container.appendChild(downloadBtn);
        container.appendChild(note);

        // Insert container above upload input
        const uploadInput = document.getElementById('reference');
        if (uploadInput) {
            uploadInput.parentElement.insertBefore(container, uploadInput);
        } else {
            document.body.prepend(container);
        }

        // Friendly alert
        alert("Your design has been imported! You can preview it below or download it to attach to your commission request.");

        // Clear the saved image after displaying it
        sessionStorage.removeItem('userDesign');
    }
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