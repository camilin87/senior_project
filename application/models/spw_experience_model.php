<?php

class SPW_Experience_Model extends CI_Model
{
	public $id;
	public $title;
	public $description;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($spw_id,$position_obj)
	{
		$data = array(
						'user' 				=> $spw_id, 
						'company_name' 		=> $position_obj->company_name,
						'company_industry' 	=> $position_obj->company_industry,
						'start_date'        => $position_obj->start_date,
		                'end_date'          => $position_obj->end_date,
		                'title' 			=> $position_obj->title,
		                'summary' 			=> $position_obj->summary,
						 );

		$this->db->insert('spw_experience', $data); 

	}


	public function delete($spw_id)
	{
		$this->db->where('user', $spw_id);
		$this->db->delete('spw_experience');

	}
}
	
?>