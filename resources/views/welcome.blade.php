<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Creative Developer</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="bg-glow"></div>

    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero" id="home">
            <img src="{{ asset('assets/img/profile.png') }}" alt="Profile" class="profile-img">
            <h1>Hi, I'm <span style="color: var(--accent-color)">Joshua Lanz A Regalado</span>.</h1>
            <p>Laravel Developer


            </p>
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
                <div style="display: flex; justify-content: center; gap: 3rem; margin-top: 3rem;">
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
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="{{ asset('assets/img/project1.png') }}" alt="Project Aura" class="project-img">
                    <div class="project-info">
                        <h3>Aura Meditation</h3>
                        <p>A futuristic mindfulness app focused on serenity and abstract visual journeys.</p>
                        <a href="#" style="color: var(--accent-color); text-decoration: none;">Explore Case Study <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset('assets/img/project2.png') }}" alt="Project Nova" class="project-img">
                    <div class="project-info">
                        <h3>Nova Crypto</h3>
                        <p>High-performance analytics dashboard for real-time cryptocurrency tracking.</p>
                        <a href="#" style="color: var(--accent-color); text-decoration: none;">Explore Case Study <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-card">
                    <div
                        style="height: 200px; background: #111; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-code-branch fa-3x" style="color: var(--secondary-accent)"></i>
                    </div>
                    <div class="project-info">
                        <h3>Pulse Fitness</h3>
                        <p>AI-driven fitness tracking application for professional athletes.</p>
                        <a href="#" style="color: var(--accent-color); text-decoration: none;">Explore Case Study <i
                                class="fas fa-arrow-right"></i></a>
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
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-github"></i></a>
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Alex Portfolio. Built with Laravel and Passion.</p>
    </footer>

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
    </script>
</body>

</html>