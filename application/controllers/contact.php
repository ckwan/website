<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index() {
		$this->data['title'] = "Contact";
		$this->data['class6'] = "class='active'";
		$this->load->view('contact', $this->data);
	}		
}