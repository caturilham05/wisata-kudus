<?php 
class M_chart extends CI_Model
{
    function jadwalHariini()
    {
        $query = $this->db->query("SELECT COUNT(*) as jadwalHariini from agenda
        LEFT JOIN kantor ON agenda.kantor_id = kantor.kantor_id
        WHERE tanggal >= date(NOW()) order by CONCAT(tanggal, jam) asc
        ");
        return $query->row();
    }

    function semuaJadwal()
    {
        $query = $this->db->query("SELECT COUNT(*) as semuaJadwal from agenda
        LEFT JOIN kantor ON agenda.kantor_id = kantor.kantor_id
        order by CONCAT(tanggal, jam) asc
        ");
        return $query->row();
    }

    function dashboard()
    {
        $query = $this->db->query(" SELECT   c.`agenda_id` , kantor.ssk , 
            ifnull(
            (Select count(*) from agenda where agenda.tanggal >= date(NOW()) ),0) as 'Semua' 
            , ifnull(
            (Select count(*) from v_status),0) as Hariini
            from  agenda as c 
            left join kantor on kantor.kantor_id = c.kantor_id
            group by kantor.ssk asc");
        return $query->result_array();

        // $query = $this->db->query(" SELECT   c.`id_lembaga` , d.nama_lembaga , d.id_rw , tb_rw.nama_rw , 
        //     ifnull(
        //     (Select count(*) from v_status_surat where v_status_surat.status = 'Disetujui' and v_status_surat.id_lembaga= c.id_lembaga ),0) as 'Disetujui' 
        //     , ifnull(
        //     (Select count(*) from v_status_surat where v_status_surat.status = 'Pending' and v_status_surat.id_lembaga= c.id_lembaga ),0) as 'Pending' 
        //     from  tb_suratmasuk as c 
        //     inner join tb_lembaga as d on c.id_lembaga = d.id_lembaga 
        //     left join tb_rw on tb_rw.id_rw = d.id_rw
        //     group by  d.id_rw ,  d.nama_lembaga asc");
        // return $query->result_array();
    }

    function rt1()
    {
        $query = $this->db->query("SELECT ifnull(
			sum(id_lembaga=1),0) as s_1,
    	 	sum(id_lembaga=2) as s_2,
    	  	sum(id_lembaga=3) as s_3,
    	   	sum(id_lembaga=4) as s_4,
    	    sum(id_lembaga=5) as s_5,
    	    sum(id_lembaga=6) as s_6,
            sum(id_lembaga=7) as s_7,
			sum(id_lembaga=8) as s_8,
			sum(id_lembaga=9) as s_9 ,
    	    sum(id_lembaga=10) as s_10,
    	    sum(id_lembaga=11) as s_11,
            sum(id_lembaga=12) as s_12,
            sum(id_lembaga=13) as s_13,
            sum(id_lembaga=14) as s_14,
            sum(id_lembaga=15) as s_15,
            sum(id_lembaga=16) as s_16,
            sum(id_lembaga=17) as s_17,
            sum(id_lembaga=18) as s_18,
            sum(id_lembaga=19) as s_19

        from tb_suratmasuk ");
        return $query->result_array();
    }
    
    function get_row11()
    {
 
        $query = $this->db->query("SELECT sum(des) as suara from tb_trans
            where des = des ");
        return $query->result();
    }
}