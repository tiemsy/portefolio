<?php
$currentPage = 'skills';
$pageTitle = 'Compétences';
$basePath = '../';
require __DIR__ . '/../partials/header.php';

$skillGroups = [
    'Langages' => [
        ['name' => 'PHP 7/8', 'level' => 95, 'note' => 'Back-end métier, maintenance, refonte'],
        ['name' => 'HTML5', 'level' => 90, 'note' => 'Structure sémantique et responsive'],
        ['name' => 'JavaScript', 'level' => 85, 'note' => 'Interactions front-end et composants'],
        ['name' => 'CSS3 custom', 'level' => 85, 'note' => 'Interfaces modernes sans Bootstrap'],
        ['name' => 'SQL', 'level' => 90, 'note' => 'Modélisation et requêtes applicatives'],
    ],
    'Frameworks' => [
        ['name' => 'Laravel', 'level' => 92, 'note' => 'Applications web, API, architecture MVC'],
        ['name' => 'Symfony', 'level' => 85, 'note' => 'Back-end, API REST, maintenance applicative'],
        ['name' => 'Vue.js / front moderne', 'level' => 75, 'note' => 'Interfaces dynamiques et SPA légères'],
        ['name' => 'jQuery', 'level' => 80, 'note' => 'Maintenance et évolutions legacy'],
    ],
    'CMS' => [
        ['name' => 'WordPress', 'level' => 88, 'note' => 'Thèmes, plugins, maintenance et refonte'],
        ['name' => 'Joomla', 'level' => 65, 'note' => 'Maintenance et développements spécifiques'],
    ],
    'Base de données' => [
        ['name' => 'MySQL', 'level' => 90, 'note' => 'Applications PHP, reporting, exports'],
        ['name' => 'PostgreSQL', 'level' => 85, 'note' => 'Applications métier et requêtes avancées'],
    ],
    'DevOps & outils' => [
        ['name' => 'Docker', 'level' => 82, 'note' => 'Environnements locaux et déploiement'],
        ['name' => 'Git / GitHub / Bitbucket', 'level' => 88, 'note' => 'Versioning, branches, collaboration'],
        ['name' => 'Linux', 'level' => 82, 'note' => 'Administration, logs, scripts et serveurs'],
        ['name' => 'Jira / Mantis / TestLink', 'level' => 78, 'note' => 'Suivi projet, bugs et qualification'],
    ],
];

$coreExpertise = [
    'Développement PHP Laravel / Symfony',
    'Création et maintenance WordPress',
    'Refonte front-end responsive sans Bootstrap',
    'API REST et intégrations métiers',
    'Dockerisation et environnements Linux',
    'Maintenance corrective et évolutive',
];
?>
<section class="page-hero skills-hero">
    <p class="eyebrow">Compétences</p>
    <h1>Stack technique orientée PHP, Laravel, WordPress et delivery web.</h1>
    <p>Un profil full-stack capable d’intervenir sur le back-end, le front-end custom, les CMS, les bases de données et les environnements Docker/Linux.</p>
</section>

<section class="section skills-summary">
    <div class="cards-grid three">
        <article class="card stat-card">
            <strong>PHP</strong>
            <span>Laravel, Symfony, API REST</span>
        </article>
        <article class="card stat-card">
            <strong>CMS</strong>
            <span>WordPress, thèmes, plugins, maintenance</span>
        </article>
        <article class="card stat-card">
            <strong>DevOps</strong>
            <span>Docker, Git, Linux, déploiement</span>
        </article>
    </div>
</section>

<section class="section soft">
    <div class="skills-intro-grid">
        <div class="image-placeholder skills-visual">
            <span>PHP<br>Laravel<br>WordPress</span>
        </div>
        <article class="card text-card">
            <p class="eyebrow">Expertise principale</p>
            <h2>Construire, maintenir et moderniser des applications web.</h2>
            <p>Mes compétences couvrent la conception back-end, les intégrations front-end, les sites WordPress, la maintenance applicative et la mise en place d’environnements de développement fiables.</p>
            <ul class="check-list compact">
                <?php foreach ($coreExpertise as $expertise): ?>
                    <li><?= htmlspecialchars($expertise) ?></li>
                <?php endforeach; ?>
            </ul>
        </article>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <p class="eyebrow">Niveaux techniques</p>
        <h2>Compétences détaillées.</h2>
    </div>

    <div class="skills-dashboard">
        <?php foreach ($skillGroups as $group => $items): ?>
            <article class="card skill-panel">
                <h2><?= htmlspecialchars($group) ?></h2>
                <div class="skill-bars">
                    <?php foreach ($items as $item): ?>
                        <div class="skill-row">
                            <div class="skill-row-head">
                                <strong><?= htmlspecialchars($item['name']) ?></strong>
                                <span><?= (int) $item['level'] ?>%</span>
                            </div>
                            <div class="skill-track" aria-label="Niveau <?= htmlspecialchars($item['name']) ?> : <?= (int) $item['level'] ?>%">
                                <span style="width: <?= (int) $item['level'] ?>%"></span>
                            </div>
                            <small><?= htmlspecialchars($item['note']) ?></small>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section soft">
    <div class="section-heading">
        <p class="eyebrow">Technologies</p>
        <h2>Vue synthétique de ma stack.</h2>
    </div>
    <div class="cards-grid">
        <?php foreach ($skills as $category => $items): ?>
            <article class="card skill-card large">
                <h3><?= htmlspecialchars($category) ?></h3>
                <div class="tags">
                    <?php foreach ($items as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <p class="eyebrow">Langues</p>
        <h2>Communication.</h2>
    </div>
    <div class="cards-grid three">
        <?php foreach ($languages as $language): ?>
            <article class="card language-card">
                <p><?= htmlspecialchars($language) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
    <div class="hero-actions skills-actions">
        <a class="btn primary" href="<?= $basePath ?>pdf/CV_MTC.pdf" target="_blank" rel="noopener">Télécharger mon CV</a>
        <a class="btn secondary" href="realizations.php">Voir mes réalisations</a>
    </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>