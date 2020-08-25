<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class C_pasien extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_karantina','mpasien', TRUE);
	}

	public function index($id='')
	{	
		$data['title'] = 'Monitoring Pasien Dikarantina Kabupaten Kudus';
		$data['jenis'] = 'pasien-karantina';
		$data['query'] = $this->mpasien->index();
		$data['data']  = $this->db->get('data_mudik','asc');
		// print_r($data);exit();
		$this->load->view('admin/index', $data);
	}

	public function update($id = '')
	{
		$data['title'] 	= 'Data Covid-19';
		$data['jenis'] 	= 'karantina-update';
		
		$checkdata = $this->mpasien->ubah_tampil($id)->row();
        if (count($checkdata) == 0) {
			redirect(site_url('my_error'));
        } else {
			$data['query'] 	= $this->mpasien->ubah_tampil($id)->row();
			$this->load->view('admin/index', $data);	
        }
	}

	public function proses($id = '')
	{
		if ($this->input->post('Simpan')) {
			$this->mpasien->simpan();
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				
			</div>');
		redirect(base_url().'admin/C_pasien');
		}
		elseif ($this->input->post('Ubah')) {
			$this->mpasien->ubah();
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
			</div>');
			redirect(base_url().'admin/C_pasien');	
		}
	}


	public function upload($id = '')
	{
		$data['title'] = 'Upload-Gamabar-Kegiatan';
		$data['jenis'] = 'Upload-Gambar';

		$checkdata = $this->db->get_where('agenda', array('acara_seo' => $id))->row();
        if (count($checkdata) == 0) {
           redirect(site_url('my_error'));
        } else {
			$data['query'] 	= $this->mkegiatan->ubah_tampil($id);
			$this->load->view('admin/index', $data);	
        }
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('data_pemudik');
		redirect(base_url().'admin/C_pasien');
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('kantor_id');
		session_destroy();
		redirect('auth');
	}
}	
