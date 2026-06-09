<?php
$currentPage = 'realizations';
$pageTitle = 'Réalisations';
$basePath = '../';
require __DIR__ . '/../partials/header.php';
?>
<section class="page-hero realizations-hero">
    <p class="eyebrow">Réalisations</p>
    <h1>Projets web, applications métiers et sites WordPress.</h1>
    <p>Une sélection de réalisations issues de mes expériences PHP, Laravel/Symfony, WordPress et intégration front-end.</p>
</section>

<section class="section realization-summary">
    <div class="cards-grid three">
        <article class="card stat-card">
            <strong>PHP</strong>
            <span>Laravel, Symfony, WordPress, Joomla</span>
        </article>
        <article class="card stat-card">
            <strong>Full-stack</strong>
            <span>Back-end, front-end, maintenance et refonte</span>
        </article>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <p class="eyebrow">Portfolio projets</p>
    </div>

    <div class="realizations-grid">
        <?php foreach ($realizations as $project): ?>
            <article class="card realization-card">
                <div class="realization-media">
                    <?php if (!empty($project['image'])): ?>
                        <img src="<?= $basePath ?>images/realizations/<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>">
                    <?php else: ?>
                        <span><?= htmlspecialchars(substr($project['title'], 0, 2)) ?></span>
                    <?php endif; ?>
                </div>

                <div class="realization-content">
                    <div class="realization-meta">
                        <span><?= htmlspecialchars($project['category']) ?></span>
                        <span><?= htmlspecialchars($project['client']) ?></span>
                    </div>
                    <h2><?= htmlspecialchars($project['title']) ?></h2>
                    <p><?= htmlspecialchars($project['summary']) ?></p>

                    <h3>Missions principales</h3>
                    <ul class="check-list compact">
                        <?php foreach ($project['missions'] as $mission): ?>
                            <li><?= htmlspecialchars($mission) ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="tags compact-tags">
                        <?php foreach ($project['stack'] as $tech): ?>
                            <span><?= htmlspecialchars($tech) ?></span>
                        <?php endforeach; ?>
                    </div>

                    <?php if (!empty($project['url']) && $project['url'] !== '#'): ?>
                        <a class="btn secondary company-link" href="<?= htmlspecialchars($project['url']) ?>" target="_blank" rel="noopener">Voir le site</a>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section soft">
    <div class="section-heading">
        <p class="eyebrow">Besoin d’un projet similaire ?</p>
        <h2>Je peux intervenir sur la conception, la refonte ou la maintenance.</h2>
    </div>
    <div class="hero-actions">
        <a class="btn primary" href="contact.php">Me contacter</a>
        <a class="btn secondary" href="experiences.php">Voir mes expériences</a>
    </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>