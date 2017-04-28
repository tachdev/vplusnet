<?php
class T2r_model extends CI_Model {
 


    public function __construct(){

        $this->load->database();
        $this->load->library('encrypt');
    }

    public function get_price_rate(){

    	$this->db->select('*');
        $this->db->from('rate_price');
        $query = $this->db->get();         
        return $query->result_array();

    }

    public function get_package($mobile){

    	  $this->db->select('*');
        $this->db->where('mobile_number', $mobile);
        $this->db->from('order');
        $this->db->join('package_buy', 'order.package_id = package_buy.id_text');
        $this->db->order_by('order_id','desc');
        $query = $this->db->get();         
        return $query->result_array();

    }

    public function getPackage($package_id){

       $this->db->select('*');
       $this->db->from('package_buy');
       $this->db->where('id_text', $package_id);
       $query = $this->db->get();         
       return $query->result_array();

    }

    public function getPackageCheckout($package_standard,$package_buffet1,$package_buffet2,$package_a2z){


       $this->db->select('id_text,package_short_name,package_price,package_price_on_demand');
       $this->db->from('package_buy');
       
       $package_selected = array('main_package', $package_standard , $package_buffet1 , $package_buffet2 , $package_a2z);  
       $package_selected = array_filter($package_selected); 

	   $this->db->where_in('des_name', $package_selected);
       $query = $this->db->get();         
       return $query->result_array();

    }

    public function insertOrder( $data){

      $this->load->helper('string');
      $salt = random_string('alnum',20);
			$data_array = array(

			    'mobile_number' =>  $data['mobile'] ,
			    'firstname'     =>  $data['firstname'] ,
			    'lastname'      =>  $data['lastname'] ,
          'total_price'   =>  $data['price'] ,
			    'date_start'    =>  date("Y-m-d H:i:s", strtotime($data['date_start'])),
			    'date_end'      =>  date("Y-m-d H:i:s", strtotime($data['date_end'])),
          'confirm_payment_active' => $data['tran_id'],
			    'package_id'    =>  $data['package'],
          'date_create'   =>  date("Y-m-d H:i:s"),
          'country'       =>  $data['country'],
          'status'        =>  $data['status'],
          'tran_id'       =>  $data['tran_id'],
          'method_payment'=>  $data['method_payment'],
          'salt'          =>  strtolower($salt) 

			);

			$this->db->insert('order', $data_array);	
      $order_id = $this->db->insert_id();		
      
      if($this->update_package_active($data['mobile'],$order_id)){

          return  $order_id;

      }else{

          return -1;
      }
      

    }

    public function update_package_active($mobile_number,$order_id){

        $data = array(

                 'package_active' => $order_id,

        );

        $this->db->where('mobile', $mobile_number );
        $this->db->update('customer', $data);

        return 1;

    }

    public function updateCustomer($mobile_number,$email,$firstname,$lastname,$id_card_number,$credit){

        $data = array(

               'email' => $email,
               'first_name' => $firstname,
               'last_name' => $lastname,
               'id_card_number' => $id_card_number,
               'credit' => $credit,
        );

        $this->db->where('mobile', $mobile_number );
        $this->db->update('customer', $data); 

        return 1;

    }

    public function insertPackageDetail($order_arr,$order_id){

    		$i = 0;
    		$insert_arr = array();

			foreach ($order_arr as $order_arrs) {

				$insert_arr[$i]['package_name']  = $order_arrs['package_short_name'];
				$insert_arr[$i]['package_price'] = $order_arrs['package_price'];
				$insert_arr[$i]['order_id']      = $order_id;
				$i++;

			}

			$this->db->insert_batch('order_detail', $insert_arr); 


    		return 1;

    }

    public function getOrderIdLast($mobile){

            $this->db->select('*');
            $this->db->from('order');
            $this->db->where('mobile_number', $mobile);
            $this->db->order_by('date_start' , 'desc');
            $this->db->limit(1);
            $query = $this->db->get();         
            return $query->result_array();

    }

