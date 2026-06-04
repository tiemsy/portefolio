<?php
$currentPage = 'home';
$pageTitle = 'Accueil';
$basePath = '';
require __DIR__ . '/partials/header.php';
?>
<section class="hero section-grid">
    <div class="hero-content reveal">
        <p class="eyebrow">Portfolio professionnel</p>
        <h1><?= htmlspecialchars($profile['title']) ?></h1>
        <p class="hero-lead">
            Je conçois des applications web et sites professionnels solides, rapides et maintenables avec PHP, Laravel, Symfony et WordPress.
        </p>
        <div class="hero-actions">
            <a class="btn primary" href="pages/contact.php">Me contacter</a>
            <a class="btn secondary" href="pdf/cv_mohamed_camara.pdf" target="_blank" rel="noopener">Télécharger le CV</a>
        </div>
        <div class="stats">
            <article><strong>10+</strong><span>ans d’expérience</span></article>
            <article><strong>PHP</strong><span>Laravel / Symfony</span></article>
            <article><strong>CMS</strong><span>WordPress senior</span></article>
        </div>
    </div>
    <div class="hero-card reveal delay-1">
        <div class="profile-card">
            <div class="avatar">MTC</div>
            <h2><?= htmlspecialchars($profile['name']) ?></h2>
            <p><?= htmlspecialchars($profile['location']) ?></p>
            <ul class="check-list">
                <li>Applications web métiers</li>
                <li>Sites WordPress personnalisés</li>
                <li>Refonte responsive sans Bootstrap</li>
                <li>Dockerisation et environnement local</li>
            </ul>
        </div>
    </div>
</section>

<section class="section soft">
    <div class="section-heading">
        <p class="eyebrow">À propos</p>
        <h2>Un profil technique orienté résultat</h2>
    </div>
    <div class="about-grid">
        <div class="visual-card image-placeholder">Code • Design • Performance</div>
        <div class="card text-card">
            <p>
                <?= htmlspecialchars($profile['name']) ?> est développeur web basé en région parisienne. Son expérience couvre la conception, la construction, la personnalisation et la modernisation de sites et applications web.
            </p>
            <p>
                Le portfolio a été reconstruit sans Bootstrap, avec une interface claire, responsive et pensée pour valoriser un profil Lead Developer PHP Laravel / WordPress Senior.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <p class="eyebrow">Expertises</p>
        <h2>Compétences principales</h2>
    </div>
    <div class="cards-grid">
        <?php foreach ($skills as $category => $items): ?>
            <article class="card skill-card">
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

<section class="section soft">
    <div class="section-heading">
        <p class="eyebrow">Réalisations</p>
        <h2>Ce que je peux apporter</h2>
    </div>
    <div class="cards-grid three">
        <?php foreach ($realizations as $project): ?>
            <article class="card project-card">
                <span><?= htmlspecialchars($project['category']) ?></span>
                <h3><?= htmlspecialchars($project['title']) ?></h3>
                <p><?= htmlspecialchars($project['summary']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
