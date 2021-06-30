<?php
class Account_model extends CI_Model{
function create_user($data)
    {
        $this->db->insert('deusers', $data);
        return $this->db->insert_id();
    }
     function edit_pro($id){
        $query = $this->db->get_where('deprice',array('pid' => $id));
        return $query;
    }
    
public function getAll()
	{
		$result = $this->db->get('deusers');
		return $result->result_array();
	}
	public function get($accountNo)
	{
			$this->db->where('user_id',$accountNo);
		$query = $this->db->get('dedatatransaction');


		return $query->result_array();
	}
	Public function totalin(){
$this->db->select_sum('deposit');
$result = $this->db->get('datatransaction')->row();  
return $result->deposit;
	
	
	}


    public function record_get($accountNo,$limit, $start) {

       $this->db->limit($limit, $start);
         	$this->db->where('user_id',$accountNo);
              $this->db->order_by("date", "DESC");

        $query = $this->db->get("dedatatransaction");

        return $query->result();
   }
   
		public function users()
	{
		$query = $this->db->get('deusers');


		return $query->result_array();
		
	}
	 function alluser(){
$this->db->from('deusers');
return $this->db->count_all_results();
 }
function allt(){
$this->db->from('dedatatransaction');
return $this->db->count_all_results();
 }
		public function trans()
	{
		 $this->db->from('dedatatransaction');
      $this->db->join('deusers', 'dedatatransaction.user_id = deusers.user_id');
      $this->db->order_by("date", "DESC");

            $query = $this->db->get();

		return $query->result_array();
	}
	
		public function getwallet($accountNo)
	{
			$this->db->where('user_id',$accountNo);
						$this->db->where('user_id',$accountNo);
			$this->db->where('service','funding');

		$result = $this->db->get('dedatatransaction');
		return $result->result_array();
	}
    function login($username, $password)
    {
        $match = array(
            'username'=>$username,
            'password' => sha1($password),

        );

        $this->db->select()->from('deusers')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function adlogin($username, $password)
    {
        $match = array(
            'admin_id'=>$username,
            'password' => $password ,

        );

        $this->db->select()->from('admin')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function get_emails()
    {
        $this->db->select('email');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result_array();
    }
public function insertwallet($transaction)
	{
		 $this->db->from('dedatatransaction');
      $this->db->join('deusers', 'dedatatransaction.user_id = deusers.user_id');
		$this->db->insert('dedatatransaction', $transaction);
	}

    public function collect(){
        $query = $this->db->get('vtu_ser');
        return $query->result_array();
      }


    function fetch_price($id){
        $query = $this->db->get_where('price', array('id' => $id));
        return $query;
    }

 function mtndata()
 {
     $this->db->from('vtu_ser');
     $this->db->where('bundle_name',1);

     $query = $this->db->get();
     return $query->result_array();
 }
 function mtnfetch()
 {
  $result = $this->db->get('price');
		return $result->result_array();
 }
 function alltransaction($accountNo){
$this->db->from('dedatatransaction');
$this->db->where('user_id',$accountNo);
return $this->db->count_all_results();
 }

 function airteldata()
 {
     $this->db->from('vtu_ser');
     $this->db->where('bundle_name',4);

     $query = $this->db->get();
     return $query->result_array();
 }


 function glodata()
 {
     $this->db->from('vtu_ser');
     $this->db->where('bundle_name',1);

     $query = $this->db->get();
     return $query->result_array();
 }

 function etisalatdata()
 {
     $this->db->from('vtu_ser');
     $this->db->where('bundle_name',1);

     $query = $this->db->get();
     return $query->result_array();
 }

    function submit($accountNo,$amount,$status,$service){
        $data = array(
            
            'deposit' => $amount,
            'user_id' => $accountNo,
             'service' => $service,
            'status' => $status,
            'total_amount' => $amount,


        );
        
        $this->db->insert('datatransaction',$data);
                return $this->db->insert_id();;

    }
       function recievetopup($message,$amount,$service,$network,$number,$accountNo){
        $data = array(
            
            'price' => $amount,
            'number' => $number,
             'network' => $network,
            'status' => $message,
            'service' => $service,
            'total_amount' => $amount,
            'user_id' => $accountNo,
            
        );
        
        $this->db->insert('datatransaction',$data);
                return $this->db->insert_id();;

    }
     function recievegotv($message,$walletc,$service,$phone,$accountNo){
        $data = array(
            
            'price' => $walletc,
            'number' => $phone,
            'status' => $message,
            'service' => $service,
            'total_amount' => $walletc,
            'user_id' => $accountNo,
            
        );
        
        $this->db->insert('datatransaction',$data);
                return $this->db->insert_id();;

    }
     function recieveairtime($message,$amount,$phone,$accountNo,$service){
        $data = array(
            
            'price' => $amount,
            'number' => $phone,
            'status' => $message,
            'service' => $service,
            'total_amount' => $amount,
            'user_id' => $accountNo,
            
        );
        
        $this->db->insert('datatransaction',$data);
                return $this->db->insert_id();;

    }
       function recievesme($message,$amount,$network,$phone,$accountNo,$service){
        $data = array(
            
            'price' => $amount,
            'network' => $network,
            'number' => $phone,
            'status' => $message,
            'service' => $service,
            'total_amount' => $amount,
            'user_id' => $accountNo,
            
        );
        
        $this->db->insert('datatransaction',$data);
                return $this->db->insert_id();;

    }
     public function saveData($data) 
	{
		if($this->db->insert('deinbox',$data))
		{
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
    public function transaction($transaction)
	{

		$this->db->insert('transaction', $transaction);
    }

    public function getBalance($accountNo)
	{
		$this->db->select('SUM(deposit-price) as balance');
		$this->db->where('user_id',$accountNo);
		$result = $this->db->get('datatransaction');
		return $result->row_array();
    }

    public function account($accountNo)
	{
		$this->db->where('user_id',$accountNo);
		$result = $this->db->get('users');
		return $result->row_array();
    }
    
     public function save($data,$pid)
	{
   		$this->db->where('pid',$pid);
		$this->db->update('price',$data);
    }

    public function edit($data,$accountNo)
	{
		$this->db->where('user_id',$accountNo);
		$this->db->update('deusers',$data);
    }
    public function tvget(){
        $query = $this->db->get('vtu_category');
        return $query;
    }
	public function tv_category($category_id){
        $query = $this->db->get_where('vtu_ser', array('network' => $category_id));
        return $query;
    }
    public function get_user($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('deusers');
        return $query->row();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('user_id', $id);
        $this->db->update('deusers', $userdata);
    }
    public function update_pass($data,$email)
    {
      $this->db->where('email',$email);
		$this->db->update('deusers',$data);
    }
    public function deduct($data)
    {

		$this->db->insert('dedatatransactions',$data);
    }
}
