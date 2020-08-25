<?php 
class Upload extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_upload');
		$this->load->library('upload');
	} 
     function upload_image()
     {
	    $config['upload_path'] = './assets/4lbum/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan

		$this->upload->initialize($config);
		$hsl = $_FILES['filefoto']['name'];
		if(!empty($hsl))
		{
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/4lbum/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '50%';
	            $config['width']= 600;
	            $config['height']= 400;
	            $config['new_image']= './assets/4lbum/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
				$id=$this->input->post('agendaId');
                    $this->m_upload->simpan_upload($id,$gambar);
                    // echo $this->m_upload->fetch_image();  
                    $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                         <h4>Berhasil </h4>
                         <p>Gambar berhasil DiUpload.</p>
                    </div>');
                    redirect(base_url().'admin/C_penyemprotan');
                    // echo "Image berhasil diupload";
                    
			}
	                 
	    }else{
               // echo "Image yang diupload kosong";
               echo "<script>
                    alert('Oppss! File Masih Kosong, Pilih File Untuk Diupload');
                    window.location=history.go(-1)
                    </script>
                    ";
		}
				
	}
 
}
