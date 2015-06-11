<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Inputmail extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    	//Подключаем библиотеки
		$this->load->library('display');
    }

	
    //Список всех отправленных писем
	public function index()
	{
		$name='input_mail';
		$this->display->display_page($name,NULL);
	}

	
}//End class Inputmail

/* End of file Inputmail.php */

/* Location: ./application/controllers/Inputmail.php */