<?php 
/**
 * 
 */
class guru extends CI_Controller
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

    public function index()
    {
    	$page = "guru";
        $read = $this->data->readGuru2()->result_array();

    	$data = array('page' => $page, 'read'=>$read);
    	$this->load->view('dataGuru', $data);
    }
    public function inputGuru()
    {
        $nama = $this->input->post('namaGuru');
        $usernameGuru = $this->input->post('usernameGuru');
        $passwordGuru = $this->input->post('passwordGuru');
        $id = $this->input->post('idGuru');
        $idGac = $this->input->post('idGac');

        $dataGuru = array('guru_id'=>$id, 'guru_nama' => $nama, 'guru_account'=>$usernameGuru);
        $dataGac = array('user_id'=>$idGac, 'user_name' => $usernameGuru, 'user_password'=>$passwordGuru, 'user_level'=>2);

        if ($this->data->replace('tb_guru', $dataGuru) && $this->data->replace('tb_user', $dataGac) ){
            if ($id=='') {
              $this->session->set_flashdata('delSuccess', '<script>$.notify("Input guru sukses", "success")</script>');
              redirect(base_url('admin/guru'));
            }
            else{
              $this->session->set_flashdata('delSuccess', '<script>$.notify("Update data sukses", "success")</script>');
              redirect(base_url('admin/guru'));
            }

              
        }

    }
    public function delete($idGac, $idGuru)
    {
        if ($this->data->delete('tb_user', 'user_id', $idGac) && $this->data->delete('tb_guru', 'guru_id', $idGuru) ) {
            $this->session->set_flashdata('delSuccess', '<script>$.notify("Hapus data sukses", "success")</script>');
            redirect(base_url('admin/guru'));
        }
    }

}
?>