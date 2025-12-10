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

    // Custom Cursor Logic
    const cursor = document.querySelector('.cursor-follower');

    if (cursor) {
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Add hover effect for interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .card, .btn-primary, .social-link');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.classList.add('active');
                document.body.classList.add('hovering');
            });
            el.addEventListener('mouseleave', () => {
                cursor.classList.remove('active');
                document.body.classList.remove('hovering');
            });
        });
    }

    // Scroll Observer for Fade Up Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    const revealElements = document.querySelectorAll('.reveal-text, .section-title, .card, .skill-item, .project-card');
    revealElements.forEach(el => {
        // Add base class if not present (optional, can be done in CSS for all these)
        el.classList.add('reveal-text');
        observer.observe(el);
    });

    // Unified 3D Tilt & Magnetic Effect
    // Elements that get Tilt
    const tiltElements = document.querySelectorAll('.hero-img, .card, .project-card');

    // Elements that get Magnetic
    const magneticElements = document.querySelectorAll('.btn-primary, .social-link, .btn-outline, .card, .project-card, .skill-item, .company-logo');

    // Helper to set variables safely
    const setTransformVars = (el, vars) => {
        Object.entries(vars).forEach(([key, val]) => {
            el.style.setProperty(key, val);
        });
    };

    // Tilt Logic
    tiltElements.forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const xPct = x / rect.width;
            const yPct = y / rect.height;

            const xTilt = (0.5 - xPct) * 10; // Reduced tilt for better usability
            const yTilt = (0.5 - yPct) * -10;

            // Disable transition during movement for responsiveness, unless we just entered
            if (!el.isEntering) {
                el.style.transition = 'none';
            }

            setTransformVars(el, {
                '--rotateX': `${yTilt}deg`,
                '--rotateY': `${xTilt}deg`,
                '--scale': '1.02'
            });
        });

        el.addEventListener('mouseenter', () => {
            el.isEntering = true;
            el.style.transition = 'transform 0.4s cubic-bezier(0.23, 1, 0.32, 1)';

            // Remove the smooth transition flag after it completes
            setTimeout(() => {
                el.isEntering = false;
            }, 400);
        });

        el.addEventListener('mouseleave', () => {
            // Enable smooth transition on exit
            el.style.transition = 'transform 0.6s cubic-bezier(0.23, 1, 0.32, 1)';

            setTransformVars(el, {
                '--rotateX': '0deg',
                '--rotateY': '0deg',
                '--scale': '1'
            });
        });
    });

    // Magnetic Logic
    magneticElements.forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            let strength = 20; // Default pixel movement strength

            // Weaker for large cards
            if (el.classList.contains('card') || el.classList.contains('project-card') || el.classList.contains('skill-item')) {
                strength = 5;
            }

            const xMove = ((x - rect.width / 2) / rect.width) * strength;
            const yMove = ((y - rect.height / 2) / rect.height) * strength;

            setTransformVars(el, {
                '--translateX': `${xMove}px`,
                '--translateY': `${yMove}px`
            });
        });

        el.addEventListener('mouseleave', () => {
            setTransformVars(el, {
                '--translateX': '0px',
                '--translateY': '0px'
            });
        });
    });

    // Click Splash/Firework Effect
    document.addEventListener('click', (e) => {
        const particleCount = 12; // Number of particles

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('click-particle');

            // Random direction and distance
            const angle = Math.random() * Math.PI * 2;
            const velocity = 50 + Math.random() * 100; // Distance traveled

            const tx = Math.cos(angle) * velocity;
            const ty = Math.sin(angle) * velocity;

            particle.style.setProperty('--tx', `${tx}px`);
            particle.style.setProperty('--ty', `${ty}px`);

            // Random colors (primary or secondary)
            const isPrimary = Math.random() > 0.5;
            particle.style.background = isPrimary ? 'var(--primary)' : 'var(--secondary)';
            particle.style.boxShadow = `0 0 10px ${isPrimary ? 'var(--primary)' : 'var(--secondary)'}`;

            particle.style.left = e.clientX + 'px';
            particle.style.top = e.clientY + 'px';

            document.body.appendChild(particle);

            particle.addEventListener('animationend', () => {
                particle.remove();
            });
        }
    });
});
