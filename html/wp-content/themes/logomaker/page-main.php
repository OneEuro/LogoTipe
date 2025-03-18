<?php
get_header();?>

<body <?php body_class(); ?>>
<?php wp_body_open();
$theme_path = get_template_directory_uri();
$assets_path = $theme_path . '/assets'; ?>
<header class="header">
    <div class="container header-container">
        <div class="logo">
            <img src="<?php echo $assets_path; ?>/img/Logo.svg" alt="LogoTipe">
        </div>
        <nav class="desktop-nav">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#use-cases">Use Cases</a></li>
                <li><a href="#reviews">Reviews</a></li>
            </ul>
        </nav>
        <div class="download-button desktop">
            <a href="#" class="btn-download">
                <span>Download</span>
                <img src="<?php echo $assets_path; ?>/img/download-icon.svg" alt="download-icon">
            </a>
        </div>
        <button class="mobile-menu-btn">
            <img src="<?php echo $assets_path; ?>/img/MenuSandwich.svg" alt="sandwich">
        </button>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container container-hero">
            <div class="demo-badge">Demo version is out!</div>
            <div class="hero-content">
                <div class="hero-text-logo">
                    <h1 class="hero-logo-gradient-text">Create a professional logo in minutes with
                        <div class="logo-tipe">
                            <div class="img-container"><img src="<?php echo $assets_path; ?>/img/logo-small.svg" alt="LogoTipe"></div>
                            <span>LogoTipe</span>
                        </div> App
                    </h1>
                </div>
                <div class="hero-text-features-list">
                    <div class="feature-common">
                            <span>Just choose a style, font the preset, choose layouts, and AI will do the
                                rest.</span>
                    </div>
                    <div class="features">
                        <div class="feature">
                            <img src="<?php echo $assets_path; ?>/img/check.svg" alt="check">
                            <span>No design skills</span>
                        </div>
                        <div class="feature">
                            <img src="<?php echo $assets_path; ?>/img/check.svg" alt="check">
                            <span>Result in 5min</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary download-play">Download on Google Play<img src="<?php echo $assets_path; ?>/img/google-play.svg" alt="google-play"></a>
                </div>
                <div class="hero-image">
                    <img src="<?php echo $assets_path; ?>/img/hero-phone.png" alt="LogoTipe App on phone">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits" id="benefits">
        <div class="container">
            <div class="section-header">
                <div class="section-indicator">
                        <span>
                            <div class="blue-circle"></div>Benefits
                        </span>
                </div>
                <h2 class="gradient-text onest-title">Everything you need to easily create a logo in one App</h2>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <img class="blue-arrow-icon" src="<?php echo $assets_path; ?>/img/blue-arrow-icon.png" alt="blue-arrow-icon">
                    </div>
                    <h3>Fast & Easy</h3>
                    <p>Create a logo<br>in 3 simple steps</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <img src="<?php echo $assets_path; ?>/img/blue-star-icon.png" alt="blue-star-icon">
                    </div>
                    <h3>Quality</h3>
                    <p>Unique designs<br>powered by AI</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <img class="blue-circle-icon" src="<?php echo $assets_path; ?>/img/blue-circle-icon.png" alt="blue-circle-icon">
                    </div>
                    <h3>Accessible</h3>
                    <p>No design experience<br>required</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <img src="<?php echo $assets_path; ?>/img/blue-lightning-icon.png" alt="blue-lightning-icon">
                    </div>
                    <h3>Time-Saving</h3>
                    <p>Minutes instead<br>of hours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works" id="how-it-works">
        <div class="container how-it-works_background">
            <div class="section-header">
                <div class="section-indicator">
                        <span>
                            <div class="blue-circle"></div>How It Works
                        </span>
                </div>
                <h2 class="gradient-text onest-title">How to Create a Logo in 3 Steps</h2>
            </div>
            <div class="steps-container">
                <div class="step-card">
                    <div class="step-number">
                        <div class="gradient-number">1</div>
                    </div>
                    <h3>Choose a Style</h3>
                    <p>Select your preferred style (minimal, classic, modern)</p>
                    <div class="step-image">
                        <img src="<?php echo $assets_path; ?>/img/step1-image.png" alt="Choose a Style">
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-number">
                        <div class="gradient-number">2</div>
                    </div>
                    <h3>Customize Details</h3>
                    <p>Add your company name, slogan, and choose colors</p>
                    <div class="step-image">
                        <img src="<?php echo $assets_path; ?>/img/step2-image.png" alt="Customize Details">
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-number">
                        <div class="gradient-number">3</div>
                    </div>
                    <h3>Get Results</h3>
                    <p class="step-card_text">AI generates multiple logo options</p>
                    <div class="step-image">
                        <img src="<?php echo $assets_path; ?>/img/step3-image.png" alt="Get Results">
                    </div>
                </div>
            </div>
            <div class="statistics">
                <div class="stat">
                    <div class="stat-percentage onest-title"><i class="fas fa-arrow-up"></i><span
                                class="gradient-text"> 50%</span></div>
                    <div class="stat-text">Effective decision making</div>
                </div>
                <div class="stat">
                    <div class="stat-percentage onest-title"><i class="fas fa-arrow-up"></i><span
                                class="gradient-text"> 30%</span></div>
                    <div class="stat-text">Easier to use</div>
                </div>
                <div class="stat">
                    <div class="stat-percentage onest-title"><i class="fas fa-arrow-up"></i><span
                                class="gradient-text"> 70%</span></div>
                    <div class="stat-text">Problem solved</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="use-cases" id="use-cases">
        <div class="container">
            <div class="section-header">
                <div class="section-indicator"><span>
                            <div class="blue-circle"></div>Use cases
                        </span></div>
                <h2 class="use-case-gradient-text onest-title">Who is LogoTipe App for?</h2>
            </div>
            <div class="ticker">
                <div id="first-row" class="ticker--parent row">
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-creator.png" alt="Content creator">
                        </div>
                        <p>Content creators</p>
                    </div>
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-startup.png" alt="Startup">
                        </div>
                        <p>Startups</p>
                    </div>
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-business.png" alt="Business owner">
                        </div>
                        <p>Business owners</p>
                    </div>
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-project.png" alt="Small budget project">
                        </div>
                        <p>Small budget projects</p>
                    </div>
                </div>
                <div id="second-row" class="ticker--parent row">
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-student.png" alt="Student">
                        </div>
                        <p>Students</p>
                    </div>
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-blogger.png" alt="Blogger">
                        </div>
                        <p>Bloggers</p>
                    </div>
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-influencer.png" alt="Influencer">
                        </div>
                        <p>Influencers</p>
                    </div>
                    <div class="use-case">
                        <div class="avatar">
                            <img src="<?php echo $assets_path; ?>/img/avatar-agency.png" alt="Event agency">
                        </div>
                        <p>Event agencies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="section-header">
                <div class="section-indicator"><span>
                            <div class="blue-circle"></div>Reviews
                        </span></div>
                <h2 class="reviews-gradient-text onest-title">What Our Users Say</h2>
            </div>

            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides ">
                        <div class="testimonial-card">
                            <div class="card-text">
                                <div class="quote"><img src="<?php echo $assets_path; ?>/img/quote-icon.png" alt="quote"></div>
                                <p>LogoTipe saved me so much time! My cafe's logo was ready in 10 minutes.</p>
                            </div>

                            <div class="testimonial-author">
                                <div class="author-avatar">
                                    <img src="<?php echo $assets_path; ?>/img/avatar-liam.png" alt="Liam O'Connor">
                                </div>
                                <div class="author-info">
                                    <h4>Liam O'Connor</h4>
                                    <p>Cafe Owner</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="card-text">
                                <div class="quote"><img src="<?php echo $assets_path; ?>/img/quote-icon.png" alt="quote"></div>
                                <p>Simple and convenient. Created a portfolio logo in just a few clicks.</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-avatar">
                                    <img src="<?php echo $assets_path; ?>/img/avatar-emily.png" alt="Emily Carter">
                                </div>
                                <div class="author-info">
                                    <h4>Emily Carter</h4>
                                    <p>Web Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="card-text">
                                <div class="quote"><img src="<?php echo $assets_path; ?>/img/quote-icon.png" alt="quote"></div>
                                <p>The perfect logo for my blog! I'm very happy with the quality and speed.</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-avatar">
                                    <img src="<?php echo $assets_path; ?>/img/avatar-noah.png" alt="Noah Kim">
                                </div>
                                <div class="author-info">
                                    <h4>Noah Kim</h4>
                                    <p>Travel Blogger</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="glide__bullets tabs" data-glide-el="controls[nav]">
                    <button class="glide__bullet tab-item" data-glide-dir="=0"></button>
                    <button class="glide__bullet tab-item" data-glide-dir="=1"></button>
                    <button class="glide__bullet tab-item" data-glide-dir="=2"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2 class="onest-title">Create Your Unique Logo Today!</h2>
                    <a href="#" class="btn-primary download-play">Download on Google Play
                        <img src="<?php echo $assets_path; ?>/img/google-play-blue.svg" alt="google-play">
                    </a>
                    <div class="demo">Demo version is out!</div>
                </div>
                <div class="cta-image">
                    <img src="<?php echo $assets_path; ?>/img/cta-phones.png" alt="LogoTipe App screens">
                </div>

            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <p>© LogoTipe, 2025. <a href="#">Privacy Policy</a></p>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');

        if (mobileMenuBtn) {
            let menuOpen = false;
            const modalOverlay = document.createElement('div');
            const mobileNav = document.createElement('nav');
            mobileNav.className = 'mobile-nav';
            modalOverlay.className = 'modal-overlay';

            // Create mobile menu
            const mobileMenu = document.createElement('ul');
            const menuItems = [
                {text: 'About', href: '#'},
                {text: 'Benefits', href: '#benefits'},
                {text: 'How It Works', href: '#how-it-works'},
                {text: 'Use Cases', href: '#use-cases'},
                {text: 'Reviews', href: '#reviews'},
                {text: 'Download', href: '#', class: 'mobile-download'}
            ];

            menuItems.forEach(item => {
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = item.href;
                a.textContent = item.text;
                if (item.class) {
                    a.className = item.class;
                }

                if (item.text === 'Download') {
                    li.style.marginTop = '54px';
                    const icon = document.createElement('img');
                    icon.src = '<?php echo $assets_path; ?>/img/download-icon.svg';
                    icon.alt = 'Download Icon';
                    icon.style.marginLeft = '8px';
                    icon.className = 'download-icon';
                    a.appendChild(icon);
                }

                li.appendChild(a);
                mobileMenu.appendChild(li);
            });

            mobileNav.appendChild(mobileMenu);
            document.body.appendChild(mobileNav);
            document.body.appendChild(modalOverlay);

            // Add styles for mobile menu
            const style = document.createElement('style');
            style.textContent = `
        .mobile-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: white;
            z-index: 999;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-100%);
            opacity: 0;
            transition: all 0.3s ease;
            padding: 20px;
            border-radius: 10px;
            margin: 30px;
            display: none;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 86, 250, 0.8);
            z-index: 998;
            display: none;
        }

        .modal-overlay.active {
            display: block;
        }

        .mobile-nav.active {
            transform: translateY(0);
            opacity: 1;
            display: block;
            text-align: center;
        }

        .mobile-nav ul li {
            margin-bottom: 10px;
        }

        .mobile-nav ul li:last-child {
            margin-bottom: 0;
        }

        .mobile-nav ul li a {
            display: block;
            padding: 10px 0;
            font-size: 18px;
        }

        .mobile-download {
            color: var(--primary);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            border-radius: 10px;
            padding: 8px 12px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            background-color: #FAFAFA;
            gap: 10px;
            color: var(--dark);
            font-weight: 500;
        }

        body.menu-open {
            overflow: hidden;
        }

        body.menu-open main {
            filter: blur(5px);}
        `;
            document.head.appendChild(style);

            // Toggle mobile menu
            mobileMenuBtn.addEventListener('click', function () {
                menuOpen = !menuOpen;
                if (menuOpen) {
                    mobileNav.classList.add('active');
                    modalOverlay.classList.add('active');
                    document.body.classList.add('menu-open');
                    mobileMenuBtn.innerHTML = '<i class="fas fa-times"></i>';
                } else {
                    mobileNav.classList.remove('active');
                    modalOverlay.classList.remove('active');
                    document.body.classList.remove('menu-open');
                    mobileMenuBtn.innerHTML = '<img src="<?php echo $assets_path; ?>/img/MenuSandwich.svg" alt="sandwich">';
                }
            });

            // Close menu when clicking on links
            const mobileNavLinks = mobileNav.querySelectorAll('a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function () {
                    mobileNav.classList.remove('active');
                    modalOverlay.classList.remove('active');
                    document.body.classList.remove('menu-open');
                    mobileMenuBtn.innerHTML = '<img src="<?php echo $assets_path; ?>/img/MenuSandwich.svg" alt="sandwich">';
                    menuOpen = false;
                });
            });
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/glide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 3,
            gap: 20,
            breakpoints: {
                987: {
                    perView: 2
                },
                758: {
                    perView: 1
                }
            }
        }).mount();
    });
</script>
</body>

</html>