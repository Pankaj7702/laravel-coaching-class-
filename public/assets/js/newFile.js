<script>
        // Add any JavaScript specific to the header here
    // For example, you might want to add some interactive features

    // Example: Highlight the current page link in the navigation
    const currentLocation = window.location.href;
    const navLinks = document.querySelectorAll('nav ul li a');
        navLinks.forEach(link => { }
    if (link.href === currentLocation) {link.classList.add('active')};
            }
        });
</script>;
