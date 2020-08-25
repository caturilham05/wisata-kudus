<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class C_corona extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_corona','mcorona', TRUE);
	}

	public function index($id='')
	{	
		$data['title'] = 'Monitoring Data Covid-19 Kabupaten Kudus';
		$data['jenis'] = 'corona';
		$data['kegiatan']     = $this->mcorona->index();
		$data['pasien']       = $this->mcorona->pasien();
		$data['pasienpdp']    = $this->db->get('pasien_pdp')->result_array();
		$data['positif']      = $this->db->get('pasien_positif')->result_array();
		$this->load->view('admin/index', $data);
	}

	public function update($id = '')
	{
		$data['title'] 	= 'Data Covid-19';
		$data['jenis'] 	= 'corona-update';
		$data['query'] 	= $this->mcorona->ubah_tampil($id);
		
		$checkdata = $this->db->get_where('corona', array('wilayah' => $id))->row();
        if (count($checkdata) == 0) {
			redirect(site_url('my_error'));
        } else {
			$this->load->view('admin/index', $data);	
        }
	}

	public function edit($id = '')
	{
		$data['title'] 	= 'Update PDP Dirawat';
		$data['jenis'] 	= 'pasien-update';
		$data['query'] 	= $this->mcorona->ubah_tampilpasien($id);
		
		$checkdata = $this->db->get_where('pasien', array('id_pasien' => $id))->row();
        if (count($checkdata) == 0) {
			redirect(site_url('my_error'));
        } else {
			$this->load->view('admin/index', $data);	
        }
	}

	public function editpdp($id = '')
	{
		$data['title'] 	= 'Data Pasien PDP';
		$data['jenis'] 	= 'pdp-update';
		$data['query'] 	= $this->db->get_where('pasien_pdp', array('id_pdp' => $id))->row();
		$checkdata = $this->db->get_where('pasien_pdp', array('id_pdp' => $id))->row();
        if (count($checkdata) == 0) {
			redirect(site_url('my_error'));
        } else {
			$this->load->view('admin/index', $data);	
        }
	}

	public function editpositif($id = '')
	{
		$data['title'] 	= 'Data Pasien Positif Terkonfirmasi Covid-19';
		$data['jenis'] 	= 'positif-update';
		$data['query'] 	= $this->db->get_where('pasien_positif', array('id_pasienpositif' => $id))->row();
		$checkdata = $this->db->get_where('pasien_positif', array('id_pasienpositif' => $id))->row();
        if (count($checkdata) == 0) {
			redirect(site_url('my_error'));
        } else {
			$this->load->view('admin/index', $data);	
        }
	}

	public function proses($id = '')
	{
		$kata = $this->input->post('kegiatan');
		if ($this->input->post('Simpan')) {
			$this->mcorona->simpan();
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				
			</div>');
		redirect(base_url().'admin/C_corona');
		}
		elseif ($this->input->post('Tambah')) {
			$this->mcorona->insert();
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
			</div>');
			redirect(base_url().'admin/C_corona');	
		}

		elseif ($this->input->post('Ubah')) {
			$this->mcorona->ubah($id);
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
			</div>');
			redirect(base_url().'admin/C_corona');	
		}
		elseif ($this->input->post('Edit')) {
			$this->mcorona->edit($id);
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				<h4>Berhasil </h4>
				<p>Anda berhasil Edit Data '.$kata.'.</p>
			</div>');
			redirect(base_url().'admin/C_corona');	
		}
		elseif ($this->input->post('Positif')) {
			$this->mcorona->editpositif($id);
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
			</div>');
			redirect(base_url().'admin/C_corona');	
		}
		elseif ($this->input->post('PDP')) {
			$this->mcorona->editPDP($id);
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success"></div>');
			redirect(base_url().'admin/C_corona');	
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
		$this->db->where('id_corona', $id);
		$this->db->delete('corona');
		redirect(base_url().'admin/C_corona');
	}

	public function hapus($id)
	{
		$this->db->where('id_pasien', $id);
		$this->db->delete('pasien');
		redirect(base_url().'admin/C_corona');
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('kantor_id');
		session_destroy();
		redirect('auth');
	}
}	
