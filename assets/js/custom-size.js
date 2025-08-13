// JavaScript for displaying the custom rug size if the option is chosen on the commission form
document.addEventListener('DOMContentLoaded', function () {
    // Selects the rug size dropdown element and container holding the custom size description
    const rugSizeSelect = document.getElementById('rug-size');
    const customDescContainer = document.getElementById('custom-rug-size-desc-container');

    // Function to show/hide the custom size description
    function toggleCustomDesc() {
        // If the selected option is "Custom Size"
        if (rugSizeSelect.value === 'Custom') {
            // Shows the container and makes the textarea required 
            customDescContainer.style.display = 'block';
            document.getElementById('custom-rug-size-desc').setAttribute('required', 'required');
        } else {
            // Hides the container and removes the required attribute from the textarea
            customDescContainer.style.display = 'none';
            document.getElementById('custom-rug-size-desc').removeAttribute('required');
        }
    }
    // Listens for changes on the rug size dropdown
    rugSizeSelect.addEventListener('change', toggleCustomDesc);
    // Run on page load in case of pre-selected value
    toggleCustomDesc();
});

