<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database();
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('Admin_Model');
        }
		
		public function index()
		{
			
			$this->load->view("admin/login");
		}
		public function login_ol()
	   {
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$result = $this->Admin_Model->login($username,$password);
		if($result) {
				// Kullanýcý var ise bilgileri diziye aktarýlýyor
				$sess_array = array();
				foreach($result as $row) {
                 $sess_array = array(
				 'id' => $row->id,
				 'username' => $row->username,
				 'password' => $row->password,
				 'authority_id' => $row->authority_id
				 );
                 // Dizi verileri Codeigniter Session kütüphanesi deðiþkenlerine aktarýlýoyor
                 $this->session->set_userdata('logged_in', $sess_array);
				 
				 redirect(base_url()."admin/home/index");
			
				 
                 }
          		return TRUE;
          } 
		  else 
		  {
            $this->session->set_flashdata("login_hata","Geçersiz Kullanýcý Adý yada Þifre");   
          		
			$this->load->view('admin/login');
			
            return FALSE;
          }
	   }		
	   
	   public function logout()
	{
		 $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url()."admin/login");
	}
}
?>