<?php 
/**
 * 
 */
class data extends CI_Model
{
	public function readGuruAndJabatan()
	{
		return $this->db->query("SELECT * FROM tb_guru, tb_guru_jabatan WHERE tb_guru.guru_jabatan=tb_guru_jabatan.gj_id ORDER BY tb_guru.guru_nama ASC ");
	}
	public function readHotNews()
	{
		return $this->db->query("SELECT * FROM tb_berita, tb_kat_berita WHERE berita_kat IN ('1', '4', '5') AND tb_berita.berita_kat = tb_kat_berita.kb_id ORDER BY berita_timestamp DESC LIMIT 4 ");
	}
	public function readDetail($id)
	{
		return $this->db->query("SELECT * FROM tb_guru, tb_guru_jabatan WHERE guru_id='$id' AND tb_guru.guru_jabatan=tb_guru_jabatan.gj_id");
	}
	public function readPendidikan($user, $type)
	{
		return $this->db->query("SELECT * FROM tb_gp WHERE gp_guru = '$user' AND gp_type = '$type'");
	}
	public function read($table, $where=null, $id=null, $limit=null,  $order=null, $orderType=null)
	{
		if ($where!=null) {
			$this->db->order_by($order, $orderType);
			return $this->db->get_where($table, array($where => $id ), $limit, $order );
		}
		else{
			$this->db->order_by($order, $orderType);
			return $this->db->get($table, $limit, $order );
		}
	}
	public function readGuru($id=''){
		return $this->db->query("SELECT * FROM tb_guru, tb_user WHERE tb_guru.guru_account = tb_user.user_name AND tb_user.user_level=2 AND tb_guru.guru_account='$id'");
	}
	public function readGuru2(){
		return $this->db->query("SELECT * FROM tb_guru, tb_user WHERE tb_guru.guru_account = tb_user.user_name AND tb_user.user_level=2 ");
	}
	public function delete($table, $where, $id)
	{
		$this->db->where($where, $id);
		return $this->db->delete($table);
	}
	public function insert($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	public function replace($table, $data)
	{
		return $this->db->replace($table, $data);
	}
	public function update($table, $data, $where, $id)
	{
		$this->db->where($where, $id);
		return $this->db->update($table, $data);
	}
}
 ?>