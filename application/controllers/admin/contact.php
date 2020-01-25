<?php
class Contact extends Frontend_Controller {

    public function __construct(){
        parent::__construct();

        $this->data['recent_news'] = $this->contact_m->get_recent_contact();
    }

    public function index($id, $slug){
    	// Fetch the article
		$this->article_m->set_published();
		$this->data['contact'] = $this->contact_m->get_contact($id);

    	// Return 404 if not found
    	count($this->data['contact']) || show_404(uri_string());

    	// Load view
    	add_meta_title($this->data['contact']->title);
    	$this->data['subview'] = 'contact';
    	$this->load->view('_main_layout', $this->data);
    }
}