<?php
require_once __DIR__ . '/language.php';

$projectId = $_GET['project'] ?? '';
$projects = [
    'jvis' => [
        'name' => 'J.VIS PHOTOGRAPHY',
        'description' => 'photography_description',
        'photos' => ['fotograaf.jpg'],
        'technologies' => ['Laravel', 'PHP'],
        'website' => 'https://jvisfotografie-nl.onrender.com/'
    ],
    'nevanexis' => [
        'name' => 'NevaNexis',
        'description' => 'lawyer_description',
        'photos' => ['justitie.jpg'],
        'technologies' => ['PHP'],
        'website' => 'https://www.nevanexis.nl/'
    ],
    'cyberdeck' => [
        'name' => 'CYBERDECK',
        'description' => 'cyberdeck_description',
        'photos' => ['image.jpg'],
        'technologies' => ['Electronics', 'Hardware']
    ],
    'signalshark' => [
        'name' => 'SIGNALSHARK — AIRSPACE EXPLORER',
        'description' => 'signalshark_description',
        'photos' => array_map(static fn (int $number): string => "signalshark{$number}.jpg", range(1, 6)),
        'technologies' => ['ESP32-S3', 'C++', 'Arduino IDE', 'Wi-Fi', 'nRF24L01']
    ],
];

if (!isset($projects[$projectId])) {
    http_response_code(404);
    $project = null;
} else {
    $project = $projects[$projectId];
}

require __DIR__ . '/header.php';
?>
<main class="project-detail-page">
    <?php if ($project === null): ?>
        <section class="project-detail-content">
            <h1>404</h1>
            <p><?= t('project_not_found') ?></p>
            <a class="project-detail-back" href="./project.php"><?= t('all_projects') ?></a>
        </section>
    <?php else: ?>
        <section class="project-detail-content">
            <a class="project-detail-back" href="./project.php">← <?= t('all_projects') ?></a>
            <h1><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?></h1>

            <div class="project-gallery" aria-label="<?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?> project photos">
                <?php foreach ($project['photos'] as $index => $photo): ?>
                    <img
                        src="./images/<?= htmlspecialchars($photo, ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?> — <?= $index + 1 ?>"
                        <?= $index > 1 ? 'loading="lazy"' : '' ?>
                    >
                <?php endforeach; ?>
            </div>

            <div class="project-detail-description">
                <div>
                    <h2><?= t('project_details') ?></h2>
                    <p><?= t($project['description']) ?></p>
                </div>
                <div class="project-detail-tech">
                    <h2><?= t('technologies_used') ?></h2>
                    <ul class="project-technologies">
                        <?php foreach ($project['technologies'] as $technology): ?>
                            <li><?= htmlspecialchars($technology, ENT_QUOTES, 'UTF-8') ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php if (!empty($project['website'])): ?>
                        <a class="project-website" href="<?= htmlspecialchars($project['website'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                            <?= t('visit_website') ?> ↗
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>
<?php require __DIR__ . '/footer.php'; ?>
