<?php
class Comment extends Admin_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('comment_m');
	}

	public function index(){
		// Fetch the comments
		$this->article_m->set_published();
		$this->data['comment'] = $this->comment_m->get_comment($id);

		// Return 404 if not found
		count($this->data['comment']) || show_404(uri_string());

		// Load view
		add_meta_title($this->data['comment']->title);
		$this->data['subview'] = 'article';
		$this->load->view('_main_layout', $this->data);
	}
}