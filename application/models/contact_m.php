<?php
class Contact_m extends MY_Model
{
	protected $_table_name = 'contact';
	protected $_order_by = 'pubdate desc, contact_id desc';
	protected $_timestamps = TRUE;
	public $rules = array(
		'email' => array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|required|valid_email|xss_clean'
		),
		'name' => array(
			'field' => 'name',
			'label' => 'Name',
			'rules' => 'trim|required|xss_clean'
		),
		'subject' => array(
				'field' => 'subject',
				'label' => 'Subject',
				'rules' => 'trim|required|xss_clean'
		),
		'contentbox' => array(
			'field' => 'contentbox',
			'label' => 'Contentbox',
			'rules' => 'trim|required'
		),
	);

	public function get_new_contact()
	{
		$article = new stdClass();
		$article->email = '';
		$article->name = '';
		$article->subject = '';
		$article->contentbox = '';
		return $article;
	}

	public function get_recent_contact($limit = 3){

		// Fetch a limited number of recent articles
		$limit = (int) $limit;
		$this->db->limit($limit);
		return parent::get();
	}
	
	
	//CONTACT TABLE
	public function array_from_contact($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}
	public function get_contact($id = NULL, $single = FALSE){
	
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key_contact, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
	
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->_order_by);
		}
		return $this->db->get($this->_table_name)->$method();
	}
	
	public function get_by_contact($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}
	
	public function save_contact($data, $id = NULL){
	
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
		}
	
		// Insert
		if ($id === NULL) {
			!isset($data[$this->_primary_key_contact]) || $data[$this->_primary_key_contact] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		// Update
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key_contact, $id);
			$this->db->update($this->_table_name);
		}
	
		return $id;
	}
	
	
	public function delete_contact($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);
	
		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->_primary_key_contact, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}
}