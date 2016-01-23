<?php
require_once "includes/connexion.php";
require_once "includes/session.php";
require_once "includes/sessionAdmin.php";
$code=$_GET['code'];
$req=$connexion->prepare("SELECT* FROM etudiants WHERE Code=$code");
$req->execute();
$ET=$req->fetch();
?>
<html>
<body>
      <form method="POST" action="ModifierEtudiant.php" enctype="multipart/form-data"> <!-- attribut pour uploader un fichier(format binaire pas que du texte-->
       <table>
        <tr>
            <td>CODE:</td>
           <td><?php echo $ET['Code'];?><input type="hidden" name="code" readonly="true"></td>
        </tr>
        <tr>
            <td>NOM:</td>
            <td><input type="text" name="nom" value="<?php echo $ET['nom'];?>"></td>
        </tr>
         <tr>
            <td>MAIL:</td>
            <td><input type="text" name="mail" value="<?php echo $ET['mail'];?>"></td>
         </tr>
         <tr>
            <td>PHOTO:</td>
            <img src="Images/<?php echo($ET['photo'])?>">
            <td><input type="file" name="photo"</td>
        </tr>
            <td></td>
            <td><input type="submit" value="Enregistrer"></td>
       </table> 
     </form>  
 </body>    
</html>
