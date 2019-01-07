<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function upload()
	{
		 	$config = array(
                'upload_path' 	=> realpath('upload/'),
                'allowed_types' => 'jpg|png|jpeg',
                'encrypt_name' 	=> TRUE,
                'remove_spaces' => TRUE,
            );
		 	//load library upload
            $this->load->library("upload", $config);

            $this->upload->initialize($config);

            if ($this->upload->do_upload("userfile")) {
				
				$data_upload = $this->upload->data();
            	
            	$img['image_library'] = 'gd2';
            	$img['source_image']  = realpath('upload/'.$data_upload['file_name']);
            	//$img['create_thumb']  = TRUE;
            	$img['width']		  = '200';
            	$img['height']		  = '200';

            	$img['x_axis']		  = '200';
            	$img['y_axis']		  = '200';

            	$img['maintain_ratio']= FALSE;
            	$img['new_image']     = realpath('upload/thumb/');

            	//load library lib image
            	$this->load->library("image_lib", $img);

				$this->image_lib->initialize($img);
            	$this->image_lib->resize();

            	$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert">Gambar Berhasil Diupload</div>');
            	redirect("home");

            }else{

            	echo $this->upload->display_errors();

            }
	}

}
