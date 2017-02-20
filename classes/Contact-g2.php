<?php
require_once("Mysql.php");

class Contact extends Mysql 
{
	// Attributs de la classe
	private $_id;
	private $_email;
	private $_message;
	private $_sujet;
	private $_newsletter;
	private $_d_ajout;

	// Setters
	public function set_id($id) {
		$this->_id = $id;
	}

	public function set_email($email) {
		$this->_email = $email;
	}

	public function set_sujet($sujet) {
		$this->_sujet = $sujet;
	}

	public function set_newsletter($newsletter) {
		$this->_newsletter = 0+$newsletter;
	}

	public function set_message($message) {
		$this->_message = $message;
	}

// Getters
	public function get_id() {
		return $this->_id;
	}

	public function get_email() {
		return $this->_email;
	}

	public function get_sujet() {
		return $this->_sujet;
	}

	public function get_message() {
		return $this->_message;
	}

	public function get_newsletter() {
		return $this->_newsletter;
	}

// Autres méthodes
	public function ajouter()
	{
		if (!isset($this->_email) || 
			!isset($this->_message) || 
			!isset($this->_sujet)     	)
			return false;
		$q = "INSERT INTO contact(id, email, sujet, message, newsletter, d_ajout) VALUES 
		(  null , '$this->_email'	,
		'$this->_sujet'	  , '$this->_message'	,
		'$this->_newsletter'  , NOW()
		)";		
		$res = $this->requete($q);

return mysqli_insert_id($this->get_cnx());	// Renvoi l'id de l'enregistrement ajouté		
}

public function supprimer(){
	$q = "DELETE FROM contact WHERE id = '$this->_id'";
	$res = $this->requete($q);
	return $res;
}
}