    public function getOrderDetail($order_id){

            $this->db->select('*');
            $this->db->from('order_detail');
            $this->db->where('order_id' , $order_id);
            $query = $this->db->get();         
            return $query->result_array();

    }

    public function checkDuplicateEmail($mobile) {

        $this->db->where('mobile', $mobile);
        $query = $this->db->get('customer');
        $count_row = $query->num_rows();

        if ($count_row > 0){

            return 1;

        } else{

            return 0;
        }

    }

    public function insertcustomer($mobile,$email,$password,$firstname,$lastname,$id_card_number){

            $this->load->helper('security');
            $data = array(

               'mobile' =>  $mobile,
               'email'               =>   $email,
               'password'            =>   base64_encode($password),
               'first_name'          =>   $firstname,
               'last_name'           =>   $lastname,
               'id_card_number'      =>   $id_card_number,
            );

            $this->db->set('date_create', 'NOW()', FALSE);
            $this->db->set('credit', 0 );
            $this->db->insert('customer', $data);

            return 1;

    }

    public function check_login($customer_telephone,$password){

            $this->load->helper('security');
            $this->db->select('*');
            $this->db->from('customer');
            $this->db->where('mobile' , $customer_telephone);
            $this->db->where('password' , base64_encode($password));
            $query = $this->db->get();         
            return $query->result_array();

    }



    public function check_auth($mobile,$id_card_number){

            $this->db->select('*');
            $this->db->from('customer');
            $this->db->where('mobile' , $mobile);
            $this->db->where('id_card_number' , $id_card_number);
            $query = $this->db->get();         
            
            $query = $query->result_array();


            if(!empty($query)){

                $this->update_role($mobile,$id_card_number);

                return true;

            }else{

                return false;
            }

    }

    public function update_role($mobile,$id_card_number){

           $data = array('role' => 2);
           $this->db->where('mobile', $mobile);
           $this->db->where('id_card_number', $id_card_number);
           $this->db->update('customer', $data); 

    }

    public function get_call_detail($moblie_number){
 
            $endtime = strtotime(date("Y-m-d H:i:s"));
            $endtime = date("Y-m-d H:i:s", strtotime("-1 month", $endtime)); 

            $this->db->select('*');
            $this->db->from('call_used');
            $this->db->where('mobile_number', $moblie_number);
            //$this->db->where('call_start >=', $endtime );
            //$this->db->where('call_start <=', date("Y-m-d H:i:s") );
            $this->db->order_by('call_id','desc');
            $query = $this->db->get();         
            return $query->result_array();    

    }

    public function get_call_detail_by_month($moblie_number){
 
            $endtime = strtotime(date("Y-m-d"));
            $endtime = date("Y-m-d", strtotime("-1 month", $endtime)); 

            $this->db->select('*');
            $this->db->from('call_used');
            $this->db->where('mobile_number', $moblie_number);
            $this->db->where('call_start >=', $endtime );
            $this->db->where('call_start <=', date("Y-m-d") );
            $this->db->order_by('call_id','desc');
            $query = $this->db->get();         
            return $query->result_array();    

    }

    public function get_call_detail_by_filter($moblie_number , $date_start , $date_end){

            $this->db->select('*');
            $this->db->from('call_used');
            $this->db->where('mobile_number', $moblie_number);
            $this->db->where('call_start >=', date("Y-m-d H:i:s", $date_start)  );
            $this->db->where('call_start <=', date("Y-m-d H:i:s", $date_end) );
            $this->db->order_by('call_id','desc');
            $query = $this->db->get();         
            return $query->result_array();    

    }

    public function get_orderpackage($id){


            $this->db->select('*');
            $this->db->from('order');
            $this->db->where('order_id', $id);
            $this->db->join('package_buy', 'order.package_id = package_buy.id_text');
            $query = $this->db->get();

            return $query->result_array();

    }

