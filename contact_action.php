<?php
	// Récupérer les valeurs saisies par l'internaute
	$email 		= $_POST['email'];
	$sujet 		= $_POST['sujet'];
	$message 	= $_POST['message'];
	$newsletter = $_POST['newsletter'];

	// Créer une nouvelle instance de la classe Contact
	require_once("classes/Contact-g2.php");
	$c = new Contact();
	// Initialiser les différents attributs de l’instance
	$c->set_email($email);
	$c->set_newsletter($newsletter);
	$c->set_message($message);
	$c->set_sujet($sujet);

	//Enregistrer les données et récupérer le résultat
	$id = $c->ajouter();
	if ($id) 	$retour = 1;
	else		$retour = 0;
	// OU $retour = $id ? 1 : 0;

	// Redirection
	header("Location: contact.php?retour=$retour&sujet=$sujet");
