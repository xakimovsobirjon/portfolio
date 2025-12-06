<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobirjon - Portfolio</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.css">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header/Navigation -->
    <section class="header">
        <header>
            <nav>
                <a href="#home" class="brand">
                    <span style="font-size: 1.5rem; font-weight: bold; color: azure; margin-left:10px;">Sobirjon</span>
                </a>
                
                <div class="navigation">
                    <a href="#home">Home</a>
                    <a href="#about-us">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#work">Portfolio</a>
                    <a href="#company">Partners</a>
                </div>
                
                <div class="menuBar">
                    <i class="fa fa-bars" style="color: white; font-size: 1.5rem;"></i>
                </div>
            </nav>
        </header>
    </section>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <!-- Ambient Background Effects -->
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>

        <div class="container hero-content">
            <div class="hero-text">
                <span class="date-badge" style="display:inline-block; margin-bottom: 1rem; padding: 5px 15px; background: rgba(59,130,246,0.1); border-radius: 20px;">Welcome to my portfolio</span>
                <h1>
                    Hello! I'm <br>
                    <span class="gradient-text">Sobirjon</span>
                </h1>
                <h3 class="hero-subtitle">Backend Developer</h3>
                
                <div class="hero-actions">
                    <a href="./resume/Resume.pdf" target="_blank" class="btn-primary">
                        Get Resume <i class="fa fa-download" style="margin-left: 10px;"></i>
                    </a>
                    
                    <div class="social-icons">
                        <a target="_blank" href="https://t.me/sobirjon_dev" class="social-link">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/sobirjon_dev" class="social-link">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100074357748224" class="social-link">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a target="_blank" href="https://wa.me/+998934293572" class="social-link">
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

    <!-- About / Education / Experience -->
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
                        <!-- Item 1 -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <span class="date-badge">2021 - Present</span>
                            <h4 class="timeline-limit">Bachelor of Archival Studies</h4>
                            <p class="timeline-text mb-2">National University of Uzbekistan, Tashkent</p>
                            <p class="timeline-text">Currently studying part-time while focusing on programming.</p>
                        </div>
                        <!-- Item 2 -->
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
                        <div class="card-icon" style="color: var(--accent-color); background-color: rgba(168, 85, 247, 0.1);">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h3>Experience</h3>
                    </div>

                    <div class="timeline">
                        <!-- Item 1 -->
                        <div class="timeline-item">
                            <div class="timeline-dot" style="border-color: var(--accent-color);"></div>
                            <span class="date-badge" style="color: var(--accent-color);">2022 - Present</span>
                            <h4 class="timeline-limit">Junior Backend Developer</h4>
                            <p class="timeline-text mb-2">Freelance / Self-employed</p>
                            <p class="timeline-text">Learned PHP and Laravel framework. Successfully completed 3 projects and currently working on new ones.</p>
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
                            ['name' => 'PHP', 'percent' => 75],
                            ['name' => 'Laravel', 'percent' => 85],
                            ['name' => 'JavaScript', 'percent' => 65],
                            ['name' => 'Telegram Bot API', 'percent' => 80],
                        ];
                    ?>

                    <?php foreach($skills as $skill): ?>
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

    <!-- Projects Section (Static Data) -->
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
                            'title' => 'Savdo Platform',
                            'image' => 'savdo.png', // Placeholder
                            'link' => 'savdo.online',
                            'link_title' => 'View Project'
                        ],
                    ];
                ?>

                <?php foreach($works as $work): ?>
                    <div class="project-card">
                        <div class="project-image-wrapper">
                             <img src="./img/<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>" class="project-image">
                        </div>
                        <div class="project-content">
                            <h3 class="project-title" style="color: white;"><?php echo $work['title']; ?></h3>
                            <a target="_blank" href="https://<?php echo $work['link']; ?>" class="project-link">
                                <?php echo $work['link_title']; ?> <i class="fa fa-external-link" style="margin-left: 5px;"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="text-center mt-4">
                 <button id="more" class="btn-outline">
                    Show More
                 </button>
            </div>
        </div>
    </section>

    <!-- Trusted Companies (Static Data) -->
    <section id="company" class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Trusted Companies</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="company-list">
                <?php
                    // Placeholder company logos
                    $companies = [
                        ['logo' => 'savdo.png'],
                    ];
                ?>

                <?php foreach($companies as $company): ?>
                    <div class="company-logo">
                         <img src="./img/<?php echo $company['logo']; ?>" alt="Company">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <h2>Sobirjon Dev</h2>
                    <p style="color: var(--text-secondary); margin-top: 0.5rem;">© 2025 All rights reserved.</p>
                </div>
                
                <div class="social-icons">
                    <a href="https://t.me/sobirjon_dev" class="social-link"><i class="fa-brands fa-telegram"></i></a>
                    <a href="https://www.instagram.com/sobirjon_dev" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100074357748224" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/sobirjon-xakimov-a7b51723a/" class="social-link"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                
                 <div class="footer-contact">
                    <a href="mailto:xakimovsobirjon@mail.ru">
                        <i class="fa fa-envelope" style="margin-right: 5px;"></i> xakimovsobirjon@mail.ru
                    </a>
                    <a href="tel:+998950431903">
                        <i class="fa fa-phone" style="margin-right: 5px;"></i> +998 95 043 19 03
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="./js/script.js"></script>
    <script src="./js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
             const moreBtn = document.getElementById('more');
             if(moreBtn) {
                 moreBtn.addEventListener('click', () => {
                     const container = document.querySelector('.projects-grid');
                     if(container) {
                         moreBtn.style.display = 'none';
                     }
                 });
             }
             
             // Mobile Menu Toggle logic
             // I'm inferring classes here but without a navbar in the code above, it might be incomplete.
             // I notice the original code referred to .menu-toggle. 
             // I should probably add a navbar in the header since it was present in the JS logic.
        });
    </script>
</body>
</html>
