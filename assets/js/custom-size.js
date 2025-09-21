// JavaScript for displaying the custom rug size if the option is chosen on the commission form
document.addEventListener('DOMContentLoaded', function () {
    // Gets the select element where the user chooses rug size
    const rugSizeSelect = document.getElementById('rug-size');
    // Gets the container that holds the custom rug size inputs
    const customDescContainer = document.getElementById('custom-rug-size-desc-container');
    // Gets the input fields for the width and height 
    const customWidth = document.getElementById('custom-rug-width');
    const customHeight = document.getElementById('custom-rug-height');

    // Function to show or hide the custom size fields depending on the user selection
    function toggleCustomDesc() {
        if (rugSizeSelect.value === 'Custom') {
            // Show inputs and make them required if the user selects custom size
            customDescContainer.style.display = 'block';
            // Make the width and height required for form validation
            customWidth.setAttribute('required', 'required');
            customHeight.setAttribute('required', 'required');
        } else {
            // Hide inputs and remove required if the user does not select custom size
            customDescContainer.style.display = 'none';
            // Removes the required attribute so they don't interfere with the validation
            customWidth.removeAttribute('required');
            customHeight.removeAttribute('required');
            // Clear values so they don’t block validation
            customWidth.value = '';
            customHeight.value = '';
        }
    }

    // Runs the function whenever the rug size dropdown value changes
    rugSizeSelect.addEventListener('change', toggleCustomDesc);
    toggleCustomDesc();
});
