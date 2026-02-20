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

    // Generic Modal Close Function
    window.closeModal = function() {
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
