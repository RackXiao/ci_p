<?php
class Project_model extends Abstract_basic_model  {
	function __construct() {
		parent::__construct();
	}
	
	var $table_name = 'Project';
	
	function getList($condition=array(), $cur_page=-1, $order_by='arrange DESC, id DESC') {
		$where_clauses = array();
		$where_binds = array();
		
		$where_str = '';
		if (count($where_clauses) > 0) {
			$where_str = 'WHERE '.join(' AND ', $where_clauses);
		}
		
		$limit = ( -1!=$cur_page ) ? "LIMIT ".($cur_page-1)*ROWS_PER_PAGE.",".ROWS_PER_PAGE : '';

		$sql = "SELECT 
					* 
				FROM {$this->table_name} 
				$where_str 
				ORDER BY $order_by $limit";
		return $this->db->query($sql, $where_binds);
	}  
	
	function countGetList($condition = array()) {
		$where_clauses = array();
		$where_binds = array();
	
		$where_str = '';
		if (count($where_clauses) > 0) {
			$where_str = 'WHERE '.join(' AND ', $where_clauses);
		}

		$sql = "SELECT COUNT(*) count FROM {$this->table_name} $where_str";
		return $this->db->query($sql, $where_binds)->row()->count;
	}

	function insert($data) {
		$qry = $this->getMaxArrange();
		$data['arrange'] = ($qry->num_rows()==0) ? 1 : $qry->row()->arrange + 1;
		
		return basic_db_insert($this->table_name, $data);
	}
}
