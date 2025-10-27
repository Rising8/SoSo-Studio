document.addEventListener("DOMContentLoaded", () => {
    const imgs = document.querySelectorAll(".single-rug img");
    imgs.forEach(img => {
        if (img.complete) {
            img.classList.add("loaded");
        } else {
            img.addEventListener("load", () => img.classList.add("loaded"));
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const zoomImages = document.querySelectorAll('.zoomable-image');
    const modal = new bootstrap.Modal(document.getElementById('imageZoomModal'));
    const zoomedImg = document.getElementById('zoomedImage');

    zoomImages.forEach(img => {
        img.addEventListener('click', function() {
            zoomedImg.src = this.dataset.full; // full-size image
            modal.show();
        });
    });
});