// JavaScript for displaying the custom rug size if the option is chosen
document.addEventListener('DOMContentLoaded', function () {
    const rugSizeSelect = document.getElementById('rug-size');
    const customDescContainer = document.getElementById('custom-rug-size-desc-container');

    function toggleCustomDesc() {
      if (rugSizeSelect.value === 'Custom') {
        customDescContainer.style.display = 'block';
        // Makes textarea required only if Custom is selected
        document.getElementById('custom-rug-size-desc').setAttribute('required', 'required');
      } else {
        customDescContainer.style.display = 'none';
        document.getElementById('custom-rug-size-desc').removeAttribute('required');
      }
    }
    rugSizeSelect.addEventListener('change', toggleCustomDesc);
    // Run on page load in case of pre-selected value
    toggleCustomDesc();
});
