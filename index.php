<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobirjon - Portfolio</title>
    <link rel="icon" type="image/png" href="./img/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Effects -->
    <div class="noise-overlay"></div>
    <div class="cursor-follower"></div>
    <!-- Header/Navigation -->
    <section class="header">
        <div class="container">
            <nav>
                <a href="#home" class="brand">
                    <img src="./img/logo.png" alt="logo">
                </a>

                <div class="navigation ps-4 mb-0">
                    <a href="#home">Home</a>
                    <a href="#about-us">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#work">Portfolio</a>
                    <a href="#company">Partners</a>
                    <a href="#contact">Contact</a>
                </div>

                <div class="menuBar">
                    <i class="fa fa-bars"></i>
                </div>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <!-- Ambient Background Effects -->
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>

        <div class="container hero-content">
            <div class="hero-text">
                <span class="date-badge">Welcome to my portfolio</span>
                <h1>
                    Hello! I'm <br>
                    <span class="gradient-text reveal-text visible">Sobirjon</span>
                </h1>
                <h3 class="hero-subtitle reveal-text visible stagger-delay-1">Backend Developer</h3>

                <div class="hero-actions">
                    <a href="./resume/Resume.pdf" target="_blank" class="btn-primary">
                        Get Resume <i class="fa fa-download"></i>
                    </a>

                    <div class="social-icons-hero">
                        <a target="_blank" href="https://t.me/sobirjon_dev" class="social-link">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/sobirjon-xakimov-a7b51723a/" class="social-link">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a target="_blank" href="https://wa.me/+998950431903" class="social-link">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <div class="hero-img-wrapper">
                    <div class="hero-img-bg"></div>
                    <img src="./img/me.png" alt="Sobirjon" class="hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Education & Experience -->
    <section id="about-us" class="section bg-dark">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Education & Experience</h2>
                <div class="section-divider"></div>
            </div>

            <div class="grid-2">
                <!-- Education -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h3>Education</h3>
                    </div>

                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <span class="date-badge">2021 - Present</span>
                            <h4 class="timeline-limit">Bachelor of Archival Studies</h4>
                            <p class="timeline-text mb-2">National University of Uzbekistan, Tashkent</p>
                            <p class="timeline-text">Currently studying part-time while focusing on programming.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <span class="date-badge">2010 - 2021</span>
                            <h4 class="timeline-limit">School Education</h4>
                            <p class="timeline-text mb-2">32nd & 6th Schools, Balıkchi district</p>
                            <p class="timeline-text">Completed secondary education with good grades.</p>
                        </div>
                    </div>
                </div>

                <!-- Experience -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h3>Experience</h3>
                    </div>

                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <span class="date-badge">2022 - Present</span>
                            <h4 class="timeline-limit">Web Backend Developer</h4>
                            <p class="timeline-text mb-2">Urfan LLC</p>
                            <p class="timeline-text">Working as a Web Backend Developer at Urfan LLC since 2022.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Technical Skills</h2>
                <div class="section-divider"></div>
            </div>

            <div class="skills-grid">
                <div class="skill-list">
                    <h3 class="mb-6">Development Stack</h3>

                    <?php
                    $skills = [
                        ['name' => 'HTML', 'percent' => 92],
                        ['name' => 'CSS', 'percent' => 90],
                        ['name' => 'Bootstrap/Tailwind', 'percent' => 85],
                        ['name' => 'JavaScript', 'percent' => 70],
                        ['name' => 'PHP', 'percent' => 85],
                        ['name' => 'Laravel', 'percent' => 85],
                        ['name' => 'MySQL', 'percent' => 80],
                        ['name' => 'Telegram Bot API', 'percent' => 80],
                    ];
                    ?>

                    <?php foreach ($skills as $skill): ?>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span><?php echo $skill['name']; ?></span>
                                <span><?php echo $skill['percent']; ?>%</span>
                            </div>
                            <div class="skill-bar-bg">
                                <div class="skill-progress" style="width: <?php echo $skill['percent']; ?>%"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="cta-box">
                    <h3 class="mb-4">Want to work together?</h3>
                    <p class="mb-6" style="color: var(--text-secondary);">I am open to new opportunities and interesting projects.</p>
                    <a href="./resume/Resume.pdf" target="_blank" class="btn-white">
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="work" class="section bg-dark">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">My Projects</h2>
                <div class="section-divider"></div>
            </div>

            <div class="projects-grid">
                <?php
                $works = [
                    [
                        'title' => 'LC-UP',
                        'image' => 'lc-up.png',
                        'link' => 'lc-up.com',
                        'link_title' => 'View Project'
                    ],
                    [
                        'title' => 'Savdo Platform',
                        'image' => 'savdo.png',
                        'link' => 'savdo.online',
                        'link_title' => 'View Project'
                    ],
                    [
                        'title' => 'Floow',
                        'image' => 'floow.png',
                        'link' => 'floow.app',
                        'link_title' => 'View Project'
                    ],
                    [
                        'title' => 'My AI',
                        'image' => 'ai.png',
                        'link' => 'my-ai-ten-pied.vercel.app',
                        'link_title' => 'View Project'
                    ],
                    [
                        'title' => 'POS for Book store',
                        'image' => 'bookstore.jpg',
                        'link' => 'ziyobook.vercel.app',
                        'link_title' => 'View Project'
                    ],
                    [
                        'title' => 'Youtube clone',
                        'image' => 'youtube.png',
                        'link' => 'sammitube-test.vercel.app',
                        'link_title' => 'View Project'
                    ],
                    [
                        'title' => 'Anti Reklama Bot',
                        'image' => 'anti-reklama-bot.png',
                        'link' => 't.me/dev0212_bot',
                        'link_title' => 'View Project'
                    ],
                ];
                ?>

                <?php foreach ($works as $work): ?>
                    <div class="project-card">
                        <div class="project-image-wrapper">
                            <img src="./img/<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>" class="project-image">
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><?php echo $work['title']; ?></h3>
                            <a target="_blank" href="https://<?php echo $work['link']; ?>" class="project-link">
                                <?php echo $work['link_title']; ?> <i class="fa fa-external-link"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- <div class="text-center mt-4">
                 <button id="more" class="btn-outline">
                    Show More
                 </button>
            </div> -->
        </div>
    </section>

    <!-- Trusted Companies -->
    <section id="company" class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Trusted Companies</h2>
                <div class="section-divider"></div>
            </div>

            <div class="company-list">
                <?php
                $companies = [
                    ['logo' => 'urfan.png', 'url' => 'urfan.tech'],
                    ['logo' => 'mindox.webp', 'url' => 'mindox.jp'],
                ];
                ?>

                <?php foreach ($companies as $company): ?>
                    <div class="company-logo">
                        <a href="https://<?php echo $company['url']; ?>" target="_blank">
                            <img src="./img/<?php echo $company['logo']; ?>" alt="Company">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section bg-dark">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Get In Touch</h2>
                <div class="section-divider"></div>
            </div>

            <div class="contact-wrapper">
                <div id="successAnimation" class="success-animation" style="display: none;">
                    <div class="paper-plane">
                        <i class="fa fa-paper-plane"></i>
                    </div>
                    <h3 class="success-message">Message Sent!</h3>
                </div>
                <form id="contactForm" class="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+998 90 123 45 67" required>
                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                    </div>



                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Your Message" rows="5" required></textarea>
                        <div class="invalid-feedback">Please enter a message.</div>
                    </div>

                    <button type="submit" class="btn-primary w-100">
                        Send Message <i class="fa fa-paper-plane"></i>
                    </button>

                    <div id="formStatus" class="mt-3 text-center"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <h2>Sobirjon Xakimov</h2>
                    <p style="color: var(--text-secondary); margin-top: 0.5rem;">© 2025 All rights reserved.</p>
                </div>

                <div class="footer-socials">
                    <a href="https://t.me/sobirjon_dev" class="social-link"><i class="fa-brands fa-telegram"></i></a>
                    <a href="https://www.linkedin.com/in/sobirjon-xakimov-a7b51723a/" class="social-link"><i class="fa-brands fa-linkedin"></i></a>
                    <a target="_blank" href="https://wa.me/+998950431903" class="social-link"><i class="fa-brands fa-whatsapp"></i></a>
                </div>

                <div class="footer-contact">
                    <a href="mailto:xakimovsobirjon@mail.ru" class="footer-contact-item">
                        <i class="fa fa-envelope"></i> xakimovsobirjon@mail.ru
                    </a>
                    <a href="tel:+998950431903" class="footer-contact-item">
                        <i class="fa fa-phone"></i> +998 95 043 19 03
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/contact.js"></script>
    <script src="./js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const moreBtn = document.getElementById('more');
            if (moreBtn) {
                moreBtn.addEventListener('click', () => {
                    moreBtn.style.display = 'none';
                });
            }
        });
    </script>
</body>

</html>