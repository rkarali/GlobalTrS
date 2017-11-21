<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				dilSecici();
				$this->load->database(); // Sayfada veritabanýna eriþmemizi saglar
				$this->load->helper(array('form', 'url'));
				$this->load->library("session"); // gerek kalmadý autoloaadan cagýrdýk !!!!
				//$this->load->model('Admin_Model');
		}
		function dilDegistir($gelen)
		{
        dilSecici($gelen);
        redirect("admin/home/index");
		}
		public function index()
		{
			$data["title"]="Yönetici Paneli";
			$this->load->view("admin/header",$data);
			$this->load->view("admin/sidebar");
			$this->load->view("admin/content");		
			$this->load->view("admin/footer");
		}
		
		
		public function transfer()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/transferayarlari');
			$this->load->view('admin/footer');
		}
		
//		public function aracEkle()
//		{
//			$data["title"]="Araç Ekleme Sayfasý";
//			$this->load->view('admin/header',$data);
//			$this->load->view('admin/sidebar');
//			$this->load->view('admin/aracekle',$data);
//			$this->load->view('admin/footer');
//		}
		
		public function kaydet()
	{
		$data=array(
		'tradeMark' => $this->input->post('tradeMark'),
		'type' => $this->input->post('type'),
		'capacity' => $this->input->post('capacity'),
		'baggage' => $this->input->post('baggage'),
		'explanation' => $this->input->post('explanation')
		);
		$this->adminModel->insert_data("vehicles",$data);
		
		redirect(base_url()."admin/aracekle");
	}

        
	//	public function aracListele()
	//	{
	//		$query=$this->db->get("vehicles");
	//		$data["veri"]=$query->result();
	//		$data["title"]="Araç Listeleme Sayfasý";
	//		$this->load->view('admin/header',$data);
	//		$this->load->view('admin/sidebar');
	//		$this->load->view('admin/araclistele',$data);
	//		$this->load->view('admin/footer');
	//	}
	
		public function hizmetYeriListele()
		{
			$query=$this->db->get("servicelocations");
			$data["veri"]=$query->result();
			$data["title"]="Hizmet Yeri Listeleme Sayfasý";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/hizmetyerilistele',$data);
			$this->load->view('admin/footer');
		}
		
		public function Yonler()
		{
			$query=$this->db->get("directions");
			$data["veri"]=$query->result();
			$data["title"]="Yönler";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/yonler',$data);
			$this->load->view('admin/footer');
		}
	
//		public function Rezervasyon()
//		{
//			$this->load->view('admin/header');
//			$this->load->view('admin/sidebar');
//			$this->load->view('admin/rezervasyon');
//			$this->load->view('admin/footer');
//		}
		
		public function Odemeler()
		{
			$query=$this->db->get("payment");
			$data["veri"]=$query->result();
			$data["title"]="Ödemeler";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/odemeler',$data);
			$this->load->view('admin/footer');
		}
		
		public function siteAyarlari()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/siteayarlari');
			$this->load->view('admin/footer');
		}
		
		public function popupAyarlari()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/popupayarlari');
			$this->load->view('admin/footer');
		}
		
		public function galeriAyarlari()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/galeriayarlari');
			$this->load->view('admin/footer');
		}
		
		public function mailAyarlari()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/mailayarlari');
			$this->load->view('admin/footer');
		}
		
		public function smsAyarlari()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/smsayarlari');
			$this->load->view('admin/footer');
		}
		
		public function dilAyarlari()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/dilayarlari');
			$this->load->view('admin/footer');
		}
		
		public function paraBirim()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/parabirim');
			$this->load->view('admin/footer');
		}
		
		public function Yetkilendirme()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/yetkilendirme');
			$this->load->view('admin/footer');
		}
		
		public function kullaniciEkle()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/kullaniciekle');
			$this->load->view('admin/footer');
		}
		
		public function kullaniciListesi()
		{
			$query=$this->db->get("users");
			$data["veri"]=$query->result();
			$data["title"]="Kullanýcý Listesi";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/kullanicilistesi',$data);
			$this->load->view('admin/footer');
		}
		
		public function Profilim()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/profilim');
			$this->load->view('admin/footer');
		}
		
		public function sayfaEkle()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/sayfaekle');
			$this->load->view('admin/footer');
		}
		
		public function sayfaListele()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/sayfalistele');
			$this->load->view('admin/footer');
		}
		
		public function sayfaSirasi()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/sayfasirasi');
			$this->load->view('admin/footer');
		}
}
?>