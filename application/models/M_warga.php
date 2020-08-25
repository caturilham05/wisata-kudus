<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_warga extends CI_Model
{
	var $gallerypath;
  	var $gallery_path_url;

	function __construct() 
	{
		parent::__construct();
		$this->gallerypath = realpath(APPPATH . '../assets/icon');
		$this->gallery_path_url = base_url().'assets/icon/';
	}
	
	function tampil()
	{
		$this->db->select('*');
		$this->db->from('kantor');
		$this->db->order_by('ssk','asc');
		$query = $this->db->get();
		return $query->result_array();	
	}

	public function ubah_tampil($id='')
	{
		$this->db->select('*');
		$this->db->from('kantor');
		$this->db->where('nama_seo', $id);
		$query = $this->db->get()->row();
		return $query;
	}
	
	public function simpan()
	{
		$konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png',
			             'upload_path' => $this->gallerypath,
                         'overwrite' => FALSE,
                         'remove_spaces' => TRUE,
                         'max_size' => '60000');
		$this->load->library('upload', $konfigurasi);

		$this->upload->do_upload('userfile');
		$datafile = $this->upload->data();

		$nama_file = $_FILES['userfile']['name'];
		$data = array(
			'nama' 		=> stripHTMLtags($this->input->post('opd','true')),
			'ssk' 		=> stripHTMLtags($this->input->post('ssk','true')),
			'nama_seo' 	=> seo_title(trim($this->input->post('opd','true'))),
			'icon' 		=> $nama_file,
			'created_at' => $this->input->post('tgl'),
		);
		$this->db->insert('kantor', $data);
		// $this->db->set('uid', $this->session->userdata('uid'));
	}

	public function ubah($id = NULL)	
	{
		$konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png',
			             'upload_path' => $this->gallerypath,
                         'overwrite' => FALSE,
                         'remove_spaces' => TRUE,
                         'max_size' => '60000');
		$this->load->library('upload', $konfigurasi);

		$this->upload->do_upload('userfile');
		$datafile = $this->upload->data();

		$nama_file = $_FILES['userfile']['name'];

		$tgl = date('Y-m-d');
		$data = array(
			'nama' 		=> stripHTMLtags($this->input->post('opd','true')),
			'ssk' 		=> stripHTMLtags($this->input->post('ssk','true')),
			'nama_seo' 	=> seo_title(trim($this->input->post('opd','true'))),
			'icon' 		=> $nama_file,
			'created_at' => $tgl,
		);
		$this->db->where('kantor_id', $id);
		$this->db->update('kantor', $data);
	}

}
