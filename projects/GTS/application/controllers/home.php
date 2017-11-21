<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada veritabanına erişmemizi saglar
				$this->load->helper(array('home','form', 'url'));
				//$this->load->library("session"); // gerek kalmadı autoloaadan cagırdık !!!!
				$this->load->model('Home_Model');
        }
	public function index()
	{
		dilSecici();
		$query=$this->db->get("airports"); //airport tablosunu veritabanından çek
		$data["hava"]=$query->result(); //sorgu verilerini havaAlani değişkenine yükle
		$data["title"]='Anasayfa';

		$this->load->view('header',$data);
		$this->load->view('anasayfa',$data);
		$this->load->view('footer');
	}

	function dilDegistir($tr){
        dilSecici($tr);
       // redirect("home");
    }

	 function complete() 	//otomatik tamamlama
	{ 
		// process posted form data  
        $keyword = $this->input->get('term');  
        $data['response'] = 'false'; //Set default response  
        $query = $this->Home_Model->tamamla($keyword); //Search DB  
        if( ! empty($query) )  
        {  
            $data['response'] = 'true'; //Set response
          
			$tahmin = array();
			foreach($query as $row)
			{
				$tahmin[] = $row->name.", ".$row->iata_faa."-->".$row->city." ";
			}
        }  
            echo json_encode($tahmin); //echo json string if ajax request 	

    }  
	public function CarSearch()  
	{
		$data=array(
					$nereden=$this->input->post('nereden'),
					$nereye=$this->input->post('nereye'),
					$StartTarih=$this->input->post('start'),
					$EndTarih=$this->input->post('end'),

		);
		
		$nereden = explode('-->',$nereden);
		$nere = $nereden[1];
	
		$lokasyon["veri2"]=$data;  // veri2 de hangi havaAlanindan nerere gidecegi var 

		$this->db->where('TransferCompanysCity',$nere);  // cars tablosu isimlere dikkat et
		$sorgu=$this->db->get('cars');
		$sonuc=$sorgu->result();
		
		$lokasyon["veri3"]=$sonuc;     // veri3 de seçilen şehirde ki arabalar ve özellikleri
		


		$this->db->where('TransferCompanysCity',$nere);   // araba sayısı (---transfercompanys----) tablosunda join kullan 
		$sorgu=$this->db->get('transfercompanys');
		$query=$sorgu->result();
		
		$lokasyon["veri4"]=$query;    		// veri4 de transfer şirketlerinin bilgileri var (sehre göre dönderiliyor)
		
		

		//print_r($lokasyon);
		$data["title"]='CarResult';
		$this->load->view('header',$data);
		$this->load->view('araba_listele',$lokasyon);
		//$this->load->view('arabaVeriGetir');
		$this->load->view('footer');		
	}
	public function rezervasyonYap($CarsID)
	{

		$query = $this->db->get_where("cars",array("CarsID"=>$CarsID)); // Veritabanından ilgili kaydı sorgula getir
        $data['veri'] = $query->result(); 	
			//Sonuçları $data değişkenine atadık
		
		$data["title"]='CarResult';
		$this->load->view('header',$data);
		$this->load->view('rezervasyon',$data);
		$this->load->view('footer');
		
	}
	public function CreateReservation()
	{

		$data=array(
		'ADI' => $this->input->post('adi'),
		
		'phonenumber' => $this->input->post('telefon'),
		'email' => $this->input->post('mail'),
		'kartno' => $this->input->post('kartno'),
		'gkodu' => $this->input->post('gkodu'),
		'kartsahibi'=>$this->input->post('kartsahibi'),
		'tarih' => $this->input->post('tarih')

		);
		$this->Home_Model->insert_data("rezervasyonlar",$data); // ekleme fonk. dataları gönder
	     redirect(base_url()."home");
	}
	
	

	public function veriGetir() 
	{

	//ajaxdan gelen veriler
	$GelenVeri = $_GET['parametreler'];
	$parametreler = json_decode($GelenVeri);

	//$baslangincfiyati = $parametreler['fiyatBaslangic'];


	$baslangincfiyati = $parametreler->fiyatBaslangic;
	$bitisfiyati=$parametreler->fiyatBitis;
	$aralik=$baslangincfiyati;
	$aralik2=$bitisfiyati;
	
	//veriler filtrelenip veritabanından değerler okunacak.....
    // veri3 de Fiyat cubugunda sürüklenen aralık 
		
		$this->db->where('CarsPrice>',$aralik);  
		$this->db->where('CarsPrice<',$aralik2);
		$sorgu=$this->db->get('cars');
		$sonuc1=$sorgu->result();
		$lokasyon["veri3"]=$sonuc1;

	$this->load->view('FiyatCubugu',$lokasyon);
 	//CarSearch(aralik,aralik2);

echo $aralik;

	//döngü ile ekrana basılacak kısım
	
 	}
	
	
	
	public function login()
	{
		$data["title"]='LoginPage';
		//$this->load->view('header');
		$this->load->view('loginol',$data);
		//$this->load->view('footer');
		
	}
	
	
}  
	

