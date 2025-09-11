document.addEventListener("DOMContentLoaded", function() {
    // Selects the class "workshop-see-more"
    document.querySelectorAll('.workshop-see-more').forEach(function(link) {
        // Adds a click event listener to the see more and see less links
        link.addEventListener('click', function(e) {
            e.preventDefault();
            // Ensures the right workshop card text is expanded
            const parent = this.closest('.workshop-card-text');
            // Gets the short excerpt and full content text
            const shortText = parent.querySelector('.workshop-short-text');
            const fullText = parent.querySelector('.workshop-full-text');

            // Checks if full text is currently visible
            if(fullText.classList.contains('show')) {
                // If it is, hide the full text and show the short text and the see more button
                fullText.classList.remove('show');
                shortText.style.display = 'inline';
                this.textContent = 'See more';
            } else {
                // If it isn't, show the full text and the see less button
                shortText.style.display = 'none';
                fullText.classList.add('show');
                this.textContent = 'See less';
            }
        });
    });
});
