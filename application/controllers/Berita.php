<?php 
/**
 * 
 */
class berita extends CI_Controller
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
    public function JsonUpload()
      {
        $returnValue = '';
        
        $config['upload_path']          = 'uploads/post';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
        

          $this->load->library('upload', $config);

          $this->upload->do_upload('image');
          $updata = array('upload_data' => $this->upload->data());
        foreach ($updata as $d) {
          $filename = $d['file_name'];
        }
        $return_value = $filename;

        echo ($return_value);


      }

    public function index($kat='4')
    {
        $read = $this->data->read('tb_berita', 'berita_kat', $kat)->result_array();
    	$page = "berita";
        $readCat = $this->data->read('tb_kat_berita', 'kb_id', $kat)->result_array();
        foreach ($readCat as $rc) {
            $katName = $rc['kb_name'];
        }
    	$data = array('page' => $page, 'read' => $read, 'kat' => $kat, 'km' => $katName);
        $this->load->view('berita', $data);
    }
    public function addberita($kat='4')
    {
    	$page = "input";
        $readCat = $this->data->read('tb_kat_berita', 'kb_id', $kat)->result_array();
        foreach ($readCat as $rc) {
            $katName = $rc['kb_name'];
        }

    	$data = array('page' => $page, 'readCat'=>$readCat, 'kat' => $kat, 'km' => $katName);
    	$this->load->view('addberita', $data);
    }
    public function editberita($id)
    {
        $page = "berita";
        $read = $this->data->read('tb_berita', 'berita_id', $id)->result_array();
        
        $data = array('page' => $page, 'read'=>$read);
        $this->load->view('editBerita', $data);
    }
    public function coba()
    {
        echo $time = time();
        $date = date('d/m/Y', $time);
        echo substr($date,0,2);
    }
    public function delete($id, $table, $where, $page)
    {
        if ($this->data->delete($table, $where, $id)) {
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Hapus data sukses", "success")</script>');
            echo '<script>window.history.back()</script>';
        }
    }

    public function uploadberita(){
        $judul = $this->input->post('judul');
        $judulEn = $this->input->post('judulEn');
        $kategori = $this->input->post('kategori');
        $konten = $this->input->post('konten');
        $kontenEn = $this->input->post('kontenEn');
        $timestamp = time();

        
        
        $config['upload_path']          = './uploads/';
        if ($kategori==3) {
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx';
        }else{
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
        }
        $config['file_name']            = 'file'.$timestamp;
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo print_r($error);
        }
        else
        {
            $upd = $this->upload->data();
            $img = $upd['raw_name'].$upd['file_ext'];
            $data = array(
                'berita_judul' =>  $judul,
                'berita_konten' =>  $konten,
                'berita_img' =>  $img,
                'berita_kat' =>  $kategori,
                'berita_timestamp' =>  $timestamp,
                'berita_timestamp' =>  $timestamp,
                'berita_judul_en' =>  $judulEn,
                'berita_konten_en' =>  $kontenEn,
                'berita_author' =>  'Administrator'
            );
            if ($this->data->insert('tb_berita', $data)) {
                $this->session->set_flashdata('delSuccess', '<script>$.notify("Input berita sukses", "success")</script>');
                redirect(base_url('admin/berita/'.$kategori));
            }
        }
    }
    public function updateBerita(){
        $judul = $this->input->post('judul');
        $berita_id = $this->input->post('id');
        $konten = $this->input->post('konten');
        $timestamp = time();
        $judulEn = $this->input->post('judulEn');
        $kontenEn = $this->input->post('kontenEn');
        $kategori = $this->input->post('kategori');

        
        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'img'.$timestamp;
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')){
            $data = array(
                'berita_judul' =>  $judul,
                'berita_konten' =>  $konten,
                'berita_timestamp' =>  $timestamp,
                'berita_judul_en' =>  $judulEn,
                'berita_konten_en' =>  $kontenEn,
            );
        }
        else{
            $data = $this->upload->data();
            $img = $data['raw_name'].$data['file_ext'];
            $data = array(
                'berita_judul' =>  $judul,
                'berita_konten' =>  $konten,
                'berita_judul_en' =>  $judulEn,
                'berita_konten_en' =>  $kontenEn,
                'berita_img' =>  $img,
                'berita_timestamp' =>  $timestamp,
            );
        }

        
        if ($this->data->update('tb_berita', $data, 'berita_id', $berita_id)) {
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Update berita '.$judul.' sukses", "success")</script>');
            redirect(base_url('admin/berita/'.$kategori));
        }
    }

}
 ?>