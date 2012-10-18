<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discuss extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->board_category_model = setBasicModel('BoardCategory');
		$this->model = setBasicModel('Board');
	}
	
	var $model;

	public function index() {
		$data = array();
		
// 		$data['title'] = '專案列表';
// 		$data['list'] = $this->model->getAll()->result_array();
		
		$layout_data['main_area'] = $this->load->view('project', $data, true);
		$this->load->view('layout/main_layout', $layout_data);
	}
}
