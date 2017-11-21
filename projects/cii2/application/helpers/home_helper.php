<?php
function dilSecici($gelen=""){
$ci =& get_instance();
if($gelen==""){
if($ci->input->cookie("lang")==""){
$lang = dilSec();
}else{
$lang = dilSec($ci->input->cookie("lang"));
}
}else{
$lang = dilSec($gelen);
}
$cookie = array(
'name'   => "lang",
'value'  => $lang,
'expire' => '86500'
);
$ci->input->set_cookie($cookie,TRUE);
if($lang=='tr'){
$language = "turkish";
if (file_exists(APPPATH.'../system/language/'.$language.'/genel_lang.php')) {
$ci->lang->load("genel", $language);
}
}elseif($lang=='en'){
$language = "english";
if (file_exists(APPPATH.'../system/language/'.$language.'/genel_lang.php')) {
$ci->lang->load("genel", $language);
}else{
$ci->lang->load("genel", "turkish");
}
}else{
$ci->lang->load("genel","turkish");
}
}

function dilSec($gelen=""){
$ci =& get_instance();
$url = $ci->uri->segment(1);
if($gelen==""){
if(dilDosyaIsmi($url)!=""){
return $url;
//$ci->session->set_userdata('lang', $url);
}else{
return "tr";
//$ci->session->set_userdata('lang', "turkish");
}
}else{
if(dilDosyaIsmi($gelen)!=""){
return $gelen;
//$ci->session->set_userdata('lang', $url);
}else{
return "tr";
//$ci->session->set_userdata('lang', "turkish");
}
}
}

function dilUrl(){
$ci =& get_instance();
$lang = $ci->input->cookie("lang");
//$lang = $ci->session->userdata("lang");
return $lang."/";
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