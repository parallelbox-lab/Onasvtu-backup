<?php
class Dashboard extends  CI_Controller{
 function __construct(){
        parent::__construct();
 
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate,max-age=0');
header('Cache-Control: post-check=0, pre-check=0',false);
header('Pragma: no-cache');
    }
public function dash_home(){
$title = "Dashboard-home";

    if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
      $accountNo=$this->session->userdata('user_id');
      $data['account']=$this->Account_model->account($accountNo);
    $data['alltransaction']=$this->Account_model->alltransaction($accountNo);

      $data['balance']=$this->Account_model->getBalance($accountNo);

$this->load->view('templates/header');
$this->load->view('admin/home',$data);
$this->load->view('admin/footer');

    }


    public function electricity(){
$title ="Pay  electricity bills";
        if(!$this->session->userdata('user_id')){
            redirect('account/login');
          }
          $accountNo=$this->session->userdata('user_id');
          $data['balance']=$this->Account_model->getBalance($accountNo);
         

    $this->load->view('templates/header');
    $this->load->view('admin/electricity',$data);
    $this->load->view('admin/footer');


        }
        public function gotv(){
        $title = "buy gotv subscription ";
     if(!$this->session->userdata('user_id')){
            redirect('account/login');
          }   
          
    $accountNo=$this->session->userdata('user_id');
      $data['balance']=$this->Account_model->getBalance($accountNo);

$pay = $this->input->post('sub');
  if(isset($pay)) {


    $network = $this->input->post('goname',TRUE);
    $smartno = $this->input->post('gsmart',TRUE);
    $invoice = $this->input->post('goinvoice',TRUE);
    $billtype = "gotv";
    $customerno = $this->input->post('gocustno',TRUE);
    $phone   = $this->input->post('gphone',TRUE);
    $amount = $this->input->post('samt',TRUE);
    $walletc = $this->input->post('charges',TRUE);

    $bal  = $this->input->post('bal',TRUE);
    $accountNo=$this->session->userdata('user_id');
    $user_ref = time()+mt_rand();

    if($walletc > $bal){
      $data['verify']  = $this->session->set_flashdata('error', 'insufficient balance');


}else{


   $url ="https://mobileairtimeng.com/httpapi/multichoice?userid=07038884094&pass=0009efb3568b77b5f2d9&phone=".urlencode($phone)."&amt=".urlencode($amount)."&smartno=".urlencode($smartno)."&customer=".urlencode($network)."&invoice=".urlencode($invoice)."&billtype=".urlencode($billtype)."&customernumber=".urlencode($customerno)."&jsn=json";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec ($ch);
  if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
  curl_close ($ch);
$json_output = json_decode($request,true);
$service = "Gotv recharge ";
if($json_output['code']=="100") {
	//the request was successful
	
$data['message'] = $json_output['message'];
$message = $json_output['message'];

$this->Account_model->recievegotv($message,$walletc,$service,$phone,$accountNo);


} else {
	//something went wrong so echo the error
$data['message'] = $json_output['message'];

}


}

        
    }
  
  $this->load->view('templates/header');
  $this->load->view('admin/gotv',$data);
  $this->load->view('admin/footer'); 
        }
        
