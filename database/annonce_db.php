<?php
function getAllAnnonces()
{
    global $connexion;
    $query = "SELECT annonces.*, categories.*
    FROM annonces
    INNER JOIN categories ON annonces.categorie_id = categories.id";
    
    $resultat = $connexion->query($query);
    return $resultat->fetchAll(PDO::FETCH_ASSOC);
}

function addAnnonce($titre, $description, $image, $etat, $validate, $date_creation, $date_update)
{
    global $connexion;
    $query = "INSERT INTO annonces (titre, description, image, etat, validate, date_creation, date_update) VALUES (?,?,?,?,?,?,?)";
    $stmt = $connexion->prepare($query);
    return $stmt->execute(array($titre, $description, $image, $etat, $validate, $date_creation, $date_update));
}

function deleteAnnonce($id)
{
    global $connexion;

    $query = "DELETE FROM annonces WHERE id = ?";
    $stmt = $connexion->prepare($query);
    return $stmt->execute(array($id));
}

function getOneAnnonce($id)
{
    global $connexion;
    $query = "SELECT * FROM annonces WHERE id = $id";
    $stmt = $connexion->prepare($query);
    $stmt->execute();
    return $stmt;
}

function updateAnnonce($titre, $description, $image, $etat, $validate, $date_creation, $date_update, $id)
{
    global $connexion;
    $query = "UPDATE annonces SET (nom, prenom, email, tel) = (?,?,?,?) WHERE id = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($titre, $description, $image, $etat, $validate, $date_creation, $date_update, $id));
    $stmt->closeCursor();
}
