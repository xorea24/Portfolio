<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Creative Developer</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>



<style>
    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
        max-width: 900px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .skill-card {
        background: #1a1a1a;
        padding: 1.5rem;
        border-radius: 12px;
        text-align: center;
        border: 1px solid #333;
        transition: transform 0.3s ease, border-color 0.3s ease;
    }

    .skill-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-color);
    }

    .skill-card i {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        display: block;
    }

    .skill-card span {
        font-weight: 600;
        color: #fff;
    }

    body.light-mode .skill-card {
        background: #ffffff;
        border-color: #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    body.light-mode .skill-card span {
        color: var(--text-color);
    }
</style>

<body>
    <div id="vanta-canvas" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>

    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <button id="theme-toggle"
                        style="background: none; border: none; color: var(--text-color); cursor: pointer; font-size: 1.2rem; margin-top: -2px;">
                        <i class="fas fa-sun"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero" id="home">
            <img src="{{ asset('assets/img/profile1.png') }}" alt="Profile" class="profile-img">
            <h1>Hi, I'm <span style="color: var(--accent-color)">Joshua Lanz A Regalado</span>.</h1>
            <p style="font-size: 1.4rem; font-weight: 600; color: var(--accent-color); margin-bottom: 0.5rem;">
                Entry-level
                Software Developer | Laravel Specialist</p>
            <p style="margin-bottom: 2rem;">I build end-to-end web solutions that focus on security, efficiency, and
                real-world utility. With a strong foundation in Laravel and modern UI design, I turn complex
                requirements into functional, user-centric systems.</p>
            <a href="#projects" class="btn">View My Work</a>
        </section>

        <!-- About Section -->
        <section id="about">
            <h2 class="section-title">About Me</h2>
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.1rem; color: #ccc;">
                    Passionate about creating clean, efficient, and beautiful applications. With over 5 years of
                    experience in the Laravel ecosystem, I turn complex problems into simple, high-performing solutions.
                </p>
                <div style="display: flex; justify-content: center; gap: 3rem; margin-top: 3rem; flex-wrap: wrap;">
                    <div>
                        <h4 style="color: var(--accent-color)">50+</h4>
                        <p>Projects Done</p>
                    </div>
                    <div>
                        <h4 style="color: var(--accent-color)">12</h4>
                        <p>Happy Clients</p>
                    </div>
                    <div>
                        <h4 style="color: var(--accent-color)">5</h4>
                        <p>Years Exp.</p>
                    </div>
                </div>

                <div id="skills" style="margin-top: 5rem;">
                    <h2 class="section-title" style="margin-bottom: 2rem;">Tech Stack</h2>
                    <div class="skills-grid">
                        <div class="skill-card">
                            <i class="fas fa-server"></i>
                            <h3>InfinityFree</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-sitemap"></i>
                            <h3>dbdiagram</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-pencil-ruler"></i>
                            <h3>tldraw</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-book"></i>
                            <h3>Notion</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-php"></i>
                            <h3>PHP</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-laravel"></i>
                            <h3>Laravel</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-css3-alt"></i>
                            <h3>CSS</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-html5"></i>
                            <h3>HTML</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-wind"></i>
                            <h3>Tailwind CSS</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-js"></i>
                            <h3>Alpine.js</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-database"></i>
                            <h3>MySQL</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-rocket"></i>
                            <h3>Anti-Gravity</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-cloud"></i>
                            <h3>Cloudinary</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-laptop-code"></i>
                            <h3>Visual Studio</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-code"></i>
                            <h3>C++</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fa-brands fa-github"></i>
                            <h3>Github</h3>
                        </div>
                        <div class="skill-card">
                            <i class="fa-brands fa-figma"></i>
                            <h3>Figma</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <img src="{{ asset('assets/img/picture2.png') }}" alt="Student Enrollment System" class="project-img">
                    <div class="project-info">
                        <h3>Online Student Enrollment System</h3>
                        <p>A streamlined digital portal designed to simplify academic registration and automate student data management.</p>
                        <div class="improvements">
                            <h4 style="font-size: 0.8rem; color: var(--accent-color); text-transform: uppercase; margin: 1rem 0 0.5rem 0;">Future Roadmap</h4>
                            <ul style="font-size: 0.8rem; color: #888; padding-left: 1rem;">
                                <li>Integrate automated email/SMS status notifications</li>
                                <li>Add a secure online payment gateway for fees</li>
                                <li>Implement real-time dashboard analytics for admins</li>
                            </ul>
                        </div>
                        <a href="#" style="display: block; margin-top: 1.5rem; color: var(--accent-color); text-decoration: none; font-weight: 600;">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card">
                    <img src="{{ asset('assets/img/picture1.png') }}" alt="Finger Lock Management" class="project-img">
                    <div class="project-info">
                        <h3>Finger Lock User Management</h3>
                        <p>Advanced biometric security solution integrating hardware sensors with a robust Laravel dashboard for real-time authentication.</p>
                        <div class="improvements">
                            <h4 style="font-size: 0.8rem; color: var(--accent-color); text-transform: uppercase; margin: 1rem 0 0.5rem 0;">Future Roadmap</h4>
                            <ul style="font-size: 0.8rem; color: #888; padding-left: 1rem;">
                                <li>Implement WebSocket-based real-time entry logs</li>
                                <li>Add multi-layer authentication (Biometric + PIN)</li>
                                <li>Develop a mobile companion app for remote monitoring</li>
                            </ul>
                        </div>
                        <a href="#" style="display: block; margin-top: 1.5rem; color: var(--accent-color); text-decoration: none; font-weight: 600;">Explore Case Study <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card">
                    <img src="{{ asset('assets/img/picture3.png') }}" alt="Photo Management System" class="project-img">
                    <div class="project-info">
                        <h3>Municipal Photo Management System</h3>
                        <p>A centralized asset management platform developed for the Santa Cruz MISO to organize and display municipal event photography.</p>
                        <div class="improvements">
                            <h4 style="font-size: 0.8rem; color: var(--accent-color); text-transform: uppercase; margin: 1rem 0 0.5rem 0;">Future Roadmap</h4>
                            <ul style="font-size: 0.8rem; color: #888; padding-left: 1rem;">
                                <li>Implement AI-powered automated image tagging</li>
                                <li>Add batch processing for watermarks & resizing</li>
                                <li>Create public/private visibility roles for departments</li>
                            </ul>
                        </div>
                        <a href="#" style="display: block; margin-top: 1.5rem; color: var(--accent-color); text-decoration: none; font-weight: 600;">View Implementation <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-container">
                <p style="margin-bottom: 2rem;">Interested in working together? Drop me a message and let's build
                    something amazing.</p>
                <a href="mailto:hello@example.com" class="btn">Send an Email</a>
                <div style="margin-top: 3rem; display: flex; justify-content: center; gap: 2rem;">
                    <a href="https://github.com/xorea24" target="_blank" rel="noopener noreferrer"
                        style="color: white; font-size: 1.5rem;" title="Visit GitHub Profile">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Joshua Portfolio. Built with Laravel and Passion.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Vanta Background
        let vantaEffect = null;
        function initVanta() {
            if (vantaEffect) vantaEffect.destroy();
            const isLight = document.body.classList.contains('light-mode');
            vantaEffect = VANTA.NET({
                el: "#vanta-canvas",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: isLight ? 0x7000ff : 0x00f2ff,
                backgroundColor: isLight ? 0xf8fafc : 0x050505,
                points: 12.00,
                maxDistance: 20.00,
                spacing: 16.00
            });
        }

        // Theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;
        const icon = themeToggle.querySelector('i');

        // Check for saved user preference
        if (localStorage.getItem('theme') === 'light' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: light)').matches)) {
            body.classList.add('light-mode');
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
        }

        initVanta();

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('light-mode');
            const isLight = body.classList.contains('light-mode');
            
            if (isLight) {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
                localStorage.setItem('theme', 'light');
            } else {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
                localStorage.setItem('theme', 'dark');
            }
            
            // Re-init vanta with new colors
            initVanta();
        });
    </script>
</body>

</html>