<?php

class C_dashboard extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$data['jenis'] = 'dashboard';
		$this->load->view('admin/index', $data);
	}
		
}
?>
