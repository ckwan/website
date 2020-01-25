<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->data['title'] = "Home";
		$this->data['class1'] = "class='active'";
		$this->load->view('home', $this->data);
	}
}	