           public function dstv(){
           $title = "buy dstv subscription";
     if(!$this->session->userdata('user_id')){
            redirect('account/login');
          }   
          
     $accountNo=$this->session->userdata('user_id');
      $data['balance']=$this->Account_model->getBalance($accountNo);

$pay = $this->input->post('sub');
  if(isset($pay)) {


    $network = $this->input->post('goname',TRUE);
    $smartno = $this->input->post('gsmart',TRUE);
    $invoice = $this->input->post('goinvoice',TRUE);
    $billtype = "dstv";
    $customerno = $this->input->post('gocustno',TRUE);
    $phone   = $this->input->post('gphone',TRUE);
    $amount = $this->input->post('samt',TRUE);
    $walletc = $this->input->post('charges',TRUE);

    $bal  = $this->input->post('bal',TRUE);
    $accountNo=$this->session->userdata('user_id');
    $user_ref = time()+mt_rand();

    if($walletc > $bal){
      $data['verify']  = $this->session->set_flashdata('error', 'insufficient balance');


}else{


  $url ="https://mobileairtimeng.com/httpapi/multichoice?userid=07038884094&pass=0009efb3568b77b5f2d9&phone=".urlencode($phone)."&amt=".urlencode($amount)."&smartno=".urlencode($smartno)."&customer=".urlencode($network)."&invoice=".urlencode($invoice)."&billtype=".urlencode($billtype)."&customernumber=".urlencode($customerno)."&jsn=json";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec ($ch);
  if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
  curl_close ($ch);
$json_output = json_decode($request,true);
$service = "Gotv recharge ";
if($json_output['code']=="100") {
	//the request was successful
	
$data['message'] = $json_output['message'];
$message = $json_output['message'];

$this->Account_model->recievegotv($message,$walletc,$service,$phone,$accountNo);


} else {
	//something went wrong so echo the error
$data['message'] = $json_output['message'];

}


}

        
    }

  
  $this->load->view('templates/header');
  $this->load->view('admin/dstv',$data);
  $this->load->view('admin/footer'); 
        }
          public function startimes(){
          $title ="buy startimes subscription";
     if(!$this->session->userdata('user_id')){
            redirect('account/login');
          }   
          
    $accountNo=$this->session->userdata('user_id');

  
  $this->load->view('templates/header');
  $this->load->view('admin/startimes');
  $this->load->view('admin/footer'); 
        }
        public function sme_data(){
        $title ="Mtn sme data";
                if(!$this->session->userdata('user_id')){
            redirect('account/login');
          }
           $accountNo=$this->session->userdata('user_id');
  $data['datas']  = $this->Account_model->mtndata();
  $data['balance']=$this->Account_model->getBalance($accountNo);
 $pay = $this->input->post('sub');
  if(isset($pay)) {


    $network = $this->input->post('id',TRUE);
    $phone   = $this->input->post('number',TRUE);
    $amount = $this->input->post('amount',TRUE);
    $bal  = $this->input->post('bal',TRUE);
    $accountNo=$this->session->userdata('user_id');
    $user_ref = time()+mt_rand();

    if($amount > $bal){
      $data['verify']  = $this->session->set_flashdata('error', 'insufficient balance');


}else{


  $url = "https://mobileairtimeng.com/httpapi/datashare?userid=07038884094&pass=0009efb3568b77b5f2d9&network=1&phone=$phone&datasize=$network&jsn=json&user_ref=$user_ref";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec ($ch);
  if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
  curl_close ($ch);
  
$json_output = json_decode($request,true);
$service = "MTN SME $network MB";
if($json_output['code']=="100") {
	//the request was successful
	
$data['message'] = $json_output['message'];
$message = $json_output['message'];

$this->Account_model->recievesme($message,$amount,$network,$phone,$accountNo,$service);


} else {
	//something went wrong so echo the error
$data['message'] = $json_output['message'];

}


}

        
    }
    
 
  $this->load->view('templates/header');
  $this->load->view('admin/sme_data',$data);
  $this->load->view('admin/footer'); 
        }
        public function sme_buy(){
      $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);
  
  if(!$this->session->userdata('user_id')){
      redirect('account/login');
    }
   
     $this->load->view('templates/header');
  $this->load->view('admin/airtime-buy',$data);
  $this->load->view('admin/footer'); 
}
        public function buy(){
             if(!$this->session->userdata('user_id')){
            redirect('account/login');
          }
          $accountNo=$this->session->userdata('user_id');
          $data['balance']=$this->Account_model->getBalance($accountNo);
         $pay = $this->input->post('sub');
  if(isset($pay)) {

          $network  = $this->input->post('cboMobileNetwork',TRUE);
          $bundle  = $this->input->post('cboDataBundle'     ,TRUE);
          $number  = $this->input->post('phone'     ,TRUE);
          $amount  = $this->input->post('price'     ,TRUE);
          $bal  = $this->input->post('bal',TRUE);
          $accountNo=$this->session->userdata('user_id');
          $requestID = time()+mt_rand();


        
              if($amount > $bal){
                $data['verify']  = $this->session->set_flashdata('error', 'insufficient balance');

               redirect('dashboard/databundles',$data);

      }else{

      
        $url = "https://mobileairtimeng.com/httpapi/datatopup.php?userid=07038884094&pass=0009efb3568b77b5f2d9&network=$network&phone=$number&amt=$amount&jsn=json";
    $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec ($ch);
  curl_close ($ch);
  
$json_output = json_decode($request,true);
if($json_output['code']=="100") {
	//the request was successful
if($network=='15')
{$mtn = '   MTN ';}	
if($network=='6')
{$glo = '   Glo ';}	
if($network=='2')
{$eti = '   9mobile ';}	
$service = "Data bundle topup";

$data['message'] = $json_output['message'];
$message = $json_output['message'];
$this->Account_model->recievetopup($message,$amount,$service,$network,$number,$accountNo);



} else {
	//something went wrong so echo the error
$data['message'] = $json_output['message'];


}


        }
    }

    $this->load->view('templates/header');
    $this->load->view('admin/data_bundle',$data);
    $this->load->view('admin/footer');

        }
       
       
       
      function getCategory(){
        $id = $this->input->post('id',TRUE);
            $url = "https://mobileairtimeng.com/httpapi/get-items?userid=07038884094&pass=0009efb3568b77b5f2d9&service=$id
           ";
        $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
        $request = curl_exec($ch);
        $json_output = json_decode($request,true);
if($json_output['code']=="100") {
	//the request was successful
	
$json_output['data'];
      echo json_encode($json_output['data']);

}

       }
        public function fundwallet(){

            if(!$this->session->userdata('user_id')){
                redirect('account/login');
              }
              $accountNo=$this->session->userdata('user_id');
              $data['balance']=$this->Account_model->getBalance($accountNo);
            

        $this->load->view('templates/header');
        $this->load->view('admin/fundwallet',$data);
        $this->load->view('admin/footer');


            }

