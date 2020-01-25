<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index() {
		$this->data['title'] = "Blog";
		$this->data['class5'] = "class='active'";
		$this->load->view('blog', $this->data);
	}
}