<?php
require_once __DIR__ . '/language.php';
require __DIR__ . '/header.php';
?>

<main class="contact-page">
    <section id="contact" class="contact-section contact-simple">
        <div class="contact-simple-inner">
            <div class="contact-simple-copy">
                <h1><?= t('contact') ?></h1>
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

<?php require __DIR__ . '/footer.php'; ?>
