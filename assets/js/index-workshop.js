document.addEventListener("DOMContentLoaded", () => {
    // Selects the class workshop-animate
    const elements = document.querySelectorAll(".workshop-animate");
    // Creates an IntersectionObserver to detect when elements enter/leave the viewport
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // If at least 20% of the element is visible, trigger the CSS animation effect
                entry.target.classList.add("active");
            } else {
                // If element is no longer sufficiently visible, remove the CSS animation effect
                entry.target.classList.remove("active"); 
            }
            });
        }, { threshold: 0.2 }); // Trigger the observer when 20% is visible
    elements.forEach(el => observer.observe(el));
});
