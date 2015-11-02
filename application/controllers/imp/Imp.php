<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Imp extends CI_Controller{
    public function __construct(){
        parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('login', 'refresh');
		}
        $this->load->model('Cmd');
     }
     
	     public function commands($msg = NULL){
        $this->load->library('pagination');
        
        //pagination settings
        $config['base_url'] = base_url().'server/imp/commands';
        $config['total_rows'] = $this->Cmd->cmdcount();
        //echo $config['total_rows'];
        $config['per_page'] = "10";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['show_table'] = $this->Cmd->select_all($config['per_page'],$data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['msg'] = $msg;
        //load view
        $this->load->view('header');
        $this->load->view('dashboard');
        //$data['show_table'] = $this->Cmd->select_all();
        $this->load->view('imp/commands',$data);
        $this->load->view('footer');
    }
	 
	 
	 
    // public function commands($msg = NULL){
// 
        // $data['msg'] = $msg;
        // //load view
        // $this->load->view('header');
        // $this->load->view('dashboard');
        // $data['show_table'] = $this->Cmd->select_all();
        // $this->load->view('imp/commands',$data);
        // $this->load->view('footer');
    // }
    
    
    public function addcmd(){
        $data = array(
        'title' =>  $this->input->post('cmdname'),
        'command' => $this->input->post('command'),
        'description' => $this->input->post('description')           
        );
        if($this->Cmd->insert($data)){
            $msg = "Command added Successfully";
//            echo "inserted ".$msg;
            $this->commands($msg);
        }
       
    }

    public function links($msg = NULL){
        $data['msg'] = $msg;
        $this->load->view('header');
        $this->load->view('dashboard');
        $data['show_table'] = $this->Cmd->select_links();
        $this->load->view('imp/links',$data);
        $this->load->view('footer');
    }


      public function addlink(){
        $data = array(
        'title' =>  $this->input->post('linkname'),
        'link' => $this->input->post('link'),
        'description' => $this->input->post('details')           
        );
        if($this->Cmd->insertlink($data)){
            $msg = "Link added Successfully";
//            echo "inserted ".$msg;
			//echo "<script>alert('Link has been Inserted Successfully');</script>";
            redirect('server/imp/links', 'refresh');
        }
       
    }
	  
	  public function delcmd(){
	  	$id = $this->input->post('cmdid');
		if($this->Cmd->delcmd($id)){
			$msg = "Command Deleted Successfully";
			$this->commands($msg);
		}
	  }


		public function dellink(){
	  	$id = $this->input->post('linkid');
		if($this->Cmd->dellink($id)){
			$msg = "Command Deleted Successfully";
			$this->links($msg);
		}
	  }
		
    public function selectone(){
      $id = $this->input->post('cmdid');
      $table = $this->input->post('table');
    //              echo $id." ".$table;
      $result = $this->Cmd->select($id,$table);

        echo json_encode($result);

    }
    
    public function updateone(){
        $id = $this->input->post('id');
        $table = $this->input->post('table');
        if($table == 'imp_cmds'){
        $data = array(
            'title' => $this->input->post('cmdname'),
            'command' => $this->input->post('cmd'),
            'description' => $this->input->post('description')
        );
        
        if($this->Cmd->update($id,$table,$data)){
            $msg = "Command updated Successfully";
            $this->commands($msg);
        }
        }
        else{
        $data = array(
            'title' => $this->input->post('linkname'),
            'link' => $this->input->post('link'),
            'description' => $this->input->post('description')
        );
        
        if($this->Cmd->update($id,$table,$data)){
            $msg = "Link updated Successfully";
            $this->links($msg);
        }    
        }
                
    }
	
	
	public function searchresult(){
		$string = $this->input->post('string');
		$tab = $this->input->post('table');
		$result = $this->Cmd->search($string,$tab);
		echo json_encode($result);
	}
            
            
/////////////////// Tutorials --------------------------
public function tutos($error = NULL)
{               $data['show_tables'] = $this->Cmd->tutos_all();
		$data['error'] = $error;
		// $data['msg'] = $msg;
        $this->load->view('header');
        $this->load->view('dashboard');
        // $data['show_table'] = $this->Cmd->select_tutos();
        $this->load->view('imp/tutos',$data);
        $this->load->view('footer');
		
}

public function addtutos(){
	$title = $this->input->post('title');
	$description = $this->input->post('description');
	$config['upload_path'] = './public/uploads';
	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	$config['encrypt_name'] = TRUE;
	$this->load->library('upload',$config);
	if(!$this->upload->do_upload()){
		$error = $this->upload->display_errors();
		$this->tutos($error);
	}
else{
	$file_data = $this->upload->data();
	//print_r($file_data);
	$filename = base_url().'public/uploads/'.$file_data['file_name'];
	$data = array(
          'title' => $title,
          'featured_image' => $filename,
          'description' => $description  
        );
        if($this->Cmd->tutorials($data)){
//            echo "data inserted";
                redirect('server/imp/tutos');
            
        }
		}
	
		}
public function selecttuto(){
	$id = $this->input->post('tutoid');
	$table = $this->input->post('table');
	
	$result = $this->Cmd->tutos_one($id,$table);
	echo json_encode($result);
}          


}