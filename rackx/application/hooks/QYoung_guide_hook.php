<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 檢查有無登入。
 */
function login_guide() {
// 	frontend_login();
	backend_login();
}

function frontend_login(){
	$CI = &get_instance();
	$URIs = array(
		'login',
		'logout',
		'admin'
	);

	$count = 0;
	if ($CI->session->userdata('isLogin') != 1) {
		foreach($URIs as $URI) {
			if(stripos(uri_string(), $URI) !== FALSE) {
				$count++;
			}
		}
		
		if($count == 0) {
			$target_uri = ("/" === uri_string()) || ("" === uri_string()) ? assoc_to_segment('welcome') : assoc_to_segment(uri_string());
			$CI->session->set_userdata('alert_messages', array(lang('MSG_Member_PleaseLogin')));
			redirect('login/index/'.$target_uri);
		}
	}
}

function backend_login(){
	$CI = &get_instance();
	$URIs = array(
		'admin/login',
		'admin/logout',
	);
	
	if(stripos(uri_string(), 'admin') === FALSE) {
		return;
	}

	$count = 0;
	if ($CI->session->userdata('isAdminLogin') != 1) {
		foreach($URIs as $URI) {
			if(stripos(uri_string(), $URI) !== FALSE) {
				$count++;
			}
		}
		
		if($count == 0) {
			$target_uri = ("/" === uri_string()) || ("" === uri_string()) ? assoc_to_segment('admin/welcome') : assoc_to_segment(uri_string());
			$CI->session->set_userdata('alert_messages', array(lang('MSG_Member_PleaseLogin')));
			redirect('admin/login/index/'.$target_uri);
		}
	}
}
