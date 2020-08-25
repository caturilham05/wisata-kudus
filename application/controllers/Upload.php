<?php 
class Upload extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_upload');
		$this->load->library('upload');
	} 

	function index(){
          $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";  
          $data["image_data"] = $this->m_upload->fetch_image();
		$this->load->view('layout/v_upload', $data);
	}

	function upload_image(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	//     $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

		$this->upload->initialize($config);
		$hsl = $_FILES['filefoto']['name'];
		if(!empty($hsl))
		{
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '50%';
	            $config['width']= 600;
	            $config['height']= 400;
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
				// $judul=$this->input->post('xjudul');
                    $this->m_upload->simpan_upload($gambar);
                    echo $this->m_upload->fetch_image();  
				// echo "Image berhasil diupload";
			}else{
                    echo $this->upload->display_errors();  
               }
	                 
	    }else{
			echo "Image yang diupload kosong";
		}
	}

	function image_upload()  
      {  
           $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";  
           $data["image_data"] = $this->m_upload->fetch_image();  
           $this->load->view('layout/v_upload', $data);  
      }  
      function ajax_upload()  
      {  
           if(isset($_FILES["image_file"]["name"]))  
           {  
                $config['upload_path'] = './ttg/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('image_file'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();  
                     $config['image_library'] = 'gd2';  
                     $config['source_image'] = './ttg/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '60%';  
                     $config['width'] = 200;  
                     $config['height'] = 200;  
                     $config['new_image'] = './ttg/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();  
                     $this->load->model('M_upload');  
                     $image_data = array(  
                          'file'          =>     $data["file_name"]  
                          );  
                     $this->M_upload->insert_image($image_data);  
                     echo $this->M_upload->fetch_image();  
                     //echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
                }  
           }  
      }  

}