public function pay(){
  
  $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);
  $data['account']=$this->Account_model->account($accountNo);

  if(!$this->session->userdata('user_id')){
      redirect('account/login');
    }
    if($this->input->post())//data inputed for login
    {

    $price = $this->input->post('amount',TRUE);
    $data['amount'] = $price;
    }

  $this->load->view('templates/header');
  $this->load->view('admin/pay',$data);
  $this->load->view('admin/footer');
}
 private function getPaymentInfo($ref) {
     $token = "sk_live_0a814ffd32c57eff92429ad84efc4c31145de816";
        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/'.$ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer '.$token]
        );
        $request = curl_exec($ch);
        curl_close($ch);
        //
        $result = json_decode($request, true);
        //
        return $result['data'];

    }
   
    public function verify_payment($ref) {
        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/'.$ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.sk_live_0a814ffd32c57eff92429ad84efc4c31145de816]
        );
        $request = curl_exec($ch);
        curl_close($ch);
        //
        if ($request) {
            $result = json_decode($request, true);
            // print_r($result);
            if($result){
                if($result['data']){
                    //something came in
                    if($result['data']['status'] == 'success'){

               
                        header("Location: ".base_url().'dashboard/success/'.$ref);

                    }else{
                      
                        header("Location: ".base_url().'dashboard/fail/'.$ref);

                    }
                }
                else{

                    //echo $result['message'];
                    header("Location: ".base_url().'dashboard/fail/'.$ref);
                }

            }else{
              
                header("Location: ".base_url().'dashboard/fail/'.$ref);
            }
        }else{
           
            header("Location: ".base_url().'dashboard/fail/'.$ref);
        }

    }
public function success($ref) {
     if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
      $accountNo=$this->session->userdata('user_id');
        $data = array();
        $info = $this->getPaymentInfo($ref);
         //
        $data['amount'] = $info['amount']/100;

        $amount = $info['amount']/100;
$status = "wallet funding successful";
$service = "funding";
        //
        $this->Account_model->submit($accountNo,$amount,$status,$service);


        redirect('dashboard');

    
}

    public function fail() {

    } 
    public function wallet_history(){
if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
  $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);
      $data['transaction']=$this->Account_model->getwallet($accountNo);

  
 
  $this->load->view('templates/header');
  $this->load->view('admin/wallet-history',$data);
  $this->load->view('admin/footer');
}