    public function get_country(){


            $this->db->select('country_name');
            $this->db->from('rate_price');
            $query = $this->db->get();
            return $query->result_array(); 
    }

    public function insertPaymentConfirm($mobile,$email,$firstname,$lastname,$bank,$date,$hour,$minute,$money,$file,$tran_id){

            $data = array(

               'mobile' =>  $mobile ,
               'email'  =>  $email ,
               'firstname'     =>  $firstname ,
               'lastname'      =>  $lastname ,
               'bank'          =>  $bank ,
               'date'          =>  $date ,
               'hour'          =>  $hour,
               'minute'      =>    $minute,
               'money'      =>    $money,
               'file'       =>    $file,
               'tran_id'       =>  $tran_id,

            );

            $this->db->insert('payment_confirm', $data);
                        
            return 1; 
    }

    public function get_current_package($mobile_number,$package_active){

            $this->db->select('*');
            $this->db->from('order');  
            $this->db->where('mobile_number', $mobile_number);
            $this->db->where('order_id', $package_active);
            /*$this->db->where('date_end >=', date("Y-m-d") );*/
            $this->db->join('package_buy', 'order.package_id = package_buy.id_text');
            $this->db->order_by('order_id','desc');
            //$this->db->limit(1);
            $query = $this->db->get();
            return  $query->result_array();
            
            

    }

    public function get_package_active($mobile_number){

            $this->db->select('*');
            $this->db->from('customer');  
            $this->db->where('mobile', $mobile_number);
            //$this->db->limit(1);
            $query = $this->db->get();
            return  $query->result_array();

    }

    public function check_package_expire($mobile_number,$order_id){


            $this->db->select('date_end');
            $this->db->from('order');
            $this->db->where('mobile_number', $mobile_number);
            $this->db->where('order_id', $order_id);
            $this->db->limit(1);
            $query = $this->db->get();
            $data_expire = $query->result_array();
            
            if(!empty($data_expire)){

                $data_expire = strtotime($data_expire['0']['date_end'])."<br>";
                $time_current = strtotime("now");

                if($data_expire > $time_current){

                    return 1;

                }else{

                    return 2;
                }

            }else{

                return 0;
            }
            
    }

    public function get_firstname_lastname($mobile){


            $this->db->select('first_name,last_name');
            $this->db->from('customer');
            $this->db->where('mobile', $mobile);
            $query = $this->db->get();
            return $query->result_array();
            
    }

    public function get_bank_number(){

            $this->db->select('*');
            $this->db->from('bank');
            $query = $this->db->get();
            return $query->result_array();
            
    }

    public function get_order_data($tran_id){

            $this->db->select('*');
            $this->db->from('order');  
            $this->db->where('tran_id', $tran_id);
            $this->db->join('customer', 'order.mobile_number = customer.mobile');
            $query = $this->db->get();
            return  $query->result_array();

    }

    public function get_order_data_orderid($tran_id){

            $this->db->select('order_id');
            $this->db->from('order');  
            $this->db->where('tran_id', $tran_id);
            $query = $this->db->get();
            return  $query->result_array();

    }

    public function update_order_status($tran_id){

            $data = array(
               'status' => 2,
            );

            $this->db->where('tran_id', $tran_id);
            $this->db->update('order', $data); 

    }

    public function auth_order($tran_id , $token ){

           $this->db->select('*');
           $this->db->from('order');  
           $this->db->where('tran_id', $tran_id);
           $this->db->where('salt', $token);
           $query = $this->db->get();
           return  $query->result_array(); 
    }

    public function approve_update($did_number,$date_start,$tran_id){

           $data = array(

               'status' => 3,
               'date_start' => $date_start,
               'did_number' => $did_number

           );

           $this->db->where('tran_id', $tran_id);
           $this->db->update('order', $data); 

           return 1;


    }

    public function approve_status($tran_id){

           $data = array('status' => 3);

           $this->db->where('tran_id', $tran_id);
           $this->db->update('order', $data); 

           return 1;


    }


 
}

