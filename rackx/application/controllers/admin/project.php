<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		$this->load->model('project_model');
		$this->model = new project_model();
		
		$this->controller = getControllerCIPath(__FILE__);
	}
	
	var $controller;
	var $management_name = "專案";
	var $table_name = "Project";
	var $model;

	function index($page_num=1, $query_string='-') {
		if ($query_string === '-') {
			$conditions = array();
			$query_string = assoc_to_segment($conditions);
		} else {
			$conditions = segment_to_assoc($query_string);
		}
		
		$data = array();
		$data['page_num'] = $page_num;
		$data['query_string'] = $query_string;
		$data['list'] = $this->model->getList();
		
		$data['list'] = $this->model->getList($conditions, $page_num)->result();
		
		$pager_param = pager_param(
			"{$this->controller}/index/%s/{$query_string}",
			intval($page_num),
			$this->model->countGetList($conditions),
			ROWS_PER_PAGE
		);
		$data['pager_str'] = $this->load->view('util/pager', $pager_param, true);
		
		$this->_sufix($data, array('main_area'=>'list'));
	}
	
	function dispatch() {
		$page_num = $this->input->post('page_num');
		$query_string = $this->input->post('query_string');
	
		if ($this->input->post('new_btn')) {
			redirect("{$this->controller}/newProcess/{$page_num}/{$query_string}");
		}
		if ($this->input->post('delete_btn')) {
			$this->deleteProcess();
		}
		if ($this->input->post('move_upper_btn')) {
			$key = array_keys($this->input->post('move_upper_btn'));
			$this->moveUpperProcess($key[0]);
		}
		if ($this->input->post('move_lower_btn')) {
			$key = array_keys($this->input->post('move_lower_btn'));
			$this->moveLowerProcess($key[0]);
		}
		
		show_404();
	}

	function newProcess($page_num=1, $query_string='-') {
		if ($this->_validateSaveData()) {
			$insert_id = $this->model->insert($_POST);
			if ($insert_id > 0) {
				$this->session->set_userdata('alert_messages', array(lang('new_success')));
			}
			redirect("{$this->controller}/index/{$page_num}/{$query_string}");
		}

		$data = array();
		$data['page_num'] = $page_num;
		$data['query_string'] = $query_string;
		
		$this->_sufix($data, array('main_area'=>'form'));
	}

	function editProcess($id=-1, $page_num=1, $query_string='') {
		$qry = $this->model->getBy('id', $id);
		if ($qry->num_rows() == 0) {
			show_404();
		}
		
		if ($this->_validateSaveData()) {
			$this->model->update($_POST);
			$this->session->set_userdata('alert_messages', array(lang('update_success')));
		}
		
		$data = array();
		$data['page_num'] = $page_num;
		$data['query_string'] = $query_string;
		
		$data['item'] = $this->model->getBy('id', $id)->row();
		
		$this->_sufix($data, array('main_area'=>'form'));
	}

	function _validateSaveData() {
		if($this->input->post('id')){
			$this->form_validation->set_rules('id', '', "trim|required|intager|valid_id[{$this->table_name}]");
		}
		$this->form_validation->set_rules("s_year", '', 'trim');
		$this->form_validation->set_rules("e_year", '', 'trim');
		$this->form_validation->set_rules("name", '', 'trim');
		$this->form_validation->set_rules("people", '', 'trim');
		$this->form_validation->set_rules("role", '', 'trim');
		$this->form_validation->set_rules("tech", '', 'trim');
		$this->form_validation->set_rules("env", '', 'trim');
		$this->form_validation->set_rules('descrip', '', 'trim');
		$this->form_validation->set_rules('work', '', 'trim');
		return $this->form_validation->run();
	}
	
	function deleteProcess() {
		if ($this->_validateDeleteData()) {
			$this->model->delete($this->input->post('id_list'));
		}
		redirect("{$this->controller}/index/{$this->input->post('page_num')}/{$this->input->post('query_string')}");
	}

	function _validateDeleteData(){
		$this->form_validation->set_rules('id_list[]', '', "trim|required|valid_id[{$this->table_name}]");
		return $this->form_validation->run();
	}
	
	function _sufix($data, $diff) {
		$data['controller'] = $this->controller;
		$data['management_name'] = $this->management_name;
		
		$layout_data['mainmenu'] = $this->load->view('layout/back_mainmenu', array(), true);
		$layout_data['main_area'] = $this->load->view("{$this->controller}/{$diff['main_area']}", $data, true);
		$this->load->view('layout/back_main_layout', $layout_data);
	}

	protected function moveUpperProcess($id) {
		$this->model->changeArrange($this->model->getBy('id', $id)->row(), '+');
		redirect("{$this->controller}/index/{$this->input->post('page_num')}/{$this->input->post('query_string')}");
	}

	protected function moveLowerProcess($id) {
		$this->model->changeArrange($this->model->getBy('id', $id)->row(), '-');
		redirect("{$this->controller}/index/{$this->input->post('page_num')}/{$this->input->post('query_string')}");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */