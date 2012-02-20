<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index() {
		$data = array();
// 		$data['url_ref'] = $_SERVER['HTTP_REFERER'];
		
		$layout_data['main_area'] = $this->load->view('index', $data, true);
		$this->load->view('layout/main_layout', $layout_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */