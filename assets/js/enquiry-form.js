document.addEventListener('DOMContentLoaded', () => {
    const rugModal = document.getElementById('rugEnquireModal');
    if (rugModal) {
        rugModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const rugName = button.getAttribute('data-rug-name');
            const rugInput = rugModal.querySelector('#rug-name');
            if (rugInput) {
                rugInput.value = rugName || '';
            }
        });
    }
});
