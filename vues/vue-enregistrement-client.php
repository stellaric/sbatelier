<?php
session_start();
require('../sources/pdo.php');
    if(isset($_SESSION['numClient'])){
        header('Location:../index.php');
        exit;
    }

?>

<!DOCTYPE html>

<head>
    <title>SbAteliers</title>
   	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../styles/styles.css" rel="stylesheet" type='text/css'>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body >

 <!--Barre de Menu -->

 <nav>
       <h1>Sanayabio Ateliers</h1>
<div class="onglets">
       <a href="vues/vue-connexion.php">Connexion</a>
        <a href="vues/vue-enregistrement-client.php">Inscription</a>
        <a href="../suivateliers/">Espace Admin</a>
      
</div>
    </nav>
<!---->
<header>
<div class="hd1">
    <h1>Inscription</h1>
</div>
</header>
<section>
    <form action="../controleurs/ctrl-enregistrer-client.php" method="POST">
      
    <br>
        <label for="civilite"> Civilite:</label><br>
<input type="radio" name="gender"
<?php if (isset($civilite) && $civilite=="Monsieur") echo "checked";?>
value="Monsieur">Monsieur
<input type="radio" name="gender"
<?php if (isset($civilite) && $civilite=="Madame") echo "checked";?>
value="Madame">Madame
<input type="radio" name="gender"
<?php if (isset($civilite) && $civilite=="Mademoiselle") echo "checked";?>
value="Mademoiselle">Mademoiselle
    <br>

        <label for="nomClient">First name:</label><br>
      <?php
        if (isset($er_nom)){
            ?>
            <div><?= $er_nom ?></div>
            <?php  }?>
            <input type="text" placeholder="Votre nom" name="nomClient" value="<?php if (isset($nomClient)){echo $nomClient;}?>" required >
           
    <br>
            <label for="prenomClient">prenom name:</label><br>
       <?php
        if (isset($er_prenom)){
            ?>
            <div><?= $er_prenom ?></div>
            <?php  }?>
            <input type="text" placeholder="Votre prénom" name="prenomClient" value="<?php if (isset($prenomClient)){echo $prenomClient;}?>" required >
    <br>        
            <label for="adressePostale">Postale name:</label><br>
        <?php
        if (isset($er_adressepostale)){
            ?>
            <div><?= $er_adressepostale ?></div>
            <?php  }?>
            <input type="text" placeholder="Votre adresse postale" name="adressePostale" value="<?php if (isset($adressepostale)){echo $adressepostale;}?>" required >
    <br>
            <?php
        if (isset($er_codepostal)){
            ?>
            <div><?= $er_codepostal ?></div>
            <?php  }?>
            <input type="text" placeholder="Votre codepostale" name="codePostal" value="<?php if (isset($codepostal)){echo $codepostal;}?>" required >
    <br>   
            <?php
        if (isset($ville)){
            ?>
            <div><?= $$ville ?></div>
            <?php  }?>
            <input type="text" placeholder="Votre ville" name="ville" value="<?php if (isset($ville)){echo $ville;}?>" required >
    <br>        
            <?php
        if (isset($telClient)){
            ?>
            <div><?= $telClient ?></div>
            <?php  }?>
            <input type="text" placeholder="Votre tel" name="telClient" value="<?php if (isset($telClient)){echo $telClient;}?>" required >
   <?php
            if (isset($emailClient)){
            ?>
            <div><?= $emailClient ?></div>
            <?php  }?>
            <input type="text" placeholder="Votre email" name="emailClient" value="<?php if (isset($emailClient)){echo $emailClient;}?>" required >
     
 <input type="password" placeholder="Mot de passe" name="mdpClient" value="<?php if(isset($mdpClient)){ echo $mdpClient; }?>" required>

<button type="submit" name="inscription">Envoyer</button>
        </form>

        <!---->
<center><a href="../index.php" type="link" >Retour </a></center>

<!---->
</section>
</body>
</html>