<?php
   include "includes/connexion.php";
   include "includes/session.php";
   include "includes/sessionAdmin.php"; 
   $nom=$_POST['nom'];
   $email=$_POST['mail'];
   $nomPhoto=$_FILES['photo']['name'];// champs dans le formulaire photo//ce qui nous intéresse c est le nom de la photo.
   $file_tmp_name=$_FILES['photo']['tmp_name'];// chemin tomporaire//nom tomporaire 
   move_uploaded_file($file_tmp_name,"./Images/$nomPhoto");//déplace un fichier téléchargé
   $req=$connexion->prepare("INSERT INTO etudiants(nom,mail,photo)VALUES(:nom,:email,:Photo)");// : marqueurs
   $req->bindParam(':nom',$nom);
   $req->bindParam(':email',$email);
   $req->bindParam(':Photo',$nomPhoto);
   $req->execute();
   ?>
   <!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
    </head>
<table border="1">
    <tr>
        <td>Nom </td>
        <td><?php echo($nom);?></td>
    </tr>
     <tr>
        <td>Mail:</td>
        <td><?php echo($email);?></td>
    </tr>
      <tr>
        <td>Photo</td>
        <td><img src="Images/<?php echo($nomPhoto);?>"</td>
    </tr>
</table>
<a href="AfficherEtudiant.php">Afficher tous les étudiants</a>
</html>