<?php
 session_start();
require('../sources/pdo.php');
 
if (isset($_SESSION['numClient'])){
 header('Location: index.php');
 exit;
 }
 
if(!empty($_POST)){
 extract($_POST);
$valid = true;


if (isset($_POST['inscription'])){
    $civilite = htmlentities(trim($civilite));
    $nomClient = htmlentities(trim($nomClient));
    $prenomClient = htmlentities(trim($prenomClient));
    $dateNaissance = htmlentities(trim($dateNaissance));
    $emailClient = htmlentities(strtolower(trim($emailClient)));
    $mdpClient = trim($mdpClient);
    $adressePostale = htmlentities(trim($adressePostale));
    $codePostal = htmlentities(trim($codePostal));
    $ville = htmlentities(trim($ville));
    $telClient = htmlentities(trim($telClient));  


    if(isset($_POST['civilite']) == false){
        $civilite = 'Homme';
      }else{
        $civilite = 'Femme';
      }
    
    if(empty($nomClient)){
        $valid =false;
        $er_nom =("le nom ne peut pas être vide");
    }

    if(empty($prenomClient)){
        $valid=false;
        $er_prenom =("le prénom ne peut pas être vide");
    }

    if(empty($adressePostale)){
        $valid=false;
        $er_adressepostale =("l'adresse postale  ne peut pas être vide");
    }

    if(empty($codePostal)){
        $valid=false;
        $er_codepostal =("le code postal ne peut pas être vide");
    }

    if(empty($ville)){
        $valid=false;
        $er_ville =("le champ ville ne peut pas être vide");
    }
    if(empty($telClient)){
        $valid=false;
        $er_telClient =("le numéro de telephone ne peut pas être vide");
    }

    // Vérification du mail
    if(empty($emailClient)){
        $valid = false;
        $er_email = "L'email ne peut pas être vide";
       
    }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
           $valid = false;
            $er_mail = "L' email n'est pas valide";
     }else{
         $req_mail = $DB->query("SELECT emailClient FROM Client WHERE emailClient = ?",
             array($emailClient));

         $req_mail = $req_mail->fetch();
    
    if ($req_mail['emailClient'] !=""){
                $valid = false;
                $er_mail = "Cette email existe déjà";
             
}

// Vérification du mdp
if(empty($mdpClient)){
    $valid = false;
    $er_mdp = "Le mot de passe ne peut pas être vide";
}

if($valid){

    $mdpClient =sha1('$mdpClient');
// On insert nos données dans la table client

$pdo->insert("INSERT INTO `Client` (numClient ,civilite, nomClient, prenomClient,dateNaissance,emailClient, mdpClient,adressePostale,codePostal,ville,telClient) VALUES
(?,?,?,?,?,?,?,?,?,?,?,?,?)",array($numClient,$civilite,$nomClient, $prenomClient, $emailClient, $mdpClient, $adressePostale,$codePostal,$ville,$telClient));
 
header('Location: ../');
exit;
 }
} 
}
}
?>