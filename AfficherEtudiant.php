<?php
include "includes/connexion.php";
include "includes/session.php";
//include "includes/sessionAdmin.php";
$req=$connexion->prepare("SELECT* FROM etudiants");
$req->execute();
?>
<html>
<body>
    <a href="saisie.html">Saisir un nouveau étudiant</a><br/><br/>
    <a href="ChercherEtudiant.php">Chercher un étudiant</a>
    <h2>La liste de tous les étudiants inscrits:</h2>
   <table border="1" width="80%">
    <tr>
       <th>CODE</th>
       <th>NOM</th>
       <th>MAIL</th>
       <th>PHOTO</th>
    </tr>
    <?php while($ET=$req->fetch()){?>
  <tr>
    <td><?php echo($ET['Code']);?></td>
    <td><?php echo($ET['nom']);?></td>
    <td><?php echo($ET['mail']);?></td>
    <td><img src="Images/<?php echo($ET['photo']);?>"></td>
    <?php if($_SESSION['NIV']==0){?>
    <td><a href ="Supp.php?code=<?php echo($ET['Code']);?>">Supprimer</a></td>
    <td><a href="Editer.php?code=<?php echo($ET['Code']);?>">Editer</a></td>
    <?php } ?>
  </tr>
    <?php } ?>
 </table>   

    
</body>    



</html>