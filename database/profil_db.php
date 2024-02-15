<?php

function getAllProfils()
{
    global $connexion;
    $query = "SELECT * FROM profils";
    $resultat = $connexion->query($query);
    return $resultat->fetchAll(PDO::FETCH_ASSOC);
}
