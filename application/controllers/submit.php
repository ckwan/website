<?php
class Submit extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    	$this->load->library('form_validation');
    	$this->load->model('contact_m');
    	$this->load->model('page_m');

	}

	public function index($id = NULL) {
		// Process the form
		$rules = $this->contact_m->rules;
		$this->form_validation->set_rules($rules);
		$this->data['page'] = $this->contact_m->get_new_contact();
		$this->data['menu'] = $this->page_m->get_nested();
		$this->data['meta_title'] = "Contact - Calvin Kwan";

		if ($this->form_validation->run() == TRUE) {
			$data = $this->contact_m->array_from_contact(array('email', 'name', 'subject', 'contentbox'));
			$this->contact_m->save_contact($data, $id);
			$this->data['thankyou'] = "Thank you for you submission";
			$this->load->view('components/page_head', $this->data);
			$this->load->view('components/menu', $this->data);
			$this->load->view('templates/contact');
			$this->load->view('components/page_tail');
			redirect('Contact');
		}
		else {
			$this->data['thankyou'] = "";
			$this->load->view('components/page_head', $this->data);
			$this->load->view('components/menu', $this->data);
			$this->load->view('templates/contact');
			$this->load->view('components/page_tail');
		}
	}
}