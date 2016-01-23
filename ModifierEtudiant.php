<?php
   require_once "includes/connexion.php";
   require_once "includes/session.php";
   include "includes/sessionAdmin.php";
   $code=$_POST['code'];
   var_dump($code);
   $nom=$_POST['nom'];
   var_dump($nom);
   $email=$_POST['mail'];
    var_dump($email);  
 
   $nomPhoto=$_FILES['photo']['name'];// champs dans le formulaire photo//ce qui nous intéresse c est le nom de la photo.
   $file_tmp_name=$_FILES['photo']['tmp_name'];// chemin tomporaire//nom tomporaire 
   move_uploaded_file($file_tmp_name,"./Images/$nomPhoto");//déplace un fichier téléchargé
   $req=$connexion->prepare("UPDATE etudiants SET nom=:nom,mail= :email,photo= :nomPhoto WHERE Code= :code");
   $req->bindParam(":nom",$nom);
   $req->bindParam(":email",$email);
   $req->bindParam(":nomPhoto",$nomPhoto);
   $req->bindParam(":code",$code);
   //$res=$req->execute(array(':nom'=>$nom,':email'=>$email,':nomPhoto'=>$nomPhoto,':code'=>$code));
   $req->execute();
   //header("location:AfficherEtudiant.php");
   require_once("AfficherEtudiant.php");
?>
  