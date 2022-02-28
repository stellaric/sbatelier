<?php
include('../sources/config.php');
?>

<!DOCTYPE html>

<head>
    <title>SbAteliers</title>
   	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../styles/styles.css" rel="stylesheet" type='text/css'>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">


</head>

<body style="
  background-image: url(../images/background.jpg);
">

<!--Barre de Menu -->
 
<nav>
       <h1>Sanayabio Ateliers</h1>
<div class="onglets">
        <a href="../index.php">Accueil</a>
       <a href="vues/vue-connexion.php">Connexion</a>
        <a href="vues/vue-enregistrement-client.php">Inscription</a>
        <a href="../../suivateliers/index.php">Espace Admin</a>
      
</div>
    </nav>
<!---->

<header>
    
<div class="cadre">
    <h2 style="font-size: 45px;">Connexion</h2>

   <?php
   if (isset($_GET['login_err']))
   {
       $err= htmlspecialchars($_GET['login_err']);
       switch($err)
       {
           case'mdpClient':
            ?>
             <div class="alert alert-danger">
                                <strong>Erreur</strong> Mot de passe incorrect
                            </div>
                            <?php
                        break;

             case 'emailClient':
                        ?>
            <div class="alert alert-danger">
                  <strong>Erreur</strong> Login incorrect
                     </div>
                    <?php
                     break;

                 case 'already':
                    ?>
                    <div class="alert alert-danger">
                      <strong>Erreur</strong> <br>Identifiant ou Mot de passe  incorrects
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
                             </button>
                                </div>
                            <?php
                            break;
       }
   }
   ?>


  <form action="../controleurs/ctrl-connecter.php" method="post">
                 
                <div class="form-group">
                    <input type="text" name="emailClient" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <br>
                    <input type="password" name="mdpClient" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
</div>
</div>
</header>

<section>

</section>





</body>
</html>