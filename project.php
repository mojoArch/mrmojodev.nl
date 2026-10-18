<?php
require_once __DIR__ . '/language.php';
require __DIR__ . '/header.php';

$projects = [
    [
        'id' => 'jvis', 'name' => 'J.VIS PHOTOGRAPHY', 'category' => 'LARAVEL — WEBSITE',
        'photos' => [ 'fotograaf5.jpg', 'fotograaf2.jpg', 'fotograaf3.jpg', 'fotograaf4.jpg','fotograaf1.jpg', 'fotograaf6.jpg', 'fotograaf7.jpg', 'fotograaf8.jpg'], 'website' => 'https://jvisfotografie-nl.onrender.com/'
    ],
    [
        'id' => 'nevanexis', 'name' => 'NevaNexis', 'category' => 'PHP — WEBSITE',
        'photos' => ['justitie2.png','justitie.jpg'], 'website' => 'https://www.nevanexis.nl/'
    ],
    [
        'id' => 'cyberdeck', 'name' => 'CYBERDECK', 'category' => 'HARDWARE',
        'photos' => ['cyber.jpg', 'cyber1.jpg']
    ],
    [
        'id' => 'signalshark', 'name' => 'SIGNALSHARK —  IoT Radio & Aircraft Tracker',
        'category' => 'ESP32-S3 | C++ | Python',
        'photos' => array_map(static fn (int $number): string => "signalshark{$number}.jpg", range(1, 6))
    ],
];
?>
<main class="projects-page">
    <section id="projects" class="projects-section">
        <div class="projects-title"><h1><?= t('work') ?></h1></div>
        <div class="projects-container">
            <?php foreach ($projects as $project): ?>
                <article class="project">
                    <a class="project-preview-link" href="./project-detail.php?project=<?= urlencode($project['id']) ?>">
                        <span class="project-image project-carousel" data-project-carousel>
                            <span class="project-carousel-track">
                                <?php foreach ($project['photos'] as $index => $photo): ?>
                                    <img
                                        src="./images/<?= htmlspecialchars($photo, ENT_QUOTES, 'UTF-8') ?>"
                                        alt="<?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?> — <?= $index + 1 ?>"
                                        <?= $index > 0 ? 'loading="lazy"' : '' ?>
                                    >
                                <?php endforeach; ?>
                            </span>
                        </span>
                        <span class="project-name"><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="project-meta">
                            <span class="project-type"><?= htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="project-toggle"><?= t('project_details') ?> ↗</span>
                        </span>
                    </a>
                    <?php if (!empty($project['website'])): ?>
                        <a class="project-website" href="<?= htmlspecialchars($project['website'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                            <?= t('visit_website') ?> ↗
                        </a>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
