document.addEventListener("DOMContentLoaded", function () {
    const modal = document.querySelector('#contactModal');
    if (!modal) return;

    const form = modal.querySelector("#contactForm");
    const successBox = modal.querySelector("#formSuccess");
    if (!form || !successBox) return;

    const nameInput = form.querySelector('#contact-form-name');
    const emailInput = form.querySelector('#contact-form-email');
    const goBackBtn = successBox.querySelector('[data-bs-dismiss="modal"]');

    // -- validation rules --
    function validateName(input) {
        const value = input.value.trim();
        return value !== '' && /^[A-Za-z\s]+$/.test(value);
    }

    function validateEmail(input) {
        const value = input.value.trim();
        return value !== '' && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }

    function setFieldState(input, isValid) {
        const feedback = input.closest('.mb-3')?.querySelector('.invalid-feedback');
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

    // 💡 Reset form + UI state
    function resetFormState() {
        form.reset();
        form.style.display = "";          // show form again
        successBox.style.display = "none";

        // remove validation styles + hide feedback
        [nameInput, emailInput].forEach(input => {
            input.classList.remove('is-valid', 'is-invalid');
            const feedback = input.closest('.mb-3')?.querySelector('.invalid-feedback');
            if (feedback) feedback.style.display = 'none';
        });
    }

    // live validation
    nameInput.addEventListener('input', () => {
        setFieldState(nameInput, validateName(nameInput));
    });

    emailInput.addEventListener('input', () => {
        setFieldState(emailInput, validateEmail(emailInput));
    });

    form.addEventListener("submit", async function (e) {
        e.preventDefault(); // stop page reload

        // validate first
        const isNameValid = validateName(nameInput);
        const isEmailValid = validateEmail(emailInput);

        setFieldState(nameInput, isNameValid);
        setFieldState(emailInput, isEmailValid);

        // if invalid or empty → don't send
        if (!isNameValid || !isEmailValid) return;

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: "POST",
                body: formData,
                headers: { "Accept": "application/json" }
            });

            if (response.ok) {
                form.style.display = "none";        // hide form
                successBox.style.display = "block"; // show success message
            }
        } catch (err) {
            console.error("Form submission error:", err);
            // you can show an error alert here if you want
        }
    });

    // ✅ When "Go Back" is clicked: reset + close modal
    if (goBackBtn) {
        goBackBtn.addEventListener('click', () => {
            resetFormState();

            // also ensure modal closes (Bootstrap 5)
            if (window.bootstrap) {
                const bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                bsModal.hide();
            }
        });
    }

    // ✅ Also reset whenever modal is fully hidden (X button, backdrop click, etc.)
    modal.addEventListener('hidden.bs.modal', () => {
        resetFormState();
    });
});
