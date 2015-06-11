<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emails_model extends CI_Model
{


//Правила валидации
public $rules = array(
array
	   (
		'field' => 'email',
		'label' => 'Sender',
		'rules' => 'trim|htmlspecialchars|required|valid_email|xss_clean'
		),
		
array
	   (
		'field' => 'theme',
		'label' => 'Тема письма',
		'rules' => 'trim|htmlspecialchars|required|xss_clean'
		),		
		
array
	   (
		'field' => 'text',
		'label' => 'Текст письма',
		'rules' => 'trim|htmlspecialchars|required|xss_clean'
		),			
);        


    //Все записи
	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('emails');
		$query = $this->db->get();
					
		return $query->result_array();
		
		
	}
	
	//Добавление записи
	public function add()
   {
           $data = array();
            foreach ($this->rules as $one) {
                $f = $one['field'];
				$data[$f] = $this->input->post($f);	
			}
            $this->db->insert('emails', $data);
    }
	
	//Просмотр записи
	public function read($id)
    {
		$this->db->select('*');
		$this->db->from('emails');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();   
	}
	
		
	// Удаление записи
	public function delete($id)
	{
		$this->db->where ('id',$id);
		$this->db->delete('emails');
		return true;
	}
	
	

}

