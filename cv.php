<?php require __DIR__ . '/header.php'; ?>

  <main class="cv-page">
      <section id="mijn-cv" class="cv-section">
          <h1 class="cv-title">CV</h1>

          <div class="cv-content">
              <div class="cv-column">
                 

<p><?= t('cv_intro') ?></p>
<p><?= t('cv_student') ?></p>
<p><?= t('cv_interests') ?></p>
              </div>

              <div class="cv-image">
                  <img src="./images/me.jpg" alt="<?= t('cv_photo_alt') ?>">
              </div>
          </div>
          <div class="cv-skills">
     


<table>
    <thead>
        <tr>
            <th scope="col"><?= t('cv_subject') ?></th>
            <th scope="col"><?= t('cv_skills_basic') ?></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row"><?= t('cv_web_tools') ?></th>
            <td>
                PHP | JavaScript | MySQL | Docker | Linux |
                Laravel | HTML | CSS
            </td>
        </tr>

        <tr>
            <th scope="row"><?= t('cv_interactive_systems') ?></th>
            <td>
                <?= t('cv_electronics') ?><br>
                <?= t('cv_data_network') ?>
            </td>
        </tr>
    </tbody>
</table>

  </div>

  <div class="cv-actions">
  <div class="cv-github">
      <a
          href="https://github.com/mojoArch"
          target="_blank"
          rel="noopener noreferrer"
      >
          <?= t('cv_github') ?> ↗

      </a>
  </div>
  <a
      class="cv-download"
      href="<?= $lang === 'nl' ? './documents/Nazli-Eroglu-CV-NL.pdf' : './documents/Nazli-Eroglu-CV-EN.pdf' ?>"
      download
  >
      <?= t('cv_download') ?> ↓
  </a>
  </div>


<section>
    <div class="cv-education">
        <h2><?= t('cv_education') ?></h2>

        <div class="cv-education-content">
            <div class="cv-education-info">
                <h3>Software Dev</h3>
                <p>Mediacollege Amsterdam</p>
                <p>2024 - 2028</p>
            </div>

            <div class="cv-technologies">
                
<h3><?= t('cv_currently_learning') ?></h3>

                <div class="cv-learning">
                    
                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/php/php-original.svg"
                        alt="PHP"
                        title="PHP"
                    >
                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/javascript/javascript-original.svg"
                        alt="JavaScript"
                        title="JavaScript"
                    >
                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/mysql/mysql-original.svg"
                        alt="MySQL"
                        title="MySQL"
                    >
                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/python/python-original.svg"
                        alt="Python"
                        title="Python"
                    >
                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/cplusplus/cplusplus-original.svg"
                        alt="C++"
                        title="C++"
                    >
                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/docker/docker-original.svg"
                        alt="Docker"
                        title="Docker"
                    >
                    <img
    src="https://cdn.simpleicons.org/kicad/314CB0"
    alt="KiCad"
    title="KiCad"
>
<img
    src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/laravel/laravel-original.svg"
    alt="Laravel"
    title="Laravel"
>

                </div>
            </div>
        </div>
    </div>

    <div class="cv-language">
        <div class="cv-language-info">
            <h2><?= t('cv_languages') ?></h2>
            <p>Dutch, English</p>
        </div>

        <div class="cv-flags">
            <span role="img" aria-label="Nederlands">🇳🇱</span>
            <span role="img" aria-label="Engels">🇬🇧</span>
        </div>
    </div>
        </section>
  </main>

  <?php require 'footer.php'; ?>
