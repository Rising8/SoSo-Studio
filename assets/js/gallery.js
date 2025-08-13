// Makes the gallery filterable, clicking a button highlights it and shows only the matching gallery items
document.addEventListener("DOMContentLoaded", function () {
    // Selects all filter buttons and gallery items
    const filterButtons = document.querySelectorAll(".filter-btn");
    const galleryItems = document.querySelectorAll(".gallery-item");

    // Loops through each filter button
    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            // Gets the filter type from the clicked button (filter tags)
            const filter = button.getAttribute("data-filter");

            // Updates the active button
            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            // Shows and hides gallery items based on tags 
            galleryItems.forEach(item => {
                const tags = item.getAttribute("data-tags").split(" ");
                if (filter === "all" || tags.includes(filter)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });
});