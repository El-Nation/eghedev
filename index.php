<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eghe Destiny | Web Developer Portfolio</title>
    <meta name="description" content="Eghe Destiny - I build fast, scalable websites that help businesses grow. Specialized in modern web experiences.">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">DESTINY<span>.</span></a>
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">What I Do</a></li>
                    <li><a href="#projects">Work</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="header-actions" style="display: flex; align-items: center; gap: 1rem;">
                    <a href="https://linkedin.com/in/destiny-eghenayahiorre" target="_blank" title="LinkedIn" class="linkedin-icon" style="font-size: 1.5rem; color: var(--text-primary); transition: color 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--text-primary)'"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/El-Nation" target="_blank" title="GitHub" class="github-icon" style="font-size: 1.5rem; color: var(--text-primary); transition: color 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--text-primary)'"><i class="fab fa-github"></i></a>
                    <a href="https://www.upwork.com/freelancers/~0115b4811e32b7417f" target="_blank" class="upwork-btn btn-nav" style="background: #14a800; color: #fff; padding: 0.6rem 1rem;">Hire Me on Upwork</a>
                    <a href="https://www.fiverr.com/elnation" target="_blank" class="fiverr-btn btn-nav" style="background: #1dbf73; color: #fff; padding: 0.6rem 1rem;">Hire Me on Fiverr</a>
                    <a href="#contact" class="btn-nav hire-btn">Hire Me <i class="fas fa-arrow-right"></i></a>
                    <button class="hamburger" id="hamburger">☰</button>
                </div>
            </nav>
            <div class="mobile-menu" id="mobileMenu">
                <a href="https://linkedin.com/in/destiny-eghenayahiorre" target="_blank">LinkedIn</a>
                <a href="https://github.com/El-Nation" target="_blank">GitHub</a>
                <a href="https://www.upwork.com/freelancers/~0115b4811e32b7417f" target="_blank">Hire Me on Upwork</a>
                <a href="https://www.fiverr.com/elnation" target="_blank">Hire Me on Fiverr</a>
                <a href="#contact">Hire Me →</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="bg-mesh"></div>
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-tag reveal">
                        <span class="dot"></span> Available for freelance work
                    </div>
                    <h1 class="reveal">Hi, I’m Eghe. <span>I build fast, scalable websites.</span></h1>
                    <p class="hero-subtext reveal">I design and develop modern, user-friendly web experiences that are optimized for performance, scalability, and sites people actually enjoy using</p>
                    <p class="hero-extra reveal">I help businesses and individuals turn ideas into fast, modern, and scalable web solutions.</p>
                    <div class="hero-btns reveal">
                    <a href="#projects" class="btn btn-primary">View My Work <i class="fas fa-arrow-right"></i></a>
                    <a href="#contact" class="btn btn-secondary">Hire Me <i class="fas fa-arrow-right"></i></a>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section class="section" id="about">
        <div class="bg-mesh"></div>
        <div class="container">
            <div class="about-grid">
                <div class="about-content reveal">
                    <h2>👤 About Me</h2>
                    <div class="about-text">
                        <p>I’m Eghe, a web developer passionate about building clean, efficient, and user-focused digital experiences. I specialize in creating responsive websites and web applications that combine modern design with strong functionality.</p>
                        <p>With experience in both frontend and backend development, I focus on writing maintainable code, optimizing performance, and delivering solutions that are not only visually appealing but also reliable and scalable.</p>
                        <p>I don’t just build websites — I build solutions that solve real problems and deliver measurable results.</p>
                    </div>
                </div>
                <div class="about-image reveal">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Eghe Destiny Coding">
                </div>
            </div>
        </div>
    </section>

    <!-- What I Do -->
    <section class="section" id="services">
        <div class="bg-mesh"></div>
        <div class="container">
            <div class="section-header reveal">
                <h2>🧠 What I Do</h2>
            </div>
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon"><i class="fas fa-code"></i></div>
                    <h3>Web Development</h3>
                    <p>Modern, responsive websites built for speed, usability, and performance across all devices.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h3>E-commerce Development</h3>
                    <p>Secure and scalable online stores with seamless user experience, product management, and checkout systems.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Custom Web Applications</h3>
                    <p>Tailored systems such as dashboards, management tools, and business solutions designed to solve real-world problems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="section" id="tech">
        <div class="bg-mesh"></div>
        <div class="container">
            <div class="section-header reveal">
                <h2>🛠 Tech Stack</h2>
            </div>
            <div class="tech-container reveal">
                <div class="tech-group">
                    <h3>Frontend</h3>
                    <div class="tech-list">
                        <div class="tech-item"><i class="fab fa-html5"></i> HTML</div>
                        <div class="tech-item"><i class="fab fa-css3-alt"></i> CSS</div>
                        <div class="tech-item"><i class="fab fa-js"></i> JavaScript</div>
                    </div>
                </div>
                <div class="tech-group">
                    <h3>Backend</h3>
                    <div class="tech-list">
                        <div class="tech-item"><i class="fab fa-php"></i> PHP</div>
                        <div class="tech-item"><i class="fas fa-database"></i> MySQL</div>
                    </div>
                </div>
                <div class="tech-group">
                    <h3>Tools & Others</h3>
                    <div class="tech-list">
                        <div class="tech-item"><i class="fab fa-git-alt"></i> Git</div>
                        <div class="tech-item"><i class="fas fa-plug"></i> APIs</div>
                        <div class="tech-item"><i class="fas fa-server"></i> Hosting</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Project -->
    <section class="section" id="projects">
        <div class="bg-mesh"></div>
        <div class="container">
            <div class="section-header reveal">
                <h2>⭐ Featured Projects</h2>
            </div>
            
            <?php
            // Fetch Featured Project
            $featured_res = $conn->query("SELECT * FROM portfolio_projects WHERE is_featured = 1 ORDER BY id ASC");
            if ($featured_res && $featured_res->num_rows > 0):
                while($fp = $featured_res->fetch_assoc()):
            ?>
            <div class="featured-project reveal" style="margin-bottom: 60px;">
                <div class="fp-card">
                    <div class="fp-image">
                        <img src="<?php echo $fp['image_url']; ?>" alt="<?php echo $fp['title']; ?>">
                    </div>
                    <div class="fp-content">
                        <span class="fp-badge">Featured Project</span>
                        <h3><?php echo $fp['title']; ?></h3>
                        <p><?php echo $fp['description']; ?></p>
                        <div class="fp-features">
                            <?php 
                            $techs = explode(',', $fp['tech_stack']);
                            foreach($techs as $tech):
                            ?>
                            <div class="fp-feat"><?php echo trim($tech); ?></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="fp-action-area">
                            <div class="hero-btns">
                                <a href="<?php echo $fp['demo_url']; ?>" target="_blank" class="btn btn-primary">Live Demo <i class="fas fa-external-link-alt"></i></a>
                            </div>
                            <?php 
                            $trimmed_title = trim($fp['title']);
                            if ($trimmed_title === 'MEDIFLOW'): 
                            ?>
                            <div class="fp-credentials">
                                <div class="cred-header">
                                    <i class="fas fa-key"></i> <span>Demo Access</span>
                                </div>
                                <div class="cred-grid">
                                    <div class="cred-row">
                                        <span class="role">Admin:</span>
                                        <span class="user-pass">admin@test.com | 123456</span>
                                    </div>
                                    <div class="cred-row">
                                        <span class="role">Doctor:</span>
                                        <span class="user-pass">doc@test.com | 123456</span>
                                    </div>
                                    <div class="cred-row">
                                        <span class="role">Nurse:</span>
                                        <span class="user-pass">nurse@test | 123456</span>
                                    </div>
                                </div>
                            </div>
                            <?php elseif ($trimmed_title === 'ManageX'): ?>
                            <div class="fp-credentials" style="border-color: var(--accent-color); background: rgba(0, 242, 255, 0.05); padding: 1.2rem 1.5rem; border-radius: 12px; border: 1px solid var(--accent-color); position: relative;">
                                <div class="cred-header" style="color: var(--accent-color); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 700; margin-bottom: 0.8rem; display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-lock"></i> <span>Secure Demo Access</span>
                                </div>
                                <div class="cred-grid" style="display: flex; flex-direction: column; gap: 0.4rem;">
                                    <div class="cred-row" style="display: flex; gap: 10px; font-size: 0.85rem;">
                                        <span class="role" style="color: var(--accent-color); font-weight: 600; min-width: 55px;">Admin:</span>
                                        <span class="user-pass" style="color: #fff; font-family: monospace;">admin@demo.com | admin123</span>
                                    </div>
                                    <div class="cred-row" style="display: flex; gap: 10px; font-size: 0.85rem;">
                                        <span class="role" style="color: var(--accent-color); font-weight: 600; min-width: 55px;">Staff:</span>
                                        <span class="user-pass" style="color: #fff; font-family: monospace;">staff@demo.com | 123456</span>
                                    </div>
                                </div>
                            </div>
                            <?php elseif ($trimmed_title === 'Apex Markets'): ?>
                            <div class="fp-credentials" style="border-color: #f59e0b; background: rgba(245, 158, 11, 0.05); padding: 1.2rem 1.5rem; border-radius: 12px; border: 1px solid #f59e0b; position: relative;">
                                <div class="cred-header" style="color: #f59e0b; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 700; margin-bottom: 0.8rem; display: flex; align-items: center; gap: 8px;">
                                    <i class="fas fa-user-circle"></i> <span>Demo Login</span>
                                </div>
                                <div class="cred-grid" style="display: flex; flex-direction: column; gap: 0.4rem;">
                                    <div class="cred-row" style="display: flex; gap: 10px; font-size: 0.85rem;">
                                        <span class="role" style="color: #f59e0b; font-weight: 600; min-width: 75px;">Username:</span>
                                        <span class="user-pass" style="color: #fff; font-family: monospace;">demo</span>
                                    </div>
                                    <div class="cred-row" style="display: flex; gap: 10px; font-size: 0.85rem;">
                                        <span class="role" style="color: #f59e0b; font-weight: 600; min-width: 75px;">Password:</span>
                                        <span class="user-pass" style="color: #fff; font-family: monospace;">Demo@1234</span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>

            <div class="projects-intro reveal">
                <p>💼 Here are some of the projects I’ve worked on, showcasing my ability to build functional, user-friendly, and scalable web solutions.</p>
            </div>

            <div class="project-grid">
                <?php
                // Fetch other projects
                $projects_res = $conn->query("SELECT * FROM portfolio_projects WHERE is_featured = 0 ORDER BY id DESC");
                while($row = $projects_res->fetch_assoc()):
                ?>
                <div class="p-card reveal">
                    <div class="p-image">
                        <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['title']; ?>">
                    </div>
                    <div class="p-content">
                        <span class="p-tech"><?php echo $row['tech_stack']; ?></span>
                        <h3><?php echo $row['title']; ?></h3>
                        <div class="p-highlights">
                            <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 1.5rem;">
                                <?php echo $row['description']; ?>
                            </p>
                        </div>
                        <div class="p-action-area" style="display: flex; flex-direction: column; gap: 1.5rem; align-items: flex-start;">
                            <div class="hero-btns">
                                <a href="<?php echo $row['demo_url']; ?>" target="_blank" class="btn btn-primary">Live Demo</a>
                            </div>
                            <?php 
                            $trimmed_grid_title = trim($row['title']);
                            if ($trimmed_grid_title === 'ManageX'): 
                            ?>
                            <div class="p-credentials" style="width: 100%; background: rgba(0, 242, 255, 0.05); padding: 1rem; border-radius: 10px; border: 1px solid var(--accent-color);">
                                <div class="cred-header" style="color: var(--accent-color); font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 700; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 6px;">
                                    <i class="fas fa-lock"></i> <span>Login Details</span>
                                </div>
                                <div class="cred-grid" style="display: flex; flex-direction: column; gap: 0.3rem;">
                                    <div class="cred-row" style="display: flex; gap: 8px; font-size: 0.8rem;">
                                        <span class="role" style="color: var(--accent-color); font-weight: 600; min-width: 50px;">Admin:</span>
                                        <span class="user-pass" style="color: #fff; font-family: monospace;">admin@demo.com | admin123</span>
                                    </div>
                                    <div class="cred-row" style="display: flex; gap: 8px; font-size: 0.8rem;">
                                        <span class="role" style="color: var(--accent-color); font-weight: 600; min-width: 50px;">Staff:</span>
                                        <span class="user-pass" style="color: #fff; font-family: monospace;">staff@demo.com | 123456</span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Me -->
    <section class="section" id="why">
        <div class="container">
            <div class="section-header reveal">
                <h2>⭐ Why Choose Me</h2>
            </div>
            <div class="why-grid">
                <div class="why-item reveal">
                    <h3><i class="fas fa-check-circle"></i> Quality Code</h3>
                    <p>Clean and maintainable code following industry best practices.</p>
                </div>
                <div class="why-item reveal">
                    <h3><i class="fas fa-bolt"></i> Performance</h3>
                    <p>Strong focus on performance, speed, and optimization.</p>
                </div>
                <div class="why-item reveal">
                    <h3><i class="fas fa-mobile-alt"></i> Responsive</h3>
                    <p>Fully responsive designs that work perfectly across all devices.</p>
                </div>
                <div class="why-item reveal">
                    <h3><i class="fas fa-comments"></i> Reliable</h3>
                    <p>Clear communication, reliability, and attention to detail.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- My Process -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header reveal">
                <h2>🧩 My Process</h2>
            </div>
            <div class="process-steps">
                <div class="step reveal">
                    <div class="step-num">01</div>
                    <div class="step-content">
                        <h3>Understanding Your Idea</h3>
                        <p>I take time to fully understand your goals and requirements.</p>
                    </div>
                </div>
                <div class="step reveal">
                    <div class="step-num">02</div>
                    <div class="step-content">
                        <h3>Planning & Design</h3>
                        <p>I structure and design the best approach for your project.</p>
                    </div>
                </div>
                <div class="step reveal">
                    <div class="step-num">03</div>
                    <div class="step-content">
                        <h3>Development</h3>
                        <p>I build your solution using clean and efficient code.</p>
                    </div>
                </div>
                <div class="step reveal">
                    <div class="step-num">04</div>
                    <div class="step-content">
                        <h3>Testing & Optimization</h3>
                        <p>I ensure everything works perfectly and runs smoothly.</p>
                    </div>
                </div>
                <div class="step reveal">
                    <div class="step-num">05</div>
                    <div class="step-content">
                        <h3>Deployment</h3>
                        <p>Your project goes live, ready for real users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="bg-mesh"></div>
        <div class="container">
            <div class="pricing-note reveal">
                <p>💰 <strong>Pricing Note:</strong> Every project is unique, and pricing depends on its scope and specific requirements. Let’s discuss your project and find the best solution that fits your needs and budget.</p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-info reveal">
                    <h2>Let’s Build Something Great Together</h2>
                    <p>Have a project in mind or need a developer? I’m available to help bring your ideas to life. Let’s connect and discuss how we can work together.</p>
                    
                    <div class="contact-details">
                        <div class="c-item">
                            <div class="c-icon"><i class="fas fa-envelope"></i></div>
                            <div class="c-text">
                                <span>Email Me</span>
                                <strong>eghedestiny10@gmail.com</strong>
                            </div>
                        </div>
                        <div class="c-item">
                            <div class="c-icon"><i class="fas fa-phone"></i></div>
                            <div class="c-text">
                                <span>Call Me</span>
                                <strong>07066784058</strong>
                            </div>
                        </div>
                        <div class="c-item">
                            <div class="c-icon"><i class="fab fa-whatsapp"></i></div>
                            <div class="c-text">
                                <span>WhatsApp</span>
                                <strong><a href="https://wa.me/2347066784058" target="_blank" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem; margin-top: 0.5rem;">Chat on WhatsApp</a></strong>
                            </div>
                        </div>

                        <!-- Social Platforms -->
                        <div class="social-platforms">
                            <p style="color: #888; margin-bottom: 1rem;">Or hire me on:</p>
                            <div class="social-btns">
                                <a href="https://linkedin.com/in/destiny-eghenayahiorre" target="_blank" class="s-btn">
                                    <i class="fab fa-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://github.com/El-Nation" target="_blank" class="s-btn">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="https://www.upwork.com/freelancers/~0115b4811e32b7417f" target="_blank" class="s-btn" style="background: #14a800;">
                                    <i class="fas fa-briefcase"></i> Upwork
                                </a>
                                <a href="https://www.fiverr.com/elnation" target="_blank" class="s-btn" style="background: #1dbf73;">
                                    <i class="fas fa-star"></i> Fiverr
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form reveal">
                    <form id="contact-form" action="contact_handler.php" method="POST">
                        <!-- Honeypot Field (Anti-Spam) -->
                        <div class="form-group" style="display:none;">
                            <label for="website">Website (Leave blank)</label>
                            <input type="text" id="website" name="website" class="form-control" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Project Details</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Tell me about your project..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-top">
                <a href="#" class="logo">DESTINY<span>.</span></a>
                <div class="social-links">
                    <a href="https://github.com/El-Nation" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/destiny-eghenayahiorre" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.upwork.com/freelancers/~0115b4811e32b7417f" target="_blank" title="Upwork">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.56 5.91c-2.43 0-4.48 1.4-5.46 3.42a18.25 18.25 0 0 1-2.22-6.13H7.55v8.13c0 1.83-1.49 3.32-3.32 3.32S.91 13.16.91 11.33V3.2H-2.4v8.13c0 3.67 2.99 6.64 6.64 6.64s6.64-2.97 6.64-6.64V8.41a16.63 16.63 0 0 0 1.82 4.41l-2.42 7.02h3.33l1.83-5.22c1.07.66 2.34 1.05 3.71 1.05 3.94 0 7.13-3.19 7.13-7.13s-3.19-7.13-7.13-7.13zm0 11.23c-1.39 0-2.67-.47-3.69-1.25l.89-2.58a4.11 4.11 0 0 0 2.8 1.05c2.26 0 4.1-1.84 4.1-4.1s-1.84-4.1-4.1-4.1-4.1 1.84-4.1 4.1c0 .28.03.55.08.82l-2.02 5.86c-1.12.92-2.57 1.47-4.16 1.47-3.67 0-6.64-2.97-6.64-6.64v-8.13H4.24v8.13c0 1.83 1.49 3.32 3.32 3.32s3.32-1.49 3.32-3.32v-2.31a19.78 19.78 0 0 1 2.37-6.64h2.95c.95-1.57 2.65-2.61 4.56-2.61 2.92 0 5.29 2.37 5.29 5.29s-2.37 5.29-5.29 5.29z"/>
                        </svg>
                    </a>
                    <a href="https://www.fiverr.com/elnation" target="_blank" title="Fiverr">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19.98 12.01c0-4.41-3.57-7.98-7.98-7.98-4.41 0-7.98 3.57-7.98 7.98 0 4.41 3.57 7.98 7.98 7.98 4.41 0 7.98-3.57 7.98-7.98zm-11.96 0c0-2.2 1.78-3.98 3.98-3.98 2.2 0 3.98 1.78 3.98 3.98 0 2.2-1.78 3.98-3.98 3.98-2.2 0-3.98-1.78-3.98-3.98z"/>
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Eghe Destiny. All rights reserved.</p>
                <p>Built with precision</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/2347066784058" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="script.js?v=<?php echo time(); ?>"></script>
    <script>
        document.getElementById('hamburger').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('active');
        });
    </script>
</body>
</html>
