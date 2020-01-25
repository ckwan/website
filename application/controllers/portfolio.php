<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index() {
		$this->data['title'] = "Portfolio";
		$this->data['class4'] = "class='active'";
		$this->load->view('portfolio', $this->data);
	}
}