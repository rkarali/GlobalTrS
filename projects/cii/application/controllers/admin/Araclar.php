<?php
class Araclar extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				dilSecici();
				$this->load->database();
				$this->load->library("session");
				$this->load->helper(array('form', 'url'));
				//$this->load->helper('form');
				$this->load->model('Araclar_Model');
        }
		
		function dilDegistir($gelen)
		{
        dilSecici($gelen);
        redirect("admin/home");
		}

	public function araclistele()
	{
		$query=$this->db->get("vehicles");
		$data["veri"]=$query->result();
		$data["title"]="Ara� Listeleme Sayfas�";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/araclistele',$data);
		$this->load->view('admin/footer');

	}		

		public function aracEkle()
		{
			$data["title"]="Ara� Ekleme Sayfas�";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/aracekle',$data);
			$this->load->view('admin/footer');
		}	
	
		
	
	public function kaydet()
	{
		$data=array(
		'tradeMark' => $this->input->post('tradeMark'),
		'type' => $this->input->post('type'),
		'capacity' => $this->input->post('capacity'),
		'baggage' => $this->input->post('baggage'),
		'explanation' => $this->input->post('explanation')
		);
		$this->Araclar_Model->insert_data("vehicles",$data);
		
		redirect(base_url()."admin/Araclar/araclistele"); // arac listele 
	}

  public function sil($id)
	{
		$this->db->query('DELETE FROM vehicles WHERE id='.$id);
		redirect(base_url()."admin/Araclar/araclistele");  // arac listele 
	}
  public function duzenle($id)
	{
		$query = $this->db->get_where("vehicles",array("id"=>$id)); // Veritaban�ndan ilgili kayd� sorgula getir
        $data["veri"] = $query->result(); //Sonu�lar� $data de�i�kenine ata
		$data["title"]="Ara� D�zenleme Sayfas�";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/aracduzenle',$data);
		$this->load->view('admin/footer');
	}
	
  public function guncelle($id)
	{
		// Form verilerini alacaz
		$data=array(
		'tradeMark' => $this->input->post('tradeMark'),
		'type' => $this->input->post('type'),
		'capacity' => $this->input->post('capacity'),
		'baggage' => $this->input->post('baggage'),
		'explanation' => $this->input->post('explanation')
		);
		$this->Araclar_Model->update_data("vehicles",$data,$id); // ekleme fonk. datalar� g�nder
		
		redirect(base_url()."admin/Araclar/araclistele");
		
	}
  public function resimekle($id)
	{
		$data["title"]="Ara� Ekleme Sayfas�";
		$data["id"]=$id;
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/aracekle',$data);
		$this->load->view('admin/footer');
	}
	
    public function resim_upload($id)
	{
		// Resim uplad ayarlar�
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 1280;
        $config['max_height']           = 768;
		
		$this->load->library('upload', $config); // upload k�t�phanesini �a��r
		
		if ( !$this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/aracekle', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
											
						// UPLOAD ED�LEN RESM� VER�TABANINA KAYDETME-------------->
						$upload_data = $this->upload->data(); 
						
						echo $file_name =   $upload_data['file_name']; // Y�kledi�i resmin ad�
						//echo "<br> Boyutu :" .$upload_data['file_size'];				
						$data=array(
							'image' => $file_name 
						);
						
					    $this->Araclar_Model->update_data("vehicles",$data,$id); //  fonksiypnua datalar� id ile  g�nder
						
						// <------ VER� TABANINA KAYDETME--------------
						//print_r($upload_data);
						redirect(base_url()."admin/araclistele");
						
						
                }						
		
	}
}

?>