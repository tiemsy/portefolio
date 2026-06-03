<?php
$currentPage = 'contact';
$pageTitle = 'Contact';
$basePath = '../';
require __DIR__ . '/../partials/header.php';
?>
<section class="page-hero">
    <p class="eyebrow">Contact</p>
    <h1>Échanger sur une mission PHP, Laravel ou WordPress</h1>
    <p>Pour une mission, une refonte, une optimisation ou un projet web sur mesure.</p>
</section>
<section class="section contact-layout">
    <div class="card contact-card">
        <h2>Coordonnées</h2>
        <p><strong>Téléphone :</strong> <a href="tel:+33781321719"><?= htmlspecialchars($profile['phone']) ?></a></p>
        <p><strong>Localisation :</strong> <?= htmlspecialchars($profile['location']) ?></p>
        <p><strong>GitHub :</strong> <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" rel="noopener">github.com/tiemsy</a></p>
        <p><strong>LinkedIn :</strong> <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank" rel="noopener">Profil LinkedIn</a></p>
    </div>
    <form class="card contact-form" method="post" action="#">
        <h2>Message</h2>
        <label>Nom<input type="text" name="name" placeholder="Votre nom"></label>
        <label>Email<input type="email" name="email" placeholder="votre@email.fr"></label>
        <label>Message<textarea name="message" rows="6" placeholder="Décrivez votre besoin"></textarea></label>
        <button class="btn primary" type="submit">Envoyer</button>
        <p class="form-note">Formulaire visuel uniquement : il faudra ajouter un traitement PHP ou SMTP pour l’envoi réel.</p>
    </form>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
