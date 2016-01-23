<?php
require_once "includes/connexion.php";
//require_once "includes/session.php";
require_once "includes/sessionAdmin.php";
$code=$_GET['code'];
$req=$connexion->prepare("DELETE FROM etudiants WHERE Code=$code");
$req->execute();
//header("Location:AfficherEtudiant.php");//redirection
require_once("AfficherEtudiant.php");//forwarding
?>