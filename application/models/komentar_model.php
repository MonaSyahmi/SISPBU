<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class komentar_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->CI = get_instance();
	}
	
	function insert($data){
		$this->db->insert('komentar',$data);
	}
	function delete($id){
		$this->db->where('id_komentar', $id);
		$this->db->delete('komentar');
	}
	
	function selectone($id){

		$this->db->select("*");
		$this->db->from('komentar');
		$this->db->where('id_komentar',$id);
		$query = $this->db->get();
		return $query;
	}
	
	function update($data,$id ){
	
		$this->db->where('id_komentar',intval($id));
		$this->db->update('komentar',$data);
	}
	
}

?>