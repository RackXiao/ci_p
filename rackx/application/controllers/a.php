<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->data = array();
	}
	
	function index(){

		$this->data['list'] = $this->db->query("SELECT * FROM A ORDER BY create_date desc")->result();
		
		$layout_data['body'] = $this->load->view('a',$this->data, true);
		$this->load->view('layout/main_layout',$layout_data);
	}
}