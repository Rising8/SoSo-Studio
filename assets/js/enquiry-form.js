document.addEventListener("DOMContentLoaded", function () {
    const rugModal = document.getElementById('rugEnquireModal');
    if (!rugModal) return;

    const form = rugModal.querySelector("#rugEnquiryForm");
    const successBox = rugModal.querySelector("#rugEnquirySuccess");
    if (!form || !successBox) return;

    const nameInput  = form.querySelector('#enquiry-form-name');
    const emailInput = form.querySelector('#enquiry-form-email');
    const phoneInput = form.querySelector('#enquiry-form-phone');
    const rugNameInput = form.querySelector('#rug-name');
    const sourcePageInput = form.querySelector('#source-page');
    const goBackBtn = successBox.querySelector('[data-bs-dismiss="modal"]');

    form.setAttribute('novalidate', 'novalidate');

    rugModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        if (!button) return;

        const rugName   = button.getAttribute('data-rug-name');
        const sourcePage = button.getAttribute('data-source-page');

        if (rugNameInput) {
            rugNameInput.value = rugName || '';
        }
        if (sourcePageInput) {
            sourcePageInput.value = sourcePage || window.location.href;
        }
    });

    function validateName(input) {
        const value = input.value.trim();
        return value !== '' && /^[A-Za-z\s]+$/.test(value);
    }

    function validateEmail(input) {
        const value = input.value.trim();
        return value !== '' && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }

    function validatePhone(input) {
        const value = input.value.trim();
        if (value === '') return true; // optional
        // Allows +, digits, spaces, dashes, parentheses
        return /^\+?[\d\s\-()]{7,15}$/.test(value);
    }

    function setFieldState(input, isValid) {
        if (!input) return;

        const value = input.value.trim();
        const feedback = input.closest('.mb-3')?.querySelector('.invalid-feedback');

        if (input.id === 'enquiry-form-phone' && value === '') {
            input.classList.remove('is-valid', 'is-invalid');
            if (feedback) feedback.style.display = 'none';
            return;
        }

        if (!isValid) {
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');
            if (feedback) feedback.style.display = 'block';
        } else {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            if (feedback) feedback.style.display = 'none';
        }
    }

    function resetRugEnquiryForm() {
        form.reset();
        form.style.display = ""; // show form again
        successBox.style.display = "none";

        [nameInput, emailInput, phoneInput].forEach(input => {
            if (!input) return;
            input.classList.remove('is-valid', 'is-invalid');
            const feedback = input.closest('.mb-3')?.querySelector('.invalid-feedback');
            if (feedback) feedback.style.display = 'none';
        });
    }

    if (nameInput) {
        nameInput.addEventListener('input', () => {
            setFieldState(nameInput, validateName(nameInput));
        });
    }

    if (emailInput) {
        emailInput.addEventListener('input', () => {
            setFieldState(emailInput, validateEmail(emailInput));
        });
    }

    if (phoneInput) {
        phoneInput.addEventListener('input', () => {
            setFieldState(phoneInput, validatePhone(phoneInput));
        });
    }

    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        const isNameValid  = validateName(nameInput);
        const isEmailValid = validateEmail(emailInput);
        const isPhoneValid = validatePhone(phoneInput);

        setFieldState(nameInput, isNameValid);
        setFieldState(emailInput, isEmailValid);
        setFieldState(phoneInput, isPhoneValid);

        if (!isNameValid || !isEmailValid || !isPhoneValid) return;

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: "POST",
                body: formData,
                headers: { "Accept": "application/json" }
            });

            if (response.ok) {
                form.style.display = "none";
                successBox.style.display = "block";
            }
        } catch (err) {
            console.error("Rug enquiry submission error:", err);
        }
    });


    if (goBackBtn) {
        goBackBtn.addEventListener('click', () => {
            resetRugEnquiryForm();

            if (window.bootstrap) {
                const bsModal = bootstrap.Modal.getOrCreateInstance(rugModal);
                bsModal.hide();
            }
        });
    }

    rugModal.addEventListener('hidden.bs.modal', () => {
        resetRugEnquiryForm();
    });
});
