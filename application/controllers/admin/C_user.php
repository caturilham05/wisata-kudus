<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class C_user extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','muser', TRUE);
		// $this->load->model('M_warga','mwarga', TRUE);
	}

	public function index($id = NULL)
	{
		$data['title'] = 'Data User';
		$data['jenis'] = 'User';
		$data['opd'] = $this->muser->tampilOPD();
		// echo "<pre>"; print_r($data);exit();echo "</pre>";
		$data['query'] = $this->muser->index();
		$this->load->view('admin/index', $data);
	}

	public function proses($id='')
	{
		$kata = $this->input->post('username');
		if ($this->input->post('Simpan')) {
			$this->muser->simpan();
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				<h4>Berhasil </h4>
				<p>Anda Berhasil Input Data '.$kata.'.</p>
			</div>');
		redirect(base_url().'admin/C_user');
		}
		elseif ($this->input->post('Ubah')) {
			$this->muser->ubah($id);
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				<h4>Berhasil </h4>
				<p>Anda Berhasil Edit Data '.$kata.'.</p>
			</div>');
			redirect(base_url().'admin/C_user');	
		}
	}
	
	public function update($id='')
	{

		$data['title'] 	= 'Edit Data User';
		$data['jenis'] 	= 'Edit User';	

		$checkdata = $this->muser->ubah_tampil($id);
        if (count($checkdata) == 0) {
           redirect(site_url('my_error'));
        } else {
			$data['query'] 	= $this->muser->ubah_tampil($id);
			$this->load->view('admin/index', $data);
        }
	}

	public function delete($id)
	{
		$this->db->where('userid', $id);
		$this->db->delete('user');
		redirect(base_url().'admin/C_user');
	}
}
