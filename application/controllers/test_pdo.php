<?php


//using our mysql db config, like we normally do
$query = $this->db->query("SELECT * FROM users_groups");
var_dump($query->result());

	//load the pdo db config
$this->pdo = $this->load->database('pdo', true);

//using the pdo config
$stmt = $this->pdo->query("SELECT * FROM users");
var_dump($stmt->result());

//using the pdo config with active record
$stmt = $this->pdo->get("users");
var_dump($stmt->result());