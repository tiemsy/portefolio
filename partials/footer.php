<?php require_once __DIR__ . '/data.php'; ?>
</main>
<footer class="site-footer">
    <div>
        <strong><?= htmlspecialchars($profile['shortName']) ?></strong>
    </div>
    <div class="footer-links">
        <a href="<?= $basePath ?>index.php">Accueil</a>
        <a href="<?= $basePath ?>pages/skills.php">Compétences</a>
        <a href="<?= $basePath ?>pages/experiences.php">Expériences</a>
        <a href="<?= $basePath ?>pages/contact.php">Contact</a>
    </div>
    <div class="footer-socials">
        <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" rel="noopener">GitHub</a>
        <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
        <a href="<?= htmlspecialchars($profile['bitbucket']) ?>" target="_blank" rel="noopener">Bitbucket</a>
    </div>
    <small>&copy; <?= date('Y') ?> <?= htmlspecialchars($profile['shortName']) ?>. Tous droits réservés.</small>
</footer>
<script src="<?= $basePath ?>assets/js/app.js"></script>
</body>
</html>
