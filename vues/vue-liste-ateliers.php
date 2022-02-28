<!--Connexion a la base -->
<?php
include('../sources/config.php');
?>

<?php 
//$atelier = $reponse ->fetch();
//var_dump($atelier);

$reponse = $connexion->query("SELECT * FROM Atelier inner join ResponsableAteliers on Atelier.numResp = ResponsableAteliers.numResp   ");

{
?>
<!---->	
<!--HTML-->
<!DOCTYPE html>
<head>
    <title>SuivAteliers</title>
   	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../styles/styles.css" rel="stylesheet" type='text/css'>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        
       

</head>

<body style="
  background-image: url(../images/background.jpg);
">
<!--Barre navigateur du site suivi Atelier  -->
<nav>
       <h1> SuivAteliers</h1>
<div class="onglets">
        <a href="vue-liste-ateliers.php">Liste Ateliers</a>
        <a href="vue-profil.php">Profil</a>
        <a href="../controleurs/ctrl-deconnecter.php"> Déconnexion</a>
        
       </div>
    </nav>
    <!---->
    <br>

<div class="h2">
    <h2 style="  
	background: rgb(0 0 0 / 16%);
    box-shadow: 0px 2px 2px rgb(42 41 41 / 75%);
    text-align: center;
    padding-block: 38px;
    width: 500px;
    margin-left: auto;
    margin-right: auto;
    color:white;"> Liste Ateliers </h2>
  
</div>

<table class="table-style">

        <thead>
            <tr>
                <th>Numéro</th>
                <th>Théme</th>
                <th>Date <br> Enregistrement </th>
                <th>Date & Heure <br>Programmée</th>
                <th>Durée</th>
                <th>Nombre de Place</th>
                <th>Responsable</th>
               
            </tr>
        </thead>
        

        <tbody>
        <?php while($atelier = $reponse ->fetch()){?>
                <tr class="alert" role="alert">
                  <th scope='row'><?php echo $atelier['numAtelier']?></th>
                  <td><?php echo $atelier['theme']?></td>
                  <td><?php echo $atelier['dateEnregistrement']?></td>
                  <td><?php echo $atelier['dateHeureProogramme']?></td>
                  <td><?php echo $atelier['duree']?></td>
                  <td><?php echo $atelier['nbPlace']?></td>
                  <td>
                      <?php echo $atelier['nomResp'] ; ?> &nbsp;<?php echo $atelier['prenomResp']?></td>
                  <td>

                      <form method='POST' action="../controleurs/ctrl-participer-atelier.php">
                        <?php for($i=0;$i < count($atelier);$i++){ ?>
                      <input type='hidden' name='numAtelier' value='<?php echo $atelier[$i]['numAtelier'] ;}?>'>
                        <input type="submit" value="Participer"/>
                      </form>

                      </td>
                    
  
                       
                      <?php } ?>
                  
                  
                   <?php } ?> 
                   
                        </tr>
                
                   
                  
        </tbody>

    </table>
<br>
<br>

<br>
<br>









   
                 
                   
                   
</body>
</html>


