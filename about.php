<?php
$name = 'Kurt Rosal';
$role = 'BSIT Student';
$email = 'wendelrosal51.@gmail.com';

$skills = [
    [
        'name' => 'HTML',
        'image' => './uploads/html.png'
    ],
    [
        'name' => 'CSS',
        'image' => './uploads/css.png'
    ],
    [
        'name' => 'JavaScript',
        'image' => './uploads/javascript.png'
    ],
    [
        'name' => 'PHP',
        'image' => './uploads/php.png'
    ],
    [
        'name' => 'Java',
        'image' => './uploads/java.png'
    ],
    [
        'name' => 'C#',
        'image' => './uploads/csharp.png'
    ],
    [
        'name' => 'MySQL',
        'image' => './uploads/mysql.png'
    ],
    [
        'name' => 'React',
        'image' => './uploads/react.webp'
    ],
    [
        'name' => 'Unity',
        'image' => './uploads/unity.png'
    ],
    [
        'name' => 'Packet Tracer',
        'image' => './uploads/cisco.webp'
    ]
];

$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>, a BSIT student interested in software, web, and game development.">

    <title>About Me | <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="about.css">
</head>

<body>

    <header class="site-header">
        <nav class="container navbar">
            <a href="#about" class="logo">
                <span class="logo-mark">K</span>
                <span><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></span>
            </a>

            <div class="nav-links">
                <a href="#about" class="nav-link active">About</a>
                <a href="projects.php" class="nav-link portfolio-link">Portfolio <span>&nearr;</span></a>
            </div>
        </nav>
    </header>

    <main class="container">

        <section id="about" class="hero">
            <div class="hero-content">

                <h1>
                    Hello, I'm <span class="highlight"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>.</span>
                </h1>

                <p class="hero-description">
                    I'm an Information Technology student at Pamantasan ng Lungsod ng Valenzuela
                    with a passion for software, web, and game development. I enjoy turning
                    ideas into elegant, functional projects while constantly leveling up my skills.
                </p>

                <div class="hero-actions">
                    <a href="projects.php" class="btn btn-primary">
                        Explore My Projects <span>&rarr;</span>
                    </a>

                    <a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-secondary">
                        Contact Me
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="photo-frame">
                    <img
                        src="uploads/1x1.jpg"
                        alt="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>"
                        class="profile-photo">
                </div>
            </div>
        </section>

        <section class="about-section section-divider">
            <div class="section-heading">
                <span class="section-label">01 / ABOUT</span>
                <h2>A little about me<span class="heading-dot">.</span></h2>
            </div>

            <div class="about-grid">
                <div class="about-intro">
                    <h3>Curious about technology. <br>Passionate about creating.</h3>
                    <!-- <div class="about-tags">
                        <span class="about-tag">BSIT Undergraduate</span>
                        <span class="about-tag">PLV</span>
                        <span class="about-tag">Aspiring Full-Stack Dev</span>
                    </div> -->
                </div>

                <div class="about-description">
                    <p>
                        My interest in technology started with wanting to understand how
                        computers, websites, and applications work under the hood. That curiosity led me
                        to pursue a Bachelor of Science in Information Technology.
                    </p>

                    <p>
                        As a student, I explore different programming languages and build
                        academic and personal projects that provide hands-on experience.
                        I enjoy experimenting with ideas, tackling complex logic, and learning
                        how modern architectures come together.
                    </p>

                    <p>
                        My goal is to become a software engineer who builds reliable,
                        accessible, and high-impact applications while continuously pushing my boundaries.
                    </p>
                </div>
            </div>
        </section>

        <section class="skills-section section-divider">
            <div class="section-heading">
                <span class="section-label">02 / SKILLS</span>
                <h2>Tools I work with<span class="heading-dot">.</span></h2>
                <p>Technologies and frameworks I've studied, practiced, and deployed in projects.</p>
            </div>

            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill-card">
                        <img
                            src="<?php echo htmlspecialchars($skill['image'], ENT_QUOTES, 'UTF-8'); ?>"
                            alt="<?php echo htmlspecialchars($skill['name'], ENT_QUOTES, 'UTF-8'); ?>"
                            class="skill-image"
                            loading="lazy">

                        <span class="skill-name">
                            <?php echo htmlspecialchars($skill['name'], ENT_QUOTES, 'UTF-8'); ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="interests-section section-divider">
            <div class="section-heading">
                <span class="section-label">03 / FOCUS AREAS</span>
                <h2>What I enjoy doing<span class="heading-dot">.</span></h2>
            </div>

            <div class="interests-grid">
                <article class="interest-card">
                    <div class="interest-icon">&lt;/&gt;</div>
                    <span class="interest-number">01</span>
                    <h3>Web Development</h3>
                    <p>
                        Building responsive, accessible web applications with clean architecture and delightful user experiences.
                    </p>
                </article>

                <article class="interest-card">
                    <div class="interest-icon">{ }</div>
                    <span class="interest-number">02</span>
                    <h3>Software Development</h3>
                    <p>
                        Writing clean, maintainable code, solving algorithmic challenges, and structuring robust backend systems.
                    </p>
                </article>

                <article class="interest-card">
                    <div class="interest-icon">✳</div>
                    <span class="interest-number">03</span>
                    <h3>Game Development</h3>
                    <p>
                        Prototyping gameplay mechanics in Unity, crafting interactive experiences, and bringing creative worlds to life.
                    </p>
                </article>
            </div>
        </section>

        <section class="contact-section">
            <div class="contact-content">
                <span class="section-label">04 / CONTACT</span>
                <h2>Let's build together<span class="heading-dot">.</span></h2>
                <p>
                    Have an upcoming project, an internship opportunity, or just want to talk tech?
                    My inbox is always open.
                </p>

                <div class="contact-actions">
                    <a
                        href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"
                        class="contact-email">
                        <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>
                        <span>&nearr;</span>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <a href="#about" class="footer-logo">KR<span>.</span></a>

            <p>
                Designed and built by <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>.
            </p>

            <span class="copyright">&copy; <?php echo $currentYear; ?></span>
        </div>
    </footer>

</body>

</html>