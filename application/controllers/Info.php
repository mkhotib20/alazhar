<?php 
/**
 * 
 */
class info extends CI_Controller
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
		$read = $this->data->read('tb_gallery', null, null, null, 'gal_timestamp', 'desc')->result_array();
        $prestasi = $this->data->read('tb_berita', 'berita_kat', 1, null, 'berita_timestamp', 'desc')->result_array();
        $event = $this->data->read('tb_berita', 'berita_kat', 5, null, 'berita_timestamp', 'desc')->result_array();
        $pengumuman = $this->data->read('tb_berita', 'berita_kat', 6, null, 'berita_timestamp', 'desc')->result_array();
		$data = array('pengumuman'=>$pengumuman, 'read' => $read, 'lang'=>$lang, 'langID'=>$langID, 'prestasi' =>$prestasi, 'event' =>$event);
		$this->load->view('front/info', $data);
	}
}
 ?>