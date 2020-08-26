<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_wisata extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function negara(){
		$this->db->order_by('country_name','ASC');
		$provinces= $this->db->get('apps_countries');
		return $provinces->result_array();
	}

	function kab(){
		$this->db->order_by('name','ASC');
		$provinces= $this->db->get('regencies');
		return $provinces->result_array();
	}
	
	function provinsi(){
		$this->db->order_by('name','ASC');
		$provinces= $this->db->get('provinces');
		return $provinces->result_array();
	
	}
	
	function kabupaten1($provId){
		$kabupaten="<option value='0'>--pilih--</pilih>";
		$this->db->order_by('name','ASC');
		$kab= $this->db->get_where('regencies',array('province_id'=>$provId));
		
		foreach ($kab->result_array() as $data ){
			$kabupaten.= "<option value='$data[id]'>$data[name]</option>";
		}
	return $kabupaten;
	}
	
	function kecamatan1($kabId){
		$kecamatan="<option value='0'>--pilih--</pilih>";
		$this->db->order_by('name','ASC');
		$kec= $this->db->get_where('districts',array('regency_id'=>$kabId));

		foreach ($kec->result_array() as $data ){
			$kecamatan.= "<option value='$data[id]'>$data[name]</option>";
		}
	return $kecamatan;
	}

	function kelurahan1($kecId){
		$kelurahan="<option value='0'>--pilih--</pilih>";
		$this->db->order_by('name','ASC');
		$kel= $this->db->get_where('villages',array('district_id'=>$kecId));
		
		foreach ($kel->result_array() as $data ){
			$kelurahan.= "<option value='$data[id]'>$data[name]</option>";
		}
		
		return $kelurahan;
	}


	function kabupaten(){
		$this->db->order_by('name','ASC');
		$this->db->where('id=','3319');
		$provinces= $this->db->get('regencies');
		return $provinces->result_array();
	}
	
	function kecamatan(){
		$this->db->order_by('name','ASC');
		$this->db->where('regency_id=','3319');
		$kec = $this->db->get('districts');
		return $kec->result_array();
	}

	function kelurahan($kecId){
		// $kelurahan="<option value='0'>Pilih Kelurahan/Desa</pilih>";
		$this->db->order_by('name','ASC');
		$kel= $this->db->get_where('villages',array('district_id'=>$kecId));
		
		foreach ($kel->result_array() as $data ){
			$kelurahan.= "<option value='$data[id]'>$data[name]</option>";
		}
		
		return $kelurahan;
	}


	function jml_pemudik(){
		$sql = $this->db->query("SELECT districts.name as kecamatan, count(data_mudik.kecamatan_tujuan) as jml , data_mudik.kecamatan_tujuan FROM districts left join data_mudik ON districts.id = data_mudik.kecamatan_tujuan WHERE districts.regency_id='3319' GROUP BY districts.name");
		 if($sql->num_rows() != 0)
		    {
		        return $sql->result_array();
		    }
		    else
		    {
		        return false;
		    }
	}

	function data_mudik(){
		$this->db->select('k.name as kecamatan,count(d.kecamatan_tujuan) as jml, d.kecamatan_tujuan');
		$this->db->from('data_mudik d');
		$this->db->join('districts k', 'k.id = d.kecamatan_tujuan','left');
		$this->db->where('k.regency_id','3319');

		$this->db->order_by('k.name', 'asc');
		 $query = $this->db->get(); 
		    if($query->num_rows() != 0)
		    {
		        return $query->result_array();
		    }
		    else
		    {
		        return false;
		    }
	}


	function mudik_desa($id){
		
		$this->db->select('k.name as kecamatan, v.name as desa, count(d.desa_tujuan) as jml,d.data_kesehatan, d.kondisi_lain, d.desa_tujuan');
		$this->db->from('data_mudik d');
		$this->db->join('villages v', 'v.id = d.desa_tujuan');
		$this->db->join('districts k', 'k.id = d.kecamatan_tujuan');
		$this->db->where('d.kecamatan_tujuan',$id);
		$this->db->group_by('v.name');
		$this->db->order_by('v.name', 'asc');
		 $query = $this->db->get(); 
		    if($query->num_rows() != 0)
		    {
		        return $query->result_array();
		    }
		    else
		    {
		       echo "Data Tidak Ditemukan";
		    }

	}

	function detail_mudik($id){
		$this->db->select('v.name as desa, d.data_kesehatan, d.kondisi_lain, d.desa_tujuan, r.name as kota, d.nik, d.nama');
		$this->db->from('data_mudik d');
		$this->db->join('villages v', 'v.id = d.desa_tujuan','left');
		$this->db->join('regencies r', 'r.id = d.kota_asal_mudik','left');
		$this->db->where('d.desa_tujuan',$id);
		$this->db->order_by('d.nama', 'asc');
		 $query = $this->db->get(); 
		    if($query->num_rows() != 0)
		    {
		        return $query->result_array();
		    }
		    else
		    {
		        return false;
		    }
	}
	
	function perkecamatan(){
		$this->db->select('*, v.name as desa, districts.name as kecamatan, r.name as kota_asal');
		$this->db->from('data_mudik');
		$this->db->join('regencies as r ','r.id = data_mudik.kota_asal_mudik','left');
		$this->db->join('districts','districts.id = data_mudik.kecamatan_tujuan','left');
		$this->db->join('villages as v','v.id = data_mudik.desa_tujuan','left');
		$this->db->order_by('data_mudik.id','desc');
		$query = $this->db->get();
		return $query->result_array();
	}

	function karantina(){
		$karantina = $this->db->query("SELECT count(nama_tempat) as karantina, created_at FROM data_karantina WHERE nama_tempat='balaidiklat' ");
		return $karantina->result_array();
	}

	function updated(){
		$updated = $this->db->query("SELECT created_at FROM data_karantina WHERE created_at=(select max(created_at) from data_karantina)");
		return $updated->result_array();
		
	}

	function karantina_balai(){
		$graha = $this->db->query("SELECT count(nama_tempat) as graha, created_at FROM data_karantina WHERE nama_tempat='grahamuria' ");
		return $graha->result_array();
	}

	function karantina_rusun(){
		$rusun = $this->db->query("SELECT count(nama_tempat) as rusun, created_at FROM data_karantina WHERE nama_tempat='rusunawa' ");
		return $rusun->result_array();
	}
	
	function jum_sebelum(){
		$tgl = date('Y-m-d');
		$this->db->select('*, COUNT(nama_tempat) as jum');
		$this->db->from('data_karantina');
		$this->db->where('nama_tempat=','Balaidiklat');
		$this->db->where('created_at <=',$tgl);
		// $this->db->order_by('nam','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	function jum_sebelum2(){
		$tgl = date('Y-m-d');
		$this->db->select('*, COUNT(nama_tempat) as jum');
		$this->db->from('data_karantina');
		$this->db->where('nama_tempat=','Grahamuria');
		$this->db->where('created_at <=',$tgl);
		// $this->db->order_by('nam','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	function jum_sebelum3(){
		$tgl = date('Y-m-d');
		$this->db->select('*, COUNT(nama_tempat) as jum');
		$this->db->from('data_karantina');
		$this->db->where('nama_tempat=','Rusunawa');
		$this->db->where('created_at <=',$tgl);
		// $this->db->order_by('nam','ASC');
		$query = $this->db->get();
		return $query->row();
	}


	function updated_tgl(){
		$update = $this->db->query("SELECT tgl FROM karantina_tb WHERE tgl=(select max(tgl) from karantina_tb)");
		return $update->result_array();
		
	}

	function jml_graha(){
		$graha = $this->db->query("SELECT jml_before, jml_now, jml_tambah FROM karantina_tb WHERE nama_tempat='grahacolo' ");
		return $graha->result_array();
	}
	function jml_rusun(){
		$rusun = $this->db->query("SELECT jml_before, jml_now, jml_tambah FROM karantina_tb WHERE nama_tempat='rusunawa' ");
		return $rusun->result_array();
	}

	function jml_balai(){
		$balai = $this->db->query("SELECT jml_before, jml_now, jml_tambah FROM karantina_tb WHERE nama_tempat='balaidiklat' ");
		return $balai->result_array();
	}

	function wisatawan(){
		$this->db->select('*');
		$this->db->from('data_wisata');
		$this->db->order_by('id_wisata', 'desc');
		$query = $this->db->get();
		return $query->result_array();
		// echo "<pre>";
		//  print_r($query);exit();
		// echo "</pre>";
	}

	public function kirim($post){
		{
			$params['nama_rombongan'] = $post['nama_rombongan'];
			$params['no_hp'] = $post['no_hp'];
			$params['negara'] = sha1($post['negara']);
			$params['asal'] = $post['asal'];
			$params['dewasa'] = $post['dewasa'];
			$params['anak'] = $post['anak'];
			$params['destinasi_wisata'] = $post['destinasi_wisata'];
			$params['destinasi_wisata_lainnya'] = $post['destinasi_wisata_lainnya'];
			$this->db->insert('data_wisata', $params);
	
		}
	}
	
}


