<?php
require_once __DIR__ . '/language.php';

$languagePage = $_SERVER['PHP_SELF'] ?? '/';
$englishQuery = $_GET;
$englishQuery['lang'] = 'en';
$dutchQuery = $_GET;
$dutchQuery['lang'] = 'nl';
$englishUrl = $languagePage . '?' . http_build_query($englishQuery);
$dutchUrl = $languagePage . '?' . http_build_query($dutchQuery);
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nazli | Software Developer</title>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


<header class="site-header">
    <nav class="navbar">
        <div class="nav-links">
            <a href="/#home"><?= t('home') ?></a>
            <a href="/#about"><?= t('about') ?></a>
            <a href="/project.php"><?= t('work') ?></a>
            <a href="/#contact"><?= t('contact') ?></a>
            <a href="/cv.php"><?= t('cv') ?></a>
        </div>
    </nav>

    <nav class="language-switch" aria-label="Language / Taal">
        <a
            href="<?= htmlspecialchars($englishUrl, ENT_QUOTES, 'UTF-8') ?>"
            lang="en"
            aria-label="English"
            <?= $lang === 'en' ? 'aria-current="true"' : '' ?>
        >EN</a>

        <a
            href="<?= htmlspecialchars($dutchUrl, ENT_QUOTES, 'UTF-8') ?>"
            lang="nl"
            aria-label="Nederlands"
            <?= $lang === 'nl' ? 'aria-current="true"' : '' ?>
        >NL</a>
    </nav>
</header>
