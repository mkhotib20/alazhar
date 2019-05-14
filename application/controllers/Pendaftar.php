<?php 
/**
 * 
 */
class pendaftar extends CI_Controller
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

    public function background()
    {
      $page = "bg";
      $read = $this->data->read('tb_bg')->result_array();

      $data = array('page' => $page, 'bg'=>$read);
      $this->load->view('dataFooter', $data);
    }
    public function upBG()
    {
        $timestamp = time();  
        $id=$this->input->post('id');   
        
        $config['upload_path']          = './uploads/bg/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'img'.$timestamp;
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar'))
        {
            $error = array('error' => $this->upload->display_errors());
             echo print_r($error);
        }
        else
        {
            $upd = $this->upload->data();
            $img = $upd['raw_name'].$upd['file_ext'];
            $data = array('bg_IMG'=>$img);
            if ($this->data->update('tb_bg', $data, 'bg_id', $id)) {
                $this->session->set_flashdata('delSuccess', '<script>$.notify("Memperbarui Background sukses", "success")</script>');
                redirect(base_url('admin/background-setting'));
            }
        }
    }
    public function coba()
    {
       $data = $this->data->read('tb_pendaftar')->result_array();
       echo print_r($data);
    }

    public function index()
    {
    	$page = "pendaftar";
        $read = $this->data->read('tb_pendaftar')->result_array();

    	$data = array('page' => $page, 'read'=>$read);
    	$this->load->view('dataPendaftar', $data);
    }

    public function uploadpendaftar(){
      $tahun = $this->input->post('tahun');
      $jumlah = $this->input->post('jumlah');
      $id = $this->input->post('id');


      $data = array('pendaftar_id'=>$id, 'pendaftar_tahun' => $tahun, 'pendaftar_jumlah' => $jumlah);

      if ($this->data->replace('tb_pendaftar', $data)) {
        if ($id=='') {
          $this->session->set_flashdata('delSuccess', '<script>$.notify("Input pendaftar sukses", "success")</script>');
          redirect(base_url('pendaftar'));
        }
        else{
          $this->session->set_flashdata('delSuccess', '<script>$.notify("Update data sukses", "success")</script>');
          redirect(base_url('pendaftar'));
        }

          
      }

    }

}
 ?>