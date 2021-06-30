<?php
class Admin extends  CI_Controller{

    public function adhome(){
      if(!$this->session->userdata('admin_id')){
        redirect('admin/admin-login');
      }
 $data['allusers']=$this->Account_model->alluser();
 $data['allt']=$this->Account_model->allt();
$data['total'] =$this->Account_model->totalin();
  $url = "https://mobileairtimeng.com/httpapi/balance.php?userid=07038884094&pass=0009efb3568b77b5f2d9";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec ($ch);
  
  curl_close ($ch);
  $data['request'] = $request;

      $this->load->view('backend/header');
      $this->load->view('backend/home',$data);
      $this->load->view('backend/footer');

    }
    public function trans(){
      if(!$this->session->userdata('admin_id')){
        redirect('admin/admin-login');
      }
          $data['transaction']=$this->Account_model->trans();

      $this->load->view('backend/header');
      $this->load->view('backend/trans',$data);
      $this->load->view('backend/footer');

    }
    public function users(){
      if(!$this->session->userdata('admin_id')){
        redirect('admin/admin-login');
      }
          $data['users']=$this->Account_model->users();
          $data['allusers']=$this->Account_model->alluser();

      $this->load->view('backend/header');
      $this->load->view('backend/all_user',$data);
      $this->load->view('backend/footer');

    }
      public function success(){
      if(!$this->session->userdata('admin_id')){
        redirect('admin/admin-login');
      }
          

      $this->load->view('backend/header');
      $this->load->view('backend/success');
      $this->load->view('backend/footer');

    }
    public function deduct(){
        if(!$this->session->userdata('admin_id')){
        redirect('admin/admin-login');
      }
           $data['error'] = NULL;

			$data['accounts']=$this->Account_model->getAll();
			if($this->input->post())
                  {
                    $config = array(
                        array(
                            'field' => 'user_id',
                            'label' => 'Username',
                            'rules' => 'trim|required|'//is unique username in the user's table of DB
                        ),
                        array(
                            'field' => 'phoneno',
                            'label' => 'Phone number',
                            'rules' => 'trim|required|'//is unique username in the user's table of DB
                        ),

 array(
                            'field' => 'reason',
                            'label' => 'Reason for deduction',
                            'rules' => 'trim|required|'//is unique username in the user's table of DB
                        ),
                        array(
                            'field' => 'amount',
                            'label' => 'Amount',
                            'rules' => 'trim|required|',//is unique email in the user's table of DB
                        ),
                    );
                    $this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');                    if($this->form_validation->run() == FALSE)
                    {
                        
                          }
                    else
                    {
                                                
                        $data = array(
                            'user_id' => $this->input->post('user_id'),
                            'number' => $this->input->post('phoneno'),
                            'email' => $this->input->post('email'),
                             'total_amount' => $this->input->post('amount'),
                           'price' => $this->input->post('amount'),



                        );
                        $this->Account_model->deduct($data);



                         $this->session->set_flashdata('success', 'recorded successfully');
                    }
                  }
       $this->load->view('backend/header');
      $this->load->view('backend/deduct',$data);
      $this->load->view('backend/footer');  
    }
    public function edit_sme(){
      $data['datas']  = $this->Account_model->mtnfetch();
 
                                 
                
     $this->load->view('backend/header');
      $this->load->view('backend/edit-sme',$data);
      $this->load->view('backend/footer');
    }
    public function edit(){
    
                                  $id = $_GET['id'];
     $query = $this->Account_model->edit_pro($id);
       
 $data['error'] = NULL;
 
            $data['datas'] = $query->result();

                      $pid = $this->input->post('pid');

                  if($this->input->post())
                  {

                    $config = array(
                        
                        
                        array(
                            'field' => 'name',
                            'label' => 'name',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),
                        array(
                            'field' => 'price',
                            'label' => 'Price',
                            'rules' => 'required'//is unique username in the user's table of DB
                        ),


                
                    );
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules($config);
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                    }
                    else
                    {
                        $data = array(
                     'name' => $this->input->post('name'),

                            'price' => $this->input->post('price'),

                        );
                        
                        
                        $this->Account_model->save($data,$pid);



                         $this->session->set_flashdata('success', 'recorded successfully');
                        redirect('admin/sme-data');
                    }

                }
                       
     $this->load->view('backend/header');
      $this->load->view('backend/edit-dis',$data);
      $this->load->view('backend/footer');
        
    }
     public function fund(){
      if(!$this->session->userdata('admin_id')){
        redirect('admin/admin-login');
      }
			$data['accounts']=$this->Account_model->getAll();

	if(!$this->input->post('buttonSubmit')){
				$data['message']='';
	      $this->load->view('backend/header');
				$this->load->view('backend/fund',$data);
					      $this->load->view('backend/footer');			}
			else{
				if(!$this->form_validation->run('transaction')){
					$data['message']=validation_errors();
					$this->session->set_flashdata('error', 'some error occured try again');
					      $this->load->view('backend/header');
				$this->load->view('backend/fund',$data);
					      $this->load->view('backend/footer');

		
					$transaction['user_id']=$this->input->post('user_id');
					$transaction['deposit']=$this->input->post('amount');
					$transaction['total_amount']=$this->input->post('amount');
					$transaction['status']='wallet funding successful';
					$transaction['service']='funding ';

					$this->Account_model->insertwallet($transaction);
					redirect(base_url()."admin/success");
					$this->session->set_flashdata('success', 'Wallet funded successfully');
				}
			}
    

    }
}
