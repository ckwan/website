<?php
class Article_m extends MY_Model
{
	protected $_table_name = 'articles';
	protected $_order_by = 'pubdate desc, article_id desc';
	protected $_timestamps = TRUE;
	public $rules = array(
		'pubdate' => array(
			'field' => 'pubdate',
			'label' => 'Publication date',
			'rules' => 'trim|required|exact_length[10]|xss_clean'
		),
		'title' => array(
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'trim|required|max_length[100]|xss_clean'
		),
		'slug' => array(
			'field' => 'slug',
			'label' => 'Slug',
			'rules' => 'trim|required|max_length[100]|url_title|xss_clean'
		),
		'body' => array(
			'field' => 'body',
			'label' => 'Body',
			'rules' => 'trim|required'
		)
	);

	public function get_new()
	{
		$article = new stdClass();
		$article->title = '';
		$article->slug = '';
		$article->body = '';
		$article->pubdate = date('Y-m-d');
		return $article;
	}

	public function set_published(){
		$this->db->where('pubdate <=', date('Y-m-d'));
	}

	public function get_recent($limit = 3){

		// Fetch a limited number of recent articles
		$limit = (int) $limit;
		$this->set_published();
		$this->db->limit($limit);
		return parent::get();
	}
	//ARTICLE TABLE
	public function get_article($id = NULL, $single = FALSE){
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key_article, $id);
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
	
	public function get_by_article($where, $single = FALSE){
		$this->db->where($where);
		return $this->get_article(NULL, $single);
	}
	
	public function save_article($data, $id = NULL){
	
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}
	
		// Insert
		if ($id === NULL) {
			!isset($data[$this->_primary_key_article]) || $data[$this->_primary_key_article] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		// Update
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key_article, $id);
			$this->db->update($this->_table_name);
		}
	
		return $id;
	}
	
	//delete article
	public function delete_article($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);
	
		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->_primary_key_article, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}
}