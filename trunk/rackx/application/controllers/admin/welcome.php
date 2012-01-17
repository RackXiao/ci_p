<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
//		$this->load->model('user_model');
//		$this->user_model = new user_model();
	}

	public function index() {
		$data = array();
		
		$layout_data['mainmenu'] = $this->load->view('layout/back_mainmenu', array(), true);
		$layout_data['main_area'] = $this->load->view('admin/index', $data, true);
		$this->load->view('layout/back_main_layout', $layout_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */