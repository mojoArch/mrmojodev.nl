<?php
require_once __DIR__ . '/language.php';
require __DIR__ . '/header.php';
?>
 <main class="projects-page">
      <section id="projects" class="projects-section">
         
 <div class="projects-title">
          <h1><?= t('work') ?></h1>
</div>
          <div class="projects-container">

                        <details class="project">
                  <summary>
                      <span class="project-image">
                          <img
                              src="./images/fotograaf.jpg"
                              alt="Preview van de fotografiewebsite"
                          >
                      </span>


<span class="project-name">J.VIS PHOTOGRAPHY</span>

<span class="project-meta">
    <span class="project-type">LARAVEL — WEBSITE</span>

    <span class="project-toggle">
        <?= t('project_details') ?>
    </span>

    <a
        class="project-website"
        href="https://jvisfotografie-nl.onrender.com/"
        target="_blank"
        rel="noopener noreferrer"
    >
        <?= t('visit_website') ?> ↗
    </a>
</span>
                  </summary>

<div class="project-description">
    <p><?= t('photography_description') ?></p>
</div>

              </details>
              
              <details class="project">
                  <summary>
                      <span class="project-image">
                          <img
                              src="./images/justitie.jpg"
                              alt="Preview van de advocatenwebsite"
                          >
                      </span>

                      <span class="project-info">
    <strong class="project-name">NevaNexis</strong>

    <span class="project-meta">
        <span class="project-type">PHP — WEBSITE</span>

        <span class="project-toggle">
            <?= t('project_details') ?>
        </span>

        <a
            class="project-website"
            href="https://www.nevanexis.nl/"
            target="_blank"
            rel="noopener noreferrer"
        >
            <?= t('visit_website') ?> ↗
        </a>
    </span>
</span>
                  </summary>

<div class="project-description">
    <p><?= t('lawyer_description') ?></p>
</div>
              </details>

              <details class="project">
                  <summary>
                      <span class="project-image">
                          <img
                              src="./images/image.jpg"
                              alt="Cyberdeck-project"
                          >
                      </span>

                      <span class="project-name">CYBERDECK</span>
                      <span class="project-category">HARDWARE</span>
                      <span class="project-toggle"></span>
                  </summary>

                  <div class="project-description">
                      <p>
                          Een hardwareproject waarin ik mijn interesse
                          in elektronica en software samenbreng.
                      </p>
                  </div>
              </details>
              <details class="project">
    <summary>
        <span class="project-image">
            <img
                src="./images/signalshark.jpg"
                alt="SignalShark ESP32 wireless scanner"
            >
        </span>

        <span class="project-name">SIGNALSHARK — AIRSPACE EXPLORER</span>
        <span class="project-category">ESP32-S3 | C++ | Arduino IDE | Wi-Fi | nRF24L01</span>
        <span class="project-details-label">
            <?= t('project_details') ?>
        </span>
    </summary>

    <div class="project-description">
        <p><?= t('signalshark_description') ?></p>
    </div>
</details>



          </div>
      </section>
  </main>

  <?php require 'footer.php'; ?>