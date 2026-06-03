<?php
$currentPage = 'skills';
$pageTitle = 'Compétences';
$basePath = '../';
require __DIR__ . '/../partials/header.php';
?>
<section class="page-hero">
    <p class="eyebrow">Compétences</p>
    <h1>Stack technique PHP, Laravel, WordPress et front-end custom</h1>
    <p>Une base technique complète pour créer, maintenir et moderniser des sites et applications web.</p>
</section>
<section class="section">
    <div class="cards-grid">
        <?php foreach ($skills as $category => $items): ?>
            <article class="card skill-card large">
                <h2><?= htmlspecialchars($category) ?></h2>
                <div class="tags">
                    <?php foreach ($items as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<section class="section soft">
    <div class="section-heading"><h2>Langues</h2></div>
    <div class="cards-grid three">
        <?php foreach ($languages as $language): ?>
            <article class="card"><p><?= htmlspecialchars($language) ?></p></article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