public function airtime(){
if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
  $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);
 $pay = $this->input->post('sub');
  if(isset($pay)) {

    $network = $this->input->post('id',TRUE);
    $phone   = $this->input->post('phone_no',TRUE);
    $amount = $this->input->post('amount',TRUE);
    $bal  = $this->input->post('bal',TRUE);
    $accountNo=$this->session->userdata('user_id');
    $user_ref = time()+mt_rand();
    $timeout = 100;

    if($amount > $bal){
      $data['verify']  = $this->session->set_flashdata('error', 'insufficient balance');


}else{


  $url = "https://mobileairtimeng.com/httpapi/?userid=07038884094&pass=0009efb3568b77b5f2d9&network=$network&phone=$phone&amt=$amount&user_ref=$user_ref&jsn=json";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec ($ch);
  if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
  curl_close ($ch);
  //

$json_output = json_decode($request,true);
  $service = "airtime recharge";

if($json_output['code']=="100") {
	//the request was successful
	$data['message'] = $json_output['message'];

$message = $json_output['message'];

$this->Account_model->recieveairtime($message,$amount,$phone,$accountNo,$service);



} else {
	//something went wrong so echo the error

$data['message'] = $json_output['message'];

}

}


        //
  }
  
  $this->load->view('templates/header');
  $this->load->view('admin/airtime',$data);
  $this->load->view('admin/footer');
}
public function airtime_buy(){
    if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
      $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);
  
  if(!$this->session->userdata('user_id')){
      redirect('account/login');
    }
    if(!$this->input->post('submit'))//data inputed for login
    {

    $network = $this->input->post('id',TRUE);
    $phone   = $this->input->post('phone_no',TRUE);
    $amount = $this->input->post('amount',TRUE);
    $bal  = $this->input->post('bal',TRUE);
    $accountNo=$this->session->userdata('user_id');
    $user_ref = time()+mt_rand();
    $timeout = 100;
     $callback_url ="http://localhost/b/dashboard/airtime";

    if($amount > $bal){
      $data['verify']  = $this->session->set_flashdata('error', 'insufficient balance');


}else{


  $url = "https://mobileairtimeng.com/httpapi/?userid=07038884094&pass=0009efb3568b77b5f2d9&network=$network&phone=$phone&amt=$amount&user_ref=$user_ref&jsn=json";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
  $request = curl_exec ($ch);
  if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
  curl_close ($ch);
  //
$json_output = json_decode($request,true);
if($json_output['code']=="100") {
	//the request was successful
	
$message = $json_output['message'];
$servce = "airtime recharge";
$this->Account_model->recieve($message,$service,$amount,$network,$phone,$accountNo);

   redirect('dashboard/airtime');


} else {
	//something went wrong so echo the error
    redirect('dashboard/airtime');


}


}

        //
    }
    
 
}

 function verifyPayment($user_ref){
$url = "https://mobileairtimeng.com/httpapi/status?userid=07038884094&pass=0009efb3568b77b5f2d9&transid=$user_ref
";
	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_URL => $url,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POST => true,
	CURLOPT_ENCODING => "",
	CURLOPT_FOLLOWLOCATION=> true,
	CURLOPT_MAXREDIRS => 10,   
	CURLOPT_POSTREDIR => 3,   
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	));
	$response =  curl_exec($curl); 
	 curl_close($curl);
	return $response;
 
 }
public function tv_cable(){
     if(!$this->session->userdata('user_id')){
      redirect('account/login');
    }
  $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);

  $this->load->view('templates/header');
  $this->load->view('admin/tv-sub',$data);
  $this->load->view('admin/footer');
}
public function transactions(){
     if(!$this->session->userdata('user_id')){
      redirect('account/login');
    }
     $accountNo=$this->session->userdata('user_id');
  $data['balance']=$this->Account_model->getBalance($accountNo);
        

 $config = array();
        $config["base_url"] = base_url() . "dashboard/transaction";
        $config["total_rows"] = $this->Account_model->Alltransaction($accountNo);
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		
        $data["links"] = $this->pagination->create_links();

        $data['transaction'] = $this->Account_model->record_get($accountNo, $config["per_page"],$page);

   
  
     $this->load->view('templates/header');
  $this->load->view('admin/transactions',$data);
  $this->load->view('admin/footer');
}

                public function editprofile(){
                    if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
                  $accountNo=$this->session->userdata('user_id');
                  $data['account']=$this->Account_model->account($accountNo);
                  $data['balance']=$this->Account_model->getBalance($accountNo);
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
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'trim|required|valid_email',//is unique email in the user's table of DB
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
                            'username' => $this->input->post('username'),
                            'number' => $this->input->post('number'),
                            'email' => $this->input->post('email'),

                        );
                        $user_id = $this->Account_model->edit($data,$accountNo);



                         $this->session->set_flashdata('success', 'recorded successfully');
                        redirect('dashboard');
                    }

                }
                  $this->load->view('templates/header');
            $this->load->view('admin/editprofile',$data);
            $this->load->view('admin/footer');
                }
              

            function fetch_price(){
                $id = $this->input->post('id',TRUE);
                $data = $this->Account_model->fetch_price($id)->result();
                echo json_encode($data);
            }
                public function change_pass()
	{
    if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
    $accountNo=$this->session->userdata('user_id');
    $data['balance']=$this->Account_model->getBalance($accountNo);

    $this->load->library('form_validation');
    if(!$this->input->post('change_pass'))
		{
    $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check');
    $this->form_validation->set_rules('newpass', 'new password', 'required');
    $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    if($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('admin/change_pass', $data);
        $this->load->view('admin/footer', $data);
    }
    else {


        $newpass = $this->input->post('newpass');

        $this->Account_model->update_user($accountNo, array('password' => sha1($newpass)));
redirect('dashboard');
    }
    
  
    }
  }
    public function password_check($oldpass)
    {
        if(!$this->session->userdata('user_id')){
        redirect('account/login');
      }
      $accountNo=$this->session->userdata('user_id');

        $user = $this->Account_model->get_user($accountNo);

        if($user->password !== sha1($oldpass)) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }

        return true;
    }
}
