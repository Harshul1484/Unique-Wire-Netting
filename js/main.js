document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Active Link Highlighting
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-links a');
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].classList.add("active");
            // If it's a dropdown item, broaden the scope
            const parentDropdown = menuItem[i].closest('.dropdown');
            if (parentDropdown) {
                parentDropdown.querySelector('a').classList.add('active');
            }
        }
    }

    // Example: Floating Button Interaction (if needed) or simple scroll behaviors
    // Sticky Header functionality could be enhanced here if CSS plain sticky isn't enough

    // Lightbox dummy implementation (placeholders for now) or integrate a library
    const lightboxTriggers = document.querySelectorAll('.lightbox-trigger');
    if (lightboxTriggers.length > 0) {
        // Implementation for lightbox interaction would go here
        // Usually involves opening a modal with the clicked image
    }
});
