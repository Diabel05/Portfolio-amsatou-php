<?php
// On récupère le nom du fichier actuel pour mettre le lien en "active"
$page_courante = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar">
    <h2 class="logo">Amsatou Diabel</h2>
    <div class="menu-toggle" id="menu-toggle">
        <i class="fas fa-bars"></i>
    </div>
    <ul>
        <li><a href="index.php" class="<?= $page_courante == 'index.php' ? 'active' : '' ?>">Présentation</a></li>
        <li><a href="competences.php" class="<?= $page_courante == 'competences.php' ? 'active' : '' ?>">Compétences</a></li>
        <li><a href="projets.php" class="<?= $page_courante == 'projets.php' ? 'active' : '' ?>">Projets</a></li>
        <li><a href="experiences.php" class="<?= $page_courante == 'experiences.php' ? 'active' : '' ?>">Expériences</a></li>
        <li><a href="contact.php" class="<?= $page_courante == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
    </ul>
</nav>