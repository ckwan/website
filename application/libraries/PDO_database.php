<?php

class PDO_Database {
	protected $db;

	public function __construct($config)
	{
		$this->db = $config['conn'];
		$this->pdo = $this->load->database('pdo','true');
	}
}