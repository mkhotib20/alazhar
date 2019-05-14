<?php 
/**
 * 
 */
class profile extends CI_Controller
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

    public function index()
    {
        global $langID;
        global $lang;
        $read = $this->data->read('tb_fasilitas', null, null, null, 'fasilitas_nama', 'desc')->result_array();
        $data = array('lang'=>$lang, 'langID'=>$langID, 'read'=>$read);
        $this->load->view('front/profile', $data);
    }
    public function guru()
    {
        global $langID;
        global $lang;

       $read = $this->data->readGuruAndJabatan()->result_array();
        $data = array('read' => $read, 'lang'=>$lang, 'langID'=>$langID);
        $this->load->view('front/guru', $data);
    }
    public function detail($id)
    {
        global $langID;
        global $lang;
        
        $read = $this->data->readDetail($id)->result_array();
        $data = array('read' => $read, 'lang'=>$lang, 'langID'=>$langID);
        $this->load->view('front/detail', $data);
    }


}
?>