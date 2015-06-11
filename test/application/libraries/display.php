<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
  Ѕиблиотека дл¤ формировани¤ шаблонов клиентской части
*/

class Display {
 
	public function display_page($name,$data)
	{
	   $CI =& get_instance (); //ƒл¤ подключени¤ стандартных методов контроллеров
	   $CI->load->view('templates/header_view'); //header
	   $CI->load->view('templates/sidebar_view'); //sidebar
       $CI->load->view($name.'_view',$data);
       $CI->load->view('templates/footer_view'); //footer   
	
	}

}
