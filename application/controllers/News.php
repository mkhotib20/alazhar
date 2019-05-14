<?php 
/**
 * 
 */
class news extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        
         date_default_timezone_set("Asia/Jakarta"); 
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
		$read = $this->data->read('tb_berita','berita_kat', '4', null, 'berita_timestamp', 'desc')->result_array();
        $readPengumuman = $this->data->read('tb_berita','berita_kat', '3', null, 'berita_timestamp', 'desc')->result_array();
		$data = array('read' => $read, 'lang'=>$lang, 'langID'=>$langID, 'readPengumuman' => $readPengumuman);
		$this->load->view('front/news', $data);
	}
	public function detail($id)
	{
		global $langID;
        global $lang;
		$read = $this->data->read('tb_berita', 'berita_id', $id)->result_array();
		$data = array('read' => $read, 'lang'=>$lang, 'langID'=>$langID );
		$this->load->view('front/detail-article', $data);

	}
}

 ?>