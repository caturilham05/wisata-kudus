<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class C_warga extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_warga','mwarga', TRUE);
	}

	public function index($id = NULL)
	{
		$data['title'] = 'Data OPD';
		$data['jenis'] = 'Tampil Warga';	
		$data['query'] = $this->mwarga->tampil();
		$this->load->view('admin/index', $data);
	}

	public function proses($id='')
	{
		$kata = $this->input->post('ssk');
		if ($this->input->post('Simpan')) {
			$this->mwarga->simpan();
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				<h4>Berhasil </h4>
				<p>Anda berhasil Input Data '.$kata.'.</p>
			</div>');
		redirect(base_url().'admin/C_warga');
		}
		elseif ($this->input->post('Ubah')) {
			$this->mwarga->ubah($id);
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				<h4>Berhasil </h4>
				<p>Anda Berhasil Edit Kata '.$kata.'.</p>
			</div>');
			redirect(base_url().'admin/C_warga');	
		}
	}

	public function update($id = '')
	{
		$data['title'] 	= 'Edit Data OPD';
		$data['jenis'] 	= 'Edit Warga';	

		$checkdata = $this->db->get_where('kantor', array('nama_seo' => $id))->row();
        if (count($checkdata) == 0) {
           redirect(site_url('my_error'));
        } else {
			$data['query'] 	= $this->mwarga->ubah_tampil($id);
			$this->load->view('admin/index', $data);	
        }
	}

	public function delete($id)
	{
		$this->db->where('kantor_id', $id);
		$this->db->delete('kantor');
		redirect(base_url().'admin/C_warga');
	}
}
