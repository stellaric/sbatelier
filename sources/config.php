<?php
try {
  $dbName = 'sbateliers';
  $host = 'localhost';
  $utilisateur = 'sanayabio';
  $motDePasse = 'sb2021';
  $port='3306';
  $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
  $connexion = new PDO( $dns, $utilisateur, $motDePasse );
} catch ( Exception $e ) {
  echo "Connexion à la BDD impossible : ", $e->getMessage();
 
}
?>