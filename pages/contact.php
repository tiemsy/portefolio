<?php
$currentPage = 'contact';
$pageTitle = 'Contact';
$basePath = '../';
require __DIR__ . '/../partials/header.php';
?>
<section class="page-hero contact-hero">
    <p class="eyebrow">Contact</p>
    <h1>Parlons de votre prochain projet web.</h1>
    <p>Disponible pour échanger sur une mission PHP, Laravel, WordPress, une refonte applicative, une optimisation technique ou un accompagnement projet.</p>
</section>

<section class="section contact-intro">
    <article class="card contact-highlight">
        <span class="contact-icon">↗</span>
        <h2>Réponse directe</h2>
        <p>Présentez votre besoin, votre contexte technique et vos délais. Je reviendrai vers vous avec une réponse claire.</p>
    </article>
    <article class="card contact-highlight">
        <span class="contact-icon">{ }</span>
        <h2>Expertise ciblée</h2>
        <p>Laravel, Symfony, WordPress, API REST, Docker, Linux, maintenance applicative et refonte de plateformes existantes.</p>
    </article>
    <article class="card contact-highlight">
        <span class="contact-icon">✓</span>
        <h2>Profil senior</h2>
        <p>Approche orientée qualité, maintenabilité, sécurité, performance et livraison concrète.</p>
    </article>
</section>

<section class="section contact-layout enhanced-contact">
    <aside class="card contact-card contact-details">
        <p class="eyebrow">Coordonnées</p>
        <h2>Me contacter</h2>
        <div class="contact-list">
            <a class="contact-line" href="mailto:<?= htmlspecialchars($profile['email']) ?>">
                <span>✉</span>
                <strong>Email</strong>
                <em><?= htmlspecialchars($profile['email']) ?></em>
            </a>
            <a class="contact-line" href="tel:+33781321719">
                <span>☎</span>
                <strong>Téléphone</strong>
                <em>+33 7 81 32 17 19</em>
            </a>
            <div class="contact-line">
                <span>⌖</span>
                <strong>Localisation</strong>
                <em><?= htmlspecialchars($profile['location']) ?></em>
            </div>
        </div>

        <div class="social-box">
            <h3>Réseaux professionnels</h3>
            <div class="social-pills">
                <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" rel="noopener">GitHub</a>
                <a href="<?= htmlspecialchars($profile['bitbucket']) ?>" target="_blank" rel="noopener">Bitbucket</a>
                <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
            </div>
        </div>
    </aside>

    <form class="card contact-form modern-form" id="contactForm" method="post" action="mailto:<?= htmlspecialchars($profile['email']) ?>" enctype="text/plain" novalidate>
        <p class="eyebrow">Votre demande</p>
        <h2>Envoyer un message</h2>

        <div class="form-grid">
            <label>
                Prénom
                <input type="text" name="prenom" id="firstName" placeholder="Votre prénom" required>
                <small class="error-message">Le prénom est obligatoire.</small>
            </label>
            <label>
                Nom
                <input type="text" name="nom" id="lastName" placeholder="Votre nom" required>
                <small class="error-message">Le nom est obligatoire.</small>
            </label>
        </div>

        <div class="form-grid">
            <label>
                Email
                <input type="email" name="email" id="email" placeholder="votre@email.fr" required>
                <small class="error-message">Adresse email invalide.</small>
            </label>
            <label>
                Téléphone
                <input type="tel" name="telephone" id="phone" placeholder="Votre numéro de téléphone">
                <small class="hint">Optionnel, utile pour un échange rapide.</small>
            </label>
        </div>

        <label>
            Nature de la demande
            <select name="demande" id="requestType" required>
                <option value="">Sélectionnez une option</option>
                <option value="Informations">Informations</option>
                <option value="Devis">Devis</option>
                <option value="Mission freelance">Mission freelance</option>
                <option value="Refonte technique">Refonte technique</option>
                <option value="Maintenance">Maintenance</option>
            </select>
            <small class="error-message">Sélectionnez une nature de demande.</small>
        </label>

        <fieldset class="source-fieldset">
            <legend>Comment avez-vous entendu parler de moi ?</legend>
            <div class="checkbox-group">
                <label><input type="checkbox" name="source[]" value="Réseaux sociaux"> Réseaux sociaux</label>
                <label><input type="checkbox" name="source[]" value="Bouche à oreille"> Bouche à oreille</label>
                <label><input type="checkbox" name="source[]" value="GitHub"> GitHub</label>
                <label><input type="checkbox" name="source[]" value="LinkedIn"> LinkedIn</label>
            </div>
        </fieldset>

        <label>
            Message
            <textarea name="message" id="message" rows="7" placeholder="Décrivez votre besoin, votre contexte technique, vos délais et vos objectifs." required></textarea>
            <small class="error-message">Le message est obligatoire.</small>
        </label>

        <button class="btn primary" type="submit">Envoyer le message</button>
        <p class="form-note" id="formNote">Le formulaire utilise l’application mail de votre ordinateur. Pour un envoi serveur réel, il faudra ajouter un traitement PHP/SMTP.</p>
    </form>
</section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
