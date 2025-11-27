document.addEventListener('wpcf7submit', function(event) {
    var formContainer = document.getElementById("formContent")
    var successContainer = document.getElementById("formSuccess")

    if (formContainer && successContainer) {
        //Hide the form
        formContainer.style.display = "none"

        //Show success message
        successContainer.style.display = "block"
    }
}, false)