<?php
$currentPage = 'experiences';
$pageTitle = 'Expériences';
$basePath = '../';
require __DIR__ . '/../partials/header.php';
?>
<section class="page-hero">
    <p class="eyebrow">Parcours</p>
    <h1>Expériences et formation</h1>
    <p>Un parcours orienté développement web, conception applicative et maintenance de solutions professionnelles.</p>
</section>
<section class="section timeline">
    <?php foreach ($experiences as $experience): ?>
        <article class="timeline-item card">
            <span><?= htmlspecialchars($experience['period']) ?></span>
            <h2><?= htmlspecialchars($experience['role']) ?></h2>
            <p><?= htmlspecialchars($experience['description']) ?></p>
            <ul class="check-list compact">
                <?php foreach ($experience['items'] as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>
        </article>
    <?php endforeach; ?>
</section>
<section class="section soft">
    <div class="section-heading"><h2>Formations</h2></div>
    <div class="cards-grid two">
        <?php foreach ($formations as $formation): ?>
            <article class="card"><p><?= htmlspecialchars($formation) ?></p></article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
