<?php
class User_model extends Abstract_basic_model  {
	function __construct() {
		parent::__construct();
	}

	function getAll() {
		$sql = 'SELECT * FROM User ORDER BY id';
		return $this->db->query($sql);
	}

	function getList($condition = array(), $order_by = 'id DESC') {
		$where_clauses = array();
		$where_binds = array();
		
		// 帳號不分大小寫。
		if (isset($condition['account'])) {
			$where_clauses []= " UPPER(account) = UPPER(?) ";
			$where_binds [] = $condition['account'];
		}
		
		if (isset($condition['password'])) {
			$where_clauses []= " password = ? ";
			$where_binds [] = $condition['password'];
		}
		
		$where_str = '';
		if (count($where_clauses) > 0) {
			$where_str = 'WHERE '.join(' AND ', $where_clauses);
		}

		$sql = 'SELECT User.* FROM User '.$where_str.' ORDER BY '.$order_by;

		return $this->db->query($sql, $where_binds);
	}

	function getAccount($id) {
		$sql = 'SELECT * FROM User WHERE id = ?';
		return $this->db->query($sql, $id);
	}
	
	function insert($data) {
		$data = array_filter_key(
			$data,
			array('id', 'account', 'password', 'status', 'Permission_id')
		);
		
		$is_success = $this->db->insert('User', $data);

		if (!$is_success) {
			return 0;
		} 
		$new_data_id = $this->db->insert_id();
		return $new_data_id;
	}

	function update($id, $data) {
		$data = array_filter_key(
			$data,
			array('id', 'account', 'password', 'status', 'Permission_id')
		);
		
		return $this->db->update('User', $data, array('id'=>$id));
	}
	
	function delete($id_list) {
		foreach ($id_list as $id) {
			$this->db->delete('User', array('id'=>$id));
		}
	}
}
