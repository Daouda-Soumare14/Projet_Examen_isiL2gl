<?php

function getAllCategorie()
{
    global $connexion;
    $query = "SELECT * FROM categories";
    $resultat = $connexion->query($query);
    return $resultat->fetchAll(PDO::FETCH_ASSOC);
}

function addCategorie($designation)
{
  global $connexion;
  $query = "INSERT INTO categories (designation) VALUES (?)";
  $stmt = $connexion->prepare($query);
  return $stmt->execute(array($designation));
}

function deleteCategorie($id)
{
  global $connexion;

  $query = "DELETE FROM categories WHERE id = ?";
  $stmt = $connexion->prepare($query);
  return $stmt->execute(array($id));
}

function getOneCategorie($id)
{
  global $connexion;
  $query = "SELECT * FROM categories WHERE id = $id";
  $stmt = $connexion->prepare($query);
  $stmt->execute();
  return $stmt;
}

function updateCategorie($designation, $id)
{
  global $connexion;
  $query = "UPDATE categories SET (categorie) = (?) WHERE id = ?";
  $stmt = $connexion->prepare($query);
  $stmt->execute(array($designation, $id));
  $stmt->closeCursor();
}
