<?php 
/**
 * 
 */
class fasilitas extends CI_Controller
{
	
	  public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('username')) {
            redirect('admin/login');
        }else{
            if ($this->session->userdata('level')!='1') {
                redirect('guru');
            }
        }
    }

    public function gallery()
    {
      $page = "gallery";
      $read = $this->data->read('tb_gallery')->result_array();

      $data = array('page' => $page, 'gallery'=>$read);
      $this->load->view('gallery', $data);
    }

    public function index()
    {
      $page = 'fasilitas';
    	
      $read = $this->data->read('tb_fasilitas')->result_array();

    	$data = array('page' => $page, 'read'=>$read);
    	$this->load->view('dataFasilitas', $data);
    }
    public function upGal()
    {
      $caption = $this->input->post('caption');
      $filesCount = count($_FILES['files']['name']);
      $timestamp = time();
      for ($i=0; $i < $filesCount; $i++) { 
        $_FILES['file']['name']     = $_FILES['files']['name'][$i];
          $_FILES['file']['type']     = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error']     = $_FILES['files']['error'][$i];
          $_FILES['file']['size']     = $_FILES['files']['size'][$i];
          
          // File upload configuration
          $uploadPath = './uploads/gallery/';
          $config['upload_path'] = $uploadPath;
          $config['file_name'] = 'gallery'.$i.$timestamp;
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          
          // Load and initialize upload library
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          
          // Upload file to server
          if($this->upload->do_upload('file')){
              // Uploaded file data
              //$data = array('gal_imh' => , );
            $fileData = $this->upload->data();
            $imgName = $fileData['file_name'];
            $data = array('gal_img' => $imgName, 'gal_caption'=> $caption, 'gal_timestamp'=>$timestamp);

            $this->data->insert('tb_gallery', $data);

          }
          else{
            $error = array('error' => $this->upload->display_errors());
            echo print_r($error);
          }
      }
       $this->session->set_flashdata('delSuccess', '<script>$.notify("Upload Foto Sukses", "success")</script>');
              redirect(base_url('admin/gallery'));
    }
    public function inputFasilitas()
    {
        $namaF = $this->input->post('namaF');
        $namaFEN = $this->input->post('namaFEN');

        $id = $this->input->post('id');
        $timestamp = time();

          $config['upload_path']          = './uploads/fasilitas';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['file_name']            = 'fasil'.$timestamp;
          $config['max_size']             = 5000;
          $config['max_width']            = 5000;
          $config['max_height']           = 5000;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('gambar'))
          {
              $data = array('fasilitas_id'=>$id, 'fasilitas_nama_en' =>$namaFEN, 'fasilitas_nama'=>$namaF);
          }else{
            $upd = $this->upload->data();
            $img = $upd['raw_name'].$upd['file_ext'];
            $data = array('fasilitas_id'=>$id, 'fasilitas_nama_en' =>$namaFEN, 'fasilitas_nama'=>$namaF, 'fasilitas_img'=>$img);
          }
          if ($this->data->replace('tb_fasilitas', $data)) {
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Input data sukses", "success")</script>');
            redirect(base_url('admin/fasilitas'));
          }
          else{
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Input data gagal", "warning")</script>');
            redirect(base_url('admin/fasilitas'));
          }


    }

}
?>