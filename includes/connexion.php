       <?php
        //le nom de l'hôte l’adresse du serveur où MySQL est installé. Dans notre cas,
        //vu que nous travaillons en local, ce sera « localhost »
        $serveur="localhost";
        $login="root";
        $pass="";
        //On vient donc de créer l’objet $connexion,
        //objet qui représente notre connexion à la base de données
        //et qui va contenir des informations relatives à cette même connexion.
        
        try{
           $connexion=new PDO("mysql:host=$serveur;dbname=scolarite",$login,$pass);
           $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                      }
        catch(PDOException $e)
        {
          echo'Echec de la connexion : '.$e->getMessage();  
        }
        ?>