<?php
class Rezervasyon_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
		 $this->load->library('form_validation');
		 $this->load->helper('form');
      }
	  
	
    public function update_data($tablo,$data,$id) 
	{
		$this->db->where('id', $id);
		$this->db->update($tablo ,$data);
		return true;
	}  		
}
?>	  