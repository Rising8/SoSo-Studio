// Search Bar for Header
document.addEventListener('DOMContentLoaded', function () {
    const mobileIcon = document.getElementById('searchIconMobile');
    const desktopIcon = document.getElementById('searchIconDesktop');
    const searchBar = document.getElementById('searchBar');

    function toggleSearchBar() {
        if (searchBar) {
            searchBar.classList.toggle('d-none');
        }
    }
    if (mobileIcon) mobileIcon.addEventListener('click', toggleSearchBar);
    if (desktopIcon) desktopIcon.addEventListener('click', toggleSearchBar);
});
