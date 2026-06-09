<?php
$currentPage = 'experiences';
$pageTitle = 'Expériences';
$basePath = '../';
require __DIR__ . '/../partials/header.php';
?>
<section class="page-hero experience-hero">
    <p class="eyebrow">Parcours professionnel</p>
    <h1>Expériences PHP, Laravel, Symfony et WordPress</h1>
    <p>
        Timeline mise à jour avec les dernières missions après IDEMIA : Citeo, Groupe BPCE / Natixis, Qualiconsult et EON Digital / GMG Santé.
    </p>
    <div class="hero-actions">
        <a class="btn primary" href="<?= $basePath ?>pdf/CV_MTC.pdf" target="_blank" rel="noopener">Télécharger mon CV</a>
        <a class="btn secondary" href="<?= $basePath ?>pages/contact.php">Me contacter</a>
    </div>
</section>

<section class="section experience-summary">
    <div class="cards-grid three">
        <article class="card stat-card">
            <strong>10+ ans</strong>
            <span>Laravel, WordPress, Symfony, PHP</span>
        </article>
        <article class="card stat-card">
            <strong>Full-stack</strong>
            <span>Back-end, front-end, CMS, supervision</span>
        </article>
    </div>
</section>

<section class="section experience-timeline" aria-label="Timeline des expériences professionnelles">
    <?php foreach ($experiences as $index => $experience): ?>
        <article class="experience-card reveal <?= $index % 2 === 0 ? 'left' : 'right' ?>">
            <div class="experience-marker" aria-hidden="true"></div>
            <div class="experience-content card">
                <div class="experience-topline">
                    <span class="period"><?= htmlspecialchars($experience['period']) ?></span>
                    <?php if (!empty($experience['logo'])): ?>
                        <img
                            src="<?= $basePath ?>images/logos/<?= htmlspecialchars($experience['logo']) ?>"
                            alt="Logo <?= htmlspecialchars($experience['company']) ?>"
                            loading="lazy"
                            onerror="this.style.display='none'">
                    <?php endif; ?>
                </div>

                <h2><?= htmlspecialchars($experience['company']) ?></h2>
                <h3><?= htmlspecialchars($experience['role']) ?></h3>
                <p><?= htmlspecialchars($experience['description']) ?></p>

                <?php if (!empty($experience['missions'])): ?>
                    <ul class="experience-missions">
                        <?php foreach ($experience['missions'] as $mission): ?>
                            <li><?= htmlspecialchars($mission) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="tags" aria-label="Technologies et domaines">
                    <?php foreach ($experience['items'] as $item): ?>
                        <span><?= htmlspecialchars($item) ?></span>
                    <?php endforeach; ?>
                </div>

                <?php if (!empty($experience['url']) && $experience['url'] !== '#'): ?>
                    <a class="text-link company-link" href="<?= htmlspecialchars($experience['url']) ?>" target="_blank" rel="noopener">
                        Voir l'entreprise
                    </a>
                <?php endif; ?>
            </div>
        </article>
    <?php endforeach; ?>
</section>

<section class="section soft">
    <div class="section-heading">
        <p class="eyebrow">Formation</p>
        <h2>Formations</h2>
    </div>
    <div class="cards-grid two">
        <?php foreach ($formations as $formation): ?>
            <article class="card">
                <p><?= htmlspecialchars($formation) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>