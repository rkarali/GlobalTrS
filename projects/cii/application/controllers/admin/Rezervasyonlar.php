<?php
class Rezervasyonlar extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				dilSecici();
				$this->load->database();
				$this->load->library("session");
				$this->load->helper(array('form', 'url'));
				//$this->load->helper('form');
				$this->load->model('Rezervasyon_Model');
        }
		
		function dilDegistir($gelen)
		{
        dilSecici($gelen);
        redirect("admin/home");
		}

	public function rezervasyon_bekleyen()
	{
		//$query=$this->db->get("rezervasyonlar");
		//$query=$this->db->where('paymentStatus','0');
		$query=$this->db->select('*')->from('rezervasyonlar')->where('paymentStatus','0')->get();
		$data["veri"]=$query->result();
		$data["title"]="Bekleyen Rezervasyonlar Listesi";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/rezervasyon_bekleyen',$data);
		$this->load->view('admin/footer');

	}		
	
	public function rezervasyon_onaylanan()
	{
		//$query=$this->db->get("rezervasyonlar");
		//$query=$this->db->where('paymentStatus','0');
		$query=$this->db->select('*')->from('rezervasyonlar')->where('paymentStatus','1')->get();
		$data["veri"]=$query->result();
		$data["title"]="Onaylanan Rezervasyonlar Listesi";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/rezervasyon_onaylanan',$data);
		$this->load->view('admin/footer');

	}		


  public function sil($id)
	{
		$this->db->query('DELETE FROM rezervasyınlar WHERE id='.$id);
		redirect(base_url()."admin/Rezervasyonlar/rezervasyon_bekleyen"); 
	}

	
  public function onayla($id)
	{
		
		$data = array(
		'paymentStatus' => '1'
		);
		
		$this->Rezervasyon_Model->update_data("rezervasyonlar",$data,$id); 
		//this->db->where('id',$id);
		//this->db->update('rezervasyonlar',$id);
		redirect(base_url()."admin/Rezervasyonlar/rezervasyon_bekleyen");
		
	}
 
    
}

?>