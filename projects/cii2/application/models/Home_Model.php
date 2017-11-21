<?php
class Home_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
      }


	public function tamamla($keyword)
	{ 
        $this->db->select('name,iata_faa,city')->from('airports'); 
        $this->db->like('name',$keyword,'after'); 
        $this->db->or_like('iata_faa',$keyword,'after'); 
		 $this->db->or_like('city',$keyword,'after'); 
        $query = $this->db->get();     
        return $query->result(); 
    } 
	  
	public function insert_data($tablo,$data)
		{
			if ($this->db->insert($tablo,$data)) //  dataları ekle
			{
			return true;
			}
		}	
    public function update_data($tablo,$data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update($tablo ,$data);
		return true;
	}  		
}
?>	  