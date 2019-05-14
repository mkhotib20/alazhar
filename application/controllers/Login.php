<?php 
/**
 * 
 */
class login extends CI_Controller
{
	public function index($id=1)
	{
		if ($this->session->has_userdata('username')) {
            redirect('admin');
        }else{
        	$data = array('pageR' => $id );
        	$this->load->view('login', $data);
        }
		
	}

	public function logout($id)
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('delSuccess', '<script>$.notify("Anda telah logout", "success")</script>');
		if ($id==3) {
			redirect(base_url('en'));
		}
		else{
			redirect(base_url('admin/login/'.$id));
		}
      
	}

	public function proses()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$page = $this->input->post('page');

		$query = $this->data->read('tb_user', 'user_name', $user);

		if ($query->num_rows()!=0) {
			$read = $query->result_array();
			foreach ($read as $r) {
				$password = $r['user_password'];
				$username = $r['user_name'];
				$nama = $r['user_full_name'];
				$level = $r['user_level'];
			}
			if ($pass==$password) {
				if ($level == 1) {
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('level', $level);
					$this->session->set_flashdata('delSuccess', '<script>$.notify("Selamat Datang '.$nama.'", "success")</script>');
			        redirect(base_url('admin/'));
				}
				elseif ($level == 2) {
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('level', $level);
					$this->session->set_flashdata('delSuccess', '<script>$.notify("Selamat Datang '.$nama.'", "success")</script>');
					if ($page==2 || $page==1) {
						redirect(base_url('guru/profile'));
					}
					elseif ($page==3) {
						redirect(base_url('en'));
					}
			        
				}
				elseif ($level == 3) {
					echo 'ortu';
				}
			}
			else{
				 $this->session->set_flashdata('delSuccess', '<script>$.notify("Login gagal, username dan password salah", "error")</script>');
		          redirect(base_url('admin/login'));
			}
		}
		else{
			 $this->session->set_flashdata('delSuccess', '<script>$.notify("Login gagal, username dan password salah", "error")</script>');
	          redirect(base_url('admin/login'));
		}

	}
}
 ?>