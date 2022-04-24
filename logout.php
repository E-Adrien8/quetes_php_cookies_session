<!--//Pour terminer la partie login, gère le logout : créé dans la barre de navigation un lien vers une page logout.php.-->
<!--Cette page permettra de détruire la session en cours, ainsi que toutes les informations,-->
<!--puis redirigera vers login.php-->
<?php
session_start();

if(isset($_SESSION['login']))
{
    session_destroy();
}
header("Location:index.php");
exit;

?>
