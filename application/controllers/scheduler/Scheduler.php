<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Scheduler extends CI_Controller{
    public function __construct(){
        parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('login', 'refresh');
		}
        $this->load->model('Reminder');
     }
 
public function remindme(){
	$data['show_table'] = $this->Reminder->select_all();
	$this->load->view('header');
	$this->load->view('dashboard');
	$this->load->view('scheduler/remindme', $data);
	$this->load->view('footer');
} 

public function addreminder(){
    $title = $this->input->post('reminder');
    $date = $this->input->post('date');
    $time = $this->input->post('time');
    $desc = $this->input->post('desc');
    $data = array(
        'title' => $title,
        'date_time' => $date." ".$time,
        'description' => $desc
    );
    
    if($this->Reminder->insert($data)){
        $this->remindme();
    }
    
    
}


}