<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class C_penyemprotan extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_peyemprotan','mkegiatan', TRUE);
	}

	public function index()
	{
		$data['title'] = 'Jadwal Penyemprotan';
		$data['jenis'] = 'Kegiatan';
		$data['kegiatan']   = $this->mkegiatan->index();
		$this->load->view('admin/index', $data);
	}

	public function proses($id = '')
	{
		$kata = $this->input->post('kegiatan');
		if ($this->input->post('Simpan')) {
			$this->mkegiatan->simpan();
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				<h4>Berhasil </h4>
				<p>Anda berhasil Input Data '.$kata.'.</p>
			</div>');
		redirect(base_url().'admin/C_penyemprotan');
		}
		elseif ($this->input->post('Ubah')) {
			$this->mkegiatan->ubah($id);
			$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
				<h4>Berhasil </h4>
				<p>Anda berhasil Edit Data '.$kata.'.</p>
			</div>');
			redirect(base_url().'admin/C_penyemprotan');	
		}
	}

	public function update($id = '')
	{
		$data['title'] 	= 'Edit-Agenda-Kegiatan';
		$data['jenis'] 	= 'Edit-Kegiatan';

		$checkdata = $this->db->get_where('agenda', array('lokasi_seo' => $id))->row();
        if (count($checkdata) == 0) {
           redirect(site_url('my_error'));
        } else {
			$data['query'] 	= $this->mkegiatan->ubah_tampil($id);
			$this->load->view('admin/index', $data);	
        }
	}

	public function upload($id = '')
	{
		$data['title'] = 'Upload-Gamabar-Kegiatan';
		$data['jenis'] = 'Upload-Gambar';

		$checkdata = $this->db->get_where('agenda', array('lokasi_seo' => $id))->row();
        if (count($checkdata) == 0) {
           redirect(site_url('my_error'));
        } else {
			$data['query'] 	= $this->mkegiatan->ubah_tampil($id);
			$this->load->view('admin/index', $data);	
        }
	}

	
	function data_agenda()
    {
        $data=$this->mkegiatan->index();
        echo json_encode($data);
    }

	public function delete($id)
	{
		$row = $this->db->where('agenda_id',$id)->get('agenda')->row();
		unlink('./assets/4lbum/'.$row->foto_agenda);
		$this->db->where('agenda_id', $id);
		$this->db->delete('agenda');
		redirect(base_url().'admin/C_penyemprotan');
	}
}	
