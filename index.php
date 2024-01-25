<?php session_start();
session_unset();
$_SESSION['connecte']= 0;
$_SESSION['roles'] = 0;
// Rediriger vers la page de connexion




header("Location: Accueil/page_accueil.php");
echo ('edcdccedc');

exit();
?>