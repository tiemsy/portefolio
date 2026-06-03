<?php
$currentPage = 'realizations';
$pageTitle = 'Réalisations';
$basePath = '../';
require __DIR__ . '/../partials/header.php';
?>
<section class="page-hero">
    <p class="eyebrow">Réalisations</p>
    <h1>Projets et domaines d’intervention</h1>
    <p>Une présentation claire des types de projets à valoriser dans le portfolio.</p>
</section>
<section class="section">
    <div class="cards-grid three">
        <?php foreach ($realizations as $project): ?>
            <article class="card project-card">
                <span><?= htmlspecialchars($project['type']) ?></span>
                <h2><?= htmlspecialchars($project['title']) ?></h2>
                <p><?= htmlspecialchars($project['description']) ?></p>
                <a class="text-link" href="contact.php">Discuter d’un projet</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
