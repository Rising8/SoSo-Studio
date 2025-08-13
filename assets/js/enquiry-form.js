document.addEventListener('DOMContentLoaded', () => {
    // Gets the modal element by its ID
    const rugModal = document.getElementById('rugEnquireModal');

    // Proceeds only if the modal exists on the page
    if (rugModal) {
        // Right before the modal pops up, gets the button (with show.bs.modal) that triggered the pop up and set the rug name accordingly
        rugModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            // Gets the rug name from the button's custom data attribute
            const rugName = button.getAttribute('data-rug-name');
            // Finds the input field inside the modal where the rug name should go (under Rug Name)
            const rugInput = rugModal.querySelector('#rug-name');

            // If the input field exists, set its value to the rug name or an empty string
            if (rugInput) {
                rugInput.value = rugName || '';
            }
        });
    }
});
