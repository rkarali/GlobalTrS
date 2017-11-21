<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function dilSecici($gelen=""){
$ci =& get_instance();
if($gelen==""){
if($ci->input->cookie("dil")==""){
$dil = dilSec();
}else{
$dil = dilSec($ci->input->cookie("dil"));
}
}else{
$dil = dilSec($gelen);
}
$cookie = array(
'name'   => "dil",
'value'  => $dil,
'expire' => '86500'
);
$ci->input->set_cookie($cookie,TRUE);
if($dil=='tr'){
$language = "turkish";
if (file_exists(APPPATH.'../system/language/'.$language.'/.php')) {
$ci->lang->load("genel", $language);
}
}elseif($dil=='en'){
$language = "english";
if (file_exists(APPPATH.'../system/language/'.$language.'/genel_lang.php')) {
$ci->lang->load("genel", $language);
}else{
$ci->lang->load("genel", "turkish");
}
}else{
$ci->lang->load("genel","english");
}
}


			function dilSec($gelen=""){
			$ci =& get_instance();
			$url = $ci->uri->segment(1);
			if($gelen==""){
			if(dilDosyaIsmi($url)!=""){
			return $url;
			//$ci->session->set_userdata('dil', $url);
			}else{
			return "en";
			//$ci->session->set_userdata('dil', "turkish");
			}
			}else{
			if(dilDosyaIsmi($gelen)!=""){
			return $gelen;
			//$ci->session->set_userdata('dil', $url);
			}else{
			return "tr";
			//$ci->session->set_userdata('dil', "turkish");
			}
			}
			}
					function dilUrl(){
					$ci =& get_instance();
					$dil = $ci->input->cookie("dil");
					//$dil = $ci->session->userdata("dil");
					return $dil."/";
					}
							function dilDosyaIsmi($gelen){
							if($gelen=="tr"){
							return "turkish";
							}elseif($gelen == "en"){
							return "english";
							}else{
							return "";
							}
							}
?>