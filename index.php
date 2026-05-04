<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation - Amsatou</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="icon" type="image/png" href="assets/fav1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php require 'composants/navigation.php'; ?>

<section class="presentation">
    <div class="presentation-text">
        <h1 id="typewriter">Bonjour, je <span>suis</span> Amsatou Diabel</h1>
        <p>Étudiante en ingénierie logicielle et administration réseau à ESTM Dakar, passionnée par le développement backend et la cybersécurité.</p>
        <p>Je développe des applications web modernes avec HTML, CSS, JavaScript, PHP et MySQL.</p>
        <a href="assets/CV ADLT_L2.pdf" class="btn-cv" download>
            <i class="fas fa-download"></i> Télécharger mon CV
        </a>
    </div>
    <div class="presentation-img">
        <img src="assets/photo.jpeg" alt="Amsatou Diabel">
    </div>
</section>

<?php require 'composants/pied-de-page.php'; ?>

</body>
</html>