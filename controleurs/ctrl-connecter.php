<?php
include('../sources/config.php');
?>
<!--formulaire authentification php -->
<?php
session_start();
$reponse = $connexion->query('SELECT * FROM Client');
$clients = $reponse->fetchall();

if (isset($_POST['emailClient']) && isset($_POST['mdpClient'])) {
    $emailClient = htmlspecialchars($_POST['emailClient']);
    $mdpClient = htmlspecialchars($_POST['mdpClient']);

 #vérifier si l'email et mdp de l'utilisateur est correcte si elle est correcte , 
#elle renvoie à la vue liste atelier

    for ($i=0;$i< count($clients);$i++){
        if ($emailClient == $clients[$i]['emailClient']){
            if ($mdpClient == $clients[$i]['mdpClient']){
                session_start();
                $_SESSION['numClient'] = $clients[$i]['numClient'];
                $_SESSION['nomClient'] = $clients[$i]['nomClient'];
                $_SESSION['prenomClient'] = $clients[$i]['prenomClient'];
                header('Location:../vues/vue-liste-ateliers.php');
                exit;
            }
        }
    }

      #si l'email/mdp est incorrecte, elle renvoie à la page de connexion 
    for ($i=0; $i <count($clients);$i++){
        if ($emailClient != $clients[$i]['emailClient'] && $mdpClient != $clients[$i]['mdpClient']){
            header('Location:../vues/vue-connexion.php?login_err=already');
        }
    }
}
else{
    //var_dump($utilisateurs);
    header('Location:../vues/vue-connexion.php?login_err=already');
  }
?>