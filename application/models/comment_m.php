<?php
class Comment_m extends MY_Model
{
	protected $_primary_key_comment = 'comment_id';
	protected $_table_name = 'comment';
	protected $_order_by = 'pubdate desc, comment_id desc';
	protected $_timestamps = TRUE;
	public $rules = array(
		'pubdate' => array(
			'field' => 'pubdate',
			'label' => 'Publication date',
			'rules' => 'trim|required|exact_length[10]|xss_clean'
		),
		'comment_name' => array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'trim|required|xss_clean'
		),
		'comment_body' => array(
			'field' => 'body',
			'label' => 'Body',
			'rules' => 'trim|required'
		)
	);

	public function get_new ()
	{
		$comment = new stdClass();
		$comment->comment_id = '';
		$comment->article_id = '';
		$comment->comment_body = '';
		$comment->comment_name = '';
		$comment->pubdate = date('Y-m-d');
		return $comment;
	}

	public function set_published(){
		$this->db->where('pubdate <=', date('Y-m-d'));
	}

	public function get_recent_comment($limit = 3){

		// Fetch a limited number of recent comments for the article
		$limit = (int) $limit;
		$this->set_published();
		$this->db->limit($limit);
		return parent::get();
	}

	//COMMENT TABLE
	public function array_from_comment($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}
	public function get_comment($id = NULL, $single = FALSE){

		if ($id != NULL) {
			/*$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key_comment, $id);*/
			$method = 'row';
			//SELECT comment_body FROM comment.article_id JOIN article.article_id WHERE article_id = 8;
			$this->db->select('comment_body');
			$this->db->from('articles');
			$this->db->join('comment', 'comment.article_id = articles.article_id');
			$this->db->where('comment.article_id', $id);
			$query = $this->db->get();
			return $query;
		}
		/*
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
		*/
	}

	public function get_by_comment($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}

	public function save_comment($data, $id = NULL){

		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
		}

		// Insert
		if ($id === NULL) {
			!isset($data[$this->_primary_key_comment]) || $data[$this->_primary_key_comment] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		// Update
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key_comment, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}


	public function delete_comment($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);

		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->_primary_key_comment, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}
}