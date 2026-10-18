<?php
require_once __DIR__ . '/language.php';
require __DIR__ . '/header.php';
?>

<main class="home-page">
    <section id="home" class="hero">
        <div class="hero-identity">
            <div class="hero-intro">
                <h1 class="hero-name">NAZLI EROGLU</h1>
                <div class="hero-title">SOFTWARE DEVELOPER</div>
            </div>
            <div class="hero-profile">
                <img
                    class="hero-photo"
                    src="./images/me2.jpg"
                    alt="Nazli Eroglu"
                    width="360"
                    height="450"
                >
            </div>
        </div>

        <div class="hero-description">
            <span>Custom Websites</span>
            <span>Databases</span>
            <span>Backend</span>
            <span>Hardware</span>
        </div>
    </section>

  <section id="about" class="about-section">
      <div class="about-stage">
          <h2 class="about-label"><?= t('about_title') ?></h2>

<p class="about-statement"><?= t('about_statement') ?></p>

<p class="about-description">
    <?= t('about_description') ?>
</p>
          <div>
<nav>
    <a class="cv" href="./cv.php">
        <?= t('about_cv_text') ?>
    </a>
</nav>
          </div>
      </div>
  </section>


<section id="projects" class="projects-section">
    <h2 class="projects-title"><?= t('projects_title') ?></h2>

    <div class="projects-container">
        <article class="project">
            <a class="project-preview-link" href="./project-detail.php?project=jvis">
                <span class="project-image project-carousel" data-project-carousel>
                    <span class="project-carousel-track">
                        <?php foreach (range(1, 6) as $photoNumber): ?>
                    <img
                        src="./images/fotograaf<?= $photoNumber ?>.jpg"
                        alt="J.VIS PHOTOGRAPHY project photo <?= $photoNumber ?> of 6"
                        <?= $photoNumber > 1 ? 'loading="lazy"' : '' ?>
                    >
                <?php endforeach; ?>
                    </span>
                </span>

                <span class="project-info">
                    <strong class="project-name">J.VIS PHOTOGRAPHY</strong>
                    <span class="project-type">LARAVEL — WEBSITE</span>
                    <span class="project-toggle"><?= t('project_details') ?> ↗</span>
                </span>
            </a>
            <a
        class="project-website"
        href="https://jvisfotografie-nl.onrender.com/"
        target="_blank"
        rel="noopener noreferrer"
    >
        <?= t('visit_website') ?> ↗
    </a>
        </article>

 <article class="project">
    <a class="project-preview-link" href="./project-detail.php?project=signalshark">
        <span class="project-image project-carousel" data-project-carousel>
            <span class="project-carousel-track">
                <?php foreach (range(1, 6) as $photoNumber): ?>
                    <img
                        src="./images/signalshark<?= $photoNumber ?>.jpg"
                        alt="SignalShark project photo <?= $photoNumber ?> of 6"
                        <?= $photoNumber > 1 ? 'loading="lazy"' : '' ?>
                    >
                <?php endforeach; ?>
            </span>
        </span>

        <span class="project-name">SIGNALSHARK — IoT Radio & Aircraft Tracker</span>
        <span class="project-category">ESP32-S3 | C++ | Arduino IDE | Wi-Fi | nRF24L01</span>
        <span class="project-details-label"><?= t('project_details') ?> ↗</span>
    </a>
 </article>
    </div>

    <a href="/project.php" class="all-projects-button">
        <?= t('all_projects') ?>
    </a>
</section>


<section id="contact" class="contact-section contact-simple">
    <div class="contact-simple-inner">
        <div class="contact-simple-copy">
            <h2><?= t('contact') ?></h2>
            <p><?= t('contact_simple_text') ?></p>
        </div>

        <div class="contact-simple-links">
            <a class="contact-link-card" href="mailto:nazli.eroglux@gmail.com">
                <span class="contact-link-text">
                    <span class="contact-link-label"><?= t('contact_email') ?></span>
                    <strong>nazli.eroglux@gmail.com</strong>
                </span>
                <span class="contact-link-arrow" aria-hidden="true">↗</span>
            </a>

            <a
                class="contact-link-card"
                href="https://linkedin.com/in/nazli-eroglu-191baa370"
                target="_blank"
                rel="noopener noreferrer"
            >
                <span class="contact-link-text">
                    <span class="contact-link-label">LinkedIn</span>
                    <strong><?= t('contact_profile') ?></strong>
                </span>
                <span class="contact-link-arrow" aria-hidden="true">↗</span>
            </a>
        </div>

    </div>
</section>

</main>

<?php require 'footer.php' ; ?>
