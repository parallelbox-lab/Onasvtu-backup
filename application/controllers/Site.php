<?php

class Site extends CI_Controller{
 public function index(){
   

     $this->load->view('templates/header');
     $this->load->view('pages/index');
     $this->load->view('templates/footer');
   
 
     
 }

function message() {
        $this->load->config('buy');
        $this->load->library('email');
        
        $data = array(
        'name' => $this->input->post('name'),
        'email'=>$this->input->post('email'),
        'message'=>$this->input->post('message')
            );
            
  $result=$this->Account_model->saveData($data);
            if($result)
            {
            echo  1;	
            }
            else
            {
            echo  0;	
            }
            $from = "info@onasvtu.com.ng";
        $this->email->set_newline("\r\n");
        $this->email->from($from,'onasvtu message');
        $this->email->to('seunemma2018@gmail.com');
        $this->email->reply_to($data['email']);

                $this->email->subject("Offline message sent by $data[name]");

        $this->email->message($data['message']);

        $this->email->send();
          
        
    }
}