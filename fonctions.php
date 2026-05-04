<?php
/**
 * Nettoie les données pour éviter les failles XSS
 */
function nettoyer($valeur) {
    return htmlspecialchars(trim($valeur));
}

/**
 * Vérifie si un champ est vide
 */
function champ_requis($valeur) {
    return !empty(trim($valeur));
}
?>