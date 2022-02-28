<?php
include('../sources/config.php');
?>
<?php 
$dateInscription = date($_POST['dateInscription']);
$participer = "INSERT INTO Participation (?,?,?) Values ('".$_POST['numAtelier']."','".$_POST['numClient']."',$dateInscription)";

if($connexion->query($participer) === TRUE) {
    echo "New record created successfully";
  }
header("Location: ../vues/vue-liste-ateliers.php");

?>



