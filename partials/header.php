<?php
require_once __DIR__ . '/data.php';
$currentPage = $currentPage ?? 'home';
$pageTitle = $pageTitle ?? 'Portfolio';
$basePath = $basePath ?? '';
function isActive(string $page, string $currentPage): string { return $page === $currentPage ? ' active' : ''; }
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio de <?= htmlspecialchars($profile['shortName']) ?>, développeur PHP Laravel WordPress senior.">
    <title><?= htmlspecialchars($pageTitle) ?> — <?= htmlspecialchars($profile['shortName']) ?></title>
    <link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css">
</head>
<body>
<header class="site-header">
    <a class="brand" href="<?= $basePath ?>index.php" aria-label="Retour à l’accueil">
        <span class="brand-mark">MTC</span>
        <span><?= htmlspecialchars($profile['shortName']) ?></span>
    </a>
    <button class="menu-toggle" type="button" aria-controls="main-nav" aria-expanded="false">
        <span></span><span></span><span></span>
    </button>
    <nav id="main-nav" class="main-nav" aria-label="Navigation principale">
        <a class="<?= isActive('home', $currentPage) ?>" href="<?= $basePath ?>index.php">Accueil</a>
        <a class="<?= isActive('skills', $currentPage) ?>" href="<?= $basePath ?>pages/skills.php">Compétences</a>
        <a class="<?= isActive('experiences', $currentPage) ?>" href="<?= $basePath ?>pages/experiences.php">Expériences</a>
        <a class="<?= isActive('realizations', $currentPage) ?>" href="<?= $basePath ?>pages/realizations.php">Réalisations</a>
        <a class="nav-cta<?= isActive('contact', $currentPage) ?>" href="<?= $basePath ?>pages/contact.php">Contact</a>
    </nav>
</header>
<main>
