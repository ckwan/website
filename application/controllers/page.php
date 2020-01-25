<?php

class Page extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }

    public function index() {

//     	$this->data['session'] = "";
//     	if($this->user_m->loggedin() == TRUE) {
//     		$segments = array('admin');
//     		$theurl = site_url($segments);
//     		$this->data['session'] = '<a href="'. $theurl . '">Admin Panel</a>';
//     	}

    	// Fetch the page template
    	$this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
    	count($this->data['page']) || show_404(current_url());

    	add_meta_title($this->data['page']->title);

    	// Fetch the page data
    	$method = '_' . $this->data['page']->template;
    	if (method_exists($this, $method)) {
    		$this->$method();
    	}
    	else {
    		log_message('error', 'Could not load template ' . $method .' in file ' . __FILE__ . ' at line ' . __LINE__);
    		show_error('Could not load template ' . $method);
    	}

    	// Load the view
    	$this->data['subview'] = $this->data['page']->template;
    	$this->load->view('_main_layout', $this->data);
    }

    public function project1() {
    	$this->data['menu'] = $this->page_m->get_nested();
    	$this->load->view('templates/projects/project1', $this->data);
    }

    public function project2() {
    	$this->data['menu'] = $this->page_m->get_nested();
    	$this->load->view('templates/projects/project2', $this->data);
    }

    public function project3() {
    	$this->data['menu'] = $this->page_m->get_nested();
    	$this->load->view('templates/projects/project3', $this->data);
    }
/*
    public function project4() {
    	$this->data['menu'] = $this->page_m->get_nested();
    	$this->load->view('templates/projects/project4', $this->data);
    }

    public function project5() {
    	$this->data['menu'] = $this->page_m->get_nested();
    	$this->load->view('templates/projects/project5', $this->data);
    }
    public function project6() {
    	$this->data['menu'] = $this->page_m->get_nested();
    	$this->load->view('templates/projects/project6', $this->data);
    }
*/
    private function _about_page(){
    	$this->data['recent_news'] = $this->article_m->get_recent();
    }

    private function _about(){
    	$this->data['recent_news'] = $this->article_m->get_recent();
    }

    private function _contact(){
    	$this->load->helper('form');
    	$this->load->library('form_validation');
    }

    private function _portfolio(){

    }

    private function _page(){
    	$this->data['recent_news'] = $this->article_m->get_recent();
    }

    private function _homepage(){
    	$this->article_m->set_published();
    	$this->db->limit(6);
    	$this->data['articles'] = $this->article_m->get_article();
		$this->data['recent_news'] = $this->article_m->get_recent();
    }

    private function _news_archive(){

    	$this->data['recent_news'] = $this->article_m->get_recent();

		// Count all articles
		$this->article_m->set_published();
		$count = $this->db->count_all_results('articles');

		// Set up pagination
		$perpage = 4;
		if ($count > $perpage) {
			$this->load->library('pagination');
			$config['base_url'] = site_url($this->uri->segment(1) . '/');
			$config['total_rows'] = $count;
			$config['per_page'] = $perpage;
			$config['uri_segment'] = 2;
			$this->pagination->initialize($config);
			$this->data['pagination'] = $this->pagination->create_links();
			$offset = $this->uri->segment(2);
		}
		else {
			$this->data['pagination'] = '';
			$offset = 0;
		}

		// Fetch articles
		$this->article_m->set_published();
		$this->db->limit($perpage, $offset);
		$this->data['articles'] = $this->article_m->get_article();
    }
}