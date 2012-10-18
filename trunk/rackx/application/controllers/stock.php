<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->model = setBasicModel('Stock');
	}
	
	var $model;

	public function index() {
		$data = array();
		
		$data['title'] = '股市討論';
// 		$data['list'] = $this->model->getAll()->result_array();
		
		$layout_data['main_area'] = $this->load->view('project', $data, true);
		$this->load->view('layout/main_layout', $layout_data);
	}
}
