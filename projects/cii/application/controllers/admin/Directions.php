<?php
class Directions extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				dilSecici();
				$this->load->database();
				$this->load->library("session");
				$this->load->helper(array('form', 'url'));
				//$this->load->helper('form');
				$this->load->model('Yonler_Model');
        }
		
		function dilDegistir($gelen)
		{
        dilSecici($gelen);
        redirect("admin/home");
		}

	public function yonler()
	{
		$query=$this->db->get("directions");
		$data["veri"]=$query->result();
		$data["title"]="Yönler Sayfasý";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/yonler',$data);
		$this->load->view('admin/footer');

	}		

	//	public function aracEkle()
	//	{
	//		$data["title"]="Araç Ekleme Sayfasý";
	//		$this->load->view('admin/header',$data);
	//		$this->load->view('admin/sidebar');
	//		$this->load->view('admin/aracekle',$data);
	//		$this->load->view('admin/footer');
	//	}	
	

	
	public function kaydet()
	{
		$data=array(
		'departurePoint' => $this->input->post('departurePoint'),
		'destination' => $this->input->post('destination'),
		'duration' => $this->input->post('duration'),
		'distance' => $this->input->post('distance'),
		'minsBefore' => $this->input->post('minsBefore'),
		'fee' => $this->input->post('fee')
		);
		$this->Yonler_Model->insert_data("directions",$data);
		
		redirect(base_url()."admin/Directions/yonler"); // arac listele 
	}

  public function sil($id)
	{
		$this->db->query('DELETE FROM directions WHERE id='.$id);
		redirect(base_url()."admin/Directions/yonler");  // arac listele 
	}
 
	
//  public function guncelle($id)
//	{
		// Form verilerini alacaz
//		$data=array(
//		'departurePoint' => $this->input->post('departurePoint'),
//		'destination' => $this->input->post('destination'),
//		'duration' => $this->input->post('duration'),
//		'distance' => $this->input->post('distance'),
//		'minsBefore' => $this->input->post('minsBefore'),
//		'fee' => $this->input->post('fee')
//		);
//		$this->Yonler_Model->update_data("directions",$data,$id); // ekleme fonk. datalarý gönder
//		
//		redirect(base_url()."admin/Directions/yonler");
//		
//	}
 
	
    
}

?>