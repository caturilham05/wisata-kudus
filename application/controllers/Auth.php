<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_warga','mwarga',TRUE);
	}

	public function index() 
	{
		$this->load->view('index');
	}

	public function cek_login()
	{
		$this->load->model('M_user'); // load model_user
		
		$data = array(
			'username' => trim($this->input->post('username', TRUE)),
			'password' => md5($this->input->post('password', TRUE))
		);
		$hasil = $this->M_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['username'] 	= $sess->username;
				$sess_data['level'] 	= $sess->level;
				$sess_data['kantor_id'] = $sess->kantor_id;
				$sess_data['ssk'] = $sess->ssk;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/C_dashboard');
			}
			elseif ($this->session->userdata('level')=='superadmin') {
				redirect('admin/C_dashboard');
			}		
		}
		else {
			$this->session->set_flashdata('error', 'Invalid Username and password');
			redirect(base_url(). 'auth');
		}
	}
}

?>
