<?php
include "includes/connexion.php";
include "includes/session.php";
//include "includes/sessionAdmin.php";
$mc="NULL";
if(isset($_POST['motCle']))
{
    $mc=$_POST['motCle'];
}
$req=$connexion->prepare("SELECT* FROM etudiants WHERE nom like '%$mc%'");//% qlq soit ce qui avant ou apres
$req->execute();
?>
<html>
<body>
    <form method="POST" action="ChercherEtudiant.php">
        Mon clé :<input type="text" name="motCle" value="<?php echo ($mc);?>">
        <input type="submit" value="Chercher">
    </form>
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
    
  </tr>
    <?php } ?>
 </table>   
    
    
</body>    



</html>