<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_corona extends CI_Model
{
	var $gallerypath;
  	var $gallery_path_url;

	function __construct() 
	{
		parent::__construct();
		$this->gallerypath = realpath(APPPATH . '../assets/icon');
		$this->gallery_path_url = base_url().'assets/icon/';
	}
	// Menampilkan lembaga di master lembaga
	function index()
	{
		$this->db->select('*');
		$this->db->from('corona');
		// $this->db->join('rumahsakit as rs','rs.id_rs = corona.id_rs','left');
		$this->db->order_by('wilayah','asc');
		$query = $this->db->get();
        return $query->result_array();
	}

	function pasien()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('rumahsakit as rs','rs.id_rs = pasien.id_rs','left');
		$this->db->join('corona as c','c.id_corona = pasien.id_corona','left');
		// $this->db->order_by('date,time','desc');
		$query = $this->db->get();
        return $query->result_array();
	}
	

	public function simpan()
	{
		
		$odp 	= stripHTMLtags(trim($this->input->post('odp','true')));
		$pdp 	= stripHTMLtags(trim($this->input->post('pdp','true')));
		$jam 	= $this->input->post('jam');
		$date 	= date('Y-m-d');
		$wiayah = stripHTMLtags(trim($this->input->post('wilayah','true')));
		// $rs	= stripHTMLtags(trim($this->input->post('rs','true')));

		$namahari = date('l', strtotime($date));
		if ($namahari == 'Sunday'){
			$hari = '7';
		}elseif ($namahari == 'Monday'){
			$hari = '1';
		}elseif ($namahari == 'Tuesday'){
			$hari = '2';
		}elseif ($namahari == 'Wednesday'){
			$hari = '3';
		}elseif ($namahari == 'Thursday'){
			$hari = '4';
		}elseif ($namahari == 'Friday'){
			$hari = '5';
		}elseif ($namahari == 'Saturday'){
			$hari = '6';
		}
			
		$data = array(
			'odp' => $odp,
			'pdp' => $pdp,
			'date' => $date,
			'time' => $jam,
			'hari' => $hari,
			'wilayah' => $wiayah
			// 'id_rs'	 => $rs,
		);
		// $this->db->set('kantor_id',$this->session->userdata('kantor_id'));
		$this->db->insert('corona', $data);
	}

	public function insert(){
		$rs 	= stripHTMLtags(trim($this->input->post('rs','true')));
		$wiayah = stripHTMLtags(trim($this->input->post('wilayah','true')));
		$jum 	= stripHTMLtags(trim($this->input->post('jumlah','true')));
		$jenis 	= stripHTMLtags(trim($this->input->post('jenis','true')));

		$data = array(
			'id_corona' => $wiayah,
			'id_rs' => $rs,
			'jum' => $jum,
			'jenis' => $jenis
		);
		$this->db->insert('pasien', $data);
	}

	public function ubah_tampil($id)
	{
		$this->db->select('*');
		$this->db->from('corona');
		// $this->db->join('rumahsakit as rs','rs.id_rs = corona.id_rs','left');
		$this->db->where('wilayah', $id);
		$query = $this->db->get()->row();
		return $query;
	}

	public function ubah_tampilpasien($id)
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('rumahsakit as rs','rs.id_rs = pasien.id_rs','left');
		$this->db->join('corona as c','c.id_corona = pasien.id_corona','left');
		$this->db->where('id_pasien', $id);
		$query = $this->db->get()->row();
		return $query;
	}


	public function ubah($id = NULL)	
	{
		$odp 	= stripHTMLtags(trim($this->input->post('odp','true')));
		$pdp 	= stripHTMLtags(trim($this->input->post('pdp','true')));
		$jam 	= $this->input->post('jam');
		$date 	= date('Y-m-d');
		$id 	= $this->input->post('id');

		$namahari = date('l', strtotime($date));
		if ($namahari == 'Sunday'){
			$hari = '7';
		}elseif ($namahari == 'Monday'){
			$hari = '1';
		}elseif ($namahari == 'Tuesday'){
			$hari = '2';
		}elseif ($namahari == 'Wednesday'){
			$hari = '3';
		}elseif ($namahari == 'Thursday'){
			$hari = '4';
		}elseif ($namahari == 'Friday'){
			$hari = '5';
		}elseif ($namahari == 'Saturday'){
			$hari = '6';
		}
			
		$data = array(
			'odp' => $odp,
			'pdp' => $pdp,
			'date' => $date,
			'time' => $jam,
			'hari' => $hari
		);
		
		// $this->db->set('kantor_id',$this->session->userdata('kantor_id'));
		$this->db->where('id_corona', $id);
		$this->db->update('corona', $data);
	}

	public function edit($id = NULL)	
	{
		$idrs 	= stripHTMLtags(trim($this->input->post('rs','true')));
		$wilayah 	= stripHTMLtags(trim($this->input->post('wilayah','true')));
		$jum 	= stripHTMLtags(trim($this->input->post('jum','true')));
		$id 	= $this->input->post('id');
			
		$data = array(
			'id_rs' => $idrs,
			'id_corona' => $wilayah,
			'jum' => $jum
		);
		// $this->db->set('kantor_id',$this->session->userdata('kantor_id'));
		$this->db->where('id_pasien', $id);
		$this->db->update('pasien', $data);
	}

	public function editPDP($id = NULL)	
	{
		$dirawat 	= stripHTMLtags(trim($this->input->post('dirawat','true')));
		$sembuh 	= stripHTMLtags(trim($this->input->post('sembuh','true')));
		$meninggal 	= stripHTMLtags(trim($this->input->post('meninggal','true')));
		$id 	= $this->input->post('id');
			
		$data = array(
			'dirawat' => $dirawat,
			'sembuh' => $sembuh,
			'meninggal' => $meninggal,
		);
		// $this->db->set('kantor_id',$this->session->userdata('kantor_id'));
		$this->db->where('id_pdp', $id);
		$this->db->update('pasien_pdp', $data);
	}

	public function editpositif($id = NULL)	
	{
		$positif 	= stripHTMLtags(trim($this->input->post('positif','true')));
		$dirawat 	= stripHTMLtags(trim($this->input->post('dirawat','true')));
		$sembuh 	= stripHTMLtags(trim($this->input->post('sembuh','true')));
		$meninggal 	= stripHTMLtags(trim($this->input->post('meninggal','true')));
		$id 	= $this->input->post('id');
			
		$data = array(
			'positif' => $positif,
			'dirawat' => $dirawat,
			'sembuh' => $sembuh,
			'meninggal' => $meninggal,
		);
		// $this->db->set('kantor_id',$this->session->userdata('kantor_id'));
		$this->db->where('id_pasienpositif', $id);
		$this->db->update('pasien_positif', $data);
	}

	

	/// =================== Mulai menampilkan di halaman user =======================///
	public function odpdalam() {
		$this->db->select('*, SUM(odp) as opd');
		$this->db->from('corona');
		$this->db->where('wilayah','Dalam-Wilayah');
		$query = $this->db->get();
        return $query->row();
	}

	public function odpluar() {
		$this->db->select('*, SUM(odp) as jum');
		$this->db->from('corona');
		$this->db->where('wilayah','Luar-Wilayah');
		$query = $this->db->get();
        return $query->row();
	}

	public function pdpdalam() {
		$this->db->select('*, SUM(pdp) as dalam');
		$this->db->from('corona');
		$this->db->where('wilayah','Dalam-Wilayah');
		$query = $this->db->get();
        return $query->row();
	}

	public function pdpluar() {
		$this->db->select('*, SUM(pdp) as luar');
		$this->db->from('corona');
		$this->db->where('wilayah','Luar-Wilayah');
		$query = $this->db->get();
        return $query->row();
	}

	function pasienpdp(){
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('rumahsakit as rs','rs.id_rs = pasien.id_rs','left');
		$this->db->join('corona as c','c.id_corona = pasien.id_corona','left');
		$this->db->where('jenis=','PDP Dirawat');
		$query = $this->db->get();
        return $query->result_array();
	}

	function pasienpositif(){
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('rumahsakit as rs','rs.id_rs = pasien.id_rs','left');
		$this->db->join('corona as c','c.id_corona = pasien.id_corona','left');
		$this->db->where('jenis=','Positif');
		$query = $this->db->get();
        return $query->result_array();
	}

}

