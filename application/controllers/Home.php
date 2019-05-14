<?php 
/**
 * 
 */
class home extends CI_Controller
{
	
	 public function __construct() {
        parent::__construct();
        global $langID;
        global $lang;
        $langID = $this->uri->segment(1);
        if ($langID=='en') {
            $lang = 'language.php';
        }
        elseif($langID=='id'){
            $lang = 'bahasa.php';
        }
        else{
            $langID = 'en';
        }

    }
    public function route()
    {
        global $langID;
        redirect(base_url($langID));
    }
    public function index($langID)
    {
        global $langID;
        global $lang;
        $read = $this->data->readHotNews()->result_array();
        $pendaftar = $this->data->read('tb_pendaftar')->result_array();
        $data = array('read' => $read, 'lang'=>$lang, 'langID'=>$langID, 'pendaftar' => $pendaftar);
    	$this->load->view('front/home', $data);
    }

    public function senWA()
    {
    	$konten = $this->input->post('konten');
    	redirect("https://wa.me/083831314139/?text=".$konten."", '_blank');
    }


}
?>