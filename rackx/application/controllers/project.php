<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('project_model');
		$this->model = new project_model();
	}
	
	var $model;

	public function index() {
		$data = array();
		
		$data['title'] = '專案列表';
		$data['list'] = $this->model->getAll()->result_array();
		
		$layout_data['main_area'] = $this->load->view('project', $data, true);
		$this->load->view('layout/main_layout', $layout_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */