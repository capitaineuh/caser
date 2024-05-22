<?php

//-- DEF : Fonction de logout. Vide toutes les variables de la session et redirige vers la page d'Accueil.
session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['cart']);
}

header("Location: ../index.php");
