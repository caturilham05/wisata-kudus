<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class C_karantina extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_karantina','mpasien', TRUE);
	}

	public function index($id=""){
		$data['title'] = 'Jumlah Pasien Dikarantina Kabupaten Kudus';
		$data['jenis'] = 'jml-pasien-karantina';
		$data['karantina'] = $this->mpasien->jml_karantina();
		$karantina = $data['karantina'] ;
		
		$this->load->view('admin/index', $data);
	}

	public function update($id){
		$data['title'] 	= 'Ubah Jumlah Pasien Dikarantina';
		$data['jenis'] 	= 'jml-karantina-update';
		$data['up'] = $this->mpasien->editKarantina($id);
		$up = $data['up'] ;
		//var_dump($up);die();
		$this->load->view('admin/index', $data);

	}

	public function proses(){
		$id_karantina = $this->input->post('id_karantina');
		$nama_tempat = $this->input->post('nama_tempat');
		$jml_before = $this->input->post('jml_before');
		$jml_laki = $this->input->post('jml_laki');
		$jml_pr = $this->input->post('jml_pr');
		$jml_now = $this->input->post('jml_now');
		$tgl 	= stripHTMLtags(trim(date('Y-m-d H:i:s')));
       
        $update = array(
            "id_karantina" => $id_karantina,
            "nama_tempat" => $nama_tempat,
            "jml_before" => $jml_before,
            "jml_laki" => $jml_laki,
            "jml_pr" => $jml_pr,
            "jml_now" => $jml_now,
            "tgl" =>$tgl
        );
        $this->mpasien->ubahKarantina($update);
        //var_dump($update);die();
		$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
			</div>');
		redirect(base_url().'admin/C_karantina');
	}

}