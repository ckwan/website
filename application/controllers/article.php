<?php
class Article extends Frontend_Controller {

    public function __construct(){
        parent::__construct();

        $this->data['recent_news'] = $this->article_m->get_recent();
    }

    public function index($id, $slug){
    	// Fetch the article
		$this->article_m->set_published();
		$this->data['article'] = $this->article_m->get_article($id);
		//$this->data['comment'] = $this->comment_m->get_comment($id);

    	// Return 404 if not found
    	count($this->data['article']) || show_404(uri_string());

    	$requested_slug = $this->uri->segment(3);
    	$set_slug = $this->data['article']->slug;
    	
    	// Redirect if slug was incorrect
    	if ($requested_slug != $set_slug) {
    		redirect('article/' . $this->data['article']->article_id . '/' . $this->data['article']->slug, 'location', '301');
    	}

    	// Load view
    	add_meta_title($this->data['article']->title);
    	$this->data['subview'] = 'article';
    	$this->load->view('_main_layout', $this->data);
    }
}