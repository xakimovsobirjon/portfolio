document.addEventListener('DOMContentLoaded', () => {
    // Navigation Toggle
    const menuBar = document.querySelector('.menuBar');
    const navigation = document.querySelector('.navigation');
    const navLinks = document.querySelectorAll('.navigation a');

    if (menuBar && navigation) {
        menuBar.addEventListener('click', () => {
            navigation.classList.toggle('active');

            // Toggle icon
            const icon = menuBar.querySelector('i');
            if (navigation.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close menu when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navigation.classList.remove('active');
                const icon = menuBar.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });
    }

    // Header scroll effect
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
