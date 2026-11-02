<?php
require_once __DIR__ . '/language.php';
require __DIR__ . '/header.php';
?>

<main class="home-page">
    <section id="home" class="hero hero-creative">
        <div class="creative-masthead">
            <span class="creative-name">NAZLI EROGLU</span>
            <span class="creative-kicker"><?= t('hero_kicker') ?></span>
        </div>

        <div class="creative-headline" aria-label="<?= htmlspecialchars(t('hero_headline'), ENT_QUOTES, 'UTF-8') ?>">
            <h1 class="creative-line creative-solid"><?= t('hero_headline') ?></h1>
            <p class="creative-line creative-outline"><?= t('hero_subheadline') ?></p>
        </div>

        <div class="creative-footer">
            <span class="creative-focus"><?= t('hero_focus') ?></span>
        </div>
    </section>


<section class="profile-strip">
    <div>
        <span>ROLE</span>
        <p>Software Developer</p>
    </div>

    <div>
        <span>STUDYING</span>
        <p>MediaCollege Amsterdam</p>
    </div>

    <div>
        <span>FOCUS</span>
        <p>Backend · Hardware · Custom Websites · Databases</p>
    </div>

    <div>
        <span>LOOKING FOR</span>
        <p>An internship</p>
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
        <span class="project-category">ESP32-S3 | C++ | Python</span>
        <span class="project-details-label"><?= t('project_details') ?> ↗</span>
    </a>
 </article>
    </div>

    <a href="/project.php" class="all-projects-button">
        <?= t('all_projects') ?>
    </a>
</section>


</main>

<?php require 'footer.php' ; ?>
