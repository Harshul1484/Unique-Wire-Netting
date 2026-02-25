document.addEventListener('DOMContentLoaded', () => {
    // Mobile Overlay Management
    const createOverlay = () => {
        let overlay = document.querySelector('.nav-overlay');
        if (!overlay) {
            overlay = document.createElement('div');
            overlay.className = 'nav-overlay';
            document.body.appendChild(overlay);
        }
        return overlay;
    };

    const overlay = createOverlay();

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            const isActive = navLinks.classList.toggle('active');
            overlay.classList.toggle('active', isActive);

            if (!isActive) {
                // Reset dropdowns when closing main menu
                document.querySelectorAll('.nav-links li.active').forEach(li => {
                    li.classList.remove('active');
                });
            }
        });
    }

    // Close menu when clicking overlay
    overlay.addEventListener('click', () => {
        navLinks.classList.remove('active');
        overlay.classList.remove('active');
        document.querySelectorAll('.nav-links li.active').forEach(li => {
            li.classList.remove('active');
        });
    });

    // Mobile Dropdown Toggle Logic
    const dropdownLinks = document.querySelectorAll('.nav-links .dropdown > a, .nav-links .dropdown-submenu > a');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
                const parentLi = this.parentElement;
                const isPlaceholder = this.getAttribute('href') === '#' || !this.getAttribute('href');
                const isIconClick = e.target.tagName === 'I';

                if (isPlaceholder || isIconClick) {
                    e.preventDefault();
                    e.stopPropagation();

                    // Close siblings at the same level
                    const siblings = parentLi.parentElement.querySelectorAll(':scope > li.active');
                    siblings.forEach(sib => {
                        if (sib !== parentLi) sib.classList.remove('active');
                    });

                    // Toggle current
                    parentLi.classList.toggle('active');
                }
            }
        });
    });

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

    // Generic Modal Close Function
    window.closeModal = function () {
        const modal = document.getElementById('thankYouModal');
        if (modal) {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
    };

    // Quotation Form AJAX Handling
    const quoteForm = document.querySelector('.quotation-form');
    if (quoteForm) {
        quoteForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = quoteForm.querySelector('.btn-submit');
            const originalBtnText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';

            try {
                const formData = new FormData(quoteForm);
                const response = await fetch('send-mail.php', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    // Show Success Modal
                    const modal = document.getElementById('thankYouModal');
                    if (modal) {
                        modal.classList.add('active');
                        document.body.style.overflow = 'hidden';
                        quoteForm.reset();
                    } else {
                        alert('Thank You! Your inquiry has been received.');
                    }
                } else {
                    const errorText = await response.text();
                    alert('Error: ' + errorText);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again later.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });
    }
});
