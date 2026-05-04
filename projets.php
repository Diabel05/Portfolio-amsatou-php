<?php 
require 'fonctions.php';

// On stocke les projets dans un tableau (Partie 5.3 du projet)
$mes_projets = [
    [
        'titre' => 'Site immobilier',
        'desc' => 'Développement d\'un site immobilier dynamique avec HTML, CSS et PHP.',
        'image' => 'assets/projet_html.jpeg'
    ],
    [
        'titre' => 'Simulation réseau Cisco',
        'desc' => 'Configuration de topologies, routeurs et switchs sous Packet Tracer.',
        'image' => 'assets/projet_cisco.jpeg'
    ],
    [
        'titre' => 'Projet Kali Linux',
        'desc' => 'Analyse de cybersécurité : détection des vulnérabilités serveurs.',
        'image' => 'assets/projet_linux.jpeg'
    ]
];

// Gestion de la recherche avec GET
$recherche = isset($_GET['q']) ? nettoyer($_GET['q']) : '';
$resultats = [];

foreach ($mes_projets as $projet) {
    if ($recherche == '' || stripos($projet['titre'], $recherche) !== false) {
        $resultats[] = $projet;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projets - Amsatou Diabel</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php require 'composants/navigation.php'; ?>

<section class="container">
    <h1 class="section-title">Mes Projets</h1>

    <div class="card form-card search-box">
        <h3><i class="fas fa-search"></i> Rechercher un projet</h3>
        <form action="projets.php" method="GET" class="horizontal-form">
            <input type="text" name="q" placeholder="Tapez un mot-clé..." value="<?= $recherche ?>">
            <button type="submit">Filtrer</button>
        </form>
    </div>

    <div class="projects">
        <?php foreach ($resultats as $p) : ?>
            <div class="card fade-in">
                <img src="<?= $p['image'] ?>" alt="<?= $p['titre'] ?>">
                <h3><?= $p['titre'] ?></h3>
                <p><?= $p['desc'] ?></p>
            </div>
        <?php endforeach; ?>
        
        <?php if (empty($resultats)) : ?>
            <p>Aucun projet trouvé pour "<?= $recherche ?>"</p>
        <?php endif; ?>
    </div>
</section>

<?php require 'composants/pied-de-page.php'; ?>

</body>
</html>