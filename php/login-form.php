<?php

if(!$_POST) exit;
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
echo "<script>alert(\"Test\")</script>"; 
$user       = $_POST['user'];
$password      = $_POST['password']; 

/*$verify     = $_POST['verify'];*/
$valide = true;
$messageErreur = '';
if(trim($user) == '') {
	$messageErreur = 'Vous devez entrer le nom d''utilisateur.';
	/*echo '<div class="error_message">Vous devez entrer votre nom.</div>';*/
	$valide = false;
	/*exit();*/
}
if(trim($password) == '') {
	/*echo '<div class="error_message">Vous devez entrer une adresse courriel valide.</div>';*/
	$messageErreur = $messageErreur . '<br>Vous devez entrer un mot de passe.';
	$valide = false;
	/*exit();*/
}


if(!$valide)
{
	echo '<div class="error_message">' . $messageErreur . '</div>';
	exit();
}






