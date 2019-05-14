<?php 
/**
 * 
 */
class guruManagement extends CI_Controller
{
	
	public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('username')) {
            redirect('admin/login');
        }else{
            if ($this->session->userdata('level')!='2') {
                redirect('admin');
            }
        }
    }
    public function prosesRiwayat()
    {
        $filesCount = count($_POST['pendidikan']);
        $type = $this->input->post('type');
        $guru = $this->session->userdata('username');
        for ($i=0; $i < $filesCount; $i++) { 
            $namaGP = $_POST['pendidikan'][$i];
            $tahun = $_POST['tahun'][$i];
            $tahun2 = $_POST['tahun2'][$i];
            $gp_id = $_POST['gp_id'][$i];
            $data = array('gp_id' =>$gp_id ,'gp_nama' => $namaGP, 'gp_type' => $type, 'gp_guru' => $guru, 'gp_tahun' => $tahun, 'gp_tahun2'=>$tahun2);
            $this->data->replace('tb_gp', $data);
        }
        echo '<script>alert("Sukses Menambahkan Pendidikan")</script>';
        echo '<script>window.history.back()</script>';
    }
    public function hapusPendidikan($id)
    {
        if ($this->data->delete('tb_gp', 'gp_id', $id)) {
            echo '<script>alert("Sukses Menambahkan Pendidikan")</script>';
            echo '<script>window.history.back()</script>';
        }
    }
    public function riwayatPendidikan($value='')
    {
        $page = "riwayat";
         $id = $this->session->userdata('username');
        $read = $this->data->read('tb_berita', 'berita_author', $id)->result_array();
        $readriw = $this->data->readPendidikan($id, 'f');

        $data = array('page' => $page, 'read' => $read, 'check'=>$readriw);
        $this->load->view('guru/riwayat', $data);
    }
    public function riwayatPendidikanNF($value='')
    {
        $page = "riwayat";
         $id = $this->session->userdata('username');
        $read = $this->data->read('tb_berita', 'berita_author', $id)->result_array();
        $readriw = $this->data->readPendidikan($id, 'nf');

        $data = array('page' => $page, 'read' => $read, 'check'=>$readriw);
        $this->load->view('guru/riwayatnf', $data);
    }
    public function article()
    {
        $id = $this->session->userdata('username');
       $read = $this->data->read('tb_berita', 'berita_author', $id)->result_array();
        $page = "article";
        $data = array('page' => $page, 'read' => $read);
        $this->load->view('guru/berita', $data);
    }
    public function delete($id, $table, $where)
    {
        if ($this->data->delete($table, $where, $id)) {
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Hapus data sukses", "success")</script>');
            redirect(base_url('guru/article'));
        }
    }
    public function updateBerita(){
        $judul = $this->input->post('judul');
        $berita_id = $this->input->post('id');
        $konten = $this->input->post('konten');
        $judulEn = $this->input->post('judulEn');
        $kontenEn = $this->input->post('kontenEn');
        $timestamp = time();

        
        
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
                'berita_img' =>  $img,
                'berita_timestamp' =>  $timestamp,
                'berita_judul_en' =>  $judulEn,
                'berita_konten_en' =>  $kontenEn,
            );
        }

        
        if ($this->data->update('tb_berita', $data, 'berita_id', $berita_id)) {
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Update berita '.$judul.' sukses", "success")</script>');
            redirect(base_url('guru/article'));
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
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'img'.$timestamp;
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo print_r($error);
            $this->session->set_flashdata('delSuccess', '<script>$.notify("'.print_r($error).'", "warning")</script>');
                redirect(base_url('guru/article/'));
        }
        else
        {
            $upd = $this->upload->data();
            $img = $upd['raw_name'].$upd['file_ext'];
            $data = array(
                'berita_judul' =>  $judul,
                'berita_konten' =>  $konten,
                'berita_img' =>  $img,
                'berita_timestamp' =>  $timestamp,
                'berita_kat' =>  $kategori,
                'berita_judul_en' =>  $judulEn,
                'berita_konten_en' =>  $kontenEn,
                'berita_author' =>  $this->session->userdata('username'),
            );
            if ($this->data->insert('tb_berita', $data)) {
                $this->session->set_flashdata('delSuccess', '<script>$.notify("Input berita sukses", "success")</script>');
                redirect(base_url('guru/article/'.$kategori));
            }
        }
    }
    public function editArticle($id)
    {
        $page = "article";
        $read = $this->data->read('tb_berita', 'berita_id', $id)->result_array();
        $readCat = $this->data->read('tb_kat_berita')->result_array();
        
        $data = array('page' => $page, 'read'=>$read, 'readCat'=>$readCat);
        $this->load->view('guru/editBerita', $data);
    }
    public function addArticle($kat='2')
    {
        $page = "article";
        $readCat = $this->data->read('tb_kat_berita', 'kb_id', $kat)->result_array();
        foreach ($readCat as $rc) {
            $katName = $rc['kb_name'];
        }
        $data = array('page' => $page, 'readCat'=>$readCat, 'kat' => $kat, 'km' => $katName);
        $this->load->view('guru/addberita', $data);
    }
    public function update()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $yb = $this->input->post('yb');
        $jabatan = $this->input->post('jabatan');
        $email = $this->input->post('email');
        $id = $this->input->post('id');

        $config['upload_path']          = './uploads/guru';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'guru'.time();
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img'))
        {
            $data = array('guru_nama' => $nama,
                'guru_account' => $username,
                'guru_alamat' => $alamat,
                'guru_yb' => $yb,
                'guru_email' => $email,
                'guru_jabatan' =>$jabatan
            );
        }
        else{
            $upd = $this->upload->data();
            $img = $upd['raw_name'].$upd['file_ext'];
            $data = array('guru_nama' => $nama,
                'guru_img' => $img,
                'guru_account' => $username,
                'guru_alamat' => $alamat,
                'guru_yb' => $yb,
                'guru_email' => $email,
                'guru_jabatan' =>$jabatan
            );
        }
        $dataUser = array('user_name' => $username, 'user_password'=>$password);
        if ($this->data->update('tb_guru', $data, 'guru_id', $id) && $this->data->update('tb_user', $dataUser, 'user_name', $username)) {
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Update data berhasil", "success")</script>');
                  redirect(base_url('guru/profile'));
        }
        else{
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Update data Gagal", "error")</script>');
                  redirect(base_url('guru/profile'));
        }

    }
    public function index()
    {
    	$username = $this->session->userdata('username');
    	$page = 'profile';
    	$read = $this->data->readGuru($username)->result_array();
        $readJ = $this->data->read('tb_guru_jabatan')->result_array();
    	$data = array('jabatan'=>$readJ, 'page' => $page, 'read'=>$read );
    	$this->load->view('guru/profile', $data);
    }
}
 ?>