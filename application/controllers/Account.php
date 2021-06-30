    <?php

class Account  extends CI_Controller{
 public function login(){

    if($this->session->userdata("user_id"))//If already logged in
    {
        redirect(base_url());//redirect to the blog page
    }
    $data['error'] = 0;
    if($this->input->post())//data inputed for login
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->Account_model->login($username, $password);
        if(!$user){
          $data['error'] = 1;
        }//when user doesn't exist
        else //when user exist
        {
            $this->session->set_userdata('user_id', $user['user_id']);
            $this->session->set_userdata('username', $user['username']);

            redirect('dashboard');
        }
      }
    $this->load->view('pages/login',$data);

 }
  public function forget_password()
    {
    	
	   $this->load->view('pages/forgotpassword',@$data);	
   }


 public function resetlink(){
    $email=$this->input->post('email');
   $result = $this->db->query("select * from deusers where email ='".$email."'")->result_array();
    if(count($result)>0){
          $this->load->config('buy');

        $this->load->library('email');
    $token = sha1(rand(1000,9999));
    

    $message ="There was recently a request to change the password for your account.


If you requested this password change, please click on the following link to reset your password ".base_url('account/reset?token=').$token."& email=$email.";
            $from = $this->config->item('smtp_user');
        $this->email->set_newline("\r\n");

    $this->email->from($from,'onasvtu');
    $this->email->to($email);
    $this->email->subject('Password Reset Confirmation');
    $this->email->message($message);
if ($this->email->send()) {
            $this->session->set_flashdata('message',"We’ve sent a reset password link to your email
.Resetlink expires after 15 minutes.");
redirect(base_url('account/forget-password'));

        } else {
            show_error($this->email->print_debugger());
        }
    }else{
$this->session->set_flashdata('message',"email not registered");
redirect(base_url('account/forget-password'));
    }
}
public function reset(){
    
    date_default_timezone_set("Africa/Lagos"); // set time_zone according to your location
$data['email'] = $this->input->get('email');

$now = date("Y-m-d H:i:s"); // your current time.
$expire_date = strtotime($now) + 900;
if ($now>$expire_date) {

$this->session->set_flashdata('message',"Your password reset link has expired. Please enter your email address to start the password reset process.");
    redirect('account/forget-password');
}
else
{

    $_SESSION['token'] = $data['token'];
  
    $this->load->view('pages/resetpass',$data);
    
}
    
}
public function updatepass(){
     $data['error'] = NULL;
  $email = $this->input->post('email');

    $this->load->library('form_validation');
    if(!$this->input->post('change_pass'))
		{
   
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('passwordc', 'confirm password', 'required|matches[password]');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    if($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('pages/resetpass', $data);
        $this->load->view('templates/footer', $data);
    }
    else {


        $newpass = $this->input->post('password');

         $data = array(
                'password' => sha1($newpass)

            );
            $user_id = $this->Account_model->update_pass($data,$email);
            redirect('account/login');
    }
    
  
    }

   
    
 
}
 public function logout() {
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');
    $data['message'] = "logout Successfully";
    $this->session->set_userdata($data);
    redirect(base_url());

}
 public function register(){
    if($this->session->userdata("user_id"))//If already logged in
    {
        redirect(base_url());//redirect to the blog page
    }
    $data['error'] = NULL;
    if($this->input->post())
    {
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required|is_unique[users.username]|min_length[5]'//is unique username in the user's table of DB
            ),
            array(
                'field' => 'number',
                'label' => 'Phone number',
                'rules' => 'trim|required|min_length[11]'//is unique username in the user's table of DB
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[8]|max_length[20]'
            ),

            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|is_unique[users.email]|valid_email',//is unique email in the user's table of DB
            ),
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('pages/register', $data);
        }
        else
        {
            $data = array(
                'username' => $this->input->post('username'),
                'number' => $this->input->post('number'),
                'email' => $this->input->post('email'),
                'password' => sha1($this->input->post('password')),

            );
            $user_id = $this->Account_model->create_user($data);
            $this->session->set_userdata('user_id',$user_id);
            $this->session->set_userdata('username',$this->input->post('username'));

            redirect('dashboard');
        }

    }


    $this->load->view('pages/register',$data);

 }
 
   public function admin_login(){

    if($this->session->userdata("admin_id"))//If already logged in
    {
        redirect('admin-home');//redirect to the blog page
    }
    $data['error'] = 0;
    if($this->input->post())//data inputed for login
    {
        $username = $this->input->post('admin_id', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->Account_model->adlogin($username, $password);
        if(!$user){
          $data['error'] = 1;
        }//when user doesn't exist
        else //when user exist
        {
            $this->session->set_userdata('admin_id', $user['user_id']);

            redirect('admin-home');
        }
      }
    $this->load->view('backend/login',$data);

  }

}
