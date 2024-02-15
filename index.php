<?php

require_once('database/connexion.php');
require_once('database/user_db.php');
require_once('database/profil_db.php');
require_once('database/annonce_db.php');
require_once('database/categorie_db.php');


// les utilisateurs
if (isset($_GET['p'])) {
    if ($_GET['p'] == 'admin/listeUser') {
        $utilisateurs = getAllUsers();
    } elseif ($_GET['p'] == 'user/user') {
        $profils = getAllProfils();
    } elseif ($_GET['p'] == 'user/update_user') {
        $id = $_GET['id'];
        $user = getOneUser($id);
    }
}
if (isset($_POST['addUser'])) {
    extract($_POST);
    if ($password == $confirme_password) {
        $password = md5($password);
        $resultat = addUser($nom, $prenom, $email, $tel, $password, $profil_id);
        if ($resultat) {
            header('location:?p=admin/listeUser');
        }
    }
}

if (isset($_POST['updateUser'])) {
    extract($_POST);
    $resultat = updateUser($id, $nom, $prenom, $email, $tel);
    if ($resultat) {
        header('location:?p=admin/listeUser');
    }
}


// les annonces
if (isset($_GET['p'])) {
    if ($_GET['p'] == 'annonce/listeAnnonce') {
        $annonces = getAllAnnonces();
    } elseif ($_GET['p'] == 'annonce/add_annonce') {
        $categories = getAllCategorie();
    } elseif ($_GET['p'] == 'annonce/update_annonce') {
        $id = $_GET['id'];
        $user = getOneAnnonce($id);
    }
}

if (isset($_POST['addAnnonce'])) {
    extract($_POST);
    $resultat = addAnnonce($titre, $description, $image, $etat, $validate, $date_creation, $date_update);
    if ($resultat) {
        header('location:?p=annonce/listeAnnonce');
    }
}

if (isset($_POST['updateAnnonce'])) {
    extract($_POST);
    $resultat = updateUser($id, $nom, $prenom, $email, $tel);
    if ($resultat) {
        header('location:?p=annonce/listeAnnonce');
    }
}


// les categories
if (isset($_GET['p'])) {
    if ($_GET['p'] == 'categorie/listeCategorie') {
        $categories = getAllCategorie();
    }
    elseif ($_GET['p'] == 'categorie/update_categorie') {
        $id = $_GET['id'];
        $categorie = getOneCategorie($id);
    }
}

if (isset($_POST['addCategorie'])) {
    extract($_POST);
    $resultat = addCategorie($designation);
    if ($resultat) {
        header('location:?p=categorie/listeCategorie');
    }
}

if (isset($_POST['updateCategorie'])) {
    extract($_POST);
    $resultat = updateCategorie($designation, $id);
    if ($resultat) {
        header('location:?p=categorie/listeCategorie');
    }
}

if (isset($_POST['deleteCategorie'])) {
    extract($_POST);
    $resultat = deleteCategorie($id);
    if ($resultat) {
        header('location:?p=categorie/listeCategorie');
    }
}


require_once('navbar.php');
require_once('header.php');

$page = isset($_GET['p']) ? $_GET['p'] : "";
if (file_exists("view/$page.php") && $page != "") {
    include_once("view/$page.php");
}

require_once('footer.php');
