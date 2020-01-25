<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller {

	public function index() {
		$this->data['title'] = "Classes Taken";
		$this->data['class3'] = "class='active'";	
		$this->load->view('classes', $this->data);
	}
}