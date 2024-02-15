<?php

//  function getAllUsers(){
//    global $connection;
//  $query = "SELECT * FROM utilisateurs";
//  $resultat = $connection->query($query);
// return $resultat ->fetchAll(2);
//}

function getAllUsers()
{
  global $connexion;
  $query = "SELECT utilisateurs.id, utilisateurs.nom, utilisateurs.prenom,
        utilisateurs.email, utilisateurs.profil_id, utilisateurs.tel, profils.designation as profils_designation
        FROM utilisateurs
        INNER JOIN profils ON profils.id = utilisateurs.profil_id";
  $resultat = $connexion->query($query);
  return $resultat->fetchAll(PDO::FETCH_ASSOC);
}


function addUser($nom, $prenom, $email, $tel, $password, $profil_id)
{
  global $connexion;
  $query = "INSERT INTO utilisateurs (nom, prenom, email, tel, password, profil_id) VALUES (?,?,?,?,?,?)";
  $stmt = $connexion->prepare($query);
  return $stmt->execute(array($nom, $prenom, $email, $tel, $password, $profil_id));
}

function deleteUser($id)
{
  global $connexion;

  $query = "DELETE FROM utilisateurs WHERE id = ?";
  $stmt = $connexion->prepare($query);
  return $stmt->execute(array($id));
}

function getOneUser($id)
{
  global $connexion;
  $query = "SELECT * FROM utilisateurs WHERE id = $id";
  $stmt = $connexion->prepare($query);
  $stmt->execute();
  return $stmt;
}

function updateUser($nom, $prenom, $email, $tel, $id)
{
  global $connexion;
  $query = "UPDATE utilisateurs SET (nom, prenom, email, tel) = (?,?,?,?) WHERE id = ?";
  $stmt = $connexion->prepare($query);
  $stmt->execute(array($nom, $prenom, $email, $tel, $id));
  $stmt->closeCursor();
}
