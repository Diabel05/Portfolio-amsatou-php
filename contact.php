<?php 
require 'fonctions.php';
$msg_contact = "";
$msg_avis = "";

// Traitement du premier formulaire (Contact)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact'])) {
    $nom = nettoyer($_POST['nom']);
    $email = nettoyer($_POST['email']);
    
    if (champ_requis($nom) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg_contact = "Merci $nom, votre message a été envoyé !";
    } else {
        $msg_contact = "Erreur : Veuillez vérifier vos informations.";
    }
}

// Traitement du deuxième formulaire (Avis)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['avis_submit'])) {
    $note = isset($_POST['note']) ? nettoyer($_POST['note']) : "";
    if ($note != "") {
        $msg_avis = "Merci pour votre note de $note/5 !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Amsatou Diabel</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php require 'composants/navigation.php'; ?>

<section class="container fade-in">
    <h1>Me Contacter</h1>
    
    <div class="forms-wrapper">
        <!-- PREMIER FORMULAIRE : MESSAGE DIRECT -->
        <div class="card form-card">
            <h3><i class="fas fa-envelope"></i> Message direct</h3>
            <?php if($msg_contact): ?>
                <p style="color: #7d84f0; margin-bottom: 10px;"><?= $msg_contact ?></p>
            <?php endif; ?>
            
            <form method="POST" action="contact.php">
                <input type="text" name="nom" placeholder="Votre Nom" required>
                <input type="email" name="email" placeholder="Votre Email" required>
                <textarea name="message" placeholder="Votre Message" rows="4" required></textarea>
                <button type="submit" name="contact">Envoyer</button>
            </form>
        </div>

        <!-- DEUXIÈME FORMULAIRE : AVIS / NEWSLETTER -->
        <div class="card form-card">
            <h3><i class="fas fa-star"></i> Votre Avis</h3>
            <?php if($msg_avis): ?>
                <p style="color: #7d84f0; margin-bottom: 10px;"><?= $msg_avis ?></p>
            <?php endif; ?>
            
            <form method="POST" action="contact.php">
                <label for="note">Notez mon portfolio :</label>
                <select name="note" id="note" style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; background: #1a1a2e; color: white; border: 1px solid #333;">
                    <option value="5">5 - Excellent</option>
                    <option value="4">4 - Très bien</option>
                    <option value="3">3 - Bien</option>
                    <option value="2">2 - Moyen</option>
                    <option value="1">1 - À améliorer</option>
                </select>
                <button type="submit" name="avis_submit">Envoyer mon avis</button>
            </form>
        </div>
    </div>
</section>

<?php require 'composants/pied-de-page.php'; ?>

</body>
</html>