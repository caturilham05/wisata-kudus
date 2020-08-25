<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_karantina extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	// Menampilkan lembaga di master lembaga
	function index()
	{
		$this->db->select('*, data_karantina.id as karantina');
		$this->db->from('data_karantina');
		$this->db->join('data_mudik as m','m.id = data_karantina.id_mudik','left');
		$this->db->order_by('nama_tempat','asc');
		$query = $this->db->get();
        return $query->result_array();
	}	

	public function simpan()
	{
		
		$tempat = stripHTMLtags(trim($this->input->post('tempat','true')));
		$ket 	= stripHTMLtags(trim($this->input->post('ket','true')));
		$date 	= stripHTMLtags(trim(date('Y-m-d H:i:s')));
		$mudik 	= stripHTMLtags(trim($this->input->post('pemudik','true')));

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
			'nama_tempat' => $tempat,
			'keterangan' => $ket,
			'created_at' => $date,
			'hari' => $hari,
			'id_mudik' => $mudik
		);
		$this->db->insert('data_karantina', $data);
	}


	public function ubah_tampil($id = '')
	{
		$this->db->select('*');
		$this->db->from('data_karantina');
		$this->db->join('data_mudik as m','m.id = data_karantina.id_mudik','left');
		$this->db->where('data_karantina.id', $id);
		$this->db->order_by('nama_tempat','asc');
		$query = $this->db->get();
		return $query;
	}


	public function ubah($id = NULL)	
	{
		$tempat = stripHTMLtags(trim($this->input->post('tempat','true')));
		// $ket 	= stripHTMLtags(trim($this->input->post('ket','true')));
		$date 	= stripHTMLtags(trim(date('Y-m-d H:i:s')));
		$mudik 	= stripHTMLtags(trim($this->input->post('pemudik','true')));
		$id	    = $this->input->post('id','true');

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
			'nama_tempat' => $tempat,
			// 'keterangan' => $ket,
			'created_at' => $date,
			'hari' => $hari,
			'id_mudik' => $mudik
		);
		
		$this->db->where('id', $id);
		$this->db->update('data_karantina', $data);
	}

	function jml_karantina(){
		$jml = $this->db->query("SELECT * FROM karantina_tb");
		return $jml ->result_array();
	}

	function editKarantina($id){
		$karantina = $this->db->query("SELECT * FROM karantina_tb WHERE id_karantina='".$id."'");
		return $karantina->result_array();
	}

	public function ubahKarantina($array)	
	{
		 $update = $this->db->query("UPDATE karantina_tb SET nama_tempat = '$array[nama_tempat]' ,jml_before = '$array[jml_before]', jml_laki = '$array[jml_laki]', jml_pr = '$array[jml_pr]', jml_now = '$array[jml_now]',jml_tambah = '$array[jml_tambah]', tgl = '$array[tgl]' WHERE id_karantina='$array[id_karantina]' ");
	}

	


}

