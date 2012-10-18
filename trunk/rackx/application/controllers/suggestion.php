<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suggestion extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->model = setBasicModel('Suggestion');
	}
	
	var $model;

	public function index() {
		$data = array();
		
		$data['title'] = '提出建議';
// 		$data['list'] = $this->model->getAll()->result_array();
		
		$layout_data['main_area'] = $this->load->view('suggestion', $data, true);
		$this->load->view('layout/main_layout', $layout_data);
	}
}
