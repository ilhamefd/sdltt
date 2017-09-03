<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistik extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Statistik Siswa',
					'isi'  =>'userpages/statistik/statistik'
						);
		$data['record']	= $this->m_global->get_data_all('siswa', null,null);
		$this->load->view('userlayout/wrapper',$data);	
	}

	public function data_siswa() 
        { 
        $data = $this->m_global->get_data_all('siswa',null,null); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->jk", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jml, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
	
	public function data_kelas() 
        { 
        $data = $this->m_global->get_data_all('kelas',null,null); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->nm_kls", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jml, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
}