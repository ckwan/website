<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index() {
		$this->data['title'] = "About";
		$this->data['class2'] = "class='active'";
		$this->load->view('about', $this->data);
	}
}